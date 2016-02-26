<?php
include_once(ROOT . DS . 'application' . DS . "Controllers" . DS . "Controller.php");

/* Root */
$app->get(
    '/', 'Controller:index'
)->setParams(array($app));

$app->get(
    '/registro', 'Controller:register'
);

$app->post('/post', function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put('/put', function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete('/delete', function () {
        echo 'This is a DELETE route';
    }
);

$app->run();

?>