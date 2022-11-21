@extends('layout.app')

@section('body')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-1" style="background-image: url('../assets/img/4m_saude.png');   background-repeat: no-repeat;
    background-size: 90% 95%;">
      <span class="mask  bg-gradient-primary  opacity-6" ></span>
     
    </div>

    <div class="card card-body mx-3 mx-md-4 mt-n6">
      @if($msg=="success")
      <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">Operação feita com sucesso.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      

  {{-- Header Perfil --}}
  @include('users.includes.perfil_header')
  {{-- END Header Perfil --}}


      <hr>

      <div class="row">
        <div class="row">

          {{-- Dados Pessoais --}}
          @include('users.includes.account_data')
          
          {{-- EMPRESA --}}
          @include('users.includes.company_perfil')

          {{-- ADMIN Bio --}}
          @include('users.includes.admin_perfil')

          {{-- Paciente --}}
          @include('users.includes.paciente_perfil')

          
        </div>
      </div>
    </div>


    <!-- Modal cadastrar conta-->
@include('users.includes.modal_create_account')
{{-- Fim modal cadastro conta --}}

   <!-- Modal editar conta-->
@include('users.includes.modal_edit_account')
   {{-- Fim modal editar conta --}}
   
    <!-- Modal editar Dapos pessoais-->
@include('users.includes.modal_edit_perfil')
    {{-- Fim modal editar Dapos pessoais --}}
    
{{-- Models --}}
@include('users.includes.models.modal_edit_paciente')
@if (!empty(Auth::user()->shop->id))
@include('users.includes.models.modal_edit_company')
@endif

@include('users.includes.models.modal_create_company')
  </div>   


  <script>

    function edit_perfil(){
        $('#edit_perfil').modal('show');
    }

    function edit_company(){
      alert('Brevemente...');
        // $('#edit_company').modal('show');
    }
    function create_company(){
        $('#create_company').modal('show');
    }
    
  
 </script>


@endsection