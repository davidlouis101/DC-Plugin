<?php
 
 
 namespace Firecraft;
 
 
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
 
 
 
 class Main extends PluginBase implements Listener {
   
   public $config;
   public const PREFIX = "§r[§2Firecraft §r] §7";
   
      public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getServer()->getLogger()->warning(TextFormat::BLUE . "Fly-Main " . TextFormat::GREEN . "Aktiviert.");
  }
  
  public function onDisable() {
    $this->getServer()->getLogger()->info(TextFormat::BLUE . "[Firecraft] Geht an" . TextFormat::RED . "Deaktiviert/Aus.");
  }
 
 public function onCommand(CommandSender $sender, Commandg $cmd, string $label, array $args): bool 
         }
        { if ($cmd->getName() == "DC") {
        $sender->sendMessage("§cUnser Eignder Discord-Server : https://discord.gg/9b4u2nr") }
   
           Return False;
//Ende
