<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('products')->group(function(){
    Route::get('/indexproducts',[
            'uses'=>'ProductController@index',
            'as'=>'products'
            ]);

    Route::get('/',[
        'uses'=>'ProductController@all',
        'as'=>'products'
    ]);

    Route::get('/{id}',[
            'uses'=>'ProductController@show',
            
            ]);
        //get by Category
    Route::get('/samplecategory/{id}',[
            'uses'=>'ProductController@getSampleCategory'
    ]

     );
    Route::get('/delete/{id}',[
                'uses'=>'ProductController@destroy',
                
    ]);
});

Route::prefix('categories')->group(function(){
    Route::get('/',[
            'uses'=>'CategoriesController@index',
            'as'=>'categories'
            ]);

    Route::get('/{id}',[
            'uses'=>'CategoriesController@show',
                
            ]);
    
    Route::get('indexCategories/{id}',[
        'uses'=>'CategoriesController@indexCategories',
            
        ]);

   
});

Route::prefix('cart')->group(function(){
        Route::get('/',[
                'uses'=>'CartController@index',
                'as'=>'cart'
                ]);
    
                
        Route::get('/cartItemCount',[
                'uses'=>'CartController@cartItemCount',
                'as'=>'cart'
                ]);

        Route::get('/emptyCart',[
                'uses'=>'CartController@empty',
                'as'=>'cart'
                ]);

        Route::get('/add/{id}/{quantity}',[
            'uses'=>'CartController@add',
                
            ]);
                
        Route::get('/remove/{index}',[
                'uses'=>'CartController@removeCartItem'
        ]);
       
    });