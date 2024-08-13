<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuLink;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menu = Menu::create([
            'title'=>"منوی بالا",
            'location'=>"NAVBAR"
        ]);

        //NAVBAR links
        MenuLink::insert([
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"صفحه اصلی",
                'url'=>env("APP_URL"),
                'icon'=>"fal fa-home",
                'order'=>0
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"وبلاگ",
                'url'=>route('blog'),
                'icon'=>"fal fa-pen-alt",
                'order'=>1,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"PAGE",
                'type_id'=>\App\Models\Page::where('slug','terms')->first()->id,
                'title'=>"شرایط استفاده",
                'url'=>route('page.show',\App\Models\Page::where('slug','terms')->first()),
                'icon'=>"fal fa-lock",
                'order'=>2,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"تماس با ما",
                'url'=>route('contact'),
                'icon'=>"fal fa-phone",
                'order'=>3,
            ]
        ]);




        $menu = Menu::create([
            'title'=>"منوی کناری",
            'location'=>"ASIDE_BAR"
        ]);

         //home link
        MenuLink::insert([
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"صفحه اصلی",
                'url'=>env("APP_URL"),
                'icon'=>"fal fa-home",
                'order'=>0,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"وبلاگ",
                'url'=>route('blog'),
                'icon'=>"fal fa-pen-alt",
                'order'=>1,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"PAGE",
                'type_id'=>\App\Models\Page::where('slug','about')->first()->id,
                'title'=>"درباره ما",
                'url'=>route('page.show',\App\Models\Page::where('slug','about')->first()),
                'icon'=>"fal fa-info",
                'order'=>1,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"PAGE",
                'type_id'=>\App\Models\Page::where('slug','terms')->first()->id,
                'title'=>"شرایط استفاده",
                'url'=>route('page.show',\App\Models\Page::where('slug','terms')->first()),
                'icon'=>"fal fa-lock",
                'order'=>2,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"PAGE",
                'type_id'=>\App\Models\Page::where('slug','privacy')->first()->id,
                'title'=>"سیاست حفظ حریم خصوصی",
                'url'=>route('page.show',\App\Models\Page::where('slug','privacy')->first()),
                'icon'=>"fal fa-info",
                'order'=>3,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"تماس با ما",
                'url'=>route('contact'),
                'icon'=>"fal fa-phone",
                'order'=>3,
            ]
        ]);


        $menu = Menu::create([
            'title'=>"منوی فوتر",
            'location'=>"FOOTER"
        ]);

        MenuLink::insert([
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"صفحه اصلی",
                'url'=>env("APP_URL"),
                'icon'=>"fal fa-home",
                'order'=>0
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"وبلاگ",
                'url'=>route('blog'),
                'icon'=>"fal fa-pen-alt",
                'order'=>1,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"PAGE",
                'type_id'=>\App\Models\Page::where('slug','terms')->first()->id,
                'title'=>"شرایط استفاده",
                'url'=>route('page.show',\App\Models\Page::where('slug','terms')->first()),
                'icon'=>"fal fa-lock",
                'order'=>2,
            ],
            [
                'menu_id'=>$menu->id,
                'type'=>"CUSTOM_LINK",
                'type_id'=>null,
                'title'=>"تماس با ما",
                'url'=>route('contact'),
                'icon'=>"fal fa-phone",
                'order'=>3,
            ]
        ]);





    }
}