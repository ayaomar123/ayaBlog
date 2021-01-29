<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::create([
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'instagram' => 'https://www.instagram.com/',
            'snapchat' => 'https://www.snapchat.com/',
            'linkedin' => 'https://www.linkedin.com/',
        ]);
    }
}
