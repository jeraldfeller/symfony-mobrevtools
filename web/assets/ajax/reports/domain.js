var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function updateDomainCheck(data)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "update-domain-check");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload(function () {
                    showNotification('success', 'Success', 'Records Successfully Updated')
                });
            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');

            }
        }

        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}
