<?php

class Adventurer
{
  protected $_race;
  protected $_attackPoints;
  protected $_defensePoints;
  protected $_healthPoints;
  protected $_warCry;
  protected $_equipments;
  protected $_speed;
  protected $_name;
  protected $_shield = 0;
  protected $_swords = 0;
  // Constructor
  public function __construct()
  {
    $this->_healthPoints = 100;
    $this->_attackPoints = 10;
    $this->_defensePoints = 5;
    $this->_warCry = 'Arhhhhgggg';
    $this->_equipments = array();

    // if ($race === 'Orcs') {
    //   // If my character is an Orc
    //   $this->_warCry = 'wwouogrouroulou mlll !!';
    // } else {
    //   // If the race is not 'valid'
    //   echo 'This race is not correct';
    // }
  }

  // Equipment methods
  public function addEquipment($equipment)
  {
    if (count($this->_equipments) < 4) {
      $swords = 0;
      $shield = 0;

      foreach ($this->_equipments as $equip) {
        if ($equip->getType() === 'Sword')
          $swords++;

        if ($equip->getType() === 'Shield')
          $shield++;
      }

      if ($equipment->getType() === 'Sword' && $swords >= 2)
        return 'You already have 2 swords';
      elseif ($equipment->getType() === 'Sword')
        $this->_swords++;
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
}
