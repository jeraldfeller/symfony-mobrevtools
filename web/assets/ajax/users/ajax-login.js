$("#loginBtn").click(function(){
    $data = {
        email: $('#_email').val(),
        password: $('#_password').val()
    }


    login($data, this);
});


var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}


function login(data, btn){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "login-action");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                if(response['success'] == false){
                    alert('Invalid Username or Password');
                }
                l.stop();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                pNotifyEvent(true, 'error', 'Something terrible happened, please try again later');
            }
        }


        l.start();
        XMLHttpRequestObject.send("param="+ JSON.stringify(data));


    }
}

function addUser(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/manage-users/add-user");


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
                    $('#modalAddUser').modal('hide');
                    $('#firstName').val('');
                    $('#lastName').val('');
                    $('#email').val('');
                    $('#password').val('');
                    $("input[type=checkbox]#enabled").bootstrapSwitch('state', false, true);
                }else{
                    $('#email').focus();
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

function editUser(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/manage-users/edit-user");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
                $('#modalEditUser').modal('hide');

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


function deleteUser(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/manage-users/delete-user");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification(response['type'], response['title'], response['message']);
                var oTable =  $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
                $('#modalDeleteUser').modal('hide');

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


function addGroup(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/manage-users/add-group");


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
                    $('#selectPages').multiSelect('deselect_all');
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

        XMLHttpRequestObject.open("POST", "/manage-users/edit-group");


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
                    $('#editSelectPages').multiSelect('deselect_all');
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

        XMLHttpRequestObject.open("POST", "/manage-users/delete-group");


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
                    $('#modalDeleteGroup').modal('hide');
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



