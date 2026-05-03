# CryptoPandemic
[`https://www.cryptopandemic.com`](https://www.cryptopandemic.com)

Website source code and version control for [CryptoPandemic](https://cryptopandemic.com) — a Web3 Marketing & Analytics agency specializing in data-driven marketing, on-chain analytics, and content creation for the Solana ecosystem.

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
├── public_html/        ← live site files (synced from server)
└── scripts/
    └── cpanel-sync.sh  ← cPanel sync script
```
