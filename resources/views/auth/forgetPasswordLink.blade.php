@extends('layouts.app')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Recuperar Senha</div>
                  <div class="card-body">
  
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Seu e-mail</label>
                              <div class="col-md-6" style="background-color:gray; color:white;">
                                  <input type="text" style="color: #ffffff;" placeholder="nome@dominio.com" 
    onfocus="this.value=''; this.style.color='#ffffff'" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-warning">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  <hr/>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Nova senha</label>
                              <div class="col-md-6" style="background-color:gray; color:white;">
                                  <input type="password" style="color: #ffffff;" 
    onfocus="this.value=''; this.style.color='#ffffff'"  id="password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-warning">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  <hr/>
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar senha</label>
                              <div class="col-md-6" style="background-color:gray; color:white;">
                                  <input type="password" style="color: #ffffff;" 
    onfocus="this.value=''; this.style.color='#ffffff'"  id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-warning">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              </div>
                          </div>
  <hr/>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Recuperar agora
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection