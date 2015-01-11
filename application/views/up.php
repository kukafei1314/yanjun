<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url('static/css/up.css'); ?>"/>
<script type="text/javascript" src="<?php echo base_url('static/js/jquery-1.8.0.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/js/up.js'); ?>"></script>
<title>无标题文档</title>
</head>
<div class='previewDemo'>  
    <input id="file" type="file" onchange="preivew(this, document.getElementById('img'));">  
    <img id="img"  style="visibility:hidden" mce_style="visibility:hidden" height="100px" width="100px">  
</div>  
<script language="javascript" type="text/javascript"> 
     var allowExt = ['jpg', 'gif', 'bmp', 'png', 'jpeg'];  
     var preivew = function(file, container){  
         try{  
            var pic =  new Picture(file, container);  
         }catch(e){  
             alert(e);  
         }  
     }  
     //缩略图类定义  
     var Picture  = function(file, container){  
         var height = 0,   
             widht  = 0,   
             ext    = '',  
             size   = 0,  
             name   = '',  
             path   =  '';  
         var self   = this;  
         if(file){   
             name = file.value;  
             if (window.navigator.userAgent.indexOf("MSIE")>=1){   
                 file.select();   
                 path = document.selection.createRange().text;   
             }else if(window.navigator.userAgent.indexOf("Firefox")>=1){   
                 if(file.files){   
                     path =  file.files.item(0).getAsDataURL();   
                 }else{  
                     path = file.value;  
                 }  
             }   
         }else{  
             throw "bad file";  
         }   
  
  
         ext = name.substr(name.lastIndexOf("."), name.length);  
  
         if(container.tagName.toLowerCase() != 'img'){  
             throw "container is not a valid img label";  
             container.visibility = 'hidden';  
         }  
         container.src = path;  
         container.alt = name;  
         container.style.visibility = 'visible';  
         height = container.height;  
         widht  = container.widht;  
         size   = container.fileSize;  
  
  
         this.get = function(name){  
             return self[name];  
         }  
  
         this.isValid = function(){  
             if(allowExt.indexOf(self.ext) !== -1){  
                 throw 'the ext is not allowed to upload';  
                 return false;  
             }  
         }  
     }  
</script>  
<body>
</body>
</html>