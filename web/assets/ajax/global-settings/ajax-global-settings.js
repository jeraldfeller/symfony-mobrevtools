
function updateApiAccessSettings(elem){

    var data = {items:[]};
    var object = {options: [], items:[]};
    $id = $(elem).closest("div").attr("id");

    $user = $('#user-'+$id).val();

    $password = $('#password-'+$id).val();

    $traffic = $('#traffic-'+$id).val();

    $tid = $('#tid-'+$id).val();

    $btn = elem;


    if($traffic == 'ExoClick'){
        if(data.items.length > 0){
            object.options.push({
                type: 'sub'
            });
            $.each(data.items, function(i, val) {
                if(typeof val != 'undefined'){
                    object.items.push({
                        token: $('#'+val['token']).val(),
                        ip: $('#'+val['ip']).val(),
                        user: $('#'+val['user']).val(),
                        password: $('#'+val['password']).val()
                    });
                }
            });
        }

    }

    //console.log($tid);
    updateApiAccess($btn, $tid, $traffic, $user, $password, object);

}


var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}


function updateApiAccess(btn, tid, traffic, user, password, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "update-access-action");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();
                showNotification('success', 'Success', response['trafficSource'] + ' credentials successfully updated!')

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }



        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param= " + tid + "|" + traffic + "|" + user + "|" + escapeHtml(password) + "|" + dataArray);



    }

    return false;
}

function trafficDelete(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "traffic-delete-action");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();
                $('#delete-modal').modal('hide');
                showNotification('success', 'Success', 'Traffic source successfully deleted!')
                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();

        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function apiGetTrafficSource()
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "traffic-get-action");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = XMLHttpRequestObject.responseText;
                $('#displayTrafficSourceContent').html(

                    '<table class="table table-striped table-bordered table-hover table-checkable order-column" id="modalCampaignTable">'
                    + '<thead>'
                    + '<tr>'
                    + '<th>'
                    + '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">'
                    + '<input type="checkbox" class="group-checkable" data-set="#modalCampaignTable .checkboxes" />'
                    + '<span></span>'
                    + '</label>'
                    + '</th>'
                    + '<th>Traffic source name</th>'
                    + '<th>Traffic source id</th>'

                    + '</tr>'
                    + '</thead>'

                    + '<tbody id="displayTrafficSourceTable">'


                   + '</tbody>'
                   + '</table>'
                );
               $('#displayTrafficSourceTable').html(response);

                var TableDatatablesManaged = function () {

                    var initTable2 = function () {

                        var table = $('#modalCampaignTable');

                        // begin first table
                        table.dataTable({
                            responsive: true,
                            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                            "language": {
                                "aria": {
                                    "sortAscending": ": activate to sort column ascending",
                                    "sortDescending": ": activate to sort column descending"
                                },
                                "emptyTable": "No data available in table",
                                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                                "infoEmpty": "No records found",
                                "infoFiltered": "(filtered1 from _MAX_ total records)",
                                "lengthMenu": "Show _MENU_",
                                "search": "Search:",
                                "zeroRecords": "No matching records found",
                                "paginate": {
                                    "previous":"Prev",
                                    "next": "Next",
                                    "last": "Last",
                                    "first": "First"
                                }
                            },

                            // Or you can use remote translation file
                            //"language": {
                            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                            //},

                            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                            // So when dropdowns used the scrollable div should be removed.
                            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

                            "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

                            "lengthMenu": [
                                [5, 15, 20, -1],
                                [5, 15, 20, "All"] // change per page values here
                            ],
                            // set the initial value
                            "pageLength": 5,
                            "pagingType": "bootstrap_full_number",
                            "columnDefs": [
                                {  // set default column settings
                                    'orderable': false,
                                    'targets': [0]
                                },
                                {
                                    "searchable": false,
                                    "targets": [0]
                                },
                                {
                                    "className": "dt-right"
                                    //"targets": [2]
                                }
                            ],
                            "order": [
                                [1, "asc"]
                            ] // set first column as a default sort by asc
                        });

                        var tableWrapper = jQuery('#sample_1_wrapper');

                        table.find('.group-checkable').change(function () {
                            var set = jQuery(this).attr("data-set");
                            var checked = jQuery(this).is(":checked");
                            jQuery(set).each(function () {
                                if (checked) {
                                    $(this).prop("checked", true);
                                    $(this).parents('tr').addClass("active");
                                } else {
                                    $(this).prop("checked", false);
                                    $(this).parents('tr').removeClass("active");
                                }
                            });
                        });

                        table.on('change', 'tbody tr .checkboxes', function () {
                            $(this).parents('tr').toggleClass("active");
                        });
                    }


                    return {

                        //main function to initiate the module
                        init: function () {
                            if (!jQuery().dataTable) {
                                return;
                            }

                            initTable2();
                        }

                    };

                }();
                if (App.isAngularJsApp() === false) {
                    jQuery(document).ready(function() {
                        TableDatatablesManaged.init();
                    });
                }

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("param=x");

    }

    return false;
}


function apiAddTraffic(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "add-trafficsource");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = XMLHttpRequestObject.responseText;
                showNotification('success', 'Success', 'Traffic source successfully imported!')


                var table =  $('#datatable-responsive').DataTable();
                table.ajax.reload();

                l.stop();
                $('#import-modal').modal('hide');

            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();
        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}

function escapeHtml(text) {
    var map = {
        '&': '|'
    };

    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}


function addPresets(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/settings/add-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();



                if(response == true){
                    showNotification('success', 'Success', 'Preset Successfully Added!')
                    $('#modalAddPreset').modal('hide');
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                }else{
                    showNotification('warning', 'Warning', 'Preset Already Exisits!')
                    $('#presetName').focus();
                }


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();

        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}

function editPresets(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/settings/edit-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();



                if(response == true){
                    showNotification('success', 'Success', 'Preset Successfully Updated!')
                    $('#modalEditPreset').modal('hide');
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                }else{
                    showNotification('error', '', '');
                    $('#presetName').focus();
                }


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();

        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function deletePresets(btn, presetId)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/settings/delete-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();



                if(response == true){
                    showNotification('success', 'Success', 'Preset Successfully Deleted!')
                    $('#modalDeletePreset').modal('hide');
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                }else{
                    showNotification('error', '', '');
                    $('#modalDeletePreset').modal('hide');
                }


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();


        XMLHttpRequestObject.send("param=" + presetId);

    }

    return false;
}

function addNetwork(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/settings/add-network");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();
                if(response == true){
                    showNotification('success', 'Success', 'Network Successfully Added!')
                    $('#modalAddNetwork').modal('hide');
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                }else{
                    showNotification('warning', 'Warning', 'Network Already Exisits!')
                    $('#affiliateNetworkName').focus();
                }


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();

        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function editNetwork(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/settings/edit-network");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();



                if(response == true){
                    showNotification('success', 'Success', 'Network Successfully Updated!')
                    $('#modalEditNetwork').modal('hide');
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                }else{
                    showNotification('error', '', '');
                    $('#presetName').focus();
                }


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();

        var dataArray = JSON.stringify(data);

        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}

function deleteNetwork(btn, presetId)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/settings/delete-network");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();



                if(response == true){
                    showNotification('success', 'Success', 'Network Successfully Deleted!')
                    $('#modalDeleteNetwork').modal('hide');
                    var table =  $('#datatable-responsive').DataTable();
                    table.ajax.reload();
                }else{
                    showNotification('error', '', '');
                    $('#modalDeleteNetwork').modal('hide');
                }


            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();


        XMLHttpRequestObject.send("param=" + presetId);

    }

    return false;
}


