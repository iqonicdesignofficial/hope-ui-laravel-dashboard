<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'role',
                'title' => 'Role',
            ],
            [
                'name' => 'role-add',
                'title' => 'Role Add',
                'parent_id' => 1,
            ],
            [
                'name' => 'role-list',
                'title' => 'Role List',
                'parent_id' => 1,
            ],
            [
                'name' => 'permission',
                'title' => 'Permission',
            ],
            [
                'name' => 'permission-add',
                'title' => 'Permission Add',
                'parent_id' => 4,
            ],
            [
                'name' => 'permission-list',
                'title' => 'Permission List',
                'parent_id' => 4,
            ]
        ];

        foreach ($permissions as $value) {
            Permission::create($value);
        }
    }
}
