<?php 

/* 
 Abstration acheive two ways (abstract,interface)
*/

abstract Class Fiance{

	abstract  function hasLookingBeautiful();
	abstract  function eyeCatching();
	abstract  function hasToBePatientAnySituation();
	abstract function hasRespectFamilyMembers();
	public function hasFathersFlat(){

	}
}


class BrideGroom extends Fiance{
	public function hasLookingBeautiful(){}
	public function eyeCatching(){}
	public function hasToBePatientAnySituation(){}
	public function hasRespectFamilyMembers(){}
}

$obj = new BrideGroom;
echo $obj->hasLookingBeautiful('Hi');
// echo $obj->hasInsertedCard;

