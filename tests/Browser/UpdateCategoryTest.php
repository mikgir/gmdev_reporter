<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateCategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @throws \Throwable
     */
    public function test_category_update_success()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.categories.edit'))
                ->type('title', 'some title')
                ->type('description', 'some description')
                ->press('Обновить')
                ->assertSee('Категория обновлена')
                ->assertPathIs(route('admin.categories.index'));
        });
    }
    /**
     * @throws \Throwable
     */
    public function test_category_update_fail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.categories.edit'))
                ->type('title', '')
                ->type('description', 'some old description')
                ->press('Обновить')
                ->assertSee('Поле наименование должно быть заполнено')
                ->assertPathIs(route('admin.categories.edit'));
        });
    }
}
