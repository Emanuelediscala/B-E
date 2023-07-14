<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Config\ConfigurationInterface;
use App\Models\GameClass;
class GameClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
    $gameClasses= Config("storeClass");

        foreach($gameClasses as $gameClass) {

        $newGameClass = new GameClass();
        $newGameClass->name = $gameClass["name"];
        $newGameClass->type_damage = $gameClass["type_damage"];
        $newGameClass->date_born = $gameClass["date_born"];
        $newGameClass->role = $gameClass["role"];
        $newGameClass->style_game = $gameClass["style_game"];
        $newGameClass->thumb = $gameClass["thumb"];
        $newGameClass ->save();
    }
}
}