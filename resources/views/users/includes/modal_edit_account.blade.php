@if ($msg == 'editar_conta')

<div >
    <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="heading">
                        Edição da conta
                    </h5>
                </div>
                <form action="{{ url('shop.actualizar.confirmar') }}"  method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_admin" value="{{Auth::user()->id}}" autocomplete="off"  class="form-control">
                    <input type="hidden" name="id" value="{{Auth::user()->id}}" autocomplete="off"  class="form-control">
                    <input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}" autocomplete="off"  class="form-control">
                <div class="modal-body">
                 <div class="input-group input-group-outline mb-3">
                   <input type="file" name="photo_shop" autocomplete="off" value="{{Auth::user()->shop->photo}}"  placeholder="Imagem da Empresa" class="form-control">
                 </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Nome da Conta</label> --}}
                    <input type="text" name="name" autocomplete="off" value="{{$shop->name}}"  placeholder="Nome da Empresa" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Contato</label> --}}
                    <input type="text" name="phone" autocomplete="off" value="{{$shop->phone}}"  class="phone2 form-control">
                  </div>
                    <script>
 $(document).ready(function($){
     $('.phone2').inputmask('(99)-99999-9999');
 });
</script>
             
                  <div class="input-group input-group-outline mb-3">
                   {{-- <label class="form-label">Endereço</label> --}}
                   <input type="email" name="email" placeholder="E-mail" autocomplete="off"  value="{{$shop->email}}" class="form-control">
                 </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Endereço</label> --}}
                    <input type="text" name="address" placeholder="Endereço" autocomplete="off"  value="{{$shop->address}}" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Descrição</label> --}}
                    <textarea type="text" rows="8" name="description" value="{{Auth::user()->shop->description}}"  autocomplete="off"  class="form-control">{{$shop->description}}</textarea>
                  </div>
                </div>

                <div class="modal-footer flex-center">
                    <a type="button" id="closemodal" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</a>
                    <button class="btn btn-outline-info waves-effect" type="submit" title="Cadastrar">Confirmar</button>
                </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
        $(window).on('load',function(){
            $('#modalPush').modal('show');
        });
        $('#closemodal').click(function() {
            $('#modalPush').modal('hide');
        });
    </script>
</div>
@endif