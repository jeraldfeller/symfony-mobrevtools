var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function apiGetCampaign(data)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/get-api-campaigns");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = XMLHttpRequestObject.responseText;
                $('#selectCampaign').html(response);
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();


        XMLHttpRequestObject.send("data="+ JSON.stringify(data));

    }

    return false;
}


function apiAddCampaign(btn, tid, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/import-campaigns");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = XMLHttpRequestObject.responseText;
                getCampaignForSelect(tid);
                showNotification('success', 'Success', 'Campaigns Successfully Imported');

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


function addCampaignGroup(btn, cid, gid, verId, geo)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-campaign-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var addCampaignGroupResponse = $.parseJSON(XMLHttpRequestObject.responseText);
                $.each(addCampaignGroupResponse, function(i, val) {
                    $.each(val, function(x, obj) {
                        if(obj['error'] != true){
                            $('#campaignTitleName').html(obj['elements']['campaign']['name']);
                            $('#campaignGroupId').val(obj['elements']['campaign']['cgid']);
                            $('#campaignId').val(obj['elements']['campaign']['cid']);
                            $('#deleteCampaignBtn').attr('disabled', false);

                            $('#appendRuleSetBotBtn').attr('disabled', false);
                            $('#appendRuleSetBlacklistBtn').attr('disabled', false);
                            $('#appendRuleSetIpBtn').attr('disabled', false);

                            $('#botRadioOption1').attr('disabled', false);
                            $('#botRadioOption2').attr('disabled', false);
                            $('#botRulesValue1').attr('disabled', false);
                            $('#botRulesValue2').attr('disabled', false);
                            $('#botRulesVisit1').attr('disabled', false);
                            $('#botRulesVisit2').attr('disabled', false);
                            $('#botRulesDatePicker').attr('disabled', false);
                            $('#botRulesTimePicker').attr('disabled', false);
                            $('#botRulesFrequency').attr('disabled', false);
                            $('#chooseTimeFormat1').attr('disabled', false);
                            $('#chooseTimeFormat2').attr('disabled', false);
                            $('#botRulesSubmitBtn').attr('disabled', false);
                            $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('disabled', false, true)


                            $("input[type=checkbox]#blacklist-active-switch").bootstrapSwitch('disabled', false, true);
                            $('#blacklistRadioOption1').attr('disabled', false);
                            $('#blacklistRadioOption2').attr('disabled', false);
                            $('#blacklistCheckBoxVisits').attr('disabled', false);
                            $('#blacklistVisits1').attr('disabled', false);
                            $('#blacklistCheckBoxCost').attr('disabled', false);
                            $('#blacklistCost1').attr('disabled', false);
                            $('#blacklistCheckBoxConv').attr('disabled', false);
                            $('#blacklistConv1').attr('disabled', false);
                            $('#blacklistCheckBoxCTR').attr('disabled', false);
                            $('#blacklistCTR1').attr('disabled', false);
                            $('#blacklistCheckBoxROI').attr('disabled', false);
                            $('#blacklistROI1').attr('disabled', false);
                            $('#blacklistDatePicker').attr('disabled', false);
                            $('#blacklistTimePicker').attr('disabled', false);
                            $('#blacklistFrequency').attr('disabled', false);
                            $('#blacklistChooseTimeFormat1').attr('disabled', false);
                            $('#blacklistChooseTimeFormat2').attr('disabled', false);
                            $('#blacklistSubmitBtn').attr('disabled', false);

                            $("input[type=checkbox]#ip-active-switch").bootstrapSwitch('disabled', false, true);
                            $('#ipRulesFrequency').attr('disabled', false);
                            $('#ipChooseTimeFormat1').attr('disabled', false);
                            $('#ipChooseTimeFormat2').attr('disabled', false);
                            $('#ipRulesSubmitBtn').attr('disabled', false);



                            showNotification('success', 'Success', 'Campaign Saved');

                        }else{
                            showNotification('success', 'Success', 'Campaign Updated');
                            console.log(obj['message']);
                        }
                    });
                });


                l.stop();

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
                l.stop();
            }
        }



        l.start();


        XMLHttpRequestObject.send("param= "+ cid + "," + gid + "," + verId + "," + geo);



    }

    return false;
}


function deleteCampaignGroup(btn, cid, traffic)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/delete-campaign-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var deleteCampaignGroupResponse = $.parseJSON(XMLHttpRequestObject.responseText);
                $.each(deleteCampaignGroupResponse, function(i, val) {
                    $.each(val, function(x, obj) {
                        if(obj['error'] != true){
                            console.log(obj['elements'])


                            $("#selectCampaign").val("").trigger("change");
                            $("#selectAddGroup").val("").trigger("change");
                            $("#selectAddVertical").val("").trigger("change");

                            $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('disabled', true, true)

                            $('#botRadioOption1').attr('disabled', true);
                            $('#botRadioOption2').attr('disabled', true);
                            $('#botRulesValue1').attr('disabled', true);
                            $('#botRulesValue2').attr('disabled', true);
                            $('#botRulesVisit1').attr('disabled', true);
                            $('#botRulesVisit2').attr('disabled', true);
                            $('#botRulesDatePicker').attr('disabled', true);
                            $('#botRulesTimePicker').attr('disabled', true);
                            $('#botRulesFrequency').attr('disabled', true);
                            $('#chooseTimeFormat1').attr('disabled', true);
                            $('#chooseTimeFormat2').attr('disabled', true);
                            $('#botRulesSubmitBtn').attr('disabled', true);
                            $('#botRadioOption1').attr('disabled', false);
                            $('#botRadioOption2').attr('disabled', false);
                            $('#botRulesValue1').attr('disabled', false);
                            $('#botRulesValue2').attr('disabled', false);
                            $('#botRulesVisit1').attr('disabled', false);
                            $('#botRulesVisit2').attr('disabled', false);

                            $('#delete-modal').modal('hide');
                            $('#campaignTitleName').html('Campaign Name');
                            $("#botRadioOption2").prop("checked", true);
                            $('#botRulesVisit1').val('');
                            $('#botRulesValue1').val('');
                            $('#botRulesVisit2').val('');
                            $('#botRulesValue2').val('');

                            $('#botRulesFrequency').val('');

                            $('#botRulesTimePicker').val('00:00');
                            $('#botRulesDatePicker').val(formatDateFromYMD(Date.now()));

                            getCampaignForSelect(traffic);
                            showNotification('success', 'Success', 'Campaign Deleted')


                        }else{
                            console.log(obj['message']);
                        }
                    });
                });


                l.stop();

            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '')
            }
        }



        l.start();
        console.log(cid);

        XMLHttpRequestObject.send("param= "+ cid);



    }

    return false;
}

function getCampaignForSelect(tid) {

    if (XMLHttpRequestObject) {

        XMLHttpRequestObject.open("POST", "/campaign/get-campaigns/"+tid);


        XMLHttpRequestObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function () {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {

                var returnedData = XMLHttpRequestObject.responseText;
                var element_id = document.getElementById('selectCampaign');
                element_id.innerHTML = returnedData;

            }
        }

        XMLHttpRequestObject.send("param=" + tid);

    }
    return false;

}


function addGroup(btn, group)
{

    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var addGroupResponse = $.parseJSON(XMLHttpRequestObject.responseText);
                $.each(addGroupResponse, function(i, val) {
                    $.each(val, function(x, item) {
                        if(item['error'] == true){
                            showNotification('warning', 'Warning', ' ' +group+ ' already exists');
                        }else{
                            showNotification('success', 'Success', ' ' +group+ ' succesfully added');
                        }
                    });
                });

                l.stop();
                getGroups();






            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        if(group != ''){


            l.start();
            XMLHttpRequestObject.send("param=" + group);
        }


    }

    return false;
}


function getGroups() {

    if (XMLHttpRequestObject) {

        XMLHttpRequestObject.open("POST", "/campaign/get-groups");


        XMLHttpRequestObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function () {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
                var returnedData = XMLHttpRequestObject.responseText;
                var element_id = document.getElementById('selectAddGroup');
                var selectRemoveGroup = document.getElementById('selectRemoveGroup');
                element_id.innerHTML = returnedData;
                selectRemoveGroup.innerHTML = returnedData;




            }
        }

        XMLHttpRequestObject.send("param=x");

    }
    return false;

}

function deleteGroup(btn, group)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/delete-group");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var addGroupResponse = $.parseJSON(XMLHttpRequestObject.responseText);
                $.each(addGroupResponse, function(i, val) {
                    $.each(val, function(x, item) {
                        if(item['error'] == false) {
                            showNotification('success', 'Success', 'Group Deleted');
                        }else{
                            console.log(item['message']);
                            showNotification('warning', 'Warning', item['message']);
                        }
                    });
                });

                getGroups();

                l.stop();


            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }



        if(group != ''){
            l.start();
            XMLHttpRequestObject.send("param=" + group);
        }


    }

    return false;
}

function addVertical(btn, vertical)
{

    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-vertical");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var addGroupResponse = $.parseJSON(XMLHttpRequestObject.responseText);
                $.each(addGroupResponse, function(i, val) {
                    $.each(val, function(x, item) {
                        if(item['error'] == true){
                            showNotification('warning', 'Warning', ' ' +vertical+ ' already exists');
                        }else{
                            showNotification('success', 'Success', ' ' +vertical+ ' succesfully added');
                        }
                    });
                });

                l.stop();
                getVerticals();






            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        if(vertical != ''){


            l.start();
            XMLHttpRequestObject.send("param=" + vertical);
        }


    }

    return false;
}


function getVerticals() {

    if (XMLHttpRequestObject) {

        XMLHttpRequestObject.open("POST", "/campaign/get-verticals");


        XMLHttpRequestObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function () {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
                var returnedData = XMLHttpRequestObject.responseText;
                var element_id = document.getElementById('selectAddVertical');
                var selectRemoveVertical = document.getElementById('selectRemoveVertical');
                element_id.innerHTML = returnedData;
                selectRemoveVertical.innerHTML = returnedData;




            }
        }

        XMLHttpRequestObject.send("param=x");

    }
    return false;

}


function deleteVertical(btn, vertical)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/delete-vertical");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var addGroupResponse = $.parseJSON(XMLHttpRequestObject.responseText);
                $.each(addGroupResponse, function(i, val) {
                    $.each(val, function(x, item) {
                        if(item['error'] == false) {
                            showNotification('success', 'Success', 'Vertical Deleted');
                        }else{
                            console.log(item['message']);
                            showNotification('warning', 'Warning', item['message']);
                        }
                    });
                });

                getVerticals();

                l.stop();


            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }



        if(vertical != ''){
            l.start();
            XMLHttpRequestObject.send("param=" + vertical);
        }


    }

    return false;
}

function getGroupCampaignMatch(selCamp)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/get-group-campaign-match");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);


                $.each(response, function(i, val) {

                    console.log(val);
                    if(val['details']['error'] == false){
                        console.log(val['details']['message']);

                        if(val['details']['message'] == 'No Campaign Matched (add as new)'){


                            $('#appendRuleSetBot tr').remove();
                            $('#appendRuleSetBlacklist tr').remove();
                            $('#appendRuleSetIp tr').remove();
                            $('#ajaxAppenedReturnRuleSetCountBot').val('');
                            $('#ajaxAppenedReturnConditionstCountBot').val('');
                            $('#ajaxAppenedReturnRuleSetCountBlacklist').val('');
                            $('#ajaxAppenedReturnConditionstCountBlacklist').val('');
                            $('#ajaxAppenedReturnConditionstCountIp').val('');
                            var table =  $('#datatable-responsive').DataTable();
                            table.clear();
                            $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('state', false, true);

                            $('#botRulesFrequency').val(1);

                            $('#botRulesTimePicker').val('00:00');
                            $('#botRulesDatePicker').val(formatDateFromYMD(Date.now()));


                            $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('disabled', true, true)

                            $('#appendRuleSetBotBtn').attr('disabled', true);
                            $('#botRulesDatePicker').attr('disabled', true);
                            $('#botRulesTimePicker').attr('disabled', true);
                            $('#botRulesFrequency').attr('disabled', true);
                            $('#chooseTimeFormat1').attr('disabled', true);
                            $('#chooseTimeFormat2').attr('disabled', true);
                            $('#botRulesSubmitBtn').attr('disabled', true);




                            $("input[type=checkbox]#blacklist-active-switch").bootstrapSwitch('disabled', true, true);
                            $('#blacklistRadioOption1').attr('disabled', true);
                            $('#blacklistRadioOption2').attr('disabled', true);
                            $('#blacklistCheckBoxVisits').attr('disabled', true);
                            $('#blacklistVisits1').attr('disabled', true);
                            $('#blacklistVisits2').attr('disabled', true);
                            $('#blacklistCheckBoxCost').attr('disabled', true);
                            $('#blacklistCost1').attr('disabled', true);
                            $('#blacklistCost2').attr('disabled', true);
                            $('#blacklistCheckBoxConv').attr('disabled', true);
                            $('#blacklistConv1').attr('disabled', true);
                            $('#blacklistConv2').attr('disabled', true);
                            $('#blacklistCheckBoxCTR').attr('disabled', true);
                            $('#blacklistCTR1').attr('disabled', true);
                            $('#blacklistCTR2').attr('disabled', true);
                            $('#blacklistCheckBoxROI').attr('disabled', true);
                            $('#blacklistROI1').attr('disabled', true);
                            $('#blacklistROI2').attr('disabled', true);
                            $('#blacklistDatePicker').attr('disabled', true);
                            $('#blacklistTimePicker').attr('disabled', true);
                            $('#blacklistFrequency').attr('disabled', true);
                            $('#blacklistChooseTimeFormat1').attr('disabled', true);
                            $('#blacklistChooseTimeFormat2').attr('disabled', true);
                            $('#blacklistSubmitBtn').attr('disabled', true);


                            $('#blacklistCheckBoxVisits').prop("checked", false);
                            $('#blacklistCheckBoxCost').prop("checked", false);
                            $('#blacklistCheckBoxConv').prop("checked", false);
                            $('#blacklistCheckBoxCTR').prop("checked", false);
                            $('#blacklistCheckBoxROI').prop("checked", false);


                            $('#blacklistVisitsLessThan').addClass('label label-info');
                            $('#blacklistVisitsBetween').removeClass('label label-info');
                            $('#blacklistVisitsGreaterThan').removeClass('label label-info');


                            $('#blacklistVisits1').val('');
                            $('#blacklistVisits2').val('');
                            $('#blacklistCost1').val('');
                            $('#blacklistCost2').val('');
                            $('#blacklistConv1').val('');
                            $('#blacklistConv2').val('');
                            $('#blacklistCTR1').val('');
                            $('#blacklistCTR2').val('');
                            $('#blacklistROI1').val('');
                            $('#blacklistROI2').val('');

                            $('#blacklistCostLessThan').addClass('label label-info');
                            $('#blacklistCostBetween').removeClass('label label-info');
                            $('#blacklistCostGreaterThan').removeClass('label label-info');


                            $('#blacklistConvLessThan').addClass('label label-info');
                            $('#blacklistConvBetween').removeClass('label label-info');
                            $('#blacklistConvGreaterThan').removeClass('label label-info');


                            $('#blacklistCTRLessThan').addClass('label label-info');
                            $('#blacklistCTRBetween').removeClass('label label-info');
                            $('#blacklistCTRGreaterThan').removeClass('label label-info');

                            $('#blacklistROILessThan').addClass('label label-info');
                            $('#blacklistROIBetween').removeClass('label label-info');
                            $('#blacklistROIGreaterThan').removeClass('label label-info');

                            $("input[type=checkbox]#ip-active-switch").bootstrapSwitch('disabled', false, true);
                            $('#appendRuleSetIpBtn').attr('disabled', true);
                            $('#ipRulesFrequency').attr('disabled', true);
                            $('#ipChooseTimeFormat1').attr('disabled', true);
                            $('#ipChooseTimeFormat2').attr('disabled', true);
                            $('#ipRulesSubmitBtn').attr('disabled', true);


                            $("input[type=checkbox]#bid-active-switch").bootstrapSwitch('disabled', true, true);


                        }else{

                            $.each(val['details']['elements'], function(x, obj) {
                                $.each(obj['info'], function(y, infoKey) {

                                    console.log(obj['info']);
                                    $('#appendRuleSetBot tr').remove();
                                    $('#appendRuleSetBlacklist tr').remove();
                                    $('#appendRuleSetIp tr').remove();
                                    $('#ajaxAppenedReturnRuleSetCountBot').val('');
                                    $('#ajaxAppenedReturnConditionstCountBot').val('');
                                    $('#ajaxAppenedReturnRuleSetCountBlacklist').val('');
                                    $('#ajaxAppenedReturnConditionstCountBlacklist').val('');
                                    $('#ajaxAppenedReturnConditionstCountIp').val('');
                                    $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('disabled', false, true)

                                    $('#appendRuleSetBotBtn').attr('disabled', false);
                                    $('#botRulesDatePicker').attr('disabled', false);
                                    $('#botRulesTimePicker').attr('disabled', false);
                                    $('#botRulesFrequency').attr('disabled', false);
                                    $('#chooseTimeFormat1').attr('disabled', false);
                                    $('#chooseTimeFormat2').attr('disabled', false);
                                    $('#botRulesSubmitBtn').attr('disabled', false);


                                    $('#campaignTitleName').html(infoKey['campName']);
                                    $('#campaignGroupId').val(infoKey['cgid']);
                                    $('#campaignId').val(infoKey['cid']);
                                    $('#voluumId').val(infoKey['vid']);

                                    $('#selectAddGroup').val(infoKey['gid']).trigger('change');
                                    $('#selectAddVertical').val(infoKey['verId']).trigger('change');
                                    $('#deleteCampaignBtn').attr('disabled', false);

                                    //$('#selectAddGroup  option[value="'+ infoKey['gid'] + '"]').prop('selected', 'selected');
                                    //  $('#selectAddVertical option[value="'+ infoKey['verId'] + '"]').prop('selected', 'selected');

                                    $("input[type=checkbox]#blacklist-active-switch").bootstrapSwitch('disabled', false, true);
                                    $('#blacklistRadioOption1').attr('disabled', false);
                                    $('#blacklistRadioOption2').attr('disabled', false);

                                    $('#appendRuleSetBlacklistBtn').attr('disabled', false);
                                    $('#blacklistDatePicker').attr('disabled', false);
                                    $('#blacklistTimePicker').attr('disabled', false);
                                    $('#blacklistFrequency').attr('disabled', false);
                                    $('#blacklistChooseTimeFormat1').attr('disabled', false);
                                    $('#blacklistChooseTimeFormat2').attr('disabled', false);
                                    $('#blacklistSubmitBtn').attr('disabled', false);


                                    $("input[type=checkbox]#ip-active-switch").bootstrapSwitch('disabled', false, true);
                                    $('#appendRuleSetIpBtn').attr('disabled', false);
                                    $('#ipRulesFrequency').attr('disabled', false);
                                    $('#ipChooseTimeFormat1').attr('disabled', false);
                                    $('#ipChooseTimeFormat2').attr('disabled', false);
                                    $('#ipRulesSubmitBtn').attr('disabled', false);


                                    $("input[type=checkbox]#bid-active-switch").bootstrapSwitch('disabled', false, true);
                                    $('#reviewLast').attr('disabled', false);
                                    $('#bidMinimumConversions').attr('disabled', false);
                                    $('#bidDatePicker').attr('disabled', false);
                                    $('#bidTimePicker').attr('disabled', false);
                                    $('#bidFrequency').attr('disabled', false);
                                    $('#appendConditionBtn').attr('disabled', false);
                                    $('#bidSubmitBtn').attr('disabled', false);

                                });


                                $.each(obj['botRules'], function(z, botKey) {



                                    if(botKey['active'] == 1){
                                        $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('state', true, true);
                                    }else{
                                        $("input[type=checkbox]#bot-active-switch").bootstrapSwitch('state', false, true);
                                    }

                                    $('#botRulesTimePicker').val(botKey['dateTime']);
                                    $('#botRulesDatePicker').val(botKey['dateFrom']);
                                    //$('#botRulesFrequency option[value="'+ botKey['frequency'] + '"]').attr('selected', true)

                                    if(botKey['frequency']  >= 3600){
                                        $('#chooseTimeFormat1').prop('checked', 'checked');

                                    }else{
                                        $('#chooseTimeFormat2').prop('checked', 'checked');
                                    }

                                    if(botKey['frequency']  >= 3600){
                                        $('#chooseTimeFormat1').prop('checked', 'checked');
                                        $('#botRulesFrequency').val(botKey['frequency'] / 3600);

                                    }else{
                                        $('#chooseTimeFormat2').prop('checked', 'checked');
                                        $('#botRulesFrequency').val(botKey['frequency'] / 60);
                                    }

                                    // $('#botRulesFrequency option[value="'+ botKey['frequency'] + '"]').prop('selected', 'selected');



                                });



                                if(obj['botConditions'] != null){
                                    if(Object.keys(obj['botConditions']).length > 0){

                                        var iBot = 0;
                                        var iConBot = 0;
                                        $.each(obj['botConditions'], function(z, botConKey) {


                                            $('#appendRuleSetBot').append(
                                                '<tr class="appendRuleSetBot" id="ruleSetBot'+iBot+'">' +
                                                '<td>' +
                                                '<table>' +

                                                '<tr>' +
                                                '<td><hr></td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<td><button onClick="removeAppend(this)" class="btn btn-danger btn-xs removeConditionBot" data-index="' + iBot + '"><i class="glyphicon glyphicon-remove"></i> Remove Ruleset</button></td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<td>' +
                                                '<table style="border-spacing: 10px; border-collapse: separate;" id="appendConditionsBot'+iBot+'">' +

                                                '</table>' +
                                                '</td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<td colspan="5"><a style="cursor: pointer;" onClick="appendConditions(this)" data-parent="ruleSetBot'+iBot+'" data-target="appendConditionsBot'+iBot+'" data-index="'+iBot+'">[add condition]</a></td>' +
                                                '</tr>' +


                                                '</table>' +
                                                '</td>' +
                                                '</tr>'
                                            );
                                            dataRulesBot.items['ruleSetBot'+iBot] = {conditions:[]};


                                            $.each(botConKey, function(x, botConditions) {

                                                var secondValueDisable  = 'disabled';
                                                var visitsSelected = '';
                                                var costSelected = '';
                                                var convSelected = '';
                                                var ctrSelected = '';
                                                var roiSelected ='';
                                                var lessthanSelected ='';
                                                var betweenSelected = '';
                                                var greaterThanSelected ='';
                                                if(botConditions['rule_variable'] == 'visits'){
                                                    visitsSelected = 'selected="selected"';
                                                }else if(botConditions['rule_variable'] == 'cost'){
                                                    costSelected = 'selected="selected"';
                                                }else if(botConditions['rule_variable'] == 'conversions'){
                                                    convSelected = 'selected="selected"';
                                                }else if(botConditions['rule_variable'] == 'ctr'){
                                                    ctrSelected = 'selected="selected"';
                                                }else if(botConditions['rule_variable'] == 'roi'){
                                                    roiSelected = 'selected="selected"';
                                                }

                                                if(botConditions['rule_condition'] == 'lessthan'){
                                                    lessthanSelected = 'selected="selected"';
                                                }
                                                else if(botConditions['rule_condition'] == 'between') {
                                                    betweenSelected = 'selected="selected"';
                                                    secondValueDisable = '';

                                                }else if(botConditions['rule_condition'] == 'greaterthan'){
                                                    greaterThanSelected = 'selected="selected"';
                                                }


                                                $('#appendConditionsBot'+iBot).append(
                                                    '<tr id="conditionsBot'+iBot+'_'+iConBot+'">' +
                                                    '<td style="width: 25%; vertical-align: middle; text-align: center">' +
                                                    '<select class="form-control" id="rulesVariablesBot'+iBot+'_'+iConBot+'">' +
                                                    '<option style="text-align: center;" value="visits" '+ visitsSelected +'>Visits</option>' +
                                                    '<option value="cost" '+ costSelected + '>Cost</option>' +
                                                    '<option value="conversions" '+ convSelected +'>Conv</option>' +
                                                    '<option value="ctr" '+ ctrSelected +'>CTR</option>' +
                                                    '<option value="roi" '+ roiSelected +'>ROI</option>' +
                                                    '</select>' +
                                                    '</td>' +
                                                    '<td style="width: 15%; vertical-align: middle; text-align: center">' +
                                                    '<select class="form-control" id="rulesOperatorsBot'+iBot+'_'+iConBot+'" data-id="'+iBot+'_'+iConBot+'" data-type="Bot" onchange="checkOperator(this)">' +
                                                    '<option value="lessthan" '+ lessthanSelected +'><</option>' +
                                                    '<option value="between" '+ betweenSelected +'>=</option>' +
                                                    '<option value="greaterthan" '+ greaterThanSelected +'>></option>' +
                                                    '</select>' +
                                                    '</td>' +
                                                    '<td style="width: 25%; vertical-align: middle;">' +
                                                    '<input type="text" class="form-control" value="'+ botConditions['value1'] +'" id="rulesFirstValueBot'+iBot+'_'+iConBot+'" onkeypress="return isNumberKey(event)">' +
                                                    '</td>' +
                                                    '<td style="width: 25%; vertical-align: middle;">' +
                                                    '<input type="text" class="form-control" value="'+ botConditions['value2'] +'" id="rulesSecondValueBot'+iBot+'_'+iConBot+'" onkeypress="return isNumberKey(event)" ' + secondValueDisable + '>' +
                                                    '</td>' +
                                                    '<td style="width: 10%; vertical-align: middle;">' +
                                                    '<button class="btn btn-danger btn-xs" onClick="removeAppendConditions(this)" data-targetid="' + iConBot + '" data-index="'+iBot+'"><i class="glyphicon glyphicon-remove"></i></button>' +
                                                    '</td>' +
                                                    '</tr>'
                                                );

                                                dataRulesBot.items['ruleSetBot'+iBot].conditions.push({
                                                    targetIndex: iBot+'_'+iConBot,
                                                    rulesVariablesBot: 'rulesVariablesBot'+iBot+'_'+iConBot,
                                                    rulesOperatorsBot: 'rulesOperatorsBot'+iBot+'_'+iConBot,
                                                    rulesFirstValueBot: 'rulesFirstValueBot'+iBot+'_'+iConBot,
                                                    rulesSecondValueBot: 'rulesSecondValueBot'+iBot+'_'+iConBot
                                                });

                                                iConBot++;
                                            });

                                            iBot++;

                                        });

                                        $('#ajaxAppenedReturnRuleSetCountBot').val(iBot);
                                        $('#ajaxAppenedReturnConditionstCountBot').val(iConBot);

                                    }
                                }

                                $.each(obj['blacklistRules'], function(z, blacklistKey) {


                                    if(blacklistKey['active'] == 1){
                                        $("input[type=checkbox]#blacklist-active-switch").bootstrapSwitch('state', true, true);
                                    }else{
                                        $("input[type=checkbox]#blacklist-active-switch").bootstrapSwitch('state', false, true);
                                    }

                                    $('#blacklistTimePicker').val(blacklistKey['dateTime']);
                                    $('#blacklistDatePicker').val(blacklistKey['startFrom']);
                                    //$('#botRulesFrequency option[value="'+ botKey['frequency'] + '"]').attr('selected', true)

                                    if(blacklistKey['frequency']  >= 3600){
                                        $('#blacklistChooseTimeFormat1').prop('checked', 'checked');

                                    }else{
                                        $('#blacklistChooseTimeFormat2').prop('checked', 'checked');
                                    }

                                    if(blacklistKey['frequency']  >= 3600){
                                        $('#blacklistChooseTimeFormat1').prop('checked', 'checked');
                                        $('#blacklistFrequency').val(blacklistKey['frequency'] / 3600);

                                    }else{
                                        $('#blacklistChooseTimeFormat2').prop('checked', 'checked');
                                        $('#blacklistFrequency').val(blacklistKey['frequency'] / 60);
                                    }

                                    // $('#botRulesFrequency option[value="'+ botKey['frequency'] + '"]').prop('selected', 'selected');



                                });


                                if(obj['blacklistConditions'] != null){
                                    if(Object.keys(obj['blacklistConditions']).length > 0){

                                        var iBlacklist = 0;
                                        var iConBlacklist = 0;
                                        $.each(obj['blacklistConditions'], function(z, blacklistConKey) {

                                            $('#appendRuleSetBlacklist').append(
                                                '<tr class="appendRuleSetBlacklist" id="ruleSetBlacklist'+iBlacklist+'">' +
                                                '<td>' +
                                                '<table>' +

                                                '<tr>' +
                                                '<td><hr></td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<td><button onClick="removeAppendBlacklist(this)" class="btn btn-danger btn-xs removeConditionBlacklist" data-index="' + iBlacklist + '"><i class="glyphicon glyphicon-remove"></i> Remove Ruleset</button></td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<td>' +
                                                '<table style="border-spacing: 10px; border-collapse: separate;" id="appendConditionsBlacklist'+iBlacklist+'">' +

                                                '</table>' +
                                                '</td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<td colspan="5"><a style="cursor: pointer;" onClick="appendConditionsBlacklist(this)" data-parent="ruleSetBlacklist'+iBlacklist+'" data-target="appendConditionsBlacklist'+iBlacklist+'" data-index="'+iBlacklist+'">[add condition]</a></td>' +
                                                '</tr>' +

                                                '</table>' +
                                                '</td>' +
                                                '</tr>'
                                            );
                                            dataRulesBlacklist.items['ruleSetBlacklist'+iBlacklist] = {conditions:[]};



                                            $.each(blacklistConKey, function(x, blacklistConditions) {
                                                var secondValueDisable  = 'disabled';
                                                var visitsSelected = '';
                                                var costSelected = '';
                                                var convSelected = '';
                                                var ctrSelected = '';
                                                var roiSelected ='';
                                                var lessthanSelected ='';
                                                var betweenSelected = '';
                                                var greaterThanSelected ='';
                                                if(blacklistConditions['rule_variable'] == 'visits'){
                                                    visitsSelected = 'selected="selected"';
                                                }else if(blacklistConditions['rule_variable'] == 'cost'){
                                                    costSelected = 'selected="selected"';
                                                }else if(blacklistConditions['rule_variable'] == 'conversions'){
                                                    convSelected = 'selected="selected"';
                                                }else if(blacklistConditions['rule_variable'] == 'ctr'){
                                                    ctrSelected = 'selected="selected"';
                                                }else if(blacklistConditions['rule_variable'] == 'roi'){
                                                    roiSelected = 'selected="selected"';
                                                }

                                                if(blacklistConditions['rule_condition'] == 'lessthan'){
                                                    lessthanSelected = 'selected="selected"';
                                                }
                                                else if(blacklistConditions['rule_condition'] == 'between') {
                                                    betweenSelected = 'selected="selected"';
                                                    secondValueDisable = '';

                                                }else if(blacklistConditions['rule_condition'] == 'greaterthan'){
                                                    greaterThanSelected = 'selected="selected"';
                                                }


                                                $('#appendConditionsBlacklist'+iBlacklist).append(
                                                    '<tr id="conditionsBlacklist'+iBlacklist+'_'+iConBlacklist+'">' +
                                                    '<td style="width: 25%; vertical-align: middle; text-align: center">' +
                                                    '<select class="form-control" id="rulesVariablesBlacklist'+iBlacklist+'_'+iConBlacklist+'">' +
                                                    '<option style="text-align: center;" value="visits" '+ visitsSelected +'>Visits</option>' +
                                                    '<option value="cost" '+ costSelected + '>Cost</option>' +
                                                    '<option value="conversions" '+ convSelected +'>Conv</option>' +
                                                    '<option value="ctr" '+ ctrSelected +'>CTR</option>' +
                                                    '<option value="roi" '+ roiSelected +'>ROI</option>' +
                                                    '</select>' +
                                                    '</td>' +
                                                    '<td style="width: 15%; vertical-align: middle; text-align: center">' +
                                                    '<select class="form-control" id="rulesOperatorsBlacklist'+iBlacklist+'_'+iConBlacklist+'" data-id="'+iBlacklist+'_'+iConBlacklist+'" data-type="Blacklist" onchange="checkOperator(this)">' +
                                                    '<option value="lessthan" '+ lessthanSelected +'><</option>' +
                                                    '<option value="between" '+ betweenSelected +'>=</option>' +
                                                    '<option value="greaterthan" '+ greaterThanSelected +'>></option>' +
                                                    '</select>' +
                                                    '</td>' +
                                                    '<td style="width: 25%; vertical-align: middle;">' +
                                                    '<input type="text" class="form-control" value="'+ blacklistConditions['value1'] +'" id="rulesFirstValueBlacklist'+iBlacklist+'_'+iConBlacklist+'" onkeypress="return isNumberKey(event)">' +
                                                    '</td>' +
                                                    '<td style="width: 25%; vertical-align: middle;">' +
                                                    '<input type="text" class="form-control" value="'+ blacklistConditions['value2'] +'" id="rulesSecondValueBlacklist'+iBlacklist+'_'+iConBlacklist+'" onkeypress="return isNumberKey(event)" ' + secondValueDisable + '>' +
                                                    '</td>' +
                                                    '<td style="width: 10%; vertical-align: middle;">' +
                                                    '<button class="btn btn-danger btn-xs" onClick="removeAppendConditionsBlacklist(this)" data-targetid="' + iConBlacklist + '" data-index="'+iBlacklist+'"><i class="glyphicon glyphicon-remove"></i></button>' +
                                                    '</td>' +
                                                    '</tr>'
                                                );

                                                dataRulesBlacklist.items['ruleSetBlacklist'+iBlacklist].conditions.push({
                                                    targetIndex: iBlacklist+'_'+iConBlacklist,
                                                    rulesVariablesBlacklist: 'rulesVariablesBlacklist'+iBlacklist+'_'+iConBlacklist,
                                                    rulesOperatorsBlacklist: 'rulesOperatorsBlacklist'+iBlacklist+'_'+iConBlacklist,
                                                    rulesFirstValueBlacklist: 'rulesFirstValueBlacklist'+iBlacklist+'_'+iConBlacklist,
                                                    rulesSecondValueBlacklist: 'rulesSecondValueBlacklist'+iBlacklist+'_'+iConBlacklist
                                                });

                                                iConBlacklist++;
                                            });

                                            iBlacklist++;

                                        });

                                        $('#ajaxAppenedReturnRuleSetCountBlacklist').val(iBlacklist);
                                        $('#ajaxAppenedReturnConditionstCountBlacklist').val(iConBlacklist);

                                    }
                                }



                                $.each(obj['ipRules'], function(z, ipKey) {


                                    if(ipKey['active'] == 1){
                                        $("input[type=checkbox]#ip-active-switch").bootstrapSwitch('state', true, true);
                                    }else{
                                        $("input[type=checkbox]#ip-active-switch").bootstrapSwitch('state', false, true);
                                    }


                                    if(ipKey['frequency']  >= 3600){
                                        $('#ipChooseTimeFormat1').prop('checked', 'checked');

                                    }else{
                                        $('#ipChooseTimeFormat2').prop('checked', 'checked');
                                    }

                                    if(ipKey['frequency']  >= 3600){
                                        $('#ipChooseTimeFormat1').prop('checked', 'checked');
                                        $('#ipRulesFrequency').val(ipKey['frequency'] / 3600);

                                    }else{
                                        $('#ipChooseTimeFormat2').prop('checked', 'checked');
                                        $('#ipRulesFrequency').val(ipKey['frequency'] / 60);
                                    }



                                });


                                if(obj['ipConditions'] != null){
                                    if(Object.keys(obj['ipConditions']).length > 0){

                                        var iConIp = 0;
                                        $.each(obj['ipConditions'], function(z,ipConKey) {

                                            var options = '';
                                            if(Object.keys(obj['carriers']).length > 0){
                                                $.each(obj['carriers'], function(y, courOption) {

                                                    if(ipConKey['carrier'] == courOption['mobileCarrier']){
                                                        var selected = 'selected';
                                                    }else{
                                                        var selected = '';
                                                    }

                                                    options += "'<option values=\"" + courOption['mobileCarrier'] + "\" " + selected + ">" +courOption['mobileCarrier'] + "</option>' +";
                                                });
                                            }
                                            $('#appendRuleSetIp').append(
                                                '<tr id="conditionsIp'+iConIp+'">' +
                                                '<td style="vertical-align: middle; text-align: center">' +
                                                '<select class="form-control" id="rulesVariablesIp'+iConIp+'">' +
                                                options +
                                                '</select>' +
                                                '</td>' +
                                                '<td style="vertical-align: middle;">' +
                                                '<button class="btn btn-danger btn-xs" onClick="removeAppendConditionsIp(this)" data-targetid="' + iConIp + '"><i class="glyphicon glyphicon-remove"></i></button>' +
                                                '</td>' +
                                                '</tr>'
                                            );

                                            dataRulesIp.items.push({
                                                rulesVariablesIp: 'rulesVariablesIp'+iConIp
                                            });
                                            iConIp++;



                                        });
                                        $('#ajaxAppenedReturnConditionsCountIp').val(iConIp);

                                    }
                                }



                                if(obj['bidAdjustmentRules'] != null){
                                    if(Object.keys(obj['bidAdjustmentRules']).length > 0){
                                        $.each(obj['bidAdjustmentRules'], function(z, bidKey) {

                                            if(bidKey['active'] == 1){
                                                $("input[type=checkbox]#bid-active-switch").bootstrapSwitch('state', true, true);
                                            }else{
                                                $("input[type=checkbox]#bid-active-switch").bootstrapSwitch('state', false, true);
                                            }
                                            $('#reviewLast option[value="'+ bidKey['reviewLast'] + '"]').attr('selected', true)
                                            $('#bidMinimumConversions').val(bidKey['conversions']);
                                            $('#bidTimePicker').val(bidKey['dateTime']);
                                            $('#bidDatePicker').val(bidKey['startFrom']);
                                            $('#bidFrequency').val(bidKey['frequency'] / 3600);

                                        });
                                    }else{

                                        $('#appendConditionDisplay').empty();
                                        $("input[type=checkbox]#bid-active-switch").bootstrapSwitch('state', false, true);
                                        $('#reviewLast option[value="24"]').attr('selected', true)
                                        $('#bidMinimumConversions').val('');
                                        $('#bidFrequency').val('');
                                    }

                                }

                                if(obj['bidAdjustmentConditions'] != null){
                                    if(Object.keys(obj['bidAdjustmentConditions']).length > 0){
                                        var i = 0;
                                        $.each(obj['bidAdjustmentConditions'], function(z, bidConKey) {

                                            var horizontalConditionLessthan = '';
                                            var horizontalConditionBetween = '';
                                            var horizontalConditionGreaterthan = '';
                                            var verticalConditionIncrease = '';
                                            var verticalConditionDecrease = '';

                                            var secondValueDisable  = 'disabled';
                                            if(bidConKey['horizontalCondition'] == 'lessThan'){
                                                horizontalConditionLessthan = 'label label-info';
                                            }
                                            if(bidConKey['horizontalCondition'] == 'between'){
                                                horizontalConditionBetween = 'label label-info';
                                                secondValueDisable = '';
                                            }
                                            if(bidConKey['horizontalCondition'] == 'greaterThan'){
                                                horizontalConditionGreaterthan = 'label label-info';
                                            }

                                            if(bidConKey['verticalCondition'] == 'increase'){
                                                verticalConditionIncrease = 'label label-info';
                                            }
                                            if(bidConKey['verticalCondition'] == 'decrease'){
                                                verticalConditionDecrease = 'label label-info';
                                            }

                                            $('#appendConditionDisplay').append(
                                                '<tr class="append" id="index'+i+'">' +
                                                '<td style="width: 5%; vertical-align: middle;">' +
                                                '<button class="btn btn-danger btn-xs removeCondition" data-index="' + i + '"><i class="glyphicon glyphicon-remove"></i></button>' +
                                                '</td>' +
                                                '<td style="width: 30%; vertical-align: middle; text-align: center">' +
                                                '<div class="col-lg-4 '+horizontalConditionLessthan+'" id="bidLessThan'+i+'" data-divId="'+i+'" onClick="updateConditionSelect(this)">' +
                                                '<span class="pointer"><i class="fa fa-chevron-left"></i></span>' +
                                                '</div>' +
                                                '<div class="col-lg-4 align-center '+horizontalConditionBetween+'" id="bidBetween'+i+'" data-divId="'+i+'" onClick="updateConditionSelect(this)">' +
                                                '<span class="pointer"><i class="fa fa-exchange"></i></span>' +
                                                '</div>' +
                                                '<div class="col-lg-4 '+horizontalConditionGreaterthan+'" id="bidGreaterThan'+i+'" data-divId="'+i+'" onClick="updateConditionSelect(this)">' +
                                                '<span class="pointer"><i class="fa fa-chevron-right"></i></span>' +
                                                '</div>' +
                                                '</td>' +
                                                '<td style="width: 20%; vertical-align: middle;">' +
                                                '<input type="text" class="form-control" placeholder="ROI" id="bidRoiFirstValue'+i+'" onkeypress="return isNumberKey(event)" value="' + bidConKey['value1'] + '">' +
                                                '</td>' +
                                                '<td style="width: 20%; vertical-align: middle;">' +
                                                '<input type="text" class="form-control" placeholder="ROI" id="bidRoiSecondValue'+i+'" onkeypress="return isNumberKey(event)" value="' + bidConKey['value2'] + '" '+secondValueDisable+'>' +
                                                '</td>' +
                                                '<td style="width: 10%; vertical-align: middle; text-align: center">' +
                                                '<div class="col-lg-12">' +
                                                '<div class="col-lg-12 '+verticalConditionIncrease+'" id="bidIncrease'+i+'" data-divId="'+i+'" onClick="updateOptionSelect(this)">' +
                                                '<span class="pointer"><i class="fa fa-chevron-up"></i></span>' +
                                                '</div>' +
                                                '<div class="col-lg-12 '+verticalConditionDecrease+'" id="bidDecrease'+i+'" data-divId="'+i+'" onClick="updateOptionSelect(this)">' +
                                                '<span class="pointer"><i class="fa fa-chevron-down"></i></span>' +
                                                '</div>' +
                                                '</div>' +
                                                '</td>' +
                                                '<td style="width: 15%; vertical-align: middle;">' +
                                                '<input type="text" placeholder="BID" class="form-control" id="bidRoiPercentValue'+i+'" onkeypress="return isNumberKey(event)" value="' + bidConKey['valuePercent'] + '">' +
                                                '</td>' +
                                                '</tr>'
                                            );
                                            data.items.push({
                                                bidLessThan: 'bidLessThan' + i,
                                                bidBetween: 'bidBetween' + i,
                                                bidGreaterThan: 'bidGreaterThan' + i,
                                                bidRoiFirstValue: 'bidRoiFirstValue' + i,
                                                bidRoiSecondValue: 'bidRoiSecondValue' + i,
                                                bidIncrease: 'bidIncrease' + i,
                                                bidDecrease: 'bidDecrease' + i,
                                                bidRoiPercentValue: 'bidRoiPercentValue' + i
                                            });
                                            i++;
                                            $('.append').on('click', '.removeCondition', function(){
                                                var index = $(this).data('index');
                                                $(this).parent().fadeTo("fast",0.7, function(){
                                                    $(this).parent().remove();
                                                    delete data.items[index];
                                                    // i--;
                                                    // Animation complete.

                                                });
                                            });

                                        });

                                        $('#ajaxAppenedReturnCount').val(i);
                                    }
                                }



                            });

                            var table =  $('#datatable-responsive').DataTable();
                            table.ajax.reload();
                        }

                    }else{
                        console.log(val['details']['message']);

                    }

                });

            }
        }

        XMLHttpRequestObject.send("param= "+ selCamp);



    }

    return false;
}

function addBotRule(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-bot-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);


                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {

                        if(obj['error'] != 1){
                            console.log(obj);
                            console.log(obj['message']);
                            showNotification('success', 'Success', 'Bot Rules Successfully Added');

                        }else{
                            console.log(obj['message']);

                            showNotification('error', '', '');
                        }
                    });
                });



                l.stop();

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }



        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

/*
 * Blacklist Rules
 */


function addBlackListRule(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-blacklist-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);


                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {

                        if(obj['error'] != 1){
                            console.log(obj['message']);
                            showNotification('success', 'Success', obj['message']);
                        }else{
                            console.log(obj['message']);
                            showNotification('error', '', '');
                        }
                    });
                });



                l.stop();

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){

                showNotification('error', '', '');
            }
        }


        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));



    }

    return false;
}

function addBidAdjustmentRule(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-bid-adjustment-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);


                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {

                        if(obj['error'] != 1){
                            console.log(obj['message']);
                            showNotification('success', 'Success', obj['message']);
                        }else{
                            console.log(obj['message']);
                            showNotification('error', '', '');
                        }
                    });
                });



                l.stop();

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }

        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));



    }

    return false;
}


function addIpRule(btn, data)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-ip-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);


                $.each(response, function(i, val) {
                    $.each(val, function(x, obj) {

                        if(obj['error'] != 1){
                            console.log(obj);
                            console.log(obj['message']);
                            showNotification('success', 'Success', obj['message'])

                        }else{
                            console.log(obj['message']);

                            showNotification('error', '', '')
                        }
                    });
                });



                l.stop();

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '')
            }
        }



        l.start();
        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

