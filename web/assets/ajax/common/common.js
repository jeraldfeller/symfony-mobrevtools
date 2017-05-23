var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getActiveCampaigns(bol, include)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/ajax/get-active-campaigns");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                $activeCampaigns =  response;
                $('#chooseCampaign').append($('<option>', {
                    value: 'All',
                    text: 'All'
                }));
                $.each($activeCampaigns, function(i, val) {
                    $('#chooseCampaign').append($('<option>', {
                        value: val.campaignId + '|' + val.campaignName + '|' + val.countryName + '|0|100000|0',
                        text: val.campaignName
                    }));
                });

                $("#chooseCampaign").select2({
                    placeholder: "Select Campaign",
                    allowClear: true,
                    width: null
                });

                localStorage.setItem("activeCampaigns", JSON.stringify(response));
                if(bol == 1){
                    getArchiveCampaigns('archived');
                }

            }

        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("param="+include);

    }

    return false;
}






function getArchiveCampaigns(include)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/ajax/get-active-campaigns");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                localStorage.setItem("archiveCampaigns", JSON.stringify(response));
                getImportedCampaigns()
            }

        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("param="+include);

    }

    return false;
}

function getImportedCampaigns()
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/ajax/get-imported-campaigns-label/all");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                localStorage.setItem("importedCampaigns", JSON.stringify(response));
            }

        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("param=x");

    }

    return false;
}