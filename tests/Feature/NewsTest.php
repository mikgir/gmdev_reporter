<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news_index_successful_response(): void
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function test_news_create_successful_response(): void
    {
        $response = $this->get(route('admin.news.create'));
        $response->assertStatus(200);
    }
    public function test_news_store_successful(): void
    {
        $data= [
            'id'=>'123',
            'title'=>'some title',
            'image'=>'some url',
            'description'=>'some text'
        ];
        $response= $this->post(route('admin.news.store'), $data);

        $response->assertJson($data)
                 ->assertCreated()
                 ->assertStatus(201);
    }
}
