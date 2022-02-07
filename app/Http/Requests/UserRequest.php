<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class UserRequest extends FormRequest
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
        $method = strtolower($this->method());
        $user_id = $this->route()->user;

        $rules = [];
        switch ($method) {
            case 'post':
                $rules = [
                    'username' => 'required|max:20',
                    'password' => 'required|confirmed|min:8',
                    'email' => 'required|max:191|email|unique:users',
                    'phone_number'=>'max:13',
                    // 'userProfile.gender' =>  'required',
                    'userProfile.country' =>  'max:191',
                    'userProfile.state' =>  'max:191',
                    'userProfile.city' =>  'max:191',
                    'userProfile.pin_code' =>  'max:191',
                ];
                break;
            case 'patch':
                $rules = [
                    'username' => 'required|max:20',
                    'email' => 'required|max:191|email|unique:users,email,'.$user_id,
                    'phone_number'=>'max:13',
                    'password' => 'confirmed|min:8|nullable',
                    // 'userProfile.gender' =>  'required',
                    'userProfile.country' =>  'max:191',
                    'userProfile.state' =>  'max:191',
                    'userProfile.city' =>  'max:191',
                    'userProfile.pin_code' =>  'max:191',
                ];
                break;

        }

        return $rules;
    }

    public function messages()
    {
        return [
            'userProfile.gender.*'  =>'Gender is required.',
            'userProfile.dob.*'  =>'DOB is required.',
            'userProfile.country.*'  =>'Country may not be greater than 191 characters.',
            'userProfile.state.*'  =>'State may not be greater than 191 characters.',
            'userProfile.city.*'  =>'City may not be greater than 191 characters.',
            'userProfile.pin_code.*'  =>'Pincode may not be greater than 191 characters.',
        ];
    }

     /**
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator){
        $data = [
            'status' => true,
            'message' => $validator->errors()->first(),
            'all_message' =>  $validator->errors()
        ];

        if ($this->ajax()) {
            throw new HttpResponseException(response()->json($data,422));
        } else {
            throw new HttpResponseException(redirect()->back()->withInput()->with('errors', $validator->errors()));
        }
    }


}
