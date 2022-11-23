<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        //
        for($i=1;$i<=10;$i++)
        {
        DB::table('members')->insert(
            [
                'name' =>Str::random(10),
                'email' =>Str::random(10)."@gmail.com",
                'address' =>Str::random(10)
            ]
        );
    }

    }
}
