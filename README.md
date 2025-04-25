### Hexlet tests and linter status:
[![Actions Status](https://github.com/Kirill070/Task-manager/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Kirill070/Task-manager/actions)<br>
<a href="https://qlty.sh/gh/Kirill070/projects/Task-manager"><img src="https://qlty.sh/badges/01188eff-28c3-40f5-b2de-b6cb24a03b7f/maintainability.svg" alt="Maintainability" /></a><br>
[![Task Manager](https://github.com/Kirill070/Task-manager/actions/workflows/my-check.yml/badge.svg)](https://github.com/Kirill070/Task-manager/actions/workflows/my-check.yml)<br>

## Описание:
Сервис Task Manager – простой менеджер задач на Laravel.

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
$ git clone git@github.com:Kirill070/Task-manager.git

$ cd Task-manager

$ make setup
```
Внимание! Для подключения к базе данных приложение использует переменную окружения _DATABASE_URL_.

## Запуск:

```sh
php artisan migrate:refresh --seed --force
php artisan serve
```
