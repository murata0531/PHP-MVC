<?php

require_once('KadSyousai.php');

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
        <title>課題1</title>
    </head>
    <body>
        <header>
            <h1 style="color:red">課題01 クラスの使用</h1>
        </header>
        
        <p>【なかばの現在の所持金額】<br><?= NAKABA ?>円</p>
        
        <p>【購入商品】<br>
        
        <?php
            
               
                $nakaba = new KadSyousai(NAKABA);
                
                /* タルト購入 */
                if($nakaba->updateBuy(TART)){
                    $nakaba->printMessage('タルト・ディアブル');
                    $kago[] = 'タルト・ディアブル';
                }
                
                /* ワインゼリー購入 */
                if($nakaba->updateBuy(WINE)){
                    $nakaba->printMessage('ワインゼリー');
                    $kago[] = 'ワインゼリー';
                }
                
                /* チョコレートエンゼルケーキ購入 */
                if($nakaba->updateBuy(CHOCO)){
                    $nakaba->printMessage('チョコレートエンゼルケーキ');
                    $kago[] = 'チョコレートエンゼルケーキ';
                }
                
                /* フレジエ風苺のムース購入 */
                if($nakaba->updateBuy(MOUSSE)){
                    $nakaba->printMessage('フレジエ風苺のムース');
                    $kago[] = 'フレジエ風苺のムース';
                }
                
                 /* 黒い森のケーキ購入 */
                if($nakaba->updateBuy(CAKE)){
                    $nakaba->printMessage('黒い森のケーキ');
                    $kago[] = '黒い森のケーキ';
                }
                
                print '</p>';
                print '<p>【買ったものリスト】<br>';
                
                foreach ($kago as $value) {
                    print $value . "　";
                }
                
                print "</p>\nの" . count($kago) . "品を購入しました<p>";
                print '【おつり合計】<br>';
                $otsuri = $nakaba->getSaifu();
                print $otsuri . '円</p>'; 
        ?>
            
            
        
    </body>
</html>
