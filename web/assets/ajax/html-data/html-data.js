var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getHTMLCode(id)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/html-pages/get-code");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                $('#modal-title').html('Code');
                $('#html-code').text(response['html']);
                $('#modal-display-html-code').modal('show');
            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        XMLHttpRequestObject.send("param="+id);

    }

    return false;
}

function displayHTML(id)
{
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "/html-pages/display-code");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                //var url = "http://trk.bradvidler.com/team/app/ajax/src/tmp_files_html/page.html";
                var url = "/tmp_files_html/page.html";
                window.open(url, '_blank', 'location=yes,status=yes');

            }
        }


        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        XMLHttpRequestObject.send("param="+id);

    }

    return false;
}

