<?php

namespace MXGLatoya\DisableCommands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase {

    public function onEnable() : void{

        $this->saveResource("config.yml");
        $cmp = $this->getServer()->getCommandMap();

        foreach((new Config($this->getDataFolder()."config.yml", Config::YAML))->get("cmd") as $cmdlist){
            $cmp->unregister($cmp->getCommand($cmdlist));
        }
    }
}
