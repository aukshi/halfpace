/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var main = function(){
    
    $('stateDef').removeClass(".ui-state-active");
   
  //toggle the componenet with class msg_body
 $(":checkbox").on('click', function(){
     $(this).parent().toggleClass("squaredTwo");
}
        
            );
    
    
};
$(document).ready(main);

/*
}*/