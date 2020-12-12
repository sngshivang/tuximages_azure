function showoptions(inp)
{
    "use strict";
    var parser = new DOMParser;
    var dom = parser.parseFromString(
        '<!doctype html><body>' + inp,
        'text/html');
    var decodedString = dom.body.textContent;
    console.log(decodedString);
    var rcv = JSON.parse(decodedString);
    //var rcv = decodedString;
    var osn = rcv.distnm;
    var lstupd = rcv.lastupd;
    var distfam = rcv.distfam;
    //var urls = JSON.parse(rcv.allurloptions);
    var urls = rcv.allurloptions;
    $('#osn').html(osn);
    $('#osfam').html(distfam);
    $('#lastupd').html(lstupd);
    for (var i = 0; i< urls.length; i++)
    {
        var row = urls[i];
        var typ = row.typ;
        var lnk = row.lnk;
        var sha = row.sha;
        var lmod = row.lmod;
        var str = '<li>Type '+typ+': <a href = "'+lnk+'">Download from '+distfam+'</a><ul><li><code>SHA: '+sha+'</code></li><li style = "font-style: italic;">Link Validity: '+lmod+'</li></ul></li>';
        $('#oslnks').append(str);
    }

    console.log("This is a test statement");
}