<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        # عمومی
        \App\Models\Setting::create(['key'=>'website_name','value'=>"نام وبسایت اینجا"]);
        \App\Models\Setting::create(['key'=>'website_bio','value'=>"این متن مثالی است برای متنی که می‌تواند در همان فضا جایگزین شود. این متن توسط مولد متن عربی تولید شده است، جایی که می‌توانید چنین متنی یا بسیاری از متون دیگر را تولید کنید و همچنین تعداد حروفی که برنامه تولید می‌کند را افزایش دهید."]);
        \App\Models\Setting::create(['key'=>'website_logo','value'=>""]);
        \App\Models\Setting::create(['key'=>'website_wide_logo','value'=>""]);
        \App\Models\Setting::create(['key'=>'website_icon','value'=>""]);
        \App\Models\Setting::create(['key'=>'website_icon_base64','value'=>""]);
        \App\Models\Setting::create(['key'=>'website_cover','value'=>""]);
        \App\Models\Setting::create(['key'=>'address','value'=>""]);

        # ظاهر
        \App\Models\Setting::create(['key'=>'main_color','value'=>"#0194fe"]);
        \App\Models\Setting::create(['key'=>'hover_color','value'=>"#2196f3"]);
        \App\Models\Setting::create(['key'=>'dashboard_dark_mode','value'=>0]);

        # لینک‌ها
        \App\Models\Setting::create(['key'=>'contact_email','value'=>""]);
        \App\Models\Setting::create(['key'=>'phone','value'=>""]);
        \App\Models\Setting::create(['key'=>'phone2','value'=>""]);
        \App\Models\Setting::create(['key'=>'whatsapp_phone','value'=>""]);
        \App\Models\Setting::create(['key'=>'facebook_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'telegram_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'whatsapp_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'twitter_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'instagram_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'youtube_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'tiktok_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'upwork_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'nafezly_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'linkedin_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'github_link','value'=>""]);
        \App\Models\Setting::create(['key'=>'another_link1','value'=>""]);
        \App\Models\Setting::create(['key'=>'another_link2','value'=>""]);
        \App\Models\Setting::create(['key'=>'another_link3','value'=>""]);

        # صفحات
        \App\Models\Setting::create(['key'=>'contact_page','value'=>""]);
        

        # کد
        \App\Models\Setting::create(['key'=>'header_code','value'=>""]);
        \App\Models\Setting::create(['key'=>'footer_code','value'=>""]);
        \App\Models\Setting::create(['key'=>'robots_txt','value'=>"User-agent: *\nSitemap: ".env('APP_URL')."/sitemap.xml\nAllow: /"]);




        /*$settings = \App\Models\Setting::count();
        if($settings==0)
            \App\Models\Setting::create([
                'website_name'=>"نام وبسایت اینجا",
                'website_bio'=>"این متن مثالی است برای متنی که می‌تواند در همان فضا جایگزین شود. این متن توسط مولد متن عربی تولید شده است، جایی که می‌توانید چنین متنی یا بسیاری از متون دیگر را تولید کنید و همچنین تعداد حروفی که برنامه تولید می‌کند را افزایش دهید.",
                'main_color'=>"#2196f3",
                'hover_color'=>"#2196f3",
                'contact_email'=>"admin@admin.com",
                'robots_txt'=>"User-agent: *\nSitemap: ".env('APP_URL')."/sitemap.xml\nAllow: /",
            ]);*/
    }
}
