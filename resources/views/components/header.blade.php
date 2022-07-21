<div class="navbar navbar-expand-lg navbar-light py-4 bg-warning mb-3">
    <div class="container">
        <a href="{{route('homepage')}}" class="navbar-brand">E-Purnea</a>
        <form action="" class="d-flex">
            <div class="input-group">
                <input type="search" placeholder="Search Local Business in Purnea" class="form-control" size="60">
                <button type="submit" class="btn btn-dark">
                    <i class="bi bi-search lead"></i>
                </button>
            </div>
           
        </form>
        <div class="navbar-nav">
            <a href="{{route('add.biz')}}" class="nav-item nav-link">Add a Business</a>
            @guest
            <a href="{{route('login')}}" class="nav-item nav-link">My Account</a>
           @endguest
           @auth
            <a href="" class="nav-item nav-link">{{Auth::user()->name}}`s Account</a>
            <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
           @endauth
        </div>
    </div>
</div>