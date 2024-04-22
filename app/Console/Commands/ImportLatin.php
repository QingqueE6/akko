<?php

namespace App\Console\Commands;

use App\Models\Latin;
use Illuminate\Console\Command;
use Spatie\SimpleExcel\SimpleExcelReader;

class ImportLatin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-latin {pathToSheet}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports my latin vocab with spatie-simple-excel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $excelReader = SimpleExcelReader::create($this->argument("pathToSheet"));
        // The amount of total sheets isnt dynamic so you have to type it in manually (see the number thats being compared to $currentSheet)
        for ($currentSheet=1; $currentSheet <= 4; $currentSheet++) { 

            $rows = $excelReader->fromSheet($currentSheet)->getRows();

            foreach ($rows as $row){
                Latin::create([
                "latin" => $row["Latein"],
                "additional" => $row["additional"],
                "german" => $row["Deutsch"],
                "lesson" => $row["Lektion"],]);
            }
        }
    }
}
