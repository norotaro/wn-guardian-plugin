# Guardian Plugin for WinterCMS

Allows to easily restrict access to routes to clients that are not registered in the back-end.

## Installation

Run the following command in a project's root directory:

```shell
composer require norotaro/wn-guardian-plugin
php artisan winter:up
```

## Managing clients

Clients are managed on the Guardian menu found in the back-end. Each client provides minimal data fields - **Name**, **Shortname**, **Active** and **Authorization Codes**.

Each **Authorization Code** is represented by a **Value** and an **Active** field.

## Client authorization

When a client make a request needs to authenticate sending the following headers:

- `User-Agent: {{shortname}}`
- `Authorization: {{activeCode}}`

Where `{{shortname}}` is a short name of a client created in the back-end and `{{activeCode}}` is one of the code created for that client and that is active.

## AuthorizationControl middleware

Access to routes are restricted by applying the `AuthorizationControl` middleware.

```php
<?php
Route::group(['middleware' => \Norotaro\Guard\Middlewares\AuthorizationControl::class], function () {
    // All routes here will require authorization
});
```