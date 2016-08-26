<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="css/try.css">
  <link rel="stylesheet" href="css/list.css">
  <link rel="stylesheet" href="css/w3.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="js/checkbox.js"></script>
  <script>
function myFunction(id) {
    $(".drop").hide();
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") === -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</head>
<body>
    
    <div class="superparent" id="left_div">
        <h2>Choose a skill</h2>
 
<div class="w3-accordion w3-light-grey">
  <button onclick="myFunction('Demo1')" class="w3-btn-block w3-left-align">
    Everyday skills
  </button>
  <div id="Demo1" class="w3-accordion-content w3-container">
                      
                      
                      <?php
                      $skills = array("Bike Driving","Bi-Cycle Driving","Car Driving","Sewing","Decoration","Event Management","Gardenning","Cooking","Baking","To knot a tie","video making,editing and Sound Mixing","Beauty Tips","Photography","Caligraphy","Entrepreneurship","Legal Advices","Communication Skills","Time Management","Fashion","Festival Knowledge","Trademarketing","Swimming","Excel","Rooting a Phone","Formatting Laptop","Meditation");
                      $squared = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared10","squared11","squared12","squared13","squared14","squared15","squared16","squared17","squared18","Squared19","squared20","squared21","squared22","squared23","squared24","squared25","squared26");
                      $i=0;
                      foreach($skills as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared[$i];?>" name="check" />
                                    <label for="<?php echo $squared[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                                                                     
                     
                  
  </div>
  <button onclick="myFunction('Demo2')" class="w3-btn-block w3-left-align">
    Education
  </button>
  <div id="Demo2" class="w3-accordion-content w3-container">
                          
                      <?php
                      $skills1 = array("General Mathematics","Statestics","Calculus","Chemistry","Physics","Biology","History","Geography","Economics","Civics","Politics","Psychology","Philosophy","Engineering Graphics","Mechanics","C","C++","Java","Python","Web Developement","Mobile App Developement","Embedded System","Microcontroller Programming","Robotics","Competitive Exams","Interviews","Career Guidance","College Selection");
                      $squared1 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared10","squared11","squared12","squared13","squared14","squared15","squared16","squared17","squared18","squared19","squared20","squared21","squared22","squared23","squared24","squared25","squared26","squared27","squared28");
                      $i=0;
                      foreach($skills1 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared1[$i];?>" name="check" />
                                    <label for="<?php echo $squared1[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                                                                     
                     
                 
  </div>
</div>

        <button onclick="myFunction('Demo3')" class="w3-btn-block w3-left-align">
    Languages
  </button>
        <div id="Demo3" class="w3-accordion-content w3-container">
                                                 
                      <?php
                      $skills2 = array("English","Germen","French","Spanish","Hindi","Marathi","Sanskrit","Grammer");
                      $squared2 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8");
                      $i=0;
                      foreach($skills2 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared2[$i];?>" name="check" />
                                    <label for="<?php echo $squared2[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                     
                  </div>
        
    
     <button onclick="myFunction('Demo4')" class="w3-btn-block w3-left-align">
    Food Fitness and Healthcare
  </button>
    <div id="Demo4" class="w3-accordion-content w3-container">
                                                                    
                                    <?php
                      $skills3 = array("Heart Care","Diabetes Care","Yoga","Diet","Home Remidies","BabyCare","Skin Care","Aerobics","Hair Care","Dressing","Mother care");
                      $squared3 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared7","squared8","squared9","squared10","squared11");
                      $i=0;
                      foreach($skills3 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared3[$i];?>" name="check" />
                                    <label for="<?php echo $squared3[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                      
                  
        
    </div>
 
        
         <button onclick="myFunction('Demo5')" class="w3-btn-block w3-left-align">
    Art
  </button>
    <div id="Demo5" class="w3-accordion-content w3-container">
                                                                    
                                    <?php
                      $skills4 = array("Sketching","Painting","3-D Art","Nail Art","Dance","Singing","Drama","Guitar","Tabla","Synthesiser","Quilling","Card Making","Handcraft");
                      $squared4 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared7","squared8","squared9","squared10","squared11");
                      $i=0;
                      foreach($skills4 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared4[$i];?>" name="check" />
                                    <label for="<?php echo $squared4[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                  
        
    </div>
 
        
        
        
         <button onclick="myFunction('Demo6')" class="w3-btn-block w3-left-align">
    Games
  </button>
    <div id="Demo6" class="w3-accordion-content w3-container">
                                                                     
                                    <?php
                      $skills5 = array("Cricket","Badminton","Tennise","Table Tennise","Hockey","Chess","Kabaddi");
                      $squared5 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7");
                      $i=0;
                      foreach($skills5 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared5[$i];?>" name="check" />
                                    <label for="<?php echo $squared5[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                      
                 
        
    </div>
 
</div>
    
    <div class="superparent" id="right_div" >
          
          <h2>I want to learn</h2>
 
<div class="w3-accordion w3-light-grey">
  <button onclick="myFunction('Demo11')" class="w3-btn-block w3-left-align">
    Lifestyle
  </button>
  <div id="Demo11" class="w3-accordion-content w3-container">
                      
                      
                      <?php
                      $skills11 = array("Bike Driving","Bi-Cycle Driving","Car Driving","Sewing","Decoration","Event Management","Gardenning","Cooking","Baking","Tie Knot","video making,editing anf Sound Mixing","Beauty Tips","Photography","Caligraphy","Entrepreneurship","Legal Advices","Communication Skills","Time Management","Fashion","Festival Knowledge","Trademarketing","Swimming","Excel","Rooting Phone","Formatting Laptop","Meditation");
                      $squared11 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared10","squared11","squared12","squared13","squared14","squared15","squared16","squared17","squared18","Squared19","squared20","squared21","squared22","squared23","squared24","squared25","squared26");
                      $i=0;
                      foreach($skills11 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared11[$i];?>" name="check" />
                                    <label for="<?php echo $squared11[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <!--div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <!--div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div-->
                                    
                                    
                                </div-->
                      <?php
                      $i++;
                      }
                      ?>
                                                                     
                     
                
  </div>
  <button onclick="myFunction('Demo2')" class="w3-btn-block w3-left-align">
    Education
  </button>
  <div id="Demo2" class="w3-accordion-content w3-container">
                          
                      <?php
                      $skills12 = array("General Mathematics","Statestics","Calculus","Chemistry","Physics","Biology","History","Geography","Economics","Civics","Politics","Psychology","Philosophy","Engineering Graphics","Mechanics","C","C++","Java","Python","Web Developement","Mobile App Developement","Embedded System","Microcontroller Programming","Robotics","Compititive Exams","Interviews","Career Guidance","College Selection");
                      $squared12 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared10","squared11","squared12","squared13","squared14","squared15","squared16","squared17","squared18","squared19","squared20","squared21","squared22","squared23","squared24","squared25","squared26","squared27","squared28");
                      $i=0;
                      foreach($skills12 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared1[$i];?>" name="check" />
                                    <label for="<?php echo $squared1[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                                                                     
                     
                    
  </div>
</div>

        <button onclick="myFunction('Demo3')" class="w3-btn-block w3-left-align">
    Languages
  </button>
        <div id="Demo3" class="w3-accordion-content w3-container">
                                                
                      <?php
                      $skills2 = array("English","Germen","French","Spanish","Hindi","Marathi","Sanskrit","Grammer");
                      $squared2 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8");
                      $i=0;
                      foreach($skills2 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared2[$i];?>" name="check" />
                                    <label for="<?php echo $squared2[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                     
                   
                  </div>
        
    
     <button onclick="myFunction('Demo4')" class="w3-btn-block w3-left-align">
    Food Fitness and Healthcare
  </button>
    <div id="Demo4" class="w3-accordion-content w3-container">
                                                                     
                                    <?php
                      $skills3 = array("Heart Care","Diabetes Care","Yoga","Diet","Home Remidies","BabyCare","Skin Care","Aerobics","Hair Care","Dressing","Mother care");
                      $squared3 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared7","squared8","squared9","squared10","squared11");
                      $i=0;
                      foreach($skills3 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared3[$i];?>" name="check" />
                                    <label for="<?php echo $squared3[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                      
                 
        
    </div>
 
        
         <button onclick="myFunction('Demo5')" class="w3-btn-block w3-left-align">
    Art
  </button>
    <div id="Demo5" class="w3-accordion-content w3-container">
                                                                     
                                    <?php
                      $skills4 = array("Sketching","Painting","3-D Art","Nail Art","Dance","Singing","Drama","Guitar","Tabla","Synthesiser","Quilling","Card Making","Handcraft");
                      $squared4 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared7","squared8","squared9","squared10","squared11");
                      $i=0;
                      foreach($skills4 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared4[$i];?>" name="check" />
                                    <label for="<?php echo $squared4[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                         
    </div>
 
        
        
        
         <button onclick="myFunction('Demo6')" class="w3-btn-block w3-left-align">
    Games
  </button>
    <div id="Demo6" class="w3-accordion-content w3-container">
                                                                     
                                    <?php
                      $skills5 = array("Cricket","Badminton","Tennise","Table Tennise","Hockey","Chess","Kabaddi");
                      $squared5 = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7");
                      $i=0;
                      foreach($skills5 as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared5[$i];?>" name="check" />
                                    <label for="<?php echo $squared5[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" >
                                    
                          <div ><input class="w3-radio" type="radio" name="gender" value="Beginner" checked>
                              <label class="w3-validate">Beginner</label></div>

                                  <div> <input class="w3-radio" type="radio" name="gender" value="Intermediate">
                                      <label class="w3-validate">Intermediate</label></div>

                                      <div> <input class="w3-radio" type="radio" name="gender" value="Expert">
                                          <label class="w3-validate">Expert</label></div>
                                    </div>
                                    
                                    
                                </div>
                      <?php
                      $i++;
                      }
                      ?>
                      
                  </div>
                  
        
   
 
        
         
         </div>
</body>

</html>
