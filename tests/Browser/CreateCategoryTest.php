<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateCategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @throws \Throwable
     */
    public function test_category_create_success()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.categories.create'))
                ->type('title', 'some title')
                ->type('description', 'some description')
                ->press('Создать')
                ->assertSee('Категория добавлена')
                ->assertPathIs(route('admin.categories.index'));
        });
    }

    /**
     * @throws \Throwable
     */
    public function test_category_create_fail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.categories.store'))
                ->type('title', '')
                ->type('description', 'some description')
                ->press('Создать')
                ->assertSee('Поле наименование должно быть заполнено')
                ->assertPathIs(route('admin.categories.create'));
        });
    }
}
