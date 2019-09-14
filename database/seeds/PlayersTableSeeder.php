<?php

use App\Http\Controllers\PageController;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageController = new PageController();
        $players = json_decode(($pageController->fileReadCSV()),true);

        foreach ($players as $player) {
            DB::table('players')->insert([
                [
                    'name' => $player['name'], 
                    'age' => $player['age'], 
                    'role' => $player['role'], 
                    'batting' => $player['batting'], 
                    'bowling' => $player['bowling'],
                    'image' => $player['image'],
                    'odiRuns' => $player['odiRuns'], 
                    'country_id' => $player['country_id']
                ]
            ]);
        } 

       /* foreach ($players as $player) {
            DB::table('players')->insert([
                [
                    'name' => $player[0], 
                    'age' => $player[1], 
                    'role' => $player[2], 
                    'batting' => $player[3], 
                    'bowling' => $player[4],
                    'image' => $player[5],
                    'odiRuns' => $player[6], 
                    'country_id' => $player[7]
                ]
            ]);
        }*/
    }
}
