<?php

class Adventurer
{
  protected $_race;
  protected $_attackPoints;
  protected $_defensePoints;
  protected $_healthPoints;
  protected $_warCry;
  protected $_equipments;
  protected $_speed = 0;
  protected $_shield = 0;
  protected $_sword = 0;
  protected $_name;

  // Constructor
  public function __construct($name, $race)
  {
    $this->_healthPoints = 100;
    $this->_attackPoints = 10;
    $this->_defensePoints = 5;
    $this->_warCry = 'Arhhhhgggg';
    $this->_name = $name;
    $this->_equipments = array();
    $this->_race = $race;
    if ($race === 'Orc' or 'Human' or 'Elf') {
      // If my character is an Orc
      // $character = new Adventurer($name, $race);
      // return $character;
      $this->_warCry = 'REEEEEEEEE';
    } else {
      // If the race is not 'valid'
      echo 'This race is not correct';
    }
  }

  // Equipment methods
  public function addEquipment($equipment)
  {

    // var_dump($equipment);
    if (count($this->_equipments) < 4) {
      $swords = 0;
      $shield = 0;

      foreach ($this->_equipments as $equip) {
        if ($equip->getType() === 'Sword')
          $swords++;

        if ($equip->getType() === 'Shield') {
          $shield++;
        }
      }

      if ($equipment->getType() === 'Sword' && $swords >= 2)
        return 'You already have 2 swords';
      elseif ($equipment->getType() === 'Sword')
        $this->_sword++;
      if ($equipment->getType() === 'Shield' && $shield >= 1)
        return 'You already have a shield';
      elseif ($equipment->getType() === 'Shield')
        $this->_shield++;

      $this->_equipments[] = $equipment;
      return 'Equiped';
    } else
      return 'You already have 4 items';
  }

  public function removeEquipment($equipment)
  {
    foreach ($this->_equipments as $key => $equip) {
      if ($equipment === $equip) {
        unset($this->_equipments[$key]);
        return 'Item removed';
      }
    }

    return 'Item doesn\'t match';
  }

  public function displayEquipment()
  {
    foreach ($this->_equipments as $equip) {
      echo $equip;
    }
  }

  public function getEquipment()
  {
    return $this->_equipments;
  }

  public function getStats()
  {
    $bonusAtk = $this->_attackPoints;
    $bonusDef = $this->_defensePoints;
    $bonusLife = $this->_healthPoints;

    foreach ($this->_equipments as $equip) {
      $bonusAtk += $equip->getBonusAtk();
      $bonusDef += $equip->getBonusDef();
      $bonusLife += $equip->getBonusHealth();
    }

    return 'Atk : ' . $bonusAtk . '<br>'
      . 'Def : ' . $bonusDef . '<br>'
      . 'Health : ' . $bonusLife . '<br>';
  }

  public function attack($opponent, $attacker)
  {
    // var_dump($this->_shield);
    // ! to make this code better, we need to move the attack/usepower to the different classes so as to make the code more efficient and reusable
    if ($opponent->_race === 'Elf' && $attacker->_race === 'Orc' && $opponent->_shield == 0) {
      return $opponent->_healthPoints -= 50;
    }
    if ($opponent->_race === 'Human' && $opponent->_sword == 0 or $attacker->_race === 'Human' &&  $attacker->_sword == 0) {
      if ($opponent->_race === 'Human' and $attacker->_race === 'Human')
        return $opponent->_attackPoints += 3 and $attacker->attackPoints += 3;
      if ($opponent->_race === 'Human' and !($attacker->_race === 'Human'))
        return $opponent->_attackPoints += 3;
      if (!($opponent->_race === 'Human') and $attacker->_race === 'Human')
        return $attacker->_attackPoints += 3;
    }
    if ($attacker->_race === 'Elf' && $attacker->_sword > 0) {
      return $attacker->_attackPoints += $attacker->_sword * 2;
    }
  }
  public function usePower()
  {
    if ($this->_race === 'Orc') {
      $this->_defensePoints += 20;
      $this->_attackPoints -= 10;
    }
    if ($this->_race === 'Elf') {
      $this->_speed += 3;
    }
    if ($this->_race === 'Human') {
      $this->_healthPoints += 20;
    }
  }
}
