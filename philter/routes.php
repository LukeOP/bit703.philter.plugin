<?php

/**
 * Class to filer requests to the required methods.
 */
$api = new Openpolytechnic\Philter\Classes\Api();

Route::options('api/v1/{all}', function () {
    if (Request::getMethod() == "OPTIONS") {
        echo ('You are connected to the API');
        die();
    }
});

Route::options('api/v1/{any}/{all}', function () {
    if (Request::getMethod() == "OPTIONS") {
        echo ('You are connected to the API');
        die();
    }
});

Route::post('api/v1/login', function () use ($api) {
    return $api->login();
});

Route::post('api/v1/users/', function () use ($api) {
    return $api->registerUser();
});

Route::get('api/v1/logout', function () use ($api) {
    return $api->logout();
});

Route::get('api/v1/users', function () use ($api) {
    return $api->getUser();
});

Route::post('api/v1/users/update', function () use ($api) {
    return $api->updateUser();
});

Route::post('api/v1/users/delete', function () use ($api) {
    return $api->deleteUser();
});

Route::get('api/v1/images', function () use ($api) {
    return $api->getImages();
});

Route::get('api/v1/images/{image_id}', function ($image_id) use ($api) {
    return $api->getImage($image_id);
});

Route::get('api/v1/images/user', function () use ($api) {
    return $api->getUserImages();
});

Route::post('api/v1/images', function () use ($api) {
    return $api->addImage();
});

Route::post('api/v1/images/update/{image_id}', function ($image_id) use ($api) {
    return $api->updateImage($image_id);
});

Route::get('api/v1/images/delete/{image_id}', function ($image_id) use ($api) {
    return $api->deleteImage($image_id);
});
