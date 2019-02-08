<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    /**
     * A basic test example.
     * @test  // 追記
     * @return void
     */
    public function indexTest()
    {
        $response = $this->get('/todo/create');
        $response->assertStatus(200);
    }

    public function createTest()
    {
        $response = $this->get('/todo/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function storeTest()
    {
        $this->post('todo/',  
            ['title' => "foo"]
        );
        $this->assertDatabaseHas('todos', ['title' => "foo"]);
    }
    
    /** @test */
    public function editTest()
    {
        $response = $this->get('todo/1/edit');
        $response->assertStatus(200);
    }
    
    /** @test */
    public function updateTest()
    {
        $this->put('todo/1',
                   ['title' => 'updateData']
        );
        $this->assertDatabaseHas('todos', ['title' => 'updateData']);
    }
    
    /** @test */
    public function destroyTest()
    {
        $this->delete('/todo/1');
        $this->assertDatabaseMissing('todos', ['id' => 1]);
    }
}
