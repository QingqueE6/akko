<?php

namespace App\Console\Commands;

use App\Models\Games;
use Illuminate\Console\Command;
use Spatie\SimpleExcel\SimpleExcelReader;

class ImportGames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-games {pathToSheet}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // deletes all the existing content first so no duplication happens
        Games::whereNotNull('id')->delete();  

        $excelReader = SimpleExcelReader::create($this->argument("pathToSheet"));
        // The amount of total sheets isnt dynamic so you have to type it in manually (see the number thats being compared to $currentSheet)
        for ($currentSheet=1; $currentSheet <= 1; $currentSheet++) { 

            $rows = $excelReader->fromSheet($currentSheet)->getRows();

            foreach ($rows as $row){
                Games::create([
                "title" => $row["Title"],
                "year_played" => $row["year_played"],
                "status" => $row["status"],
                "additional_info" => $row["additional_info"],]);
            }
        }
    }
}
