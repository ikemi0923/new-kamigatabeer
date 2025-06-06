<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MaltController;
use App\Http\Controllers\HopController;
use App\Http\Controllers\AuxiliaryRawMaterialController;
use App\Http\Controllers\YeastController;
use App\Http\Controllers\WheatRiceSugarController;
use App\Http\Controllers\ProductContainerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BasicInformationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SymbolController;
use App\Http\Controllers\TankController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

// ログイン関係
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);

// メニュー画面
Route::get('/menu', [MenuController::class, 'index']);

// マスター管理メニュー画面
Route::get('/master', function () {
    return view('masters.masters');
});

Route::prefix('master/malts')->group(function () {
    Route::get('/', [MaltController::class, 'index']);
    Route::get('/create', [MaltController::class, 'create']);
    Route::post('/', [MaltController::class, 'store']);
    Route::get('/{id}/edit', [MaltController::class, 'edit']);
    Route::put('/{id}', [MaltController::class, 'update']);
    Route::delete('/{id}', [MaltController::class, 'destroy']);
});

Route::prefix('master/hops')->group(function () {
    Route::get('/', [HopController::class, 'index'])->name('hops.index');
    Route::get('/create', [HopController::class, 'create'])->name('hops.create');
    Route::post('/', [HopController::class, 'store'])->name('hops.store');
    Route::get('/{id}/edit', [HopController::class, 'edit'])->name('hops.edit');
    Route::put('/{id}', [HopController::class, 'update'])->name('hops.update');
    Route::delete('/{id}', [HopController::class, 'destroy'])->name('hops.destroy');
});

Route::prefix('master/auxiliary_raw_materials')->group(function () {
    Route::get('/', [AuxiliaryRawMaterialController::class, 'index']);
    Route::get('/create', [AuxiliaryRawMaterialController::class, 'create']);
    Route::post('/', [AuxiliaryRawMaterialController::class, 'store']);
    Route::get('/{id}/edit', [AuxiliaryRawMaterialController::class, 'edit']);
    Route::put('/{id}', [AuxiliaryRawMaterialController::class, 'update']);
    Route::delete('/{id}', [AuxiliaryRawMaterialController::class, 'destroy']);
});

Route::prefix('master/yeasts')->group(function () {
    Route::get('/', [YeastController::class, 'index']);
    Route::get('/create', [YeastController::class, 'create']);
    Route::post('/', [YeastController::class, 'store']);
    Route::get('/{id}/edit', [YeastController::class, 'edit']);
    Route::put('/{id}', [YeastController::class, 'update']);
    Route::delete('/{id}', [YeastController::class, 'destroy']);
});

Route::prefix('master/wheat_rice_sugars')->group(function () {
    Route::get('/', [WheatRiceSugarController::class, 'index'])->name('wheat_rice_sugars.index');
    Route::get('/create', [WheatRiceSugarController::class, 'create'])->name('wheat_rice_sugars.create');
    Route::post('/', [WheatRiceSugarController::class, 'store'])->name('wheat_rice_sugars.store');
    Route::get('/{id}/edit', [WheatRiceSugarController::class, 'edit'])->name('wheat_rice_sugars.edit');
    Route::put('/{id}', [WheatRiceSugarController::class, 'update'])->name('wheat_rice_sugars.update');
    Route::delete('/{id}', [WheatRiceSugarController::class, 'destroy'])->name('wheat_rice_sugars.destroy');
});

Route::prefix('master/product_containers')->group(function () {
    Route::get('/', [ProductContainerController::class, 'index'])->name('product_containers.index');
    Route::get('/create', [ProductContainerController::class, 'create'])->name('product_containers.create');
    Route::post('/', [ProductContainerController::class, 'store'])->name('product_containers.store');
    Route::get('/{id}/edit', [ProductContainerController::class, 'edit'])->name('product_containers.edit');
    Route::put('/{id}', [ProductContainerController::class, 'update'])->name('product_containers.update');
    Route::delete('/{id}', [ProductContainerController::class, 'destroy'])->name('product_containers.destroy');
});

Route::prefix('master/suppliers')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create');
    Route::post('/', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/{id}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::put('/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
});

Route::prefix('master')->group(function () {
    Route::get('basic_informations', [BasicInformationController::class, 'index'])->name('basic_information.index');
    Route::put('basic_informations', [BasicInformationController::class, 'update'])->name('basic_information.update');
});

Route::prefix('master/employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
});

Route::prefix('master/employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
});

Route::prefix('master/stores')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('stores.index');
    Route::get('/create', [StoreController::class, 'create'])->name('stores.create');
    Route::post('/', [StoreController::class, 'store'])->name('stores.store');
    Route::get('/{id}/edit', [StoreController::class, 'edit'])->name('stores.edit');
    Route::put('/{id}', [StoreController::class, 'update'])->name('stores.update');
    Route::delete('/{id}', [StoreController::class, 'destroy'])->name('stores.destroy');
});

Route::prefix('master/symbols')->group(function () {
    Route::get('/', [SymbolController::class, 'index'])->name('symbols.index');
    Route::get('/create', [SymbolController::class, 'create'])->name('symbols.create');
    Route::post('/', [SymbolController::class, 'store'])->name('symbols.store');
    Route::get('/{id}/edit', [SymbolController::class, 'edit'])->name('symbols.edit');
    Route::put('/{id}', [SymbolController::class, 'update'])->name('symbols.update');
    Route::delete('/{id}', [SymbolController::class, 'destroy'])->name('symbols.destroy');
});

Route::prefix('master/tanks')->group(function () {
    Route::get('/', [TankController::class, 'index'])->name('tanks.index');
    Route::get('/create', [TankController::class, 'create'])->name('tanks.create');
    Route::post('/', [TankController::class, 'store'])->name('tanks.store');
    Route::get('/{id}/edit', [TankController::class, 'edit'])->name('tanks.edit');
    Route::put('/{id}', [TankController::class, 'update'])->name('tanks.update');
    Route::delete('/{id}', [TankController::class, 'destroy'])->name('tanks.destroy');
});

Route::prefix('master/items')->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('items.index');
    Route::get('/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/', [ItemController::class, 'store'])->name('items.store');
    Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('/{id}', [ItemController::class, 'update'])->name('items.update');
    Route::delete('/{id}', [ItemController::class, 'destroy'])->name('items.destroy');
});

Route::prefix('master/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
