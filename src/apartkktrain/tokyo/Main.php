<?php

namespace apartkktrain\tokyo;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\Player;


class Main extends pluginBase implements Listener{public function onEnable(){$this->getLogger()->notice("tokyoserverSystemsver.0.0.1の読み込み成功");$this->getServer()->getPluginManager()->registerEvents($this,$this); }



public function onJoin(PlayerJoinEvent $event){ $name = $event->getPlayer()->getName(); $event->setJoinMessage("§a{$name}が参加しました。鯖生活を楽しんでいってね!"); }}
