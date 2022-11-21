<div class="col-12 col-xl-6">
    <div class="card card-plain h-100">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-md-8 d-flex align-items-center">
            <h6 class="mb-0">DADOS PESSOAIS</h6>
          </div>
          
        </div>
      </div>
      <div class="card-body p-3">
        @if(Auth::user()->user_type_id == 3)
        <p class="text-sm">
          {{Auth::user()->biography}}
        </p>
        @endif

        <hr class="horizontal gray-light my-4">
        <ul class="list-group">
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome Completo:</strong> &nbsp;{{Auth::user()->name}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Contato:</strong> &nbsp; {{Auth::user()->phone}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">E-mail:</strong> &nbsp; {{Auth::user()->email}}</li>
          @if(Auth::user()->user_type_id == 3)
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Categoria:</strong> &nbsp; {{Auth::user()->name}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Sub-categoria:</strong> &nbsp; {{Auth::user()->name}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Recompensa:</strong> &nbsp; {{Auth::user()->name}}</li>
          @endif

          @if(Auth::user()->user_type_id == 2)
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">CPF:</strong> &nbsp; {{Auth::user()->cpf}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nacionalidade:</strong> &nbsp; {{Auth::user()->nacionalidade}}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Naturalidade:</strong> &nbsp; {{Auth::user()->naturalidade}}</li>
          @endif
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Estado da conta:</strong> &nbsp; {{Auth::user()->status  == 'autorizado'? 'Autorizado':'Não autorizado'}}</li>
          
        </ul>
      </div>
    </div>
  </div>
