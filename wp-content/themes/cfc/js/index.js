/**
 * Created by Alexeev on 05-Mar-15.
 */


var clickedState = 0;
function resetMenuColor(element){

   // console.log(element);
   // if(clickedState!=element) {
        $(".submenu").hide();
        $("#about-us").css('background-color', '');
        $("#home").css('background-color', '');
        $("#get-cfc").css('background-color', '');
        $("#support").css('background-color', '');

   // }
}
var display_type = 'block';
function aboutUsClicked()
{
    clickedState=1;
    //console.log("~"+1);
    resetMenuColor();
    $("#about-us").css('background-color','rgb(52,152,219)');
    $("#submenu-about-us")
        .fadeIn('slow')
        .css('display', display_type);

}
function getCfcClicked()
{
   // console.log("~"+2);
    clickedState=2;
    resetMenuColor();
    $("#get-cfc").css('background-color','rgb(52,152,219)');
    $("#submenu-get-cfc")
        .fadeIn('slow')
        .css('display', display_type);
}
function supportClicked()
{
   // console.log("~"+3);
    clickedState=3;
    resetMenuColor();
    $("#support").css('background-color','rgb(52,152,219)');
    $("#submenu-support")
        .fadeIn('slow')
        .css('display', display_type);
}
