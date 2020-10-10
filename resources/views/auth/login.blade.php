<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/bootstrap/css/bootstrap.css')}}">
 

  


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('public/css/floating-labels.css')}}" rel="stylesheet">
  </head>
  <body>

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

  <div class="text-center mb-4">
    <img class="mb-4" src="{{ asset('public/img/logo.svg')}}" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">To-do</h1>
    <p>Você está a um passo da Organização</p>
  </div>

  <div class="form-label-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <input type="email" id="email"  name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required="" autofocus="">
    <label for="inputEmail">Endereço de E-mail</label>
  @if ($errors->has('email'))
      
<style type="text/css">
  .fade {
  transition-duration: 1s;
}
</style>
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="position: fixed; top: 10px; right: 10px;">

    <div class="toast-header">
      <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="var(--danger)"></rect></svg>
      <strong class="mr-auto">Oops Algo Errado</strong>
      
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Parece que seu Email não foi encontrado em nossa base de dados 
    </div>
  </div>

    @endif
                        
  </div>

  <div class="form-label-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <input type="password" id="password" class="form-control" placeholder="Senha" name="password" required="">
    <label for="inputPassword">Senha</label>
  @if ($errors->has('password'))
      
<style type="text/css">
  .fade {
  transition-duration: 1s;
}
</style>
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="position: fixed; top: 10px; right: 10px;">

    <div class="toast-header">
      <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="var(--danger)"></rect></svg>
      <strong class="mr-auto">Oops Algo Errado</strong>
      
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
   <div class="toast-body">
      Sua Senha esta errado clique em     <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a> para redefini-la
    </div>
  </div>

    @endif
  </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                                         
                                    <button type="submit" class="btn btn-primary  btn-block">
                                    Login
                                </button>
                            </div>
                            
                                                        <div class="col-md-6" style="
    text-align: center;
    padding-top: 7px;
">
                                                            
                                        <div class="custom-control custom-checkbox">
  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Lembrar de mim</label>
</div>
                                                            
                        
                            </div>
                            
                        </div>
<br>
                        <div class="form-row">
                            <div class="col-md-6">
                                <a class="btn btn-link" href="{{ url('register') }}">
                                    Não tenho Cadastro!
                                </a>
                        </div>
                         <div class="col-md-6">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
  <p class="mt-5 mb-3 text-muted text-center">Victor Azevedo 2020-2020</p>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){
           $('.toast').toast('show'); 
            
            
        $("#btnToasts").click(function(){
           $("#toast1").toast('show'); 
        });    
            
        
        $("#btnOcultar").click(function(){
           $("#toast1").toast('hide'); 
        });      
        });
      </script>

</body></html>












