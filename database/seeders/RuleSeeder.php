<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $rules = [
            [
                'name' => 'Rule 1',
                'desc' => 'All Access Restricted',
            ],
            [
                'name' => 'Rule 2',
                'desc' => 'Access to Account',
            ]
            // Add more admins as needed...
        ];

        DB::table('rules')->insert($rules);
    }
}
