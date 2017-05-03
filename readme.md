# imobiliare

Deployment:

-change .env.example in .env 
-from the folder root, in command line:
-run php composer update
-run php artisan generate:key
-run php artisan cache:clear

Database modifications: Configure mysql credentials , and database name in /.env
-run php artisan config:cache 
-run php artisan migrate
-check if the users table was created in the database, if not manually create it with the following fields:
-int id(11)
-varchar(255) name
-varchar(255) email
-varchar(255) password
-date updated_at
-date created_at
-varchar(255) remember_token  

Email:Configure the email username, password and host in /.env
run php artisan config:cache 

start the project with php artisan serve