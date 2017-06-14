@extends('admin.main')

@section('content')
<!-- Display Products -->
  <div id="app-products">

    <div class="row  border-bottom white-bg dashboard-header">
      <h2>Productos</h2>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $key }}">
        <span><i class="fa fa-plus"></i> {{ $buttonName }}</span>
      </button>

        <!-- MODAL WITH ADD_PRODUCTS_FORM -->
        @include('admin.modal_partials._modal_add_products')


        <!-- VUE COMPONENT -->
        <products data="Tabla de productos"></products>
    </div>
  </div>

@endsection
