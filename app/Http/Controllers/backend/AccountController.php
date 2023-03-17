<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\BalanceFindRequest;
use App\Http\Requests\Account\BalanceTransferRequest;
use App\Http\Requests\Account\CreateRequest;
use App\Http\Requests\Account\TransferHistoryRequest;
use App\Library\Services\Admin\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    private $account_service;

    function __construct(AccountService $account_service)
    {
        $this->account_service = $account_service;
    }

    public function index()
    {
        $accounts = $this->account_service->get();

        return view('backend.pages.Account.index', [
            'accounts' => $accounts
        ]);
    }

    public function showCreateForm()
    {
        return view('backend.pages.Account.create');
    }

    public function create(CreateRequest $request)
    {
        // dd($request->validated());
        $result = $this->account_service->createAccount($request->validated());
        if($result)
            return redirect()->route('account.index')->with('success', 'successfully created');
        else
            return back();
    }

    public function balanceForm()
    {
        return view('backend.pages.Account.searchBalance');
    }

    public function balance(BalanceFindRequest $request)
    {
        // dd($request->validated());
        $result = $this->account_service->getBalance($request->validated());
        if($result)
            return view('backend.pages.Account.showBalance', ['account' => $result]);
        else
            return back();
    }


    public function transferBalanceForm()
    {
        return view('backend.pages.Account.transferBalance');
    }

    public function transferBalance(BalanceTransferRequest $request)
    {
        //  dd($request->validated());
        $this->account_service->transferBalance($request->validated());
        return back();
    }

    public function history()
    {
        return view('backend.pages.Account.searchTransferHistory');
    }

    public function historyShow(TransferHistoryRequest $request)
    {
        //  dd($request->validated());
        $result = $this->account_service->transferHistory($request->validated());

        if($result)
            return view('backend.pages.Account.showTransferhistory', ['histories' => $result]);
        else
            return back();
    }
}
