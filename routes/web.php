<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariationController;
use App\Http\Controllers\WebInfoController;
use App\Models\Brand;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user 
Route::get('/user/profile', [UserController::class, 'user_profile'])->name('user.profile');
Route::post('/user/info/update', [UserController::class, 'user_info_update'])->name('user.info.update');
Route::post('/user/password/update', [UserController::class, 'user_pass_change'])->name('user.pass.change');
Route::post('/user/profile/image/update', [UserController::class, 'profile_photo_update'])->name('profile.photo.update');
Route::get('/user/list', [UserController::class, 'user_list'])->name('user.list');
Route::Post('/new/user/add', [UserController::class, 'newuser_add'])->name('newuser.add');
Route::get('/user/delete/{id}', [UserController::class, 'user_delete'])->name('user.delete');



// categorys
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'category_edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'category_update'])->name('category.update');
Route::get('/category/softdelte/{id}', [CategoryController::class, 'category_softdelte'])->name('category.softdelte');
Route::get('/trashlist', [CategoryController::class, 'trash_list'])->name('trash.list');
Route::get('/category/restore/{id}', [CategoryController::class, 'category_restore'])->name('category.restore');
Route::get('/category/parmarentdelete/{id}', [CategoryController::class, 'category_parmarentdelete'])->name('category.parmarentdelete');

// subcategory
Route::get('/subcategory', [SubCategoryController::class, 'subcategory'])->name('subcategory');
Route::post('/subcategory/store', [SubCategoryController::class, 'subcategory_store'])->name('subcategory.store');
Route::get('/subcategory/delete/{id}', [SubCategoryController::class, 'subcategory_delete'])->name('subcategory.delete');


// product
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::post('/getsubcategory', [ProductController::class, 'getsubcategory'])->name('getsubcategory');
Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
Route::get('/product/list', [ProductController::class, 'product_list'])->name('product.list');
Route::get('/product/edit/{id}', [ProductController::class, 'product_edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'product_update'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'product_delete'])->name('product.delete');
Route::post('/product/getstatus', [ProductController::class, 'getstatus'])->name('getstatus');
Route::post('/product/discount50', [ProductController::class, 'discount50']);
Route::post('/product/discount30', [ProductController::class, 'discount30']);
Route::delete('/ajax-gallery-image-delete/{id}', [ProductController::class, 'ajaxDeleteGalleryImage']);


// brand
Route::get('/brand', [BrandController::class, 'brand'])->name('brand');
Route::post('/brand/store', [BrandController::class, 'brand_store'])->name('brand.store');
Route::get('/brand/edit/{id}', [BrandController::class, 'brand_edit'])->name('brand.edit');
Route::post('/brand/update/{id}', [BrandController::class, 'brand_update'])->name('brand.update');
Route::get('/brand/delete/{id}', [BrandController::class, 'brand_delete'])->name('brand.delete');


// tags
Route::get('/tags', [TagController::class, 'tags'])->name('tags');
Route::post('/tags/store', [TagController::class, 'tags_store'])->name('tags.store');
Route::get('/tag/delte/{id}', [TagController::class, 'tag_delte'])->name('tag.delte');


// variation
Route::get('/variation', [VariationController::class, 'variation'])->name('variation');
Route::post('/color/store', [VariationController::class, 'color_store'])->name('color.store');
Route::get('/color/delete/{id}', [VariationController::class, 'color_delete'])->name('color.delete');
Route::post('/size/store', [VariationController::class, 'size_store'])->name('size.store');
Route::get('/size/delete/{id}', [VariationController::class, 'size_delete'])->name('size.delete');


// inventory
Route::get('/inventory/{id}', [InventoryController::class, 'inventory'])->name('inventory');
Route::Post('/inventory/store/{id}', [InventoryController::class, 'inventory_store'])->name('inventory.store');
Route::get('/inventory/delete/{id}', [InventoryController::class, 'inventory_delete'])->name('inventory.delete');

// offers
Route::get('/offers', [OffersController::class, 'offers'])->name('offers');



// web-info
Route::get('/webInfo', [WebInfoController::class, 'web_info'])->name('web.info');
Route::get('/addwebinfo', [WebInfoController::class, 'add_webinfo'])->name('add.webinfo');
Route::post('/webinfo/store', [WebInfoController::class, 'webinfo_store'])->name('webinfo.store');
Route::get('/webinfo/view/{id}', [WebInfoController::class, 'webinfo_view'])->name('webinfo.view');
Route::get('/webinfo/edit/{id}', [WebInfoController::class, 'webinfo_edit'])->name('webinfo.edit');
Route::get('/webinfo/delete/{id}', [WebInfoController::class, 'webinfo_delete'])->name('webinfo.delete');
Route::post('/webinfo/update/{id}', [WebInfoController::class, 'webinfo_update'])->name('webinfo.update');
Route::post('/webinfostatus', [WebInfoController::class, 'webinfostatus']);

require __DIR__ . '/auth.php';
