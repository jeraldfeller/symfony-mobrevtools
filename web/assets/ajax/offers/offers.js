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


                $('#offerDetails').val('');
                console.log(response);
                l.stop();
                $('#offer-modal').modal('hide');

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


