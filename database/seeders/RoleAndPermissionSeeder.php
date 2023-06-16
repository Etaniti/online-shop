<?php

namespace Database\Seeders;

use App\Enums\Permissions;
use App\Enums\Roles;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $permissionsData = [
            ['name' => Permissions::CAN_CREATE_ABSTRACT_PRODUCTS],
            ['name' => Permissions::CAN_UPDATE_ABSTRACT_PRODUCTS],
            ['name' => Permissions::CAN_DELETE_ABSTRACT_PRODUCTS],
            ['name' => Permissions::CAN_CREATE_PRODUCTS],
            ['name' => Permissions::CAN_UPDATE_PRODUCTS],
            ['name' => Permissions::CAN_DELETE_PRODUCTS],
            ['name' => Permissions::CAN_CREATE_PRODUCT_VARIANTS],
            ['name' => Permissions::CAN_UPDATE_PRODUCT_VARIANTS],
            ['name' => Permissions::CAN_DELETE_PRODUCT_VARIANTS],
            ['name' => Permissions::CAN_CREATE_PRODUCT_VARIANT_FEATURES],
            ['name' => Permissions::CAN_UPDATE_PRODUCT_VARIANT_FEATURES],
            ['name' => Permissions::CAN_DELETE_PRODUCT_VARIANT_FEATURES],
            ['name' => Permissions::CAN_CREATE_PRODUCT_ITEMS],
            ['name' => Permissions::CAN_UPDATE_PRODUCT_ITEMS],
            ['name' => Permissions::CAN_DELETE_PRODUCT_ITEMS],
        ];

        $role = Role::create([
            'name' => Roles::ADMIN,
        ]);

        $permissions = $role->permissions()->createMany($permissionsData);

        $adminData = [
            'id' => 1,
            'first_name' => 'Иван',
            'middle_name' => 'Иванович',
            'last_name' => 'Иванов',
            'email' => 'admin@test.com',
            'phone_number' => '+375291234567',
            'password' => bcrypt('12345678'),
        ];

        $admin = $role->users()->create($adminData);

        $user = User::create([
            'id' =>2,
            'first_name' => 'Петров',
            'middle_name' => 'Пётр',
            'last_name' => 'Петрович',
            'email' => 'test1@test.com',
            'phone_number' => '+375291234566',
            'password' => bcrypt('12345678'),
        ]);

        $user = User::create([
            'id' =>3,
            'first_name' => 'Васильев',
            'middle_name' => 'Василий',
            'last_name' => 'Васильевич',
            'email' => 'test2@test.com',
            'phone_number' => '+375291234555',
            'password' => bcrypt('12345678'),
        ]);
    }
}
