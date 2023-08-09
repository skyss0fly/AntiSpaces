<?php
/* 
//         /$$                                     /$$$$$$   /$$$$$$  /$$          
          | $$                                    /$$$_  $$ /$$__  $$| $$          
  /$$$$$$$| $$   /$$ /$$   /$$  /$$$$$$$ /$$$$$$$| $$$$\ $$| $$  \__/| $$ /$$   /$$
 /$$_____/| $$  /$$/| $$  | $$ /$$_____//$$_____/| $$ $$ $$| $$$$    | $$| $$  | $$
|  $$$$$$ | $$$$$$/ | $$  | $$|  $$$$$$|  $$$$$$ | $$\ $$$$| $$_/    | $$| $$  | $$
 \____  $$| $$_  $$ | $$  | $$ \____  $$\____  $$| $$ \ $$$| $$      | $$| $$  | $$
 /$$$$$$$/| $$ \  $$|  $$$$$$$ /$$$$$$$//$$$$$$$/|  $$$$$$/| $$      | $$|  $$$$$$$
|_______/ |__/  \__/ \____  $$|_______/|_______/  \______/ |__/      |__/ \____  $$
                     /$$  | $$                                            /$$  | $$
                    |  $$$$$$/                                           |  $$$$$$/
                     \______/                                             \______/ 
@author: skyss0fly: https://github.com/skyss0fly
@repository: https://www.github.com/skyss0fly/AntiSpaces
@License: GPL 3.0
- This plugin was created by skyss0fly inspired by: https://poggit.pmmp.io/p/NoSpace by (Wildan-Dev461)[https://github.com/Wildan-Dev461] -

*/
namespace skyss0fly\AntiSpaces;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

public function onLoad(): void {
	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    
$this->saveDefaultConfig();
$cfg = $this->getConfig();
$enabled = $cfg->get("Enabled");
if ($enabled){
$this->getLogger()->info("AntiSpaces Enabled");
}
else {
$this->getLogger()->info("AntiSpaces is not enabled in Config\nDisabling:(");

}

public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
$playername = $player->getPlayerName();

if (strpos($playername , " ")) {
	$new_str = str_replace(' ', '_', $playername);
$this->getPlayer()->setDisplayName($new_str);
}
}
