   <style type="text/css">
body {font-family: "Courier New"; height:100%;  color:#fff; max-width:1500px; font-size:15px; margin:0;padding:0; background:url('images/power-plant.jpg'); }
.top {padding-right:50px;}

#menu .box { 
  position: fixed;
  text-align: left;
  overflow: scroll;
  z-index: -1;
  opacity: 0;
  width: 300px;
  height: 100%;
 
  top: 60px;
  left:30px;

  background:RGBA(199,211,162, 0.9);
  -webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.3s ease-in-out;
}
#menu ul { 
  position: relative;
  top: 10px;
  right:50px;
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
  top:5px;
  left:-20px;
  z-index: 500;
  width: 150px;
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
.errors {height:30px; display:inline;}

.forms {width:100%; padding:1%; margin:0; }
.forms tr:nth-of-type(even){   }
.forms tr:nth-of-type(odd){   }
.forms td:nth-of-type(even){ float:left;   }
.forms td:nth-of-type(odd){  padding-left:20px;width:450px;  }
.navigation { margin:auto;}
.navigation td{ padding:5px; margin:auto;}
.toper { color:#2a5b72; background:#eee; font-family: Georgia; height:30px; 
 width:100%; }
.toper h4 {color:#2a5b72; background:#eee; font-family: Georgia; font-size:20px;}
.toper2 h4 {color:#2a5b72; background:#eee; font-family: Georgia; font-size:20px;}
/*
span.lefty {float:left; font-size:22px; padding-left:100px; padding-top:5px; display:inline;} */
span.right  { margin:5px; width:10%; float:left; height:30px; background:url('checked.png'); background-repeat:no-repeat; background-size:20px;
 padding-left:30px; }
 span.wrong  { margin:5px; width:10%; float:left; height:30px; background:url('error.png'); background-repeat:no-repeat; background-size:20px;
 padding-left:30px; }
 .front { width:100%;  padding:5px; margin:auto; text-align:center; background:RGBA(199,211,162, 0.5);}
 .front td{ width:100%;  padding:5px; margin:auto; text-align:center;}
.navs { float:left; position: fixed;
    top: 20px;
    padding:bottom:10px;
    left: 20px;}

th {color:#2a5b72;}
h4,h2 { color:#333; background:#c7d3a2; padding:5px;}
.left h3 {color:#333; font-family:Garamond; font-size:25px; background:#c7d3a2; padding-left:5px; }
h5 {font-size:13px; color:#2a5b72;}
.left h3{color:#333;}
.right h3 {color:#333; font-family:Garamond; font-size:25px; background:#c7d3a2; padding-left:5px; }
.left h2 {color:#333; font-family:Garamond; background:#c7d3a2; padding:10px;}
.homer h2 {color:#2a5b72; font-family:Georgia; text-align:left; padding-left:5px; 
  margin-left:10px; margin-right:10px;font-size:25px; background:#eee;}
.left h4 {color:#fff; font-size:16px; font-family:Georgia ;}
select {
 
 
 
  height:45px;
  width:92%;
  font-size:15px;
  /*border: 1px solid #999;*/
  text-decoration: none;
 
 
 
   
}
table { 
    border-collapse: collapse; 
}

  .score {width:100%; font-size:18px; border:none; border-radius:5px; margin-top:10px; color:#2a5b72;
 background:RGBA(199,211,162, 1); font-family:Georgia; }
 .score td:nth-of-type(even) { width:200px;  padding-bottom:10px;}
.score th {padding:10px; color:#d88a1c;}
  .score td:nth-of-type(odd) { width:200px; color:#d88a1c; padding:10px; }
  .score tr:nth-of-type(odd) {  border-bottom: dashed 1px #dcdcdc;}
  .score tr:nth-of-type(even) {  background:#eaf5f9;}
  .scoreboard th {padding:10px;}
 .scoreboard {width:100%; font-size:24px; font-style:italic; border-bottom: none; border-radius:5px; 
  margin-top:10px; padding:5px;color:#d88a1c;background:#2a5b72; font-family:Georgia;}
 .scoreboard tr:nth-of-type(odd) { background:#c7d3a2;padding:20px; color:#333;}
  .scoreboard tr:nth-of-type(even) { padding:20px; }
 .scoreboard td:nth-of-type(odd) { padding-left:60px; }
 .scoreboard td:nth-of-type(even) { padding-left:60px;}
.home {font-size:16px; }

  h1 {color:#333; padding:10px; font-size:40px; padding-bottom:20; background:RGBA(199,211,162, 0.8); 
    font-family:Georgia;}
  h4 {color:#fff;}
 

.answers  {width:90%;background:#c7d3a2; padding:10px; margin-left:20px;
  border-radius:5px;  font-size:15px; font-family:Georgia; }
 .answers p,h2,h3 {color:#333; font-family:Georgia;}
 .answers a {color:#2a5b72}
.challenge {width:100%;background:#d88a1c; padding:2%; color:#2a5b72; border-radius:5px; }
.listish {list-style-type:circle; padding-bottom:10px;}
.news {background:RGBA(199,211,162, 0.7);}
a { color:#d88a1c; text-decoration:none; font-family:Georgia;}
.homer {text-align:left; border: solid 1px #dcdcdc;  
  border-radius:5px; margin-top:2%;   padding:10px; background:RGBA(42, 91, 114, 0.85)}
.homer a {color:#d88a1c; background:;}
.homer p {padding-left:10px; padding-right:10px;}
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
#play {margin:20px; position:absolute:top: 20px;right:20px; background:#fff; width:100px;}
   input[type=submit].searching { width:70px; height: 70px; background:RGBA(42, 91, 114, 0.75);
  background:url('search.png'); background-repeat:no-repeat; border: none; background-size:70px; display:inline; float:right;
  }
  input[type=submit].answer { width:100px; height:65px; font-family: "Georgia"; 
   background:url('grades-green.png'); background-repeat:no-repeat; border: none;
  }
  input[type=submit].hint { width:100px; height:75px; font-family: "Georgia"; 
    background:url('question.png'); background-repeat:no-repeat; border: none;
  }
input[type=submit].close { position:fixed: top:10px; right:40px; width:70px; border: none; font-family: "Georgia"; 
  float:right; height:70px;  background:url('images/fast-forward.png'); background-repeat:no-repeat;
  }
input[type=submit].menu-button { font-family: "Georgia"; font-size: 15px; height:35px; width:100%;
  padding: 5px; color:#333; background:#aaa; cursor: pointer;
 
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
.basic {width:100%; background: #2a5b72; border-radius:5px; margin:1%;  color:#fff;}

.right {background:RGBA(199,211,162, 0.5); }
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



</style>