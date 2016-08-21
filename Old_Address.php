
 <?php
 include_once 'DB_Con.php';
 ?>
<html>
<body>
    <br><br>
    <select name="country" onchange="getCountryID(this.value);">
        <option value=""> Select Country</option>
        <?php
        $query="select * from countries";
        $results=  mysqli_query($con, $query);
        //loop
        foreach ($results as $country){
            ?>
        <option value="<?php echo $country["Country_ID"];?>"> <?php echo $country["Country_Name"];?></option>
        <?php
        }
        ?>
        <option value=""></option>
    </select>
    <br><br>
    <select name="states" id="statesList" onchange="getStateID(this.value)">
        <option value=""> Select State</option>
        <option value=""></option>
    </select>
    <br><br>
    <select name="cities" id="citiesList" ">
        <option value=""> Select City</option>
        <option value=""></option>
    </select>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script>
    function getCountryID(val){
       $.ajax({
           
           type:"POST",
           url:"States.php",
           data:"cid="+val,
           success: function(data){
               $("#statesList").html(data);
           }
       });
    }
    </script>
    <script>
    function getStateID(val){
       $.ajax({
           
           type:"POST",
           url:"Cities.php",
           data:"cid="+val,
           success: function(data){
               $("#citiesList").html(data);
           }
       });
    }
    </script>
</body>
</html>
