@if(Auth::user()->user_type_id == 2) 

<div class="col-12 col-xl-6">
  <div class="card card-plain h-100">
    <div class="card-header pb-0 p-3">
      <h6 class="mb-0">Outros</h6>
    </div>
    <div class="card-body p-3">
      
      <hr class="horizontal gray-light my-4">
        <ul class="list-group">
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome do pai:</strong> &nbsp;{{Auth::user()->pai}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nome da mãe:</strong> &nbsp; {{Auth::user()->mae}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Endereço:</strong> &nbsp; {{Auth::user()->address}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Complemento:</strong> &nbsp; {{Auth::user()->complemento}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Bairro:</strong> &nbsp; {{Auth::user()->bairro}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">CEP:</strong> &nbsp; {{Auth::user()->cep}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Cidade:</strong> &nbsp; {{Auth::user()->city}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Estado:</strong> &nbsp; {{Auth::user()->state}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">RG:</strong> &nbsp; {{Auth::user()->rg}}</li>


      <hr class="horizontal gray-light my-4">

    </div>
  </div>
</div>

@endif