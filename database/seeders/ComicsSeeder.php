<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Facades\DB;
class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $data = config('comics');

    DB::table('comics')->truncate();

    foreach ($data as $comics_db) {
        $comics = new Comic();

        $comics_db['artists'] = is_array($comics_db['artists']) ? implode(',', $comics_db['artists']) : $comics_db['artists'];
        $comics_db['writers'] = is_array($comics_db['writers']) ? implode(',', $comics_db['writers']) : $comics_db['writers'];

        $comics->title = $comics_db['title'];
        $comics->description = $comics_db['description'];
        $comics->thumb = $comics_db['thumb'];
        $comics->price = $comics_db['price'];
        $comics->series = $comics_db['series'];
        $comics->sale_date = $comics_db['sale_date'];
        $comics->type = $comics_db['type'];
        $comics->artists = $comics_db['artists'];
        $comics->writers = $comics_db['writers'];

        $comics->save();

    
    }
}
}
