@extends('layouts.app')
@section('conteudo')
@include('layouts.header')
<div class="col-12 mt-3">
<h1 style="font-weight: 700;">Produtos</h1>
<hr>
@include('table_product')
</div>
@endsection