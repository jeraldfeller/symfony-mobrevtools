/**
 * Created by Grabe Grabe on 2/9/2017.
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

function getWithTrafficCampaigns(bol, include)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/monitoring/get-campaign-traffic-settings");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                $response =  response;
                $.each($response, function(i, val) {
                    $('#displayTrafficMonitoringSettingsContainer').append(
                        '<tr>' +
                        '<td>' + val.campaignName + '</td>' +
                        '<td> <input type="number" class="form-control camp-record" value="' + val.visitCount + '" data-campid="' + val.campaignId + '"> </td>' +
                        '</tr>'
                    );
                });


            }

        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("param="+include);

    }

    return false;
}

function updateTrafficMonitoringGlobalSettings(isActive)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "update-traffic-monitoring-global-settings");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

            }else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                showNotification('error', '', '');

            }

        }



        XMLHttpRequestObject.send("param="+ isActive);

    }

    return false;
}

function updateTrafficMonitoringSettings(data, btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "update-traffic-monitoring-settings");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                l.stop();
                showNotification('success', 'Success', 'Settings successfully updated')
                $('#modalDisplayTrafficMonitoringSettings').modal('hide');
            }else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                showNotification('error', '', '');
                l.stop();
                $('#modalDisplayTrafficMonitoringSettings').modal('hide');
            }

        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));

    }

    return false;
}

function updateTrafficMonitoringNotificationSettings(data)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/monitoring/update-traffic-monitoring-notification-settings");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);

                showNotification('success', 'Success', 'Settings successfully updated')
            }else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                showNotification('error', '', '');


            }

        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));

    }

    return false;
}


function getTrafficSourceTrafficMonitoringFilter()
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "get-traffic-source-monitoring-reports-filter");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                console.log(response);
                $response =  response;
                $('#selectFilterTrafficSource').empty();
                $('#selectFilterTrafficSource').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $.each($response['trafficSource'], function(i, val) {
                    $('#selectFilterTrafficSource').append($('<option>', {
                        value: val.trafficSourceName,
                        text:val.trafficSourceName
                    }));
                });

                $('#selectFilterCampaign').empty();
                $('#selectFilterCampaign').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $.each($response['campaigns'], function(i, val) {
                    $('#selectFilterCampaign').append($('<option>', {
                        value: val.campaignName,
                        text:val.campaignName
                    }));
                });


                $('#selectFilterPlacement').empty();
                $('#selectFilterPlacement').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $.each($response['placements'], function(i, val) {
                    $('#selectFilterPlacement').append($('<option>', {
                        value: val.placement,
                        text:val.placement
                    }));
                });

                $('#selectFilterGeo').empty();
                $('#selectFilterGeo').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $.each($response['geos'], function(i, val) {
                    $('#selectFilterGeo').append($('<option>', {
                        value: val.geo,
                        text:val.geo
                    }));
                });


            }

        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("param=x");

    }

    return false;
}

