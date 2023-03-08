<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;
use RedJasmine\Support\Helpers\DomainRoute;

Admin::routes();

Route::group([
                 'domain'     => DomainRoute::adminDomain(),
                 'prefix'     => DomainRoute::adminWebPrefix(),
                 'namespace'  => 'RedJasmine\Admin\Http\Controllers\Admin',
                 'middleware' => config('admin.route.middleware'),
             ], function (Router $router) {

    $router->get('/', 'HomeController@index');

});
