<div class="row gx-4 mb-2">
    <div class="col-auto">
      <div class="avatar avatar-xl position-relative">
        @php
           $article = Auth::user()->photo;
        @endphp
        @if(Auth::user()->photo != NULL)
        <img src="{{ URL::asset('storage/'.$article) }}" class="w-100 border-radius-lg shadow-sm" alt="Foto de perfil" title="Foto de perfil">
        @else
        <img src="../assets/img/logo-ct-dark.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        @endif
      </div>
    </div>
    
    <div class="col-auto my-auto">
      <div class="h-100">
        <h5 class="mb-1">
          {{Auth::user()->name}}
        </h5>
        <p class="mb-0 font-weight-normal text-sm">

          @if(Auth::user()->user_type_id == 1)
            Administrador
          @elseif(Auth::user()->user_type_id == 2)
            Paciente
          @elseif(Auth::user()->user_type_id == 3)
          {{ Auth::user()->shop != null ? Auth::user()->shop->name:"Empresa não registada"}}
          @elseif(Auth::user()->user_type_id == 4)
          {{ Auth::user()->function }}
          @endif
          
        </p>
      </div>
    </div>


    {{-- MOSTRA FOTO DA LOJA SE FOR PARCEIRO --}}
    @if(Auth::user()->user_type_id == 3)
    @isset(Auth::user()->shop->photo)
    <div class="col-auto">
      <div class="avatar avatar-xl position-relative">
        @php
           $article = Auth::user()->shop != null ? Auth::user()->shop->photo: "Sem Photo";
        @endphp
        @if(Auth::user()->shop->photo != NULL)
        <img src="{{ URL::asset('storage/'.$article) }}" class="w-100 border-radius-lg shadow-sm" alt="Foto de perfil" title="Foto de perfil">
        @else
        <img src="../assets/img/logo-ct-dark.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        @endif
      </div>
    </div>
    @endisset
    @endif

    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
      <div class="nav-wrapper position-relative end-0">
        <ul class="nav nav-pills nav-fill p-1" role="tablist">

            @if(Auth::user()->user_type_id != 2)
          <li class="nav-item">
            <a href="{{ url('perfil/editar') }}" class="nav-link mb-0 px-0 py-1 "  >
              <i class="material-icons text-lg position-relative" translate="no">edit</i>
              <span class="ms-1">Editar perfil</span>
            </a>
          </li> 
          @endif

          @if(Auth::user()->user_type_id == 2)
          <li class="nav-item" onclick="edit_perfil()" >
            <button class="nav-link mb-0 px-0 py-1 "  >
              <i class="material-icons text-lg position-relative" translate="no">edit</i>
              <span onclick="edit_perfil()"  class="ms-1">Editar perfil</span>
            </button>
          </li> 
          @endif


        @if(Auth::user()->user_type_id == 3)
        @if($user->shop_id != '')
        <li class="nav-item">
          <button class=" btn btn-info" >
            <i class="material-icons text-lg position-relative" translate="no">store</i>
            <span onclick="edit_company()" class="ms-1">Editar a empresa</span>
          </button>
        </li>
      @endif
        @endif

        </ul>
      </div>
    </div>

  </div>