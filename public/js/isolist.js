var totlist =null, srchset = null, cpagenum = null;
function graball()
{
    "use strict";
    $.ajax({
        type:'GET',
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        url:'/downloadpage/getall',
        success:function(data) {
           totlist = JSON.parse(data);
           pagenum(0);

        }
     });
}
function pagenum(inp)
{
    "use strict";
    for (var i = inp*20; i < totlist.length && i < (inp*20)+20; i++)
    {
        var ext = totlist[i];
        var ind = -1;
        if (srchset!=null)
        ind = ext.distnm.toLowerCase().search(srchset);
        if (srchset==null || (srchset!=null && ind != -1)){
        var lnk = "/downloadpage/osid/"+ext.sr;
        var cont = '<tr><td>'+ext.distnm+'</td><td>'+ext.distfam+'</td><td><a href = "'+lnk+'">Go to Download</a></td></tr>';
        $("#tcont").append(cont);
        }
    }

}
window.onload = function () {
    this.graball();
    this.cpagenum = 0;
    $("#srtxt").on("input", function(){
        var inp = $("#srtxt").val();
        $("#tcont").html('');
        srchset = inp;
        srchset = srchset.toLowerCase();
        pagenum(0);
    });

};
function prevpage()
{
    "use strict";
    if (cpagenum > 0 && cpagenum < Math.ceil(totlist.length/20)-1)
    {
        cpagenum--;
        $("#prevbut").attr('onClick', 'prevpage()');
        $("#prevbut").css("color", "blue");
        $("#nxtbut").attr('onClick', "nxtpage()");
        $("#nxtbut").css("color", "blue");
        pagenum(cpagenum);

    }
    else 
    {
        $("#prevbut").removeAttr('onClick');
        $("#prevbut").css("color", "grey");
    }
    
}

function nxtpage()
{
    "use strict";
    if (cpagenum < Math.ceil(totlist.length/20)-1)
    {
        cpagenum++;
        $("#nxtbut").attr('onClick', "nxtpage()");
        $("#prevbut").attr('onClick', 'prevpage()');
        $("#prevbut").css("color", "blue");
        pagenum(cpagenum);
        $("#nxtbut").css("color", "blue");

    }
    else 
    {
        $("#nxtbut").removeAttr('onClick');
        $("#nxtbut").css("color", "grey");
    }
}