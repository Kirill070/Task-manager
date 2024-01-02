### Hexlet tests and linter status:
[![Actions Status](https://github.com/Kirill070/php-project-57/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Kirill070/php-project-57/actions)<br>
<a href="https://codeclimate.com/github/Kirill070/php-project-57/maintainability"><img src="https://api.codeclimate.com/v1/badges/83bcacae15c7fa043f1c/maintainability" /></a><br>
<a href="https://codeclimate.com/github/Kirill070/php-project-57/test_coverage"><img src="https://api.codeclimate.com/v1/badges/83bcacae15c7fa043f1c/test_coverage" /></a><br>
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
$ git clone git@github.com:Kirill070/php-project-9.git

$ cd php-project-9

$ make install
```
Внимание! Для подключения к базе данных приложение использует переменную окружения _DATABASE_URL_.
Запросы на создание необходимых таблиц базы данных находятся в файле _database.sql_ репозитория.

## Запуск:

```sh
$ make start
```