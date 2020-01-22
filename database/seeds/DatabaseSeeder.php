<?php

use Illuminate\Database\Seeder;
use App\Models\Myinfo;
use App\Models\Department;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       factory(Department::class,3)->create();
       factory(Myinfo::class,10)->create();
    }
}
