Postman: 

Get All: [get] 
URL : http://127.0.0.1:8000/api/ 

Get 1: [get] 
URL:  http://127.0.0.1:8000/api/40 

Create [post] 
URL : http://127.0.0.1:8000/api/submit 

  'postman-token' => '32a09437-291f-c8a3-57e4-a49ea8082c4c', 
  'cache-control' => 'no-cache', 
  'accept' => 'application/json', 
  'content-type' => 'application/x-www-form-urlencoded' 
DATA: 
  'name' => 'Test 22', 
  'age' => '20', 
  'points' => '0', 
  'address' => 'Test Address' 

Update [put] 
URL : http://127.0.0.1:8000/api/32 

HEADER: 
  'postman-token' => '9d9bb00d-2755-fbba-823b-4d60ade4fa35', 
  'cache-control' => 'no-cache', 
  'accept' => 'application/json', 
  'content-type' => 'application/x-www-form-urlencoded' 
DATA:  
  'name' => 'Update Test', 
  'age' => '20', 
  'points' => '91', 
  'address' => 'Test Address' 

DELETE: [delete] 

URL: http://127.0.0.1:8000/api/40 

Give points: [post] 
HEADER: 
  'postman-token' => '655f1cae-fcc3-5965-8358-4e03e6aea82c', 
  'cache-control' => 'no-cache', 
  'accept' => 'application/json', 
  'content-type' => 'application/x-www-form-urlencoded' 
DATA: 
  'points' => '1', 
  'id' => '55' 