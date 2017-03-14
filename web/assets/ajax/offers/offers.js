/**
 * Created by Grabe Grabe on 10/27/2016.
 */
var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}



function addOffers(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/add-offers");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);


                $('#offerDetails').val('');
                console.log(response);
                l.stop();
                $('#offer-modal').modal('hide');

                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {
                        if(obj['error'] != 1){
                            console.log(obj['message']);
                            showNotification('success', 'Success', obj['message'])
                        }else{
                            console.log(obj['message']);
                            showNotification('error', '', '');
                            l.stop();
                        }
                    });
                });
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}
