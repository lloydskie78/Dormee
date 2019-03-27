# Dormee <br />

-Installation: <br />

1. Database: <br />
https://github.com/celinezosa/Database-for-Dormee/blob/master/dormee_test%20(1).sql <br/>


-Troubleshooting:  <br />

1. Error: "Whoops, looks like something went wrong.":  <br />
1.a.  -Missing .env file: place .env in root directory (Copy of .env file: https://github.com/celinezosa/.env-for-Dormee/blob/master/.env)  <br />
1.b.  run `composer install --no-scripts`  <br />
1.c.  run `php artisan key:generate`  (optional) <br />
1.d.  clear browser cache while refreshing: CTRL+F5 or CMD+F5  <br />

2. Error: Permission etc. <br />
https://stackoverflow.com/questions/36460874/laravel-5-errorexception-failed-to-open-stream-permission-denied?rq=1<br />
