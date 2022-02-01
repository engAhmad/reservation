<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateReservationRequest extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "user_id"=>"filled",
            "car_id"=>"filled",
            "mini_house_id"=>"filled",
            "package_id"=>"filled",
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
