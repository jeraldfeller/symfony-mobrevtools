var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getReportConversions(btn, ref, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {


        XMLHttpRequestObject.open("POST", "clear-conversion-report");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');



        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                if(ref == 'conversions') {
                    var response = $.parseJSON(XMLHttpRequestObject.responseText);
                    if(response == true){

                        $('#progressDiv').css('width', '10%').attr('aria-valuenow', 10);
                        reportsConversionsFetchConversionsData(data, btn);
                    }else{
                        var table =  $('#datatable-responsive').DataTable();
                        table.ajax.reload();
                        showNotification('error', '', '');
                       // l.stop();
                    }

                }

            }else if(XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }


        $('#divProgress').css('display', 'block');
        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);
    }

    return false;
}
function reportsConversionsFetchConversionsData(data, btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "fetch-conversions");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                $('#progressDiv').css('width', '30%').attr('aria-valuenow', 30);
                reportsConversionsFetchIpData(data, btn)

            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                l.stop();
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                $('#divProgress').css('display', 'none');
                clearTmpFiles();

            }
        }




        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function reportsConversionsFetchIpData(data,  btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "fetch-ip-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                var isTrue = [];
                var campaignCount = response.campaign.length;
                for(var i = 0; i < response.campaign.length; i ++){
                    var split = response.campaign[i].split('|');
                    var campaignId = split[0];
                    var campaignName = split[1];
                    var country = split[2];
                    var offset = parseInt(split[3]);
                    var limit = parseInt(split[4]);
                    var totalRows = parseInt(split[5]);
                    var offsetDiff = totalRows - offset;
                    if(offsetDiff <= 0){
                        response.campaign[i] = campaignId + "|" + campaignName + "|" + country + "|" + offset + "|" + limit + "|" + totalRows;
                        isTrue.push(1);
                    }

                }


                if(isTrue.length == campaignCount){
                    $('#progressDiv').css('width', '50%').attr('aria-valuenow', 60);
                    reportsConversionsMergeIpAndConversionsData(btn);

                }else{
                    reportsConversionsFetchIpData(response,  btn)
                }

            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }




        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function reportsConversionsMergeIpAndConversionsData(btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "merge-ip-conversion-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                if(typeof response['errorMessage'] != 'undefined'){
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                    showNotification('error', '', '');
                    l.stop()
                    $('#divProgress').css('display', 'none');
                    clearTmpFiles();

                }else{
                    $('#progressDiv').css('width', '60%').attr('aria-valuenow', 70);
                    reportsConversionsMergeIpAndConversionsDataSecondPhase(btn);


                }


            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                l.stop
                showNotification('error', '', '');
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }




        XMLHttpRequestObject.send("param=x");

    }

    return false;
}

function reportsConversionsMergeIpAndConversionsDataSecondPhase(btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "merge-ip-conversion-data-second-phase");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                $('#progressDiv').css('width', '70%').attr('aria-valuenow', 80);
                reportsConversionsMergeIpAndConversionsDataThirdPhase(btn);
            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }




        XMLHttpRequestObject.send("param=x");

    }

    return false;
}


function reportsConversionsMergeIpAndConversionsDataThirdPhase(btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "merge-ip-conversion-data-third-phase");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#progressDiv').css('width', '80%').attr('aria-valuenow', 80);
                finalizeConversionReportFirstPhase(btn);
            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }





        XMLHttpRequestObject.send("param=x");

    }

    return false;
}

function finalizeConversionReportFirstPhase(btn)
{

    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "finalizing-first-phase");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#progressDiv').css('width', '85%').attr('aria-valuenow', 80);
                finalizeConversionReportSecondPhase(btn);
            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }





        XMLHttpRequestObject.send("param=x");

    }

    return false;
}


function finalizeConversionReportSecondPhase(btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "finalizing-second-phase");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#progressDiv').css('width', '90%').attr('aria-valuenow', 80);
                finalizeConversionReportThirdPhase(btn);
            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }





        XMLHttpRequestObject.send("param=x");

    }

    return false;
}


function finalizeConversionReportThirdPhase(btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "finalizing-third-phase");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#progressDiv').css('width', '95%').attr('aria-valuenow', 80);
                finalizeConversionReport(btn);
            }
            else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }





        XMLHttpRequestObject.send("param=x");

    }

    return false;
}


function finalizeConversionReport(btn)
{
    var l = Ladda.create(btn);

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "final-phase");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                if(jQuery.isEmptyObject(response) != true){

                    $('#totalVisits').empty();
                    $('#totalConversions').empty();
                    $('#totalRevenue').empty();
                    $('#totalCost').empty();
                    $('#totalProfit').empty();
                    $('#totalRoi').empty();
                    $('#selectFilterCampaign').empty();
                    $('#selectFilterGeo').empty();
                    $('#selectFilterIsp').empty();
                    $('#selectFilterMobileCarrier').empty();
                    $('#selectFilterConnectionType').empty();
                    $('#selectFilterIp').empty();
                    $('#totalVisits').text(response['visits']);
                    $('#totalConversions').text(response['conversions']);
                    $('#totalRevenue').text(response['revenue']);
                    $('#totalCost').text(response['cost']);
                    $('#totalProfit').text(response['profit']);
                    $('#totalRoi').text(response['roi']);
                    $('#selectFilterCampaign').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterGeo').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterMobileCarrier').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterIsp').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterConnectionType').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterIp').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $.each(response['campaignName'], function(i, val) {

                        $.each(val, function(x, campaign) {
                            $('#selectFilterCampaign').append($('<option>', {
                                value: campaign,
                                text: campaign
                            }));
                        });
                    });

                    $.each(response['geos'], function(i, val) {

                        $.each(val, function(x, geos) {
                            $('#selectFilterGeo').append($('<option>', {
                                value: geos,
                                text: geos
                            }));
                        });
                    });

                    $.each(response['mobileCarrier'], function(i, val) {

                        $.each(val, function(x, mobileCarrier) {
                            $('#selectFilterMobileCarrier').append($('<option>', {
                                value: mobileCarrier,
                                text: mobileCarrier
                            }));
                        });
                    });


                    $.each(response['isps'], function(i, val) {
                        $.each(val, function(x, isps) {
                            $('#selectFilterIsp').append($('<option>', {
                                value: isps,
                                text: isps
                            }));
                        });
                    });

                    $.each(response['connectionType'], function(i, val) {

                        $.each(val, function(x, connectionType) {
                            $('#selectFilterConnectionType').append($('<option>', {
                                value: connectionType,
                                text: connectionType
                            }));
                        });
                    });

                    $.each(response['ips'], function(i, val) {

                        $.each(val, function(x, ips) {
                            $('#selectFilterIp').append($('<option>', {
                                value: ips,
                                text: ips
                            }));
                        });
                    });

                }

                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload(function(){
                    table.fixedHeader.adjust();
                    table.fixedHeader.enable();
                    $('#divProgress').css('display', 'none');
                    showNotification('success', 'Success', 'Records Successfully Updated');

                });
                $('#progressDiv').css('width', '100%').attr('aria-valuenow', 100);
                l.stop();

            }else if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500 || XMLHttpRequestObject.status == 504){
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
                clearTmpFiles();
            }
        }

        XMLHttpRequestObject.send("param=x");

    }

    return false;
}


function clearTmpFiles(){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "clear-tmp-files");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }

        XMLHttpRequestObject.send("param=x");



    }
}

function getImportedDataReport(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {


        XMLHttpRequestObject.open("POST", "get-imported-data-report");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');



        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {

                var res = $.parseJSON(XMLHttpRequestObject.responseText);
                if(res['success'] == true){

                    $('#totalVisits').empty();
                    $('#totalVisits').empty();
                    $('#totalRevenue').empty();
                    $('#totalCost').empty();
                    $('#totalProfit').empty();
                    $('#totalRoi').empty();
                    $('#selectFilterCampaign').empty();
                    $('#selectFilterGeo').empty();
                    $('#selectFilterIsp').empty();
                    $('#selectFilterMobileCarrier').empty();
                    $('#selectFilterConnectionType').empty();
                    $('#selectFilterIp').empty();
                    $('#totalVisits').text(res['visits']);
                    $('#selectFilterCampaign').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterGeo').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterMobileCarrier').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterIsp').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterConnectionType').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $('#selectFilterIp').append($('<option>', {
                        value: '',
                        text: ''
                    }));
                    $.each(res['campaignName'], function(i, val) {

                        $.each(val, function(x, campaign) {
                            $('#selectFilterCampaign').append($('<option>', {
                                value: campaign,
                                text: campaign
                            }));
                        });
                    });

                    $.each(res['geos'], function(i, val) {

                        $.each(val, function(x, geos) {
                            $('#selectFilterGeo').append($('<option>', {
                                value: geos,
                                text: geos
                            }));
                        });
                    });

                    $.each(res['mobileCarrier'], function(i, val) {

                        $.each(val, function(x, mobileCarrier) {
                            $('#selectFilterMobileCarrier').append($('<option>', {
                                value: mobileCarrier,
                                text: mobileCarrier
                            }));
                        });
                    });


                    $.each(res['isps'], function(i, val) {
                        $.each(val, function(x, isps) {
                            $('#selectFilterIsp').append($('<option>', {
                                value: isps,
                                text: isps
                            }));
                        });
                    });

                    $.each(res['connectionType'], function(i, val) {

                        $.each(val, function(x, connectionType) {
                            $('#selectFilterConnectionType').append($('<option>', {
                                value: connectionType,
                                text: connectionType
                            }));
                        });
                    });

                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload(function(){
                        table.fixedHeader.adjust();
                        table.fixedHeader.enable();
                        $('#chooseCampaign').empty();
                        getImportedCampaigns();
                        $importedCampaigns =  JSON.parse(localStorage.getItem("importedCampaigns"));
                        $('#chooseCampaign').append($('<option>', {
                            value: 'All',
                            text: 'All'
                        }));
                        $.each($importedCampaigns, function(i, val) {
                            $('#chooseCampaign').append($('<option>', {
                                value: val.campaignId + '|' + val.campaignName,
                                text: val.campaignName
                            }));
                        });
                        showNotification('success', 'Success', res['message']);

                    });

                    l.stop();

                }
                else{
                    showNotification('success', 'Success', res['message']);
                }



            }else if(XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();
                showNotification('error', '', '');
                l.stop();
                $('#divProgress').css('display', 'none');
            }
        }

        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);
    }

    return false;
}

$("form#importFile").submit(function(event){

    //disable the default form submission
    event.preventDefault();
    event.stopPropagation();

    //grab all form data
    var formData = new FormData($(this)[0]);
    var l = Ladda.create($('#importSubmitBtn')[0]);
    l.start();
    $.ajax({
        url: 'import-file',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){

        },
        success: function(response){
            var res = $.parseJSON(response) ;
            l.stop()
            if(res['success'] == true){

                $('#totalVisits').empty();
                $('#totalVisits').empty();
                $('#totalRevenue').empty();
                $('#totalCost').empty();
                $('#totalProfit').empty();
                $('#totalRoi').empty();
                $('#selectFilterCampaign').empty();
                $('#selectFilterGeo').empty();
                $('#selectFilterIsp').empty();
                $('#selectFilterMobileCarrier').empty();
                $('#selectFilterConnectionType').empty();
                $('#selectFilterIp').empty();
                $('#totalVisits').text(res['visits']);
                $('#selectFilterCampaign').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterGeo').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterMobileCarrier').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterIsp').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterConnectionType').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterIp').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $.each(res['campaignName'], function(i, val) {

                    $.each(val, function(x, campaign) {
                        $('#selectFilterCampaign').append($('<option>', {
                            value: campaign,
                            text: campaign
                        }));
                    });
                });

                $.each(res['geos'], function(i, val) {

                    $.each(val, function(x, geos) {
                        $('#selectFilterGeo').append($('<option>', {
                            value: geos,
                            text: geos
                        }));
                    });
                });

                $.each(res['mobileCarrier'], function(i, val) {

                    $.each(val, function(x, mobileCarrier) {
                        $('#selectFilterMobileCarrier').append($('<option>', {
                            value: mobileCarrier,
                            text: mobileCarrier
                        }));
                    });
                });


                $.each(res['isps'], function(i, val) {
                    $.each(val, function(x, isps) {
                        $('#selectFilterIsp').append($('<option>', {
                            value: isps,
                            text: isps
                        }));
                    });
                });

                $.each(res['connectionType'], function(i, val) {

                    $.each(val, function(x, connectionType) {
                        $('#selectFilterConnectionType').append($('<option>', {
                            value: connectionType,
                            text: connectionType
                        }));
                    });
                });


                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload(function(){
                    table.fixedHeader.adjust();
                    table.fixedHeader.enable();
                    $('#chooseCampaign').empty();
                    getImportedCampaigns();
                    $importedCampaigns =  JSON.parse(localStorage.getItem("importedCampaigns"));
                    $('#chooseCampaign').append($('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    $.each($importedCampaigns, function(i, val) {
                        $('#chooseCampaign').append($('<option>', {
                            value: val.campaignId + '|' + val.campaignName,
                            text: val.campaignName
                        }));
                    });

                    showNotification('success', 'Success', res['message']);

                });

                $('.bs-example-modal-md').modal('hide');

            }
            else{
                showNotification('warning', 'Warning', res['message']);

            }

        },
        error: function(xhr, textStatus, errorThrown){
            showNotification('error', '', '');
            l.stop();
        }
    });

    return false;

});

$("form#importFileUpdate").submit(function(event){

    //disable the default form submission
    event.preventDefault();
    event.stopPropagation();

    //grab all form data
    var formData = new FormData($(this)[0]);
    var l = Ladda.create($('#importSubmitBtn')[0]);

    $.ajax({
        url: 'update-import-file',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            l.start();
        },
        success: function(response){
            var res = $.parseJSON(response) ;
            l.stop();
            if(res['success'] == true){

                $('#totalVisits').empty();
                $('#totalConversions').empty();
                $('#totalRevenue').empty();
                $('#totalCost').empty();
                $('#totalProfit').empty();
                $('#totalRoi').empty();
                $('#selectFilterCampaign').empty();
                $('#selectFilterGeo').empty();
                $('#selectFilterIsp').empty();
                $('#selectFilterMobileCarrier').empty();
                $('#selectFilterConnectionType').empty();
                $('#selectFilterIp').empty();
                $('#totalVisits').text(res['visits']);
                $('#selectFilterCampaign').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterGeo').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterMobileCarrier').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterIsp').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterConnectionType').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $('#selectFilterIp').append($('<option>', {
                    value: '',
                    text: ''
                }));
                $.each(res['campaignName'], function(i, val) {

                    $.each(val, function(x, campaign) {
                        $('#selectFilterCampaign').append($('<option>', {
                            value: campaign,
                            text: campaign
                        }));
                    });
                });

                $.each(res['geos'], function(i, val) {

                    $.each(val, function(x, geos) {
                        $('#selectFilterGeo').append($('<option>', {
                            value: geos,
                            text: geos
                        }));
                    });
                });

                $.each(res['mobileCarrier'], function(i, val) {

                    $.each(val, function(x, mobileCarrier) {
                        $('#selectFilterMobileCarrier').append($('<option>', {
                            value: mobileCarrier,
                            text: mobileCarrier
                        }));
                    });
                });


                $.each(res['isps'], function(i, val) {
                    $.each(val, function(x, isps) {
                        $('#selectFilterIsp').append($('<option>', {
                            value: isps,
                            text: isps
                        }));
                    });
                });

                $.each(res['connectionType'], function(i, val) {

                    $.each(val, function(x, connectionType) {
                        $('#selectFilterConnectionType').append($('<option>', {
                            value: connectionType,
                            text: connectionType
                        }));
                    });
                });


                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload(function(){
                    table.fixedHeader.adjust();
                    table.fixedHeader.enable();
                    $('#chooseCampaign').empty();
                    getImportedCampaigns();
                    $importedCampaigns =  JSON.parse(localStorage.getItem("importedCampaigns"));
                    $('#chooseCampaign').append($('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    $.each($importedCampaigns, function(i, val) {
                        $('#chooseCampaign').append($('<option>', {
                            value: val.campaignId + '|' + val.campaignName,
                            text: val.campaignName
                        }));
                    });

                    showNotification('success', 'Success', res['message']);
                });

                $('#modalDisplayLabelForUpdate').modal('hide');
                console.log(res);

            }
            else{
                showNotification('warning', 'Warning', res['message']);

            }

        },
        error: function(xhr, textStatus, errorThrown){
            showNotification('error', '', '');
            l.stop();
        }
    });

    return false;

});

function getLabels(modal, elemId){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/ajax/get-imported-campaigns-label/all");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                $(elemId).empty();
                $.each(response, function(i, val) {
                    $(elemId).append($('<option>', {
                        value: val['id'],
                        text: val['description']
                    }));
                });

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        $(modal).modal('show');
        XMLHttpRequestObject.send("param=x");



    }
}


function removeLabel(label, btn){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "delete-label");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();
                $('#modalDisplayLabelForDelete').modal('hide');
                $('#selectLabelToRemove').select2("val", "");
                showNotification('success', 'Success', 'Label Successfully Deleted');
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start()
        XMLHttpRequestObject.send("param="+ JSON.stringify(label));



    }
}


function saveData(data){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/reports/conversions/save-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification('success', 'Success', 'Data Successfully Saved');
                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
                App.unblockUI();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');

                App.unblockUI();
            }
        }


        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}



