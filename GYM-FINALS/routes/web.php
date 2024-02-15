<?php 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DBoardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/bmi-calculator', [CalculatorController::class, 'index']);
Route::get('/membership_registration', [MembershipController::class, 'showRegistrationForm'])->name('membership_registration');
Route::post('/membership_registration', [MembershipController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
// Route::get('/{any?}', [HomeController::class, 'index'])->name('home.index')->where('any', '.*');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/dashboard', function () {
    return redirect()->route('index');
})->name('dashboard.index');









