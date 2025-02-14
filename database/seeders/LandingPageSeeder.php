<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder {
    public function run(): void {
        LandingPage::create([
            'title' => 'Bersama Kominfosandi Membangun Teknologi untuk Negeri',
            'description' => 'Dinas Komunikasi dan Informatika dan Persandian Membangun Teknologi untuk Negeri',
            'image' => 'img/computer-8671934_1280.png',
        ]);
    }
}
