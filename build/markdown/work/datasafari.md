---
title: "DataSafari — Open-Source Python Library for Data Science"
description: "DataSafari is a Python library by George Dreemer that simplifies complex data science tasks, compressing the full data workflow into a one-liner API across 11 functions and 4 subpackages. Available on PyPI."
url: "https://georgedreemer.com/work/datasafari"
markdown_url: "https://georgedreemer.com/work/datasafari.md"
language: "en"
source: "dev_html/work/datasafari.html"
source_sha256: "f7a78f10a64e9af057e1b9fe729cf4cc320bc08a920042baf9bae36ea5cc5f9d"
---

# DataSafari — Open-Source Python Library for Data Science

DataSafari is a Python library that simplifies complex data science tasks — compressing exploration, transformation, evaluation, and prediction into a single one-liner API. One import. One function call. One plain-English report.

George built DataSafari to solve a specific problem he watched play out at university: data science curricula built around Stata, R, and SPSS — tools with decades of academic inertia — while Python's better-maintained, faster, and more capable ecosystem went largely untaught. The researcher who understands their domain deeply but doesn't want to spend two hours reading Scipy docs to run a single test was the exact person the existing tooling failed. DataSafari is the attempt to fix that: one import, one function call, one plain-English report.

The library spans four subpackages — Explorer, Transformer, Evaluator, Predictor — mirroring the natural stages of any data workflow. Every function handles its stage end-to-end: automatic statistical method selection, dynamic assumption validation, composite-score model evaluation. Each call returns a plain-language report with findings and actionable recommendations — results that are interpretable, not just computed.

## Experience Snapshot

Data Safari

**Role:** Creator & Maintainer

**Type:** Data Science Python Library

**Links:** [Website](<https://datasafari.dev>)
 [Docs](<https://datasafari.dev/docs>)
 [GitHub](<https://github.com/ETA444/datasafari>)
 [PyPI](<https://pypi.org/project/datasafari/>)

### Highlights

- Architected 4-subpackage API from scratch: Explorer · Transformer · Evaluator · Predictor

- Unified 10 scientific libraries — NumPy, pandas, scikit-learn, scipy, statsmodels & more — into a single one-liner workflow

- Implemented automatic statistical test routing in predict\_hypothesis() — detects variable types, checks assumptions, selects and runs the correct test

- Built composite-score ML model evaluation engine with automated hyperparameter tuning in predict\_ml()

- Implemented statistical assumption checking across normality, variance, dtype, and contingency in Evaluator

- Designed multi-method outlier detection covering Z-score, IQR & Mahalanobis distance in Explorer

- Engineered 250+ pytest tests across 11 test files covering all 4 subpackages

- Built full GitHub Actions CI/CD pipeline: lint · test · security scan · build · docs deploy · publish

- Configured CI matrix to run across Python 3.9, 3.10, 3.11 & 3.12 in parallel

- Secured codebase with Bandit static scanning and SafetyCLI dependency auditing

- Tracked and closed 136 GitHub issues across the full development lifecycle

- Packaged and published to PyPI via an automated Poetry + Twine pipeline

- Automated Sphinx docs build and live-server deployment via rsync over SSH on every push

- Authored full Sphinx documentation site with custom Furo theme at datasafari.dev/docs

- Designed and launched dedicated product website at datasafari.dev

## In Numbers

**11:** Functions shipped

**10:** Libraries unified into one API

**7:** Decisions automated per hypothesis test

**10+:** Pipeline decisions automated per ML run

**666:** Commits pushed

**12:** Automated steps per CI run

**250+:** Pytest tests written

**136:** Issues closed

## Stack

### Code

- Python

- HTML

- CSS

- Bash / Zsh

### Python Libraries

- pandas

- NumPy

- SciPy

- scikit-learn

- scikit-optimize

- category-encoders

- PyTorch

- HuggingFace

- Matplotlib

- seaborn

- Plotly

- statsmodels

### Dev Toolchain

- pytest

- tox

- Sphinx

- Read the Docs

- PyPI

- Poetry

- Setuptools

- GitHub Actions

### Dev Tools & IDEs

- VS Code

- Jupyter

- DataSpell

- Git

- GitHub

### Platforms & Infra

- cPanel

- Namecheap

- Cloudflare

### Design & Creative

- Illustrator

- Photoshop

## Abilities

Ability Domains

- Engineering

- Product

- Growth

- Data

### Python Library Architecture

Domain: engineering

Ability description:

Designed the library from scratch as a four-subpackage system: Explorers, Transformers, Evaluators, and Predictors. The structure reflects the natural data science workflow. Built a consistent public API around a one-liner philosophy, making complex operations available through a single function with sensible defaults and room for deep customisation.

Skills developed through this ability:

- Package Architecture

- API Design

- Open-Source Engineering

### OSS Release Engineering

Domain: engineering

Ability description:

Managed the full open-source release lifecycle, from project scaffolding with Poetry and Setuptools to versioned PyPI distribution. Configured `pyproject.toml`, package metadata, and dependencies to produce reproducible builds that users can install with a single pip command.

Skills developed through this ability:

- Release Management

- Dependency Management

- Distribution Engineering

### Automated Test Suite Design

Domain: engineering

Ability description:

Built a test suite of more than 250 tests covering edge cases, input validation, and statistical output correctness across all subpackages. Configured tox to run the suite across multiple Python environments, helping datasafari work for as many users as possible.

Skills developed through this ability:

- Test Engineering

- Quality Assurance

- Multi-Environment Testing

### CI/CD Pipeline Construction

Domain: engineering

Ability description:

Designed and built a 12-step GitHub Actions pipeline that runs automatically on every push. It performs lint checks, runs the full tox test matrix, and publishes to PyPI when a release is tagged. Closed 136 issues over the life of the project, validating every fix through the pipeline before merge.

Skills developed through this ability:

- Continuous Integration

- Automated Deployment

- Pipeline Design

### Technical Documentation Engineering

Domain: engineering

Ability description:

Built the complete datasafari documentation system, including Sphinx source authoring, an automated build pipeline, and a custom public site at datasafari.dev. Wrote every page of the documentation: installation guides, function references, usage examples, and conceptual explanations for all 11 modules.

Skills developed through this ability:

- Documentation Systems

- Technical Writing

- Developer Experience

### Defensive Python & Input Validation

Domain: engineering

Ability description:

Implemented rigorous input validation and error handling across all 11 public functions. Each accepts DataFrames, column names, and optional parameter combinations that can fail silently in naive code. I built runtime branching logic to detect data types, sample sizes, and edge cases, then route execution to the correct algorithm path. Every error message is written for the caller, not the developer. In an API, the message *is* the UI & UX together.

Skills developed through this ability:

- Defensive Programming

- Runtime Type Handling

- Error Design

### Exploratory Data Analysis Systems

Domain: data

Ability description:

Designed and implemented the full Explorers subpackage. `explore_df()` profiles datasets, `explore_num()` performs numerical analysis including outlier detection via Z-score, IQR, and Mahalanobis distance, and `explore_cat()` profiles categorical data, including Shannon entropy to quantify diversity.

Skills developed through this ability:

- Exploratory Analysis

- Outlier Detection

- Statistical Profiling

### Statistical Assumption Verification

Domain: data

Ability description:

Built the Evaluators subpackage to automate the assumption checks that data scientists typically perform before analysis. `evaluate_normality()` selects an appropriate test, such as Shapiro-Wilk or Anderson-Darling, based on the sample; `evaluate_variance()` dynamically applies Levene's, Bartlett's, or Fligner's test; and `evaluate_contingency_table()` checks whether Chi-square conditions are met.

Skills developed through this ability:

- Assumption Testing

- Statistical Inference

- Dynamic Test Selection

### Automated Hypothesis Testing

Domain: data

Ability description:

`predict_hypothesis()` takes a DataFrame, a grouping variable, and a target variable — and autonomously selects and executes the correct statistical test. The function detects variable types, verifies normality and variance homogeneity, chooses between Chi-square, Fisher's exact, t-test, ANOVA, Mann-Whitney, Kruskal-Wallis, and others, then outputs test statistics, p-values, and a plain-language interpretation.

Skills developed through this ability:

- Hypothesis Testing

- Automated Inference

- Statistical Interpretation

### End-to-End ML Pipeline Automation

Domain: data

Ability description:

`predict_ml()` orchestrates the complete machine learning workflow in one call — automatic preprocessing (scaling, encoding, vectorisation), multi-model evaluation using a user-configurable composite score weighted across multiple metrics, and automated hyperparameter tuning via grid search, random search, or Bayesian optimisation. Returns ranked, tuned models with full performance breakdowns.

Skills developed through this ability:

- ML Pipeline Design

- Hyperparameter Optimisation

- Model Selection

### Data Transformation Engineering

Domain: data

Ability description:

Implemented the Transformers subpackage to handle the full data preparation stage. `transform_num()` covers standardisation, min-max scaling, log and power transforms, winsorisation, and interaction term creation. `transform_cat()` handles label encoding, one-hot encoding, target encoding, and ML-based category cleaning — all chainable and parameterised for reproducible pipelines.

Skills developed through this ability:

- Feature Engineering

- Data Cleaning

- Preprocessing Pipeline Design

### Developer API & UX Design

Domain: product

Ability description:

Built datasafari around a deliberate developer experience philosophy — consistent naming across all 11 functions, predictable argument patterns, and sensible defaults that make the library immediately usable without reading the docs. Complex workflows like full ML pipelines and hypothesis testing are exposed as single function calls, hiding implementation complexity behind a clean interface.

Skills developed through this ability:

- Interface Design

- Developer Experience

- Abstraction Design

### Documentation Site Development

Domain: product

Ability description:

Designed and hand-coded datasafari.dev — the public documentation and landing site for the library. Built with custom HTML, CSS, and JavaScript, the site presents the library's philosophy, quick-start guides, and full API reference in a clean, readable format. Integrated with Sphinx and Read the Docs for automated doc generation, while the landing experience was crafted entirely from scratch.

Skills developed through this ability:

- Web Development

- Information Architecture

- Content Strategy

### Open-Source Product Lifecycle Management

Domain: product

Ability description:

Managed datasafari as a solo product owner, from its initial concept and roadmap through versioned releases, issue tracking, and ongoing maintenance. Closed 136 issues while balancing engineering quality, user-facing documentation, and public discoverability. Built systems that kept the project sustainable and reproducible beyond any single release.

Skills developed through this ability:

- Product Ownership

- Roadmap Execution

- Solo Founding

### Brand Identity & Visual Systems

Domain: growth

Ability description:

Created the complete visual identity for datasafari, including the logo, banner artwork, icon set, and graphic assets used across GitHub, PyPI, and the documentation site. Designed every visual touchpoint a user encounters when discovering the library, giving an independent open-source project a coherent, professional brand from day one.

Skills developed through this ability:

- Brand Design

- Visual Identity

- Graphic Asset Production

## Works

Image: [GitHub Actions showing full CI/CD pipeline overview](<https://www.georgedreemer.com/public_img/datasafari/datasafari-lib_cioverview.jpg>)

Image: [GitHub Actions showing build process steps](<https://www.georgedreemer.com/public_img/datasafari/datasafari-lib_cibuild.jpg>)

Engineering

### CI/CD Pipeline Architecture

- Built a 12-step GitHub Actions pipeline covering linting, the test matrix, security scanning, and conditional PyPI publishing on tagged releases

- Configured tox to run the full pytest suite in parallel across Python 3.9, 3.10, 3.11, and 3.12 on every push

- Automated Sphinx docs build and live deployment to datasafari.dev via rsync over SSH, triggered on every merge to main

- Closed 136 GitHub issues over the development lifecycle, each fix validated through the pipeline before merge

Image: [DataSafari GitHub issues list showing 136 issues with labels, milestones, and status tags across the development lifecycle](<https://www.georgedreemer.com/public_img/datasafari/datasafari-github_1.jpg>)

Image: [DataSafari GitHub milestones page showing structured development phases with issue counts and completion progress](<https://www.georgedreemer.com/public_img/datasafari/datasafari-github_2.jpg>)

Image: [DataSafari GitHub issue showing detailed problem description with context, expected behaviour, and reproduction steps](<https://www.georgedreemer.com/public_img/datasafari/datasafari-github_3.jpg>)

Image: [DataSafari GitHub issue showing solution description with implementation notes and closing commit reference](<https://www.georgedreemer.com/public_img/datasafari/datasafari-github_4.jpg>)

Image: [DataSafari GitHub labels page showing full tagging taxonomy: bug, enhancement, documentation, and domain labels](<https://www.georgedreemer.com/public_img/datasafari/datasafari-github_5.jpg>)

Image: [DataSafari GitHub showing issue linked to milestone and pull request with full traceability](<https://www.georgedreemer.com/public_img/datasafari/datasafari-github_6.jpg>)

Engineering

### Issue Tracking & Milestone System

- Filed and closed 136 GitHub issues across the full development lifecycle — each with a structured problem description, reproduction context, and a written solution note on close

- Organised work into versioned milestones mapping issues to release targets, giving every fix a traceable path from report to merged commit

- Built a full label taxonomy — bug type, domain, priority, and status — so the issue board reads as a professional engineering backlog, not a personal to-do list

Image: [Terminal output showing pytest run: 250+ tests passed](<https://www.georgedreemer.com/public_img/datasafari/datasafari-lib_pytest.jpg>)

Engineering

### Test Suite & Quality Gates

- Wrote 250+ pytest tests across 11 test files, covering edge cases, input validation, and statistical output correctness for all four subpackages

- Integrated Bandit for static security scanning and SafetyCLI for dependency vulnerability auditing — both run automatically on every push

- Configured tox to enforce test-passing across all supported Python versions before any release is tagged

Image: [DataSafari library structure showing four subpackages: explorer, transformer, evaluator, predictor](<https://www.georgedreemer.com/public_img/datasafari/datasafari-lib_subpackages.jpg>)

Engineering

### 4-Subpackage Library Architecture

- Designed the full package structure from scratch: `explorer/`, `transformer/`, `evaluator/`, `predictor/` — each a self-contained module with its own public API surface

- Every public function follows a consistent interface contract: DataFrame in, structured report out — one-liner by design, full depth available via parameters

- Configured Poetry, Setuptools, and `pyproject.toml` for reproducible builds and one-command PyPI distribution

Image: [explore\_num output showing structured report with outlier detection, normality testing, and multicollinearity analysis](<https://www.georgedreemer.com/public_img/datasafari/datasafari-lib_explorenum.jpg>)

Data

### Automated EDA — `explore_num()`

- Single function call produces full numerical profiling: outlier detection via Z-score, IQR, and Mahalanobis distance, normality testing, skewness, kurtosis, and multicollinearity

- Output is a structured plain-English report with findings and actionable recommendations — not raw numbers

- Automatically selects the correct statistical method based on sample size and data characteristics at runtime

Image: [predict\_ml output showing ranked model comparison table with composite scores](<https://www.georgedreemer.com/public_img/datasafari/datasafari-lib_predictml.jpg>)

Data

### End-to-End ML Pipeline — `predict_ml()`

- One call handles preprocessing, multi-model training, composite-score-based evaluation weighted across user-configurable metrics, and ranked output

- Automated hyperparameter tuning via grid search, random search, or Bayesian optimisation — user selects strategy, library handles execution

- 10 pipeline decisions automated per ML run: encoding, scaling, model selection, tuning strategy, evaluation weighting, and recommendation generation

Image: [DataSafari website landing page at datasafari.dev showing slogan, code animation and branding artwork](<https://www.georgedreemer.com/public_img/datasafari/datasafari-website_1.jpg>)

Image: [DataSafari website showing package philosophy with clear parallel between data science workflow and library subpackage structure](<https://www.georgedreemer.com/public_img/datasafari/datasafari-website_5.jpg>)

Image: [DataSafari website showing installation instructions](<https://www.georgedreemer.com/public_img/datasafari/datasafari-website_2.jpg>)

Image: [DataSafari website showing simple usage example and documentation prompt for further exploration](<https://www.georgedreemer.com/public_img/datasafari/datasafari-website_3.jpg>)

Image: [DataSafari documentation welcome page at datasafari.dev/docs in light mode, showing quick-start guide and function reference links](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_0.jpg>)

Image: [DataSafari documentation welcome page at datasafari.dev/docs in dark mode, showing quick-start guide and function reference links](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_1.jpg>)

Image: [DataSafari documentation showing installation instructions and pip install command](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_6.jpg>)

Image: [DataSafari documentation quick start guide showing explorers subpackage overview and example usage](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_2.jpg>)

Image: [DataSafari documentation quick start guide showing transformers subpackage overview and example usage](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_3.jpg>)

Image: [DataSafari documentation quick start guide showing evaluators subpackage overview and example usage](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_4.jpg>)

Image: [DataSafari documentation quick start guide showing predictors subpackage overview and example usage](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_5.jpg>)

Image: [DataSafari quick start guide showing example usage of one-line hypothesis testing function with automatic test selection and output interpretation](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_7.jpg>)

Image: [DataSafari quick start guide showing example usage of one-line predict\_ml function with automatic preprocessing, model selection, and hyperparameter tuning](<https://www.georgedreemer.com/public_img/datasafari/datasafari-docs_8.jpg>)

Product

### Website & Documentation

- Hand-coded the full landing site at datasafari.dev — custom HTML, CSS, and JavaScript, designed from scratch to communicate the library's philosophy and quick-start path

- Authored every page of the Sphinx-generated API docs: installation guides, function references, usage examples, and conceptual explanations for all 11 modules

- Integrated automated docs build and live-server deployment into the CI/CD pipeline — docs update on every push to main without manual intervention

Image: [DataSafari github repository banner showing logo and tagline 'Complex Workflows, Simple Solutions.' on a desert landscape background](<https://camo.githubusercontent.com/8dd84d085f9831fccd31bebe8e468cb7eb3d767b798dd706a4c8ae9801d9838f/68747470733a2f2f7777772e646174617361666172692e6465762f646f63732f5f7374617469632f7468756d62732f64732d6272616e64696e672d7468756d622d6d61696e2d7765622e706e67>)

Image: [DataSafari light and dark mode logo variations on clean backgrounds](<https://www.georgedreemer.com/public_img/datasafari/datasafari-branding_2.jpg>)

Image: [DataSafari mini logo used for favicon and library icon, on coding background](<https://www.georgedreemer.com/public_img/datasafari/datasafari-branding_3.jpg>)

Growth

### Brand Identity & Open-Source Presence

- Created the complete DataSafari visual identity from scratch: logo, banner artwork, icon set, and all graphic assets across GitHub, PyPI, and the documentation site

- Published to PyPI with automated versioning and structured release notes, making the library publicly installable via `pip install datasafari`

- Maintained a professional open-source presence: README, changelog, issue labels, and a coherent brand that makes a solo-built library read as a production-grade tool

## In Depth

#### Built for the Professor Who Doesn't Have Time to Learn Python

At RUG, the standard data science curriculum ran on Stata, R, and SPSS. These tools have decades of academic inertia behind them, not necessarily because they are better, but because professors mastered them before Python became a serious data science platform and have not had time to switch. As a result, students graduate knowing tools that industry has largely moved beyond, while Python's better-maintained, faster, free, and more capable ecosystem goes untaught. Professors and other departmental staff have too much on their hands for a full curriculum redesign.

DataSafari started as a direct response to that gap. The hypothesis was simple: bring Python's best statistical and ML libraries together under a single interface that requires no configuration and produces plain-English output. That removes the adoption barrier for the person who most needs it: a researcher who knows their field, understands what a normality test is, but doesn't want to spend two hours reading `scipy.stats` documentation to run one. One import, one function call, and one readable report.

The iPhone analogy is imperfect but directionally useful. R is like Android: powerful, flexible, and beloved by people willing to configure it. DataSafari aims to provide an iOS-like layer on top of Python's underlying ecosystem.

That philosophy drove every product decision. It's why `method='all'` is the default rather than a required argument. It's why output is printed in plain English with interpretive tips instead of being returned as a raw matrix. It's why the function names are verbs such as `explore`, `transform`, `evaluate`, and `predict`. They describe what the user wants to do, not what the statistics are called. The target user was never a Python expert. It was someone who needed to do real data science work without letting the tooling become the hardest part of the day.

#### Input Engineering: Ask Less, Do More

The hardest design constraint in DataSafari was self-imposed: a user should be able to call any function with just a DataFrame and a column list and get something genuinely useful back. No configuration, statistical expertise, or output parsing should be required. The library decides the rest.

Making that work means every function carries a significant amount of internal decision-making that the user never sees. `explore_num()` takes a single `method` parameter that defaults to `'all'` — which means it runs correlation analysis, distribution analysis, three separate outlier detection algorithms (Z-score, IQR, and Mahalanobis distance), and a multicollinearity check in one call. The user passed two arguments. The library ran seven analyses and printed a structured plain-English report. That ratio — minimal input to maximal output — is the whole product.

But the API was also designed not to limit experts. Every function offers a full set of parameters for users who want to go deeper: `method='outliers_iqr'` to isolate a single analysis, `output='return'` to get structured DataFrames instead of printed text, and `threshold_z=2` to tighten the Z-score cutoff for a stricter definition of an outlier. The one-liner is the entry point; the parameters are the escape hatches. Designing that layered experience, where simple stays simple and complexity remains possible, required thinking through every plausible user intent before writing a single line of logic, then ensuring the implementation served them all without conflict.

#### Error Handling as User Experience

A Python traceback is the last thing a researcher wants to see at 11pm before a deadline. Every public function in DataSafari raises structured, specific errors before it does any computation — and the error messages are written for the person calling the function, not for the developer who wrote it.

The error handling layer sits entirely above the statistical logic. Before `explore_num()` touches a single column, it checks: is `df` actually a DataFrame? Is `numerical_variables` a list? Are the strings in that list real column names that exist in `df`? Are those columns actually numerical? Is the list non-empty? Is the DataFrame non-empty? Is `method` one of the seven valid options? Is `output` one of the two valid options? Is `threshold_z` a number? That's nine distinct failure modes caught and surfaced with a clear message and a correct-usage example — before a single line of analysis runs. Every one of those checks exists because someone, at some point during development and testing, made exactly that mistake.

The discipline behind this is that a library function has no UI. The error message *is* the UI. If a user passes a string where a list is expected and gets back `TypeError: 'str' object is not iterable`, that's a failed product moment — they have to reverse-engineer what went wrong from a generic Python exception. If they get back `"explore_num(): The numerical_variables parameter must be a list of variable names. Example: var_list = ['var1', 'var2', 'var3']"`, they fix it in ten seconds and move on. That difference is entirely a writing problem, not a coding one, and it took as much time to get right as the statistical methods themselves.

#### The Hidden 80%: What It Actually Takes to Ship a Python Package

The data science code, including the statistical methods, ML pipeline, and EDA logic, represents perhaps 20% of what it took to ship DataSafari. The other 80% consists of infrastructure decisions that tutorials rarely cover and that took weeks of research to get right.

The production configuration alone spans a dozen files beyond the package source itself:

- `pyproject.toml:` unified build, dependency, and tool configuration via Poetry and Setuptools

- `bumpversion.cfg:` automated semantic versioning with bump2version, wired to the CI pipeline to auto-increment on tagged releases

- `tox.ini:` multi-environment test runner across Python 3.9 to 3.12, so no version-specific regression ships undetected

- `setup.cfg` and `MANIFEST.in:` package inclusion rules to control exactly what ends up in the wheel and sdist

- `pyproject.toml:` Bandit config block, with the static security scan tuned to ignore specific false-positive patterns in the codebase

- `LICENSE:` GPL-3.0, chosen deliberately: use it freely, but derivatives stay open

- `Sphinx's conf.py:` the full documentation build configuration, including the Napoleon extension for Google-style docstrings, the Furo theme, and cross-reference resolution

Every one of those files required learning a tool I hadn't used before, reading its documentation, making it work with the others, and then making the entire stack reproducible in GitHub Actions. The CI pipeline didn't run cleanly on the first push or even the tenth. Over the development lifecycle, 136 issues were filed and closed, most of them documenting this kind of integration friction and its solution.

Documentation was another substantial layer of the work, especially the documentation users encounter inside the library: the `docstrings`. Every public function in DataSafari has a complete docstring with typed parameters, return types, raised exceptions, and a working code example that produces real output. More than 20 functions, including non-public ones, are documented to the point that `help(ds.explore_num)` gives a new user everything needed to use the function correctly without opening a browser. Writing that documentation took longer than writing some of the functions themselves.
