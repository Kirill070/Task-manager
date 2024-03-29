### Hexlet tests and linter status:
[![Actions Status](https://github.com/Kirill070/php-project-57/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Kirill070/php-project-57/actions)<br>
[![Maintainability](https://api.codeclimate.com/v1/badges/7c50d6378e0352b4497d/maintainability)](https://codeclimate.com/github/Kirill070/php-project-57/maintainability)<br>
[![Test Coverage](https://api.codeclimate.com/v1/badges/7c50d6378e0352b4497d/test_coverage)](https://codeclimate.com/github/Kirill070/php-project-57/test_coverage)<br>
[![Task Manager](https://github.com/Kirill070/php-project-57/actions/workflows/my-check.yml/badge.svg)](https://github.com/Kirill070/php-project-57/actions/workflows/my-check.yml)<br>

## Описание:

[Сервис Task Manager](https://task-manager-cwoy.onrender.com) – простой менеджер задач на Laravel.

## Минимальные требования:

* Ubuntu Linux (https://ubuntu.com/)
* PHP версии 8 и выше (https://www.php.net/downloads.php)
* Composer (https://getcomposer.org/download/)
* СУБД PostgreSQL (https://www.postgresql.org/)
* Утилита Make
```sh
$ sudo apt update
$ sudo apt install make
```

## Установка:

```sh
$ git clone git@github.com:Kirill070/php-project-57.git

$ cd php-project-57

$ make setup
```
Внимание! Для подключения к базе данных приложение использует переменную окружения _DATABASE_URL_.

## Запуск:

```sh
php artisan migrate:refresh --seed --force
php artisan serve
```