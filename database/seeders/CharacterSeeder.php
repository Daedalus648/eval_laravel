<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Batman',
                'creation_date' => '1939/3/30/',
                'appearance' => 'Batman #1',
                'artist_id' => 1,
                'description' => "Batman is a superhero who appears in American comic books published by DC Comics. Batman was created by artist Bob Kane and writer Bill Finger, and debuted in the 27th issue of the comic book Detective Comics on March 30, 1939.",
                'image' => 'Batman.jpg',
            ],
            [
                'name' => 'The Punisher',
                'creation_date' => '1974/2/1',
                'appearance' => 'The Amazing Spider-Man #129',
                'artist_id' => 2,
                'description' => "Driven by the deaths of his wife and two children, who were killed by the mob for witnessing a killing in New York City's Central Park, the Punisher wages a one-man war on crime using various weapons.",
                'image' => 'Punisher.jpg',
            ],
            [
                'name' => 'Catwoman',
                'creation_date' => '1939/3/30',
                'appearance' => 'Batman #1',
                'artist_id' => 1,
                'description' => "Catwoman is a Gotham City burglar who typically wears a tight, one-piece outfit and uses a bullwhip for a weapon. She was originally characterized as a supervillain and adversary of Batman.",
                'image' => 'Catwoman.jpg',
            ],
            [
                'name' => 'Johnny Thunder',
                'creation_date' => '1939/11/20',
                'appearance' => 'Flash Comics #1',
                'artist_id' => 3,
                'description' => "John L. Thunder is the seventh son of a seventh son, born at 7 a.m. on Saturday, July 7, the seventh day of the week, the seventh day of the seventh month in 1917.",
                'image' => 'Johnny.png',
            ],
        ]);
    }
}
