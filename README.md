Component provide global object for validation errors in Yii2 rest api
============================================
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist lebedyncrs/yii2-errorpicker
```

or add

```json
"lebedyncrs/yii2-errorpicker": "*"
```

to the require section of your composer.json.

Usage
-----

This extension provides global object for validation errros and is userfull in rest api when you should pick all error from each models and return response as json.
```php
'components' => [
    'errorPicker' => [
        'class' => 'lebedyncrs\errorpicker\ErrorValidationPicker'
    ],
    ....
]
```
When you develop rest api global context for errors validation is very useful. This component provide that.


