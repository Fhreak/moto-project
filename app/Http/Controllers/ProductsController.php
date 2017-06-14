<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use Storage;

//Models
use App\Product;
use App\Brand;
use App\Category;
use App\Image;

class ProductsController extends Controller
{
    public function products(){
      $brands = Brand::pluck('name', 'id');
      $categories = Category::pluck('name', 'id');
      $brands->pluck('id', 'name');
      $buttonName = "Añadir Productos";
      $key = "products";
      $modal_title = "Ingreso de Productos";


      return view('admin.products', compact('brands', 'buttonName', 'key', 'modal_title','categories'));
    }

    public function getProductsData(){

      $model    = Product::searchPaginateAndOrder();
      $columns  = Product::$columns;

      foreach ($model as $item) {
        $item->brand_id = Brand::find($item->brand_id)->name;
        // get model name
        // get category name
        //get supplier name
      }

      return response()
              ->json([
                'model'   => $model,
                'columns' => $columns
              ]);

    }

    public function addNewProduct(ProductRequest $request) {   


      if ($request->ajax()) return;

      $pro = new Product;

      $pro->name        = $request->nombre;
      $pro->barcode     = $request->codigo;
      $pro->unit_price  = $request->precio;
      $pro->stock       = $request->cantidad;
      $pro->brand_id    = 1;
      $pro->category_id = 1;
      $pro->supplier_id = 1;
      $pro->active      = $request->active;
      $pro->save();

      $files = $request->file('images');
      $files_count = count($files);
      $uploads_count = 0;

      if(!empty($files)){

        foreach ($files as $file) {

          $fileName   = $file->getClientOriginalName();
          $name       = $file->getFileName();
          $extension  = $file->getClientOriginalExtension();
          $mimetype   = $file->getClientMimeType();

          //UPLOAD INTO PUBLIC/IMAGES FOLDER

          $destination_path = "images";
          $file->move($destination_path, $name .'.'. $extension);
          $uploads_count ++;

          //UPLOAD INTO DATABASE
          $image = new Image;

            $image->product_id    = $pro->id;
            $image->file_name     = $name .'.'. $extension;
            $image->original_name = $name;
            $image->mimetype      = $mimetype;

          $image->save();        
        }
        //foreach($files as $file){
        //Storage::put($file->getClientOriginalName(), file_get_contents($file));
        //}
      } 

      if($files_count == $uploads_count){
        return "archivos subidos correctamente";
      } else{
        return "algo salio mal";
      } 

    }

}
