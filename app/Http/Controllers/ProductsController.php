<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

//Models
use App\Product;
use App\Brand;

class ProductsController extends Controller
{
    public function products(){
      $brands = Brand::all();
      $brands->pluck('id', 'name');
      return view('admin.products', compact('brands'));
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

    public function addNewProduct(Request $request) {   

      $this->validate($request, [
        'nombre'      => '',
        'codigo'      => '',
        'valor'       => '',
        'cantidad'    => '',
        'marca'       => '',
        'modelo'      => '',
        'categoria'   => '',
        'proveedor'   => '',
        'descripcion' => ''
      ]);

      $files = $request->file('images');

      foreach($files as $file){
        Storage::put($file->getClientOriginalName(), file_get_contents($file));
      }
         

    }
}
