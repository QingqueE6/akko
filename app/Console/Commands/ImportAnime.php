<?php

namespace App\Console\Commands;

use App\Models\Anime;
use Illuminate\Console\Command;
use Spatie\SimpleExcel\SimpleExcelReader;

class ImportAnime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-anime {pathToSheet}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'imports my anime and manga list via excel-import';

    /**
     * Execute the console command.
     */
    public function handle()
    {
                // deletes all the existing content first so no duplication happens
                Anime::whereNotNull('id')->delete();  

                $excelReader = SimpleExcelReader::create($this->argument("pathToSheet"));
                // The amount of total sheets isnt dynamic so you have to type it in manually (see the number thats being compared to $currentSheet)
                for ($currentSheet=1; $currentSheet <= 1; $currentSheet++) { 
        
                    $rows = $excelReader->fromSheet($currentSheet)->getRows();
        
                    foreach ($rows as $row){
                        Anime::create([
                        "title" => $row["Title"],
                        "year_watched" => $row["year_watched"],
                        "form" => $row["form"],
                        "status" => $row["status"],]);
                    }
                }
    }
}
