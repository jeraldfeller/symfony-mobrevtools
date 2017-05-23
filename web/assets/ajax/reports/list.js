var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function deleteData(data){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/list-reports/delete-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification('success', 'Success', 'Data Successfully Deleted');
                if(response == 'list'){
                    var oTable = $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                }else if(response == 'ip'){
                    var oTableIp = $('#datatable-responsive-ip').DataTable();
                    oTableIp.ajax.reload();
                }else if(response == 'conversions'){
                    var oTableIp = $('#datatable-responsive-conv').DataTable();
                    oTableIp.ajax.reload();
                }

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}