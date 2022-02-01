<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreReservationRequest extends FormRequest
{
 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "user_id"=>"required",
            "car_id"=>"required",
            "mini_house_id"=>"required",
            "package_id"=>"required",
        ];
    }
    
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
         'success'   => false,
         'message'   => 'Validation errors',
         'data'      => $validator->errors(),
         'code' =>'422'
        ]), 422);
    }
}
