/**
 * Created by Alexeev on 05-Mar-15.
 */
function resetMenuColor(){
    $("#about-us").css('background-color','');
    $("#home").css('background-color','');
    $("#get-cfc").css('background-color','');
    $("#support").css('background-color','');
    $(".submenu").hide();
}
var display_type = 'block';
function aboutUsClicked()
{
    resetMenuColor();
    $("#about-us").css('background-color','rgb(52,152,219)');
    $("#submenu-about-us")
        .fadeIn('slow')
        .css('display', display_type);

}
function getCfcClicked()
{
    resetMenuColor();
    $("#get-cfc").css('background-color','rgb(52,152,219)');
    $("#submenu-get-cfc")
        .fadeIn('slow')
        .css('display', display_type);
}
function supportClicked()
{
    resetMenuColor();
    $("#support").css('background-color','rgb(52,152,219)');
    $("#submenu-support")
        .fadeIn('slow')
        .css('display', display_type);
}
