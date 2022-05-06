<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'image_url' => 'www.image.url.com',
            'github' => 'github.com',
            'profileable_id'=>1,
            'profileable_type'=>'App\Models\Admin',
        ]);
        DB::table('profiles')->insert([
            'image_url' => 'www.image.url.comdata',
            'github' => 'github.comdata',
            'profileable_id'=>1,
            'profileable_type'=>'App\Models\User',
        ]);
        DB::table('profiles')->insert([
            'image_url' => 'www.image.url.comdata',
            'github' => 'github.comdata',
            'profileable_id'=>2,
            'profileable_type'=>'App\Models\Admin',
        ]);
        DB::table('profiles')->insert([
            'image_url' => 'www.image.url.comdatadaa',
            'github' => 'github.comdata',
            'profileable_id'=>2,
            'profileable_type'=>'App\Models\User',
        ]);
        
    }
}
