# Описание

[![Latest Stable Version](https://poser.pugx.org/jackmartin/laravel-justin/v/stable)](https://packagist.org/packages/jackmartin/laravel-justin) [![Total Downloads](https://poser.pugx.org/jackmartin/laravel-justin/downloads)](https://packagist.org/packages/jackmartin/laravel-justin) [![License](https://poser.pugx.org/jackmartin/laravel-justin/license)](https://packagist.org/packages/jackmartin/laravel-justin)

Laravel пакет для работы с API [Justin](https://justin.ua)


> Read this in other language: [English](README.en.md), [Русский](README.md), [Український](README.ua.md)

> [Wiki - Описание работы библиотеки](https://github.com/martinjack/justin/wiki)

> [Justin API library](https://github.com/martinjack/justin)

# Документация

[API documentation](https://justin.ua/api/api_justin_documentation.pdf "PDF")

[Openapi](http://openapi.justin.ua/ "OPENAPI")

# Требования

* PHP 5.6 или выше
* Composer
* Laravel
* Justin

# Composer
```bash
composer require jackmartin/laravel-justin
```

## Laravel настройка

После установки пакета с помощью composer, зарегистрируйте сервис пакета в файле bootstrap/app.php:
```php
JustinLaravel\JustinServiceProvider::class
```

Затем для быстрого вызов класса пакета, добавьте псевдоним в этот же файле:
```php
'JustinLaravel' => JustinLaravel\Facades\JustinFacade::class,
```

## Настройка параметров пакета

### Копирование файла настроек
```sh
php artisan vendor:publish
```
Выбираем Tag: justin-laravel-config

или
```sh
php artisan vendor:publish --provider="JustinLaravel\JustinServiceProvider" --tag="justin-laravel-config"
```

# Конфигурация пакета

### Передать язык ответа сервера. По умолчанию: UA
#### language
```php
'language'        => 'UA'
```
### Песочница. По умолчанию: true
#### sandbox
```php
'sandbox'         => true
```
### Версия API. По умолчанию: v2
#### version
```php
'version'         => 'v2'
```
### Версия Order API. По умолчанию: v1
#### orderVersion
```php
'orderVersion'    => 'v1'
```
### Тайм-аут, на возврат ответа от сервера. По умолчанию: 60 секунд
#### timeout
```php
'timeout'         => 60
```
### Тайм-аут, на подключение к серверу. По умолчанию: 60 секунд
#### connect_timeout
```php
'connect_timeout' => 60
```
### Часовой пояс. По умолчанию: UTC
#### timezone
```php
'timezone'        => 'UTC'
```
### Логин авторизации на сервер. По умолчанию: Exchange
#### auth_login
```php
'auth_login'      => 'Exchange'
```
### Пароль авторизации на сервер. По умолчанию: Exchange
#### auth_password
```php
'auth_password'   => 'Exchange'
```
### Ключ API.
#### key
```php
'key'             => ''
```
### Логин API.
#### login
```php
'login'           => ''
```
### Пароль API.
#### password
```php
'password'        => ''
```

# Основные методы API

1. Настройка подключения
    * [__construct](https://github.com/martinjack/justin#__construct)
2. Получить текущий статус заказа:
    * [currentStatus](https://github.com/martinjack/justin#currentStatus)
3. Получить список областей
    * [listRegions](https://github.com/martinjack/justin#listregions)
4. Получить список областных районов
    * [listAreasRegions](https://github.com/martinjack/justin#listareasregions)
5. Получить список населенных пунктов
    * [listCities](https://github.com/martinjack/justin#listcities)
6. Получить список районов населенных пунктов
    * [listCityRegion](https://github.com/martinjack/justin#listcityregion)
7. Получить список улиц города
    * [listStreetsCity](https://github.com/martinjack/justin#liststreetscity)
8. Получить информацию про отделение
    * [getBranch](https://github.com/martinjack/justin#getBranch)
9. Получить список отделений. Старый метод
    * [listDepartments](https://github.com/martinjack/justin#listdepartments)
10. Получить список отделений.
    * [listDepartmentsLang](https://github.com/martinjack/justin#listdepartmentslang)
11. Получить ближайшее отделение по адресу
    * [getNeartDepartment](https://github.com/martinjack/justin#getNeartDepartment)
12. Отмена заказа
    * [cancelOrder](https://github.com/martinjack/justin#cancelorder)
13. Получить список статусов заказа
    * [listStatuses](https://github.com/martinjack/justin#liststatuses)
14. Получить ключ торговца(senderID)
    * [keySeller](https://github.com/martinjack/justin#keyseller)
15. Получить историю движения отправления
    * [trackingHistory](https://github.com/martinjack/justin#trackingHistory)
16. Получить историю статусов заказа. Старый метод
    * [getStatusHistory](https://github.com/martinjack/justin#getstatushistory)
17. Получить историю статусов заказа.
    * [getStatusHistoryF](https://github.com/martinjack/justin#getstatushistoryf)
18. Создать новый заказ(Отправление)
    * [createOrder](https://github.com/martinjack/justin#order)
19. Создать стикер заказа
    * [createSticker](https://github.com/martinjack/justin#createsticker)

# Примеры

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