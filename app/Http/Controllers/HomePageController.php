<?php
// app/Http/Controllers/HomePageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $lang = $request->input('lang', 'en'); // Foydalanuvchi tanlagan til

        // Navbar ma'lumotlarini olish
        $navbar = config('homepage.navbar');

        if (!isset($navbar['links'])) { // Links mavjudligini tekshirish
            return response()->json(['error' => 'Navbar links are missing'], 500); // xatolik mavjud bo'lsa xabar qaytarish
        }

        $navbarData = [
            'image' => $navbar['image'],
            'links' => [
                'doesnt_work' => $navbar['links']['doesnt_work'][$lang] ?? 'N/A', // `??` bilan default qiymat qo'shish
                'roadmap' => $navbar['links']['roadmap'][$lang] ?? 'N/A',
                'tokenomics' => $navbar['links']['tokenomics'][$lang] ?? 'N/A',
                'whitepaper' => $navbar['links']['whitepaper'][$lang] ?? 'N/A',
                'tg' => asset('images/telegram-icon.svg'), // Telegram ikonkasi SVG
                'x' => asset('images/x-icon.svg'), // X ikonkasi SVG
            ]
        ];

        // Bo'limlar ma'lumotlarini olish
        $sections = config('homepage.sections');
        
        $sectionsData = [];
        foreach ($sections as $key => $section) {
            $sectionsData[] = [
                'header' => $section['header'][$lang],
                'content' => $section['content'][$lang],
            ];
        }

        // Barcha ma'lumotlarni birlashtirib qaytarish
        return response()->json([
            'navbar' => $navbarData,
            'sections' => $sectionsData
        ]);
    }

    public function getInfo(Request $request)
    {
        // Foydalanuvchi tanlagan til
        $lang = $request->input('lang', 'en');
        $section = $request->input('section', 'about_us'); // Standart bo'lim

        // Konfiguratsiyadan ma'lumotlarni olish
        $data = config("project-info.{$section}");

        // Tanlangan tilga mos ma'lumotlarni qaytarish
        return response()->json([
            'header' => $data['header'][$lang] ?? $data['header']['en'], // Standart inglizcha
            'content' => $data['content'][$lang] ?? $data['content']['en'], // Standart inglizcha
        ]);
    }
}
