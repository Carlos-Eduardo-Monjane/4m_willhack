@extends('layout.app')

@section('body')

<div class="container-fluid py-4 ">

  <div class="row">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3 text-uppercase">ADICIONE UM PROFISSIONAL FAVORITO </h6>
        
      </div>
      
    </div>
    <div class="col-md-12 mb-lg-0 mb-4">
      <div class="card mt-4">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center" >
                      <form class="form-inline">
           <input style=" border: none;
  border-bottom: 1px solid green;" class="form-control mr-sm-2" type="search" placeholder="  Pesquisar" aria-label="Search" id="search">
         </form>
            </div>

            <div class="col-6 text-end">
              <a class="btn bg-gradient-black mb-0" href="{{ url('cliente.pro.favorito.index') }}"><i class="material-icons text-sm" translate="no">receipt_long</i>&nbsp;&nbsp;Ver os meus favoritos</a>
           
           </div>
            
          </div>
        </div>
        <br/>
      </div>
      
    </div>

    @if($msg=="add_new_pro_error")
    <div class="alert alert-danger alert-dismissible text-white" role="alert">
      <span class="text-sm">Esse profissional já está na lista dos seus favoritos.</span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    
    <div class="col-lg-12 mt-3">
      <div class="row">
          
        
<script>

function removeAcento (text)
{       
    text = text.toLowerCase();                                                         
    text = text.replace(new RegExp('[ÁÀÂÃ]','gi'), 'a');
    text = text.replace(new RegExp('[ÉÈÊ]','gi'), 'e');
    text = text.replace(new RegExp('[ÍÌÎ]','gi'), 'i');
    text = text.replace(new RegExp('[ÓÒÔÕ]','gi'), 'o');
    text = text.replace(new RegExp('[ÚÙÛ]','gi'), 'u');
    text = text.replace(new RegExp('[Ç]','gi'), 'c');
    return text;                 
}

$('#search').keyup(function (){
    $('.card').removeClass('d-none');
   // var filter = $(this).val(); // get the value of the input, which we filter on
    
    var filter = $(this).val().toLowerCase();
    
    texto = removeAcento(filter);
    
    if (texto === "") {
    console.log("Vazio");
    }else{
     console.log("Com");  
         $('.card-deck').find('.card .card-body h4:not(:contains("'+texto+'"))').parent().parent().addClass('d-none');
    }
})

</script>


<!-- Search functionality -->
<!--     <nav class="navbar navbar-light justify-content-center mt-4">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Type a name" aria-label="Search" id="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav> -->














@foreach ($profissionais as $item)

@php
$user = App\Profissional_Favorito::where('profissional_id',$item->id)->get(); 

$recomendacao = $user->count();
@endphp

    <!-- Cards -->
<!--     <div class="layout-margin-8 mt-5">
  <div class="card-deck">
    <div class="card card-shadow text-center">
      <div class="card-body">
        <h4 class="card-title">{{ $item->name }}</h4>
        <p class="card-text">UX Designer</p>
        <div class="dropdown-divider"></div>
        <p class="card-text"><small class="text-muted">Team A</small></p>
        <a href="#"><button type="button" class="btn btn-outline-primary">Email</button></a>
      </div>
    </div>
    </div>
  </div> -->

<!--TRUE-->
  <div class="card-deck col-lg-4 mt-4 mb-3">

    <div class="card z-index-2 ">
      
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        @php
        $article = $item->photo;
        @endphp

     @if($item->photo != NULL)
     <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 " style="background-image:  url('{{ URL::asset('storage/'.$article) }}');   background-repeat: no-repeat;
     background-size: 100% 100%;">
              <div class="chart">
            
            <canvas  height="120"></canvas>
          </div>
            </div>
      @else
      <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 " style="background-image: url('../assets/img/logo-ct-dark.png');   background-repeat: no-repeat;
      background-size: 100% 100%;">
               <div class="chart">
            
            <canvas  height="120"></canvas>
          </div>
            </div>
    @endif

     
      
      </div>
      
      <div class="card-body">
        <h4 style="color:white; font-size: 2px;">{{ 
        preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), strtolower($item->name))
         }}</h4>
        <h6 class="card-title">{{ $item->name }}</h6>

        <hr>

        <div class="d-flex ">
          <div class="my-auto me-3 col-auto ">
            <div class="avatar avatar-xl position-relative">
              @php
                 $article = $item->shop->photo;
              @endphp
              @if($item->shop->photo != NULL)
              <img src="{{ URL::asset('storage/'.$article) }}" class="w-100 border-radius-lg shadow-sm" alt="Foto de perfil" title="Foto de perfil">
              @else
              <img src="../assets/img/logo-ct-dark.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              @endif
            </div>
          </div>

          <div class="mb-0 text-sm">

            <p class="text-sm mb-0 "><strong class="text-dark ">Empresa:</strong> &nbsp;{{$item->shop->name}}</p>
            <p class="text-sm mb-0"><strong class="text-dark">Categoria:</strong> &nbsp;{{$item->specialty->name}}</p>
            <p class="text-sm mb-0"><strong class="text-dark">Subcategoria:</strong> &nbsp;{{$item->subspecialty->name}}</p>
          
          </div>
        </div>
        
         <hr>
             <h6 class="mb-0 text-md">Recompensa</h6>
                      <div class="mb-0 text-sm">
            
                        <p class="text-sm mb-0 "><strong class="text-dark "><i class="material-icons text-sm my-auto me-1" translate="no">card_giftcard</i></strong> &nbsp;{{$item->recompensa}}</p>
                     
                      </div>
                      
           <hr>
             <h6 class="mb-0 text-md">Recomendado</h6>
                      <div class="mb-0 text-sm">
            
                        <p class="text-sm mb-0 ">
                            <strong class="text-dark ">
                                <i class="material-icons text-sm my-auto me-1" translate="no">group</i></strong> &nbsp;{{$recomendacao}} afiliados</p>
                     
                      </div>
                    {{-- Oferta --}}
                    @isset($item->oferta_do_profissinal->photo)
              
    
                   
            
                
                      

               
            
                    @endisset



        <hr/>
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1" translate="no">mail</i>
          <p class="mb-0 text-sm">{{$item->shop->email}}</p>
        </div>
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1" translate="no">call</i>
          <p class="mb-0 text-sm">{{$item->shop->phone}}</p>
        </div>
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1" translate="no">place</i>
          <p class="mb-0 text-sm">{{$item->shop->address}}</p>
        </div>

        <hr/>
        <div class="text-center">
          <p class="mb-0 text-sm">  
            <a class="btn bg-gradient-dark mb-0" href="{{ url('cliente.pro.favorito.new.add') }}/{{ Auth::user()->id}}/{{ $item->id }}"><i class="material-icons text-sm" translate="no">add</i>&nbsp;&nbsp;Adicionar a favorito</a>
          </p>
        </div>
      </div>
    </div>
  </div> 
  

  @endforeach



     
    </div>   
    
    
      
    </div>

  </div>

  
</div>


@endsection