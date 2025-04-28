@extends('layouts.app')
@section('conteudo')
    <div class="container-fluid" id="login">
        <div class="row col-12">
            <div class="col-lg-4 container">
                <div class="card" id="card-login">
                    <div class="card-body">
                        <div>
                            <img src="/img/usuario.png" alt="">
                        </div>
                       
                        <form action="{{route('user.login')}}" method="post" class="px-3">
                            @csrf
                            <h4 class="text-center mt-3">Login</h4>
                            @if(session()->has('msg'))
                                <p class="alert alert-danger">{{session()->get('msg')}}</p>
                            @endif
                            <div class="">
                                <label for="" class="input-text">E-mail</label>
                                <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail" required>
                            </div>
                            <div class="mt-3">
                                <label for="" class="input-text">Palavra-passe</label>
                                <input type="password" name="password" class="form-control" placeholder="Digite sua palavra-passe" required>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-outline-light container">Acessar</button>
                            </div>
                            <p class="mt-3 text-center">Não Tens uma conta? <a href="{{route('create')}}">Criar Conta</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection