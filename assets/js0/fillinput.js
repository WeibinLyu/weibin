
var idarr = Array();

function fill()
{
    var tag;
    var i=0;
    do{
        tag=document.getElementsByTagName("input")[i];
        idarr[i]=tag.getAttribute("id");
        ++i;
    }while(document.getElementsByTagName("input")[i]);
    var j=0;
    do{
        tag=document.getElementsByTagName("textarea")[j];
        idarr[i+j]=tag.getAttribute("id");
        ++j;
    }while(document.getElementsByTagName("textarea")[j]);
    
    xmlHttp=new XMLHttpRequest();
    if (!xmlHttp)
    {
        alert ("Browser does not support HTTP Request");
        return;
    }
    xmlHttp.onreadystatechange=fun;
    xmlHttp.open("POST", "../../php/fillinput.php", true);
    xmlHttp.send(null);
}

function fun()
{
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
        //alert("OK!");
        var info = JSON.parse(xmlHttp.responseText);
        for(var i=0; i<idarr.length; ++i){
            if(!idarr[i]){
                ++i;
            }else{
                document.getElementById(idarr[i]).value = info[idarr[i]];
            }
        }
    }
}