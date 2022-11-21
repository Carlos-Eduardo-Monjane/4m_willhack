@extends('layout.app')

@section('content')


@section('body')
 


@include('main.admin')
@include('main.paciente')
@include('main.profissional')
@include('main.user')


  


  <script>
    //datatable
      $(document).ready( function () {
          $('#datatable-conversas').DataTable();
      } );
  
      $(document).ready( function () {
          $('#datatable-categorias').DataTable();
      } );
  </script>


@endsection
@endsection
