<?php

namespace Database\Seeders;

use App\Models\SchoolTypes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                SchoolTypes::class
            ]
        );
    }
}
