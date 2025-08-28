# Filament Alert Component

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gosuperscript/filament-alert-component.svg?style=flat-square)](https://packagist.org/packages/gosuperscript/filament-alert-component)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gosuperscript/filament-alert-component/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gosuperscript/filament-alert-component/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gosuperscript/filament-alert-component/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gosuperscript/filament-alert-component/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gosuperscript/filament-alert-component.svg?style=flat-square)](https://packagist.org/packages/gosuperscript/filament-alert-component)

## Installation

You can install the package via composer:

```bash
composer require gosuperscript/filament-alert-component
```

## Usage

```php
use \Superscript\FilamentAlertComponent\Schema\Components\Alert;

Alert::make('This is the heading!')
    ->description('This is the description...')
    ->warning();
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Erik Gaal](https://github.com/erikgaal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
