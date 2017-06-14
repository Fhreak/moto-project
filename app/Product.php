<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['brand_id', 'category_id', 'supplier_id', 'name', 'unit_price', 'stock', 'description', 'active∫'];


  public static $columns = [
                    'name', 'unit_price', 'stock', 'brand_id',
                    'category_id', 'supplier_id'
                ];
  /*
  'nombre', 'valor Unit.', 'stock', 'descripción',
  'marca', 'modelo', 'categoria', 'proveedor'
  || Relationships
  */
  public function brand($id){
    return \Brand::find($id);
  }
  public function category(){
    return $this->belongsTo('App\Category');
  }
  public function supplier(){
    return $this->belongsTo('App\Supplier');
  }

  /*
  || Scopes
  */
  public function scopeSearchPaginateAndOrder($query){
    $request = app()->make('request');

    $v = Validator::make($request->only([
      'column', 'direction', 'per_page'
    ]),[
      'column'    => 'required|alpha_dash|in:'.implode(',', self::$columns),
      'direction' => 'required|in:asc,desc',
      'per_page'  => 'integer|min:1'
    ]);


    if($v->fails()){
      throw new \Illuminate\Validation\ValidationException($v);
    }


    return $query->select('name', 'unit_price', 'stock', 'brand_id',
                          'category_id', 'supplier_id')
                          ->orderBy($request->column, $request->direction)
                          ->paginate($request->per_page);
  }



  /*
  |--------------------------------------------------------------------------
  | MUTATORS
  |--------------------------------------------------------------------------
  */

  public function setActiveAttribute($value){
    $this->attributes['active'] = ($value == 'on') ? '1' : '0';
  }

}
