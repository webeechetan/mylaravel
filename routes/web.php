<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Models\User;
use App\Http\Controllers\CommentController;
use App\Jobs\SendBulkEmailJob;
use App\Mail\SendBulkEmail;
use App\Http\Livewire\LoginForm;


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


Route::get('/send', function(){
    $users = ['chetan@gmail.com','rahul@gmail.com','josh@gmail.com','josh@gmail.com','josh@gmail.com'];
    foreach ($users as $user) {
        dispatch(new SendBulkEmailJob($user));
    }
    
    // dd('d');
});


Route::get('/login', LoginForm::class);

Route::get('comment/create',[CommentController::class, 'create']);
Route::get('comment/edit/{comment:comment}',[CommentController::class, 'edit']);
Route::post('comment/store',[CommentController::class, 'store'])->name('comment.store');

Route::get('/gallery',[GalleryController::class, 'index']);
Route::get('/gallery/{folder}',[GalleryController::class, 'viewFolder'])->name('folder');

// Route::get('/', function () {
//     $users = User::with('posts')->get();
//     foreach ($users as $user) {
//         echo $user->name;
//         echo '<br>';
//         foreach ($user->posts as $post) {
//             echo $post->title .'<br>';
//         }
//         echo "<hr>";
//     }
//     // return view('welcome');
// });

// Route::get('posts',[PostController::class, 'index'])->name('post.list');
// Route::get('post/create',[PostController::class, 'create']);
// Route::post('post/store',[PostController::class, 'store'])->name('post.store');


// // Route::get('/user',function () {
// //     $user = new User();
// //     $user->name = 'chetn ';
// //     $user->email = 'chetan@example.com';
// //     $user->password = 'password';
// //     $user->save();
// // });

