<?php

use Illuminate\Support\Facades\Route;

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

// 麦芽

Route::get('/masters/malts', function () {
    return view('masters.malts');
});

Route::get('/masters/create', function () {
    return view('masters.create');
});

Route::get('/masters/malts/add', function () {
    return view('masters.malts.add');
});

Route::get('/masters/malts', 'MaltController@index');

Route::get('/masters/malts/create', 'MaltController@show');

Route::post('/masters/malts/add', 'MaltController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/malts/create');
})->name('/masters/malts/create');

Route::get('/masters/malts/finish', function () {
    return view('masters.malts.finish');
});

Route::get('/masters/malts/edit/{id}', 'MaltController@edit');

Route::post('/masters/malts/finish/{id}', 'MaltController@finish');

Route::post('/masters/malts/delete/{id}', 'MaltController@delete');


// ホップ

Route::get('/masters/hops', function () {
    return view('masters.hops');
});

Route::get('/masters/hops/create', function () {
    return view('masters.hops.create');
});

Route::get('/masters/hops/add', function () {
    return view('masters.hops.add');
});

Route::get('/masters/hops', 'HopController@index');

Route::get('/masters/hops/create', 'HopController@show');

Route::post('/masters/hops/add', 'HopController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/hops/create');
})->name('/masters/hops/create');

Route::get('/masters/hops/finish', function () {
    return view('masters.hops.finish');
});

Route::get('/masters/hops/edit/{id}', 'HopController@edit');

Route::post('/masters/hops/finish/{id}', 'HopController@finish');

Route::post('/masters/hops/delete/{id}', 'HopController@delete');

// 酵母

Route::get('/masters/yeasts', function () {
    return view('masters.yeasts');
});

Route::get('/masters/yeasts/create', function () {
    return view('masters.yeasts.create');
});

// Route::get('/masters/yeasts/add', function () {
//     return view('masters.yeasts.add');
// });

Route::get('/masters/yeasts', 'YeastController@index');

Route::get('/masters/yeasts/create', 'YeastController@show');

Route::post('/masters/yeasts/create', 'YeastController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/yeasts/create');
})->name('/masters/yeasts/create');

Route::get('/masters/yeasts/finish', function () {
    return view('masters.yeasts.finish');
});

Route::get('/masters/yeasts/edit/{id}', 'YeastController@edit');

Route::post('/masters/yeasts/finish/{id}', 'YeastController@finish');

Route::post('/masters/yeasts/delete/{id}', 'YeastController@delete');

// 米麦糖類

Route::get('/masters/wheat_rice_sugars', function () {
    return view('masters.wheat_rice_sugars');
});

Route::get('/masters/wheat_rice_sugars/create', function () {
    return view('masters.wheat_rice_sugars.create');
});

Route::get('/masters/wheat_rice_sugars', 'Wheat_rice_sugarController@index');

Route::get('/masters/wheat_rice_sugars/create', 'Wheat_rice_sugarController@show');

Route::post('/masters/wheat_rice_sugars/create', 'Wheat_rice_sugarController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/wheat_rice_sugars/create');
})->name('/masters/wheat_rice_sugars/create');

Route::get('/masters/wheat_rice_sugars/finish', function () {
    return view('masters.wheat_rice_sugars.finish');
});

Route::get('/masters/wheat_rice_sugars/edit/{id}', 'Wheat_rice_sugarController@edit');

Route::post('/masters/wheat_rice_sugars/finish/{id}', 'Wheat_rice_sugarController@finish');

Route::post('/masters/wheat_rice_sugars/delete/{id}', 'Wheat_rice_sugarController@delete');

// タンク
Route::get('/masters/tanks', function () {
    return view('masters.tanks');
});

Route::get('/masters/tanks/create', function () {
    return view('masters.tanks.create');
});

Route::get('/masters/tanks', 'tankController@index');

Route::get('/masters/tanks/create', 'tankController@show');

Route::post('/masters/tanks/create', 'tankController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/tanks/create');
})->name('/masters/tanks/create');

Route::get('/masters/tanks/finish', function () {
    return view('masters.tanks.finish');
});

Route::get('/masters/tanks/edit/{id}', 'tankController@edit');

Route::post('/masters/tanks/finish/{id}', 'tankController@finish');

Route::post('/masters/tanks/delete/{id}', 'tankController@delete');

// 副原料
Route::get('/masters/auxiliary_raw_materials', function () {
    return view('masters.auxiliary_raw_materials');
});

Route::get('/masters/auxiliary_raw_materials/create', function () {
    return view('masters.auxiliary_raw_materials.create');
});

Route::get('/masters/auxiliary_raw_materials', 'auxiliary_raw_materialController@index');

Route::get('/masters/auxiliary_raw_materials/create', 'auxiliary_raw_materialController@show');

Route::post('/masters/auxiliary_raw_materials/create', 'auxiliary_raw_materialController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/auxiliary_raw_materials/create');
})->name('/masters/auxiliary_raw_materials/create');

Route::get('/masters/auxiliary_raw_materials/finish', function () {
    return view('masters.auxiliary_raw_materials.finish');
});

Route::get('/masters/auxiliary_raw_materials/edit/{id}', 'auxiliary_raw_materialController@edit');

Route::post('/masters/auxiliary_raw_materials/finish/{id}', 'auxiliary_raw_materialController@finish');

Route::post('/masters/auxiliary_raw_materials/delete/{id}', 'auxiliary_raw_materialController@delete');

// 製品・容器
Route::get('/masters/product_containers', function () {
    return view('masters.product_containers');
});

Route::get('/masters/product_containers/create', function () {
    return view('masters.product_containers.create');
});

Route::get('/masters/product_containers', 'product_containerController@index');

Route::get('/masters/product_containers/create', 'product_containerController@show');

Route::post('/masters/product_containers/create', 'product_containerController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/product_containers/create');
})->name('/masters/product_containers/create');

Route::get('/masters/product_containers/finish', function () {
    return view('masters.product_containers.finish');
});

Route::get('/masters/product_containers/edit/{id}', 'product_containerController@edit');

Route::post('/masters/product_containers/finish/{id}', 'product_containerController@finish');

Route::post('/masters/product_containers/delete/{id}', 'product_containerController@delete');

// 取引先
Route::get('/masters/suppliers', function () {
    return view('masters.suppliers');
});

Route::get('/masters/suppliers/create', function () {
    return view('masters.suppliers.create');
});

Route::get('/masters/suppliers', 'supplierController@index');

Route::get('/masters/suppliers/create', 'supplierController@show');

Route::post('/masters/suppliers/create', 'supplierController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/suppliers/create');
})->name('/masters/suppliers/create');

Route::get('/masters/suppliers/finish', function () {
    return view('masters.suppliers.finish');
});

Route::get('/masters/suppliers/edit/{id}', 'supplierController@edit');

Route::post('/masters/suppliers/finish/{id}', 'supplierController@finish');

Route::post('/masters/suppliers/delete/{id}', 'supplierController@delete');

// 基本情報
Route::get('/masters/basic_informations', function () {
    return view('masters.basic_informations');
});

Route::get('/masters/basic_informations/create', function () {
    return view('masters.basic_informations.create');
});

Route::get('/masters/basic_informations', 'basic_informationController@index');

Route::get('/masters/basic_informations/create', 'basic_informationController@show');

Route::post('/masters/basic_informations/create', 'basic_informationController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/basic_informations/create');
})->name('/masters/basic_informations/create');

Route::get('/masters/basic_informations/finish', function () {
    return view('masters.basic_informations.finish');
});

Route::get('/masters/basic_informations/edit/{id}', 'basic_informationController@edit');

Route::post('/masters/basic_informations/finish/{id}', 'basic_informationController@finish');

Route::post('/masters/basic_informations/delete/{id}', 'basic_informationController@delete');

// 記号
Route::get('/masters/symbols', function () {
    return view('masters.symbols');
});

Route::get('/masters/symbols/create', function () {
    return view('masters.symbols.create');
});

Route::get('/masters/symbols', 'supplierController@index');

Route::get('/masters/symbols/create', 'symbolController@show');

Route::post('/masters/symbols/create', 'symbolController@add')->name('submit');

Route::get('/', function () {
    return view('/masters/symbols/create');
})->name('/masters/symbols/create');

Route::get('/masters/symbols/finish', function () {
    return view('masters.symbols.finish');
});

Route::get('/masters/symbols/edit/{id}', 'symbolController@edit');

Route::post('/masters/symbols/finish/{id}', 'symbolController@finish');

Route::post('/masters/symbols/delete/{id}', 'symbolController@delete');
