<?php

use Illuminate\Database\Seeder;

class TrackingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tracking::class, 20)->create();
    }
}
