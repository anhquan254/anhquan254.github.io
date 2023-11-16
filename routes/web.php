<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\homapageController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\NhapKhoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileClientController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WareHouseController;
use App\Http\Controllers\WareHouseReceiptController;
use App\Models\Booking;
use App\Models\Brand;
use App\Models\LoginCustomer;
use App\Models\WareHouse;
use Illuminate\Support\Facades\Route;


//  =============================================ADMINS============================================================

Route::get('/login/admin', [AdminController::class, 'indexSignin'])->name('indexSignin');
Route::post('/signIn', [AdminController::class, 'signIn'])->name('signIn');

Route::group(['middleware' => 'admin', 'prefix' => '/admin'], function () {
    Route::get('/signOut', [AdminController::class, 'signOut'])->name('signOut');

    Route::group(['prefix' => '/notification'], function () {
        Route::get('/abc/{id}', [NotificationController::class, 'indexNotification'])->name('indexNotification');
        Route::get('/dataNotification', [NotificationController::class, 'data'])->name('dataNotification');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileAdminController::class, 'indexProfile'])->name('indexProfileAdmin');
        Route::get('/data', [ProfileAdminController::class, 'data'])->name('dataAdmin');
        Route::post('/doi-mat-khau', [ProfileAdminController::class, 'changePass'])->name('changePass');
    });

    Route::group(['prefix' => 'warehouse'], function () {
        Route::get('/', [WareHouseController::class, 'indexWareHouse'])->name('indexWareHouse');
        Route::get('/data', [WareHouseController::class, 'data'])->name('dataWareHouse');
        Route::get('/dataTemporaryWareHouse', [WareHouseController::class, 'dataTemporaryWareHouse'])->name('dataTemporaryWareHouse');
        Route::post('/create', [WareHouseController::class, 'add'])->name('createWareHouse');
        Route::post('/updateThanhTien', [WareHouseController::class, 'updateThanhTien'])->name('updateThanhTien');
        Route::post('/delete', [WareHouseController::class, 'del'])->name('deleteWareHouse');
        Route::post('/storeWareHouse', [WareHouseController::class, 'createWareHouse'])->name('storeWareHouse');
        Route::post('/search', [WareHouseController::class, 'search'])->name('searchWareHouse');
        Route::post('/update', [WareHouseController::class, 'update'])->name('updatehWareHouse');
    });

    Route::group(['prefix' => 'warehouse-receipt'], function () {
        Route::get('/', [WareHouseReceiptController::class, 'indexWR'])->name('indexWR');
        Route::post('/data', [WareHouseReceiptController::class, 'data'])->name('dataWR');
        Route::post('/detail', [WareHouseReceiptController::class, 'detail'])->name('detailWareHouse');
    });

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [AdminController::class, 'indexDashboard'])->name('indexDashboard');
        Route::get('/data', [AdminController::class, 'dataDashboard'])->name('dataDashboard');
    });

    Route::group(['prefix' => 'brands'], function () {
        Route::get('/', [BrandController::class, 'indexBrand'])->name('indexBrand');
        Route::get('/data', [BrandController::class, 'data'])->name('dataBrand');
        Route::post('/create', [BrandController::class, 'add'])->name('createBrand');
        Route::post('/del', [BrandController::class, 'del'])->name('delBrand');
        Route::post('/search', [BrandController::class, 'search'])->name('searchBrand');
        Route::post('/update', [BrandController::class, 'update'])->name('updateBrand');
        Route::post('/status', [BrandController::class, 'status'])->name('statusBrand');
    });

    Route::group(['prefix' => 'vehicles'], function () {
        Route::get('/', [VehicleController::class, 'indexVehicle'])->name('indexVehicle');
        Route::get('/data', [VehicleController::class, 'data'])->name('dataVehicle');
        Route::post('/create', [VehicleController::class, 'add'])->name('createVehicle');
        Route::post('/uploadImage', [VehicleController::class, 'upLoad'])->name('upLoadImage');
        Route::post('/search', [VehicleController::class, 'search'])->name('searchVehicle');
        Route::post('/changeStatus', [VehicleController::class, 'changeStatus'])->name('changeStatus');
        Route::post('/del', [VehicleController::class, 'del'])->name('deleteVehicle');
        Route::post('/edit_img', [VehicleController::class, 'upLoadImg'])->name('edit_img');
        Route::post('/update', [VehicleController::class, 'update'])->name('updateVehicle');
    });

    Route::group(['prefix' => 'classification'], function () {
        Route::get('/', [ClassificationController::class, 'indexClassification'])->name('indexClassification');
        Route::get('/data', [ClassificationController::class, 'data'])->name('dataClassification');
        Route::post('/create', [ClassificationController::class, 'store'])->name('addClassification');
        Route::post('/search', [ClassificationController::class, 'search'])->name('searchClassification');
        Route::post('/delete', [ClassificationController::class, 'delete'])->name('deleteClassification');
    });

    Route::group(['prefix' => 'bookings'], function () {
        Route::get('/', [BookingController::class, 'indexBooking'])->name('indexBooking');
        Route::get('/data', [BookingController::class, 'data'])->name('dataBooking');
        Route::post('/delete', [BookingController::class, 'delete'])->name('deleteBooking');
        Route::post('/search', [BookingController::class, 'search'])->name('searchBooking');
        Route::post('/changeStatus', [BookingController::class, 'changeStatus'])->name('changeStatusBooking');
    });

    Route::group(['prefix' => 'testimonials'], function () {
        Route::get('/', [AdminController::class, 'indexTestimonial'])->name('indexTestimonial');
    });

    Route::group(['prefix' => 'reports'], function () {
        Route::get('/', [AdminController::class, 'indexReports'])->name('indexReports');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [ClientController::class, 'indexUser'])->name('indexUser');
        Route::get('/data', [ClientController::class, 'data'])->name('dataUser');
        Route::post('/status', [ClientController::class, 'status'])->name('statusUser');
        Route::post('/search', [ClientController::class, 'search'])->name('searchUser');
        Route::post('/del', [ClientController::class, 'del'])->name('delUser');
    });
});

//  =============================================CLIENTS============================================================

Route::get('/login/client', [LoginCustomerController::class, 'indexLoginCustomer'])->name('indexLoginCustomer');
Route::post('/client/signIn', [LoginCustomerController::class, 'signIn'])->name('signInClient');
Route::get('/active/{code}', [LoginCustomerController::class, 'activeAccount']);
Route::get('/logOut', [CustomerController::class, 'logOut'])->name('logOutClient');


Route::get('/signup/client', [LoginCustomerController::class, 'indexSignUp'])->name('indexSignUp');
Route::post('/client/signUp', [LoginCustomerController::class, 'signUp'])->name('signUpClient');


Route::get('/', [CustomerController::class, 'indexHome'])->name('indexHome');


Route::group(['prefix' => '/client', 'middleware' => 'client'], function () {
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/data', [GioHangController::class, 'data'])->name('dataGioHang');
        Route::post('/del', [GioHangController::class, 'del'])->name('delGioHang');
        Route::post('/create', [GioHangController::class, 'create'])->name('createGioHang');
        Route::post('/update', [GioHangController::class, 'update'])->name('updateGioHang');
    });

    Route::group(['prefix' => '/profile'], function () {
        Route::get('/', [ProfileClientController::class, 'indexProfile'])->name('indexProfile');
        Route::get('/dataProfile', [ProfileClientController::class, 'dataProfile'])->name('dataProfile');
        Route::post('/updateProfile', [ProfileClientController::class, 'updateProfile'])->name('updateProfile');
        Route::get('/change-password', [ProfileClientController::class, 'indexChangePass'])->name('indexChangePass');
        Route::post('/updatePassword', [ProfileClientController::class, 'updatePassword'])->name('updatePassword');
        Route::get('/order', [ProfileClientController::class, 'order'])->name('orderClient');
    });
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'indexContact'])->name('indexContact');
    Route::get('/data', [ContactController::class, 'data'])->name('dataContact');
    Route::post('/create', [ContactController::class, 'add'])->name('createContact');
});


Route::get('/detail', [CustomerController::class, 'indexDetail'])->name('indexDetail');
Route::get('/detail/{slug_xe}', [CustomerController::class, 'indexDetail'])->name('indexDetail');
Route::post('/detail/image', [CustomerController::class, 'loadImageDetail'])->name('loadImageDetail');
Route::get('/data-thuong-hieu', [CustomerController::class, 'getThuongHieu'])->name('getThuongHieu');

Route::get('/data', [homapageController::class, 'data'])->name('dataHomePage');
Route::get('/data-all', [homapageController::class, 'data_all'])->name('dataHomePageAll');
Route::get('/all-product', [homapageController::class, 'allProduct'])->name('allProduct');
Route::get('/all-product/data-menu', [homapageController::class, 'dataMenuAllProduct'])->name('dataMenuAllProduct');

Route::post('/all-product/fillter', [homapageController::class, 'filter'])->name('filterAllProduct');
