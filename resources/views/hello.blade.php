{{-- ForEach Loop ******* --}}
{{-- <!-- @foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach
 --> --}}

{{--****** <!-- //if else statement  -->
<!-- @if($user == "faraz")
<h3>Hi {{$user}}</h3>
@elseif($user == 'sam')
<h3>Hello {{$user}}</h3>
@else
<h3>Unknown User</h3>
@endif -->

<!-- @for($i=0; $i < 10; $i++) 
<h4>{{$i}}</h4>
@endfor --> --}}



{{-- <h1>User Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username">  <br>
    <span style="color: red">@error('username'){{$message}} @enderror</span>
     <br>
     <br>
    
    <input type="password" name="password" placeholder="Enter Password"> <br>
    <span style="color: red">@error('password'){{$message}} @enderror</span>
     <br>
    <button type="submit">Login</button>

</form> --}}


{{-- ROUTING ************** --}}
{{-- 
Route::get("users",[UserController::class, 'loadView']);

Route::get('/users/{name}', function ($name) {
    return view('users',['user' => $name]);
    return redirect("about");
});

Route::get("users/{name}",[UserController::class,
'loadView']);
Route::view('url_name','view_name'); (we cannot pass parameter)

Route::get('/about', function () {
    return view('about');
});

Route::view('about', 'about');
Route::view('contact', 'contact');

calling from controller 
Route::get('url_path',[ControllerName::class, 'function_name']);
Route::get("users/{user}",[Users::class,'index']);

Route::view("users","users");
Route::view("about","about"); --}}


{{-- GROUP MIDDLEWARE ROUTING  ***********--}}
{{-- Route::group(['middleware'=>['protectedPage']], function() {
    Route::view("users","users");
    Route::get('/', function () {
        return view('welcome');
    });
    
}); --}}


{{-- Middle ware  --}}
{{-- route middleware  --}}
{{-- Route::post("users",[UserController::class,'getData']);
Route::view("users","users")->middleware('protectedPage');
Route::view("home","home");
Route::view("noaccess","noaccess"); --}}




{{-- data from Controller  --}}

{{-- 
function loadView() 
{
    $data = ['anil','peter','rockey','bruce'];
    return view("users",['users' => $data]);
}

function getData(Request $req)
{
    $req->validate([
'username' => 'required | max:10', 
'password' => 'required | min:5' 
   ]);
    return $req->input();
}
} --}}


{{-- function getData() {
    return User::all();
}

function index() {
    return DB::select("SELECT * FROM users");
}
} --}}