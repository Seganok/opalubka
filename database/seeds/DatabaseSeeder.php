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
      Eloquent::unguard();
      $this->call('UserTableSeeder');
      $this->command->info('User table seeded!');
      $path = '/database/data/tasks.sql';
      DB::Task(file_get_contents($path));

    }
}
