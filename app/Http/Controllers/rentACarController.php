<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use App\Models\User;
use App\Models\Cart;
use App\Models\Cars;

use Cookie;
use Session;
use Illuminate\Support\Facades\Hash;

use Validator;
use Illuminate\Support\Facades\Auth;

class rentACarController extends Controller
{
    //view cart
    public function index(){
        $data = Cookie::get('user_id');
        $data2 = User::find($data);
        $cars = Cars::all();
        return view('index', ['data' => $data2 ],['car'=>$cars]);
        
         
    }
    public function admin_login(){
        return view('admin_login');
    }
    public function login_page(){
        return view('login_page');
    }
    public function sign_up(){
        return view('sign_up');
    }
    public function dashboard(){
        return view('index2');
    }
    public function AddCar(){
        return view('AddCar');
    }


  

    //for post for database input data
    
    public function reg(Request $request){
        // dd($request->all());
  
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password'=> 'required|min:8',
        ]);

        if($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        }
        $validated = $validator->safe()->only(['username', 'email','password']);

        User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            
        ]);
        return redirect('login');

        
    }

    public function log(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $data = User::where('email', $email)->first();

        if ($data && Hash::check($password, $data->password)) {
            Cookie::queue(Cookie::make('user_id', $data->id, 60));
            return redirect()->intended('home');
        } else {
            Session::flash('error', 'Invalid email or password');
            return redirect()->back();
        }
    }
    
    public function car(Request $request){
        $cars=Cars::create([
            'src'=>$request->src,
            'Price'=>$request->price,
            'condition'=>$request->condition,
            'model'=>$request->model,
            'fuel'=>$request->fuel,
            'gear'=>$request->gear,
            'speed'=>$request->speed,
        ]);
        return redirect()->back();
    }
    public function ShowCar(){
       $cars = Cars::all();
       return view ('showCar', ['data' => $cars]);
    }

    
    // //cart post
    // public function cart($id){
    //     $car = Cars::find($id);
    //     $data = Cookie::get('user_id');
    //     $data2 = User::find($data);
    //     $email=$data2->email;
    //     Cart::create([
    //         'email'=>$email,
    //         'price'=>$car->price,
    //         'condition'=> $car->condition,
    //         'model' =>$car->model,
    //         'fuel'=>$car->fuel,
    //         'gear'=>$car->gear,
    //         'speed'=>$car->speed, 
    //     ]);
    // }
    public function delete($id){
        $car = Cars::find($id);
        $car->delete();
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $car = Cars::find($id);
        $car->src= $request->src;
        $car->price= $request->price;
        $car->condition= $request->condition;
        $car->model= $request->model;
        $car->fuel=$request->fuel;
        $car->gear= $request->gear;
        $car->speed= $request->speed;
        return redirect()->back();
    }
    public function update_view($id){
        $car = Cars::find($id);
        return view('update_view', compact('car'));
    }

    
    
}
