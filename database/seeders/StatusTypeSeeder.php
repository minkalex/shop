<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses_types')->insert([
            ['title' => 'new'],
            ['title' => 'in_process'],
            ['title' => 'canceled'],
            ['title' => 'done']
        ]);
    }
}
