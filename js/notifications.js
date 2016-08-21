/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function()
{
$("#notificationLink").click(function()
{
$("#friendContainer").hide();
$("#notificationContainer").fadeToggle(300);
$("#notification_count").fadeOut("slow");
return false;
});

//Document Click hiding the popup 
$(document).click(function()
{
$("#notificationContainer").hide();
});

//Popup on click
$("#notificationContainer").click(function()
{
e.stopPropagation();
});

});

$(document).ready(function()
{
$("#friendLink").click(function()
{
$("#notificationContainer").hide();
$("#friendContainer").fadeToggle(300);
$("#friend_count").fadeOut("slow");
return false;
});

//Document Click hiding the popup 
$(document).click(function()
{
$("#friendContainer").hide();

});

//Popup on click
$("#friendContainer").click(function()
{
e.stopPropagation();
});

});

$(document).ready(function()
{
    $('.dropdown-toggle').click(function() {
    $('.dropdown-menu').toggle();
  });
});
 