<style>


* { margin: 0; padding: 0; }
body { height:100%;  overflow-x:hidden; 
  color: #333;  font-family: helvetica, arial; font-size:20px; width:100%; } a:active { outline: none;}
  .nav { width:100%; height:50px; }
  .content browser {
 margin-right: -14px !important;
 overflow-y: scroll;
 overflow-x: hidden;
}
ul li {font-size:30px; margin:10px;}
  .heading {}
  .banner {width:100%; }
p.small {font-size:15px;}
::selection { background: #ffb7b7; /* WebKit/Blink Browsers */}
::-moz-selection { background: #ffb7b7; /* Gecko Browsers */}
.backbutton {float:left;  background-size:50px; z-index: 5000;}
.nextbutton { float:right;  margin-right:100px; background-size:50px;z-index: 5000;}
.right {float:right; width:45%; }
.left {float:left; width:45%; }

.page {  overflow:scroll;   font-size:30px;  margin-left:20px; right-margin:50px; padding-top:20px;
padding-bottom:20px; 
width:100%; }
.content{width:100%; height:100%; }
.police {width:450px;}
.content_title {  color:#eee;  padding:10px; display:none;}
.pics { width:100%; margin-bottom:30px; border: solid: 1px;}
.pics td:nth-of-type(odd) { width:30%; }
.top-nav { margin:20px; width:90%; margin-right:20px; }
.top-nav td:nth-of-type(even) {float:right;}
.people {width:100%; padding:2%;}
p {margin-bottom:20px; margin-left:20px; padding-right:90px;  }
h1 { text-align: center; padding: 0 50px;  font-size: 40px; padding-right:90px; }
h2 {padding-left:10px; padding-right:90px;}
h3 {padding-left:10px; padding-right:90px;}
h4 {padding-left:10px;padding-right:90px; font-size:15px; font-family:arial;}
h5 {padding-left:35px; padding-right:100px;}
h6 {padding-left:35px; font-size:15px; margin-top:10px; font-family:arial; margin-bottom:10px;
  color:RGBA(42, 91, 114, 0.75);}
ul {margin-left:50px;}
input[type="text"] { padding-left:5px; height:30px; width:90%; font-size:15px;text-decoration: none;}
blockquote {margin:20px;padding-right:20px;}
.data {width:450px;}

@media (max-width: 719px) { .page {margin-left:5px; margin-right:5px; }
.video {display:none;}
.framework {display:none;}
p {font-size:15px; line-height:20px; width:100%;}
h5 {font-size:17px;}
h2 {font-size:20px;}
details {line-height:35px;}
summary {width:100%; margin-left:-20px; }
.people {display:none;}
.people_small {margin:10px;}
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

.framework   { width:100%;
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



#a10:target #p10/*,
#a11:target #p11,
#a12:target #p12,
#a13:target #p13,
#a14:target #p14,
#a15:target #p15*/ { background:#eee;  }

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

.searches { width:100%;  float:right; display:inline;padding:20px; margin-bottom:2%;  
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

 .searches p,h2,h3,h4,h5,h6 {color:#333;}
a {color:RGBA(37,163,247, 1);}
a:visited {color:#2a5b72}
 .answers a {color:#2a5b72}


input[type=submit].hint { width:100px; height:75px; margin-left:10px; font-family: "Georgia"; 
    background:url('images/question.png'); background-repeat:no-repeat; border: none;}
 

.basic { border:1px; width:100%;font-size: 15px; overflow:scroll; border-bottom:dashed 1px #333; 
  padding:15px; margin-bottom:30px; margin-right:auto; background:RGBA(37,163,247, 0.5); border: none;
  border-radius: 40px 10px; text-align:left;}
.basic td { border-bottom: 1px dashed #333; padding:5px;}


.wide { border:1px; width:100%;font-size: 15px; overflow:scroll; border-bottom:dashed 1px #333; 
  padding:15px; margin-bottom:30px; margin:auto; background:RGBA(37,163,247, 0.5); border: none;
  border-radius: 40px 10px; text-align:left;}

.wide td { border-bottom: 1px dashed #333; padding:5px;}

.metadata  {margin:auto;  width:90%; margin-right:50px; }

a {text-decoration:none;}
details { margin-bottom:30px; margin-top:30px; width:100%; margin-left:20px;}


details:focus
{outline : none; color:#fff;}
summary::-webkit-details-marker {
  display: none
}/*
summary:after:-webkit-details-marker {border:none;  display:none; float:right; opacity:0.3; margin-right:50px; }
summary {    background:url('images/drop-down.png'); opacity:0.7; background-repeat:no-repeat; background-size:30px;
  position: relative; border:none; float:right;width:100%; margin-bottom:30px; margin-right:20px;  }
*/

details[open] summary:after {background:url('show-less-fold-button.png');}
summary:active {outline:none; }
summary:focus {outline:none; }
/*
summary:before{  margin:30px; float:right; }
details[open] summary:before { margin-top: -4px; float:right; }*/
h2 {margin-bottom:10px;}
h3 {margin-bottom:10px;}
li { list-style: square; font-size:15px; margin-left:30px; }
/* The Basic Style for all Pages */



.clear {clear:both;}
.homer { padding:10px; float:left;  font-family:Georgia; font-size:40px; margin:auto;  width:100%; }
.homer p {margin:2%;}
/* The Pages */





</style>