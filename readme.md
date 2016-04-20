# BlackHole error handler

[![Build Status](https://img.shields.io/travis/weew/php-app-error-handler-black-hole.svg)](https://travis-ci.org/weew/php-app-error-handler-black-hole)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-app-error-handler-black-hole.svg)](https://scrutinizer-ci.com/g/weew/php-app-error-handler-black-hole)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-app-error-handler-black-hole.svg)](https://coveralls.io/github/weew/php-app-error-handler-black-hole)
[![Version](https://img.shields.io/packagist/v/weew/php-app-error-handler-black-hole.svg)](https://packagist.org/packages/weew/php-app-error-handler-black-hole)
[![Licence](https://img.shields.io/packagist/l/weew/php-app-error-handler-black-hole.svg)](https://packagist.org/packages/weew/php-app-error-handler-black-hole)

## Table of contents

## Installation

`composer require weew/php-app-error-handler-black-hole`

## Introduction

This error handler suppresses all occurring errors makes use of the [weew/php-app-error-handler](https://github.com/weew/php-app-error-handler).

## Usage

To enable this provider simply register it on the kernel.

```php
$app->getKernel()->addProviders([
    ErrorHandlingProvider::class,
    BlackHoleErrorHandlerProvider::class,
]);
```

## Example config

This is how the config might look like in yaml:

```yaml
black_hole_error_handler:
  enabled: true
  # or
  disabled: false
```


