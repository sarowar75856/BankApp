Api Requests

1.Show Accounts 
    GET = http://127.0.0.1:8000/api/account

2.Create Account 
    POST = http://127.0.0.1:8000/api/account/create
    fields = name, mobile, nid_number, balance
    
3. Transfer History 
    POST = http://127.0.0.1:8000/api/account/history
    fields = account_id

4. Account Balance
    POST = http://127.0.0.1:8000/api/account/balance
    fields = account_id

5. Account Balance Transfer
    POST = http://127.0.0.1:8000/api/account/balance/transfer
    fields = from_account, to_account, amount

