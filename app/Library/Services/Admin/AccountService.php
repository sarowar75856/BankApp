<?php


namespace App\Library\Services\Admin;

use App\Models\Account;
use App\Models\TransferHistory;
use Exception;
use Illuminate\Support\Facades\DB;

class AccountService
{
    public static function get()
    {
        $account = Account::all();
        return $account ? $account : [];
    }

    public static function createAccount( array $data )
    {
        try {
            $get_data = Account::create($data);
            return $get_data;
        }
        catch (Exception $e){
            return false;
        }
    }

    public static function getBalance(array $data)
    {
        $account = Account::where('account_id', $data['account_id'])->first();
        // dd($account->balance);
        return $account ? $account : 0;
    }

    public static function transferBalance(array $data)
    {
        DB::beginTransaction();
        try {
            $from_account = Account::where('account_id', $data['from_account'])->first();
            if($from_account->balance > $data['amount']){
                $from_account->balance = $from_account->balance - $data['amount'];
            }
            $from_account->save();

            $to_account = Account::where('account_id', $data['to_account'])->first();
            $to_account->balance = $to_account->balance + $data['amount'];
            $to_account->save();

            $data['from_account_id'] =  $from_account->id;
            $data['to_account_id'] =  $to_account->id;

            TransferHistory::create($data);
            DB::commit();
            return true;
         }
         catch (Exception $e){
             return false;
         }
    }

    public static function transferHistory(array $data)
    {
        $account = Account::where('account_id', $data['account_id'])->first();
        // dd($account->transferHistory);
        return $account ? $account->transferHistory : [];
    }


}
