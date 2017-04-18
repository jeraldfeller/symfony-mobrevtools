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



function addLanders(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/add-landers");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);


                $('#appendLanders').empty();
                console.log(response);
                l.stop();
                $('#offer-modal').modal('hide');

                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {
                        if(obj['error'] != 1){
                            console.log(obj['message']);
                            showNotification('success', 'Success', obj['message'])
                            delete data
                            var data = {items:[]};
                        }else{
                            console.log(obj['message']);
                            showNotification('error', '', '');delete data.items;
                            l.stop();
                            delete data
                            var data = {items:[]};
                        }
                    });
                });
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


function editLander(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/put-lander");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response =  $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);
                l.stop();
                $('#editModal').modal('hide');

                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {
                        if(obj['error'] != 1){
                            console.log(obj['message']);
                            showNotification('success', 'Success', obj['message'])
                            var table =  $('#datatable-responsive').DataTable();
                            table.ajax.reload();
                            l.stop();
                        }else{
                            console.log(obj['message']);
                            showNotification('error', '', '');delete data.items;
                            l.stop();
                        }
                    });
                });
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


function getEditLander(data)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/tools/get-edit-lander");


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
                $('#editLanderNameDisplay').html(response['offer']['namePostfix']);
                $('#displayEditLander').html(
                    '<div class="col-md-12 col-sm-12">' +
                    '<input type="text" placeholder="Lander Name" class="form-control" id="editLanderName" value="' + response['offer']['namePostfix'] + '">' +
                    '</div><br><br><br>' +
                    '<div class="col-md-12 col-sm-12">' +
                    '<input type="text" placeholder="Lander Url" class="form-control" id="editLanderUrl" value="' + response['url'] + '">' +
                    '</div><br><br><br>' +
                    '<div class="col-md-4 col-sm-6">' +
                    '<input type="text" placeholder="1 Offer" class="form-control" id="editLanderOffer" value="' + response['offer']['numberOfOffers'] + '">' +
                    '</div>' +
                    '<div class="col-md-4 col-sm-6">' +
                    '<select class="form-control" id="editLanderGeo">' +
                    '<option value="Global">Global</option>' +
                        countriesOptions +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-4 col-sm-6">' +
                    '<select class="form-control" id="editLanderPresets" placeholder="Presets">' +
                    '<option value="No Preset" >No Preset</option>' +
                        presetsOptions +
                    '</select>' +
                        '<input type="hidden" id="editLanderId" value="'+ response['offer']['id'] + '">' +
                    '</div>'
                );

                $("#editLanderGeo").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
                    width: null
                });

                $("#editLanderPresets").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
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
