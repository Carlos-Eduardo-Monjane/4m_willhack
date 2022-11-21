@if ($msg == 'pro')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">{{ $user_type }}</h6>
                </div>
            </div>

            <div class="card-body px-0 pb-2">
                @if ($msg == 'success')
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="text-sm">Operação feita sucesso.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                {{-- inicio --}}
                {{-- Produtos --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12 mb-lg-0 mb-4">
                                <div class="card px-0 pb-2">

                                    <hr>
                                    <div class="table-responsive p-0 card-body">
                                        <table id="datatable-afil" class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Foto/Nome</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Telefone</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Email</th>
                                                        <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Data de inscrição</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Biografia</th>
                                                     <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Ações</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($lista as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div>
                                                                  @php
                                                                  $article = $item->photo;
                                                              @endphp
                                                                        @if ($item->photo != null)
                                                              <img src="{{ URL::asset('storage/' . $article) }}"
                                                                  class="avatar avatar-sm me-3 border-radius-lg"
                                                                  alt="Foto de perfil"
                                                                  title="Foto de perfil">
                                                          @else
                                                              <img src="../assets/img/logo-ct-dark.png"
                                                                  alt="profile_image"
                                                                  class="avatar avatar-sm me-3 border-radius-lg">
                                                          @endif
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $item->name }}</h6>

                                                                    @if ($item->user_type_id == 3)
                                                                        @php
                                                                            $user = App\User::find($item->id)->shop;
                                                                        @endphp
                                                                        @if ($user != null)
                                                                            <p
                                                                                class="text-xs text-secondary mb-0">
                                                                                {{ $user->name }}</p>
                                                                        @endif
                                                                    @endif



                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                                       <span
                                                            
                                                                class="text-secondary text-xs font-weight-bold">
                                                            <a href="#">{{ $item->phone }}</a>
                      
                                                                
                                                                </span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $item->email }}</span>
                                                        </td>

                                                        

                                                        <td class="align-middle text-center">
                                                          <span
                                                              class="badge badge-sm bg-gradient-dark">{{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                                      </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <textarea class="align-middle text-center text-secondary text-xs " readonly
                                                                value="{{ $item->biography }}">{{ $item->biography }}</textarea>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('admin/user.deletar') }}/{{ $item->id }}"
                                                                onclick="javasciprt: return confirm('Você tem certeza que quer apagar?')"
                                                                class="btn btn-link text-danger text-gradient px-3 mb-0"><i
                                                                    class="material-icons text-sm me-2"
                                                                    translate="no"
                                                                    title="Apagar">delete</i></a>
                                                        </td> 
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
                {{-- fim --}}

            </div>
        </div>
    </div>
</div>
@endif