<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_account_id',
        'to_account_id',
        'amount',
    ];

     /*=====================Eloquent Relations======================*/
     public function toAccount()
     {
         return $this->hasOne(Account::class, 'id', 'to_account_id');
     }

     public function fromAccount()
     {
         return $this->hasOne(Account::class, 'id', 'from_account_id');
     }

}
