<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,minimum-scale=0.1,maximum-scale=10,initial-scale=1.0,user-scalable=yes"/>

        <link rel="stylesheet" href="[:vendor]/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="[:vendor]/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="[:vendor]/sb-admin/sb-admin-2.min.css">
       
        <script src="[:vendor]/jquery/jquery-2.1.1.min.js"></script>
        <script src="[:vendor]/bootstrap/js/bootstrap.min.js"></script>
        <script src="[:vendor]/vue/vue.js"></script>
        <script src="[:vendor]/metisMenu/metisMenu.min.js"></script>
        <script src="[:vendor]/sb-admin/sb-admin-2.min.js"></script>
        <script src="[:app]/js/html5webpiano.js"></script>
        <title></title>
        <script>
            var seed = 0;
            var rand = function(min, max) {
                max = max || 1;
                min = min || 0;
                seed = (seed * 9301 + 49297) % 233280;
                var rnd = seed / 233280.0;
                return min + rnd * (max - min); 
            };
            $(document).ready(function() {
                var flag = 0;
                var color = getRandomColor();
                $("body").css("background-color", color); 
                $("body").keydown(function(key){
                    if (flag == 0) {
                        console.log(key.keyCode);
                        seed = key.keyCode;
                        var color = getRandomColor();
                        $("body").css("background-color", color);
                        flag = 1;
                    }
                });
                $("body").keyup(function() {
                    flag = 0; 
                });
            });
            var getRandomColor = function(){    
                return  '#' +    
                    (function(color){    
                        return (color +=  '0123456789abcdef'[Math.floor(rand(0, 16))])    
                            && (color.length == 6) ?  color : arguments.callee(color);    
                    })('');    
            } 
        </script>
        <style>
            body {width: 100%; height:500px;}
        </style>
    </head>
    <body>
    </body>
</html>



