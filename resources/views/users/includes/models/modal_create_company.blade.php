<!-- Modal HTML -->
<div id="create_company" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" style="color:black; font-size:medium">Criar empresa</h3>
                <button type="button" onclick="close_modal3()" class="btn btn-danger close"
                    data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div>
                    <div class="col-xl-12 col-lg-12 col-md-12  ms-auto me-auto ms-lg-auto me-lg-12">
                        <div class="card card-plain">
                            <div class="card-header card-body">
                                <h4 class="font-weight-bolder">Dados da empresa</h4>
                                {{-- <p class="mb-0">Restrito a Parceiros e profissionais </p> --}}
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('create_company') }}">
                                    @csrf

                                    

                                    <div class="row">
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="file" placeholder="Imagem" required autocomplete="name" name="photo"
                                            
                                                class="form-control">
    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" placeholder="Nome fantásia" required autocomplete="name" name="name"
                                                
                                                    class="form-control">
        
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="input-group input-group-outline mb-3">
                                                <input type="email" required name="email"
                                                placeholder="E-mail corporativo" 
                                                
                                                class="form-control">
                                                
                                            </div>
                                        </div>

               
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" required name="phone" autocomplete="off"
                                                placeholder="Telefone" 
                                           
                                                    class=" phone1 form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline mb-3">
                                                <input required type="text" name="razao_social" autocomplete="off"
                                                placeholder="Razão social" 
                                              
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
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="address" autocomplete="off"
                                                placeholder="Endereço" 
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="state" autocomplete="off"
                                                placeholder="Estado" 
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="city" autocomplete="off"
                                                placeholder="Cidade" 
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="cnpj" autocomplete="off"
                                                placeholder="CNPJ" 
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="cep" autocomplete="off"
                                                placeholder="CEP" 
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="inscricao_municipal" autocomplete="off"
                                                placeholder="Inscrição Municipal" 
                                                required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" name="complemento" autocomplete="off"
                                                placeholder="Complemento" 
                                                required
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
                <button onclick="close_modal3()" type="button" class="btn btn-secondary"
                    data-dismiss="modal">Fechar</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function close_modal3() {
            $('#create_company').modal('hide');
        }
    </script>




</div>