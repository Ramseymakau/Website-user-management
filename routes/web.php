<?php



use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WelcomeController;

//dd(Route::getRoutes());

Route::get('/', function () {
    return view('welcome');
});
Route::get('/coming_soon', function (){
    return view('coming_soon');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/password/reset', [LoginController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/email', [LoginController::class, 'sendResetLinkEmail'])->name('email.reset');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'show'])->name('admin.dashboard');//->middleware('auth:admin');
    Route::get('/student/dashboard', [StudentController::class, 'show'])->name('student.dashboard');//->middleware('auth:student');
    Route::get('/teacher/dashboard', [TeacherController::class, 'show'])->name('teacher.dashboard');//->middleware('auth:teacher');
});

Route::get('/userslist', [UserController::class, 'index'])->name('admin.userslist');

Route::get('/admins', [AdminController::class, 'index'])->name('admins.list');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.list');
Route::get('/students', [StudentController::class, 'index'])->name('students.list');
Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles');


Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}/update', [UserController::class, 'update'])->name('user.update');


Route::delete('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');





//Route::post('newuser', [UserController::class, 'store'])->name('user.store');
//Route::get('newuser', [UserController::class, 'create'])->name('user.create');
//Route::get('user/{user}/delete' function(){
    //return view('deleteuser')});
//Route::patch('users/{user}', [UserController::class, 'update'])->name('user.update');

//Route::get('/login', function () {
  //  return view('login');
//})->name('login');
//Route::post('/login', [HomeController::class, '__construct'])->name('login.post');


//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
