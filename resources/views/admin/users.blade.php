@extends('layout.app')

@section('body')


    <div class="container-fluid py-4">
        
        <script>
  //datatable
    $(document).ready( function () {
        
        
            $('#datatable-pro').DataTable(
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
            
            $('#datatable-ind').DataTable(
                        {
    "language": {
        "sProcessing":    "Processando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "Sem registros",
        "sEmptyTable":    "Não há dados disponíveis nesta tabela",
        "sInfo":          "_START_ a _END_ de _TOTAL_ registros",
        "sInfoEmpty":     " 0 a 0 de 0 registros",
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
            
            $('#datatable-afil').DataTable(
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

@include('admin.indexUser')
@include('admin.indexPacient')
@include('admin.indexProfissional')




        @if ($msg == 'indicar')
        
        
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">{{ $user_type }}</h6>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            @if ($msg == 'success')
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">Operação feita sucesso.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            {{-- inicio --}}
                            {{-- Produtos --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-lg-0 mb-4">
                                            <div class="card px-0 pb-2">

                                                <hr>
                                                <div class="table-responsive p-0 card-body">
                                                    <table id="datatable-ind" class="table align-items-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    ID</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Empresa</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Paciente</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Status</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Data</th>
                                                                {{-- <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Registrado por:</th> --}}
                                                                 {{-- <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Ações</th>  --}}

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($lista as $key => $item)
                                                            
                                                            @isset($item->pro_indicado->name)
                                                            @isset($item->afiliado_indicador->name)
                                                                <tr>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $key }}</p>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex px-2 py-1">

                                                                            <div>

                                                                                @php
                                                                                    $article = $item->pro_indicado->photo;
                                                                                @endphp

                                                                                @if ($item->pro_indicado->photo != null)
                                                                                    <img src="{{ URL::asset('storage/' . $article) }}"
                                                                                        class="avatar avatar-sm me-3 border-radius-lg"
                                                                                        alt="Foto de perfil"
                                                                                        title="Foto de perfil">
                                                                                @else
                                                                                    <img src="../assets/img/logo-ct-dark.png"
                                                                                        alt="profile_image"
                                                                                        class="avatar avatar-sm me-3 border-radius-lg">
                                                                                @endif

                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-sm">
                                                                                    {{ $item->pro_indicado->name }}</h6>
                                                                                <p class="text-xs text-secondary mb-0">
                                                                                    {{ $item->pro_indicado->phone }}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="align-middle text-center">
                                                                      <div class="d-flex px-2 py-1">

                                                                        <div>

                                                                            @php
                                                                                $article = $item->afiliado_indicador->photo;
                                                                            @endphp

                                                                            @if ($item->afiliado_indicador->photo != null)
                                                                                <img src="{{ URL::asset('storage/' . $article) }}"
                                                                                    class="avatar avatar-sm me-3 border-radius-lg"
                                                                                    alt="Foto de perfil"
                                                                                    title="Foto de perfil">
                                                                            @else
                                                                                <img src="../assets/img/logo-ct-dark.png"
                                                                                    alt="profile_image"
                                                                                    class="avatar avatar-sm me-3 border-radius-lg">
                                                                            @endif

                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">
                                                                                {{ $item->afiliado_indicador->name }}</h6>
                                                                            <p class="text-xs text-secondary mb-0">
                                                                               
                                                                               <a href="https://wa.me/{{substr($item->afiliado_indicador->phone,0,3) =="+55" ? $item->afiliado_indicador->phone : substr($item->afiliado_indicador->phone,0,2) =="55" ? $item->afiliado_indicador->phone : "55".$item->afiliado_indicador->phone }}?text=Minhas Agendamentos!"  target="_blank">{{ $item->afiliado_indicador->phone }}
                                                                        </a> 
                                                                                </p>
                                                                                
                                                               
                                                                                
                                                                        </div>
                                                                    </div>
                                                                      
                                                                       
                                                                    </td>


                                                                    <td class="align-middle text-center text-sm">

                                                                        @if ($item->status == 'SEM CONTATO')
                                                                            <span
                                                                                class="badge badge-sm bg-gradient-info">{{ $item->status }}</span>
                                                                        @endif
                                                                        @if ($item->status == 'EM NEGOCIAÇÃO')
                                                                            <span
                                                                                class="badge badge-sm bg-gradient-warning">{{ $item->status }}</span>
                                                                        @endif
                                                                        @if ($item->status == 'NEGÓCIO FECHADO')
                                                                            <span
                                                                                class="badge badge-sm bg-gradient-success">{{ $item->status }}</span>
                                                                        @endif
                                                                        @if ($item->status == 'NÃO TEVE INTERESSE')
                                                                            <span
                                                                                class="badge badge-sm bg-gradient-danger">{{ $item->status }}</span>
                                                                        @endif
                                                                    </td>

                                                                    <td class="align-middle text-center">
                                                                        @php($date_created_at = \Carbon\Carbon::parse($item->created_at))
                                                                        <span
                                                                            class="badge badge-sm bg-gradient-dark">{{ $date_created_at->format('d/m/y') }}</span>
                                                                    </td>
                                                                   

                                                                
                                                                      {{-- <td class="align-middle text-center">
                                                                        @if ($item->manual)
                                                                            <span
                                                                                class="text-xs font-weight-bold ">Profissional</span>
                                                                        @else
                                                                            <span
                                                                                class="text-xs font-weight-bold">Afiliado</span>
                                                                        @endif

                                                                    </td> --}}

                                                                    {{-- <td class="align-middle text-center">
                                                                        @if ($item->status == 'SEM CONTATO')
                                                                            <a href="{{ url('cliente.indicar.model_edit') }}/{{ $item->id }}"
                                                                                class="btn btn-link text-dark px-3 mb-0"
                                                                                href="javascript:;"><i
                                                                                    class="material-icons text-sm me-2"
                                                                                    translate="no"
                                                                                    title="Editar">edit</i></a>
                                                                            <a href="{{ url('cliente.indicar.model_delete') }}/{{ $item->id }}"
                                                                                class="btn btn-link text-danger text-gradient px-3 mb-0"><i
                                                                                    class="material-icons text-sm me-2"
                                                                                    translate="no"
                                                                                    title="Apagar">delete</i></a>
                                                                        @endif
                                                                    </td> --}}
                                                                </tr>
                                                            @endisset
                                                            @endisset
                                                            
                                                            
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- fim --}}

                        </div>
                    </div>
                </div>
            </div>
        @endif




        <!-- Modal deletar produto-->
        @if ($msg == 'modal_delete_produto')
            <div>
                <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-info" role="document">
                        <!--Content-->
                        <div class="modal-content text-center">
                            <!--Header-->
                            <div class="modal-header d-flex justify-content-center">
                                <h5 class="heading">
                                    Deseja apagar <strong>{{ $produto->name }}</strong>?
                                </h5>
                            </div>
                            <form action="{{ route('produtos-confirmar-apagar-produto') }}" method="post">
                                {!! csrf_field() !!}
                                <div class="modal-body">
                                    <p>Todos os dados relacionados serão eliminados.</p>
                                    <input type="hidden" name="shop_id" value="{{ Auth::user()->shop_id }}"
                                        autocomplete="off" class="form-control">
                                    <input type="hidden" name="idproduto" value="{{ $produto->id }}" autocomplete="off"
                                        class="form-control">
                                </div>

                                <div class="modal-footer flex-center">
                                    <a type="button" id="closemodal" class="btn btn-outline-danger"
                                        data-dismiss="modal">Cancelar</a>
                                    <button class="btn btn-outline-info waves-effect" type="submit"
                                        title="Confirmar">Confirmar</button>
                                </div>
                            </form>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                                crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                                crossorigin="anonymous"></script>
                <script>
                    $(window).on('load', function() {
                        $('#modalPush').modal('show');
                    });
                    $('#closemodal').click(function() {
                        $('#modalPush').modal('hide');
                    });
                </script>
            </div>
        @endif
        {{-- Fim modal delete produto --}}

    </div>

    @include('admin.modals.modal_create_user')
    @include('admin.modals.modal_create_paciente')

 <script>
    function store_new_user(){
        $('#user_modal').modal('show');
    }
    function store_new_paciente(){
        $('#paciente_modal').modal('show');
    }
  
 </script>

<script>
    $(document).ready(function($){
        $('.phone1').inputmask('(99)-99999-9999');
    });
</script>



@endsection
