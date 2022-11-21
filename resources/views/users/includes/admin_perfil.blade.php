@if(Auth::user()->user_type_id == 1 || Auth::user()->user_type_id == 4) 

<div class="col-12 col-xl-6">
  <div class="card card-plain h-100">
    <div class="card-header pb-0 p-3">
      <h6 class="mb-0">Biografia</h6>
    </div>
    <div class="card-body p-3">
      <p class="text-sm">
        {{Auth::user()->biography}}
      </p>
      <hr class="horizontal gray-light my-4">

    </div>
  </div>
</div>

@endif