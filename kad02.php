<?php

require_once 'KadKeisyo.php';

/* なかばと初期の所持金 */
define('NAKABA','800');

/* 商品と値段 */

define('TART','250'); /*タルト・ディアブル */
define('WINE','200'); /* ワインゼリー */
define('CHOCO','250'); /* チョコレートエンゼルケーキ */
define('MOUSSE','250'); /* フレジエ風苺のムース */
define('CAKE','320'); /* 黒い森のケーキ */

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
    </head>
    <body>
        <header>
            <h1 style="color:red">課題02 クラスの継承</h1>
        </header>
        
        <p>【なかばの現在の所持金額】<br><?= NAKABA ?>円</p>
        
        <p>【購入商品】<br>
        
        <?php
            
               
                $nakaba = new KadKeisyo(NAKABA);
                
                /* タルト購入 */
                if($nakaba->updateBuy2(TART)){
                    $nakaba->moneyMessage('タルト・ディアブル');
                    $kago[] = 'タルト・ディアブル';
                } else {
                    $nakaba->cardMessage('タルト・ディアブル');
                    $kago2[] = 'タルト・ディアブル';
                }
                
                /* ワインゼリー購入 */
                if($nakaba->updateBuy2(WINE)){
                    $nakaba->moneyMessage('ワインゼリー');
                    $kago[] = 'ワインゼリー';
                }else {
                    $nakaba->cardMessage('ワインゼリー');
                    $kago2[] = 'ワインゼリー';
                }
                
                /* チョコレートエンゼルケーキ購入 */
                if($nakaba->updateBuy2(CHOCO)){
                    $nakaba->moneyMessage('チョコレートエンゼルケーキ');
                    $kago[] = 'チョコレートエンゼルケーキ';
                }else {
                    $nakaba->cardMessage('チョコレートエンゼルケーキ');
                    $kago2[] = 'チョコレートエンゼルケーキ';
                }
                
                /* フレジエ風苺のムース購入 */
                if($nakaba->updateBuy2(MOUSSE)){
                    $nakaba->moneyMessage('フレジエ風苺のムース');
                    $kago[] = 'フレジエ風苺のムース';
                }else {
                    $nakaba->cardMessage('フレジエ風苺のムース');
                     $kago2[] = 'フレジエ風苺のムース';
                }
                
                 /* 黒い森のケーキ購入 */
                if($nakaba->updateBuy2(CAKE)){
                    $nakaba->moneyMessage('黒い森のケーキ');
                    $kago[] = '黒い森のケーキ';
                }else {
                    $nakaba->cardMessage('黒い森のケーキ');
                    $kago2[] = '黒い森のケーキ';
                }
                
                print '</p>';
                print '<p>【購入リスト】<br>';
                
                print "現金購入 : ";
                foreach ($kago as $value) {
                    print $value . "　"; 
                }
                
                print "<br>カード購入 : ";
                foreach ($kago2 as $value2) {
                    print $value2 . "　";    
                }
                
                print "</p>";
                print '【おつり合計】<br>';
                $otsuri = $nakaba->getSaifu();
                print $otsuri . '円</p>'; 
        ?>
            
            
        
    </body>
</html>
