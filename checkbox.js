/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var main = function(){
    
    
  //toggle the componenet with class msg_body
// $(":checkbox").on('click', function(){
//     $(this).parent().toggleClass("squaredTwo");
//}
        
     //       );
$('.drop').removeClass("squaredOne");
$('.cbox').change(function(){
if(this.checked){
$(this).next().next().show();
$('.drop').style.display="inline-block";
$('.drop').css("z-index","3");
}
else{
$('.drop').hide();
}
});
    
};
$(document).ready(main);

/*
}*/