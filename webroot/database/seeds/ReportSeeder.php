<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Report', 50)->create()->each(function($rep){
            $rep->save();
        });
    }
}
