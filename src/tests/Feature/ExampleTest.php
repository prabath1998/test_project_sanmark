<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use WithoutMiddleware;
    // public function test_the_application_returns_a_successful_response()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_user_can_store_new_record()
    {
       
       $response = $this->post('/store',[
          'name' => 'Asanka',
          'radius' => '666',
          'begin' =>'09:00:00',
          'end' => '08:01:00',
          'laps' => 2,
       ]);
 
       $response->assertRedirect('/');      
   

    }}