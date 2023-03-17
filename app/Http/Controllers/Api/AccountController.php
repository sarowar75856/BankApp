<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BalanceFindRequest;
use App\Http\Requests\Api\BalanceTransferRequest;
use App\Http\Requests\Api\CreateRequest;
use App\Http\Requests\Api\TransferHistoryRequest;
use App\Http\Traits\ApiResponse;
use App\Library\Services\Api\AccountService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    use ApiResponse;
    private $account_service;

    function __construct(AccountService $account_service)
    {
        $this->account_service = $account_service;
    }

    public function index()
    {
        $result = $this->account_service->get();

        if($result)
            return $this->successResponse('Successfully Retrieved', $result, Response::HTTP_CREATED);
        else
            return $this->errorResponse('Something went wrong! Please try again.', [], Response::HTTP_BAD_REQUEST);
    }

    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'          => ['required','string', 'max:30'],
            'mobile'        => ['required','string', 'max:15'],
            'nid_number'    => ['required','integer'],
            'balance'       => ['required'],
        ]);

        if( $validator->fails() ){
            return response()->json($validator->errors());
        }else{
            $result = $this->account_service->createAccount($request->all());
            if($result)
                return $this->successResponse('Successfully created.', $result, Response::HTTP_CREATED);
            else
                return $this->errorResponse('Something went wrong! Please try again.', [], Response::HTTP_BAD_REQUEST);
        }
    }

    public function balance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_id' => ['required','string', 'max:30','exists:accounts,account_id'],
        ]);

        if( $validator->fails() ){
            return response()->json($validator->errors());
        }else{
            $result = $this->account_service->getBalance($request->all());
            $balace  = 'Balance is = '.$result;
            if($result)
                return $this->successResponse('Successfully Get balance', $balace, Response::HTTP_CREATED);
            else
                return $this->errorResponse('Something went wrong! Please try again.', [], Response::HTTP_BAD_REQUEST);
        }
    }

    public function transferBalance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_account'  => ['required','string', 'max:30','exists:accounts,account_id'],
            'to_account'    => ['required','string', 'max:30','exists:accounts,account_id'],
            'amount'        => ['required'],
        ]);

        if( $validator->fails() ){
            return response()->json($validator->errors());
        }else{
            $result = $this->account_service->transferBalance($request->all());

            if($result)
                return $this->successResponse('Successfully Transfer balance', $result, Response::HTTP_CREATED);
            else
                return $this->errorResponse('Balance is too low', [], Response::HTTP_BAD_REQUEST);
        }
    }

    public function historyShow(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_id' => ['required','string', 'max:30','exists:accounts,account_id'],
        ]);

        if( $validator->fails() ){
            return response()->json($validator->errors());
        }else{
            $result = $this->account_service->transferHistory($request->all());

            if($result)
                return $this->successResponse('Successfully Show Transfer History', $result, Response::HTTP_CREATED);
            else
                return $this->errorResponse('Something went wrong! Please try again.', [], Response::HTTP_BAD_REQUEST);
        }
    }
}
