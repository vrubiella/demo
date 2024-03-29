# Laravel demos

## api-demo 

CRUD REST API  demo with Laravel 5.8

This examples shows:
- Model persisting with Eloquent ORM
- DataSeeding for testing purposes
- Feature Testing with sqlite
- Feature Testing with json assertions
- Easy routes definition with ResourceController
- Laravel Validators


### Modified files:
[CustomerController.php](api-demo/app/Http/Controllers/CustomerController.php)

[CustomerControllerTest.php](api-demo/tests/Feature/CustomerControllerTest.php)

[create_customers_table.php](api-demo/database/migrations/2019_08_01_220752_create_customers_table.php)

[DatabaseSeeder.php](api-demo/database/seeds/DatabaseSeeder.php)

[Customer.php](api-demo/app/Customer.php)

[routes/api.php](api-demo/routes/api.php)


### API Routes:
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

### Apiary documentation:
https://app.apiary.io/laravelapidemo
