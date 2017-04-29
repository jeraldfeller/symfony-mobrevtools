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


function addCampaign(btn, data, selCamp)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-campaign");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#campaignTitleName').html(response['campaignName']);
                $('#id').val(response['id']);
                showNotification('success', 'Success', 'Campaign Successfully Added');
                l.stop();
                getCampaignMatch(selCamp);

            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }

        l.start();
        if(typeof data.campaignId == 'undefined'){
            showNotification('warning', 'Warning', 'Please Select Campaign');
            $('#selectCampaign').focus();
            setTimeout(function(){
                l.stop();
            }, 1000);
        }else if(data.verticalId == ''){
            showNotification('warning', 'Warning', 'Please Select Vertical');
            $('#selectVertical').focus();
            setTimeout(function(){
                l.stop();
            }, 1000);
        }else{
            var dataArray = JSON.stringify(data);
            XMLHttpRequestObject.send("param=" + dataArray);
        }


    }

    return false;
}


function addRule(btn, data, selCamp, indexes){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();

                console.log(response);
                $('#selectRuleType').val('').trigger("change");
                $('#startFrom').val('');
                $('#frequency').val(5);
                $('#selectFrequencyFormat').val('minutes').trigger("change");
                $('#selectLogicalOperator').val('').trigger("change");
                showNotification('success', 'Success', 'Rules Successfully Added');
                getCampaignMatch(selCamp);


                for($a = 0; $a < indexes.length; $a++){
                    $('#row-'+indexes[$a]).remove();
                    delete $dataConditions.items[indexes[$a]];
                }
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
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


function updateRule(btn, data, selCamp){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/update-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();
                showNotification('success', 'Success', 'Rules Successfully Updated');
                getCampaignMatch(selCamp);
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
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


function deleteCampaignRule(btn, id, selCamp){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/delete-campaign-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();
                $('#deleteRuleModal').modal('hide');
                showNotification('success', 'Success', 'Rules Successfully Deleted');
                getCampaignMatch(selCamp);

            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
                l.stop();
            }
        }



        l.start();



        XMLHttpRequestObject.send("param=" + id);



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

function getCampaignMatch(voluumId)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/get-campaign-match");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#appendAppendActiveRules').empty();
                console.log(response);
                $dataConditionsActive = [];
                $.each(response['data']['details']['elements'], function(campaign, obj){
                    console.log(obj['info'][0]['verId'])
                    $('#id').val(obj['info'][0]['id']);
                    $('#selectAddVertical').val(obj['info'][0]['verId']).trigger("change");
                    $.each(obj['rulesConditions'], function(index, info){


                        $botRuleSelected = '';
                        $blacklistRuleSelected = '';
                        $whitelistRuleSelected = '';
                        $autobidRuleSelected = '';

                        $operatorAndSelected = '';
                        $operatorOrSelected = '';

                        $minutesSelected = '';
                        $hoursSelected = '';

                        if(info['ruleType'] == 'botRule'){
                            $botRuleSelected = 'selected';
                        }
                        if(info['ruleType'] == 'blacklistRule'){
                            $blacklistRuleSelected = 'selected';
                        }
                        if(info['ruleType'] == 'whitelist'){
                            $whitelistRuleSelected = 'selected';
                        }
                        if(info['ruleType'] == 'autobid'){
                            $autobidRuleSelected = 'selected';
                        }


                        if(info['frequency']  >= 3600){
                            $hoursSelected = 'selected';
                            $frequency = info['frequency'] / 3600;
                        }else{
                            $minutesSelected = 'selected';
                            $frequency = info['frequency'] / 60;
                        }


                        if(info['operator'] == 'and'){
                            $operatorAndSelected = 'selected';
                        }
                        if(info['operator'] == 'or'){
                            $operatorOrSelected = 'selected';
                        }

                        $conditions = '';
                        $dataConditionsActive[index] = {
                            items:[]
                        };

                        for($z = 0; $z < info['conditions'].length; $z++){

                            $selectedVisits = '';
                            $selectedConversions = '';
                            $selectedCost = '';
                            $selectedCPV = '';
                            $selectedCTR = '';
                            $selectedEPV = '';
                            $selectedROI = '';

                            $selectedGreater = '';
                            $selectedLess = '';
                            $selectedBetween = '';
                            $selectedEqual = '';

                            if(info['conditions'][$z]['rule_variable'] == 'visits'){
                                $selectedVisits = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_variable'] == 'conversions'){
                                $selectedConversions = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_variable'] == 'cost'){
                                $selectedCost = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_variable'] == 'cpv'){
                                $selectedCPV = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_variable'] == 'ctr'){
                                $selectedCTR = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_variable'] == 'epv'){
                                $selectedEPV = 'selected';
                            }else{
                                $selectedROI = 'selected';
                            }

                            if(info['conditions'][$z]['rule_condition'] == 'greaterthan'){
                                $selectedGreater = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_condition'] == 'lessthan'){
                                $selectedLess = 'selected';
                            }
                            else if(info['conditions'][$z]['rule_condition'] == 'between'){
                                $selectedBetween = 'selected';
                            }else if(info['conditions'][$z]['rule_condition'] == 'equalto'){
                                $selectedEqual = 'selected';
                            }



                            if(info['active'] == 1){
                                $classStatus = 'green';
                                $buttons = '<div class="row" id="buttonsContainer-'+index+'"><div class="col-md-5 pull-left">' +
                                '<button data-index="'+index+'" data-id="'+info['campaignRulesId']+'" data-action="pause" class="btn yellow ladda-button spinnerBtn" data-style="expand-right" data-size="s" onclick="changeRuleStatus(this)"> ' +
                                '<span class="ladda-label">' +
                                '<i class="fa fa-pause"></i> Pause </span></button>' +
                                '<button style="margin-left: 10px;" data-action="edit" data-index="'+index+'" class="btn blue" onclick="editRule(this)"> ' +
                                '<i class="fa fa-pencil"></i> Edit </button>' +
                                '<button style="margin-left: 10px;" data-index="'+index+'" data-id="'+info['campaignRulesId']+'" onclick="pushDataDelete(this)" data-toggle="modal" data-target="#deleteRuleModal" class="btn red"><i class="fa fa-trash"></i> Delete</button>' +
                                '<label style="margin-left: 10px;">Status: Running</label>'+
                                '</div>' +
                                '</div>';
                            }else{
                                $classStatus = 'yellow';
                                $buttons = '<div class="row" id="buttonsContainer-'+index+'"><div class="col-md-5 pull-left">' +
                                '<button data-index="'+index+'" data-id="'+info['campaignRulesId']+'" data-action="resume" class="btn green ladda-button spinnerBtn" data-style="expand-right" data-size="s" onclick="changeRuleStatus(this)"> ' +
                                '<span class="ladda-label">' +
                                '<i class="fa fa-play"></i> Resume </span></button>' +
                                '<button style="margin-left: 10px;" data-action="edit" data-index="'+index+'" class="btn blue" onclick="editRule(this)"> ' +
                                '<i class="fa fa-pencil"></i> Edit </button>' +
                                '<button style="margin-left: 10px;" data-index="'+index+'" data-id="'+info['campaignRulesId']+'" onclick="pushDataDelete(this)" data-toggle="modal" data-target="#deleteRuleModal" class="btn red"><i class="fa fa-trash"></i> Delete</button>' +
                                '<label style="margin-left: 10px;">Status: Paused</label>'+
                                '</div>' +
                                '</div>';
                            }

                            $conditions += '<div class="row" id="row-'+index+'-'+$z+'">' +
                            '<br>' +
                            '<div class="col-md-3">' +
                            '<select id="metric-'+index+'-'+$z+'" class="select2_single form-control metric disableTrigger-'+index+'" tabindex="-1" disabled>' +
                            '<option></option>' +
                            '<option value="visits" '+ $selectedVisits +'>Visits</option>' +
                            '<option value="conversions" '+ $selectedConversions +'>Conversion</option>' +
                            '<option value="cost" '+ $selectedCost +'>Cost</option>' +
                            '<option value="cpv" '+ $selectedCPV +'>CPV</option>' +
                            '<option value="ctr" '+ $selectedCTR +'>CTR</option>' +
                            '<option value="epv" '+ $selectedEPV +'>EPV</option>' +
                            '<option value="roi" '+ $selectedROI +'>ROI</option>' +
                            '</select>' +
                            '</div>' +
                            '<div class="col-md-3">' +
                            '<select data-index="'+index+'-'+$z+'" onChange="enableInputValue(this)" id="option-'+index+'-'+$z+'" class="select2_single form-control option disableTrigger-'+index+'" tabindex="-1" disabled>' +
                            '<option></option>' +
                            '<option value="greaterThan" '+ $selectedGreater +'>Greater Than</option>' +
                            '<option value="lessThan" '+ $selectedLess +'>Less Than</option>' +
                            '<option value="between" '+ $selectedBetween +'>Between</option>' +
                            '<option value="equalTo" '+ $selectedEqual +'>Equal To</option>' +
                            '</select>' +
                            '</div>' +
                            '<div class="col-md-2">' +
                            '<input type="text" class="form-control disableTrigger-'+index+'" id="value1-'+index+'-'+$z+'" placeholder="Enter Value" onkeypress="isNumberKey(event)" value="'+info['conditions'][$z]['value1']+'" disabled>'+
                            '</div>' +
                            '<div class="col-md-2">' +
                            '<input type="text" class="form-control disableTrigger-'+index+'" id="value2-'+index+'-'+$z+'" placeholder="Enter Value" onkeypress="isNumberKey(event)" value="'+info['conditions'][$z]['value2']+'" disabled>'+
                            '</div>' +
                            '<div class="col-md-2">' +
                            '<button onclick="removeActiveAppend(this)" class="btn red btn-md disableTrigger-'+index+'" data-index-row="'+index+'-'+$z+'" data-index="'+index+'" data-key="'+$z+'" disabled><i class="fa fa-times"></i> Remove</button">' +
                            '</div>' +
                            '</div>'

                                $dataConditionsActive[index].items.push({
                                    metric: 'metric-'+index+'-'+$z,
                                    option: 'option-'+index+'-'+$z,
                                    value1: 'value1-'+index+'-'+$z,
                                    value2: 'value2-'+index+'-'+$z
                                });


                        }
                        $('#appendAppendActiveRules').append(
                            '<div class="row">' +
                            '<div class="clearfix"></div>' +
                            '<br>' +
                            '<div class="col-md-12">' +
                            '<div class="portlet box '+ $classStatus +'">' +
                            '<div class="portlet-title">' +
                            '<div class="actions pull-left col-md-2 col-xs-12">' +
                            '<input type="hidden" id="campaignRulesId-'+index+'" value="'+ info['campaignRulesId'] +'">' +
                            '<select id="activeRuleType-'+index+'" class="select2_single form-control ruleType disableTrigger-'+index+'" tabindex="-1" disabled>' +
                            '<option></option>' +
                            '<option value="botRule"' +  $botRuleSelected + '>Bot Rule</option>' +
                            '<option value="blacklistRule"' +  $blacklistRuleSelected + '>Blacklist Rule</option>' +
                            '<option value="whitelist"' +  $whitelistRuleSelected + '>Whitelist</option>' +
                            '<option value="autobid"' +  $autobidRuleSelected + '>Autobid</option>' +
                            '</select>' +
                            '</div>' +
                            '<div class="actions pull-left col-md-2 col-xs-12 " style="margin-left: 10px;">' +
                            '<div class="input-group">' +
                            '<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>' +
                            '<input type="text" class="form-control date-picker disableTrigger-'+index+'" placeholder="Start From" id="activeStartFrom-'+index+'" value="'+ info['startFrom'] +'" disabled>' +
                            '</div>' +
                            '</div>' +
                            '<div class="actions pull-left col-md-1 col-xs-12 " style="margin-left: 10px;">' +
                            '<div class="input-group">' +
                            '<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>' +
                            '<input type="text" class="form-control timepicker timepicker-24 disableTrigger-'+index+'" placeholder="Start From" id="activeStartTime-'+index+'" value="'+ info['startTime'] +'" disabled>' +
                            '</div>' +
                            '</div>' +
                            '<div class="actions pull-left col-md-1 col-xs-12" style="margin-left: 10px;">' +
                            '<input type="text" class="form-control disableTrigger-'+index+'" id="activeFrequency-'+index+'" placeholder="Frequency" value="'+ $frequency +'" onkeypress="return isNumberKey(event)" disabled>' +
                            '</div>' +
                            '<div class="actions pull-left col-md-2 col-xs-12" style="margin-left: 10px;">' +
                            '<select id="activeFrequencyFormat-'+index+'" class="select2_single form-control frequencyFormat disableTrigger-'+index+'" tabindex="-1" disabled>' +
                            '<option value="minutes" '+ $minutesSelected +'>Minutes</option>' +
                            '<option value="hours" '+ $hoursSelected +'>Hours</option>' +
                            '</select>' +
                            '</div>' +
                            '<div class="actions pull-left col-md-2 col-xs-12" style="margin-left: 10px;">' +
                            '<select id="activeLogicalOperator-'+index+'" class="select2_single form-control logicalOperator disableTrigger-'+index+'" tabindex="-1" disabled>' +
                            '<option></option>' +
                            '<option value="and" '+ $operatorAndSelected + '>And</option>' +
                            '<option value="or" '+ $operatorOrSelected + '>Or</option>' +
                            '</select>' +
                            '</div>' +
                            '<div class="actions">' +
                            '<button data-index="'+index+'" type="button" class="btn btn-circle blue btn-sm ladda-button pull-right spinnerBtn disableTrigger-'+index+'" id="addRuleBtn" data-style="expand-right" data-size="s" onclick="saveRule(this)" disabled>' +
                            '<span class="ladda-label">' +
                            '<i class="fa fa-save"></i> Save Rule</span>' +
                            '</button>' +
                            '</div>' +
                            '</div>' +
                            '<div class="portlet-body" >' +
                            '<div id="appendRuleSetActive-'+index+'">' +
                                $conditions +
                            '</div>' +
                            '<br>' +
                                $buttons +
                            '<div class="clearfix"></div>' +
                            '<br>' +
                            '<div class="row" id="addConditionActiveContainer-'+index+'" style="display: none;">' +
                            '<div class="col-md-2">' +
                            '<a data-index="'+index+'" onclick="appendConditionActive(this)">[ add condition ]</a>' +
                            '</div>' +
                            '<br>' +
                            '<br>' +
                            '<div class="col-md-12">' +
                            '<button onclick="editRule(this)" class="btn red btn-xs" data-action="cancel" data-index="'+index+'">cancel update</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'

                        );

                            $('#activeStartFrom-'+index).datepicker({
                                rtl: App.isRTL(),
                                orientation: "left",
                                autoclose: true
                            });

                            $('#activeStartTime-'+index).timepicker({
                                autoclose: true,
                                minuteStep: 5,
                                showSeconds: false,
                                showMeridian: false
                            });


                            $(".ruleType").select2({
                                allowClear: true,
                                placeholder: 'Select Rule Type',
                                width: null
                            });


                            $(".frequencyFormat").select2({
                                allowClear: true,
                                placeholder: 'Select Frequency Format',
                                width: null
                            });


                            $(".logicalOperator").select2({
                                allowClear: true,
                                placeholder: 'Select Logical Operator',
                                width: null
                            });




                    });

                });

                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }
        }

        XMLHttpRequestObject.send("param= "+ voluumId);



    }

    return false;
}

function updateChangeRuleStatus(btn, data, selCamp)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/update-change-rule-status");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);


                showNotification('success', 'Success', 'Rule Successfully Updated');



                getCampaignMatch(selCamp);

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

function saveData(data){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/save-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification('success', 'Success', 'Data Successfully Saved');
                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function deleteData(data){

    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/delete-data");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);

                showNotification('success', 'Success', 'Data Successfully Deleted');
                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
                showNotification('error', '', '');
            }
        }


        XMLHttpRequestObject.send("param= "+ JSON.stringify(data));


    }

    return false;
}

function addPresetRule(btn, data, indexes){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/add-preset-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();

                $('#addModal').modal('hide');
                $('#presetName').val('');
                $('#appendRuleSet').empty();
                showNotification('success', 'Success', 'Preset Successfully Added');
                for($a = 0; $a < indexes.length; $a++){
                    $('#row-'+indexes[$a]).remove();
                    delete $dataConditions.items[indexes[$a]];
                }

                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
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


function editPresetRule(btn, data, indexes){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/edit-preset-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();

                $('#editModal').modal('hide');
                $('#editPresetName').val('');
                $('#editAppendRuleSet').empty();
                showNotification('success', 'Success', 'Preset Successfully Updated');
                for($a = 0; $a < indexes.length; $a++){
                    $('#e-row-'+indexes[$a]).remove();
                    delete $editDataConditions.items[indexes[$a]];
                }

                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
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


function deletePresetRule(btn, data){
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/delete-preset-rule");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                l.stop();

                $('#deleteModal').modal('hide');
                showNotification('success', 'Success', 'Preset Successfully Deleted');
                var oTable = $('#datatable-responsive').DataTable();
                oTable.ajax.reload();
            }

            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503){
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


function getPresetRuleConditions(id)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/campaign/get-campaign-rule-presets");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#appendAppendActiveRules').empty();

                $conditions = '';

                for($z = 0; $z < response.length; $z++){


                    $selectedVisits = '';
                    $selectedConversions = '';
                    $selectedCost = '';
                    $selectedCPV = '';
                    $selectedCTR = '';
                    $selectedEPV = '';
                    $selectedROI = '';

                    $selectedGreater = '';
                    $selectedLess = '';
                    $selectedBetween = '';
                    $selectedEqual = '';

                    if(response[$z]['ruleVariable'] == 'visits'){
                        $selectedVisits = 'selected';
                    }
                    else if(response[$z]['ruleVariable'] == 'conversions'){
                        $selectedConversions = 'selected';
                    }
                    else if(response[$z]['ruleVariable'] == 'cost'){
                        $selectedCost = 'selected';
                    }
                    else if(response[$z]['ruleVariable'] == 'cpv'){
                        $selectedCPV = 'selected';
                    }
                    else if(response[$z]['ruleVariable'] == 'ctr'){
                        $selectedCTR = 'selected';
                    }
                    else if(response[$z]['ruleVariable'] == 'epv'){
                        $selectedEPV = 'selected';
                    }else{
                        $selectedROI = 'selected';
                    }

                    if(response[$z]['ruleCondition'] == 'greaterthan'){
                        $selectedGreater = 'selected';
                    }
                    else if(response[$z]['ruleCondition'] == 'lessthan'){
                        $selectedLess = 'selected';
                    }
                    else if(response[$z]['ruleCondition'] == 'between'){
                        $selectedBetween = 'selected';
                    }else if(response[$z]['ruleCondition'] == 'equalto'){
                        $selectedEqual = 'selected';
                    }




                    $conditions += '<div class="row presetRow" data-index="'+$z+'" id="row-'+$z+'">' +
                    '<br>' +
                    '<div class="col-md-3">' +
                    '<select id="metric-'+$z+'" class="select2_single form-control metric tabindex="-1" >' +
                    '<option></option>' +
                    '<option value="visits" '+ $selectedVisits +'>Visits</option>' +
                    '<option value="conversions" '+ $selectedConversions +'>Conversion</option>' +
                    '<option value="cost" '+ $selectedCost +'>Cost</option>' +
                    '<option value="cpv" '+ $selectedCPV +'>CPV</option>' +
                    '<option value="ctr" '+ $selectedCTR +'>CTR</option>' +
                    '<option value="epv" '+ $selectedEPV +'>EPV</option>' +
                    '<option value="roi" '+ $selectedROI +'>ROI</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-3">' +
                    '<select data-index="'+$z+'" onChange="enableInputValue(this)" id="option-'+$z+'" class="select2_single form-control option tabindex="-1">' +
                    '<option></option>' +
                    '<option value="greaterThan" '+ $selectedGreater +'>Greater Than</option>' +
                    '<option value="lessThan" '+ $selectedLess +'>Less Than</option>' +
                    '<option value="between" '+ $selectedBetween +'>Between</option>' +
                    '<option value="equalTo" '+ $selectedEqual +'>Equal To</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<input type="text" class="form-control" id="value1-'+$z+'" placeholder="Enter Value" onkeypress="isNumberKey(event)" value="'+response[$z]['value1']+'">'+
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<input type="text" class="form-control" id="value2-'+$z+'" placeholder="Enter Value" onkeypress="isNumberKey(event)" value="'+response[$z]['value2']+'" disabled>'+
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<button onclick="removeAppend(this)" class="btn red btn-md" data-index-row="'+$z+'" data-index="'+$z+'" data-key="'+$z+'"><i class="fa fa-times"></i> Remove</button">' +
                    '</div>' +
                    '</div>'

                    $dataConditions.items.push({
                        metric: 'metric-'+$z,
                        option: 'option-'+$z,
                        value1: 'value1-'+$z,
                        value2: 'value2-'+$z
                    });





                }


                $('#appendRuleSet').append(
                    $conditions
                );

                $('#hasConditions').val(1);




            }
        }

        XMLHttpRequestObject.send("param= "+ id);



    }

    return false;
}



