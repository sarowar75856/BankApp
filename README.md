Run Project
1. git clone https://github.com/sarowar75856/BankApp.git
2. cd BankApp
3. copy env.example and rename it .env and configure you databse
4. composer install & update
5. npm install & update
6. npm run dev
7. php artisan migrate
8. run -> php artisan db:seed --class=UsersTableSeeder

email:sarowar@gmail.com
password:12345678

//======= Api Requests =========//

1. Login 
    POST = http://127.0.0.1:8000/api/login
    fields = email, password

use header 
    key = Authorization
    value = Bearer apitoken

2. Show Accounts 
    GET = http://127.0.0.1:8000/api/account

3. Create Account 
    POST = http://127.0.0.1:8000/api/account/create
    fields = name, mobile, nid_number, balance
    
4. Transfer History 
    POST = http://127.0.0.1:8000/api/account/history
    fields = account_id

5. Account Balance
    POST = http://127.0.0.1:8000/api/account/balance
    fields = account_id

6. Account Balance Transfer
    POST = http://127.0.0.1:8000/api/account/balance/transfer
    fields = from_account, to_account, amount

