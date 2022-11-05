<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
        return [
            'system_name'=>[
                'required',
                'string'
            ],
            'active'=>[
                'boolean',
            ],
            'general_alert'=>[
                'required',
                'string'
            ],
            'address'=>[
                'required',
                'string'
            ],
            'phone'=>[
                'required',
                'string'
            ],
            'customer_parent_account_number'=>[
                'required',
                'integer'
            ],
            'suppliers_parent_account_number'=>[
                'required',
                'integer'
            ],
            'added_by'=>[
                'number'
            ],
            'updated_by'=>[
                'number'
            ],
            'com_code'=>[
                'required',
                'integer'
            ],
        ];
    }
}
