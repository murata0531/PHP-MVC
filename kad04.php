<?php

?>

<?php

require_once 'kad04View.php';
require_once 'kad04Model.php';

session_start();

$result = '';

$calc = new kad04Model();

if(isset($_POST['sub'])){
    $calc->calcGoukei();
    $result = resultView($calc->getResult());
}else {
    for($i = 1; $i <= 3; $i++){
        $_SESSION['shohin' . $i] = 0;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題04</title>
    </head>
    <body>
        
        <header>
            <h1 style="color:red"><span>課題 04 MVC モデル</span></h1>
        </header>
        
        <h4>Cake Shop</h4>
        
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            
            <table borde="1" bordercolor="#656567">
                
                <thead><tr><th>Photo</th><th>Name</th><th>Price</th><th>Piece</th></tr></thead>
                
                <tbody>
                    
                    <tr><td><img src="./images/cake01.jpg" width="80" height="68"></td>
                    <td>ブッシュド・ノエル</td><td>250円</td><td><input type="hidden" name="shohin1" value="250">
                    <input type="text"name="kosu1" size="4" value=<?= $_SESSION['shohin1'] ?>>pieces</td></tr>
                
                    <tr><td><img src="./images/cake02.jpg" width="80" height="68"></td>
                    <td>シブースド・ノエル</td><td>200円</td><td><input type="hidden" name="shohin2" value="200">
                    <input type="text"name="kosu2" size="4" value=<?= $_SESSION['shohin2'] ?>>pieces</td></tr>
                
                    <tr><td><img src="./images/cake03.jpg" width="80" height="68"></td>
                    <td>イチゴとシブースドケーキ</td><td>400円</td><td><input type="hidden" name="shohin3" value="400">
                    <input type="text"name="kosu3" size="4" value=<?= $_SESSION['shohin3'] ?>>pieces</td></tr>
                
                    <tr><td colspan="3"><input type="submit" name="sub" value="購入"></td></tr>
                </tbody>
                
            </table>
        </form>
        
        <?php
        
            print '<p>' . $result . '</p>';
        ?>
    </body>
</html>
