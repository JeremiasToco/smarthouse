@extends('layouts.app')
@section('conteudo')
@include('layouts.header')
<div class="row mt-2 col-12 mx-0">
    <div class="col-lg-6 mt-3">
        <div class="card">
            <div class="cart-item">
                <h4 class="mx-4 my-3">
                    <img src="/img/Icons/product.png" alt="">
                    <span style="font-weight: 700;">Total de produtos</span>
                </h4>
            </div>
            <div class="card-body">
                <h1>{{$products}}</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-3">
        <div class="card">
            <div class="cart-item">
                <h4 class="mx-4 my-3">
                    <img src="/img/Icons/user-80.png" alt="">
                    <span style="font-weight: 700;">Total de usuários</span>
                </h4>
            </div>
            <div class="card-body">
                <h1>{{$users}}</h1>
            </div>
        </div>
    </div>
</div>
@endsection