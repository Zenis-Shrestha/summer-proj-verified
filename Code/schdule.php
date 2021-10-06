<?php
include_once "header.php";
session_start();
  ?>

   
   <link rel="stylesheet" href="css/schdule.css">
   
   
    
    <div class="tables">
    <?php   
        if (isset($_SESSION['name'])) {
            echo'<div class="sch">
            <h2>Morning Class</h2>
            <table>
                <tr style="background-color: rgb(60, 124, 143);">
                    <td>Days</td>
                    <td>5am-6am</td>
                    <td>6am-7am</td>
                    <td>7am-8am</td>
                    <td>instructor</td> 
                </tr>
                <tr>
                    <td>sunday</td>
                    <td>Aerobics</td>
                    <td>Zumba</td>
                    <td>Mat-training</td>
                    <td>Susmita shrestha</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>Aerobics</td>
                    <td>Zumba</td>
                    <td>Mat-training</td>
                    <td>Susmita shrestha</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Aerobics</td>
                    <td>Zumba</td>
                    <td>Mat-training</td>
                    <td>Susmita shrestha</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Aerobics</td>
                    <td>Zumba</td>
                    <td>Mat-training</td>
                    <td>Susmita shrestha</td>
                </tr>
                <tr>
                    <td>thursday</td>
                    <td>Aerobics</td>
                    <td>Zumba</td>
                    <td>Mat-training</td>
                    <td>Susmita shrestha</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Aerobics</td>
                    <td>Zumba</td>
                    <td>Mat-training</td>
                    <td>Susmita shrestha</td>
                </tr>
            </table>

            <br><br><br>
            <h2 class="eve">Evening Class </h2>
            
                    <table>
                        <tr style="background-color: rgb(42, 151, 165);">
                            <td>Days</td>
                            <td>5pm-6pm</td>
                            <td>6pm-7pm</td>
                            <td>7pm-8pm</td>
                            <td>Susmita shrestha</td>
                        </tr>
                        <tr>
                            <td>sunday</td>
                            <td>Aerobics</td>
                            <td>Zumba</td>
                            <td>Mat-training</td>
                            <td>Susmita shrestha</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>Aerobics</td>
                            <td>Zumba</td>
                            <td>Mat-training</td>
                            <td>Susmita shrestha</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>Aerobics</td>
                            <td>Zumba</td>
                            <td>Mat-training</td>
                            <td>Susmita shrestha</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>Aerobics</td>
                            <td>Zumba</td>
                            <td>Mat-training</td>
                            <td>Susmita shrestha</td>
                        </tr>
                        <tr>
                            <td>thursday</td>
                            <td>Aerobics</td>
                            <td>Zumba</td>
                            <td>Mat-training</td>
                            <td>Susmita shrestha</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>Aerobics</td>
                            <td>Zumba</td>
                            <td>Mat-training</td>
                            <td>Susmita shrestha</td>
                        </tr>
                    </table>
                <br><br>
        </div>';
        }
							
           
        else{
            echo'<div class="sch">
                <h2>Morning Class</h2>
                <table>
                    <tr style="background-color: rgb(60, 124, 143);">
                        <td>Days</td>
                        <td>5am-6am</td>
                        <td>6am-7am</td>
                        <td>7am-8am</td>    
                    </tr>
                    <tr>
                        <td>sunday</td>
                        <td>Aerobics</td>
                        <td>Zumba</td>
                        <td>Mat-training</td>
                    </tr>
                    <tr>
                        <td>Monday</td>
                        <td>Aerobics</td>
                        <td>Zumba</td>
                        <td>Mat-training</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>Aerobics</td>
                        <td>Zumba</td>
                        <td>Mat-training</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>Aerobics</td>
                        <td>Zumba</td>
                        <td>Mat-training</td>
                    </tr>
                    <tr>
                        <td>thursday</td>
                        <td>Aerobics</td>
                        <td>Zumba</td>
                        <td>Mat-training</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Aerobics</td>
                        <td>Zumba</td>
                        <td>Mat-training</td>
                    </tr>
                </table>

                <br><br><br>
                <h2 class="eve">Evening Class </h2>
                
                        <table>
                            <tr style="background-color: rgb(42, 151, 165);">
                                <td>Days</td>
                                <td>5pm-6pm</td>
                                <td>6pm-7pm</td>
                                <td>7pm-8pm</td>
                            </tr>
                            <tr>
                                <td>sunday</td>
                                <td>Aerobics</td>
                                <td>Zumba</td>
                                <td>Mat-training</td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>Aerobics</td>
                                <td>Zumba</td>
                                <td>Mat-training</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>Aerobics</td>
                                <td>Zumba</td>
                                <td>Mat-training</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>Aerobics</td>
                                <td>Zumba</td>
                                <td>Mat-training</td>
                            </tr>
                            <tr>
                                <td>thursday</td>
                                <td>Aerobics</td>
                                <td>Zumba</td>
                                <td>Mat-training</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>Aerobics</td>
                                <td>Zumba</td>
                                <td>Mat-training</td>
                            </tr>
                        </table>
                    <br><br>
            </div>';
        }
        ?>

        <div class="imgs">
                <a href="gym.html"><img src="img/deadlift.jpg" alt=""></a><br><br>
                <a href="aero.html"><img src="img/beatcycle.jpg" alt=""></a><br><br><br><br>
                <a href="gym.html"><img src="img/func.jpg" alt=""></a><br><br>
                <a href="gym.html"><img src="img/func.jpg" alt=""></a><br><br>
                
        </div>
    </div><br>

        <?php
            include_once "footer.php"
        ?>
</body>
</html>