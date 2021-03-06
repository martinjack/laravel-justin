# Опис

[![Latest Stable Version](https://poser.pugx.org/jackmartin/laravel-justin/v/stable)](https://packagist.org/packages/jackmartin/laravel-justin) [![Total Downloads](https://poser.pugx.org/jackmartin/laravel-justin/downloads)](https://packagist.org/packages/jackmartin/laravel-justin) [![License](https://poser.pugx.org/jackmartin/laravel-justin/license)](https://packagist.org/packages/jackmartin/laravel-justin)

Laravel пакет для роботи з API [Justin](https://justin.ua)


> Read this in other language: [English](README.en.md), [Русский](README.md), [Український](README.ua.md)

> [Wiki - Опис роботи бібліотеки](https://github.com/martinjack/justin/wiki)

> [Justin API library](https://github.com/martinjack/justin)

# Документація

[API documentation](https://justin.ua/api/api_justin_documentation.pdf "PDF")

[Openapi](http://openapi.justin.ua/ "OPENAPI")

# Вимога

* PHP 5.6 або вище
* Composer
* Laravel
* Justin

# Composer
```bash
composer require jackmartin/laravel-justin
```

## Laravel налаштування

Після установки пакета за допомогою composer, зареєструйте сервіс пакета в файлі bootstrap/app.php:
```php
JustinLaravel\JustinServiceProvider::class
```

Потім для швидкого виклик класу пакета, додайте псевдонім в цей же файл:
```php
'JustinLaravel' => JustinLaravel\Facades\JustinFacade::class,
```

## Налаштування параметрів пакета

### Копіювання файлу налаштувань
```sh
php artisan vendor:publish
```
Вибираємо Tag: justin-laravel-config

або
```sh
php artisan vendor:publish --provider="JustinLaravel\JustinServiceProvider" --tag="justin-laravel-config"
```

# Конфігурація пакета

### Передати мову відповіді сервера. За замовчуванням: UA
#### language
```php
'language'        => 'UA'
```
### Пісочниця. За замовчуванням: true
#### sandbox
```php
'sandbox'         => true
```
### Версія API. За замовчуванням: v2
#### version
```php
'version'         => 'v2'
```
### Версія Order API. За замовчуванням: v1
#### orderVersion
```php
'orderVersion'    => 'v1'
```
### Тайм-аут, на повернення відповіді від сервера. За замовчуванням: 60 секунд
#### timeout
```php
'timeout'         => 60
```
### Тайм-аут, на підключення до сервера. За замовчуванням: 60 секунд
#### connect_timeout
```php
'connect_timeout' => 60
```
### Часовий пояс. За замовчуванням: UTC
#### timezone
```php
'timezone'        => 'UTC'
```
### Логін авторизації на сервер. За замовчуванням: Exchange
#### auth_login
```php
'auth_login'      => 'Exchange'
```
### Пароль авторизації на сервер. За замовчуванням: Exchange
#### auth_password
```php
'auth_password'   => 'Exchange'
```
### Ключ API.
#### key
```php
'key'             => ''
```
### Логін API.
#### login
```php
'login'           => ''
```
### Пароль API.
#### password
```php
'password'        => ''
```

# Основні методи API

1. Налаштування підключення
    * [__construct](https://github.com/martinjack/justin/blob/master/README.ua.md#__construct)
2. Отримати поточний статус замовлення:
    * [currentStatus](https://github.com/martinjack/justin/blob/master/README.ua.md#currentStatus)
3. Отримати список областей
    * [listRegions](https://github.com/martinjack/justin/blob/master/README.ua.md#listregions)
4. Отримати список обласних районів
    * [listAreasRegion](https://github.com/martinjack/justin/blob/master/README.ua.md#listareasregion)
5. Отримати список населених пунктів
    * [listCities](https://github.com/martinjack/justin/blob/master/README.ua.md#listcities)
6. Отримати список районів населених пунктів
    * [listCityRegion](https://github.com/martinjack/justin/blob/master/README.ua.md#listcityregion)
7. Отримати список вулиць міста
    * [listStreetsCity](https://github.com/martinjack/justin/blob/master/README.ua.md#liststreetscity)
8. Отримати список типів відділень
    * [branchTypes](https://github.com/martinjack/justin/blob/master/README.ua.md#branchtypes)
9. Отримати інформацію про відділення
    * [getBranch](https://github.com/martinjack/justin/blob/master/README.ua.md#getBranch)
10. Отримати список відділень. Старий метод
    * [listDepartments](https://github.com/martinjack/justin/blob/master/README.ua.md#listdepartments)
11. Отримати список відділень.
    * [listDepartmentsLang](https://github.com/martinjack/justin/blob/master/README.ua.md#listdepartmentslang)
12. Отримати розклад роботи відділень
    * [branchSchedule](https://github.com/martinjack/justin/blob/master/README.ua.md#branchschedule)
13. Отримати найближче відділення за адресою
    * [getNeartDepartment](https://github.com/martinjack/justin/blob/master/README.ua.md#getNeartDepartment)
14. Відміна замовлення
    * [cancelOrder](https://github.com/martinjack/justin#cancelorder)
15. Отримати список статусів замовлення
    * [listStatuses](https://github.com/martinjack/justin/blob/master/README.ua.md#liststatuses)
16. Отримати ключ торговця(senderID)
    * [keySeller](https://github.com/martinjack/justin/blob/master/README.ua.md#keyseller)
17. Отримати історію руху відправлення
    * [trackingHistory](https://github.com/martinjack/justin/blob/master/README.ua.md#trackingHistory)
18. Отримати історію статусів замовлення. Старий метод
    * [getStatusHistory](https://github.com/martinjack/justin/blob/master/README.ua.md#getstatushistory)
19. Отримати історію статусів замовлення.
    * [getStatusHistoryF](https://github.com/martinjack/justin/blob/master/README.ua.md#getstatushistoryf)
20. Створити нове замовлення(Відправлення)
    * [createOrder](https://github.com/martinjack/justin/blob/master/README.ua.md#createOrder)
21. Отримати список замовлень за вказаний період
    * [listOrders](https://github.com/martinjack/justin/blob/master/README.ua.md#listorders)
22. Отримати інформацію про замовлення
    * [orderInfo](https://github.com/martinjack/justin/blob/master/README.ua.md#orderinfo)
23. Створити стікер замовлення
    * [createSticker](https://github.com/martinjack/justin/blob/master/README.ua.md#createsticker)

# Приклади

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