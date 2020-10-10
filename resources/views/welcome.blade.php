<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/bootstrap/css/bootstrap.css')}}">
        <!-- Styles -->
        <style>


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            @if (Route::has('login'))
                
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample10">
      <ul class="navbar-nav">


                    @if (Auth::check())
                       <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}">Lista de Tarefas</a>
        </li>
                                             <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
             
                    @else
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                         <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/register') }}">Registrar</a>
                    </li>
                    @endif
                
           

     
       

      </ul>
    </div>
  </nav>
 @endif
        <div class="flex-center position-ref full-height">

            <div class="content">

      <div class="col-sm-12 mx-auto">
            <div class="title m-b-md">
                    To-Do-List
                </div>
        <p>Crie e organize suas tarefas de forma simplificada e dinâmica. </p>
        <p>
          <a class="btn btn-primary" href="{{ url('login')}}" role="button">Avante</a>
        </p>
      </div>
    

    
            </div>
        </div>

            <!-- Scripts -->
    <!-- jquery -->
    <script src="{{ asset('public/plugins/jquery/jquery.js') }}"></script>
    <!-- / jquery -->

    <!-- Bootstrap -->
    <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <!--/ Bootstrap -->

    </body>

</html>
