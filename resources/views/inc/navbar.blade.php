<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
ul{
    padding:0;
    margin:0;

}

ul li {
    padding:10px;
    position: absolute;
    text-align: center;
    display:block;

}

ul li a{
     padding:10px;
    position: absolute;
    text-align: center;
    display:block;
}

a:hover{
    background:white;

}
</style>

 <nav class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        <img class="" width = "25" length = "50"      
                        src="/storage/cover_images/AUN.jpg">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav">
                                <!--<li><a href="/services">Services</a></li> -->
                                @if( !(Auth::guest()))
                                <li><a href = "/catalogues">Catalogues</a></li>
                                @endif
                                     <!--<ul>
                                        <li><a href = "/catalogues/create">Create Catalogue</a></li>
                                     </ul>
                                
                                </li> -->
                                <!--@if( !(Auth::guest()))
                                <li><a href="/catalogues">Catalogues</a></li>
                                <li><a href = "/admin">Dashboard </a></li>
                                @endif -->
                                
                   </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                             <li><a href="/about"><i class="material-icons" style="font-size:20px;color:white">help</i></a></li>
                            <li class="dropdown">
                            
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href ="/dashboard"><i class="fa fa-user" style="font-size:15px"></i> Dashboard</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <i class="material-icons">&#xe8ac;</i>  Logout
                                        </a>
                                


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>