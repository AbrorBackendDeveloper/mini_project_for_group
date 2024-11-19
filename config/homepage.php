<?php

// config/homepage.php
return [
    'navbar' => [
        'image' => 'images/navbar-image.png', // Asosiy rasm
        'links' => [
            'doesnt_work' => [
                'en' => 'Doesn\'t Work',
                'ru' => 'Не работает',
            ],
            'roadmap' => [
                'en' => 'Roadmap',
                'ru' => 'Дорожная карта',
            ],
            'tokenomics' => [
                'en' => 'Tokenomics',
                'ru' => 'Токеномика',
            ],
            'whitepaper' => [
                'en' => 'Whitepaper',
                'ru' => 'Белая книга',
            ],
            // Telegram va X faqat rasm manzillari bo'lib qoladi
            'tg' => 'icons/telegram.svg',
            'x' => 'icons/twitter.svg',
        ],
    ],
    'sections' => [
        'gbs_group' => [
            'header' => [
                'en' => 'GBS - GROUP',
                'ru' => 'GBS - ГРУППА',
            ],
            'content' => [
                'en' => [
                    'Smart IT Solutions',
                    'Business Systemization',
                    'Web Apps',
                    'Mobile Apps',
                    'CRM',
                    'LMS',
                ],
                'ru' => [
                    'Умные IT решения',
                    'Систематизация бизнеса',
                    'Веб приложения',
                    'Мобильные приложения',
                    'CRM',
                    'LMS',
                ],
            ],
        ],
        'q3_2024' => [
            'header' => [
                'en' => 'Q3 2024',
                'ru' => 'Q3 2024',
            ],
            'content' => [
                'en' => [
                    'Major airdrop',
                    'Utilitarian NFTs for miniapp',
                    'Listing on all popular DEXs',
                    'Creation of a closed DAO',
                    'Release of the first mini-game',
                ],
                'ru' => [
                    'Крупный airdrop',
                    'Утилитарные NFT для мини-приложений',
                    'Листинг на популярных DEX',
                    'Создание закрытого DAO',
                    'Релиз первой мини-игры',
                ],
            ],
        ],
        'q4_2024' => [
            'header' => [
                'en' => 'Q4 2024',
                'ru' => 'Q4 2024',
            ],
            'content' => [
                'en' => [
                    'Release of a multiplayer mini-game',
                    'Output of the NFT collection for the marketplace',
                    'NFT Marketplace in TG Mini App',
                    'Development of the in-game economy',
                    'Listing on CEX',
                ],
                'ru' => [
                    'Релиз многопользовательской мини-игры',
                    'Вывод NFT коллекции на рынок',
                    'NFT Marketplace в мини-приложении Telegram',
                    'Развитие экономики в игре',
                    'Листинг на CEX',
                ],
            ],
        ],
    ],
];
