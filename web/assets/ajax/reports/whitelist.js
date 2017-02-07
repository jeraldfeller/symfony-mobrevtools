var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getWhitelistReport(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "get-whitelist-report");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload(function () {
                    l.stop();
                    showNotification('success', 'Success', 'Records Successfully Updated')
                });
            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }

        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}
