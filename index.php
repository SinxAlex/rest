<?php
require 'vendor/autoload.php';

use Rest\RestApi;

$restApi = new RestApi();
print_r($restApi->getAll());

