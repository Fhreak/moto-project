<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //$currentRoute = Route::getCurrentRoute()->getPath(); DO THIS IF YOU DON'T SPECIFY THE ROUTE NAME ON THE WEB.PHP
        $currentRoute = Route::currentRouteName();

        if($currentRoute == 'addNewProduct'){

            return[           
                'nombre'      => 'required',
                'codigo'      => 'required',
                'precio'      => 'required',
                'cantidad'    => 'required',
                'marca'       => 'required',
                'categoria'   => 'required',
            ];
        }
        
    }
}
