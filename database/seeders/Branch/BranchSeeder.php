<?php

namespace Database\Seeders\Branch;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\Models\Branch\Branch;

use Illuminate\Support\Str;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = array(
                        [
                            "code"       => "01",
                            "name"       => "BALIBAGO",
                            "type"       => "MAIN"
                        ],
                        [
                            "code"       => "02",
                            "name"       => "MIRANDA",
                            "type"       => "SUB"
                        ],
                        [
                            "code"       => "03",
                            "name"       => "CALOOCAN",
                            "type"       => "SUB"
                        ],
                        [
                            "code"       => "04",
                            "name"       => "SAN FERNANDO",
                            "type"       => "SUB"
                        ],
                        [
                            "code"       => "05",
                            "name"       => "RIZAL",
                            "type"       => "SUB"
                        ],
                    );

        foreach($seed as $object){
            Branch::create($object);        
        }
    }
}
