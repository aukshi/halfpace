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
    Lifestyle
  </button>
  <div id="Demo1" class="w3-accordion-content w3-container">
                  <div class="content">
                      
                      
                      <?php
                      $skills = array("abcd","abcd","abcd","abcd","abcd","abcd","abcd","abcd","abcd","abcd");
                      $squared = array("squared1","squared2","squared3","squared4","squared5","squared6","squared7","squared8","squared9","squared10");
                      $i=0;
                      foreach($skills as $item){
                      ?>
                                <div class="squaredOne">
                                    <input class="cbox" type="checkbox" value="None" id="<?php echo $squared[$i];?>" name="check" />
                                    <label for="<?php echo $squared[$i];?>"><font size="3"> <?php echo $item;?> </font></label>
                                   <div class="drop w3-card-8 w3-dropdown-content" style="display:none;">
                                    
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
  <button onclick="myFunction('Demo2')" class="w3-btn-block w3-left-align">
    Education
  </button>
  <div id="Demo2" class="w3-accordion-content w3-container">
    <div class="content">
                        <div class="squaredOne">
                                    <input type="checkbox" value="None" id="squareda1" name="check" />
                                    <label for="squareda1"><font size="3"> Maths(basic) </font></label>
                                    </div>
      
                                 <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda2" name="check" />
                                          <label for="squareda2"><font size="3"> Higher Mathematics </font></label>
                                 </div>
                                                                  
                                 <div class="squaredOne">
                                        <input type="checkbox" value="None" id="squareda3" name="check" />
                                        <label for="squareda3"><font size="3"> Physics </font></label>
                                  </div>                         
                                    
                                  <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda4" name="check" />
                                         <label for="squareda4"><font size="3"> Chemistry </font></label>
                                 </div>  
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda5" name="check" />
                                         <label for="squareda5"><font size="3"> Biology </font></label>
                                 </div>
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda6" name="check" />
                                         <label for="squareda6"><font size="3"> History </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda7" name="check" />
                                         <label for="squareda7"><font size="3"> Literature </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda8" name="check" />
                                         <label for="squareda8"><font size="3"> Geography </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda9" name="check" />
                                         <label for="squareda9"><font size="3"> Electronics </font></label>
                                 </div>
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squareda10" name="check" />
                                         <label for="squareda10"><font size="3"> Computer Science </font></label>
                                 </div> 
                    </div>
  </div>
</div>

        <button onclick="myFunction('Demo3')" class="w3-btn-block w3-left-align">
    Languages
  </button>
        <div id="Demo3" class="w3-accordion-content w3-container">
            <div class="content">
                        <div class="squaredOne">
                                    <input type="checkbox" value="None" id="squaredb1" name="check" />
                                    <label for="squaredb1"><font size="3"> English </font></label>
                                </div>
      
                                 <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb2" name="check" />
                                          <label for="squaredb2"><font size="3"> German </font></label>
                                 </div>
                                                                  
                                 <div class="squaredOne">
                                        <input type="checkbox" value="None" id="squaredb3" name="check" />
                                        <label for="squaredb3"><font size="3"> French </font></label>
                                  </div>                         
                                    
                                  <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb4" name="check" />
                                         <label for="squaredb4"><font size="3"> Hindi </font></label>
                                 </div>  
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb5" name="check" />
                                         <label for="squaredb5"><font size="3"> Marathi </font></label>
                                 </div>
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb6" name="check" />
                                         <label for="squaredb6"><font size="3"> Sanskrit </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb7" name="check" />
                                         <label for="squaredb7"><font size="3"> Spanish </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb8" name="check" />
                                         <label for="squaredb8"><font size="3"> Tamil </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb9" name="check" />
                                         <label for="squaredb9"><font size="3"> Telugu </font></label>
                                 </div>
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredb10" name="check" />
                                         <label for="squaredb10"><font size="3"> Bengali </font></label>
                                 </div> 
                    </div>
                  </div>
        
    
     <button onclick="myFunction('Demo4')" class="w3-btn-block w3-left-align">
    Food and Health
  </button>
    <div id="Demo4" class="w3-accordion-content w3-container">
        <div class="content">
                                                                     
                                <div class="squaredOne">
                                    <input type="checkbox" value="None" id="squaredc1" name="check" />
                                    <label for="squaredc1"><font size="3"> Diabetes </font></label>
                                </div>
      
                                 <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc2" name="check" />
                                          <label for="squaredc2"><font size="3"> Fitness </font></label>
                                 </div>
                                                                  
                                 <div class="squaredOne">
                                        <input type="checkbox" value="None" id="squaredc3" name="check" />
                                        <label for="squaredc3"><font size="3"> Diet </font></label>
                                  </div>                         
                                    
                                  <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc4" name="check" />
                                         <label for="squaredc4"><font size="3"> Yoga </font></label>
                                 </div>  
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc5" name="check" />
                                         <label for="squaredc5"><font size="3"> Weight loss  </font></label>
                                 </div>
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc6" name="check" />
                                         <label for="squaredc6"><font size="3"> Baby care </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc7" name="check" />
                                         <label for="squaredc7"><font size="3"> Skin care </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc8" name="check" />
                                         <label for="squaredc8"><font size="3"> Hair care </font></label>
                                 </div> 
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc9" name="check" />
                                         <label for="squaredc9"><font size="3"> Home remedies </font></label>
                                 </div>
                      
                      <div class="squaredOne" >
                                        <input type="checkbox" value="None" id="squaredc10" name="check" />
                                         <label for="squaredc10"><font size="3"> Heart care </font></label>
                                 </div> 
                      
                  </div>
                  
        
    </div>
 
</div>
    
    <div class="superparent" id="right_div" >
          
         
         </div>
</body>

</html>
