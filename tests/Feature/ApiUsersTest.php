<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Resources\ApiUserResource;
class ApiUsersTest extends TestCase
{

    public function test_view_all_users()
    {
        $this->withExceptionHandling();

        $this->json('GET', 'api', [], ['Accept' => 'application/json'])
            ->assertStatus(200);
    } 



    // public function test_is_listed_correctly()
    // {
    //     $this->withExceptionHandling();
    //     $headers = [];
    //     $response = $this->json('GET', 'api', [], $headers)
    //         ->assertStatus(200)
    //         ->assertJson([
    //             [ 'id' => '1', 'name' => '_name', 'points',  20 ],
    //             [ 'id' => '2', 'name' => '_name', 'points',  10 ]
    //         ])
    //         ->assertJsonStructure([
    //             '*' => ['id', 'name', 'age', 'points'],
    //         ]);
    // }    

    public function test_update_user()
    {
        $this->withExceptionHandling();

        $formData = [
            'name'    => 'name 1',
            'age'     => '20',
            'address' => 'Address 1'
        ];

        $this->json('PUT', 'api/1', $formData , ['Accept' => 'application/json'])
            ->assertStatus(200);

    }

    public function test_create_user()
    {
        $this->withExceptionHandling();


        $formData = [
            'name'    => 'name 1',
            'age'     => '20',
            'address' => 'Address 1'
        ];

        $this->json('POST', 'api/submit', $formData, ['Accept' => 'application/json'])
            ->assertStatus(201);
    }    

    public function test_givepoints_add_user()
    {
        $this->withExceptionHandling();


        $formData = [
            'id'         => '1',
            'points'     => 1
        ];

        $this->json('POST', 'api/givepoints', $formData, ['Accept' => 'application/json'])
            ->assertStatus(200);
    } 

    public function test_givepoints_remove_user()
    {
        $this->withExceptionHandling();


        $formData = [
            'id'         => '1',
            'points'     => -1
        ];

        $this->json('POST', 'api/givepoints', $formData, ['Accept' => 'application/json'])
            ->assertStatus(200);
    }     


    public function test_remove_user()
    {
        $this->withExceptionHandling();

        $formData = [];

        $this->json('DELETE', 'api/1', $formData, ['Accept' => 'application/json'])
            ->assertStatus(204);
    }  


}
