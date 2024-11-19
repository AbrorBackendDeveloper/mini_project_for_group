<?php

namespace App\Services;

use Illuminate\Support\Facades\App;

class HomePageService
{
    public static function getHomePageData(string $locale = 'ENG'): array
    {
        $translations = config('homepage.translations');
        $locale = $translations[$locale] ?? $translations['ENG']; // Tilni olish
    
        return [
            'navbar' => [
                'image' => asset(config('homepage.navbar.image')), // Rasmga URL qo'shish
                'labels' => $locale['labels'], // Olingan tilga mos ravishda labels
                'social_links' => [
                    'telegram' => [
                        'icon' => asset(config('homepage.social_links.telegram.icon')), // Telegram ikonkasi
                        'link' => config('homepage.social_links.telegram.link'),
                    ],
                    'twitter' => [
                        'icon' => asset(config('homepage.social_links.twitter.icon')),
                        'link' => config('homepage.social_links.twitter.link'),
                    ],
                ],
            ],
            'sections' => $locale['sections'], // Qismlar
        ];
    }
}
