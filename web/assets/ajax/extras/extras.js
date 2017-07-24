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



function compileIp(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/execute-compile-ip");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);


                $('#ipList').empty();
                l.stop();
                $('#modalIpCompile').modal('hide');

                var oTable16 =  $('#datatable-responsive-16').DataTable();
                var oTable24 =  $('#datatable-responsive-24').DataTable();
                oTable16.ajax.reload();
                oTable24.ajax.reload();

                showNotification('success', 'Success', 'Ip Successfully Compiled')
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function getAdplexityReport(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/get-adplexity-report");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);
				var oTable =  $('#datatable-responsive').DataTable();
				oTable.ajax.reload();
                l.stop();
                App.unblockUI();
				
                showNotification('success', 'Success', 'Report Successfully Imported')
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
                App.unblockUI();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function getAdplexityReportForMulti(btn, data)
{
    $dfd = $.Deferred();
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/get-adplexity-report-for-multi");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
                l.stop();
                App.unblockUI();

                showNotification('success', 'Success', 'Report Successfully Imported')
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
                App.unblockUI();
            }



            $dfd.resolve();
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return $dfd.promise();
}

function saveAdplexitySettings(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/save-adplexity-settings");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);

                getAdplexityReport(btn, data);
                showNotification('success', 'Success', 'Settings saved!')
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}


function executeAutomatedAdpexitySettings(btn, data)
{

    var l = Ladda.create(btn);
    $count = data['preset'].length;

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/execute-multiple-adplexity-settings");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText.replace('""', ''));

                if(response['success'] == true){

                    $col = 'col-lg-12 col-md-12';
                    if($count > 1){
                        $col = 'col-lg-6 col-md-6';
                    }
                    if(response['hasNext'] == true) {
                        $('#progress-label').html(response["data"]["label"]);
                        getAdplexityReportForMulti(btn, response['data']).done(function () {


                        $tableHtml = '<div class="'+$col+'">' +
                            '<div class="portlet light">' +
                            '<div class="portlet-title">' +
                            '<div class="caption font-green-sharp">' +
                            '<i class="fa fa-table font-green-sharp"></i>' +
                            '<span class="caption-subject bold uppercase">'+response["data"]["label"]+'</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="portlet-body">' +
                            '<div class="row">' +
                            '<div class="col-md-12">' +
                            '<table class="table table-striped table-bordered table-hover dt-responsive" style="width: 100%;" id="datatable-responsive-'+response["index"]+'">' +
                            '<thead>' +
                            '<tr>' +
                            '<th>Domain</th>' +
                            '<th>Count</th>' +
                            '<th>Aggregate Name</th>' +
                            '<th>View</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>' +
                            '</tbody>' +
                            '</table>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';


                            var fixedHeaderOffset = 0;
                            if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
                                if ($('.page-header').hasClass('page-header-fixed-mobile')) {
                                    fixedHeaderOffset = $('.page-header').outerHeight(true);
                                }
                            } else if ($('.page-header').hasClass('navbar-fixed-top')) {
                                fixedHeaderOffset = $('.page-header').outerHeight(true);
                            } else if ($('body').hasClass('page-header-fixed')) {
                                fixedHeaderOffset = 64; // admin 5 fixed height
                            }



                            $('#resultContainer').append(
                                $tableHtml
                            );

                            setTimeout(function(){
                                console.log($('#datatable-responsive-'+response["index"]));
                                var oTable = $('#datatable-responsive-'+response["index"]).DataTable({
                                    fixedHeader: {
                                        header: true,
                                        headerOffset: fixedHeaderOffset
                                    },
                                    "ajax": '/data_table_tmp_files/adplexity/report-automated-'+response['data']['label']+'.txt',
                                    responsive: {
                                        details: {}
                                    },
                                    "iDisplayLength": 20,
                                    "lengthMenu": [
                                        [20, 500, 1000, -1],
                                        [20, 500, 1000, "All"] // change per page values here
                                    ],
                                    "order": [[ 1, "desc" ]],
                                    "columnDefs": [
                                        {"width": "40%", "targets": 0},
                                        {"width": "10%", "targets": 1},
                                        {"width": "40%", "targets": 2}
                                    ],
                                    select: {
                                        style: 'os',
                                        selector: 'td:first-child'
                                    },
                                    //dom: '<"wrapper"lBfrtip>',
                                    //dom: '<lB<frt>ip>',
                                    "dom": "<'row' <'col-md-12'>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

                                });

                            }, 200);

                            if (response['hasNext'] == true) {
                                executeAutomatedAdpexitySettings(btn, response['presets']);
                            } else {
                                showNotification('success', 'Success', 'Report Successfully Imported')
                            }


                        });
                    }else{
                        showNotification('success', 'Success', 'Report Successfully Imported')
                        App.unblockUI();
                    }


                }

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}


function addAdplexityPresets(btn, data, oTable)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/add-adplexity-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);
                if(response['success'] == true){
                    showNotification('success', 'Success', 'Settings saved!');
                    $('#modalAddPreset').modal('hide');
                }else{
                    showNotification('warning', 'Warning', response['message']);
                }


                oTable.ajax.reload();

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function editAdplexityPresets(btn, data, oTable)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/edit-adplexity-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);
                if(response['success'] == true){
                    showNotification('success', 'Success', 'Settings saved!');
                    $('#modalEditPreset').modal('hide');
                }else{
                    showNotification('warning', 'Warning', response['message']);
                }


                oTable.ajax.reload();

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function deleteAdplexityPresets(btn, data, oTable)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/extras/delete-adplexity-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);
                if(response['success'] == true){
                    showNotification('success', 'Success', 'Preset Successfully Removed!');
                    $('#modalDeletePreset').modal('hide');
                }else{
                    showNotification('warning', 'Warning', response['message']);
                }


                oTable.ajax.reload();

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+data);


    }

    return false;
}
