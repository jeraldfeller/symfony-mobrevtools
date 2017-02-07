$("#loginBtn").click(function(){
    $data = {
        email: $('#_email').val(),
        password: $('#_password').val()
    }


    login($data, this);
});


var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}


function login(data, btn){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "login-action");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                if(response['success'] == false){
                    alert('Invalid Username or Password');
                }
                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                pNotifyEvent(true, 'error', 'Something terrible happened, please try again later');
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}


