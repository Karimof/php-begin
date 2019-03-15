<?php
	include 'header.php';
    include 'TestClass.php';
?>
<html>
    <body>
        <?php
            $savolNames = $_POST['savolNames'];
            $variantsA = $_POST['variantsA'];
            $variantsB = $_POST['variantsB'];
            $variantsC = $_POST['variantsC'];
            $javoblar = $_POST['javoblar'];
            if($savolNames  && $variantsA && $variantsB && $variantsC) {
                foreach ($savolNames as $key => $value) {
                    if($savolNames[$key]  && $variantsA[$key] && $variantsB[$key] && $variantsC[$key]){
                        Test::insert()->execute(
                            [$savolNames[$key], $variantsA[$key] , $variantsB[$key] , $variantsC[$key] , $javoblar[$key]]
                        );
                        $bool = true;
                    }
                }
                if($bool == true){
                    echo '<div class="container">
                        <div class="alert alert-success" style="text-align: center; width:30%;">
                            <strong>Yuklash bajarildi!</strong> <a href="#" class="alert-link"></a>.
                        </div>
                    </div>';
                }
            }
            else {
                echo 'Ma\'lumotlarni to\'liq kiriting!';
            }
        ?>
	</body>
</hmtl>