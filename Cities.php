<?php
include_once 'DB_Con.php';

if(!empty(($_POST["cid"])))
{
    $cid=$_POST["cid"];
    $query="select * from cities where state_ID=$cid";
    $results=  mysqli_query($con, $query);

        foreach ($results as $cities){
            ?>          
        <option value="<?php echo $cities["city_id"];?>"> <?php echo $cities["city_name"];?></option>
        <?php
        }
}
?>