<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('offices')->insertOrIgnore([

            [
                "name" => "The Honourable Ministers Registry",
                "abbrev" => "HMR",
            ],

            [
                "name" => "The Permanent Secretary Finance (Special Duties) Registry",
                "abbrev" => "PSFR-SD",
            ],
            
            [
                "name" => "The Permanent Secretary Finance Registry",
                "abbrev" => "PSFR",
            ],

            [
                "name" => "The Director ICT Registry",
                "abbrev" => "D-ICT",
            ],

            [
                "name" => "The Deputy Director ICT Registry",
                "abbrev" => "DD-ICT",
            ],

            [
                "name" => "The Assistant Director ICT Registry",
                "abbrev" => "AD-ICT",
            ],

            [
                "name" => "The CPA ICT Registry",
                "abbrev" => "CPA-ICT",
            ],

            [
                "name" => "The CCE ICT Registry ",
                "abbrev" => "CCE-ICT",
            ],




            
            
            
        ]);
            
    }
}
