{{-- Paciente --}}
@if(Auth::user()->user_type_id == 2)  
{{-- Conta de profissinal ou conta nao autorizada --}}
<li class="nav-item">
  <a class="nav-link text-white active bg-gradient-primary" href="{{ url('/') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">dashboard</i>
    </div>
    <span class="nav-link-text ms-1">Início</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('cliente/indicar/index') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">settings_ethernet</i>
    </div>
    <span class="nav-link-text ms-1">Agendamentos</span>
  </a>
</li>

  {{-- <li class="nav-item">
  <a class="nav-link text-white " href="{{ url('cliente.pro.oferta.index') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">card_giftcard</i>
    </div>
    <span class="nav-link-text ms-1">Ofertas</span>
  </a>
</li> --}}

<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('perfil') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">person</i>
    </div>
    <span class="nav-link-text ms-1">Perfil</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">login</i>
      {{-- <i class="material-icons opacity-10" translate="no">assignment</i> --}}
    </div>
    <span class="nav-link-text ms-1">Sair</span>
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST"
  style="display: none;">
  @csrf
</form>
</li>
@endif