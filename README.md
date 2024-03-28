# PHP-MVC-FRAMEWORK Sample
**[PHP-MVC](https://github.com/AsadullahQureshi/php-mvc-framework)** is a framework for learning purposes how to work php framework like Laravel, Yii and Symphony e.t.c.

This is for Leaning purposes not to deploy your application

## Requirements
- PHP 8 and above.
- Docker.

## Installation
For running this example, you need to install `php-mvc-framework` before. It can be done by two different methods:

### 1. Using Composer
You can install the library via [Composer](https://getcomposer.org/). If you don't already have Composer installed, first install it by following one of these instructions depends on your OS of choice:
* [Composer installation instruction for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
* [Composer installation instruction for Mac OS X and Linux](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

After composer is installed, Then run the following command to install the Omise-PHP library:

```
composer install
php -S localhost:8000 public/index.php
```

Please see configuration section below for configuring your Omise Keys.

### 2. Using Docker

If you're not using Composer, you can also clone `AsadullahQureshi/php-mvc` repository into the directory of sample code that you just installed this repository:

```
git clone https://github.com/AsadullahQureshi/php-mvc-framework
```

```
docker compose up -d
```
However, using Composer is recommended as you can easily keep the library up-to-date. After cloning the repository
```php
docker compose exec app
```



### index.php
This is route file when start the app

## Folder Structure
In this example, we have some files and folder that you need to concentrate about, as follows:
- `RootFolder/php`/index.php

## Usage
Run `index.php` in your browser.

## Tips
