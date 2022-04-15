<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use JetBrains\PhpStorm\ArrayShape;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param int|null $id
     * @return array
     */
    #[ArrayShape(['id' => "int|mixed", 'name' => "string", 'avatar' => "string", 'image' => 'string', 'description' => "string"])]
    public function getAuthor(?int $id = null): array
    {
        $fakerAuth = Factory::create();
        if ($id) {
            return [
                'id' => $id,
                'name' => $fakerAuth->userName(),
                'avatar' => $fakerAuth->imageUrl(200, 200),
                'image' => $fakerAuth->imageUrl(450, 400),
                'description' => $fakerAuth->text(200)
            ];
        }

        $dataAuth = [];
        for ($i = 0; $i < 4; $i++) {
            $id = $i + 1;
            $dataAuth[] = [
                'id' => $id,
                'name' => $fakerAuth->userName(),
                'avatar' => $fakerAuth->imageUrl(200, 200),
                'image' => $fakerAuth->imageUrl(450, 400),
                'description' => $fakerAuth->text(200)
            ];
        }

        return $dataAuth;
    }
}
