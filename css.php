<style>


* { margin: 0; padding: 0; }
body { height:100%;  
  color: #333;  font-family:arial; font-size:18px; width:100%; } a:active { outline: none;}
.shares {margin-left:43%; margin-top:5px;  width:100%; }
h2.top_title {color:#333; text-align:center;  margin-top:10px;  font-family:Verdana; width:100%;}

  .nav { width:100%; height:50px; }
h5 {font-size: 20px; }
.top-nav {position:absolute; top: -20px; width:100%; }
ul li { }
  .heading { margin-top:0px;}
  .banner { width:100%; }
p.small { font-size:15px;}
::selection { background: #ffb7b7; /* WebKit/Blink Browsers */}
::-moz-selection { background: #ffb7b7; /* Gecko Browsers */}
.backbutton { float:left;  background-size:30px; z-index: 5000;}
.nextbutton { float:right;  margin-right:100px; background-size:30px;z-index: 5000;}
.right { float:right; width:45%; }
.left { float:left; width:45%; }
.page {  overflow:scroll;   font-size:18px;  margin-left:20px; right-margin:50px; padding-top:20px;
padding-bottom:20px; 
width:100%; }
.content{ width:100%; height:100%; }
.police { width:450px;}
.content_title {  color:#eee;  padding:10px; display:none;}
.pics { width:100%; margin-bottom:30px; border: solid: 1px;}
.pics td:nth-of-type(odd) { width:30%; }

.top-nav    { margin:20px; width:100%; padding-right:50px; }
.bottom-nav { margin:20px; width:100%; padding-right:50px; }

.top-nav td:nth-of-type(even)    {float:right; width:50%; text-align:right; }
.bottom-nav td:nth-of-type(even) {float:right; width:50%; text-align:right;}

.nav_button {width:100%; height:40px; color:#333;   font: bold 84%'trebuchet ms',helvetica,sans-serif; 
  background-color: #eee; border: none }
.nav_button:hover {background-color:green; color:#fff;}


.people {width:100%; padding:2%; }
p {margin-bottom:20px; margin-left:10px;  }
h1 { text-align: center; padding: 0 50px;  font-size: 40px; padding-right:90px; }
h2 {padding-left:10px; padding-right:90px; font-family:arial;}
h3 {padding-left:10px; padding-right:90px; font-family:arial;}
h4 {padding-left:10px;padding-right:90px; font-size:15px; font-family:arial;}
h5 {padding-left:35px; padding-right:100px; font-family:arial;}
h6 { font-size:15px; margin-top:10px; font-family:arial; margin-bottom:10px;
  color:RGBA(42, 91, 114, 0.75);}
ul {margin-left:50px;}
input[type="text"] { padding-left:5px; height:30px; width:90%; font-size:15px;text-decoration: none;}
blockquote {margin:20px;padding-right:20px;}
.data {width:450px;}

@media (max-width: 719px) { 
  .page {margin-left:5px; margin-right:5px; }
.video_large {display:none;}
.framework {display:none;}
p {font-size:15px; line-height:20px; width:90%;}
h5 {font-size:17px;}
h2 {font-size:20px; margin-left:20px;}
h3 {margin-left:20px; font-size:25px; margin-top:10px;}
.article_image {width:80%;margin:10%;}
.article_text {width:100%;}
.people {display:none;}
.people_small {margin-left:40px;}
.police {width:300px; margin-left:50px;}
.left {width:100%;}
.right {width:100%; }
.data {width:90%;}

.metadata td:nth-of-type(odd) {display:none;}
.basic td:nth-of-type(odd) {display:none;}
}

@media (min-width: 720px) {
.page {  min-height:1000px; }
.people_small { display:none; width:100%;}
}

.video_small {display:none;}
.framework2   { 
width:100%; 

/*background:RGBA(42, 91, 114, 1);*/
margin-top:60px;
cellspacing: 0; 
border-collapse: collapse;
position: fixed;
z-index: 5000;
bottom: -1px;
left: 0;
right: 0;

}

.framework2  a { 
line-height: 54px;
font-family: helvetica, arial;
font-size: 20px;
font-weight: bold;
text-decoration: none;
color: #fff;
display: block;
text-align: center;
margin: 0;

/*
-moz-transition: all 0.2s; 
-webkit-transition: all 0.2s; 
-o-transition: all 0.2s; 
transition: all 0.2s; 
*/
}
@media (min-width: 719px) { 
.article_image {width:45%; float:right;}
.article_text {width:35%;float:left;}

.framework { width:100%;
position:fixed;
background:#fff;
cellspacing: 0; 
border-collapse: collapse;
position: fixed;
z-index: 5000;
bottom: -1px;
left: 0;
right: 0;

}
.framework td {min-width:60px;   }

.framework a {
line-height: 35px;
font-family: helvetica, arial;
font-size: 11px;
font-weight: bold;
text-decoration: none;
color: #333;
display: block;
text-align: center;
margin: 0;

/*
-moz-transition: all 0.2s; 
-webkit-transition: all 0.2s; 
-o-transition: all 0.2s; 
transition: all 0.2s; 
*/
}


#p1:hover,#p2:hover,#p3:hover,#p4:hover,#p5:hover,#p6:hover,#p7:hover,#p8:hover,#p9:hover,#p10:hover {background:#eee; }



.framework a:hover 

{ 
 /*
-moz-transition: background 0s; 
-webkit-transition: background 0s; 
-o-transition: background 0s; 
transition: background 0s; */
}
}

input[type=radio]
{/* Double-sized Checkboxes/radioboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  padding: 20px; margin:10px;
  border:none;}
input[type=submit].nav_button_left { width:100px; height:65px; font-family: "Georgia"; 
  background:url('images/left-arrow.png'); background-repeat:no-repeat; border: none;text-decoration: none; padding-top:40px;}
input[type=submit].nav_button_right { width:100px; height:65px; font-family: "Georgia"; 
  background:url('images/right-arrow.png'); background-repeat:no-repeat; border: none; text-decoration: none; margin-right:-70px; }
input[type=submit].answer { width:100px; height:65px; font-family: "Georgia"; 
   background:url('images/next.png'); background-repeat:no-repeat; border: none;}
input[type="text"] { padding-left:5px; height:30px; width:90%; font-size:15px; text-decoration: none;}
select {height:45px; width:92%; font-size:15px; text-decoration: none;}

.toper {background:#fff; padding:10px;}
input[type=submit].searching { width:70px; height: 70px; background:RGBA(42, 91, 114, 0.75);
  background:url('images/next.png'); background-repeat:no-repeat; 
  border: none; background-size:70px; display:inline; float:right; margin-right:40px;}
input.sign-in[type="password"] { padding-left:5px; height:30px;width:90%;font-size:15px;text-decoration: none;}
input[type=submit].close { position:fixed: top:10px; right:40px; width:70px; border: none; font-family: "Georgia"; 
  float:right; height:70px;  background:url('images/fast-forward.png'); background-repeat:no-repeat;}
.forms {width:80%;  margin:10px; }
.forms tr:nth-of-type(even){   }
.forms tr:nth-of-type(odd){   }
.forms td:nth-of-type(even){ float:left;   }
.forms td:nth-of-type(odd){  padding-left:20px; width:100%;  }
div.correct  { width:90%; padding:1%; margin:20px; background:RGBA(37,163,247, 0.5);  text-align:center;  background:url('images/checked.png');
 background-size:40px; background-repeat:no-repeat; }

div.wrong  { width:90%; padding:1%; margin:20px; background:RGBA(37,163,247, 0.5); text-align:center;
 background:url('images/error.png');
 background-size:40px; background-repeat:no-repeat; }

.searches { width:90%;  float:right; display:inline;padding:20px; margin-bottom:2%;  
  border-radius: 20px ;}
.right {float:right; display:inline;}
.expand { height:500px; overflow:scroll;   padding:2%; background: #eee; border-radius: 15px; margin-right:50px; }
.search  tr:nth-of-type(even){   } 
.search  tr:nth-of-type(odd){   } 
.forms {width:90%; padding:1%; margin:20px; background:RGBA(37,163,247, 0.5); border-radius: 40px 10px; }
.forms tr:nth-of-type(even){   }
.forms tr:nth-of-type(odd){   }
.forms td:nth-of-type(even){ float:left; padding:20px;  }
.forms td:nth-of-type(odd){  padding:20px; }

.answers  { padding:10px; margin-top:20px ; color:#fff; 
 border: dashed: 1px;  font-family:Georgia;  width:100%; background:RGBA(37,163,247, 1); border-radius: 20px ;}
 .answers p,h2,h3,h4,h5,h6 {color:#fff;}
 .searches p,h2,h3,h4,h5,h6 {color:#333;}
a {color:green;  text-decoration:none;}
a:visited {color:#2a5b72}
 .answers a {color:#2a5b72}
.blurb p { font-size: 12px;}
.blurb h5 { margin:10px; padding-left:40px; }
.blurb {background-color:#fff; margin:15px; border:dashed 1px #333; border-radius: 20px ; background:url('images/www.png'); background-repeat:no-repeat; background-size:45px;   padding:10px; background-origin: content-box;}

input[type=submit].hint { width:100px; height:75px; margin-left:10px; font-family: "Georgia"; 
    background:url('images/question.png'); background-repeat:no-repeat; border: none;}
 

.basic { border:1px; width:90%;font-size: 15px; font-weight:bold;  overflow:scroll; border-bottom:dashed 1px #333; 
  padding:15px; margin-bottom:30px; margin-right:auto; background:RGBA(37,163,247, 0.5); border: none;
  border-radius: 40px 10px; text-align:left;}
.basic td { border-bottom: 1px dashed #333; padding:5px;}

.basic2 { border:1px; width:90%;font-size: 15px; overflow:scroll; border-bottom:dashed 1px #333; 
  padding:15px; margin-bottom:30px; margin-right:auto; background:RGBA(37,163,247, 0.5); border: none;
  border-radius: 40px 10px; text-align:left;}




.wide { border:1px; width:90%;font-size: 15px; overflow:scroll; border-bottom:dashed 1px #333; 
  padding:15px; margin-bottom:30px; margin:auto; background:RGBA(37,163,247, 0.5); border: none;
  border-radius: 40px 10px; text-align:left;}

.wide td { border-bottom: 1px dashed #333; padding:5px;}

.metadata  {margin:auto;  width:90%; margin-right:50px; }



h2 {margin-bottom:10px;}
h3 {margin-bottom:10px;}
li { list-style: square; font-size:15px; margin-left:10px; }
/* The Basic Style for all Pages */



.clear {clear:both;}
.homer { padding:10px; float:left;  font-family:Georgia; font-size:40px; margin:auto;  width:100%; }
.homer p {margin:2%;}
/* The Pages */

button.accordion {
    color: #444;
    cursor: pointer;
    padding: 18px;
    width:80%;

    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    background-color:#FFF; border-bottom-style:dashed; border-width:1px; margin:10px;padding:15px;  
   /* border-radius: 40px 10px;
    background-color:#fff; font-size:25px; text-align:left;
    width:100%; margin-left:auto;margin-right:auto;*/

}

button.accordion.active, button.accordion:hover { 
   

}

div.panel { 
    padding: 0 18px;
    display: none;
   
  

}



</style>