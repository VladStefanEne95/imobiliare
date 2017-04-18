# imobiliare

Deployment:
change .env.example in .env 
from the folder root, in command line:
run php composer update
run php artisan generate:key
run php artisan cache:clear
Database modifications: Configure mysql credentials , and database name in /.env
run php artisan config:cache 
run php artisan migrate

Email:Configure the email username, password and host in /.env
run php artisan config:cache 

start the project with php artisan serve