<?php

require_once 'KadSyousai.php';

class KadKeisyo extends KadSyousai {
    
    var $card;
    
    function _construct($money,$card = 0){
        
        $this->KadSyousai($money);
        $this->card = $card;
    }
    
    function getCard(){  
        return $this->card;
    }
    
    function updateBuy2($nedan){
        
        if(!$this->updateBuy($nedan)){
            $this->card -= $nedan;
            return false;
        }else {
            return true;
        }
    }
    
    function moneyMessage(String $shina){
       $this->printMessage($shina);
    }
    
    function cardMessage(String $shina){
        print $shina . "-購入(カード)<br>";
    }
}
