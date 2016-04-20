# yii2-errorpicker
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
After that you can get access via ```phpYii::$app->errorpicker```.
Add errors to container ```phpYii::$app->errorpicker->addErrors($array);```
Get all errors ```phpYii::$app->errorpicker->getErrors();```
Has errors ```phpYii::$app->errorpicker->hasErrors();```

