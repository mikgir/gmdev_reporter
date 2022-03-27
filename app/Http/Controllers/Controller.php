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
    #[ArrayShape(['id' => "int|mixed", 'title' => "string", 'author' => "string", 'image' => "string", 'status' => "string", 'description' => "string"])]
    public function getNews(?int $id = null): array
    {
        $faker = Factory::create();
        $statusList = ["DRAFT", "ACTIVE", "BLOCKED"];
        if ($id) {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(376, 299),
                'status' => $statusList[mt_rand(0, 2)],
                'description' => $faker->text(100)
            ];
        }

        $data = [];
        for ($i = 0; $i < 9; $i++) {
            $id = $i + 1;
            $data[] = [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(376, 299),
                'status' => $statusList[mt_rand(0, 2)],
                'description' => $faker->text(100)
            ];
        }

        return $data;
    }

    /**
     * @param int|null $id
     * @return array
     */
    #[ArrayShape(['id' => "int|mixed", 'title' => "string", 'author' => "string", 'image' => "string", 'status' => "string", 'description' => "string"])]
    public function getSlideNews(?int $id = null): array
    {
        $fakerSl = Factory::create();
        $statusList = ["DRAFT", "ACTIVE", "BLOCKED"];
        if ($id) {
            return [
                'id' => $id,
                'title' => $fakerSl->jobTitle(),
                'author' => $fakerSl->userName(),
                'image' => $fakerSl->imageUrl(620, 519),
                'status' => $statusList[mt_rand(0, 2)],
                'description' => $fakerSl->text(100)
            ];
        }

        $dataSl = [];
        for ($i = 0; $i < 3; $i++) {
            $id = $i + 1;
            $dataSl[] = [
                'id' => $id,
                'title' => $fakerSl->jobTitle(),
                'author' => $fakerSl->userName(),
                'image' => $fakerSl->imageUrl(620, 519),
                'status' => $statusList[mt_rand(0, 2)],
                'description' => $fakerSl->text(100)
            ];
        }

        return $dataSl;
    }

    /**
     * @param int|null $id
     * @return array
     */
    #[ArrayShape(['id' => "int|mixed", 'title' => "string", 'author' => "string", 'image' => "string", 'status' => "string", 'description' => "string"])]
    public function getThumbNews(?int $id = null): array
    {
        $fakerTh = Factory::create();
        $statusList = ["DRAFT", "ACTIVE", "BLOCKED"];
        if ($id) {
            return [
                'id' => $id,
                'title' => $fakerTh->jobTitle(),
                'author' => $fakerTh->userName(),
                'image' => $fakerTh->imageUrl(270, 257),
                'status' => $statusList[mt_rand(0, 2)],
                'description' => $fakerTh->text(100)
            ];
        }

        $dataTh = [];
        for ($i = 0; $i < 4; $i++) {
            $id = $i + 1;
            $dataTh[] = [
                'id' => $id,
                'title' => $fakerTh->jobTitle(),
                'author' => $fakerTh->userName(),
                'image' => $fakerTh->imageUrl(270, 257),
                'status' => $statusList[mt_rand(0, 2)],
                'description' => $fakerTh->text(100)
            ];
        }

        return $dataTh;
    }

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
