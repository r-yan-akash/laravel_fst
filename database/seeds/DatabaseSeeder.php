<?php

use Illuminate\Database\Seeder;
use App\Models\Myinfo;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       factory(Myinfo::class,5)->create();
    }
}
