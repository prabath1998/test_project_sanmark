<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RunningRecordTest extends TestCase
{
   use WithoutMiddleware;
   // use RefreshDatabase;
   public function test_user_can_store_new_record()
   {
      $response = $this->post('/store', [
         'name' => 'jayesh',
         'radius' => '50',
         'begin' => '09:00:00',
         'end' => '09:01:00',
         'laps' => 2
      ]);

      $response->assertRedirect('/');
      $response->assertStatus(302);
      $response->assertSessionHasNoErrors();
   }
}
