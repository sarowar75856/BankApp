<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class BalanceFindRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'account_id' => ['required','string', 'max:30','exists:accounts,account_id'],
        ];
    }
}
