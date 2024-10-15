<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; //migrate
    /**
     * A basic feature test example.
     */
    public function testUser()
    {
        //Proceso        
        User::factory()->create([
            'email' => 'i@admin.com'
        ]);
       

        $this->assertDatabaseHas('users', [
            'email' => 'i@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'no@existe.com'
        ]);
    }
}
