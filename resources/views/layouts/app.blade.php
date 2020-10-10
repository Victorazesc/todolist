<html lang="{{ app()->getLocale() }}"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Victor Azevedo">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'To-do') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
          <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="{{ asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.css')}}">
 <!-- Styles -->

<link href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/plus.css')}}">

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
      
      .finalizado {
    color: #929292;
    text-decoration: line-through;
}
      
      
    </style>
  
  </head>
  <body class="bg-light">


@include('complementos/plus')
@yield('plus')

    <div id="app">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{asset('public/img/logo.svg')}}" alt="" width="72" height="72">
    <h2>                    <!-- Branding Image -->
                   Lista de Tarefas
                  </h2>
                                                  
                             <p class="lead">Olá crie edite e exclua suas tarefas vamos lá! clique no sinal de "+" para adicionar sua primeira tarefa.</p>
                               

  </div>
</div>
 
    


 @yield('content')


               
         
            
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                           
                
                        @endif
  
       

 



</div>

    <!-- Scripts -->
    <!-- jquery -->
    <script src="{{ asset('public/plugins/jquery/jquery.js') }}"></script>
    <!-- / jquery -->

    <!-- Bootstrap -->
    <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('public/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
    <!--/ Bootstrap -->
<script  src="{{ asset('public/js/plus.js')}}"></script>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#staticBackdrop").modal();
  });
});
</script>

<!-- DataTables -->
<script src="{{ asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


<script>
  $(function () {

   //Money Euro
    $('[data-mask]').inputmask()
  });


$("#example2").dataTable({

"paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,

drawCallback: function(settings) {
var pagination = $(this).closest(".dataTables_wrapper").find(".dataTables_paginate");
pagination.toggle(this.api().page.info().pages > 1);
}
})

</script>




<script>
    $(document).on('click','.open_modal',function(){
        var url = "todos";
        var tour_id= $(this).val();
        $.get(url + '/' + tour_id + '/edit', function (data) {
            //success data
            console.log(data);
            $('#tour_id').val(data.id);
            $('#name').val(data.name);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
</script>

</body></html>












    







        



