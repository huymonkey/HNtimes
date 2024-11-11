<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::name('api.')
    ->middleware([
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        //  \App\Http\Middleware\VerifyCsrfApiToken::class
    ])
    ->group(function () {

        // Category
        Route::controller(\App\Http\Controllers\Api\CategoryController::class)
            ->prefix('categories')
            ->name('categories.')
            ->group(function () {

                Route::get    ('/withSubCategory'  , 'withSubCategory') ->name('withSubCategory');
                Route::get    ('/show/{id}'        , 'show')            ->name('show');
                Route::get    ('/trashes'          , 'trashes')         ->name('trashes');
                Route::post   ('/'                 , 'store')           ->name('store');
                Route::put    ('/update/{id}'      , 'update')          ->name('update');
                Route::put    ('/restore/{id}'     , 'restore')         ->name('restore');
                Route::put    ('/restoreAll'       , 'restoreAll')      ->name('restoreAll');
                Route::delete ('/softDelete/{id}'  , 'softDelete')      ->name('softDelete');

            });

        // Sub Category
        Route::controller(\App\Http\Controllers\Api\SubCategoryController::class)
            ->name('subCategories.')
            ->group(function () {

                Route::get    ('/subCategories/{id}'            , 'show')   ->name('show');
                Route::post   ('/categories/{id}/subCategories' , 'store')  ->name('store');
                Route::put    ('/subCategories/update/{id}'     , 'update') ->name('update');
                Route::delete ('/subCategories/delete/{id}'     , 'delete') ->name('delete');

            });

        // Article
        Route::controller(\App\Http\Controllers\Api\ArticleController::class)
            ->prefix('articles')
            ->name('articles.')
            ->group(function () {

                Route::get    ('/'                   ,   'index')        ->name('index');
                Route::get    ('/trashes'            ,   'trashes')      ->name('trashes');
                Route::get    ('/show/{id}'          ,   'show')         ->name('show');
                Route::get    ('/types'              ,   'types')        ->name('types');
                Route::post   ('/'                   ,   'store')        ->name('store');
                Route::put    ('/update/{id}'        ,   'update')       ->name('update');
                Route::put    ('restore/{id}'        ,   'restore')      ->name('restore');
                Route::put    ('restoreAll'          ,   'restoreAll')   ->name('restoreAll');
                Route::delete ('/softDelete/{id}'    ,   'softDelete')   ->name('softDelete');
                Route::delete ('delete/{id}'         ,   'delete')       ->name('delete');
                Route::delete ('deleteAll'           ,   'deleteAll')    ->name('deleteAll');

            });

        // Tag
        Route::controller(\App\Http\Controllers\Api\TagController::class)
            ->prefix('tags')
            ->name('tags.')
            ->group(function () {

                Route::get('/', 'index')->name('index');

            });

        // Comment
        Route::controller(\App\Http\Controllers\Api\CommentController::class)
            ->name('comments.')
            ->group(function () {

                Route::get    ('/articles/{id}/comments' , 'index')      ->name('index');
                Route::post   ('/comments'               , 'store')      ->name('store');
                Route::delete ('/comments/{id}'          , 'delete')     ->name('delete');
                Route::delete ('/articles/{id}/comments' , 'deleteAll')  ->name('deleteAll');

            });

        // Reply Comment
        Route::controller(\App\Http\Controllers\Api\ReplyCommentController::class)
            ->prefix('replyComments')
            ->name('replyComments.')
            ->group(function () {

                Route::post   ('/'       , 'store')  ->name('store');
                Route::delete ('/{id}'   , 'delete') ->name('delete');

            });

        // User
        Route::controller(\App\Http\Controllers\Api\UserController::class)
            ->prefix('users')
            ->name('users.')
            ->group(function () {

                Route::get    ('/'            , 'index')      ->name('index');
                Route::get    ('/show/{id}'   , 'show')       ->name('show');
                Route::post   ('/'            , 'store')      ->name('store');
                Route::put    ('unlockAll'    , 'unlockAll')  ->name('unlockAll');
                Route::patch  ('/update/{id}' , 'update')     ->name('update');

            });

    });
