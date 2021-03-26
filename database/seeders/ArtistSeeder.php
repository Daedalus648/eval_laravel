<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                'name' => 'Bob Kane',
                'birthday' => '1915/10/24',
                'nationality' => 'American',
                'description' => "Robert Kane (born Robert Kahn; October 24, 1915 – November 3, 1998) was an American comic book writer, animator and artist who co-created, with Bill Finger, the DC Comics character Batman.",
                'image' => 'Bob_Kane.jpg',
            ],
            [
                'name' => 'Gerry Conway',
                'birthday' => '1952/9/10',
                'nationality' => 'American',
                'description' => "Gerard Francis Conway (born September 10, 1952) is an American comic book writer, comic book editor, screenwriter, television writer, and television producer.",
                'image' => 'Gerry_Conway.jpg',
            ],
            [
                'name' => 'Bill Finger',
                'birthday' => '1914/2/8',
                'nationality' => 'American',
                'description' => "Milton Finger (February 8, 1914 – January 18, 1974), known professionally and personally as Bill Finger, was an American comic strip and comic book writer best known as the creator, with Bob Kane, of the DC Comics character Batman.",
                'image' => 'Bill_Finger.jpg',
            ],
        ]);
    }
}
