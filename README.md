# StoreTeam Disable Compare Products for Magento 2 (2.4.x & Hyvä Ready)

A lightweight, production-safe Magento 2 module that cleanly disables **Compare Products** across category pages, product pages, sidebars, header links, search results, and Page Builder widgets — without core hacks or broken JavaScript.

**Why disable Compare Products?**
- Cuts wasted bot crawl budget on `/catalog/product_compare/add/` URLs
- Reduces DOM clutter next to "Add to Cart" buttons on mobile
- Eliminates redundant KnockoutJS / `customer/section/load` compare payloads on Luma themes

Full step-by-step documentation (including Hyvä Theme tips):
**[How to Disable Compare Products in Magento 2 — StoreTeam Guide](https://storeteam.net/how-to-disable-compare-products-in-magento-2)**

---

## Compatibility
- Magento Open Source & Adobe Commerce **2.4.3 – 2.4.8+**
- PHP **7.4, 8.1, 8.2, 8.3, 8.4**
- Works cleanly with **Luma**, **Porto**, and **Hyvä Theme**

## Installation via Composer
```bash
composer require storeteam/module-disable-compare
bin/magento module:enable StoreTeam_DisableCompare
bin/magento setup:upgrade
bin/magento cache:flush
```

## Manual Installation
1. Copy the module files into `app/code/StoreTeam/DisableCompare/`.
2. Run:
```bash
bin/magento module:enable StoreTeam_DisableCompare
bin/magento setup:upgrade
bin/magento cache:flush
```

---

## Need Magento 2 Speed Optimization or Hyvä Theme Development?
Built & maintained by **[StoreTeam — Magento 2 & Hyvä Specialist Agency](https://storeteam.net/magento-development-company)** serving US & UK merchants.
- [Free 50-Point Magento 2 Site Audit](https://storeteam.net/magento-site-audit)
- [Hyvä Theme Development Services](https://storeteam.net/hyva-theme-development)
- [Magento 2 Speed Optimization](https://storeteam.net/magento-speed-optimization)

## License
MIT License
