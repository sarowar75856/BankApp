<?php

namespace App\Http\Requests\Account;

use App\Models\Account;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $account_id = Account::orderBy('id', 'desc')->pluck('id')->first();
        if($account_id >= 1){
            $this->merge([
                'account_id' => date('Y').(100000+$account_id),
            ]);
            }else{
            $this->merge([
                'account_id' =>  date('Y').'100000',
            ]);
            }
    }

    public function rules()
    {
         return [
            'name'          => ['required','string', 'max:30'],
            'mobile'        => ['required','string', 'max:15'],
            'nid_number'    => ['required','integer'],
            'account_id'    => ['required','string'],
            'balance'       => ['required'],
        ];

    }
}
