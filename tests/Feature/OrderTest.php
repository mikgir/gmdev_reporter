<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_order_index_successful_response(): void
    {
        $response = $this->get('/order');
        $response->assertStatus(404);
    }

    /**
     * @return void
     */
    public function test_order_create_successful_response(): void
    {
        $response = $this->get(route('admin.order.create'));
        $response->assertStatus(200);
    }
    public function test_order_store_successful(): void
    {
        $data= [
            'id'=>'1',
            'name'=>'some name',
            'phone'=>'+7(111)111-11-11',
            'email'=>'test@test.ru',
            'order'=>'some text'
        ];
        $response= $this->post(route('admin.order.store'), $data);

        $response->assertJson($data)
            ->assertCreated()
            ->assertStatus(201);
    }
}
