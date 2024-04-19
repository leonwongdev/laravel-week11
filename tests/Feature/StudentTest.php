<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_student_index_page_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/profile');
        $response = $this->get('/students');

        $response->assertStatus(200);
    }

    public function test_student_create_page_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/profile');
        $response = $this->get('/students/create');

        $response->assertStatus(200);
    }

    public function test_student_record_can_be_created(): void
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/profile');
        $response = $this->post('/students/store', [
            'fname' => 'Test',
            'lname' => 'Last',
            'email' => 'test1@test.com',
            'course' => 'PHP'
        ]);

        if ($response) {
            $response = $this->get('/students');
            $response->assertStatus(200);
        }
    }
}
