<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class BalanceTransferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // dd($this->all());
        return [
            'from_account'  => ['required','string', 'max:30','exists:accounts,account_id'],
            'to_account'    => ['required','string', 'max:30','exists:accounts,account_id'],
            'amount'        => ['required'],
        ];
    }
}
