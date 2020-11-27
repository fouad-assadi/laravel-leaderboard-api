<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\RuleApiUsers;
use App\ApiUsers;
use App\Http\Resources\ApiUserResource;

class ApiUsersController extends Controller
{

    public function index()
    {
        $ApiUsers = ApiUsers::orderByRaw('points DESC')
                    ->orderBy('created_at', 'DESC');
                    // ->limit(5); pagination?
        $ApiUsers = $ApiUsers->get(['id','name','points']);
        return response()->json( $ApiUsers );

    }
 
    public function show(ApiUsers $ApiUsers)
    {	
    	return new ApiUserResource($ApiUsers);
    }    



    /*
    |	save a new ApiUser and
    |	Let's validate the fields
    |
    |	*if you need to fake the data run =>  php artisan db:seed
    */

    public function store(Request $request)
    {
    		//check Cross-Origin for posts

    	$request->validate([
    		'name'     => ['required','string','min:3'],
    		'age'      => ['integer','between:1,100'],
    		// 'points'   => ['numeric'],
    		'address'  => ['string']
    	]);

    /*
    |	We can do this but with with resource is better
    |	$req = $request->all();
    |	return ApiUsers::create($req);
    |	
    */

        $apiUsers = new ApiUsers;
        $apiUsers->name 	 	= $request->name;
        $apiUsers->age 			= $request->age;
        $apiUsers->address 		= $request->address;
        $apiUsers->save();

        return new ApiUserResource($apiUsers);    	

    }

    /*
    |
    |	We could also use the same validation like above example
    |	but just to be more creative and work clean let's move the rules to their own page
    |
    |
    */

    public function update(Request $request,  ApiUsers $ApiUsers)
    {


	    $this->validate($request, [
	    	'name' => [
	    		'required' => new RuleApiUsers($ApiUsers)
	    	]
	    ]);

        $ApiUsers->update($request->only(['name','age', 'address']));
        return new ApiUserResource($ApiUsers);
    }

    /*
    |
    |	Using Rule validation objects
    |
    |*/ 	

    public function destroy(Request $request, ApiUsers $ApiUsers)
    {

        $ApiUsers->delete();
        return response()->json(null, 204);  
    }


    /*
    |
    |	To calculate points :
    |	1. Method should be POST
    |	2. Only -1 and 1 is accepted  		   } else { error 400
    |	3. id ApiUsers should be int and exist } else { error 400
    |	4. Points won't go less than zero
    |*/ 

    public function givepoints(Request $request)
    {



    	$acceptedPoints = array(1,-1);

        $this->validate($request, [
            'id' 	 => 'required|integer',
            'points' => 'required|numeric'
        ]);


        $ApiUsers = ApiUsers::where('id',$request->id)
        		->get()
        		->first();

        if( !is_null($ApiUsers) && in_array($request->points, $acceptedPoints) ){

        	// Any require calculation here
        	$ApiUsers->points += ($ApiUsers->points + $request->points>0?$request->points:0);
        	$ApiUsers->save();      		

        	return $this->index();

        } else {

        	return response()->json(['error' =>'Bad Request!'],400);

        }
    }



    public function help(){

    }

}
