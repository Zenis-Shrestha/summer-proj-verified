<style>
    h1{
        color: wheat;
        text-transform: uppercase;text-align: center;
        
    }
    .pieh1{
        text-align: left;
    }
</style>
<?php


include_once "DBH.php";
include_once "header.php";
if(!isset($_SESSION['id'])){
    die('Unauthorized ');
}
if($_SESSION['id'] != 1) {
    die('Unauthorized user ');
}


$sql = "SELECT * FROM users;";
$r = mysqli_query($conn, $sql);
if(mysqli_num_rows($r) < 1) {
    echo "No users yet";
} else {
    echo"<table class='info_table' cellspacing='0'>
    <h1>list of members</h1>
    <tr>
        <th>fname</th>
        <th>UId</th>
        <th>email</th>
        <th>Cnum</th>
        <th>timing</th>
        <th>pwd</th>
        <th>pclass</th>
        <th>otherreq</th>
        <th>Action</th>
    </tr><tr>";
    while($rr = mysqli_fetch_assoc($r)) {
        echo "<td>".$rr['usersfname']."</td>";
        echo "<td>".$rr['usersUId']."</td>";
        echo "<td>".$rr['usersemail']."</td>";
        echo "<td>".$rr['usersCnum']."</td>";
        echo "<td>".$rr['userstiming']."</td>";
        echo "<td>".$rr['userspwd']."</td>";
        echo "<td>".$rr['userspclass']."</td>";
        echo "<td>".$rr['usersotherreq']."</td>";
        echo "<td><a href='deleteAdmin.php?id=".$rr['usersId']."'><button>Delete</button></a> <a href='update_user.php?id=".$rr['usersId']."'><button>Update</button></a></td>";
        echo "</tr><tr>";
    }
    echo "</tr></table>";
    $eve="Evening";
    $sql = "SELECT * FROM users WHERE userstiming='$eve';";
    $r = mysqli_query($conn, $sql);

    // here comes the @nd table
    
    
    
    echo"<table class='info_table' cellspacing='0'>
    <h1>list of Evening members</h1>
    <tr>
        <th>fname</th>
        <th>email</th>
        <th>timing</th>
        <th>Action</th>
    </tr><tr>";
    while($rr = mysqli_fetch_assoc($r)) {
        echo "<td>".$rr['usersfname']."</td>";
        echo "<td>".$rr['usersemail']."</td>";
        echo "<td>".$rr['userstiming']."</td>";
        echo "<td><button><a href='deleteAdmin.php?id=".$rr['usersId']."'></a>Delete</button> <a href='update_user.php?id=".$rr['usersId']."'><button>Update</button></a></td>";
        echo "</tr><tr>";
    }
    echo "</tr></table>";


    // here comes 3rd table

    $mor="Morning";
    $sql = "SELECT * FROM users WHERE userstiming='$mor';";
    $r = mysqli_query($conn, $sql);

    // here comes the @nd table
    
    
    
    echo"<table class='info_table' cellspacing='0'>
    <h1>list of Morning members</h1>
    <tr>
        <th>fname</th>
        <th>email</th>
        <th>timing</th>
        <th>Action</th>
    </tr><tr>";
    while($rr = mysqli_fetch_assoc($r)) {
        echo "<td>".$rr['usersfname']."</td>";
        echo "<td>".$rr['usersemail']."</td>";
        echo "<td>".$rr['userstiming']."</td>";
        echo "<td><a href='deleteAdmin.php?id=".$rr['usersId']."'><button>Delete</button></a> <button><a href='update_form.php?id=".$rr['usersId']."'></a>Update</button></td>";
       
        echo "</tr><tr>";
    }
    echo "</tr></table>";
}

$sql = "SELECT * FROM feedback;";
    $r = mysqli_query($conn, $sql);
echo"<table class='info_table' cellspacing='0'>
    <h1>members feedback</h1>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Feedback</th>
    </tr><tr>";
    while($rr = mysqli_fetch_assoc($r)) {
        echo "<td>".$rr['userId']."</td>";
        echo "<td>".$rr['fname']."</td>";
        echo "<td>".$rr['users_feedback']."</td>";
        echo "</tr><tr>";
    }
    echo "</tr></table>";
?>



<!-- here lies my pie chart -->

<?php
echo'<h1 class="pieh1">Visual representation of  members</h1>';
$conn=mysqli_connect('localhost','root','','summer');
$sqlg="SELECT  COUNT(usersId) as totalg  FROM users WHERE TRIM(userspclass) = 'g'";
$sqlA="SELECT  COUNT(usersId) as totalA FROM users WHERE TRIM(userspclass) = 'A'";
$sqlz="SELECT  COUNT(usersId) as totalz FROM users WHERE TRIM(userspclass) = 'z'";
$qqg=mysqli_query($conn,$sqlg);
$qqA=mysqli_query($conn,$sqlA);
$qqz=mysqli_query($conn,$sqlz);
$rowg=mysqli_fetch_assoc($qqg);
$rowA=mysqli_fetch_assoc($qqA);
$rowz=mysqli_fetch_assoc($qqz);

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Type of class');
        data.addColumn('number', 'No. of members');
        data.addRows([
          ['Gym', <?php echo $rowg['totalg']?>],
          ['Aerobics', <?php echo $rowA['totalA']?>],
          ['Zumba', <?php echo $rowz['totalz']?>],
         
        ]);

        // Set chart options
        var options = {'title':'Number of clients in each classes',
                       'width':400,
                       'height':300,
                       'backgroundColor':'#000000', 
                       'annotations':{textStyle:{color:'#ffffff'}}
                    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div"></div>

//here ends the piechart




<?php
    include_once "footer.php";
?>