<?php

use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $json = File::get("database/data/Lots.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
          Task::create(array(
            'id' => $obj->id,
            'title' => $obj->title,
            'slug' => $obj->slug,
            'izmer' => $obj->izmer,
            'price' => $obj->price,
            'otovare' => $obj->otovare,
            'published' => $ogj->published
            'image' => $obj->image,
            'type' => $obj->type
          ));
        }
    }
}
