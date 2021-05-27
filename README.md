# OnePage for Silverstripe

![Packagist Version](https://img.shields.io/packagist/v/Zazama/OnePage?style=flat-square)
![GitHub](https://img.shields.io/github/license/Zazama/OnePage?style=flat-square)
![Scrutinizer code quality (GitHub/Bitbucket)](https://img.shields.io/scrutinizer/quality/g/Zazama/OnePage?style=flat-square)

## Introduction

OnePage allows you to create OnePagers by adding a OnePage page-type that allows you to add custom child pages that will be rendered on one page.

## Requirements

* silverstripe/framework ^4.0

This module was only tested on the newest 4.7.3.

## Installation

```
composer require zazama/onepage
```

## Usage

All you have to do is extend BaseChildPage and you're ready to go!

```php
use Zazama\OnePage\BaseChildPage;

class ContentChildPage extends BaseChildPage {
  /*...*/
}
```

Then create a Layout template for your new Page (ContentChildPage in this example).
