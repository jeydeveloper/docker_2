<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker <?php echo $foo->getName(); ?></title>
    </head>
    <body>
        <h1>Docker <?php echo $foo->getName(); ?></h1>
        <p>HTTPS ready? <?php echo ($foo->isHttps() ? 'true' : 'false'); ?></p>
        <p>Database ready? <?php echo ($foo->isDbConnect() ? 'true' : 'false'); ?></p>
    </body>
</html>
