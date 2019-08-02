#Laravel demos

#api-demo

Simple CRUD RESTFul API for manage Customers.

This examples shows:
- Simply Models and Eloquent ORM
- DataSeeding for testing purposes
- FeatureTesting with sqlite
- FeatureTesting using special json assertions
- Easy routes definition with ResourceController
- Laravel Validators


## Modified files:
[CustomersController.php](api-demo/app/Http/Controllers/CustomersController.php)

[CustomersControllerTest.php](api-demo/tests/Feature/CustomersControllerTest.php)

[create_customers_table.php](api-demo/database/migrations/2019_08_01_220752_create_customers_table.php)

[DatabaseSeeder.php](api-demo/database/seeds/DatabaseSeeder.php)

[Customer.php](api-demo/app/Customer.php)

[routes/api.php](api-demo/routes/api.php)


#API Routes:
```
+--------+-----------+--------------------------+-------------------+-------------------------------------------------+--------------+
| Domain | Method    | URI                      | Name              | Action                                          | Middleware   |
+--------+-----------+--------------------------+-------------------+-------------------------------------------------+--------------+
|        | GET|HEAD  | /                        |                   | Closure                                         | web          |
|        | GET|HEAD  | api/customers            | customers.index   | App\Http\Controllers\CustomerController@index   | api          |
|        | POST      | api/customers            | customers.store   | App\Http\Controllers\CustomerController@store   | api          |
|        | GET|HEAD  | api/customers/create     | customers.create  | App\Http\Controllers\CustomerController@create  | api          |
|        | PUT|PATCH | api/customers/{customer} | customers.update  | App\Http\Controllers\CustomerController@update  | api          |
|        | DELETE    | api/customers/{customer} | customers.destroy | App\Http\Controllers\CustomerController@destroy | api          |
|        | GET|HEAD  | api/user                 |                   | Closure                                         | api,auth:api |
+--------+-----------+--------------------------+-------------------+-------------------------------------------------+--------------+
```

#Apiary documentation:
https://app.apiary.io/laravelapidemo