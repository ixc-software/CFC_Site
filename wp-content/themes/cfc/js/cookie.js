/**
 * Created by Alexeev on 09-Mar-15.
 */
function setCookie(cname, cvalue, exdays) {


    var cookieName = cname;
    var cookieValue = cvalue;
    var myDate = new Date();
    myDate.setMonth(myDate.getMonth() + 12);
    document.cookie = cookieName +"=" + cookieValue + ";expires=" + myDate
    + ";domain=.presta.com;path=/;";
  
}



function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}