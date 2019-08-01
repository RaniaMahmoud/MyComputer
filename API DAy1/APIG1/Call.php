<html>
    <head>
        <title>call api ajax</title>
        
    </head>
    <body>
        <div id="students">
        </div>
    <script>
    //create obj from xmlhttpreq
        var http=new XMLHttpRequest();
       //set onreadystatechange list 
        http.onreadystatechange=function()
        {
            
            if(this.readyState==4 && this.status==200)
                {
                 document.getElementById('students').innerHTML=this.responseText.split('},')[1];
                }
        }
        
    http.open('GEt','http://localhost:8080/APIG1/',true);
http.send();
 </script>
    </body>
    
</html>