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

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

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
$this->getServer()->getPluginManager()->disablePlugin($this);
}
}

   public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $playerName = $player->getName();
if (strpos($playerName , " ")) {
	$new_str = str_replace(' ', '_', $playerName);
$player->setDisplayName($new_str);
}
}
}
