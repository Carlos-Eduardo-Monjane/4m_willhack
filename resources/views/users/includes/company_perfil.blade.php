@if(Auth::user()->user_type_id == 3) 

@if($user->shop_id != NULL)
<div class="col-12 col-xl-6">
  <div class="card card-plain h-100">
    <div class="card-header pb-0 p-3">
      <h6 class="mb-0">DADOS DA EMPRESA</h6>
    </div>
    <div class="card-body p-3">
      <p class="text-sm">
        {{Auth::user()->shop->name}} - {{Auth::user()->shop->email}}
      </p>
      <hr class="horizontal gray-light my-4">
      <ul class="list-group">
        {{-- <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome:</strong> &nbsp;{{Auth::user()->shop->name}}</li> --}}
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Contato:</strong> &nbsp; {{Auth::user()->shop->phone}}</li>
        {{-- <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">E-mail:</strong> &nbsp; {{Auth::user()->shop->email}}</li> --}}
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Endereço:</strong> &nbsp; {{Auth::user()->shop->address}}</li>

        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Razão Social:</strong> &nbsp;{{Auth::user()->shop->razao_social}}</li>
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Bairro:</strong> &nbsp; {{Auth::user()->shop->bairro}}</li>
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">CEP:</strong> &nbsp; {{Auth::user()->shop->cep}}</li>
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">CNPJ:</strong> &nbsp; {{Auth::user()->shop->cnpj}}</li>

        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Complemento:</strong> &nbsp;{{Auth::user()->shop->complemento}}</li>
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Inscrição Municipal:</strong> &nbsp; {{Auth::user()->shop->inscricao_municipal}}</li>
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Cidade:</strong> &nbsp; {{Auth::user()->shop->city}}</li>
        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Estado:</strong> &nbsp; {{Auth::user()->shop->state}}</li>





        {{-- <li class="list-group-item border-0 ps-0 pb-0">
          <strong class="text-dark text-sm">Social:</strong> &nbsp;
          <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
            <i class="fab fa-facebook fa-lg"></i>
          </a>
          <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
            <i class="fab fa-twitter fa-lg"></i>
          </a>
          <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>
</div>
@else
<div class="col-12 col-xl-6">
  <div class="card card-plain h-100">
    <div class="card-header pb-0 p-3">

      

      {{-- <h5 class="mb-0">Caro usuário, a sua conta ainda não está configurada. <a style="color: red" href="{{ url('parceiro-perfil-criar-conta') }}">Clique aqui</a> para configurar.</h5> --}}
    
      <button  onclick="create_company()" class=" btn btn-info" >
        <i class="material-icons text-lg position-relative" translate="no">store</i>
        <span onclick="create_company()" class="ms-1">Registrar a minha empresa</span>
      </button>
    </div>
  </div>
</div>
@endif

@endif