 <html>
     <head>
     <script type="text/javascript">
        function getID(){ //run some code when "onchange" event fires
            alert("The value is");
        var selectmenu=document.getElementById("cd");
        <?php $ch_id?> = selectmenu[this.selectedIndex].value;
                alert("The value is "+$ch_id);
        }
    </script>
     </head>
<body>
   
    <form method="get" action="http://www.yourwebskills.com/files/examples/process.php">
        
        <select id="cd" name="select" onchange="getID()">
        
            <?php
            $GLOBALS['ch_id']="hii";
            $mysqlserver="localhost";
            $mysqlusername="root";
            $mysqlpassword="";
            $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'halfpace';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT Country_Name FROM countries";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
            echo 'Hello';
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $cdTitle=$cdrow["Country_Name"];
                echo "<option>
                    $cdTitle
                </option>";
            
            }


            ?>
    
        </select><?php
       echo 'The Selected value is:'.$ch_id ?>
    </form>
    
</body>            
 </html>