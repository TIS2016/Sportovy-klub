<?php
include('funkcie.php');
include('pouzivatelia.php');
include('preteky.php');
session_start();

?>

<!DOCTYPE HTML>

<html>
<?php
hlavicka("Spravovanie výkonu");
?>
<form action="" method="post" class="bootstrap-frm">
    <h1>Spravovanie výkonu
        <!-- <span>Please fill all the texts in the fields.</span> -->
    </h1> 
    <label>
        <span>Spravovať výkon súťažiaceho:</span><select name="selection">
        
        <!-- SEM PRIDAT FUNKCIU NA NACITANIE SUTAZIACICH Z DB -->
        <?php
        show_option_values(["prvá možnosť","druhá možnosť"]);
        ?>
        
        
        
        </select>
    </label>    
    <label>
        <span>&nbsp;</span> 
        <input type="button" class="button" value="Spravuj" /> 
    </label>    
</form>

<?php
paticka();        
?>



</html>
