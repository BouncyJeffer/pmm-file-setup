<?php
namespace AuthorName;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
class main extends PluginBase {
    public function onLoad(){
        $this->getLogger()->info("Plugin loading...");
    }
    public function onEnable(){
        $this->getLogger()->info("Plugin enabled.");
    }
    public function onDisable(){
        $this->getLogger()->info("Plugin disabled.");
    }
}
