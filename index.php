<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src='jquery.sheetrock.min.js'></script>
<script type='text/javascript' src='handlebars.min.js'></script>

<script>
var mySpreadsheet = 'https://docs.google.com/spreadsheet/ccc?key=1dv1eeBf2KrMss2r7fDNXjLeeqyoB0Ozc6aEIZELxNiw#gid=0';

$(document).ready(function(){
var publicacionesTemplate = Handlebars.compile($('#publicaciones-template').html());
$('#tblpublicaciones').sheetrock({
  url: mySpreadsheet,
  sql: "select A,C,D,E,F order by C DESC",
  headersOff: true,
  rowHandler: publicacionesTemplate
	});
});

function tema(n,t)
{  
	document.getElementById("ulmenu").style.display="none";
        document.getElementById("titulo-tema").innerHTML=t.innerHTML;
        var todo = document.getElementsByClassName('qq');
	for (var i = 0; i < todo.length; i++) {
		todo[i].style.display="none";
	}
	var list = document.getElementsByClassName(n);
	for (var i = 0; i < list.length; i++) {
		list[i].style.display="block";
	}
}
</script>
<style>
@font-face {

    font-family: 'gobCL';

    src: url('../../cosas/fonts/gobcl/gobcl_regular-webfont.eot');

    src: url('../../cosas/fonts/gobcl/gobcl_regular-webfont.eot?#iefix') format('embedded-opentype'),

         url('../../cosas/fonts/gobcl/gobcl_regular-webfont.woff') format('woff'),

         url('../../cosas/fonts/gobcl/gobcl_regular-webfont.ttf') format('truetype'),

         url('../../cosas/fonts/gobcl/gobcl_regular-webfont.svg#gobCLRegular') format('svg');

    font-weight: normal;

    font-style: normal;
}
body{font-family: 'gobCL';font-size:13px;}
.btnver{
background-color:#0092ee;
padding: 0 10px;
border-radius: 3px 3px 3px 3px;
color:white;
text-decoration:none;
}
.btnver:hover{
background:#0099ee;
}
/* General menu styling */
.bib-nav {
position: relative;
margin: 0;
left: 3px;
padding: 0;
line-height: 22px;
z-index: 999;
}
/* The main bib-navigation link containers */
.bib-nav>li {
display: block;
float: left; /* Displaying them on the same line */
margin: 0;
padding: 0;
}
/* The main bib-navigation links */
.bib-nav>li>a {
/* Layout */
display: block;
position: relative;
padding: 10px 20px;
/* Text */
color: #fff;
font-size: 14px;
text-decoration: none;
/* Background */
background: #0092ee; 
border-radius: 3px 3px 3px 3px;
/* Making the color to change on hover with a transition */
-webkit-transition: color .3s ease-in;
-moz-transition: color .3s ease-in;
-o-transition: color .3s ease-in;
-ms-transition: color .3s ease-in;
}
/* Changing the color on hover */
.bib-nav>li>a:hover, .bib-nav>li:hover>a {
background:#0099ee;
border-radius: 3px 3px 0 0;
cursor: default;
}
/* The links which contain bib-dropdowns menu are wider, because they have a little arrow */
.bib-nav>.bib-dropdown>a {
padding: 10px 30px 10px 20px;
}
/* The arrow indicating the bib-dropdown */
.bib-dropdown>a::after {
content: "";
position: absolute;
top: 17px;
right: 10px;
width: 7px;
height: 7px;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-o-transform: rotate(45deg);
border-bottom: 1px solid #fff;
border-right: 1px solid #fff;
}
/* Changing the color of the arrow on hover */ 
.bib-dropdown>a:hover::after, .bib-dropdown:hover>a::after {
border-color: #0092ee;
}
/* The submenus */
.bib-nav ul {
position: absolute;
margin: 0;
padding: 0;
list-style: none;
display: block;
}
/* General layout settings for the link containers of the submenus */
.bib-nav ul li {
position: absolute;
top: -9999px; /* Hiding them */
height: 0px;
display: block;
margin: 0;
padding: 0;
/* Making them to expand their height with a transition, for a slide effect */
-webkit-transition: height .2s ease-in;
-moz-transition: height .2s ease-in;
-o-transition: height .2s ease-in;
-ms-transition: height .2s ease-in;
}
/* Displays the submenu links, by expading their containers (with a transition, previously defined) and by repositioning them */
.bib-dropdown:hover>ul>li {
height: 30px;
position: relative;
top: auto;
}
/* The submenu links */
.bib-nav ul li a {
/* Layout */
padding: 4px 20px;
width: 160px;
display: block;
position: relative;
/* Text */
color: white;
text-decoration: none;
font-size: 14px;
/* Background & effects */
background:#0092ee;
cursor: pointer;
-webkit-transition: color .3s ease-in, background .3s ease-in;
-moz-transition: color .3s ease-in, background .3s ease-in;
-o-transition: color .3s ease-in, background .3s ease-in;
-ms-transition: color .3s ease-in, background .3s ease-in;
}
/* Changing the link's color and background on hover */
.bib-nav ul li:hover>a, .bib-nav ul li a:hover {
background:#0099ee;
}
/* Making the level 2 (or higher) submenus to appear at the right of their parent */
.bib-nav ul .bib-dropdown:hover ul {
left: 200px;
top: 0px;
}
/* The submenu links have a different arrow which indicates another bib-dropdown submenu */
.bib-nav ul .bib-dropdown a::after {
width: 6px;
height: 6px;
border-bottom: 0;
border-right: 1px solid #fff;
border-top: 1px solid #fff;
top: 12px;
}
/* Changing the color of the arrow on hover */
.bib-nav ul .bib-dropdown:hover>a::after, .bib-nav ul .bib-dropdown>a:hover::after {
border-right: 1px solid #0fd0f9;
border-top: 1px solid #0fd0f9;
}
.qq{}
.qq .anio{width:40px;}
.qq .autor{width:180px;}
.qq .titulo{width:650px;}
.qq .link{width:30px;}
#titulo-tema{
font-size: 20px;
position: relative;
color: #0092ee;
top: 40px;
left: -157px;
z-index: 0;
}
</style>
</head>
<body>
<ul class="bib-nav">
<li class="bib-dropdown"> <a onclick="document.getElementById('ulmenu').style.display='block';" onmouseover="document.getElementById('ulmenu').style.display='block';" href="#">Selecciona un tema</a>
<ul id="ulmenu">
<li><a href="#" onclick="tema(1,this);">América Latina</a></li>
<li><a href="#" onclick="tema(2,this);">Pobreza</a></li>
<li><a href="#" onclick="tema(3,this);">Campamentos</a></li>
<li class="bib-dropdown"> <a href="#">Personas</a>
<ul>
<li><a href="#" onclick="tema(4,this);">Niños</a></li>
<li><a href="#" onclick="tema(5,this);">Jóvenes</a></li>
<li><a href="#" onclick="tema(6,this);">Hombres y mujeres</a></li>
<li><a href="#" onclick="tema(7,this);">Voluntariado</a></li>
</ul>
</li>
<li class="bib-dropdown"> <a href="#">Dimensiones de desarrollo</a>
<ul>
<li><a href="#" onclick="tema(8,this);">Salud</a></li>
<li><a href="#" onclick="tema(9,this);">Educación</a></li>
<li><a href="#" onclick="tema(10,this);">Economía</a></li>
<li><a href="#" onclick="tema(11,this);">Trabajo</a></li>
<li><a href="#" onclick="tema(12,this);">Capital social</a></li>
</ul>
</li>
<li><a href="#" onclick="tema(13,this);">Participación y ciudadanía</a></li>
<li><a href="#" onclick="tema(14,this);">Políticas de vivienda</a></li>
<li><a href="#" onclick="tema(15,this);">Evaluación de programas</a></li>
</ul>
</li>
</ul><br>
<label id="titulo-tema"></label>
<br>
<div style="margin-bottom: 50px;"></div>
<table id="tblpublicaciones">
  <script id="publicaciones-template" type="text/x-handlebars-template">
    <tr style="display:none;" class="qq {{cells.Cod}}">
        <td class="anio">{{cells.Anio}}</td><td class="autor"> {{cells.Autor}}</td><td class="titulo">{{cells.Titulo}}</td> <td class="link"><a target="_blank" class="btnver" href="{{cells.Link}}">ver</a></td>
    </tr>
  </script>
</table>

</body>
</html>