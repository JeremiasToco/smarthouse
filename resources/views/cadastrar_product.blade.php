@extends('layouts.app')
@section('conteudo')
    @include('layouts.header')
    <div class="container-fluid">
        <div class="row col-12">
            <div class="col-lg-5 container mt-5 mb-5">
                <div class="card" id="form-where">
                    <div class="card-body">
                        <img src="/img/Icons/product.png" class="mb-4" alt="">
                        <form action="{{route('reg.product')}}" method="post" class="px-3">
                            @csrf
                            <h4 class="text-center mt-3">Cadastrar Produto</h4>
                            @if(session()->has('msg'))
                                <p class="alert alert-success">{{session()->get('msg')}}</p>
                            @endif
                            <div class="mt-3">
                                <label for="" class="input-text">Nome do Produto</label>
                                <input type="text" name="name" class="form-control" placeholder="Digite o nome do produto" required>
                            </div>
                            <div class="mt-3">
                                <label for="" class="input-text">Marca</label>
                                <input type="text" name="mark" class="form-control" placeholder="Digite a marca" required>
                            </div>
                            <div class="mt-3">
                                <label for="" class="input-text">Preço</label>
                                <input type="number" name="price" class="form-control" placeholder="Digite o Preço" required>
                            </div>
                            <div class="mt-3">
                                <label for="" class="input-text">Nº de Série</label>
                                <input type="text" name="serial" class="form-control" placeholder="Digite o Nº de série" required>
                            </div>
                            <div class="mt-3">
                                <label for="" class="input-text">Estado</label>
                                <select name="status" id="" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Danificado">Danificado</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-outline-primary container">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection