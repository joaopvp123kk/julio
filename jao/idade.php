
<?php
    if (isset($_POST["num"])) {
        $num = $_POST["num"];
        
        if ($num >= 0 && $num <= 11) {
            echo "Essa pessoa é criança";
        } elseif ($num >= 12 && $num <= 13) {
            echo "Essa pessoa é jovem";
        } elseif ($num >= 14 && $num <= 17) {
            echo "Essa pessoa é adolescente";
        } elseif ($num >= 18 && $num <= 54) {
            echo "Essa pessoa é adulta";
        }  elseif ($num >= 55) {
            echo "Essa pessoa é velha";
    }
}
?>



<form method="POST">
	<input type="text" name="num">
	<input type="submit">
	
</form>