<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        
        foreach($comics as $comic) {
            $comicRecord = new Comic();
            
            $comicRecord->title = $comic['title'];
            $comicRecord->description = $comic['description'];
            $comicRecord->thumb = $comic['thumb'];
            $comicRecord->price = $comic['price'];
            $comicRecord->series = $comic['series'];
            $comicRecord->sale_date = $comic['sale_date'];
            $comicRecord->type = $comic['type'];

            $comicRecord->save();
        }
    }
}
