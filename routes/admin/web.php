<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use RedJasmine\Support\Services\DomainRoute;

Admin::routes();

Route::group([
                 'domain'     => DomainRoute::adminDomain(),
                 'prefix'     => DomainRoute::adminWebPrefix(),
                 'namespace'  => 'RedJasmine\Admin\Http\Controllers\Admin',
                 'middleware' => config('admin.route.middleware'),
             ], function (Router $router) {

    $router->get('/', 'HomeController@index');

});
