<?php
    include_once "header.php";
    session_start();
?>
    <link rel="stylesheet" href="css/pack.css">



        <h1 class="heading" >Our Prices and Packages</h1>
        
		<table class="packs">
            <tr>
                <td>classes</td>
                <td>1month</td>
                <td>3month</td>
                <td>6month</td>
                <td>mmm</td>
            </tr>
            <tr>
                <td>Gym</td>
                <td>2000</td>
                <td>5500</td>
                <td>10000</td>
                <td>18000</td>
            </tr>
            <tr>
                <td>Gym and Cardio</td>
                <td>3500</td>
                <td>11000</td>
                <td>20000</td>
                <td>35000</td>
            </tr>
            <tr>
                <td>Zumba/Aerobics</td>
                <td>1500</td>
                <td>4000</td>
                <td>7500</td>
                <td>14000</td>
            </tr>
            <tr>
                <td>Cardio</td>
                <td>1500</td>
                <td>4500</td>
                <td>8000</td>
                <td>15000</td>
            </tr>
        </table>
    </header>

    <?php
        if(isset($_SESSION['name'])){
            echo'<table class="offer">
            <h1 class="Dashain_offer">Dashain offer</>
            <tr>
                <td>classes</td>
                <td>3month</td>
                <td>6month</td>
                <td>mmm</td>
            </tr>
            <tr>
                <td>Gym</td>
                <td>5500</td>
                <td>10000</td>
                <td>18000</td>
            </tr>
            <tr>
                <td>Gym and Cardio</td>
                <td>11000</td>
                <td>20000</td>
                <td>35000</td>
            </tr>
            <tr>
                <td>Zumba/Aerobics</td>
                <td>4000</td>
                <td>7500</td>
                <td>14000</td>
            </tr>
            <tr>
                <td>Cardio</td>
                <td>4000</td>
                <td>7000</td>
                <td>13000</td>
            </tr>
        </table>';
        }
        else{

        }
    ?>


   <?php
   include_once "footer.php"
   ?>

</body>
</html>