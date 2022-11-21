@if ($msg == 'editar_dados')

<div >
    <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="heading">
                        Edição de dados pessoais
                    </h5>
                </div>
                <form action="{{ url('perfil.actualizar.confirmar') }}"  method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_admin" value="{{Auth::user()->id}}" autocomplete="off"  class="form-control">
                    <input type="hidden" name="id" value="{{Auth::user()->id}}" autocomplete="off"  class="form-control">
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-3">
                    <input type="file" name="photo_perfil" autocomplete="off" value="{{$user->photo}}"  placeholder="Foto de perfil" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Nome da Conta</label> --}}
                    <input type="text" name="name" autocomplete="off" value="{{$user->name}}"  placeholder="Nome completo" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Contato</label> --}}
                    <input type="text" name="phone" autocomplete="off" placeholder="contato" value="{{$user->phone}}"  class=" phone3 form-control">
                  </div>
                   <script>
$(document).ready(function($){
    $('.phone3').inputmask('(99)-99999-9999');
});
</script>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Endereço</label> --}}
                    <input type="text" name="email" placeholder="Email" autocomplete="off"  value="{{$user->email}}" class="form-control">
                  </div>

                  @if(Auth::user()->user_type_id == 3)

                  {{-- <div class="input-group input-group-outline mb-3">
                   <label class="form-label">Recompensa</label> 
                   <input type="text" name="recompensa" autocomplete="off" placeholder="Recompensa" value="{{Auth::user()->recompensa}}"  class="form-control">
                 </div> --}}

                  {{-- <div id="especialidade_div" class="input-group input-group-outline mb-3" >
                    <select name="category"  class="form-control">
                      <option value="{{Auth::user()->specialty->id}}">{{Auth::user()->specialty->name}}</option>
                      @foreach($profissional_categories as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div id="especialidade_div" class="input-group input-group-outline mb-3" >
                    <select name="subcategory"  class="form-control">
                      <option value="{{Auth::user()->subspecialty->id}}">{{Auth::user()->subspecialty->name}}</option>
                      @foreach($profissional_subcategories as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </div> --}}

                  @endif

                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Descrição</label> --}}
                    <textarea type="text" rows="8" name="biography" value="{{$user->biography}}"  autocomplete="off"  placeholder="Biografia" class="form-control">{{$user->biography}}</textarea>
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