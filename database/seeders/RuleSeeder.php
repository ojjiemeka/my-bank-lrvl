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
                'name' => '1',
                'desc' => 'All Access Restricted',
            ],
            [
                'name' => '2',
                'desc' => 'Access to ONLY homepage',
            ],
            [
                'name' => '3',
                'desc' => "Access to all pages but can't withdraw from account ",
            ],
            // Add more admins as needed...
        ];
    }
}
