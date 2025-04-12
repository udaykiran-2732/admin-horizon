<?php

namespace App\Helpers;

class Locale
{
    public static function getDefault()
    {
        return 'en';
    }

    public static function getPrimaryLanguage($locale)
    {
        return explode('_', $locale)[0];
    }

    public static function getDisplayLanguage($locale, $inLocale = null)
    {
        $languages = [
            'en' => 'English',
            'fr' => 'French',
            'de' => 'German',
            'es' => 'Spanish',
            'it' => 'Italian',
            'pt' => 'Portuguese',
            'ru' => 'Russian',
            'zh' => 'Chinese',
            'ja' => 'Japanese',
            'ar' => 'Arabic',
        ];

        $lang = self::getPrimaryLanguage($locale);
        return $languages[$lang] ?? $lang;
    }
} 