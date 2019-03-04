<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvPortfolioDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
      /**
       * Migration schema for table categories
         * 
       */
      Schema::create('categories', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->integer('parent_id')->nullable()->unsigned();
                $table->integer('order')->default(1);
                $table->string('title', 191);
                $table->string('slug', 191);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->string('sub_title', 191)->nullable();
                $table->string('img_url', 255)->nullable();
            });


      /**
       * Migration schema for table contacts
         * 
       */
      Schema::create('contacts', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('name', 255)->nullable();
                $table->string('email', 255)->nullable();
                $table->string('subject', 255)->nullable();
                $table->text('messages')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table data_rows
         * 
       */
      Schema::create('data_rows', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->integer('data_type_id')->unsigned();
                $table->string('field', 191);
                $table->string('type', 191);
                $table->string('display_name', 191);
                $table->tinyInteger('required');
                $table->tinyInteger('browse')->default(1);
                $table->tinyInteger('read')->default(1);
                $table->tinyInteger('edit')->default(1);
                $table->tinyInteger('add')->default(1);
                $table->tinyInteger('delete')->default(1);
                $table->text('details')->nullable();
                $table->integer('order')->default(1);
            });


      /**
       * Migration schema for table data_types
         * 
       */
      Schema::create('data_types', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('name', 191);
                $table->string('slug', 191);
                $table->string('display_name_singular', 191);
                $table->string('display_name_plural', 191);
                $table->string('icon', 191)->nullable();
                $table->string('model_name', 191)->nullable();
                $table->string('policy_name', 191)->nullable();
                $table->string('controller', 191)->nullable();
                $table->string('description', 191)->nullable();
                $table->tinyInteger('generate_permissions');
                $table->tinyInteger('server_side');
                $table->text('details')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table educations
         * 
       */
      Schema::create('educations', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('time', 255)->nullable();
                $table->integer('title')->nullable();
                $table->tinyInteger('order')->nullable()->default(1);
                $table->tinyInteger('status')->nullable()->default(1);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table experiences
         * 
       */
      Schema::create('experiences', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('time', 255)->nullable();
                $table->string('company_name', 255)->nullable();
                $table->string('position', 255)->nullable();
                $table->text('content')->nullable();
                $table->tinyInteger('order')->nullable()->default(1);
                $table->tinyInteger('status')->nullable()->default(1);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table menu_items
         * 
       */
      Schema::create('menu_items', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->integer('menu_id')->nullable()->unsigned();
                $table->string('title', 191);
                $table->string('url', 191);
                $table->string('target', 191)->default(_self);
                $table->string('icon_class', 191)->nullable();
                $table->string('color', 191)->nullable();
                $table->integer('parent_id')->nullable();
                $table->integer('order');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->string('route', 191)->nullable();
                $table->text('parameters')->nullable();
            });


      /**
       * Migration schema for table menus
         * 
       */
      Schema::create('menus', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('name', 191);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table pages
         * 
       */
      Schema::create('pages', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->integer('author_id');
                $table->string('title', 191);
                $table->text('excerpt')->nullable();
                $table->text('body')->nullable();
                $table->string('image', 191)->nullable();
                $table->string('slug', 191);
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
                $table->enum('status', array('ACTIVE','INACTIVE'))->default(INACTIVE);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table password_resets
         * 
       */
      Schema::create('password_resets', function(Blueprint $table) {
                $table->string('email', 191);
                $table->string('token', 191);
                $table->timestamp('created_at')->nullable();
            });


      /**
       * Migration schema for table permission_role
         * 
       */
      Schema::create('permission_role', function(Blueprint $table) {
                $table->integer('permission_id')->primary()->unsigned();
                $table->integer('role_id')->primary()->unsigned();
            });


      /**
       * Migration schema for table permissions
         * 
       */
      Schema::create('permissions', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('key', 191);
                $table->string('table_name', 191)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table posts
         * 
       */
      Schema::create('posts', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->integer('author_id');
                $table->integer('category_id')->nullable();
                $table->string('title', 191);
                $table->string('seo_title', 191)->nullable();
                $table->text('excerpt')->nullable();
                $table->text('body');
                $table->string('image', 191)->nullable();
                $table->string('slug', 191);
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
                $table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default(DRAFT);
                $table->tinyInteger('featured');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table profiles
         * 
       */
      Schema::create('profiles', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('name', 255)->nullable();
                $table->string('job_title', 255)->nullable();
                $table->integer('age')->nullable();
                $table->text('address')->nullable();
                $table->string('email', 255)->nullable();
                $table->string('phone', 255)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table projects
         * 
       */
      Schema::create('projects', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('title', 255)->nullable();
                $table->string('slug', 255)->nullable();
                $table->text('description')->nullable();
                $table->string('img_url', 255)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->tinyInteger('order')->nullable()->default(1);
                $table->tinyInteger('status')->nullable()->default(1);
                $table->integer('category_id')->nullable()->unsigned();
            });


      /**
       * Migration schema for table roles
         * 
       */
      Schema::create('roles', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('name', 191);
                $table->string('display_name', 191);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table settings
         * 
       */
      Schema::create('settings', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('key', 191);
                $table->string('display_name', 191);
                $table->text('value')->nullable();
                $table->text('details')->nullable();
                $table->string('type', 191);
                $table->integer('order')->default(1);
                $table->string('group', 191)->nullable();
            });


      /**
       * Migration schema for table skills
         * 
       */
      Schema::create('skills', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('title', 255)->nullable();
                $table->integer('number')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table translations
         * 
       */
      Schema::create('translations', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->string('table_name', 191);
                $table->string('column_name', 191);
                $table->integer('foreign_key')->unsigned();
                $table->string('locale', 191);
                $table->text('value');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


      /**
       * Migration schema for table user_roles
         * 
       */
      Schema::create('user_roles', function(Blueprint $table) {
                $table->integer('user_id')->primary()->unsigned();
                $table->integer('role_id')->primary()->unsigned();
            });


      /**
       * Migration schema for table users
         * 
       */
      Schema::create('users', function(Blueprint $table) {
                $table->integer('id')->autoIncrement()->unsigned();
                $table->integer('role_id')->nullable()->unsigned();
                $table->string('name', 191);
                $table->string('email', 191);
                $table->string('avatar', 191)->nullable();
                $table->string('password', 191);
                $table->string('remember_token', 100)->nullable();
                $table->text('settings')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });



            
                
            Schema::table('categories', function(Blueprint $table) {
                $table->foreign('parent_id')->references('id')->on('categories')->onDelete('SET NULL');
            });


                
                
            Schema::table('data_rows', function(Blueprint $table) {
                $table->foreign('data_type_id')->references('id')->on('data_types')->onDelete('CASCADE');
            });


                
                
                
                
            Schema::table('menu_items', function(Blueprint $table) {
                $table->foreign('menu_id')->references('id')->on('menus')->onDelete('CASCADE');
            });


                
                
                
                
            Schema::table('permission_role', function(Blueprint $table) {
                $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('CASCADE');
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE');
            });


                
                
                
                
                
                
                
                
                
            Schema::table('user_roles', function(Blueprint $table) {
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            });


                
            Schema::table('users', function(Blueprint $table) {
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('RESTRICT');
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
                
            Schema::table('categories', function(Blueprint $table) {
                $table->dropForeign('categories_parent_id_foreign');
            });


                
                
            Schema::table('data_rows', function(Blueprint $table) {
                $table->dropForeign('data_rows_data_type_id_foreign');
            });


                
                
                
                
            Schema::table('menu_items', function(Blueprint $table) {
                $table->dropForeign('menu_items_menu_id_foreign');
            });


                
                
                
                
            Schema::table('permission_role', function(Blueprint $table) {
                $table->dropForeign('permission_role_permission_id_foreign');
                $table->dropForeign('permission_role_role_id_foreign');
            });


                
                
                
                
                
                
                
                
                
            Schema::table('user_roles', function(Blueprint $table) {
                $table->dropForeign('user_roles_role_id_foreign');
                $table->dropForeign('user_roles_user_id_foreign');
            });


                
            Schema::table('users', function(Blueprint $table) {
                $table->dropForeign('users_role_id_foreign');
            });


            
            
              Schema::dropIfExists('categories');
              Schema::dropIfExists('contacts');
              Schema::dropIfExists('data_rows');
              Schema::dropIfExists('data_types');
              Schema::dropIfExists('educations');
              Schema::dropIfExists('experiences');
              Schema::dropIfExists('menu_items');
              Schema::dropIfExists('menus');
              Schema::dropIfExists('pages');
              Schema::dropIfExists('password_resets');
              Schema::dropIfExists('permission_role');
              Schema::dropIfExists('permissions');
              Schema::dropIfExists('posts');
              Schema::dropIfExists('profiles');
              Schema::dropIfExists('projects');
              Schema::dropIfExists('roles');
              Schema::dropIfExists('settings');
              Schema::dropIfExists('skills');
              Schema::dropIfExists('translations');
              Schema::dropIfExists('user_roles');
              Schema::dropIfExists('users');
         }

}