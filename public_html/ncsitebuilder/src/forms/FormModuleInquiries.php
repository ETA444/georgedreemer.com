<?php

class FormModuleInquiries
{
	const FILTER_ID = 'id';
	const FILTER_PAGE_ID = 'pageId';
	const FILTER_FORM_ID = 'formId';
	const FILTER_DATE_TIME_LTE = 'dateTimeLte';
	const FILTER_DATE_TIME_GTE = 'dateTimeGte';

	/** @var int|string */
	private $id;
	/** @var int|string */
	private $pageId;
	/** @var int|string */
	private $formId;
	/** @var FormModuleInquiriesField[] */
	private $fields;
	/** @var string */
	private $dateTime;

	private static $logLockFile = null;

	public static function create($pageId = null, $formId = null)
	{
		return new self($pageId, $formId);
	}

	public function __construct($pageId = null, $formId = null)
	{
		$this->pageId = $pageId;
		$this->formId = $formId;
		$this->dateTime = date('Y-m-d H:i:s');
	}

	private function populate(array $f)
	{
		$this->id = isset($f['id']) ? $f['id'] : null;
		$this->pageId = isset($f['pageId']) ? $f['pageId'] : null;
		$this->formId = isset($f['formId']) ? $f['formId'] : null;
		$this->dateTime = isset($f['createdAt']) ? $f['createdAt'] : null;

		$this->fields = array();
		$fields = isset($f['fields']) ? $f['fields'] : array();
		foreach ($fields as $field)
			$this->fields[] = (is_object($field) || is_array($field)) ? FormModuleInquiriesField::fromJson($field) : $field;
	}

	function getId()
	{
		return $this->id;
	}

	function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	function getFormId()
	{
		return $this->formId;
	}

	function setFormId($formId)
	{
		$this->formId = $formId;
		return $this;
	}

	function getPageId()
	{
		return $this->pageId;
	}

	function setPageId($pageId)
	{
		$this->pageId = $pageId;
		return $this;
	}

	function getDateTime()
	{
		return $this->dateTime;
	}

	function setDateTime($dateTime)
	{
		$this->dateTime = $dateTime;
		return $this;
	}

	function getFields()
	{
		return $this->fields;
	}

	function setFields($fields)
	{
		$this->fields = $fields;
		return $this;
	}

	/**
	 * @return int|string
	 * @throws ErrorException
	 */
	public function save()
	{
		self::lockLogFile(true);
		$listArr = self::readLogFile();
		if ($this->id) {
			foreach ($listArr as $idx => $liArr) {
				if (isset($liArr['id']) && $liArr['id'] == $this->id) {
					$listArr[$idx] = $this->jsonSerialize();
					break;
				}
			}
		} else {
			$thisArr = $this->jsonSerialize();
			$newId = self::getNewId($listArr);
			$thisArr['id'] = $newId;
			$listArr[] = $thisArr;
			$this->id = $newId;
		}
		self::writeLogFile($listArr);
		self::unlockLogFile();
		return $this->id;
	}

	/**
	 * @return bool true if was found and deleted
	 * @throws ErrorException
	 */
	public function delete()
	{
		$deleted = false;
		if ($this->id) {
			self::lockLogFile(true);
			$listArr = self::readLogFile();
			foreach ($listArr as $idx => $liArr) {
				if (isset($liArr['id']) && $liArr['id'] == $this->id) {
					array_splice($listArr, $idx, 1);
					$deleted = true;
					break;
				}
			}
			if ($deleted) {
				self::writeLogFile($listArr);
			}
			self::unlockLogFile();
		}
		return $deleted;
	}

	/**
	 * @param array $filter
	 * @return int number of deleted records
	 * @throws ErrorException
	 */
	public static function deleteByFilter(array $filter = array())
	{
		$deleted = 0;

		self::lockLogFile(true);
		$listArr = self::readLogFile();
		foreach ($listArr as &$liArr) {

			if ($filter && is_array($filter)) {
				if (isset($filter[self::FILTER_ID]) && $filter[self::FILTER_ID]
					&& (!isset($liArr['id']) || $liArr['id'] != $filter[self::FILTER_ID])) continue;
				if (isset($filter[self::FILTER_FORM_ID]) && $filter[self::FILTER_FORM_ID]
					&& (!isset($liArr['formId']) || $liArr['formId'] != $filter[self::FILTER_FORM_ID])) continue;
				if (isset($filter[self::FILTER_PAGE_ID]) && $filter[self::FILTER_PAGE_ID]
					&& (!isset($liArr['pageId']) || $liArr['pageId'] != $filter[self::FILTER_PAGE_ID])) continue;
				if (isset($filter[self::FILTER_DATE_TIME_LTE]) && $filter[self::FILTER_DATE_TIME_LTE]
					&& (!isset($liArr['dateTime']) || $liArr['dateTime'] > $filter[self::FILTER_DATE_TIME_LTE])) continue;
				if (isset($filter[self::FILTER_DATE_TIME_GTE]) && $filter[self::FILTER_DATE_TIME_GTE]
					&& (!isset($liArr['dateTime']) || $liArr['dateTime'] < $filter[self::FILTER_DATE_TIME_GTE])) continue;

				$liArr = null;
				$deleted++;
			}
		}
		$listArr = array_filter($listArr);
		if ($deleted) {
			self::writeLogFile($listArr);
		}
		self::unlockLogFile();
		return $deleted;
	}

	/**
	 * @param ?array[] &$listArr
	 * @return int
	 * @throws ErrorException
	 */
	private static function getNewId(&$listArr = null)
	{
		if (!$listArr) $listArr = self::readLogFile();
		$max = 0;
		foreach ($listArr as $liArr) {
			if (is_numeric($liArr['id']) && (!$max || $max < intval($liArr['id']))) {
				$max = intval($liArr['id']);
			}
		}
		return (++$max);
	}

	/**
	 * @return self[]
	 * @throws ErrorException
	 */
	public static function findByFormId($formId)
	{
		if (!$formId) return null;
		$list = self::findAll(array(self::FILTER_FORM_ID => $formId));
		return $list;
	}

	/**
	 * @return self
	 * @throws ErrorException
	 */
	public static function findById($id)
	{
		if (!$id) return null;
		$list = self::findAll(array(self::FILTER_ID => $id));
		return array_shift($list);
	}

	/**
	 * @return self[]
	 * @throws ErrorException
	 */
	public static function findAll(array $filter = array(), $limit = null)
	{
		$list = array();
		self::lockLogFile(true); // we have to lock for writing because readLogFile() calls fixLogFile(), which may actually write data to the file.
		$listArr = self::readLogFile();
		self::unlockLogFile();
		foreach ($listArr as $f) {
			if ($limit !== null) {
				if ($limit <= 0)
					break;
				$limit--;
			}
			if ($filter && is_array($filter)) {
				if (isset($filter[self::FILTER_ID]) && $filter[self::FILTER_ID]
					&& (!isset($f['id']) || $f['id'] != $filter[self::FILTER_ID])) continue;
				if (isset($filter[self::FILTER_FORM_ID]) && $filter[self::FILTER_FORM_ID]
					&& (!isset($f['formId']) || $f['formId'] != $filter[self::FILTER_FORM_ID])) continue;
				if (isset($filter[self::FILTER_PAGE_ID]) && $filter[self::FILTER_PAGE_ID]
					&& (!isset($f['pageId']) || $f['pageId'] != $filter[self::FILTER_PAGE_ID])) continue;
				if (isset($filter[self::FILTER_DATE_TIME_LTE]) && $filter[self::FILTER_DATE_TIME_LTE]
					&& (!isset($f['dateTime']) || $f['dateTime'] > $filter[self::FILTER_DATE_TIME_LTE])) continue;
				if (isset($filter[self::FILTER_DATE_TIME_GTE]) && $filter[self::FILTER_DATE_TIME_GTE]
					&& (!isset($f['dateTime']) || $f['dateTime'] < $filter[self::FILTER_DATE_TIME_GTE])) continue;
			}
			$o = new self();
			$o->populate($f);
			$list[] = $o;
		}
		return $list;
	}

	/**
	 * @return array[]
	 * @throws ErrorException 
	 */
	private static function readLogFile()
	{
		self::fixLogFile();
		$itemsFile = FormModule::getLogFile();
		$parsed = [];
		if (is_file($itemsFile)) {
			$contents = '';
			if (($fh = @fopen($itemsFile, 'r')) !== false) {
				while (!feof($fh)) {
					$contents .= fread($fh, 2048);
				}
				fclose($fh);
			} else {
				throw new ErrorException('failed reading log file');
			}
			$parsed = json_decode($contents, true);
			if ($parsed === null) {
				throw new ErrorException('failed parsing orders log file');
			}
		}
		$itemsFile = FormModule::getLogFileJsonl();
		if (is_file($itemsFile)) {
			if (($fh = @fopen($itemsFile, 'r')) !== false) {
				while (!feof($fh)) {
					$contents = fgets($fh);
					if ($contents !== false) {
						$contents = json_decode($contents, true);
						if ($contents === null) {
							throw new ErrorException('failed parsing orders log file');
						}
						$parsed[] = $contents;
					}
				}
				fclose($fh);
			} else {
				throw new ErrorException('failed reading log file');
			}
		}
		return $parsed;
	}

	/**
	 * @param array[] $arr
	 * @return bool
	 * @throws ErrorException
	 */
	private static function writeLogFile($arr)
	{
		$itemsFile = FormModule::getLogFileJsonl();
		if (($fh = fopen($itemsFile, 'w')) !== false) {
			foreach ($arr as $f) {
				$json = json_encode($f);
				if ($json === null || $json === false) {
					throw new ErrorException('failed encoding orders log file');
				}
				fwrite($fh, $json .  PHP_EOL);
			}
			fclose($fh);

			$itemsFile = FormModule::getLogFile();
			if (is_file($itemsFile)) { // @note: backup old log file
				rename($itemsFile, $itemsFile . '.bak');
			}
		} else {
			throw new ErrorException('failed writing log file');
		}
	}

	public function fromJson($data)
	{
		$this->populate($data);
	}

	public function jsonSerialize()
	{
		$fields = array();
		foreach ($this->fields as $k => $item) {
			$fields[$k] = ($item instanceof FormModuleInquiriesField) ? $item->jsonSerialize() : $item;
		}
		return array(
			'id' => $this->id,
			'pageId' => $this->pageId,
			'formId' => $this->formId,
			'createdAt' => $this->dateTime,
			'fields' => $fields,
		);
	}

	public function jsonSerializeApi()
	{
		$result = (object)$this->jsonSerialize();
		return $result;
	}

	/**
	 * Update log file format to have new structure.
	 */
	private static function fixLogFile()
	{
		return;
	}

	/**
	 * @param bool $forWriting
	 * @param bool $blocking
	 * @return bool|null Returns NULL if lock file could not be created or opened, TRUE if lock succeeded and FALSE if there was an error or locking did not block while $block parameter was set to FALSE.
	 */
	private static function lockLogFile($forWriting, $blocking = true)
	{
		if (self::$logLockFile === null)
			self::$logLockFile = @fopen(FormModule::getLogFile() . ".lock", "c");
		if (!self::$logLockFile)
			return null;
		return @flock(self::$logLockFile, ($forWriting ? LOCK_EX : LOCK_SH) | ($blocking ? 0 : LOCK_NB));
	}

	private static function unlockLogFile()
	{
		if (!self::$logLockFile)
			return;
		@flock(self::$logLockFile, LOCK_UN);
	}
}
