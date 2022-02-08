<?php

namespace Database\Seeders;

use App\Models\SchoolTypes;
use Illuminate\Database\Seeder;

class SchoolTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_types')->truncate();

        DB::table('school_types')->create(
            ['type' => 'Primary School']
        );

        DB::table('school_types')->create(
            ['type' => 'High School']
        );

        DB::table('school_types')->create(
            ['type' => 'University']
        );

        DB::table('school_types')->create(
            ['type' => 'College']
        );
    }
}
