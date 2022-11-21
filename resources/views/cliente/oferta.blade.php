@extends('layout.app')

@section('body')



<div class="container py-4 ">
  @if($msg == 'my_pro' || $msg == 'my_pro_success' || $msg = 'modal_store_inv')
  <div class="row">
      
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3 text-uppercase">LISTA DE OFERTAS </h6>
        
      </div>

      @if($msg=="my_pro_success_delete")
      <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">Operação feita sucesso.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
 
      @if($msg == 'my_pro' || $msg == 'my_pro_success')
     <div class="col-lg-12 mt-3">
 
      <div class="row">

          @if($msg=="my_pro_success")
          <div class="alert alert-success alert-dismissible text-white" role="alert">
            <span class="text-sm">Operação feita sucesso.</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
         
    </div>
     </div>

   @endif
     </div>        <!-- Modal cadastrar indicacao-->
@if ($msg == 'modal_store_inv')

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
             
                <form action="{{url('pro/indicar/store') }}"  method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                
                <div class="modal-body">
                  <hr/>
                  <p class="col-12 small sm text-sm text-small">Preencha as informações de quem deseja adicionar.</p>
                  <hr/>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Nome completo </label>
                    <input type="text" name="cliente_nome" autocomplete="off"  class="form-control">
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Email </label>
                    <input type="email" name="cliente_email" autocomplete="off"  class="form-control">
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Telefone </label>
                    <input type="tel" name="cliente_phone" autocomplete="off"  class="form-control">
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <textarea type="text" name="obs" autocomplete="off" placeholder="Observações"  class="form-control"></textarea>
                  </div>

                  <hr/>

                  @if (Auth::user()->user_type_id == 2)
                  <p class="col-12 small sm text-sm text-small">Preencha as informações do profissional.</p>
                  <hr/>

                  <div class="input-group input-group-outline mb-3" >
                    <select id="afiliados" name="profissional_id"  class="form-control afiliados">
                          <option value="{{ $profissional_invest->id }}">{{ $profissional_invest->name }}</option>
                    </select>
                  </div>
                  @endif

                </div>

                <div class="modal-footer flex-center">
                    <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                    <button class="btn btn-outline-info waves-effect" type="submit" title="Confirmar">Concluir</button>
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

{{-- Fim modal cadastro indicacao --}}
</div>
  @endif
  </div>
  
  <div class="">
   <div class="col-lg-12 ">
    <div class="row">
        <div class="col-md-1 mt-4 mb-3"><p></p></div>
               @foreach ($profissionais as $item)
    @isset($item->oferta_do_profissinal->title)
    
      <div class="col-md-3 mt-4 mb-3">
     


    

                @isset($item->oferta_do_profissinal->photo)
            @php
            $article = $item->oferta_do_profissinal->photo;
            @endphp
    
         @if($item->oferta_do_profissinal->photo != NULL)
         <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 " style="background-image:  url('{{ URL::asset('storage/'.$article) }}');   background-repeat: no-repeat;
         background-size: 100% 100%;">
          @else
          <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 " style="background-image: url('../assets/img/logo-ct-dark.png');   background-repeat: no-repeat;
          background-size: 100% 100%;">
           @endif
              <div class="chart">
                
                <canvas  height="250" width="300"></canvas>
              </div>
            </div>
        
             @endisset
     
             
             
       <div class="card-body">
                 @isset($item->oferta_do_profissinal->title)
            <h6 class="mb-0 ">{{ $item->oferta_do_profissinal->title }}</h6>
@endisset
          
    

            {{-- Oferta --}}
           
              
    
            <hr>
    
            <div class="d-flex ">
                 @isset($item->photo)
              <div class="my-auto me-3 col-auto ">
                <div class="avatar avatar-xl position-relative">
                    
                  @php
                     $article = $item->photo;
                  @endphp
                  @if($item->photo != NULL)
                  <img src="{{ URL::asset('storage/'.$article) }}" class="w-100 border-radius-lg shadow-sm" alt="Foto de perfil" title="Foto de perfil">
                  @else
                  <img src="../assets/img/logo-ct-dark.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                  @endif
                </div>
              </div>
               @endisset
    
              <div class="mb-0 text-sm">
   
                <p class="text-sm mb-0 "><strong class="text-dark "><i class="material-icons text-sm my-auto me-1" translate="no">badge</i></strong> &nbsp;{{$item->name}}</p>
                <p class="text-sm mb-0"><strong class="text-dark"><i class="material-icons text-sm my-auto me-1" translate="no">timer</i></strong> &nbsp;{{$item->oferta_do_profissinal->validate}}</p>
                <p class="text-sm mb-0"><strong class="text-dark"><i class="material-icons text-sm my-auto me-1" translate="no">receipt_long</i></strong> &nbsp;{{$item->oferta_do_profissinal->describe}}</p>
              
              </div>
            </div>
    
           
    
            <hr/>
            <div class="text-center">
              <div class="d-flex text-center">
          
                <p class="text-center">
                    <a class="btn bg-gradient-info mb-0" href="{{ url('cliente.indicar.oferta.model_store_inv') }}/{{ $item->id }}"><i class="material-icons text-sm" translate="no">share</i>&nbsp;&nbsp;Indicar</a>
             
                </p>
              
              </div>
    
           
            </div>
          </div>
          
          
      </div>
      
      @endisset
 @endforeach
  <div class="col-md-1 mt-4 mb-3"><p></p></div>
    </div>
</div>
</div>   
  </div>


@endsection