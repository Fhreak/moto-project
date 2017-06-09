@extends('admin.main')

@section('content')
<!-- Display Products -->
  <div id="app-products">

    <div class="row  border-bottom white-bg dashboard-header">
      <h2>Productos</h2>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <span><i class="fa fa-plus"></i> Añadir Producto</span>
      </button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>

            <form class="form-horizontal" method="post" action="addNewProduct" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="modal-body">

                <!-- nombre -->
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                        <input id="nombre" type="nombre" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">

                        @if ($errors->has('nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- codigo -->
                <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                    <label for="codigo" class="col-sm-3 control-label">Codigo de Barras</label>

                    <div class="col-sm-9">
                        <input id="codigo" type="codigo" class="form-control" name="codigo" value="{{ old('codigo') }}" placeholder="Codigo">

                        @if ($errors->has('codigo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('codigo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- valor -->
                <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                    <label for="valor" class="col-sm-3 control-label">Valor Unitario</label>

                    <div class="col-sm-9">
                        <input id="valor" type="valor" class="form-control" name="valor" value="{{ old('valor') }}" placeholder="Valor">

                        @if ($errors->has('valor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('valor') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- cantidad -->
                <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                    <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>

                    <div class="col-sm-9">
                        <input id="cantidad" type="cantidad" class="form-control" name="cantidad" value="{{ old('cantidad') }}" placeholder="Cantidad">

                        @if ($errors->has('cantidad'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cantidad') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- marca -->
                <div class="form-group{{ $errors->has('marca') ? ' has-error' : '' }}">
                    <label for="marca" class="col-sm-3 control-label">Marca</label>

                    <div class="col-sm-9">
                      <select class="form-control" placeholder="Seleccione una Marca">
                        @foreach($brands as $brand)
                          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                      </select>

                        @if ($errors->has('marca'))
                            <span class="help-block">
                                <strong>{{ $errors->first('marca') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <!-- modelo -->
                <div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
                    <label for="modelo" class="col-sm-3 control-label">Modelo</label>

                    <div class="col-sm-9">
                      <select class="form-control" placeholder="Seleccione un Modelo">
                        @foreach($brands as $brand)
                          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                      </select>

                        @if ($errors->has('modelo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('modelo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- categoria -->
                <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
                    <label for="categoria" class="col-sm-3 control-label">Categoria</label>

                    <div class="col-sm-9">
                      <select class="form-control" placeholder="Seleccione una Categoria">
                        @foreach($brands as $brand)
                          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                      </select>

                        @if ($errors->has('categoria'))
                            <span class="help-block">
                                <strong>{{ $errors->first('categoria') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <!-- proveedor -->
                <div class="form-group{{ $errors->has('proveedor') ? ' has-error' : '' }}">
                    <label for="proveedor" class="col-sm-3 control-label">Proveedor</label>

                    <div class="col-sm-9">
                      <select class="form-control" placeholder="Seleccione un Proveedor">
                        @foreach($brands as $brand)
                          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                      </select>

                        @if ($errors->has('proveedor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('proveedor') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <!-- descripcion -->
                <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-sm-3 control-label">Descripción</label>

                    <div class="col-sm-9">
                        <textarea id="descripcion" class="form-control" name="descripcion" value="{{ old('descripcion') }}" placeholder="Escribe aquí..."></textarea>

                        @if ($errors->has('descripcion'))
                            <span class="help-block">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <!-- active -->
                <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                    <label for="active" class="col-sm-3 control-label">¿Mostrar a clientes?</label>

                    <div class="col-sm-9">
                      <input id="cb4" type="checkbox" class="tgl tgl-flat">
                      <label for="cb4"class="tgl-btn"></label>
                    </div>
                </div>

                <!-- Image -->
                <div class="form-group">
                  <label for="active" class="col-sm-3 control-label">Imagen de Producto</label>

                  <div class="col-sm-9">
                    <imagepreview></imagepreview> 
                    <!--<input type="file" name="images[]" multiple> -->
                  </div>
                </div>

              

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

            </form>

          </div>
        </div>
      </div>

      <products data="Tabla de productos"></products>
    </div>
  </div>

@endsection
