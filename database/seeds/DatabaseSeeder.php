<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     protected $tables = [
       'projects',
       'photos'
     ];

     protected $seeders = [
         DataTypesTableSeeder::class,
         DataRowsTableSeeder::class,
         MenusTableSeeder::class,
         MenuItemsTableSeeder::class,
         RolesTableSeeder::class,
         PermissionsTableSeeder::class,
         PermissionRoleTableSeeder::class,
         SettingsTableSeeder::class,
         TranslationsTableSeeder::class,
     ];

     private function truncateDatabase()
     {
       \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
       foreach ($this->tables as $table) {
            \DB::table($table)->truncate();
        }
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');
     }

    public function run()
    {
        Model::unguard();
        // $this->call(UsersTableSeeder::class);
        // if(\DB::connection()->getName() === 'mysql'){
        //     $this->truncateDatabase();
        //}

        foreach($this->seeders as $seeder){
          $this->call($seeder);
        }
        Model::reguard();
    }
}
