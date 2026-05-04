# CryptoPandemic

Website source code and version control for [CryptoPandemic](https://cryptopandemic.com) — a Web3 Marketing & Analytics agency specializing in data-driven marketing, on-chain analytics, and content creation for the Solana ecosystem.

**Landing:** [`cryptopandemic.com`](https://www.cryptopandemic.com)

## Stack
- PHP backend
- HTML / CSS / JS frontend

## Infrastructure
- Hosting: Namecheap Stellar Plus (cPanel)
- CDN & DNS: Cloudflare

## Local Sync
Files are pulled from the cPanel server using `scripts/cpanel-sync.sh` and committed manually.

## Structure
```
cryptopandemic.com/
├── public_html/          ← site source (live)
├── scripts/
│   └── cpanel-sync.sh    ← cPanel sync script
├── seo/                  ← seo-related files (not live)
│   ├── htaccess
│   ├── robots.txt
│   ├── llms.txt
│   ├── meta-tags.html
│   └── schema.json
└── README.md
```
