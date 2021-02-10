<?php

namespace Umut5886\Sat;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use onebone\economyapi\EconomyAPI;
use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getLogger()->info("SellUI v2 Avtivated");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function getItemCount(Player $oyuncu, int $id){
    $targetEsya = Item::get(1);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemSayi(Player $oyuncu, int $id){
    $targetEsya = Item::get(4);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemCounts(Player $oyuncu, int $id){
    $targetEsya = Item::get(2);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemMktr(Player $oyuncu, int $id){
    $targetEsya = Item::get(3);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemVar(Player $oyuncu, int $id){
    $targetEsya = Item::get(17);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemOl(Player $oyuncu, int $id){
    $targetEsya = Item::get(12);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemKomur(Player $oyuncu, int $id){
    $targetEsya = Item::get(263);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemDemir(Player $oyuncu, int $id){
    $targetEsya = Item::get(265);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemAltin(Player $oyuncu, int $id){
    $targetEsya = Item::get(266);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemElmas(Player $oyuncu, int $id){
    $targetEsya = Item::get(264);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemZumrut(Player $oyuncu, int $id){
    $targetEsya = Item::get(388);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemKomurb(Player $oyuncu, int $id){
    $targetEsya = Item::get(173);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemDemirb(Player $oyuncu, int $id){
    $targetEsya = Item::get(42);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemAltinb(Player $oyuncu, int $id){
    $targetEsya = Item::get(41);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemElmasb(Player $oyuncu, int $id){
    $targetEsya = Item::get(57);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemZumrutb(Player $oyuncu, int $id){
    $targetEsya = Item::get(133);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemKaktus(Player $oyuncu, int $id){
    $targetEsya = Item::get(81);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemSekerk(Player $oyuncu, int $id){
    $targetEsya = Item::get(338);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemKabak(Player $oyuncu, int $id){
    $targetEsya = Item::get(86);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemKarpuz(Player $oyuncu, int $id){
    $targetEsya = Item::get(360);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemHavuc(Player $oyuncu, int $id){
    $targetEsya = Item::get(391);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemBugday(Player $oyuncu, int $id){
    $targetEsya = Item::get(296);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }
  
  public function getItemElma(Player $oyuncu, int $id){
    $targetEsya = Item::get(260);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemSamanb(Player $oyuncu, int $id){
    $targetEsya = Item::get(170);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

  public function getItemKarpuzb(Player $oyuncu, int $id){
    $targetEsya = Item::get(103);
    $allItemCount = array_sum(array_map(function(Item $esya){
    return $esya->getCount();
  },$oyuncu->getInventory()->all($targetEsya)));
    return $allItemCount;
  }

	
	public function onCommand(CommandSender $oyuncu, Command $kmt, string $label, array $args): bool{
		if($kmt->getName() == "sat"){
			$this->aForm($oyuncu);
		}
		return true;
	}
	
	public function aForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
			$re = $data[0];
			if($re === null){
				return true;
			}
			switch($re){
				case 0:
				$oyuncu->sendMessage("§4Çıkış Yapıldı");
        break;
			}
			switch($re){
				case 1:
				$this->blForm($oyuncu);
				break;
			}
			switch($re){
				case 2:
				$this->madForm($oyuncu);
				break;
			}
			switch($re){
				case 3:
				$this->tarForm($oyuncu);
				break;
			}
		});
		
		$isim = $oyuncu->getName();
		$f->setTitle("§3Sat Ekranı");
		$f->addDropDown("§eHangi Satış Ekranına Girmek Istersin?",["§4Çıkış","§3Blok","§3Maden","§3Tarım"]);
		$f->addLabel("§f$isim §4İşlemini Sectiysen §f'Gönder' §4Butonuna Bas");
		$f->sendToPlayer($oyuncu);
	}
	
	public function blForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function(Player $oyuncu, array $data){
			$re = $data[0];
			if($re === null){
				return true;
			}
			
			switch($re){
				case 0:
				$oyuncu->sendMessage("§4Çıkış Yapıldı");
				break;
			}
			switch($re){
				case 1:
				$this->stForm($oyuncu);
				break;
			}
			switch($re){
				case 2:
				$this->krForm($oyuncu);
				break;
			}
			switch($re){
				case 3:
				$this->ciForm($oyuncu);
				break;
			}
			switch($re){
				case 4:
				$this->toForm($oyuncu);
				break;
			}
			switch($re){
				case 5:
				$this->odForm($oyuncu);
				break;
			}
			switch($re){
				case 6:
				$this->kuForm($oyuncu);
				break;
			}
		});		
		$f->setTitle("§aBlok Satış Ekranı");
		$f->addButton("§4Çıkış",0,"textures/blocks/redstone_block");
		$f->addButton("§eStone",0,"textures/blocks/stone");
		$f->addButton("§eKırıktaş",0,"textures/blocks/cobblestone");
		$f->addButton("§eÇimen",0,"textures/blocks/grass");
		$f->addButton("§eToprak",0,"textures/blocks/dirt");
		$f->addButton("§eOdun",0,"textures/blocks/log");
		$f->addButton("§eKum",0,"textures/blocks/sand");
		$f->sendToPlayer($oyuncu);
	}
	
	public function stForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
			    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(1, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 30*$data[1]);
            $para = 30*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fStone §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(1,0,$data[1]));
        });
        $esyaSayisi = $this->getItemCount($oyuncu, 1);
        $f->setTitle("§fStone Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Stone\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 30 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function krForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(4, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 20*$data[1]);
            $para = 20*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKırıktaş §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(4,0,$data[1]));
        });
        $esyaSayisi = $this->getItemSayi($oyuncu, 4);
        $f->setTitle("§fKırıktaş Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Kırıktaş\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 20 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function ciForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(2, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 35*$data[1]);
            $para = 35*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fÇimen §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(2,0,$data[1]));
        });
        $esyaSayisi = $this->getItemCounts($oyuncu, 2);
        $f->setTitle("§fÇimen Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Çimen\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 35 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function toForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(3, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 20*$data[1]);
            $para = 20*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fToprak §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(3,0,$data[1]));
        });
        $esyaSayisi = $this->getItemMktr($oyuncu, 3);
        $f->setTitle("§fToprak Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Toprak\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 20 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function odForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(17, 0, $data[1]));			
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 40*$data[1]);
            $para = 40*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fOdun §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(17,0,$data[1]));
        });
        $esyaSayisi = $this->getItemVar($oyuncu, 17);
        $f->setTitle("§fOdun Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Odun\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 40 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function kuForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(12, 0, $data[1]));
            EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 15*$data[1]);
            $para = 15*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKum §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(12,0,$data[1]));
        });
        $esyaSayisi = $this->getItemOl($oyuncu, 15);
        $f->setTitle("§fKum Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Kum\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 15 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function madForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function(Player $oyuncu, array $data){
			$re = $data[0];
			if($re === null){
				return true;
			}
			
			switch($re){
				case 0:
				$oyuncu->sendMessage("§4Çıkış Yapıldı");
				break;
			}
			switch($re){
				case 1:
				$this->kmrForm($oyuncu);
				break;
			}
			switch($re){
				case 2:
				$this->dmrForm($oyuncu);
				break;
			}
			switch($re){
				case 3:
				$this->altnForm($oyuncu);
				break;
			}
			switch($re){
				case 4:
				$this->elmsForm($oyuncu);
				break;
			}
			switch($re){
				case 5:
				$this->zmrtForm($oyuncu);
				break;
			}
			switch($re){
				case 6:
				$this->kmrbForm($oyuncu);
				break;
			}
			switch($re){
				case 7:
				$this->dmrbForm($oyuncu);
				break;
			}
			switch($re){
				case 8:
				$this->altnbForm($oyuncu);
				break;
			}
			switch($re){
				case 9:
				$this->elmsbForm($oyuncu);
				break;
			}
			switch($re){
				case 10:
				$this->zmrtbForm($oyuncu);
				break;
			}
		});		
		$f->setTitle("§bMaden Satış Ekranı");
		$f->addButton("§4Çıkış",0,"textures/blocks/redstone_block");
		$f->addButton("§eKömür",0,"textures/items/coal");
		$f->addButton("§eDemir",0,"textures/items/iron_ingot");
		$f->addButton("§eAltın",0,"textures/items/gold_ingot");
		$f->addButton("§eElmas",0,"textures/items/diamond");
		$f->addButton("§eZümrüt",0,"textures/items/emerald");
		$f->addButton("§eKömür Blok",0,"textures/blocks/coal_block");
		$f->addButton("§eDemir Blok",0,"textures/blocks/iron_block");
		$f->addButton("§eAltın Blok",0,"textures/blocks/gold_block");
		$f->addButton("§eElmas Blok",0,"textures/blocks/diamond_block");
		$f->addButton("§eZümrüt Blok",0,"textures/blocks/emerald_block");
		$f->sendToPlayer($oyuncu);
	}
	
	public function kmrForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(263, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 40*$data[1]);
            $para = 40*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKömür §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(263,0,$data[1]));
        });
        $esyaSayisi = $this->getItemKomur($oyuncu, 263);
        $f->setTitle("§fKömür Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Kömür\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 40 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function dmrForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(265, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 80*$data[1]);
            $para = 80*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fDemir §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(265,0,$data[1]));
        });
        $esyaSayisi = $this->getItemDemir($oyuncu, 265);
        $f->setTitle("§fDemir Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Demir\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 80 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function altnForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(266, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 120*$data[1]);
            $para = 120*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fAltın §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(266,0,$data[1]));
        });
        $esyaSayisi = $this->getItemAltin($oyuncu, 266);
        $f->setTitle("§fAltın Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Altın\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 120 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function elmsForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(264, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 190*$data[1]);
            $para = 190*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fElmas §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(264,0,$data[1]));
        });
        $esyaSayisi = $this->getItemElmas($oyuncu, 264);
        $f->setTitle("§fElmas Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Elmas\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 190 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function zmrtForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(388, 0, $data[1]));			
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 220*$data[1]);
            $para = 220*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fZümrüt §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(388,0,$data[1]));
        });
        $esyaSayisi = $this->getItemVar($oyuncu, 388);
        $f->setTitle("§fZümrüt Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Zümrüt\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 220 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
  
	public function kmrbForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(173, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 360*$data[1]);
            $para = 360*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKömür Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(173,0,$data[1]));
        });
        $esyaSayisi = $this->getItemKomurb($oyuncu, 173);
        $f->setTitle("§fKömür Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Kömür Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 360 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function dmrbForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(42, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 720*$data[1]);
            $para = 720*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fDemir Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(42,0,$data[1]));
        });
        $esyaSayisi = $this->getItemDemirb($oyuncu, 42);
        $f->setTitle("§fDemir Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Demir Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 720 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function altnbForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(41, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 1080*$data[1]);
            $para = 1080*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fAltın Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(41,0,$data[1]));
        });
        $esyaSayisi = $this->getItemAltinb($oyuncu, 41);
        $f->setTitle("§fAltın Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Altın Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 1080 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function elmsbForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(57, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 1710*$data[1]);
            $para = 1710*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fElmas Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(57,0,$data[1]));
        });
        $esyaSayisi = $this->getItemElmasb($oyuncu, 57);
        $f->setTitle("§fElmas Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Elmas Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 1710 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
  
    public function zmrtbForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(133, 0, $data[1]));
            EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 1980*$data[1]);
            $para = 1980*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fZümrüt Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(133,0,$data[1]));
        });
        $esyaSayisi = $this->getItemZumrutb($oyuncu, 133);
        $f->setTitle("§fZumrüt Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Zümrüt Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 1980 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }

	public function tarForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function(Player $oyuncu, array $data){
			$re = $data[0];
			if($re === null){
				return true;
			}
			
			switch($re){
				case 0:
				$oyuncu->sendMessage("§4Çıkış Yapıldı");
				break;
			}
			switch($re){
				case 1:
				$this->kakForm($oyuncu);
				break;
			}
			switch($re){
				case 2:
				$this->sekForm($oyuncu);
				break;
			}
			switch($re){
				case 3:
				$this->kabForm($oyuncu);
				break;
			}
			switch($re){
				case 4:
				$this->karForm($oyuncu);
				break;
			}
			switch($re){
				case 5:
				$this->havForm($oyuncu);
				break;
			}
			switch($re){
				case 6:
				$this->buForm($oyuncu);
				break;
			}
			switch($re){
				case 7:
				$this->elmForm($oyuncu);
				break;
			}
			switch($re){
				case 8:
				$this->samanForm($oyuncu);
				break;
			}
			switch($re){
				case 9:
				$this->karpuzForm($oyuncu);
				break;
			}
		});		
		$f->setTitle("§aTarım Satış Ekranı");
		$f->addButton("§4Çıkış",0,"textures/blocks/redstone_block");
		$f->addButton("§eKaktüs",0,"textures/items/cactus");
		$f->addButton("§eŞeker Kamışı",0,"textures/items/sugarcane");
		$f->addButton("§eKabak",0,"textures/items/pumpkin");
		$f->addButton("§eKarpuz",0,"textures/items/melon");
		$f->addButton("§eHavuç",0,"textures/items/carrot");
		$f->addButton("§eBugday",0,"textures/items/wheat");
		$f->addButton("§eElma",0,"textures/items/gapple");
		$f->addButton("§eSaman Blok",0,"textures/items/hay_block");
		$f->addButton("§eKarpuz Blok",0,"textures/items/melon_block");
		$f->sendToPlayer($oyuncu);
	}
	
	public function kakForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(81, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 40*$data[1]);
            $para = 40*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKaktüs §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(81,0,$data[1]));
        });
        $esyaSayisi = $this->getItemKaktus($oyuncu, 81);
        $f->setTitle("§fKaktüs Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Kaktüs\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 40 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function sekForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(338, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 35*$data[1]);
            $para = 35*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fŞeker Kamışı §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(388,0,$data[1]));
        });
        $esyaSayisi = $this->getItemSekerk($oyuncu, 388);
        $f->setTitle("§fŞeker Kamışı Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Şeker Kamışı\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 35 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function kabForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(86, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 45*$data[1]);
            $para = 45*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKabak §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(86,0,$data[1]));
        });
        $esyaSayisi = $this->getItemKabak($oyuncu, 86);
        $f->setTitle("§fKabak Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Kabak\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 45 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function karForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(360, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 25*$data[1]);
            $para = 25*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKarpuz §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(360,0,$data[1]));
        });
        $esyaSayisi = $this->getItemKarpuz($oyuncu, 360);
        $f->setTitle("§fKarpuz Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Karpuz\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 25 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function havForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(391, 0, $data[1]));			
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 15*$data[1]);
            $para = 15*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fHavuç §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(391,0,$data[1]));
        });
        $esyaSayisi = $this->getItemHavuc($oyuncu, 391);
        $f->setTitle("§fHavuç Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Havuç\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 15 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function buForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(296, 0, $data[1]));
            EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 25*$data[1]);
            $para = 25*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fBugday §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(296,0,$data[1]));
        });
        $esyaSayisi = $this->getItemBugday($oyuncu, 296);
        $f->setTitle("§fBugday Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Bugday\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 25 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }

    public function elmForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(260, 0, $data[1]));
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 10*$data[1]);
            $para = 10*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fElma §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(260,0,$data[1]));
        });
        $esyaSayisi = $this->getItemElma($oyuncu, 260);
        $f->setTitle("§fElma Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Elma\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 10 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function samanForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(170, 0, $data[1]));			
			       EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 225*$data[1]);
            $para = 225*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fSaman Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(170,0,$data[1]));
        });
        $esyaSayisi = $this->getItemSamanb($oyuncu, 170);
        $f->setTitle("§fSaman Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Saman Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 225 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
    
    public function karpuzForm(Player $oyuncu){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function(Player $oyuncu, array $data){
						    
			if(!isset($data[1])){
				return true;
			}
			$oyuncu->getInventory()->removeItem(Item::get(103, 0, $data[1]));
            EconomyAPI::getInstance()->addMoney($oyuncu->getName(), 225*$data[1]);
            $para = 225*$data[1];
            $oyuncu->sendMessage("§4Başarılı Bir Şekilde §fKarpuz Blok §4Adlı Eşya Satıldı.\nKazancın;§f $para §4TL");
            $oyuncu->getInventory()->removeItem(Item::get(103,0,$data[1]));
        });
        $esyaSayisi = $this->getItemKarpuzb($oyuncu, 103);
        $f->setTitle("§fKarpuz Blok Satış Ekranı");
        $f->addLabel("§4Satılacak Eşya§f: Karpuz Blok\n\n§4Envanterinde Bu Eşyadan§f $esyaSayisi §4Adet Var\n\n§4Bu Eşyanın Tane Fiyatı§f: 225 §4TL'dir\n\n");
       $f->addSlider("§4Miktar Seç§f", 0, $esyaSayisi);
        $f->sendToPlayer($oyuncu);
        return $f;
    }
}