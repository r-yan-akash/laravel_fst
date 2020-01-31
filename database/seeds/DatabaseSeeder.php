<?php

use Illuminate\Database\Seeder;
use App\Models\Myinfo;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       factory(Student::class,10)->create();
       factory(Department::class,3)->create();
       factory(Myinfo::class,10)->create();
       factory(Teacher::class,10)->create();
    }
}
