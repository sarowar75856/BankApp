<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile',
        'nid_number',
        'account_id',
        'balance',
    ];

     /*=====================Eloquent Relations======================*/
     public function transferHistory()
     {
         return $this->hasMany(TransferHistory::class, 'from_account_id', 'id');
     }
}
