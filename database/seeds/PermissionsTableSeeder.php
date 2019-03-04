<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-25 08:29:59',
                'updated_at' => '2019-02-25 08:29:59',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-25 08:30:00',
                'updated_at' => '2019-02-25 08:30:00',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-02-25 08:30:01',
                'updated_at' => '2019-02-25 08:30:01',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'browse_educations',
                'table_name' => 'educations',
                'created_at' => '2019-02-25 10:49:16',
                'updated_at' => '2019-02-25 10:49:16',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'read_educations',
                'table_name' => 'educations',
                'created_at' => '2019-02-25 10:49:16',
                'updated_at' => '2019-02-25 10:49:16',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'edit_educations',
                'table_name' => 'educations',
                'created_at' => '2019-02-25 10:49:16',
                'updated_at' => '2019-02-25 10:49:16',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'add_educations',
                'table_name' => 'educations',
                'created_at' => '2019-02-25 10:49:16',
                'updated_at' => '2019-02-25 10:49:16',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'delete_educations',
                'table_name' => 'educations',
                'created_at' => '2019-02-25 10:49:16',
                'updated_at' => '2019-02-25 10:49:16',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'browse_experiences',
                'table_name' => 'experiences',
                'created_at' => '2019-02-25 10:52:50',
                'updated_at' => '2019-02-25 10:52:50',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'read_experiences',
                'table_name' => 'experiences',
                'created_at' => '2019-02-25 10:52:50',
                'updated_at' => '2019-02-25 10:52:50',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'edit_experiences',
                'table_name' => 'experiences',
                'created_at' => '2019-02-25 10:52:50',
                'updated_at' => '2019-02-25 10:52:50',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'add_experiences',
                'table_name' => 'experiences',
                'created_at' => '2019-02-25 10:52:50',
                'updated_at' => '2019-02-25 10:52:50',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'delete_experiences',
                'table_name' => 'experiences',
                'created_at' => '2019-02-25 10:52:50',
                'updated_at' => '2019-02-25 10:52:50',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'browse_profiles',
                'table_name' => 'profiles',
                'created_at' => '2019-02-25 10:55:08',
                'updated_at' => '2019-02-25 10:55:08',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'read_profiles',
                'table_name' => 'profiles',
                'created_at' => '2019-02-25 10:55:08',
                'updated_at' => '2019-02-25 10:55:08',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'edit_profiles',
                'table_name' => 'profiles',
                'created_at' => '2019-02-25 10:55:08',
                'updated_at' => '2019-02-25 10:55:08',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'add_profiles',
                'table_name' => 'profiles',
                'created_at' => '2019-02-25 10:55:08',
                'updated_at' => '2019-02-25 10:55:08',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'delete_profiles',
                'table_name' => 'profiles',
                'created_at' => '2019-02-25 10:55:08',
                'updated_at' => '2019-02-25 10:55:08',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'browse_projects',
                'table_name' => 'projects',
                'created_at' => '2019-02-25 10:58:54',
                'updated_at' => '2019-02-25 10:58:54',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'read_projects',
                'table_name' => 'projects',
                'created_at' => '2019-02-25 10:58:54',
                'updated_at' => '2019-02-25 10:58:54',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'edit_projects',
                'table_name' => 'projects',
                'created_at' => '2019-02-25 10:58:54',
                'updated_at' => '2019-02-25 10:58:54',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'add_projects',
                'table_name' => 'projects',
                'created_at' => '2019-02-25 10:58:54',
                'updated_at' => '2019-02-25 10:58:54',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'delete_projects',
                'table_name' => 'projects',
                'created_at' => '2019-02-25 10:58:54',
                'updated_at' => '2019-02-25 10:58:54',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_skills',
                'table_name' => 'skills',
                'created_at' => '2019-02-25 10:59:37',
                'updated_at' => '2019-02-25 10:59:37',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_skills',
                'table_name' => 'skills',
                'created_at' => '2019-02-25 10:59:37',
                'updated_at' => '2019-02-25 10:59:37',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_skills',
                'table_name' => 'skills',
                'created_at' => '2019-02-25 10:59:37',
                'updated_at' => '2019-02-25 10:59:37',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_skills',
                'table_name' => 'skills',
                'created_at' => '2019-02-25 10:59:37',
                'updated_at' => '2019-02-25 10:59:37',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_skills',
                'table_name' => 'skills',
                'created_at' => '2019-02-25 10:59:37',
                'updated_at' => '2019-02-25 10:59:37',
            ),
            51 => 
            array (
                'id' => 57,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2019-02-25 11:02:28',
                'updated_at' => '2019-02-25 11:02:28',
            ),
            52 => 
            array (
                'id' => 58,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2019-02-25 11:02:28',
                'updated_at' => '2019-02-25 11:02:28',
            ),
            53 => 
            array (
                'id' => 59,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2019-02-25 11:02:28',
                'updated_at' => '2019-02-25 11:02:28',
            ),
            54 => 
            array (
                'id' => 60,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2019-02-25 11:02:28',
                'updated_at' => '2019-02-25 11:02:28',
            ),
            55 => 
            array (
                'id' => 61,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2019-02-25 11:02:28',
                'updated_at' => '2019-02-25 11:02:28',
            ),
        ));
        
        
    }
}