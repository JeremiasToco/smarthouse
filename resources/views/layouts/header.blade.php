<header>
    <div class="make-header py-4">
        <h2>Smart WhereHouse</h2>
        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a class="dropdown-toggle" id="drop" data-bs-toggle="dropdown" aria-expanded="false">  
                    <img src="/img/Icons/usuario.png" style="width: 30px; height: 30px; ;margin-right: 10px;" >{{session()->get("nome")}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="drop">
                    <li><a href="{{route('sair')}}" class="dropdown-item">Terminar sessão</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
            <img id="menu" src="/img/Icons/menu.png">
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">
                    <div class="item-make-menu">
                        <img src="/img/Icons/dashboard.png" alt="">
                        <span> Dashboard</span>
                    </div>
                </a></li>
                <li class="nav-item"><a href="{{route('product')}}" class="nav-link">
                    <div class="item-make-menu">
                        <img src="/img/Icons/product.png" alt="">
                        <span> Produtos</span>
                    </div>
                </a></li>
                <li class="nav-item"><a href="{{route('users')}}" class="nav-link">
                    <div class="item-make-menu">
                        <img src="/img/Icons/user-80.png" alt="">
                        <span> Usuários</span>
                    </div>
                </a></li>
            </ul>
        </div>
    </nav>
</header>