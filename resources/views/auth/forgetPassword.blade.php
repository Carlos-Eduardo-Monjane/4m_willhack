@extends('layouts.app')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header bold text-bold text-black">Recuperação de Senha</div>
                  <div class="card-body">
  <hr/>
                    @if (Session::has('message'))
                         <div class="alert alert-success text-white" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Seu e-mail</label>
                              <div class="col-md-6 bg-green text-white" style="background-color:gray; color:white;">
                                  <input
                                  style="color: #ffffff;" placeholder="nome@dominio.com" 
    onfocus="this.value=''; this.style.color='#ffffff'"
                                  type="email" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <hr/>
                          <div class="row">
                               <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Solicitar agora
                              </button>
                          </div>
                           <div class="col-md-4">
                              <a href="{{ route('login') }}" class="btn btn-primary">
                                  Fazer Login
                              </a>
                          </div>
                          </div>
                         
                          
                      </form>
                      
                    
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection