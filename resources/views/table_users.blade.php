<div>
    
    <div class="card mt-3">
       <div class="card-body">
        <table id="tableProducts" class="display table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Nível de Acesso</th>
                    <th>Data de criação</th>
                </tr>
            </thead>
            <tbody id="tableProducts">
                @foreach($users as $user)
                    <tr>
                        <td>000{{$user->id}}</td>
                        <td>000{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>
                        <td>{{Date("d-m-Y H:m:s",strtotime($user->created_at))}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>
</div>