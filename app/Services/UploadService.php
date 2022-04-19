<?php

namespace App\Services;

use Exception;
use Illuminate\Http\UploadedFile;

class UploadService
{
    /**
     * @param UploadedFile $file
     * @return string
     * @throws Exception
     */
    public function uploadFile(UploadedFile $file): string
    {
        $completedFile = $file->storeAs('news', $file->hashName(), 'public');
        if (!$completedFile) {
            throw new Exception('Файл не был загружен');
        }
        return $completedFile;
    }

}
