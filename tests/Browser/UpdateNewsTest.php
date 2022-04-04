<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @throws \Throwable
     */
    public function test_news_update_success()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.news.edit'))
                ->select('category_id', '4')
                ->type('title', 'some title')
                ->type('author', 'some name')
                ->type('image', 'some URL')
                ->type('description', 'some text')
                ->select('status', 'ACTIVE')
                ->assertPathIs(route('admin.news.index'));
        });
    }

    /**
     * @throws \Throwable
     */
    public function test_news_update_fail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.news.edit'))
                ->select('category_id', '')
                ->type('title', 'some title')
                ->type('author', 'some name')
                ->type('image', 'some URL')
                ->type('description', 'some text')
                ->select('status', '')
                ->assertSee('Необходимо выбрать категорию')
                ->assertSee('Необходимо выбрать статус')
                ->assertPathIs(route('admin.news.edit'));
        });
    }
}
