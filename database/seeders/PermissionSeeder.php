<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            'categry-list','categry-create','categry-edit','categry-delete',
            'client-list', 'client-create', 'client-edit', 'client-delete',
            'detaile-list','detaile-create','detaile-edit','detaile-delete',
            'image-list','image-create','image-edit','image-delete',
            'question-list','question-create','question-edit','question-delete',
            'service-list','service-create','service-edit','service-delete',
            'team-list', 'team-create', 'team-edit', 'team-delete',
            'testimonial-list', 'testimonial-create', 'testimonial-edit', 'testimonial-delete',
            'role-list', 'role-create', 'role-edit', 'role-delete',
            'user-list', 'user-create', 'user-edit', 'user-delete',
        ];

        foreach( $permissions as  $permission){
            Permission::create([
                'name'=>$permission,
            ]);
        }
    }
}
