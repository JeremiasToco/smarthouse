<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function register(Request $req)
    {
        Product::create([
            "user_id"=>session()->get("id"),
            "name" => $req->name,
            "mark" => $req->mark,
            "price" => $req->price,
            "serial" => $req->serial,
            "status" => $req->status,
        ]);
        return redirect()->back()->with("msg","Produto registrado com sucesso!");
    }

    public function update(Request $req)
    {
        $product = Product::find($req->id);
        $product->update($req->all());
        return redirect()->back()->with("msg","Produto actualizado com sucesso!");
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with("msg","Produto apagado com sucesso!");
    }
}
