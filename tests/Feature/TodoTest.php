<?php

namespace Tests\Feature;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/todos');

        $response->assertStatus(400);
    }

    /** @test */
    public function store()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/api/todo', $this->data());

        $this->assertCount(1, Todo::all());
    }

    /** @test */
    public function update()
    {
        $this->withoutExceptionHandling();

        $todo = Todo::factory()->create();

        $response = $this->patch('/api/todo/' . $todo->id, $this->data());

        $todo = $todo->fresh();

        $this->assertEquals('test', $todo->title);
        $this->assertEquals('test', $todo->note);
        $this->assertEquals(0, $todo->complete_todo);
    }

    /** @test */
    public function destroy()
    {
        $this->withoutExceptionHandling();

        $todo = Todo::factory()->create();

        $response = $this->delete('/api/todo/' . $todo->id);

        $this->assertCount(0, Todo::all());
    }

    private function data()
    {
        return [
            'title' => 'test',
            'note' => 'test',
            'complete_todo' => false,
        ];
    }
}
