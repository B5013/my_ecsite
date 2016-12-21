<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

Route::get('/ktop', function(){
  return view('ktop');
});

///管理画面::従業員管理トップ
Route::get('/emp', function(){
$admin = DB::table('admins')->get();

  return view('emp',[
    "admin" =>$admin
  ]);
});
//管理画面::顧客管理トップ
Route::get('/user', function(){
$user = DB::table('users')->get();

  return view('usertop',[
    "user" =>$user
  ]);
});

//管理画面::検索機能　
Route::post('/search', function (Request $request) {
    $kazu = 1;
    $name = $request->get('name');
    $product = DB::table('product')->where('name','like',"%{$name}%")->get();
    return view('policetop', [
        "product" => $product, "kazu"=>$kazu
    ]);
});

//管理画面::並び替え機能　asc
Route::post('/asc', function () {
     $kazu = 0;
    $product= DB::table('product')->orderby('price','asc')->get();

     return view('policetop', [
        "product" => $product, "kazu"=>$kazu
         ]);
});

//管理画面::並び替え機能　desc
Route::post('/desc', function () {
    $kazu = 0;
    $product= DB::table('product')->orderby('price','desc')->get();

     return view('policetop', [
        "product" => $product, "kazu"=>$kazu
         ]);
});

//管理画面::従業員追加画面
Route::get('/addemp', function () {
    return view('addemp');
});

//商品を追加
Route::post('/insertemp',function(Request $request){
    $name = $request->get("name");
    $mail = $request->get("mail");
    $pass = $request->get("pass");
    $now = Carbon::now();
DB::table('admins')
        ->insert(["name"=>$name,"email"=>$mail,"password"=>$pass,"created_at" => $now,"updated_at" => $now]);
      return redirect("/emp");
});


//管理画面::追加画面
Route::get('/add', function () {
    return view('add');
});

//管理画面:更新画面
Route::get('/update', function (Request $request) {
    $id = $request->get("id");
    $product = DB::table('product')->where('id', $id)->first();
    return view('update',[
        "product" => $product
    ]);
});

//商品を追加
Route::post('/insert',function(Request $request){
    $name = $request->get("name");
    $price = $request->get("price");
    $co = $request->get("co");
    $img = $request->get("img");
    $comment = $request->get("comment");
    $lncludeditems = $request->get("lncludeditems");
    $postage =  $request->get("postage");
    $now = Carbon::now();
DB::table('product')
        ->insert(["name"=>$name,"co"=>$co,"price"=>$price,"img"=>$img,"comment"=>$comment,"lncludeditems"=>$lncludeditems,"postage"=>$postage,"created_at" => $now,"updated_at" => $now]);
      return redirect("/product");
});

//商品の情報を更新
Route::post('/update/any', function (Request $request) {
    $id = $request->get("id");
    $name = $request->get("name");
    $price = $request->get("price");
    $co = $request->get("co");
    $img = $request->get("img");
    $comment = $request->get("comment");
    $lncludeditems = $request->get("lncludeditems");
    $now = Carbon::now();
    DB::table('product')
        ->where('id', $id)
        ->update(["name"=>$name,"co"=>$co,"price"=>$price,"img"=>$img,
                "comment"=>$comment,"lncludeditems"=>$lncludeditems,
                "updated_at"=>$now]);
      return redirect("/product");
});

//トップページ
Route::get('/new', function () {
    $product = DB::table('product')->get();
    return view('newpage',[
        "product" => $product
    ]);
});

//管理画面top
Route::get('/product', function () {
    $kazu = 0;
    $product = DB::table('product')->get();
    return view('policetop',[
        "product" => $product,"kazu" =>$kazu
    ]);
});

//管理画面:商品をテーブルから削除
Route::get('/topdelete',function(Request $request){
      $id = $request->get("id");
    $product = DB::table('product')->where('id', $id)->delete();
    return redirect("/product");
});

//管理画面::商品の詳細表示
Route::get('/show', function (Request $request){
    $id = $request->get("id");
    $product = DB::table('product')->where('id', $id)->first();
    return view('show',[
        "product" => $product
    ]);
});

//詳細ページ
Route::get('/shop', function (Request $request){
    $id = $request->get("id");
    $product = DB::table('product')->where('id', $id)->first();
    return view('shop',[
        "product" => $product
    ]);
});

//カートに入れる
Route::post('/cart',function(Request $request){
    $id = $request->get("id");
    $cart = new \App\Service\CartService();
    $cart->addItem($id);
    return redirect("/cart");
});

//カートの中を一覧表示
Route::get('/cart', function(){
    $cart = new \App\Service\CartService();
    return view("cart", [
        "items" => $cart->getItems()
    ]);
});

//商品を削除
Route::get('/delete',function(Request $request){
    $index = $request->get("index");
    $cart = new \App\Service\CartService();
    $cart->removeItem($index);
    return redirect("/cart");
});

//カートを空にする
Route::get('/delete/all',function(){
    $cart = new \App\Service\CartService();
    $cart->clear();
    return redirect("/cart");
});


//Admin Login
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout');

//Admin Register
Route::get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\RegisterController@register');

//Admin Passwords
Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

//User Login
Route::get('user/login', 'UserAuth\LoginController@showLoginForm');
Route::post('user/login', 'UserAuth\LoginController@login');
Route::post('user/logout', 'UserAuth\LoginController@logout');

//User Register
Route::get('user/register', 'UserAuth\RegisterController@showRegistrationForm');
Route::post('user/register', 'UserAuth\RegisterController@register');

//User Passwords
Route::post('user/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('user/password/reset', 'UserAuth\ResetPasswordController@reset');
Route::get('user/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('user/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');

Auth::routes();

Route::get('/home', 'HomeController@index');
