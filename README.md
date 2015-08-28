# Laravel 5 Larbon Package

Based on [Carbon](https://github.com/briannesbitt/carbon)

The Larbon Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`mews/larbon` package and setting the `minimum-stability` to `dev` (required for Laravel 5) in your
project's `composer.json`.

```json
{
    "require": {
        "laravel/framework": "5.1.*",
        "mews/larbon": "~1.0"
    },
    "minimum-stability": "dev"
}
```

or

Require this package with composer:
```
composer require mews/larbon
```

Update your packages with ```composer update``` or install with ```composer install```.

## Usage

To use the Larbon Service Provider, you must register the provider when bootstrapping your Laravel application. There are
essentially two ways to do this.

Find the `providers` key in `config/app.php` and register the Laravel Service Provider.

```php
'providers' => [
    // ...
    Mews\Larbon\LarbonServiceProvider::class,
]
```

Find the `aliases` key in `config/app.php`.

```php
'aliases' => [
    // ...
    'Larbon' => Mews\Larbon\Facades\Larbon::class,
]
```

## Example Usage
```php
Larbon::now()->format('l j F Y H:i:s');

// or

larbon()->format('l j F Y H:i:s');
```

```php
$dtToronto = larbon()->createFromDate(2012, 1, 1, 'America/Toronto');
$dtVancouver = larbon()->createFromDate(2012, 1, 1, 'America/Vancouver');

echo $dtVancouver->diffInHours($dtToronto); // 3
```

# Carbon Docs
[http://carbon.nesbot.com/docs/](http://carbon.nesbot.com/docs/)

^_^

## Links
* [License (MIT)](http://www.opensource.org/licenses/mit-license.php)
* [Intervention Carbon](https://github.com/briannesbitt/carbon)
* [Laravel website](http://laravel.com)
* [Laravel Turkiye website](http://www.laravel.gen.tr)
* [MeWebStudio website](http://www.mewebstudio.com)
