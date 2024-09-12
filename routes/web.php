<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesPernissionsController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__.'/auth.php';

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

        Route::view('/', 'dashboard')
            ->middleware(['auth', 'verified'])
            ->name('dashboard');

        Route::view('/', 'dashboard')
            ->middleware(['auth', 'verified'])
            ->name('home');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        Route::resource('users', UserController::class)->middleware(['auth', 'verified']);
        Route::resource('roles-permissions', RolesPernissionsController::class)->middleware(['auth', 'verified']);
        Route::post('/store_permission',[ RolesPernissionsController::class, 'store_permission'])->name('roles-permissions.store-permission')->middleware(['auth', 'verified']);
        Route::get('/get_roles_table',[ RolesPernissionsController::class, 'get_roles_table'])->name('get_roles_table')->middleware(['auth', 'verified']);




        Route::get('/create_role', function(){
            // $user = Auth::user();
            // return  Auth::user()->hasRole('super-admin') ? 'ok' : 'no';
            // $roles = Role::all();
            // foreach ($roles as $key => $value) {
            //     $value->delete();
            // }
            // $permissions = Permission::all();
            // foreach ($permissions as $key => $value) {
            //     $value->delete();
            // }
            // Permission::create(['name' => 'edit articles']);
            // Permission::create(['name' => 'delete articles']);
            // Permission::create(['name' => 'publish articles']);
            // Permission::create(['name' => 'unpublish articles']);

            // // create roles and assign existing permissions
            // $role1 = Role::create(['name' => 'writer']);
            // $role1->givePermissionTo('edit articles');
            // $role1->givePermissionTo('delete articles');
            // $user = User::find(1);
            // $user->assignRole($role1);
            // //  return  $roles = $user->getRoleNames();
            // if ($user->hasPermissionTo('edit articles')) {
            //   return 'ok' ;
            // }else{
            //     return 'no' ;
            // }
            // return $role1->permissions;
            // return $user->permissions;
            // return  $user->getRoleNames();
        });
    }
);
