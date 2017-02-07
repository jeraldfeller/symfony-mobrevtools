/**
 * Created by Grabe Grabe on 9/18/2016.
 */




function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31
        && (charCode < 48 || charCode > 57) && charCode != 45)
        return false;

    return true;
}

function showSpin(btn, bol){

    if(bol == true){
        $(btn).css('display', 'inline')
        $button = btn.split('-');
        $($button[0]).attr('disabled', true);
    }else{
        $(btn).css('display', 'none')
        $($button[0]).attr('disabled', false);
    }


}
/*
 function formatDateFromYMD(inputDate) {
 var date = new Date(inputDate);
 if (!isNaN(date.getTime())) {
 // Months use 0 index.
 return date.getMonth() + 1 + '/' + date.getDate() + '/' + date.getFullYear();
 }
 }
 */
function formatDateFromYMD(inputDate) {
    var date = new Date(inputDate);
    if (!isNaN(date.getTime())) {
        // Months use 0 index.
        return date.getUTCMonth() + 1 + '/' + date.getUTCDate() + '/' + date.getUTCFullYear();
    }
}


function formatCurrency(elem) {

    var num = elem.value;

    // Remove any characters other than numbers and periods from the string, then parse the number
    var nNumberToFormat = parseFloat( String(num).replace(/[^0-9\.]/g, '') );
    // Escape when this number is invalid (parseFloat returns NaN on failure, we can detect this with isNaN)
    if( isNaN(nNumberToFormat) ) { nNumberToFormat = 0; }

    // Split number string by decimal separator (.)
    var aNumberParts = nNumberToFormat.toFixed(2).split('.');

    // Get first part = integer part
    var sFirstPart = aNumberParts[0];
    // Determine the position after which to start grouping
    var nGroupingStart = sFirstPart.length % 3;
    // Shift three to the right when first group is empty
    nGroupingStart += (nGroupingStart == 0) ? 3 : 0;
    // Start first result with ungrouped first part
    var sFirstResult = sFirstPart.substr(0, nGroupingStart);
    // Add grouped parts by looping through the remaining numbers
    for(var i=nGroupingStart, len=sFirstPart.length; i < len; i += 3) {
        sFirstResult += ',' + sFirstPart.substr(i, 3);
    }

    // Get second part = fractional part
    var sSecondResult = aNumberParts[1] ? '.' + aNumberParts[1] : '';

    // Combine the parts and return the result
    s = sFirstResult + sSecondResult;

    elem.value = s;


}

function showNotification(status, title, message){
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-right",
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    if(status == 'success'){
        toastr.success(message, title);
    }else if(status == 'error'){
        toastr.error('Something terrible happened, please try again later', 'Error');
    }
}