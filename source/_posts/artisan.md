---
title: "Understanding Netlify's artisan-static blog template"
date: 2019-04-27
comments: false
---
Artisan-static is an advanced starter template for building a static Jigsaw blog hosted on Netlify with analytics, comments, code highlighting, a contact form, a CMS, and more.

$[Source on GitHub](https://github.com/raniesantos/artisan-static) &nbsp; / &nbsp; $[Example implementation](https://artisan-static-demo.netlify.com/)

In this article we are going to explore the ingredients that make up this template.

# Composer

$[Composer](https://getcomposer.org/) is a dependency manager for PHP. In order to install it, you need the a PHP executable. You can obtain PHP from the $[PHP download page](https://www.php.net/downloads.php).

Under Windows you have to download the thread-safe version of the binary Zip. Unzip and locate php.exe in the distribution. The path to this file is required by Composer's installer.

# Jigsaw

$[Jigsaw](https://jigsaw.tighten.co/) is a framework for rapidly building static sites [ see also: [Jigsaw on GitHub](https://github.com/tightenco/jigsaw)  ].

Jigsaw can be $[installed](https://jigsaw.tighten.co/docs/installation/) by Composer.

Jigsaw when installed, will create a default directory structure for the project:

![](https://i.imgur.com/M5HwMze.png)

The `/source` directory contains the actual contents of your site. This is where all of your site's pages, CSS, Javascript, images, etc. will be kept.

At the root of the directory, Jigsaw provides a `config.php` file where you can specify configuration settings for your site, along with `webpack.mix.js` for settings related to compiling your assets.

You can then study Jigsaw's documentation on $[Building and previewing](https://jigsaw.tighten.co/docs/building-and-previewing/), $[Compiling assets](https://jigsaw.tighten.co/docs/compiling-assets/), $[Creating site content](https://jigsaw.tighten.co/docs/content/), $[Site variables](https://jigsaw.tighten.co/docs/site-variables/), $[Helper methods](https://jigsaw.tighten.co/docs/helper-methods/), $[Page metadata](https://jigsaw.tighten.co/docs/page-metadata/), $[Collections](https://jigsaw.tighten.co/docs/collections/) and $[Deploying](https://jigsaw.tighten.co/docs/deploying-your-site/) .

Jigsaw by default uses $[Laravel Mix](https://laravel.com/docs/5.8/mix) for asset compilation.

Our project is a Jigsaw application, designed for deployment to Netlify.

For configuring Jigsaw's installation, the project contains a `composer.json` file:

```
{
    "require": {
        "tightenco/jigsaw": "^1.2"
    }
}
```

This way Jigsaw can be simply installed with `composer install`.

Of course you have to install npm packages too, with `yarn install`.

When everything has been installed, you can use `yarn watch` to build the project locally and open it in the browser.

As a requirement for deployment to Netlify the project contains a `netlify.toml`file:

```
[build]

command = "npm run production"
publish = "build_production"
environment = { PHP_VERSION = "7.2" }

```

# Sass

[Sass](https://sass-lang.com/) is a CSS extension language that’s compiled to CSS. It allows you to use variables, nested rules, mixins, functions, etc. with a fully CSS-compatible syntax. Sass has two syntaxes, the original, __sass syntax__ that uses identation for structuring ( with `.sass` extension ) and the __css syntax__ that uses curly braces for structuring ( with `.css` extension ). Our project uses the css syntax. For details see the $[Sass documentation](https://sass-lang.com/documentation).

Laravel can deal with $[compiling](https://laravel.com/docs/5.8/mix#sass) Sass to CSS.

