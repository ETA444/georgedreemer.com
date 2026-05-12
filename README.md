# georgedreemer.com

Website source and version control for [georgedreemer.com](https://georgedreemer.com) — George Dreemer's personal portfolio and brand hub. The site serves as the central point of entry across all ventures, projects, and creative work.

**Live:** [`georgedreemer.com`](https://georgedreemer.com)

## Stack
- PHP backend
- HTML / CSS / JS frontend

## Infrastructure
- Hosting: Namecheap Stellar Plus (cPanel)
- CDN & DNS: Cloudflare

## Local Sync
Files are pulled from the cPanel server using `scripts/cpanel-sync.sh` and committed manually.

## SEO Files
Canonical versions of all SEO config live in `seo/`. After editing, copy to `public_html/` before syncing to server:
- `htaccess` → deploy as `.htaccess` in site root
- `robots.txt` → deploy to site root
- `llms.txt` → deploy to site root
- `meta.html` → reference snippet for `<head>`
- `schema.json` → reference snippet for pre-`</body>`

## Structure
```
georgedreemer.com/
├── public_html/          ← live site files (synced from server)
├── scripts/
│   └── cpanel-sync.sh    ← cPanel → local sync script
├── seo/
│   ├── htaccess
│   ├── robots.txt
│   ├── llms.txt
│   ├── meta.html
│   └── schema.json
└── README.md
```

## Ventures & Related Properties

| Name | Description | URL |
|---|---|---|
| DataSafari | Open-source Python data science library | [datasafari.dev](https://datasafari.dev) |
| CryptoPandemic | Web3 Marketing & Analytics agency on Solana | [cryptopandemic.com](https://cryptopandemic.com) |
| DREEMCORP | Creative agency & media production | [dreemcorp.com](https://dreemcorp.com) |
| SkipSchoolMakeMoney | Clothing brand | [skipschoolmakemoney.com](https://skipschoolmakemoney.com) |
| thoughtbubble | Social media platform | [georgedreemer.com/thoughtbubble](https://georgedreemer.com/thoughtbubble) |
| anabolic musick | Motivational music  mix channel | [@anabolicmusick](https://www.youtube.com/@anabolicmusick) |
| dreemer.xyz | Digital business card | [dreemer.xyz](https://dreemer.xyz) |

## Find George on Social Platforms

- X / Twitter: [x.com/444eta](https://x.com/444eta)
- LinkedIn: [linkedin.com/in/georgedreemer](https://linkedin.com/in/georgedreemer)
