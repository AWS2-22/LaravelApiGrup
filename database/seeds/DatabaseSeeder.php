<?php

use Illuminate\Database\Seeder;
//use DataDosrius;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DataDosrius::class);
    }
}
