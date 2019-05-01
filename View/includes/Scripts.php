<script type="text/javascript" src="View/javaScript/OwlCarousel/src/js/owl.carousel.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="View/javaScript/main.js"></script>
<script>

comprobarCookies();

function GetCookie(name) {
    var arg=name+"=";
    var alen=arg.length;
    var clen=document.cookie.length;
    var i=0;

    while (i<clen) {
        var j=i+alen;
        if (document.cookie.substring(i,j)==arg)
            return "1";
        i=document.cookie.indexOf(" ",i)+1;
        if (i==0)
            break;
    }

    return null;
}

function aceptar_cookies(){
    var expire=new Date();
    expire=new Date(expire.getTime()+31536000000); //En milisegundos, esto sería un año .
    document.cookie="cookieArtsapartments=1; expires="+expire+";path=/";
    document.getElementById('barra').style.display = 'none';
}

function guardarCookie(nombre,valor,fecha) {
        document.cookie = nombre+"="+valor+";expires="+fecha;
    }

function comprobarCookies(){
    var visit=GetCookie("cookieArtsapartments");
    if (visit!=1){ popbox3(); }
}


function popbox3() {
    document.getElementById('barra').style.display = 'block';
}
</script>
<script type="text/javascript" src="View/JavaScript/registro.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>-->

<script  src="View/JavaScript/popup-login.js"></script>
<script  src="View/JavaScript/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!--<script type="text/javascript" src="jquery.leanModal.min.js"></script>-->
