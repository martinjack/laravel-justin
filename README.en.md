# Description

[![Latest Stable Version](https://poser.pugx.org/jackmartin/laravel-justin/v/stable)](https://packagist.org/packages/jackmartin/laravel-justin) [![Total Downloads](https://poser.pugx.org/jackmartin/laravel-justin/downloads)](https://packagist.org/packages/jackmartin/laravel-justin) [![License](https://poser.pugx.org/jackmartin/laravel-justin/license)](https://packagist.org/packages/jackmartin/laravel-justin)

Laravel package to work with API [Justin](https://justin.ua)


> Read this in other language: [English](README.en.md), [Русский](README.md), [Український](README.ua.md)

> [Wiki - Description library](https://github.com/martinjack/justin/wiki)

> [Justin API library](https://github.com/martinjack/justin)

# Documentation

[API documentation v6.0.1](https://justin.ua/api/api_justin_documentation.pdf "PDF")

[Openapi](http://openapi.justin.ua/ "OPENAPI")

# Requirements

* PHP 5.6 or above
* Composer
* Laravel
* Justin

# Composer
```bash
composer require jackmartin/laravel-justin
```

## Laravel setting

After installing the package with composer, register the service package in the file bootstrap/app.php:
```php
JustinLaravel\JustinServiceProvider::class
```

Then to quickly call the class of the package, add an alias in the same file:
```php
'JustinLaravel' => JustinLaravel\Facades\JustinFacade::class,
```

## Package settings

### Copy settings file
```sh
php artisan vendor:publish
```
Select Tag: justin-laravel-config

or
```sh
php artisan vendor:publish --provider="JustinLaravel\JustinServiceProvider" --tag="justin-laravel-config"
```

# Package configuration

### Set language response API. Default: UA
#### language
```php
'language'        => 'UA'
```
### Set sandbox for testing. Default: true
#### sandbox
```php
'sandbox'         => true
```
### Set version API. Default: v2
#### version
```php
'version'         => 'v2'
```
### Set orderVersion API. Default: v1
#### orderVersion
```php
'orderVersion'    => 'v1'
```
### Set timeout return response. Default: 60
#### timeout
```php
'timeout'         => 60
```
### Set connect_timeout connection server. Default: 60
#### connect_timeout
```php
'connect_timeout' => 60
```
### Set timezone. Default: UTC
#### timezone
```php
'timezone'        => 'UTC'
```
### Set auth server login. Default: Exchange
#### auth_login
```php
'auth_login'      => 'Exchange'
```
### Set auth server password. Default: Exchange
#### auth_password
```php
'auth_password'   => 'Exchange'
```
### Set key API.
#### key
```php
'key'             => ''
```
### Set login API.
#### login
```php
'login'           => ''
```
### Set password API.
#### password
```php
'password'        => ''
```

# Basic methods API

1. Setup connection 
    * [__construct](https://github.com/martinjack/justin/blob/master/README.en.md#__construct)
2. Get current status order:
    * [currentStatus](https://github.com/martinjack/justin/blob/master/README.en.md#currentStatus)
3. Get list regions.
    * [listRegions](https://github.com/martinjack/justin/blob/master/README.en.md#listregions)
4. Get list regional areas.
    * [listAreasRegions](https://github.com/martinjack/justin/blob/master/README.en.md#listareasregions)
5. Get list settlements.
    * [listCities](https://github.com/martinjack/justin/blob/master/README.en.md#listcities)
6. Get list areas of settlements
    * [listCityRegion](https://github.com/martinjack/justin/blob/master/README.en.md#listcityregion)
7. Get list streets city.
    * [listStreetsCity](https://github.com/martinjack/justin/blob/master/README.en.md#liststreetscity)
8. Get information about department
    * [getBranch](https://github.com/martinjack/justin/blob/master/README.en.md#getBranch)
9. Get list departments. Old method
    * [listDepartments](https://github.com/martinjack/justin/blob/master/README.en.md#listdepartments)
10. Get list departments.
    * [listDepartmentsLang](https://github.com/martinjack/justin/blob/master/README.en.md#listdepartmentslang)
11. Get nearest department by address
    * [getNeartDepartment](https://github.com/martinjack/justin/blob/master/README.en.md#getNeartDepartment)
12. Get list statuses order.
    * [listStatuses](https://github.com/martinjack/justin/blob/master/README.en.md#liststatuses)
13. Get key seller(senderID)
    * [keySeller](https://github.com/martinjack/justin/blob/master/README.en.md#keyseller)
14. Get tracking history
    * [trackingHistory](https://github.com/martinjack/justin/blob/master/README.en.md#trackingHistory)
15. Get story statuses order. Old method
    * [getStatusHistory](https://github.com/martinjack/justin/blob/master/README.en.md#getstatushistory)
16. Get story statuses order.
    * [getStatusHistoryF](https://github.com/martinjack/justin/blob/master/README.en.md#getstatushistoryf)
17. Create new order(Departure)
    * [Order](https://github.com/martinjack/justi/blob/master/README.en.mdn#order)
18. Create sticker order
    * [createSticker](https://github.com/martinjack/justin/blob/master/README.en.md#createsticker)

# Examples

### listRegions()
```php
print_r(

    \JustinLaravel::listRegions()->getData()
    // (new \JustinLaravel())->listRegions()->getData()

);
```
### listCities()
```php
print_r(

    \JustinLaravel::listCities()->getData()
    // (new \JustinLaravel())->listCities()->getData()

);
```
### getBranch()

```php

print_r(

    (new JustinLaravel())->getBranch('220')->getData()
    // (new JustinLaravel())->getBranch('220')->fields()->number()
    // (new JustinLaravel())->getBranch('220')->fields()->getType()
    // (new JustinLaravel())->getBranch('220')->fields()->address()
    // (new JustinLaravel())->getBranch('220')->fields()->getPosition()
    // (new JustinLaravel())->getBranch('220')->fields()->getDescr()
    // (new JustinLaravel())->getBranch('220')->fields()->scheduDescr()

);