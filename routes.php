<?php

Route::get(Config::get('bumble::admin_prefix').'/'.'blog', [
    'uses' => 'Monarkee\Bumble\Blog\Http\Controllers\BlogController@index',
    'as' => 'bumble.blog.index'
]);