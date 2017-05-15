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


                console.log(response);
                l.stop();
                $('#appendOffers').empty();
                $('#add-modal-offer-groups').modal('hide');
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

                delete data;
                var data = {items:[]};
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


function updateOffer(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/update-offer");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);


                console.log(response);
                l.stop();
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

                delete data
                var data = {items:[]};

                $('#editModal').modal('hide');
                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
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

function addGroup(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/add-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                    $('#modalAddGroup').modal('hide');
                    $('#groupName').val('');
                }else{
                    $('#groupName').focus();
                }


                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}


function editGroup(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/edit-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                    $('#modalEditGroup').modal('hide');
                    $('#editGroupName').val('');
                }else{
                    $('#editGroupName').focus();
                }


                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}

function deleteGroup(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/delete-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                }

                $('#modalDeleteGroup').modal('hide');

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ data);


    }
}


function searchOffer(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/search-offer");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                console.log(response);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                }

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}

function addOfferToGroup(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/add-offer-to-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                }
                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}


function showHideOffers(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/group-show-hide-offers");


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


        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}



function deleteOffers(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/group-delete");


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
                    $('#delete-modal').modal('hide');
                    showNotification('success', 'Success', 'Records Successfully Deleted')
                });
            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function applyOffers(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/apply-offers");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload(function () {
                    l.stop();
                    showNotification('success', 'Success', 'Offers Successfully Updated')
                });
            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}


function refreshOffers(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/refresh-offers");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload(function () {
                    l.stop();
                    showNotification('success', 'Success', 'Offers Successfully Updated')
                    $.each(response, function(i, val) {
                        showNotification('success', 'Success', val);
                    });

                });
            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }


        l.start();
        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}



function addPreset(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/add-preset");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                    $('#modalAddPreset').modal('hide');
                    $('#presetName').val('');
                    $('#presetKeyword').val('');
                }else{
                    $('#presetName').focus();
                }


                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}


function editPreset(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/edit-preset");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                    $('#modalEditPreset').modal('hide');
                    $('#editPresetName').val('');
                    $('#editPresetKeyword').val('');
                }else{
                    $('#editPresetName').focus();
                }


                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}


function deletePreset(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/offers/delete-preset");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                if(response['type'] == 'success'){
                    var oTable =  $('#datatable-responsive').DataTable();
                    oTable.ajax.reload();
                    $('#modalDeletePreset').modal('hide');
                }

                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '')
                l.stop();
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ data);


    }
}



function addPresets(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/settings/add-offer-url-presets");


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

        XMLHttpRequestObject.open("POST", "/tools/settings/edit-offer-url-presets");


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

        XMLHttpRequestObject.open("POST", "/tools/settings/delete-offer-url-presets");


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


function getEditOffer(data)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/get-edit-offer");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);

                var countriesOptions = '';
                $.each(response['countries'], function(i, val) {
                    if (typeof response['offer']['country'] !== 'undefined') {
                        if(response['offer']['country']['code'] == val['code']){
                            var selected = 'selected';
                        }else{
                            var selected = '';
                        }
                    }else{
                        var selected = '';
                    }
                    countriesOptions +=  '<option value="' + val['code'] + '"' + selected +'>' + val['name'] + '</option>'

                });

                var presetsOptions = '';
                $.each(response['presets'], function(i, val) {
                    if(response['preset'] == val['presets']){
                        var selected = 'selected';
                    }else{
                        var selected = '';
                    }
                    presetsOptions +=  '<option value="' + val['presets'] + '"' + selected +'>' + val['presetName'] + '</option>'
                });

                var networkOptions = '';
                $.each(response['networks']['affiliateNetworks'], function(i, val) {
                    if (response['offer']['affiliateNetwork']['id'] == val['id']) {
                            var selected = 'selected';
                    }else{
                        var selected = '';
                    }
                    networkOptions +=  '<option value="' + val['id'] + '"' + selected +'>' + val['name'] + '</option>'

                });

                if(response['offer']['payout']['type'] == 'MANUAL'){
                    var payout = response['offer']['payout']['value'];
                }else{
                    var payout = '';
                }


                $('#editOfferNameDisplay').html(response['offer']['namePostfix']);
                $('#displayEditOffer').html(
                    '<div class="col-md-12 col-sm-12">' +
                    '<input type="text" placeholder="Offer Name" class="form-control" id="editOfferName" value="' + response['offer']['namePostfix'] + '">' +
                    '</div><br><br><br>' +
                    '<div class="col-md-12 col-sm-12">' +
                    '<input type="text" placeholder="Offer Url" class="form-control" id="editOfferUrl" value="' + response['url'] + '">' +
                    '</div><br><br><br>' +
                    '<div class="col-md-3 col-sm-3 col-xs-3">' +
                    '<select class="form-control selectGeo" id="editOfferGeo">' +
                    '<option value="">Global</option>' +
                    countriesOptions +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-3 col-sm-3 col-xs-3">' +
                    '<select class="form-control selectNetwork" id="editOfferNetwork">' +
                    networkOptions +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-3 col-sm-3 col-xs-3">' +
                    '<input type="text" placeholder="Payout" class="form-control" id="editOfferPayout" value="' + payout + '">' +
                    '</div>' +
                    '<div class="col-md-3 col-sm-3 col-xs-3">' +
                    '<select class="form-control selectPreset" id="editOfferPresets" placeholder="Presets">' +
                    '<option value="">No Preset</option>' +
                    presetsOptions +
                    '</select>' +
                    '<input type="hidden" id="editOfferId" value="'+ response['offer']['id'] + '">' +
                    '</div>'
                );

                $(".selectGeo").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
                    width: null
                });



                $(".selectPreset").select2({
                    allowClear: true,
                    placeholder: 'Select Preset',
                    width: null
                });


                $(".selectNetwork").select2({
                    allowClear: true,
                    placeholder: 'Select Affiliate Network',
                    width: null
                });




            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        XMLHttpRequestObject.send("param= "+ data);


    }

    return false;
}


