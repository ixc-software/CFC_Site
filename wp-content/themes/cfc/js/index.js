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
    $("#d-news").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.OurTeam = function(){
    aboutUsClicked()
    $("#d-our-team").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.Contacts= function(){
    aboutUsClicked()
    $("#d-contacts").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.GetAppLink = function(){
    getCfcClicked()
    $("#d-get-app").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.Faqs = function(){
    supportClicked()
    $("#d-faq").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.GettingStart = function(){
    supportClicked()
    $("#d-getting-started").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.FeaturesAndFunctions = function(){
    supportClicked()
    $("#d-features").css('background-color','rgba(121,198,44,1)');
};
MenuClicked.prototype.CFCTarifs = function(){
    supportClicked()
    $("#d-cfc-tarrifs").css('background-color','rgba(121,198,44,1)');
};

menuClicked = new MenuClicked();



function showMenuFromPageId(id)
{
    var map = [];
   map[1581] = function(){};
    map[1910] = menuClicked.News;
    map[1810] = menuClicked.News;
    map[1438] = menuClicked.News;

    map[1873] = menuClicked.OurTeam;
    map[1622] = menuClicked.OurTeam;
    map[1860] = menuClicked.OurTeam;

    map[56] = menuClicked.Contacts;
    map[1501] = menuClicked.Contacts;
    map[1877] = menuClicked.Contacts;

    map[1632] = menuClicked.GetAppLink;

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

    if(!map[id]){
        menuClicked.News();
    }else{
        map[id]();
    }

}