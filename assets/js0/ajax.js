function ajax(url, fun)
{
    xmlHttp=new XMLHttpRequest();
    if (!xmlHttp)
    {
        alert ("Browser does not support HTTP Request");
        return;
    }
    xmlHttp.onreadystatechange=fun;
    xmlHttp.open("POST", url, true);
    xmlHttp.send(null);
}