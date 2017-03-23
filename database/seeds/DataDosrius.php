<?php

use Illuminate\Database\Seeder;
use App\Dosrius;

class DataDosrius extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = 1;
        $i=0;
		if (($handle = fopen("dosrius_naix.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		    	$dosrius = new dosrius();
		        $num = count($data);
		        echo "[REG:$num] ";

		        $row++;

		        $dosrius -> any = $data[0];
		        $dosrius -> homes = $data[1];
		        $dosrius -> dones = $data[2];
		        $dosrius -> total = $data[3];
		        $dosrius -> save();

		        echo "\n";
		    }
		    fclose($handle);
		}
    }
}
