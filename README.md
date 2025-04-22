# Rest Api source:https://restcountries.com/#endpoints-calling-code

Простенький рест апи сервис для получения данных с открытого сервиса по адресу:
https://restcountries.com/#endpoints-calling-code.

```php
<?php
require 'vendor/autoload.php';

use Rest\RestApi;

$restApi = new RestApi();
print_r($restApi->getAll());
