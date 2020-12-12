function askPassword() {
    "use strict";
var txt;
var un = prompt("Please enter your admin Username:");
if (!(un == null || un == "")){
var pass = prompt("Please enter your admin password:");
if (pass == null || pass == "") {
    window.alert("Process has been cancelled as the password wasn't entered.")
} else {
  $.ajax({
             type:'POST',
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
             url:'/admin/adminservices/1',
             data:{
                 name: un,
                 ps: pass
              },
             success:function(data) {
                if (data === 'false')
                {
                  window.alert('Authentication failed. You will not be able to proceed. In case you want to try again, please refresh the page');
                }
                else if (data === 'true')
                window.alert('Authentication successful');
             }
          });
}
}
else 
window.alert("Username has not been entered. Please reload this page");
  }

  function converttoarr()
  {
    var lnks = lnkentry.oslnk.value;
    var mrk = 0;
    var finar = [];
    for (var i = 0; i < lnks.length + 1; i++)
    {
        if (lnks.charCodeAt(i)==10 || i == lnks.length)
        {
            var subsec = lnks.substring(mrk, i);
            mrk = i+1;
            var colind = subsec.indexOf("@-@");
            var temp = [];
            while (colind!=-1){
            var typ = subsec.substring(0, colind);
            temp.push(typ);
            subsec = subsec.substring(colind+3, subsec.length);
            colind = subsec.indexOf('@-@');
            if (colind==-1)
            temp.push(subsec);
            }
            var obj = new objectconverter(temp[0], temp[1], temp[2], temp[3]);
            finar.push(obj);
        }
    }
    var js = JSON.stringify(finar);
    $('#oslnk').val(js);
    sessionStorage.setItem("transformed","yes");
    //console.log(js);
  }
  function objectconverter(typ, lnk, sha, lmod)
  {
    this.typ = typ;
    this.lnk = lnk;
    this.sha = sha;
    this.lmod = lmod;
  }
  function modification()
  {
    var trip = lnkentry.tripvar.value;
    var osid = lnkentry.osid.value;
    if (trip === 'false'){
      $('#tripvar').val('true');
      $('#modbut').html('Modification On');
    $.ajax({
      type:'POST',
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
      url:'/admin/adminservices/2',
      data:{
          osidn: osid
       },
      success:function(data) {
         if (data === 'NOOSID')
         {
           window.alert('No matching OSID found. Check the OSID or contact the administrator.')
         }
         else {
         var inp = JSON.parse(data);
         $('#osfname').val(inp.distnm);
         $('#osfam').val(inp.distfam);
         $('#oslnk').val(JSON.stringify(inp.allurloptions));
         }
      }
   });
  }
  else 
  {
    $('#tripvar').val('false');
    $('#osfname').val('');
    $('#osfam').val('');
    $('#oslnk').val('');
    $('#modbut').html('Modification Off');

  }

  }
  /*$(document).ready(function()
  {
    askPassword();
  });*/
  //window.onload = askPassword();
