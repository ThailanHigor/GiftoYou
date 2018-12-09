<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GiftoYou</title>
    <link rel="icon" 
      type="image/png" 
      href="favicon.png">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.mask.js') }}" ></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<style> 
.container{
display: flex;
justify-content: space-around;
} 

.icone-menu{
justify-content: center;
display: flex;
width: 43px;
height: 43px;
}
.icone-menu-img{
width: 100%;
}
.navbar-laravel{
border-bottom: 3px solid;
background: #0091e2;
border-bottom-color: white;
}
.py-4{
    background: #F68600;
}
.icon-perfil{
    display: inline-block;
    height: 2.0em;
    vertical-align: middle;
    content: "";
    background: no-repeat 50%;
    background-size: 100% 100%;
}
.navbar-toggler{
    border-color: #FFF !important;
}
.text-gift-login{
    display:flex;
    width: 100%;
    height: 50px;
    justify-content: center;
    align-items: center
}
.text-login{
    display: flex;
    align-items: center;
    font-size: 32px;
    color: white;
    font-family: 'Merienda One', cursive;
    margin-left: -3px;
    margin-right: 1px;
}
.menu-active{
    background: white;
    -webkit-clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);
clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%)
}

.item-menu-nav{
    background: white;
    -webkit-clip-path: polygon(25% 0%, 100% 1%, 100% 100%, 25% 100%, 0% 50%);
    clip-path: polygon(4% 0%, 100% 1%, 100% 100%, 4% 100%, 0% 50%);
    /* padding: 6px; */
    padding-left: 18px;
    margin-top:7px;

}
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            @if(Auth()->check())
            <div class="container" style="width: 100%">
                <a class="navbar-brand icone-menu icone-feed" href="{{ url('/feed') }}">
                    <img class="icone-menu-img" src="images/icons/feed.svg" class=""  alt="">
                </a>
                <a class="navbar-brand  icone-menu icone-amigos" href="{{ url('/amigos') }}">
                    <img class="icone-menu-img" src="images/icons/friends.svg" class=""  alt="">
                </a>
                <a class="navbar-brand icone-menu icone-camera" href="{{ url('/novo-post') }}">
                    <img class="icone-menu-img" src="images/icons/camera.svg" class="" alt="">
                </a>
                <a class="navbar-brand icone-menu icone-mapa" href="{{ url('/map') }}">
                    <img class="icone-menu-img" src="images/icons/map.svg" class="" alt="">
                </a>
                <button class="navbar-toggler icone-user" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                @if(Auth()->check())
                    <img src="images/fotoperfil/{{\Auth::user()->FotoPerfil}}" alt="" class="icon-perfil">
                @else
                 <span class="navbar-toggler-icon"></span>
                 @endif
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item item-menu-nav">
                                <a id="" class="nav-link" href="/meu-perfil" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Meu Perfil<span class="caret"></span>
                                </a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item item-menu-nav">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           
                            
                        @else
                            <li class="nav-item item-menu-nav">
                               
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                Sair
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            
                            </li>
                     
                        @endguest

                    </ul>
                </div>

                
            </div>
            @else
            <div class=" text-gift-login" style="width:100%;"> 
                <span class="text-login">Gift</span>
                <img class="" src="images/gift.svg" style="height: 33px;" >
                <span class="text-login">You</span>
            </div> 
            @endif
        </nav>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
</body>

<script>
    var path = window.location.pathname;
    $(".icone-menu").removeClass("menu-active");

    switch (path) {
        case "/feed":
            $(".icone-feed").addClass("menu-active");
            break;
        case "/amigos":
            $(".icone-amigos").addClass("menu-active");
            break;

        case "/novo-post":
            $(".icone-camera").addClass("menu-active");
            break;

        case "/map":
            $(".icone-mapa").addClass("menu-active");
            break;
        
    }
</script>
</html>
