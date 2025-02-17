<?php

namespace Database\Seeders;

use App\Models\agendalandingpage;
use Illuminate\Database\Seeder;

class agendaseeder extends Seeder {
    public function run(): void {
        agendalandingpage::create([
            'title' => 'Bersama Kominfosandi Membangun Teknologi untuk Negeri',
            'description' => 'Dinas Komunikasi dan Informatika dan Persandian Membangun Teknologi untuk Negeri',
            'image' => 'img/computer-8671934_1280.png',
            'imgcard1' => 'img/computer-8671934_1280.png',
            'imgcard2' => 'img/computer-8671934_1280.png',
            'titlecard1' => 'Bersama Kominfosandi Membangun Teknologi untuk Negeri',
            'titlecard2' => 'Bersama Kominfosandi Membangun Teknologi untuk Negeri',
            'descriptioncard1' => 'Dinas Komunikasi dan Informatika dan Persandian Membangun Teknologi untuk Negeri',
            'descriptioncard2' => 'Dinas Komunikasi dan Informatika dan Persandian Membangun Teknologi untuk Negeri',
        ]);
    }
}

