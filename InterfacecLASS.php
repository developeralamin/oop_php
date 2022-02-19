<?php 

/* 
 Abstration acheive two ways (abstract,interface)
  We can get 100% abstration using interface
  Inside interface method is must be public
  wen can not declare any properties inside interface
*/

interface ATM{
	public function hasInsertedCard();
	public function hasInsertedPassword();
	public function hasInsertedAccess();
	public function hasInsertedTransction();
	public function checkingTheUserAmount();
	public function getNotification();
}


class CityATM implements ATM{
    public function hasInsertedCard(){
		return $age = 12;
	}
	public function hasInsertedPassword(){}
	public function hasInsertedAccess(){}
	public function hasInsertedTransction(){}
	public function checkingTheUserAmount(){}
	public function getNotification(){}
}

$obj = new CityATM;
echo $obj->hasInsertedCard();
// echo $obj->hasInsertedCard;

