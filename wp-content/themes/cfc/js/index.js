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





function MenuClicked() {}
MenuClicked.prototype.News = function(){
    aboutUsClicked()
    $("#news-hheader-div")
};
MenuClicked.prototype.OurTeam = function(){
    aboutUsClicked()
};
MenuClicked.prototype.Contacts= function(){
    aboutUsClicked()
};
MenuClicked.prototype.GetAppLink = function(){
    getCfcClicked()
};
MenuClicked.prototype.Faqs = function(){
    supportClicked()
};
MenuClicked.prototype.GettingStart = function(){
    supportClicked()
};
MenuClicked.prototype.FeaturesAndFunctions = function(){
    supportClicked()
};
MenuClicked.prototype.CFCTarifs = function(){
    supportClicked()
};

menuClicked = new MenuClicked();



function showMenuFromPageId(id)
{
    var map = [];
    map[1910] = menuClicked.News;
    map[1810] = menuClicked.News;
    map[1438] = menuClicked.News;

    map[1873] = menuClicked.OurTeam;
    map[1622] = menuClicked.OurTeam;
    map[1860] = menuClicked.OurTeam;

    map[56] = menuClicked.Contacts;
    map[1501] = menuClicked.Contacts;
    map[1877] = menuClicked.Contacts;

    map[1632] = menuClicked.News;

    map[32] = menuClicked.Faqs;
    map[1879] = menuClicked.Faqs;
    map[1865] = menuClicked.Faqs;

    map[6] = menuClicked.GettingStart;
    map[1412] = menuClicked.GettingStart;
    map[1874] = menuClicked.GettingStart;

    map[1881] = menuClicked.FeaturesAndFunctions;
    map[1867] = menuClicked.FeaturesAndFunctions;
    map[22] = menuClicked.FeaturesAndFunctions;

    map[1779]= menuClicked.CFCTarifs;

    map[id]();
}