<?php

use App\Http\Controllers\HomeController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboards.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Dashboard Routes
  Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

  //App Details Page => 'Dashboard'], function() {
    Route::group(['prefix' => 'MenuStyle'], function() {
      //MenuStyle Page Routs
      Route::get('horizontal', [HomeController::class, 'horizontal'])->name('MenuStyle.horizontal');
      Route::get('dualhorizontal', [HomeController::class, 'dualhorizontal'])->name('MenuStyle.dualhorizontal');
      Route::get('dualcompact', [HomeController::class, 'dualcompact'])->name('MenuStyle.dualcompact');
      Route::get('boxed', [HomeController::class, 'boxed'])->name('MenuStyle.boxed');
      Route::get('boxedfancy', [HomeController::class, 'boxedfancy'])->name('MenuStyle.boxedfancy');
    });

  //App Details Page => 'special-pages'], function() {
  Route::group(['prefix' => 'special-pages'], function() {
    //Example Page Routs
    Route::get('billing', [HomeController::class, 'billing'])->name('special-pages.billing');
    Route::get('calender', [HomeController::class, 'calender'])->name('special-pages.calender');
    Route::get('kanban', [HomeController::class, 'kanban'])->name('special-pages.kanban');
    Route::get('pricing', [HomeController::class, 'pricing'])->name('special-pages.pricing');
    Route::get('rtlsupport', [HomeController::class, 'rtlsupport'])->name('special-pages.rtlsupport');
    Route::get('timeline', [HomeController::class, 'timeline'])->name('special-pages.timeline');
  });

  //Widget Routs
  Route::group(['prefix' => 'Widget'], function() {
    Route::get('widgetbasic', [HomeController::class, 'widgetbasic'])->name('Widget.widgetbasic');
    Route::get('widgetchart', [HomeController::class, 'widgetchart'])->name('Widget.widgetchart');
    Route::get('widgetcard', [HomeController::class, 'widgetcard'])->name('Widget.widgetcard');
  });

  //Maps Routs
  Route::group(['prefix' => 'Maps'], function() {
    Route::get('google', [HomeController::class, 'google'])->name('Maps.google');
    Route::get('vector', [HomeController::class, 'vector'])->name('Maps.vector');
  });

  //Auth pages Routs
  Route::group(['prefix' => 'auth'], function() {
    Route::get('signin', [HomeController::class, 'signin'])->name('auth.signin');
    Route::get('signup', [HomeController::class, 'signup'])->name('auth.signup');
    Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('auth.confirmmail');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('auth.lockscreen');
    Route::get('recoverpw', [HomeController::class, 'recoverpw'])->name('auth.recoverpw');
    Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('auth.userprivacysetting');
  });
  
  //User pages Routs
  Route::group(['prefix' => 'Users'], function() {
    Route::get('userprofile', [HomeController::class, 'userprofile'])->name('Users.userprofile');
    Route::get('useradd', [HomeController::class, 'useradd'])->name('Users.useradd');
    Route::get('userlist', [HomeController::class, 'userlist'])->name('Users.userlist');
  });

  //Error Page Route
  Route::group(['prefix' => 'errors'], function() {
    Route::get('error404', [HomeController::class, 'error404'])->name('errors.error404');
    Route::get('error500', [HomeController::class, 'error500'])->name('errors.error500');
    Route::get('maintenance', [HomeController::class, 'maintenance'])->name('errors.maintenance');
  });

//UI Pages Routs
    Route::get('/', [HomeController::class, 'uisheet'])->name('uisheet');
  

//Forms Pages Routs
  Route::group(['prefix' => 'forms'], function() {
    Route::get('element', [HomeController::class, 'element'])->name('forms.element');
    Route::get('wizard', [HomeController::class, 'wizard'])->name('forms.wizard');
    Route::get('validation', [HomeController::class, 'validation'])->name('forms.validation');
  });


//Table Page Routs
  Route::group(['prefix' => 'table'], function() {
   Route::get('bootstraptable', [HomeController::class, 'bootstraptable'])->name('table.bootstraptable');
   Route::get('datatable', [HomeController::class, 'datatable'])->name('table.datatable');
  });

  //Icons Page Routs
  Route::group(['prefix' => 'Icons'], function() {
    Route::get('solid', [HomeController::class, 'solid'])->name('Icons.solid');
    Route::get('outline', [HomeController::class, 'outline'])->name('Icons.outline');
    Route::get('dualtone', [HomeController::class, 'dualtone'])->name('Icons.dualtone');
    Route::get('colored', [HomeController::class, 'colored'])->name('Icons.colored');
  });
//Extra Page Routs
  Route::get('PrivacyPolicy', [HomeController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
  Route::get('TermsofUse', [HomeController::class, 'TermsofUse'])->name('TermsofUse');

  

  