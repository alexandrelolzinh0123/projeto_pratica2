<html>
<head>
<meta charset="utf-8">
<title>Tirar Fotos</title>
<meta name="viewport" content="width=device-width">
<script src="jquery-3.2.0.js"></script>
<script src="color-thief.js"></script>
<style >
        video { border: 1px solid #ccc; display: block; margin: 0 0 20px 0; }
        #canvas { margin-top: 20px; border: 1px solid #ccc; display: block; }
        
        #mydiv {
            width: 100px;
            height: 100px;
            border: 1px solid #000;
        }

  

</style>
</head>
<body>
<div>
 
    <div><video id="video" width="640" height="480" autoplay></video></div>
    <div><button id="snap">Tirar Foto</button></div>
    <div><button id="save">Salvar Foto</button></div>
    <div><a href="deteccao.php">detectar</a></div>
    <div><canvas id="canvas" width="640" height="480"></canvas></div>

<script>
    
    window.addEventListener("DOMContentLoaded", function() {
        var canvas = document.getElementById("canvas");
        context = canvas.getContext("2d");
        video = document.getElementById("video");
      if (navigator.mozGetUserMedia) { 
       navigator.myGetMedia=navigator.mozGetUserMedia;
       navigator.myGetMedia({video: true}, connect, error); 
    } 
     if (navigator.msGetUserMedia) { 
       navigator.myGetMedia=navigator.msGetUserMedia;
       navigator.myGetMedia({video: true}, connect, error); 
    } 
     if (navigator.webkitGetUserMedia) { 
       navigator.myGetMedia=navigator.webkitGetUserMedia;
       navigator.myGetMedia({video: true}, connect, error); 
    }
    if (navigator.getUserMedia) { 
       navigator.myGetMedia=navigator.webkitGetUserMedia;
       navigator.myGetMedia({video: true}, connect, error); 
    }  
    
    function connect(stream) {

        
            video.src = window.URL ? window.URL.createObjectURL(stream) : stream;
            video.play();

        
    }

    function error(e) { console.log(e); }

    }, false);
    document.getElementById("snap").addEventListener("click", function() {      
        canvas.getContext("2d").drawImage(video, 0, 0, 640, 480);       
        //alert(canvas.toDataURL());
    });
    document.getElementById("save").addEventListener("click", function() {      
        $.post('fotossalvar.php', {imagem:canvas.toDataURL()}, function(data){
        },'json');
    });
    document.getElementById("detecção").addEventListener("click", function() {      
        $.post('deteccao.php', {imagem:canvas.toDataURL()}, function(data){
        },'json');
    });
    
</script>  

</body>
</html>