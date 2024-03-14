<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSide\MainController;
use App\Livewire\RssPrompt;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserSide\TrendController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/ooooo', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('userside/profile');
});

// START HAMZA
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin-dash', [MainController::class, 'adminDash'])->name('adminDash');

    Route::post('/rss.store', [PromptController::class, 'storeRss'])->name('rss.store');

    Route::get('/stored-rss-links', function () {
        return view('AdminSide.layout.rss-links-list');
    })->name('storedRssLinks');

    Route::get('/stored-rss-items', function () {
        return view('AdminSide.layout.rss-items-list');
    })->name('storedRssItems');

    Route::get('/users-dash', function () {
        return view('AdminSide.users-mng.users-dash');
    })->name('storedUsers');

    Route::get('/flowchart', function () {
        return view('AdminSide.flowchart');
    })->name('flowchart');

    Route::get('/piechart', function () {
        return view('AdminSide.piechart');
    })->name('piechart');

    Route::get('/rss-lists', [MainController::class, 'rssLists']);

    Route::get('/items-by-category', [MainController::class, 'itemsByCategory']);

    Route::get('/display-items', [MainController::class, 'rssItems'])->name('display-items');

    //  this route is just for a test purpose
    Route::post('/logout', function () {
        auth()->user()->logout();
    })->name('logout');


 });
/* Profile Route */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::put('/profile/userInfo', [ProfileController::class, 'userInfoUpdate'])->name('profile.userInfo.update');

    Route::put('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Trend Route:
    Route::get('/Trend', [TrendController::class, 'index'])->name('news.trend');
});
// END HAMZA


// START NAWFAL
/** hover show */
function hover_show($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'hover show' : '';
    }
    return Request::path() == $route ? 'hover show' : '';
}

/** for side bar menu active */
function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/add-to-favorites/{rssItemId}', [RssPrompt::class, 'addToFavorites'])->name('addToFavorites');
Route::delete('/remove-from-favorites/{rssItemId}', [RssPrompt::class, 'removeFromFavorites'])->name('removeFromFavorites');


Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('home', function () {
        return view('home');
    });
});

Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // ----------------------------login ------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login/push', 'authenticate')->name('login/push');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('change/password', 'changePassword')->name('change/password');
    });

    // ------------------------ register sccount ----------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register/form', 'index')->name('register/form');
        Route::post('register/save', 'saveRecord')->name('register/save');
    });

    // -------------------------- forgot password ---------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('/forgot/password', 'sendEmail')->name('forgot/password');
        Route::post('post/email', 'postEmail')->name('post/email');
    });

    // ------------------------- reset password -----------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset/password/{token}', 'getPassword');
        Route::post('reset/password', 'updatePassword')->name('reset/password');
    });

    // ------------------------ confirm password -----------------------//
    Route::controller(ConfirmPasswordController::class)->group(function () {
        Route::get('confirm/password', 'confirmPassword')->name('confirm/password');
    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // -------------------------- main dashboard ----------------------//
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->middleware('auth')->name('home');
    });

    // ------------------------- User Management ----------------------//
    Route::controller(UserManagementController::class)->group(function () {
        Route::get('users/list/page', 'index')->middleware('auth')->name('users/list/page');
        Route::get('profile/{user_id}', 'userView')->middleware('auth');
    });
});


// END NAWFAL


// START IMAD
Route::get('/homeuser', function () {
    return view('UserSide.home');
})->name('homeuser');

Route::controller(HomeController::class)->group(function () {
    Route::get('/tendance', 'tendance')->name('tendance');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/favorites', 'favorites')->name('favorites');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');



// routes/web.php

use App\Http\Controllers\UserSide\CommentController;

Route::post('/comments/store', [CommentController::class, 'store']);


// END IMAD

Route::get('/news/{id}/{slug}', [HomeController::class, 'newsDetail'])->name('news.detail');
