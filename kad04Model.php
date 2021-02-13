<?php

class kad04Model {
    
    private $goukei;
    
    public function calcGoukei(){
        
        $this->goukei = 0;
        
        for($i = 1; $i <= 3; $i++){
            
            $kakaku = trim(htmlspecialchars($_POST['shohin' .$i],ENT_QUOTES,'UTF-8'));
            $kosu = trim(htmlspecialchars($_POST['kosu' .$i],ENT_QUOTES,'UTF-8'));

            if(!preg_match('/^[0-9]+$/',$kosu) || $kosu == 0){
                $_SESSION['shohin'. $i] = 0;
            }elseif ($kosu != 0) {
                $_SESSION['shohin' . $i] = $kosu;
                $this->goukei += ($kakaku * $_SESSION['shohin' . $i]);
            }
        }
    }
    
    public function getResult(){
        return $this->goukei;
    }
}
