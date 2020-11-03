# templatenik
PHP library generating document from template and input data

Example application

```php
<?php

// first argument - source file, second - output file
// php app.php ./template.docx ./document.docx

require __DIR__ . '/../vendor/autoload.php';

use PhoenyxStudio\Service\Templatenik;

$source = $argv[1];
$result = $argv[2];

$templatenik = new Templatenik($source);

$variables = $templatenik->getVariables();
foreach ($variables as $variable) {
    $value = readline($variable . ': ');
    $templatenik->setValue($variable, $value);
}

$templatenik->saveAs($result);

```
