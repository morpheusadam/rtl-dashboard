<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*terms*/
        Page::create([
            'user_id'=>1,
            'title'=>"شرایط استفاده",
            'title_en'=>"terms",
            'slug'=>"terms",
            'removable'=>0
        ]);

        /*privacy*/
        Page::create([
            'user_id'=>1,
            'title'=>"سیاست حفظ حریم خصوصی",
            'title_en'=>"privacy",
            'slug'=>"privacy",
            'removable'=>0
        ]);

        /*about*/
        Page::create([
            'user_id'=>1,
            'title'=>"درباره ما",
            'title_en'=>"about",
            'slug'=>"about",
            'removable'=>0
        ]);
        

    }
}