<?php

namespace App\Helpers;

class PopularLanguages
{
    public static function getLanguages(): array
    {
        return [
            'ar' => 'Arabic',
            'en' => 'English',
            'fr' => 'French',
            'es' => 'Spanish',
            'de' => 'German',
            'zh' => 'Chinese',
            'ru' => 'Russian',
            'pt' => 'Portuguese',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'hi' => 'Hindi',
        ];
    }

}
