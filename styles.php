   <style type="text/css">
body {font-family: "Courier New"; height:100%; background:#eee; color:#fff; max-width:1500px; font-size:15px;
 margin:0;padding:0; background:url('images/power-plant.pg'); }
.top {padding-right:50px;}


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
span.right  { margin:5px; width:10%; float:left; height:30px; background:url('images/checked.png'); background-repeat:no-repeat; background-size:20px;
 padding-left:30px; }
 span.wrong  { margin:5px; width:10%; float:left; height:30px; background:url('images/error.png'); background-repeat:no-repeat; background-size:20px;
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
 

.answers  {background:#c7d3a2; padding:10px; margin:1%; border: none;
  border-radius: 0px 5px; 
   font-size:15px; font-family:Georgia; }
 .answers p,h2,h3 {color:#333; font-family:Georgia;}
 .answers a {color:#2a5b72}
.challenge {width:100%;background:#d88a1c; padding:1%; color:#2a5b72; border-radius:5px; }
.listish {list-style-type:circle; padding-bottom:10px;}
.news {background:RGBA(199,211,162, 0.7);}
a { color:#d88a1c; text-decoration:none; font-family:Georgia;}
.homer {text-align:left; border: solid 1px #dcdcdc;  
  border-radius:5px; margin-top:2%;   padding:10px; background:RGBA(42, 91, 114, 0.85)}
.homer a {color:#d88a1c; background:;}
.homer p {padding-left:10px; padding-right:10px;}
/* Responsive iFrame */

.calendar-container {
    position: relative;
    padding-bottom: 75%;
    height: 0;
    overflow: hidden;
}
.calendar-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
#play {margin:20px; position:absolute:top: 20px;right:40px; background:#fff; width:100px;}
   input[type=submit].searching { width:70px; height: 70px; background:RGBA(42, 91, 114, 0.75);
  background:url('images/fast-forward.png'); background-repeat:no-repeat; 
  border: none; background-size:70px; display:inline; float:right; margin-right:40px;
  }
   input[type=submit].override { width:65px; height:65px; font-family: "Georgia"; 
   background:url('images/loading.png'); background-repeat:no-repeat;margin: 20px;background-repeat:no-repeat; border: none; 
  }
  input[type=submit].answer { width:100px; height:65px; font-family: "Georgia"; 
   background:url('images/grades-green.png'); background-repeat:no-repeat; border: none;
  }
  input[type=submit].hint { width:100px; height:75px; font-family: "Georgia"; 
    background:url('images/question.png'); background-repeat:no-repeat; border: none;
  }
input[type=submit].close { position:fixed: top:10px; right:40px; width:70px; border: none; font-family: "Georgia"; 
  float:right; height:70px;  background:url('images/fast-forward.png'); background-repeat:no-repeat;
  }
input[type=submit].menu-button { font-family: "Georgia"; font-size: 15px; height:35px; width:100%;
  padding: 5px; color:#eee; background:#333;  cursor: pointer;
 
}
 input[type=submit].search-button { font-family: "Georgia"; font-size: 15px; height:35px; width:125px;
  padding: 5px; color:#eee; background:#333;  cursor: pointer;
 
}  

input.sign-in[type="password"] { 
padding-left:5px;

height:30px;
width:90%;
font-size:15px;

 text-decoration: none;

 
                   }
input[type="text"] { 
padding-left:5px;
height:30px;
width:90%;
font-size:15px;

 text-decoration: none;

 
   }

.expand_search { padding:2%; margin:1%; background:RGBA(42, 91, 114, 0.85); }

.expand { height:600px; overflow:scroll;   padding:2%; margin:1%;   background:RGBA(42, 91, 114, 0.85);}
.searches { width:100%; background:#c7d3a2; border-radius:5px; padding-top:1%; padding-bottom:1%; color:#fff;}
.wide { width:100%; background:#2a5b72; border-radius:5px; padding:1%; color:#fff;}
.basic { width:95%; max-width:450px; overflow:scroll; background: #2a5b72; margin:auto; color:#fff; 

border: 1px double #fff;
outline: 10px solid #2a5b72; border-radius:5px;

  }
.basic td {padding:5px;}
.right { background:RGBA(199,211,162, 0.5); }
.left { float:left; background:RGBA(199,211,162, 0.5); }
.page_width { max-width:1300px; margin:auto;}
@media (max-width: 519px) {

.right {float:right; width:100%; margin-left:20px; margin-top:20px; }
.left  {float:left; width:100%; margin-bottom:20px; }
    
.log-in {width:500px; padding:1%;  }
.log-in td {  margin:0; }
.main-menu { width:500px;  padding:1%;  }
.main-menu td{ }
.data-menu {width:500px;  display:inline;}
.data-menu td{ }
  
}

@media (min-width: 520px) and (max-width: 700px)   {

    .right {float:right; width:100%; }
    .left  {float:left; width:100%;  }

    
  .log-in {min-width:520px; max-width:700px; padding:1%;  }
  .log-in td {  margin:0; }
 .main-menu { min-width:520px; max-width:700px; padding:1%;  }
 .main-menu td{ }
 .data-menu {min-width:500px; max-width:680px; margin:left:50px; display:inline;}
  .data-menu td{ }
}
@media (min-width: 701px)  {
  .log-in {width:45%;  display:inline;}
  .log-in td {width:125px;  margin:0; }
 .main-menu { width:100%;   display:inline; }
 .main-menu td{ width:125px;}
 .data-menu {width:100%;  display:inline;}
  .data-menu td{ width:125px;}
.right {float:right; width:45%; }
.left  {float:left; width:52%; m}

      
}
#menu { margin;auto; padding-left:1%;}

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
/* Optional styling */
.phone {background:url('images/phone.png'); background-size:430px; background-repeat:no-repeat; margin-left:15px;}
.phone p {font-style:bold;}
details { color: #fff; margin: 0 0 .4em; padding: 1%; }
details[open] {  }
summary { cursor: pointer; font-family:Georgia;   margin: -1%; padding: 8px 0; position: relative; width: 102%; border:none;}
summary:hover, details[open] summary {}
summary::-webkit-details-marker {display: none;border:none;}
summary:before{ content: "+"; color: #fff; display: block; float: left; font-weight: bold; margin: -2px 10px 0 10px; padding: 0; text-align: center; width: 20px;}
details[open] summary:before {content: "Close"; width:50px; margin-top: -4px; float:right; margin-right:30px;}


</style>