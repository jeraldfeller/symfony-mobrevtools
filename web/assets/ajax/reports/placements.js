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

function executePlacementSearch(data){
	if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/reports/placements/initialize");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
				
					getCampaigns(data, 0);
				
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        XMLHttpRequestObject.send("param=x");


    }

    return false;
}


function getCampaigns(data, index){
	if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/reports/placements/get-campaigns");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
				console.log(response);
				if(response['hasNext'] == true){
					App.blockUI({ message: '<h2><i class="fa fa-spinner fa-spin"></i> Processing ' + response['trafficSource']['trafficName'] +' ...</h2>' });
					getCampaigns(data, response['nextIndex']);
				}else{
					showNotification('success', 'Success', 'Search Complete');
					var oTable = $('#datatable-responsive').DataTable();
					oTable.ajax.reload();
					App.unblockUI();
				}
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
				App.unblockUI();
            }
        }

		
		data['index'] = index;
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function saveData(data){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/reports/ip/save-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification('success', 'Success', 'Data Successfully Saved');
                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}
