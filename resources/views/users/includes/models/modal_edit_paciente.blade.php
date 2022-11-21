<!-- Modal HTML -->
<div id="edit_perfil" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" style="color:black; font-size:medium">Paciente</h3>
                <button type="button" onclick="close_modal1()" class="btn btn-danger close"
                    data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div>
                    <div class="col-xl-12 col-lg-12 col-md-12  ms-auto me-auto ms-lg-auto me-lg-12">
                        <div class="card card-plain">
                            <div class="card-header card-body">
                                <h4 class="font-weight-bolder">Editar o perfil</h4>
                                {{-- <p class="mb-0">Restrito a Parceiros e profissionais </p> --}}
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('edit_paciente') }}">
                                    @csrf

                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" placeholder="Nome Completo" required autocomplete="name" name="name"
                                            value="{{$user->name}}"
                                            class="form-control">

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="input-group input-group-outline mb-3">
                                                <input type="email" required name="email"
                                                placeholder="E-mail" 
                                                value="{{$user->email}}"
                                                class="form-control">
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="phone" autocomplete="off"
                                                placeholder="Telefone" 
                                                value="{{$user->phone}}"
                                                    class=" phone1 form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="nacionalidade" autocomplete="off"
                                                placeholder="Nacionalidade" 
                                                value="{{$user->nacionalidade}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="naturalidade" autocomplete="off"
                                                placeholder="Naturalidade" 
                                                value="{{$user->naturalidade}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="pai" autocomplete="off"
                                                placeholder="Nome do pai" 
                                                value="{{$user->pai}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="mae" autocomplete="off"
                                                placeholder="Nome da mãe" 
                                                value="{{$user->mae}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>







                                    <script>
                                        $(document).ready(function($) {
                                            $('.phone1').inputmask('(99)-99999-9999');
                                        });
                                    </script>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="bairro" autocomplete="off"
                                                placeholder="Bairro" 
                                                value="{{$user->bairro}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="address" autocomplete="off"
                                                placeholder="Endereço" 
                                                value="{{$user->address}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="state" autocomplete="off"
                                                placeholder="Estado" 
                                                value="{{$user->state}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="city" autocomplete="off"
                                                placeholder="Cidade" 
                                                value="{{$user->city}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="cep" autocomplete="off"
                                                placeholder="CEP" 
                                                value="{{$user->cep}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="cpf" autocomplete="off"
                                                placeholder="CPF" 
                                                value="{{$user->cpf}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="rg" autocomplete="off"
                                                placeholder="RG" 
                                                value="{{$user->rg}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="complemento" autocomplete="off"
                                                placeholder="Complemento" 
                                                value="{{$user->complemento}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    {{-- <input name="user_type_id" value="2" type="hidden"> --}}

                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Senha</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="password-confirm" class="form-label">Confirmar
                                                    senha</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">

                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div> --}}




                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <div class="modal-footer">
                <button onclick="close_modal1()" type="button" class="btn btn-secondary"
                    data-dismiss="modal">Fechar</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function close_modal1() {
            $('#edit_perfil').modal('hide');
        }
    </script>




</div>