# Geolocation From Package

[![Issues](https://img.shields.io/github/issues/jmrashed/geolocation.svg?style=flat-square)](https://github.com)
[![Stars](https://img.shields.io/github/stars/jmrashed/geolocation.svg?style=flat-square)](https://github.com)
[![License](https://img.shields.io/github/license/jmrashed/geolocation.svg?style=flat-square)](https://github.com)
[![Forks](https://img.shields.io/github/forks/jmrashed/geolocation.svg?style=flat-square)](https://github.com)

Laravel package to get the details about Region, City and Country for a given IP Address. It also provides the details about the location of the user.

## Introduction

- geolocation package will provide user location information.
- It will provide user location information.

## Installation

```bash
    composer require jmrashed/geolocation
```

## Usage

    `use App\Http\Controllers\GeolocationController;`

## Example

```bash
    $geolocation = new GeolocationController();
    $geolocation->getLocation($latitude, $longitude);
```

## License

MIT

## Author

Rashed Zaman

## Repository

https://github.com/jmrashed/mdrasheduzzaman

## Contributors

Rashed Zaman

## Changelog

```bash
    v1.0.0
        - Initial release.
```
