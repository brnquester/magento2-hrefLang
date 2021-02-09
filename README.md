# Magento 2 HREF LANG SEO with Multi Store Support

<div align="center">

[![GitHub release](https://img.shields.io/github/v/release/bruno-canada/magento2-hrefLang)](https://GitHub.com/bruno-canada/magento2-hrefLang/releases/) [![GitHub license](https://img.shields.io/github/license/bruno-canada/magento2-hrefLang)](https://github.com/bruno-canada/magento2-hrefLang/blob/master/LICENSE) [![Github all releases](https://img.shields.io/github/downloads/bruno-canada/magento2-hrefLang/total)](https://github.com/bruno-canada/magento2-hrefLang/releases/) [![GitHub forks](https://img.shields.io/github/forks/bruno-canada/magento2-hrefLang.svg?style=social&label=Fork&maxAge=2592000)](https://github.com/bruno-canada/magento2-hrefLang/network)

</div>

---

<p align="center"> This Magento 2 multi store extension adds the alternate hreflang tag for: Pages, Product and Category.
    <br>
</p>

# Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
    - [Prerequisites](#prerequisites)
    - [Installing via Composer](#viacomposer)
    - [Manual Instalation](#manualinstallation)
    - [Module Management](#modulemanagement)

# About <a name = "about"></a>

<p>This extension solves a SEO specific problem of content duplication for Google and other search engines.</p>

<p>It automatically adds the HREFLANG tag to pages, product and category of Magento considering your multi store structure.</p>

<p>Google Hreflang reference: https://support.google.com/webmasters/answer/189077?hl=en</p>
<p>MOZ Hreflang reference: https://moz.com/learn/seo/hreflang-tag</p>

# Getting Started <a name = "getting_started"></a>

## Prerequisites <a name = "prerequisites"></a>

```
PHP 7+
Magento 2
Zend Framework
Composer 1.10.16
```

## Installing via Composer <a name = "viacomposer"></a>

1. Access your Magento 2 root directory
2. Run `composer require brunocanada/hreflang`
3. Double-check if it is installed and enabled, run `bin/magento module:status brunocanada/hreflang`

## Manual Instalation <a name = "manualinstallation"></a>

1) Download this package;

2) Create the following folder inside your Magento 2 installation

```
app/code/BrunoCanada/HrefLang
```

3) Paste the files of this package inside the created folder (step 2)

4) Run the following command inside your Magento 2 installation:

```
$ bin/magento setup:upgrade
```

## Module Management <a name = "modulemanagement"></a>

- Enable module: `bin/magento module:enable brunocanada/hreflang`
- Disable module: `bin/magento module:disable brunocanada/hreflang`
