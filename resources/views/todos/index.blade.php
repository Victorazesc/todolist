@extends('layouts/app')

@section('content')
<div class="container">
                <div class="panel panel-default">
                    <div class="panel-body">
   
                        <br>

                       
                            <table id="example2" class="table table-striped " style="margin: 0;">
                               <thead>
                  <tr>
                    <th style="width: 15px">#</th>
                    <th>Tarefa </th>
                    <th style="width: 100px">Ações</th>
       
                  </tr>
                  </thead>
                  
                  
                  <tbody>


                                @foreach($todos as $todo)
                                    <tr>
                                        
  <td>
       @if ($todo->is_done === '1')
   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
@elseif ($todo->is_done === '0')
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
</svg>
@else
 semresposta
@endif
 </td>
                                        
                    
                                        <td class="{{ $todo->is_done ? 'finalizado' : 'andamento'}}">{{ $todo->name }}</td>
                                        
                                        
                                        
                                                         <td style="width: 100px"><div class="btn-group">
                        
                        
                        
                        
                                        <button class="btn btn-warning btn-detail" data-toggle="modal" data-target="#myModal{{$todo->id}}"  value="{{$todo->id}}" title="Editar">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg>
                                        </button> 
                                        <a href="{{ url('todos/'.$todo->id.'/delete') }}" role="button" class="btn btn-danger" title="Excluir Tarefa"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.037 3.225l1.684 10.104A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671l1.684-10.104C13.627 4.224 11.085 5 8 5c-3.086 0-5.627-.776-5.963-1.775z"/>
  <path fill-rule="evenodd" d="M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z"/>
</svg></a>
                                  </div></td>
                                        
                                    
                                    </tr>


<!--Modal Edit-->
 <div class="modal fade" id="myModal{{$todo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Tarefa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            
            <form role="form" method="post" style="
    margin: 0;
" action="{{ url('/todos/'. $todo->id) }}">
            <div class="modal-body">
                        
                            {{ csrf_field() }}

                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $todo->name }}">
                            </div>


<div class="btn-group btn-group-toggle" data-toggle="buttons" style="display: flex;">
  <label class="btn btn-secondary active">
    <input type="radio" value="1" name="is_done" id="option1"  {{ $todo->is_done ? 'checked' : ''}}>Finalizar
  </label>
  <label class="btn btn-secondary">
    <input type="radio" value="0" name="is_done" id="option2" {{ $todo->is_done ? '' : 'checked'}}>Tornar Ativa
  </label>

</div>

                       



            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" value="add">Salvar</button>
            
            </div> </form>
        </div>
      </div>
  </div>


                                @endforeach
                                
                  <tbody>
                            </table>
                        
                    </div>
                </div>
     </div>      
     
@endsection