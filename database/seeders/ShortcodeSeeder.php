<?php

namespace Database\Seeders;

use App\Models\Shortcode;
use Illuminate\Database\Seeder;

class ShortcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shortcodes')->delete();

        Shortcode::create([
            'shortcode' => 'UNI',
            'long_name' => 'University',
        ]);

        Shortcode::create([
            'shortcode' => 'DUO',
            'long_name' => 'Duolingo',
        ]);

        Shortcode::create([
            'shortcode' => 'ZTM',
            'long_name' => 'Zero To Mastery',
        ]);

        Shortcode::create([
            'shortcode' => 'UDE',
            'long_name' => 'Udemy',
        ]);

        Shortcode::create([
            'shortcode' => 'COD',
            'long_name' => 'CodeCademy',
        ]);

        Shortcode::create([
            'shortcode' => 'TRE',
            'long_name' => 'Treehouse',
        ]);
    }
}
