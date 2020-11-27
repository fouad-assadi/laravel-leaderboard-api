Pages to look at:
Setting up the environment:
Run: php artisan migrate
•	A mysql database should be configure 
•	Artisan Test will create database.sqlite 
1.	.env
2.	.env.testing
3.	database.php
To fake the data:
Run: php artisan db:seed
1.	database\seeds\ApiUsersSeeder
2.	Database\seeds\DatabaseSeeder
Model and controlle and table
3.	App\Http\Controllers\ApiUsersController
4.	App\ApiUsers
5.	App\Http\Resources\ApiUserResource
6.	App\Rules\Resources\RuleApiUsers
7.	database\migration\CreateApiUsersTable
API Route
1.	Routes\api
Handler
1.	App\Exceptions\Handler
Test
Run: php artisan test Tests\Feature\ApiUsersTest
1.	tests\Features\ ApiUsersTest
2.	tests\TestCase
3.	ApiUsersTest.php
PostMan json is included
1.	apiUsers.postman_collection.json
