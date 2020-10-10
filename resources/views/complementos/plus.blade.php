

@section('plus')


@if(Auth::check())

<div class="container">
  <div class="floaty">
    <ul class="floaty-list">
      <li class="floaty-list-item floaty-list-item">
        <span class="floaty-list-item-label">Home</span><a href="{{ url('/') }}">
<svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-house-fill absolute-center" fill="#fff"  xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
</svg></a>
      </li>
      <li class="floaty-list-item floaty-list-item">
       <span class="floaty-list-item-label">Sair</span><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
 <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-door-open-fill absolute-center" fill="#fff" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
</svg></a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </li>

    </ul>
   
    <div class="floaty-btn" id="myBtn" style="
    color: #fff;
    font-size: 20px;
">
      <span class="floaty-btn-label">
        Adicionar Tarefa
      </span>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="floaty-btn-icon floaty-btn-icon-plus absolute-center">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" fill="#fff"/>
          <path d="M0 0h24v24h-24z" fill="none"/>
      </svg>


<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill floaty-btn-icon floaty-btn-icon-create absolute-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
</svg>

    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Adicionar Tarefa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" method="post" action="{{ url('/todos') }}">
                            {{ csrf_field() }}
                            
                            
      <div class="modal-body">
                             <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" >
                              <input type="hidden" name="email" value="{{Auth::user()->email}}"  >
                            </div>
     
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Avante</button>
      </div>
      
     
                        </form>
    </div>
  </div>

</div> 


</div>
   
@endif



@endsection
