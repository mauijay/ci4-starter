<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PotoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'p_title'=>"Pandora Cafe Honolulu",
                'p_info'=>"Karaoke Sports Bar & Grill",
                'p_image'=>'pch-logo-dark.png',
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Client 1",
                'p_info'=>"Jika kamu dapat melakukan yang terbaik dan bahagia, kamu lebih maju dalam hidup daripada kebanyakan orang.",
                'p_image'=>'noimage.webp',
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Client 2",
                'p_info'=>"Pendidikan adalah senjata paling ampuh yang bisa kita gunakan untuk mengubah dunia.",
                'p_image'=>'noimage.webp',
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Client 3",
                'p_info'=> "Kamu harus memiliki beberapa visi untuk hidupmu. Bahkan jika kamu tidak tahu rencananya, kamu harus memiliki arah yang kamu pilih." ,
                'p_image'=>'noimage.webp',
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"You Tube Video 1",
                'p_info'=>"Bersyukurlah atas apa yang kamu miliki; kamu akan mendapatkan lebih banyak. Jika kamu berkonsentrasi pada apa yang tidak kamu miliki, kamu tidak akan pernah merasa cukup." ,
                'p_image'=>'noimage.webp',
                'p_image_alt'=>'write a really good image alt desc here',
               
            ],
            [
                'p_title'=>"Instagram mega post",
                'p_info'=> "Tidak ada yang namanya kegagalan. Kegagalan hanyalah kehidupan yang mencoba menggerakkan kita ke arah lain.",
                'p_image'=>'noimage.webp',
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Local Radio Ad",
                'p_info'=>"Kamu mendapatkan dalam hidup apa yang kamu berani minta.",
                'p_image'=>'noimage.webp',
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Free Web Sites",
                'p_info'=>"Perjuangkan apa yang membuatmu optimistis tentang dunia. Temukan, pertahankan, gali, kejar.",
                'p_image'=>"noimage.webp",
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Drone Videos ",
                'p_info'=>"Saya telah belajar bahwa penting untuk tidak membatasi diri. Kamu dapat melakukan apa pun yang benar-benar kamu sukai, apa pun itu." ,
                'p_image'=>"noimage.webp",
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Frank Oliva Island Art",
                'p_info'=> "Kecerdasan plus karakter—itulah tujuan pendidikan sejati.",
                'p_image'=>"noimage.webp",
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Hi One Sushi ",
                'p_info'=>"Jika saya harus mengatakan nasihat kepada kamu, itu adalah, 'katakan ya'. Katakan ya, dan buat takdirmu sendiri.",
                'p_image'=>"noimage.webp",
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
            [
                'p_title'=>"Maui Jay",
                'p_info'=>"Sekarang pergilah, dan buatlah kesalahan-kesalahan yang menarik, buatlah kesalahan-kesalahan yang luar biasa, buatlah kesalahan-kesalahan yang mulia dan fantastis. Langgar aturan. Biarkan dunia lebih menarik karena keberadaanmu di sini.",
                'p_image'=>"noimage.webp",
                'p_image_alt'=>'write a really good image alt desc here',
                
            ],
        ];
        $this->db->table('portofolios')->insertBatch($data);
    }
}
