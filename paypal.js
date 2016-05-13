$(function () {
    function decodeMultiEscapedEmail(email) {
        if (!email) {
            return email;
        }

        while (email.indexOf('@') < 0) {
            email = decodeURIComponent(email);
        }
        return email;
    }

    // Return URL's
    var PayPalReturnURL = 'http://cfc.io/pay/?action=success';
    var PayPalCancelReturnURL = 'http://cfc.io/pay/?action=cancel';
//  var PayPalNotifyURL = 'http://paypalcfcsitesandbox.cfc.io/paypalApproving';
    var PayPalNotifyURL = 'http://paypalcfcsite.cfc.io/paypalApproving';

    // Helper for simple work with URL GET params
    var tmp = new Array();
    var tmp2 = new Array();
    var param = new Array();
    var get = window.location.search;
    if (get != '') {
        tmp = (get.substr(1)).split('&');
        for (var i = 0; i < tmp.length; i++) {
            tmp2 = tmp[i].split('=');
            param[tmp2[0]] = tmp2[1];
        }
    }

    // Formatted GET-parameters
    var email = decodeMultiEscapedEmail(param['email']);
    var amount = parseInt(param['amount']);
    var DeviceType = decodeURIComponent(param['DeviceType']);
    var error = 1, email_input, amount_type_input;

    // Check GET parameters
    if (!param['email']) {
        error = 1;

        email_input = '<h1 style="color:red;">You need to enter your email!</h1><p>Email: <input type="text" name="email" value=""/></p>';

        if (!param['amount'] || param['amount'] < 5) amount_type_input = '<h1 style="color:red;">You need to enter amount!</h1><p>Amount: <input type="number" min="5" name="amount" value=""/></p>';
        else amount_type_input = '<input type="hidden" name="amount" value="' + amount + '"/>';

    } else if (!param['amount'] || param['amount'] < 5) {
        error = 1;

        if (!param['email']) email_input = '<h1 style="color:red;">You need to enter your email!</h1><p>Email: <input type="text" name="email" value=""/></p>';
        else email_input = '<input type="hidden" name="email" value="' + email + '"/>';

        amount_type_input = '<h1 style="color:red;">You need to enter amount!</h1><p>Amount: <input type="number" min="5" name="amount" value=""/></p>';

    } else error = 0;

    if (error == 1) {

        $('div#result_block').html('<form method="get" action="http://cfc.io/pay/">' + email_input + amount_type_input + '<p><button type="submit">Go to Pay Page</button></p>');
    }

    // Check return URL's
    if (param['action'] === 'success') {
        $('div#result_block').html('<h1 style="color:green;">Congratulations, you order paid success!</h1><a href="/">Back</a>');
    } else if (param['action'] === 'cancel') {
        $('div#result_block').html('<h1 style="color:grey;">You have canceled you order. Maybe you want try again?</h1><a href="/">Back</a>');
    }

    // Check DeviceType, if exist send to custom field
    if (!param['DeviceType']) var dt = '';
    else var dt = ',' + DeviceType;

    // Cestom field for PayPal notify
    var custom_field = email + ',' + amount + dt;

    // production - KDKPWTPGYG9VN
    // sandbox - T3JG9KX9859EG
    // PayPal buttom
    var pbox = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="buy_paypal_form"><input type="hidden" name="cmd" value="_xclick"><input type="hidden" name="business" value="KDKPWTPGYG9VN"><input type="hidden" name="lc" value="US"><input type="hidden" name="item_name" value="CFC custom order"><input type="hidden" name="item_number" value="001"><input type="hidden" name="amount" value="' + amount + '.00"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="custom" value="' + custom_field + '"><input type="hidden" name="button_subtype" value="services"><input type="hidden" name="tax_rate" value="0.000"><input type="hidden" name="shipping" value="0.00"><input type="hidden" name="return" value="' + PayPalReturnURL + '"><input type="hidden" name="cancel_return" value="' + PayPalCancelReturnURL + '"><input type="hidden" name="notify_url" value="' + PayPalNotifyURL + '"><input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted"><input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>';

    // Insert info into page
    if (error == 0) {
        $('p#pay_block').html(pbox);
        $('span#price_place').text('. You need to pay - ' + amount + '$');
        $('span#email_place').text(email);
    }

});
