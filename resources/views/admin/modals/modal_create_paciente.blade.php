<!-- Modal HTML -->
<div id="paciente_modal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" style="color:black; font-size:medium">Criar novo</h3>
                <button type="button" onclick="close_modal1()" class="btn btn-danger close"
                    data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div>
                    <div class="col-xl-12 col-lg-12 col-md-12  ms-auto me-auto ms-lg-auto me-lg-12">
                        <div class="card card-plain">
                            <div class="card-header card-body">
                                <h4 class="font-weight-bolder">Registro do novo paciente</h4>
                                {{-- <p class="mb-0">Restrito a Parceiros e profissionais </p> --}}
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register_paciente') }}">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Nome Completo</label>
                                        <input type="text" required autocomplete="name" name="name"
                                            value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid @enderror">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" required name="email"
                                                    value="{{ old('email') }}" autocomplete="email"
                                                    class="form-control @error('email') is-invalid @enderror">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Telefone</label>
                                                <input type="text" name="phone" autocomplete="off"
                                                    class=" phone1 form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Nacionalidade</label>
                                                <input type="text" name="nacionalidade" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Naturalidade</label>
                                                <input type="text" name="naturalidade" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Nome do pai</label>
                                                <input type="text" name="pai" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Nome da mãe</label>
                                                <input type="text" name="mae" autocomplete="off"
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
                                                <label class="form-label">Bairro</label>
                                                <input type="text" name="bairro" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Endereço</label>
                                                <input type="text" name="address" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Estado</label>
                                                <input type="text" name="state" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Cidade</label>
                                                <input type="text" name="city" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">CEP</label>
                                                <input type="text" name="cep" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">CPF</label>
                                                <input type="text" name="cpf" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">RG</label>
                                                <input type="text" name="rg" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Complemento</label>
                                                <input type="text" name="complemento" autocomplete="off"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    <input name="user_type_id" value="2" type="hidden">

                                    <div class="row">
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
                                    </div>




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
            $('#paciente_modal').modal('hide');
        }
    </script>




</div>