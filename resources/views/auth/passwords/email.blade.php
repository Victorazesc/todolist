
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




                 

                    <form class="form-signin" method="POST" action="{{ route('password.email') }}">

 <div class="text-center mb-4">
    <img class="mb-4" src="{{ asset('public/img/logo.svg')}}" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">To-do</h1>
    <p>Não se peocupe iremos recuperar sua senha.</p>
  </div>

   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{ csrf_field() }}

                        <div class="form-label-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <label for="email" class="col-md-12 control-label">Endereço de email</label>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                     
                                <button type="submit" class="btn btn-primary">
                                    Enviar link para Redefinir a Senha
                                </button>
                       
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

