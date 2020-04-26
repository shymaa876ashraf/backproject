<?php
use App\Category;
use App\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addcategory', 'manage@addcategory');
Route::POST('/addcategory', 'manage@addcategory');
Route::get('/showcat',function(){
    $Category=Category::all();
    $arr2=Array('Category'=>$Category);
  return view('shows',$arr2);
  });
  Route::get('/addproduct', 'manage@addproduct');
Route::POST('/addproduct', 'manage@addproduct');
Route::get('/showpro',function(){
    $Product=Product::all();
    $arr2=Array('Product'=>$Product);
  return view('showpro',$arr2);
  });
  


Route::get('/addtocard.blade.php', function () {
    return view('addtocard');
});
Route::get('/adminhome.blade.php', function () {
    return view('adminhome');
});
Route::post('/adminhome.blade.php', function () {
    return view('adminhome');
});
/*Route::get('/deletecategory.blade.php', function () {
    return view('deletecategory');
});*/
Route::get('/deletecategory/{id}','manage@deletecategory');
Route::get('/deleteproduct/{id}', 'manage@deleteproduct');

/*
Route::get('/edittproduct.blade.php', function () {
    return view('edittproduct');
});*/
Route::get('/editcat',"manage@updatcat");
Route::post('/editcat',"manage@updatcat");



Route::get('/edittproduct',"manage@updatpro");
Route::post('/edittproduct',"manage@updatpro");




Route::get('/history.blade.php', function () {
    return view('history');
});
Route::get('/homee.blade.php', function () {
    return view('homee');
});
Route::get('/register.blade.php', function () {
    return view('register');
});
Route::get('/shoescience.blade.php', function () {
    return view('shoescience');
});
Route::get('/show.blade.php', function () {
    return view('show');
});
Route::get('/showanimie.blade.php', function () {
    return view('showanimie');
});
Route::get('/showartificial.blade.php', function () {
    return view('showartificial');
});
Route::get('/showcategory.blade.php', function () {
    return view('showcategory');
});
Route::post('/showcategory.blade.php', function () {
    return view('showcategory');
});
Route::get('/showhistory.blade.php', function () {
    return view('showhistory');
});
Route::get('/shownet.blade.php', function () {
    return view('shownet');
});
Route::get('/showpcomputer.blade.php', function () {
    return view('shoepcomputer');
});
Route::get('/showproductmath.blade.php', function () {
    return view('showproductmath');
});
Route::get('/showproducts.blade.php', function () {
    return view('showproducts');
});
Route::get('/showscience.blade.php', function () {
    return view('showscience');
});
Route::get('/showstatistics.blade.php', function () {
    return view('showstatistics');
});
Route::get('/signin.blade.php', function () {
    return view('signin');
});


