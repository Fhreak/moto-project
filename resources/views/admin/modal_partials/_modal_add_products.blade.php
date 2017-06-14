
<!-- Modal -->
<div class="modal fade" id="{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{$modal_title}}</h4>
            </div>             
        <form @submit.prevent="submitForm" class="form-horizontal" method="post" action="addNewProduct" enctype="multipart/form-data">

            <div class="modal-body">


                {{ csrf_field() }}

                <!-- codigo -->
                <div class="form-group" :class="{ 'has-error' : formErrors['codigo'] }">
                    <label for="codigo" class="col-sm-3 control-label">Codigo</label>

                    <div class="col-sm-9">
                        <input id="codigo" type="text" class="form-control" name="codigo" v-model="formInputs.codigo" value="{{ old('codigo') }}" placeholder="Codigo">                      
                            <span v-if="formErrors['codigo']" class="help-block">@{{ formErrors['codigo'][0] }}</span>
                    </div>
                </div>

                <!-- nombre -->
                <div class="form-group" :class="{ 'has-error' : formErrors['nombre'] }">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                        <input id="nombre" type="text" class="form-control" name="nombre" v-model="formInputs.nombre" value="{{ old('nombre') }}" placeholder="Nombre">                      
                            <span v-if="formErrors['nombre']" class="help-block">@{{ formErrors['nombre'][0] }}</span>
                    </div>
                </div>

                <!-- precio -->
                <div class="form-group" :class="{ 'has-error' : formErrors['precio'] }">
                    <label for="precio" class="col-sm-3 control-label">Precio</label>

                    <div class="col-sm-9">
                        <input id="precio" type="text" class="form-control" name="precio" v-model="formInputs.precio" value="{{ old('precio') }}" placeholder="Precio">                      
                            <span v-if="formErrors['precio']" class="help-block">@{{ formErrors['precio'][0] }}</span>
                    </div>
                </div>

                <!-- cantidad -->
                <div class="form-group" :class="{ 'has-error' : formErrors['cantidad'] }">
                    <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>

                    <div class="col-sm-9">
                        <input id="cantidad" type="text" class="form-control" name="cantidad" v-model="formInputs.cantidad" value="{{ old('cantidad') }}" placeholder="Cantidad">                      
                            <span v-if="formErrors['cantidad']" class="help-block">@{{ formErrors['cantidad'][0] }}</span>
                    </div>
                </div>
                
                <!-- marca -->
                <div class="form-group" :class="{ 'has-error' : formErrors['marca'] }">
                    <label for="marca" class="col-sm-3 control-label">Marca</label>

                    <div class="col-sm-9">
                        {!! Form::select('marca', $brands, null, ['class' => 'form-control', 'id' => 'marca', 'placeholder' => 'Seleccione una Marca'], ['v-model' => 'formInputs.marca']) !!}
                        <span v-if="formErrors['marca']" class="help-block">@{{ formErrors['marca'][0] }}</span>
                    </div>
                </div>
                

                <!-- categoria -->
                <div class="form-group" :class="{ 'has-error' : formErrors['categoria'] }">
                    <label for="categoria" class="col-sm-3 control-label">Categoria</label>

                    <div class="col-sm-9">
                        {!! Form::select('categoria', $categories, null , ['class' => 'form-control', 'id' => 'categoria', 'placeholder' => 'Seleccione una Categoria'], ['v-model' => 'formInputs.categoria']) !!}
                        <span v-if="formErrors['categoria']" class="help-block">@{{ formErrors['categoria'][0] }}</span>
                    </div>
                </div>
                

                <!-- descripcion -->
                <div class="form-group" :class="{ 'has-error' : formErrors['descripcion'] }">
                    <label for="descripcion" class="col-sm-3 control-label">Descripción</label>

                    <div class="col-sm-9">
                        <textarea id="descripcion" class="form-control" name="descripcion" v-model="formInputs.descripcion" value="{{ old('descripcion') }}" placeholder="Escribe aquí..."></textarea>                     
                            <span v-if="formErrors['descripcion']" class="help-block">@{{ formErrors['descripcion'][0] }}</span>
                    </div>
                </div>
                

                <!-- active -->
                <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                    <label for="active" class="col-sm-3 control-label">¿Mostrar a clientes?</label>
                    
                    <div class="col-sm-9">
                      <input id="cb4" type="checkbox" name="active" class="tgl tgl-flat" checked>
                      <label for="cb4" class="tgl-btn"></label>
                    </div>
                </div>

                <!-- Image -->
                <div class="form-group">
                  <label for="active" class="col-sm-3 control-label">Imagen de Producto</label>

                  <div class="col-sm-9">
                    <!-- <imagepreview></imagepreview> -->
                    <input type="file" name="images[]" multiple>
                    <!-- <uploadimagepreview></uploadimagepreview> -->
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