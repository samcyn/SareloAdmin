<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// role middleware begins here
    // $roles = ['Super Admin', 'Shopper', 'Inventory Manager', 'User']
    // Route::group(['prefix' => 'admin'], function() {
    //         Route::get('/products', 
    //             ['uses' => 'Admin\ProductsController@index',
    //                 'middleware' => 'role',
    //                 'roles' => $roles
    //             ]);
    // });
// role middleware ends here


Route::group(['middleware' => 'admin'], function() {
    Route::group(['prefix' => 'admin'], function() {
            Route::match(['get', 'post'], '/create', 'AdminController@signup');
            Route::get('/logout', 'AdminController@logout');
            Route::get('/dashboard', 'AdminController@index');
            Route::get('/users', 'Admin\UserController@index');
            Route::get('/products', 'Admin\ProductsController@index');
            Route::post('/products', 'Admin\ProductsController@add_product');
            Route::get('/products/{id}', 'Admin\ProductsController@edit');
            Route::post('/products/{id}', 'Admin\ProductsController@update');
            Route::get('/products/destroy/{id}', 'Admin\ProductsController@destroy');
            Route::get('/orders/{id}', 'Admin\OrdersController@show');
            Route::get('/orders', 'AdminController@orders');
            Route::get('/order_view', 'AdminController@order_view');
            Route::get('/orders/delete/{id}', 'Admin\\OrdersController@destroy');
            Route::get('/product_edit', 'AdminController@product_edit');
            Route::match(['get', 'post'], '/slots', 'Admin\\SlotsController@index');
            Route::match(['get', 'post'], '/slots/create', 'Admin\\SlotsController@store');
            Route::post('/slots/update/{id}', 'Admin\\SlotsController@update');
            Route::get('/slots/delete/{id}', 'Admin\\SlotsController@destroy');
            Route::get('/slots', 'Admin\\SlotsController@index');
            Route::get('/slots/edit/{id}', 'Admin\\SlotsController@edit');
            Route::resource('/orders', 'Admin\\OrdersController');
            Route::match(['get', 'post'], '/unit-types', 'Admin\\UnitTypesController@index');
            Route::match(['get', 'post'], '/unit-types/create', 'Admin\\UnitTypesController@store');
            Route::get('/unit-types/delete/{id}', 'Admin\\UnitTypesController@destroy');
            Route::get('/unit-types/edit/{id}', 'Admin\\UnitTypesController@edit');
            Route::post('/unit-types/update/{id}', 'Admin\\UnitTypesController@update');
    });
});

    Route::match(['get', 'post'], '/admin', 'AdminController@signin');
    Route::get('/signin', 'Auth\\LoginController@showLoginForm');
    Route::post('/signin', 'Auth\\LoginController@login');
    Route::get('signup', 'Auth\\RegisterController@showRegistrationForm');
    Route::post('signup', 'Auth\\RegisterController@register');
    Route::get('/test', [
        'uses' => 'HomeController@test',
        'as' => 'test',
        'middleware' => 'role',
        'roles' => ['User']
    ]);


// Route::get('/cart', 'CartsController@addCartItem');
// Route::resource('products', 'ProductsController');
Route::resource('admin/categories', 'Admin\\CategoriesController');
// Route::resource('admin/unit-types', 'Admin\\UnitTypesController');


Auth::routes();

// Route::get('/home', 'HomeController@index');


Route::resource('admin/charges', 'Admin\\ChargesController');



Route::get('social/login/{provider}', 'Auth\\SocialAuthController@redirectToProvider');
Route::get('social/login/{provider}/callback', 'Auth\\SocialAuthController@handleProviderCallback');


Route::post('/cart/add', 'CartsController@addCartItem');
Route::get('/cart', 'CartsController@getCartItems');
Route::get('/cart/update/{cart_id}/{action}/', 'CartsController@updateCart');
Route::get('/cart/delete/{cart_id}', 'CartsController@deleteCartItem');

Route::match(['POST', 'GET'], '/checkout/billing-address', 'CheckoutController@billingAddress');
Route::match(['POST', 'GET'], '/checkout/choose-address', 'CheckoutController@chooseAddress');


Route::match(['POST', 'GET'], '/checkout/choose-delivery-slot', 'DeliveryController@index');
Route::match(['POST', 'GET'], '/checkout/confirm-order', 'ConfirmCheckoutController@index')->middleware('checkslot');
Route::post('/checkout', 'ConfirmCheckoutController@checkout')->middleware('checkslot');

Route::get('/checkout/payment/{order_unique_reference}', 'PaymentController@index');


Route::get('/thankyou/{order_unique_reference}', 'PaymentController@complete');


Route::get('/new-address', 'AddressController@create');
Route::post('/new-address', 'AddressController@store');

Route::get('/my-account', 'HomeController@index');
Route::get('/my-orders', 'HomeController@index');
Route::get('/my-addresses', 'HomeController@addresses');
Route::get('/account/new-addresses', 'HomeController@saveAddress');



Route::post('/transaction', 'TransactionController@store');
Route::post('/transaction/{transaction_id}/edit', 'TransactionController@update');

Route::get('/checkout/bank/{order_unique_reference}', 'TransactionController@bankCheckout');


Route::get('/undefined', function(){
    echo json_encode(['status' => 'success']);
});
Auth::routes();

Route::get('/order/{id}/cancel', 'HomeController@cancelOrder');
Route::get('/', 'IndexController@index');
