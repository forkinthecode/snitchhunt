   <style type="text/css">
body {font-family: "Courier New";  color:#fff; max-width:1500px; font-size:15px; margin:0;padding:0; background:url('images/power-plant.jpg'); }
.green {background:RGBA(199.211,162,0.9);}

#menu .box { 
  position: fixed;
  text-align: left;
  overflow: scroll;
  z-index: -1;
  opacity: 0;
  width: 300px;
  height: 100%;
 
  top: 10px;
  right:30px;

  background:RGBA(199,211,162, 0.9);
  -webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.3s ease-in-out;
}
#menu ul { 
  position: relative;
  top: 60px;
  right:30px;
  -webkit-transform: scale(2);
  -moz-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(2);
  -webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.3s ease-in-out;
}
#menu li { background:RGBA(42, 91, 114, 1);
  float:right;
  width:150px;
  height:30px;
  /*display: inline-block;*/ 
  margin: 20px;
}
#menu li a {
  /*border-radius: 3px;*/

  padding: 15px;
 
  text-decoration: none;
  font-size: 20px;

  -webkit-transition: all 0.2s ease-in-out; 
  -moz-transition: all 0.2s ease-in-out; 
  -o-transition: all 0.2s ease-in-out; 
  transition: all 0.2s ease-in-out;
}
#menu li a:hover { border-color: #fff; }
#menu li a i { 
  margin-right: 5px; 
  font-size: 24px;
}
#toggle-nav-label {
 

  text-align: center;
  line-height: 30px;
  font-size: 24px;
  display: block;
  cursor: pointer;
  position: fixed;
  top:10px;
  right:30px;
  z-index: 500;
  width: 250px;
  height: 30px;

 margin-bottom:30px;
/*border-radius:5px;*/
      
 
  
}
#toggle-nav { display: none; }
#toggle-nav:checked ~ .box { 
  
  opacity: 1;
  z-index: 400;
}
#toggle-nav:checked ~ .box ul {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
#toggle-nav:checked ~ #toggle-nav-label { 
   top:10px;
 
  
}
ul.horizontal {   
    list-style-type: none;
    margin: 10px;
    padding-left: 90px;

}
li.horizontal  {   width:125px;
    float: left;

}
li.horizontal  a {
    display: block;
 
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
/* Change the link color to #111 (black) on hover */
li.horizontal  a:hover {
  
}


.forms {width:100%; padding:1%; margin:0; }
.forms tr:nth-of-type(even){   padding:10px; margin:10px; }
.forms tr:nth-of-type(odd){   padding:10px; margin:10px; }
.forms td:nth-of-type(even){  width:30%;  margin:10px; }
.forms td:nth-of-type(odd){  width:65%%; }
.navigation { margin:auto;}
.navigation td{ padding:5px; margin:auto;}
.toper { color:#d88a1c; background:#333;font-family:Verdana; height:35px; font-size:18px; position:relative:top:50px; width:100%;}
.toper h4 {color:#d88a1c; background:#333;padding:10px;}
 .front { width:100%;  padding:5px; margin:auto; text-align:center; background:RGBA(199,211,162, 0.5);}
 .front td{ width:100%;  padding:5px; margin:auto; text-align:center;}
.navs { float:left; position: fixed;
    top: 20px;
    padding:bottom:10px;
    left: 20px;}

th {color:#2a5b72;}
h4,h2 { color:#333; background:#c7d3a2; padding:5px;}
.left h3 {color:#333; font-family:Garamond; font-size:25px; background:#c7d3a2; padding-left:5px; }


.right h3 {color:#333; font-family:Garamond; font-size:25px; background:#c7d3a2; padding-left:5px; }
.left h2 {color:#333; font-family:Garamond; background:#c7d3a2; padding:10px;}
.homer h2 {color:#2a5b72; font-family:Georgia; text-align:left; padding-left:5px; margin-left:10px; margin-right:10px;font-size:25px; background:#eee;}
.left h4 {color:#fff; font-size:16px; font-family:Georgia ;}
select {
 
  margin-left:5px;
  padding-left:5px;
  height:25px;
  width:90%;
  font-size:15px;
  /*border: 1px solid #999;*/
  text-decoration: none;
 
 
 
   
}
  .score {width:100%; font-size:15px; border: solid 1px #dcdcdc; border-radius:5px; margin-top:10px; color:#333;
    background:#2a5b72;}
  .score td:nth-of-type(odd) { width:200px;  padding:5px;}
  .score tr:nth-of-type(odd) { background:#c7d3a2;}
  .score tr:nth-of-type(even) { background:#eaf5f9;}
 .scoreboard {width:100%; font-size:18px; border: solid 1px #dcdcdc; border-radius:5px; 
  margin-top:10px; padding:2px;color:#333;background:#2a5b72;}
 .scoreboard tr:nth-of-type(odd) { background:#c7d3a2;}
 .scoreboard td:nth-of-type(odd) { background:RGBA(199,211,162, 0.4);padding:5px;}
 .scoreboard td:nth-of-type(even) { background:#eaf5f9;padding:5px;}
.home {font-size:16px; }

  h1 {color:#333; padding:10px; font-size:40px; padding-bottom:20; background:RGBA(199,211,162, 0.8); 
    font-family:Georgia;}
  h4 {color:#fff;}
 

.answers  {width:95%;background:#c7d3a2; padding:10px; 
  border-radius:5px;  font-size:15px; }
 .answers p,h2,h3 {color:#333;}
 .answers a {color:#2a5b72}
.challenge {width:100%;background:#d88a1c; padding:2%; color:#2a5b72; border-radius:5px; }
span.right {text-align:right; display:inline; color:#d88a1c; font-size:15px; background:#fff; width:100px; padding:5px;}
.news {background:RGBA(199,211,162, 0.7);}
a { color:#d88a1c; text-decoration:none; font-family:Georgia;}
.homer {text-align:left; border: solid 1px #dcdcdc;  
  border-radius:5px; margin-top:2%;   padding:10px; background:RGBA(42, 91, 114, 0.75)}
.homer a {color:#d88a1c; background:;}

.overlay-holder {
    position: relative;
    overflow: hidden;
    transition: all  ease;
    margin: 0 auto;
    max-width: 500;
}
.overlay-holder:hover .overlay {
    height: ;
}
.overlay {
    background: ;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 0;
    z-index: 10;
  }
  input[type=submit].hint { width:70px; background:RGBA(42, 91, 114, 0.75)
  float:right; height:70px;  background:url('information.png'); background-repeat:no-repeat; border: none;
  }
input[type=submit].close { position:fixed: top:10px; right:40px; width:70px; border: none;
  float:right; height:70px;  background:url('images/fast-forward.png'); background-repeat:no-repeat;
  }
input[type=submit] { font-family: "Courier New";
    font-size: 15px;
    height:35px;
    width:100%;
    color: #fff;
    padding: 5px 50px 5px 5px;
 
 color:#333;
 
   background:#aaa;
 
    cursor: pointer;
 
}
   * html .btn { border: 3px double #aaa; }
input[type=submit]:hover {
   
}
input.sign-in[type="password"] { 
padding-left:5px;

height:30px;
width:90%;
font-size:15px;
border: 1px solid #999;
 text-decoration: none;

 
                   }
input[type="text"] { 
padding-left:5px;
height:30px;
width:90%;
font-size:15px;
border: 1px solid #999;
 text-decoration: none;

 
   }


.expand {height:600px; overflow:scroll;   padding:2%; margin:1%;   background:RGBA(199,211,162, 0.5);}
.searches {width:100%; background:#c7d3a2; border-radius:5px; padding-top:1%; padding-bottom:1%; color:#fff;}
.wide {width:100%; background:#2a5b72; border-radius:5px; padding:1%; color:#fff;}
.basic {width:100%; background: #2a5b72; border-radius:5px; padding:1%; color:#fff;}


.left {float:left; background:RGBA(199,211,162, 0.5); padding:15px; }
.page_width {max-width:1300px; margin:auto;}
@media (max-width: 519px) {

    .right {float:right; width:100%; }
    .left  {float:left; width:100%; margin:2%; }
    

  
}

@media (min-width: 520px) and (max-width: 700px)   {

    .right {float:right; width:100%; }
    .left  {float:left; width:100%; margin-left:2%; }

  
}
@media (min-width: 701px)  {
 
.right {float:right; width:40%; }
.left  {float:left; width:52%; margin-left:2%; }

      
}


.clear {clear:both;}
table.right td{text-align:right;}
span.highlighted {
  background-color: #161616;
  font-weight: bold;
}
span.term0 {
  background-color: #161633;
}
span.term1 {
  background-color: #331616;
}
span.term2 {
  background-color: #163316;
}

li { list-style: none; }

/*.container { margin: 0px 20% 0px 20%; }*/


/*------------------------------------*\
    ACCORDION
\*------------------------------------*/
.boxes {background:RGBA(42, 91, 114, 0.75); display:inline;}
/**/
.tabs { max-width: 100%; float: none; list-style: none; padding: 0; /*margin: 75px auto;*/ border-bottom: 4px solid #ccc; }
 
.tabs:after { content: ''; display: table; clear: both;}
 
.tabs input[type=radio] { display:none;}
 
.tabs label { display: block; float: left; width: 33.33333%; font-size: 25px; font-weight: bold; text-decoration: none; text-align: center;
    line-height: 2; cursor: pointer; color:#333; height:50px; background:#eaf5f9; font-family:Garamond;

  }

.tabs iframe {width:500px;}
  
.tabs label span { font-size:60%;}
 
.tabs label i {  padding: 5px; margin-right: 0; }
 
.tabs label:hover {   background:#d88a1c;}
 
.tab-content {display: none; width: 100%; float: left; padding: 15px; box-sizing: border-box; background:RGBA(42, 91, 114, 0.75);}
.tab-content p {color:#fff;}
.tab-content * {-webkit-animation: scale 0.7s ease-in-out; -moz-animation: scale 0.7s ease-in-out; animation: scale 0.7s ease-in-out; }
 
@keyframes scale {
 
  0% {  transform: scale(0.9); opacity: 0;}
 
  50% {transform: scale(1.01); opacity: 0.5; }
 
  100% { transform: scale(1);opacity: 1;}
 
                }
.tabs [id^="tab"]:checked + label { }


#tab1:checked ~ #tab-content1,
#tab2:checked ~ #tab-content2,
#tab3:checked ~ #tab-content3
{
    display: block;
}
@media(max-width: 768px) {   .tabs label span { font-size:30%; display: block;}
 .tabs i { padding: 5px; margin-right: 10px;}
 .tabs label span {  display: inline-block; }
 .tabs {max-width: 750px; margin: 50px auto;}

  .overlaid  { padding:5px;}
  td:nth-of-type(even) {}
#overlay {
  width: 90%;
  margin: 0 auto;
  background:RGBA(42, 91, 114, 1);
  padding: 35px;
  border: 2px solid #fff;
  
  background-clip: padding-box;
  text-align: center;
}


</style>