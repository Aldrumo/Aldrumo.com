<?php

use Illuminate\Support\Facades\Route;

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '0.x');
}

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show')->name('docs.version');
