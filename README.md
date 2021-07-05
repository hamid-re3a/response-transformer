# Response Transofmer

Simple Response Transformer.

## Installation
1. Install the package through composer:


2. Register the package service provider to the providers array in `app.php` file:

    `\ResponseTransformerServiceProvider::class`

3. Register the package facade alias to the aliases array in `app.php` file:

    `'RTransformer' => ResponseTransformer\Facades\API::class,`

5. And finally you can publish the config file:

    `php artisan vendor:publish --tag=transformer-response`


## Basic usage
There are to ways of utilizing the package: using the `facade`, or using the `helper` function.
On either way you will get the same result, it is totally up to you.

#### Helper function:
```php
public function index()
{
    $users = User::all();

    return api()->response(200, 'users list', $users);
}