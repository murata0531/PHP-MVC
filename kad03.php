<?php

class Kad03 {
    
    private $sikaku;
    protected $ten;
    
    public function _construct($sikaku, $ten) {
        $this->sikaku = $sikaku;
        $this->ten = (int)$ten;
    }
    
    protected function dispMessage(){
        print "<p>受験科目　：　" . $this->sikaku . "<br>点数　：　" . $this->ten . "</p>";
    }
    
}

class kad03Sub extends Kad03 {
    
    var $goukaku;
    
    public function _construct($sikaku,$ten,$goukakuten = 825){
        parent::_construct($sikaku, $ten);
        $this->goukaku = $goukakuten;
    }
    
    private function hanteiPass(){
        
        if($this->goukaku <= $this->ten){
            return true;
        }else {
            return false;
        }
    }
    
    public function dispResult(){
        
        $this->dispMessage();
        
        if($this->hanteiPass()){
            $result = "合格";
        }else {
            $result = "不合格";
        }
        
        print "<p>合格点 : " . $this->goukaku . "</p>";
        print "<p>あなたの結果は:" . $result . "です</p>";
    }
    
    static function dispName($name){
        print "<p>" . $name . "さん</p>";
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>課題03</title>
    </head>
    <body>
        
        <header>
            <h1 style="color:red">課題03 コンストラクタ・アクセス修飾子・staticメソッド</h1>
        </header>
        
        
        <?php
            
        kad03Sub::dispName("なかば");
        
        $obj = new kad03Sub('CCNA',825);
        
        $obj->dispResult();
        ?>
    </body>
</html>
