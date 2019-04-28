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

Jigsaw will when installed, will create a default directory structure for the project:

![](https://i.imgur.com/M5HwMze.png)

The `/source` directory contains the actual contents of your site. This is where all of your site's pages, CSS, Javascript, images, etc. will be kept.

At the root of the directory, Jigsaw provides a `config.php` file where you can specify configuration settings for your site, along with `webpack.mix.js` for settings related to compiling your assets.