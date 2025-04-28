<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller
{
    public function home()
    {
        $products = count(Product::all());
        $users = count(User::all());
        return view('home')->with([
            "products"=>$products,
            "users"=>$users,
        ]);
    }
    public function product(){
        $products = Product::all();
        return view('product')->with(["products"=>$products]);
    }

    public function editProduct($id){
        $product = Product::find($id);
        return view('edit_product')->with(["product"=>$product]);
    }

    public function users(){
        $users = User::all();
        return view('users')->with(["users"=>$users]);
    }

    public function cadProduct(){
        return view('cadastrar_product');
    }

    public function criarConta(Request $req)
    {
        $userWhere = User::where('email',$req->email)->first();
        if(!$userWhere){
            $user = User::create([
                "name"=>$req->name,
                "email"=>$req->email,
                "password"=>password_hash($req->password, PASSWORD_DEFAULT),
            ]);
            $req->session()->put("id",$user->id);
            $req->session()->put("nome",$user->name);
            return redirect()->route('home');
        }else{
            return redirect()->back()->with("msg","Este usuário já existe!");
        }
    }

    public function login(Request $req)
    {
        $userWhere = User::where('email',$req->email)->first();
        if($userWhere){
            if(password_verify($req->password,$userWhere->password)){
                $req->session()->put("id",$userWhere->id);
                $req->session()->put("nome",$userWhere->name);
                return redirect()->route('home');
            }else{
                return redirect()->back()->with("msg","Senha incorrecta!");
            }
        }else{
            return redirect()->back()->with("msg","E-mail incorrecto!");
        }
    }

    public function sair(){
        session()->pull("id");
        session()->pull("nome");
        return redirect()->route('login');
    }
}
