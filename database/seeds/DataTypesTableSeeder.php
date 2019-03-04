<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-02-25 08:29:58',
                'updated_at' => '2019-02-25 08:29:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-02-25 08:29:58',
                'updated_at' => '2019-02-25 08:29:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-02-25 08:29:58',
                'updated_at' => '2019-02-25 08:29:58',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'educations',
                'slug' => 'educations',
                'display_name_singular' => 'Education',
                'display_name_plural' => 'Education',
                'icon' => 'voyager-book',
                'model_name' => 'App\\Models\\Education',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-25 10:49:16',
                'updated_at' => '2019-02-26 01:53:45',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'experiences',
                'slug' => 'experiences',
                'display_name_singular' => 'Experience',
                'display_name_plural' => 'Experiences',
                'icon' => 'voyager-world',
                'model_name' => 'App\\Models\\Experience',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-25 10:52:49',
                'updated_at' => '2019-02-26 02:44:34',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'profiles',
                'slug' => 'profiles',
                'display_name_singular' => 'Profile',
                'display_name_plural' => 'Profiles',
                'icon' => 'voyager-info-circled',
                'model_name' => 'App\\Models\\Profile',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-25 10:55:08',
                'updated_at' => '2019-03-01 07:50:59',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'projects',
                'slug' => 'projects',
                'display_name_singular' => 'Project',
                'display_name_plural' => 'Projects',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Models\\Project',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-25 10:58:54',
                'updated_at' => '2019-02-25 10:58:54',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'skills',
                'slug' => 'skills',
                'display_name_singular' => 'Skill',
                'display_name_plural' => 'Skills',
                'icon' => 'voyager-anchor',
                'model_name' => 'App\\Models\\Skill',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-25 10:59:37',
                'updated_at' => '2019-03-01 08:05:45',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-25 11:02:28',
                'updated_at' => '2019-02-26 01:35:52',
            ),
        ));
        
        
    }
}