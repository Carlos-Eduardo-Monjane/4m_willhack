@if(Auth::user()->user_type_id == 1)
<li class="nav-item">
  <a class="nav-link text-white active bg-gradient-primary" href="{{ url('/') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">dashboard</i>
    </div>
    <span class="nav-link-text ms-1">Início</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('admin/afiliados') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">accessibility</i>
    </div>
    <span class="nav-link-text ms-1">Pacientes</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('admin/profissional') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">manage_accounts</i>
    </div>
    <span class="nav-link-text ms-1">Empresas</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('admin/users') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">account_circle</i>
    </div>
    <span class="nav-link-text ms-1">Usuários</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('admin/indicacoes') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">settings_ethernet</i>
    </div>
    <span class="nav-link-text ms-1">Agendamentos</span>
  </a>
</li>
{{-- 
<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('admin/categoria.index') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">stars</i>
    </div>
    <span class="nav-link-text ms-1">Categorias</span>
  </a>
</li> --}}

<li class="nav-item">
  <a class="nav-link text-white " href="{{ url('admin/perfil') }}">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" translate="no">person</i>
    </div>
    <span class="nav-link-text ms-1">Minha Conta</span>
  </a>
</li>

@endif