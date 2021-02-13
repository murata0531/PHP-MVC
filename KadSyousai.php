<?php

class KadSyousai {
    
    var $saifu;
    
    function KadSyousai($money){
        
        $this->saifu = (int)$money;
    }
    
    function getSaifu(){  
        return $this->saifu;
    }
    
    function updateBuy($nedan){
        
        if($this->saifu < $nedan){
            return false;
        }else {
            $this->saifu -= $nedan;
            return true;
        }
    }
    
    function printMessage(String $shina){
        print $shina . "-購入<br>";
    }
}
