<div>
    <div class="table-header">
        <a href="{{route('cad.product')}}" class="btn btn-outline-primary">
            <img class="btn-img" style="width: 20px;" src="/img/Icons/add-user.png" alt="">
            Novo Produto
        </a>
    </div>
    <div class="card mt-3">
       <div class="card-body">
        @if(session()->has('msg'))
            <p class="text-center alert alert-success">{{session()->get('msg')}}</p>
        @endif
        <table id="tableProducts" class="display table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Série</th>
                    <th>Estado</th>
                    <th>Data de criação</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody id="tableProducts">
                @foreach($products as $product)
                    <tr>
                        <td>000{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->mark}}</td>
                        <td>{{number_format($product->price,2,",",".")}} Kz</td>
                        <td>{{$product->serial}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{Date("d-m-Y H:m:s",strtotime($product->created_at))}}</td>
                        <td>
                            <a href="{{route('edit.product',$product->id)}}"><img style="width: 30px;" class="mr-2" src="/img/Icons/edit.png"></a>
                            <a href="{{route('del.product',$product->id)}}"><img style="width: 30px;" src="/img/Icons/trash.png"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>
</div>