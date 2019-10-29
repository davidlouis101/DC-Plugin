<?php
 
 
 namespace Firecraft;
 
 
use pocketmine+AFw-event+AFw-Listener;
use pocketmine+AFw-utils+AFw-TextFormat;
use pocketmine+AFw-plugin+AFw-PluginBase;
use pocketmine+AFw-plugin+AFw-Plugin;
use pocketmine+AFw-command+AFw-Command;
use pocketmine+AFw-command+AFw-CommandSender;
use pocketmine+AFw-Player;
use pocketmine+AFw-Server;
use pocketmine+AFw-utils+AFw-Config;
 
 
 
 class Main extends PluginBase implements Listener {
   
   public $config;
   public const PREFIX = "+AKc-r[+AKc-2Firecraft +AKc-r] +AKc-7";
   
      public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getServer()->getLogger()->warning(TextFormat::BLUE . "Fly-Main " . TextFormat::GREEN . "Aktiviert.");
  }
  
  public function onDisable() {
    $this->getServer()->getLogger()->info(TextFormat::BLUE . "[Firecraft] Geht an" . TextFormat::RED . "Deaktiviert/Aus.");
  }
 
 public function onCommand(CommandSender $sender, Commandg $cmd, string $label, array $args): bool 
         }
         if ($cmd->getName() == "DC") {
        $sender->sendMessage("+AKc-cUnser Eignder Discord-Server : https://discord.gg/9b4u2nr")
   
