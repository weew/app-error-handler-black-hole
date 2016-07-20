# BlackHole error handler

[![Build Status](https://img.shields.io/travis/weew/app-error-handler-black-hole.svg)](https://travis-ci.org/weew/app-error-handler-black-hole)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/app-error-handler-black-hole.svg)](https://scrutinizer-ci.com/g/weew/app-error-handler-black-hole)
[![Test Coverage](https://img.shields.io/coveralls/weew/app-error-handler-black-hole.svg)](https://coveralls.io/github/weew/app-error-handler-black-hole)
[![Version](https://img.shields.io/packagist/v/weew/app-error-handler-black-hole.svg)](https://packagist.org/packages/weew/app-error-handler-black-hole)
[![Licence](https://img.shields.io/packagist/l/weew/app-error-handler-black-hole.svg)](https://packagist.org/packages/weew/app-error-handler-black-hole)

## Table of contents

## Installation

`composer require weew/app-error-handler-black-hole`

## Introduction

This error handler suppresses all occurring errors makes use of the [weew/app-error-handler](https://github.com/weew/app-error-handler).

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


