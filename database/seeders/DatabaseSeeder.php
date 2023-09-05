<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * CREAR 1 PERFIL POR USUARIO
         */

        User::factory(20)->create()->each(function(User $user){
            Profile::factory(1)->create(
                ['user_id' => $user->id]
            );

            /**
             * CREAR 20 PRODUCTOS POR USUARIO
             */
            
            Product::factory(20)->create(
                ['product_id' => $user->id]
            );
            
        });

        /**
         * CREAR 20 PRODUCTOS POR USUARIO
         */

        /**
         * CREAR 6 IMAGENES POR PRODUCTO
         */
        

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
