@extends('layout.app')

@section('body')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">GERENCIAMENTO DE INDICAÇÕES</h6>
          </div>
        </div>
       
        <div class="card-body px-0 pb-2">
          @if($msg=="success")
          <div class="alert alert-success alert-dismissible text-white" role="alert">
            <span class="text-sm">Operação feita com sucesso.</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          {{-- inicio --}}
          {{-- INDICACOES CLIENTE  --}}
          @if(Auth::user()->user_type_id == 2)
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-md-12 mb-lg-0 mb-4">
                  <div class="card px-0 pb-2">
                    <div class="card-header pb-0 px-3">
                      <div class="row">
                        <div class="col-md-6">
                          <h6 class="mb-0">Indicações ({{$indicacoes_count}})</h6>
                          
                          

                        </div>
                        <div class="col-6 text-end">
                          <a href="{{ url('cliente.indicar.model_store') }}" class="btn bg-gradient-dark mb-0"><i class="material-icons text-sm" translate="no">add</i>&nbsp;&nbsp;Nova indicação </a>
                        </div>
                      </div>
                    </div>
                    
                    

<script>
  //datatable
    $(document).ready( function () {
        
        $('#datatable-users').DataTable(
                        {
    "language": {
        "sProcessing":    "Processando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "nenhum resultado encontrado",
        "sEmptyTable":    "Não há dados disponíveis nesta tabela",
        "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros de 0 a 0 de um total de 0 registros",
        "sInfoFiltered":  "(filtrando um total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Carregando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Seguinte",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Marque para classificar a coluna em ordem crescente",
            "sSortDescending": ": Marque para classificar a coluna decrescente"
        }
    }
}
            );
            
            
            
           
            
    } );

</script>
                                   
                    
                    <hr>
                    <div class="table-responsive p-0 card-body">
                      <table id="datatable-users" class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profissional</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Telefone</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contato</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Observações</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach($indicacoes as $key => $item)
                          <tr>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">{{$key}}</p>
                            </td>
                              <td>
                                <div class="d-flex px-2 py-1">

                            @isset($item->pro_indicado->photo)
                                  <div>
                                    @php
                                    $article = $item->pro_indicado->photo;
                                 @endphp
                                     @if($item->pro_indicado->photo != NULL)
                                     <img src="{{ URL::asset('storage/'.$article) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="Foto de perfil" title="Foto de perfil">
                                     @else
                                     <img src="../assets/img/logo-ct-dark.png" alt="profile_image" class="avatar avatar-sm me-3 border-radius-lg">
                                     @endif
                                   </div>
                           @endisset
                           
                          
                            
                            @if(isset($item->pro_indicado->name))
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{$item->pro_indicado->name}}</h6>
                                    @php($date_created_at = \Carbon\Carbon::parse($item->created_at))
                                    <p class="text-xs text-secondary mb-0">{{$date_created_at->format('d/m/y')}}</p>
                                  </div>
                                  @else
                                   <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm text-danger">Sem nome</h6>
                                    @php($date_created_at = \Carbon\Carbon::parse($item->created_at))
                                    <p class="text-xs text-secondary mb-0">{{$date_created_at->format('d/m/y')}}</p>
                                  </div>
                              @endif
                                  
                                </div>
                              </td>

                            <td>
                                          <div class="d-flex px-2 py-1">
                                 <div>
                                    <i class="material-icons text-sm my-auto me-1" translate="no">whatsapp</i> 
                                 </div> 
                           @if(isset($item->pro_indicado->phone))
                            <div class="d-flex flex-column justify-content-center">
                                
                              <p class="text-xs font-weight-bold mb-0">
                                  <a href="https://wa.me/{{str_replace(['(',')','-',' '], '', "55".$item->pro_indicado->phone)}}?text=Minhas Indicações!"  target="_blank">
                                  {{$item->pro_indicado->phone}} 
                                  </a></p>
                            </div>
                            @else
                               <div class="d-flex flex-column justify-content-center">
                                
                              <p class="text-xs font-weight-bold mb-0 text-danger"><a href="#" class="text-danger">Sem contato</a></p>
                            </div>
                            
                            @endif
                             </div>
                            
                            </td>
                            <td class="align-middle text-center text-sm">

                              @if($item->status == 'SEM CONTATO')
                              <span class="badge badge-sm bg-gradient-info">{{$item->status}}</span>
                              @endif
                              @if($item->status == 'EM NEGOCIAÇÃO')
                              <span class="badge badge-sm bg-gradient-warning">{{$item->status}}</span>
                              @endif
                              @if($item->status == 'NEGÓCIO FECHADO')
                              <span class="badge badge-sm bg-gradient-success">{{$item->status}}</span>
                              @endif
                              @if($item->status == 'NÃO TEVE INTERESSE')
                              <span class="badge badge-sm bg-gradient-danger">{{$item->status}}</span>
                              @endif
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">{{$item->cliente_nome}}</span>
                            </td>
                            <td class="align-middle text-center">
                                
                                                        <div class="d-flex px-2 py-1">
                                 <div>
                                    <i class="material-icons text-sm my-auto me-1" translate="no">whatsapp</i> 
                                 </div> 
                                 @if(isset($item->cliente_phone))
                            <div class="d-flex flex-column justify-content-center">
                                  <span class="text-secondary text-xs font-weight-bold">
                                  <a href="https://wa.me/{{str_replace(['(',')','-',' '], '', "55".$item->cliente_phone)}}?text=Minhas Indicações!"  target="_blank">{{$item->cliente_phone}}</a>
                                 </span>
                             </div>
                             @else
                             <div class="d-flex flex-column justify-content-center">
                                  <span class="text-secondary text-xs font-weight-bold">
                                  <a href="#" class="text-danger">Sem contato</a>
                                 </span>
                             </div>
                             @endif
                            
                             </div>
                                
                                
                                
                            
                            </td>
                            <td class="align-middle text-center">
                                @if(isset($item->cliente_email))
                              <span class="text-secondary text-xs font-weight-bold">{{$item->cliente_email}}</span>
                              @else
                               <span class="text-danger text-xs font-weight-bold">Sem email</span>
                             
                              @endif
                            </td>
                            <td class="align-middle text-center">
                              <textarea class="align-middle text-center text-secondary text-xs " readonly value="{{$item->obs}}">{{$item->obs}}</textarea>
                            </td>
                             <td>
                              @if($item->status == 'SEM CONTATO')
                              <a href="{{ url('cliente.indicar.model_edit') }}/{{$item->id}}" class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2" translate="no" title="Editar">edit</i></a>
                             <!--  <a  href="{{ url('cliente.indicar.model_delete') }}/{{$item->id}}" class="btn btn-link text-danger text-gradient px-3 mb-0" ><i class="material-icons text-sm me-2" title="Apagar">delete</i></a> -->
                            @endif
                            </td> 
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>


                </div>
              </div>
            </div>

          </div>
          @endif
          {{-- fim --}}


        {{-- INDICACOES Profissional  --}}
        @if(Auth::user()->user_type_id == 3)
        <div class="row">
            <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12 mb-lg-0 mb-4">
                <div class="card px-0 pb-2">
                    <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                        <h6 class="mb-0">Indicações ({{$indicacoes_count}})</h6>
                        </div>
                        <div class="col-6 text-end">
                        <a href="{{ url('pro.indicar.model_store') }}" class="btn bg-gradient-dark mb-0"><i class="material-icons text-sm" translate="no">add</i>&nbsp;&nbsp;Nova indicação </a>
                        </div>
                    </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-0 card-body">
                    <table id="datatable-indicar1" class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome do afiliado</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Telefone do afiliado</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contato</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Observações</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($indicacoes as $key => $item)
                        <tr>
                            <td class="align-middle text-center text-sm">
                            <p class=" text-center text-xs font-weight-bold mb-0">{{$key}}</p>
                            </td>
                            <td class="align-middle text-sm">
                            
                            <div class="justify-content-center">
                            @if(isset($item->afiliado_indicador->name))
                               
                                <h6 class="mb-0 text-sm">{{$item->afiliado_indicador->name}}</h6>
                                @else
                                <h6 class="mb-0 text-sm text-danger">Sem nome</h6>
                                
                                @endif
                                @php($date_created_at = \Carbon\Carbon::parse($item->created_at))
                                <p class="text-xs text-secondary mb-0">{{$date_created_at->format('d/m/y')}}</p>
                            </div>
                        
                            </td>

                            <td class="align-middle text-center text-sm">
                                
                    <div class="d-flex px-2 py-1">
                        <div>
                        <i class="material-icons text-sm my-auto me-1" translate="no">whatsapp</i> 
                        </div>  

                    <div class="d-flex flex-column justify-content-center">
                                <p class="text-xs font-weight-bold mb-0">

                                @if(isset($item->afiliado_indicador->phone))
                                <a href="https://wa.me/{{str_replace(['(',')','-',' '], '', "55".$item->afiliado_indicador->phone)}}?text=Minhas Indicações!" 
                                 target="_blank">{{$item->afiliado_indicador->phone}}</a>
                               
                                @else
                                <a href="#" class="text-danger" 
                                >Sem contato</a>
                                @endif
                                </p>
                    </div>
                
                    </div>   
                                
                                

                            </td>
                            <td class="align-middle text-center text-sm">

                            @if($item->status == 'SEM CONTATO')
                            <span class="badge badge-sm bg-gradient-info">{{$item->status}}</span>
                            @endif
                            @if($item->status == 'EM NEGOCIAÇÃO')
                            <span class="badge badge-sm bg-gradient-warning">{{$item->status}}</span>
                            @endif
                            @if($item->status == 'NEGÓCIO FECHADO')
                            <span class="badge badge-sm bg-gradient-success">{{$item->status}}</span>
                            @endif
                            @if($item->status == 'NÃO TEVE INTERESSE')
                            <span class="badge badge-sm bg-gradient-danger">{{$item->status}}</span>
                            @endif
                            </td>
                            <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$item->cliente_nome}}</span>
                            </td>
                            <td class="align-middle text-center">
                                
                                <div class="d-flex px-2 py-1">
                        <div>
                        <i class="material-icons text-sm my-auto me-1" translate="no">whatsapp</i> 
                        </div>             
                    <div class="d-flex flex-column justify-content-center">
                    @if(isset($item->cliente_phone))
                    <span class="text-secondary text-xs font-weight-bold">
                    <a href="https://wa.me/{{str_replace(['(',')','-',' '], '', "55".$item->cliente_phone)}}?text=Minhas Indicações!"  target="_blank">{{$item->cliente_phone}}</a>
                    </span>
                    @else
                    <span class="text-secondary text-xs font-weight-bold">
                    <a href="#" class="text-danger" >Sem contato</a>
                    </span>
                    @endif
                    </div>
                
                    </div>  
                                
                                
                                
                        
                            </td>

                            <td class="align-middle text-center">
                            @if(isset($item->cliente_email))
                              <span class="text-secondary text-xs font-weight-bold">{{$item->cliente_email}}</span>
                              @else
                               <span class="text-danger text-xs font-weight-bold">Sem email</span>
                             
                              @endif
                             </td>
                            <td class="align-middle text-center">
                            <textarea class="align-middle text-center text-secondary text-xs " readonly value="{{$item->obs}}">{{$item->obs}}</textarea>
                            </td>
                            <td>
                            
                            <a href="{{ url('pro.indicar.model_edit') }}/{{$item->id}}" class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2" translate="no" title="Editar">edit</i></a>
                            {{-- <a  href="{{ url('pro.indicar.model_delete') }}/{{$item->id}}" class="btn btn-link text-danger text-gradient px-3 mb-0" ><i class="material-icons text-sm me-2" translate="no" title="Apagar">delete</i></a> --}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>


                </div>
            </div>
            </div>

        </div>
        @endif
        {{-- fim --}}
         
        </div>
      </div>
    </div>
  </div>

  <script>
  //datatable
    $(document).ready( function () {
        $('#datatable-indicar1').DataTable(
            
            
                        {
    "language": {
        "sProcessing":    "Processando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "nenhum resultado encontrado",
        "sEmptyTable":    "Não há dados disponíveis nesta tabela",
        "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros de 0 a 0 de um total de 0 registros",
        "sInfoFiltered":  "(filtrando um total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Carregando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Seguinte",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Marque para classificar a coluna em ordem crescente",
            "sSortDescending": ": Marque para classificar a coluna decrescente"
        }
    }
}
            );
    } );

</script>

  <!-- Modal editar produto-->
  @if ($msg == 'model_edit')

  <div >
      <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-notify modal-info" role="document">
              <!--Content-->
              <div class="modal-content text-center">
                  <!--Header-->
                  <div class="modal-header d-flex justify-content-center">
                      <h5 class="heading">
                          Editar a indicação
                      </h5>
                  </div>
                  <form action="{{ url('pro.indicar.edit') }}"  method="post" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                  <div class="modal-body">

                    @if(Auth::user()->user_type_id == 2)

                    {{-- Profissional Favorito --}}
                    {{-- <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Seleciona o prossional favorito</label>
                      <select name="status" class="form-control">

                            <option  value="{{ $indicacao->id}}" selected> 
                              {{$indicacao->status}} 
                            </option>

                            <option value="SEM CONTATO">SEM CONTATO</option>
                            <option value="EM NEGOCIAÇÃO">EM NEGOCIAÇÃO</option>
                            <option value="NEGÓCIO FECHADO">	NEGÓCIO FECHADO</option>
                            <option value="NÃO TEVE INTERESSE">NÃO TEVE INTERESSE</option>
                            
                          
                      </select>
                  </div>   --}}

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"> </label>
                      <input type="text" value="{{$indicacao->cliente_nome}}" name="cliente_nome" autocomplete="off"  class="form-control">
                    </div>
  
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"> </label>
                      <input type="email" value="{{$indicacao->cliente_email}}" name="cliente_email" autocomplete="off"  class="form-control">
                    </div>
  
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"> </label>
                      <input type="tel" value="{{$indicacao->cliente_phone}}" name="cliente_phone" autocomplete="off"  class="phone4 form-control">
                    </div>
                     <script>
    $(document).ready(function($){
        $('.phone4').inputmask('(99)-99999-9999');
    });
</script>
  
                    <div class="input-group input-group-outline mb-3">
                      <textarea type="text" value="{{$indicacao->obs}}" name="obs" value="" autocomplete="off"  class="form-control">{{ $indicacao->obs}}</textarea>
                    </div>
                    @endif
         
                 
                    @if(Auth::user()->user_type_id == 3)
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Seleciona Taxa</label> --}}
                      <select name="status" class="form-control">

                            <option  value="{{ $indicacao->id}}" selected> 
                              {{$indicacao->status}} 
                            </option>

                            <option value="SEM CONTATO">SEM CONTATO</option>
                            <option value="EM NEGOCIAÇÃO">EM NEGOCIAÇÃO</option>
                            <option value="NEGÓCIO FECHADO">	NEGÓCIO FECHADO</option>
                            <option value="NÃO TEVE INTERESSE">NÃO TEVE INTERESSE</option>
                            
                          
                      </select>
                  </div>
                  @endif

                  <input type="hidden" value="{{$indicacao->id}}" name="id">


 </div>
  
                  <div class="modal-footer flex-center">
                      <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                      <button class="btn btn-outline-info waves-effect" type="submit" title="Confirmar">Confirmar</button>
                  </div>
                  </form>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script>
          $(window).on('load',function(){
              $('#modalPush').modal('show');
          });
          $('#closemodal').click(function() {
              $('#modalPush').modal('hide');
          });
      </script>
  </div>
  @endif
  {{-- Fim modal editar produto --}}
  

<!-- Modal deletar categoria-->
@if ($msg == 'modal_delete_categoria')

<div >
    <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="heading">
                        Deseja apagar <strong>{{$categoria->name}}</strong>?
                    </h5>
                </div>
                <form action="{{ url('produtos-confirmar-apagar-categoria') }}"  method="post" >
                    {!! csrf_field() !!}
                <div class="modal-body">
                  <p>Todos os dados relacionados serão eliminados.</p>
                  <input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}" autocomplete="off"  class="form-control">
                  <input type="hidden" name="idcategoria" value="{{$categoria->id}}" autocomplete="off"  class="form-control">
                </div>

                <div class="modal-footer flex-center">
                    <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                    <button class="btn btn-outline-info waves-effect" type="submit" title="Confirmar">Confirmar</button>
                </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
        $(window).on('load',function(){
            $('#modalPush').modal('show');
        });
        $('#closemodal').click(function() {
            $('#modalPush').modal('hide');
        });
    </script>
</div>
@endif
{{-- Fim modal delete categoria --}}

    <!-- Modal deletar produto-->
@if ($msg == 'modal_delete')

<div >
    <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="heading">
                        Deseja apagar a indicação do <strong>{{$indicacao->nameIndicou}}</strong>?
                    </h5>
                </div>
                <form action="{{ url('pro.indicar.delete') }}"  method="post">
                    {!! csrf_field() !!}
                <div class="modal-body">
                  <p>Todos os dados relacionados serão eliminados.</p>
                  <input type="hidden" name="id" value="{{$indicacao->id}}" class="form-control">
               </div>

                <div class="modal-footer flex-center">
                    <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                    <button class="btn btn-outline-info waves-effect" type="submit" title="Confirmar">Confirmar</button>
                </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
        $(window).on('load',function(){
            $('#modalPush').modal('show');
        });
        $('#closemodal').click(function() {
            $('#modalPush').modal('hide');
        });
    </script>
</div>
@endif
{{-- Fim modal delete produto --}}
 
  <!-- Modal cadastrar indicacao-->
@if ($msg == 'modal_store')

<div >
    <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="heading">
                      Quem você irá adicionar como indicação?
                    </h5>
                </div>
             
                <form action="{{url('pro.indicar.store') }}"  method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                
                <div class="modal-body">
                  <hr/>
                  <p class="col-12 small sm text-sm text-small">Preencha as informações de quem deseja adicionar.</p>
                  <hr/>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Nome completo </label>
                    <input type="text" name="cliente_nome" required autocomplete="off"  class="form-control">
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Email (opcional) </label>
                    <input type="email" name="cliente_email" autocomplete="off"  class="form-control">
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Telefone </label>
                    <input type="tel" name="cliente_phone" required autocomplete="off"  class="phone1 form-control">
                  </div>
                  
        {{--<input type="text" name="phone" class="phone form-control" value="7898978998">--}}
 <script>
    $(document).ready(function($){
        $('.phone1').inputmask('(99)-99999-9999');
    });
</script>
                  
                  <div class="input-group input-group-outline mb-3">
                    <textarea type="text" name="obs" autocomplete="off" placeholder="Observações"  class="form-control"></textarea>
                  </div>

                  <hr/>

                  @if (Auth::user()->user_type_id == 2)
                  <p class="col-12 small sm text-sm text-small">Preencha as informações do profissional.</p>
                  <hr/>

                  <div class="input-group input-group-outline mb-3" >
                    <select id="afiliados" name="profissional_id" required  class="form-control afiliados">
                      <option value=""> Quem é o profissional?</option>
                      @foreach($profissionais as $item)
                          <option value="{{ $item->pro_favorito->id }}">{{ $item->pro_favorito->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  @endif



                  @if (Auth::user()->user_type_id == 3)
                  <p class="col-12 small sm text-sm text-small">Preencha as informações de quem indicou.</p>
                  <hr/>

                  <div class="input-group input-group-outline mb-3" >
                    <select id="afiliados" name="afiliado_id" required  class="form-control afiliados" onchange="showDiv(this)">
                      <option value="">Quem é o afiliado?</option>
                      @foreach($afiliados as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  @endif


                  {{-- <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Quem indicou (Nome completo)?</label>
                    <input type="text" name="nameIndicou" autocomplete="off"  class="form-control">
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Telefone de quem indicou </label>
                    <input type="tel" name="phoneIndicou" autocomplete="off"  class="form-control">
                  </div> --}}

                  {{-- <input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}" autocomplete="off"  class="form-control"> --}}
                </div>

                <div class="modal-footer flex-center">
                    <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                    <button class="btn btn-outline-info waves-effect" type="submit" title="Confirmar">Concluir a indicação</button>
                </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
        $(window).on('load',function(){
           
            $('#modalPush').modal('show');
            
        });
        $('#closemodal').click(function() {
            $('#modalPush').modal('hide');
        });
    </script>
</div>
@endif

{{-- Fim modal cadastro indicacao --}}


<!-- Modal cadastrar categoria-->
@if ($msg == 'modal_categories')

    <div >
        <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content text-center">
                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="heading">
                            Cadastro de Categoria
                        </h5>
                    </div>
                    <form action="{{ url('produtos-confirmar-cadatro-categoria') }}"  method="post">
                        {!! csrf_field() !!}
                    <div class="modal-body">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Nome da categoria</label>
                        <input type="text" name="name" autocomplete="off"  class="form-control">
                      </div>
                      <input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}" autocomplete="off"  class="form-control">
                    </div>

                    <div class="modal-footer flex-center">
                        <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                        <button class="btn btn-outline-info waves-effect" type="submit" title="Confirmar">Confirmar</button>
                    </div>
                    </form>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script>
            $(window).on('load',function(){
                $('#modalPush').modal('show');
            });
            $('#closemodal').click(function() {
                $('#modalPush').modal('hide');
            });
        </script>
        
        <script>
              function showDiv(select){
      
        if(select.value==0){
    
        document.getElementById('especialidade_div').style.display = "";
        document.getElementById('subespecialidade_div').style.display = "";
        document.getElementById('biography_div').style.display = "";
        } else{
        document.getElementById('especialidade_div').style.display = "none";
        document.getElementById('subespecialidade_div').style.display = "none";
        document.getElementById('biography_div').style.display = "none";
      
        }
    } 
        </script>
    </div>
@endif
{{-- Fim modal cadastro categoria --}}


</div>





@endsection