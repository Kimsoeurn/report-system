<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        Department::create([
            'name' => 'Information Technology',
            'abbr' => 'IT',
        ]);

        Department::create([
            'name' => 'Human Resource',
            'abbr' => 'HR',
        ]);

        Department::create([
            'name' => 'Front Service',
            'abbr' => 'FS',
        ]);

        Department::create([
            'name' => 'Store Purchase',
            'abbr' => 'SP',
        ]);

        Department::create([
            'name' => 'Gaming Office',
            'abbr' => 'GO',
        ]);

        Department::create([
            'name' => 'Security Office',
            'abbr' => 'SO',
        ]);

        Department::create([
            'name' => 'Cashier',
            'abbr' => 'CH',
        ]);

        Department::create([
            'name' => 'House Keeping',
            'abbr' => 'HK',
        ]);

        Department::create([
            'name' => 'Maintenance',
            'abbr' => 'MO',
        ]);

        Department::create([
            'name' => 'Online Lucky 369',
            'abbr' => 'OL',
        ]);

        Department::create([
            'name' => 'Online Room A',
            'abbr' => 'ORA',
        ]);

        Department::create([
            'name' => 'Online Room B',
            'abbr' => 'ORB',
        ]);

        Department::create([
            'name' => 'Online Room C',
            'abbr' => 'ORC',
        ]);
    }
}
