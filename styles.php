   <style type="text/css">
   body {font-family:Verdana; color:#759e34; background-color:#333; max-width:1500px; font-size:12px; margin:0;  }
.forms {width:100%; background:#f3f7aa; padding:1%; margin:0; }
.forms td:nth-of-type(odd){ background:#f3f7aa; width:500px; }
th {color:#333;}
p,h4 { color:#fff; padding:1%;}
select {
color: #b7b2b2;
 border: solid 1px #dcdcdc;
 cursor:pointer;-webkit-border-radius: 5px;
 border-radius:5px;
 margin:5px;
  background: #fff;
  width: 250px;
  padding:5px;
  font-size: 15px;

  height: 34px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
  .score {width:100%; font-size:15px; border: solid 1px #dcdcdc; border-radius:5px; margin-top:2%;}
  .score td:nth-of-type(odd) { width:200px;  text-align:right;}
  .score tr:nth-of-type(odd) { background:#cbdbd8;}
  .score tr:nth-of-type(even) { background:#e3f291;}
 .scoreboard {width:100%; font-size:18px; border: solid 1px #dcdcdc; border-radius:5px; margin-top:2%; padding:5px;}
 .scoreboard tr:nth-of-type(odd) { background:#eee;}
 .scoreboard td:nth-of-type(odd) { background:#cbdbd8;padding:5px;}
 .scoreboard td:nth-of-type(even) { background:#e3f291;padding:5px;}
.home {font-size:16px; }
  h2 {background:#e3f291; padding:10px;}
  h1 {background:#e3f291; padding:10px;}
input[type=submit] { font-family: Verdana, Geneva, sans-serif;
    font-size: 24px;

    width:100%;
    color: #FFF;
    padding: 5px 50px 5px 50px;
    border: 1px solid #999;
 
    text-shadow: 0px 1px 1px #666;
    text-decoration: none;
 
    -moz-box-shadow: 0 1px 3px #111;
    -webkit-box-shadow: 0 1px 3px #111;
    box-shadow: 0 1px 3px #111;
 
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
 
    background: #64a724;
    background: -moz-linear-gradient(top, #64a724 0%, #579727 50%, #58982a 51%, #498c25 100%);
    background: -webkit-gradient(linear, left top, left bottom, from(#64a724), to(#498c25), color-stop(0.4, #579727), 
      color-stop(0.5, #58982a), color-stop(.9, #498c25), color-stop(0.9, #498c25));
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64a724', endColorstr='#498c25',
     GradientType=0 );
 
    cursor: pointer;
 
}
input[type=submit]:hover {
    border: 1px solid #FFF;
}

.answers {width:100%;background:#cbdbd8; padding:10px; color:#333;
  border-radius:5px; color:#333; font-size:15px; font-style:italic;}
.challenge {width:100%;background:#cbdbd8; padding:2%; color:#333; border-radius:5px;}
span.right {text-align:right; display:inline;}

a { color:#759e34;  text-decoration:none; }
.homer {text-align:center; border: solid 1px #dcdcdc;  
  border-radius:5px; margin-top:2%; color:#333;}

h3  {width:100%;  color:#759e34; }


.agencies {padding:10px;width:100%;}
input.sign-in[type="password"] { height:15px;
  width:200px;
  padding: 10px;
  font-size:15px;
  border: solid 1px #dcdcdc;
  border-radius:5px;

                   }
input.sign-in[type="text"] { 
  height:15px;
  width:200px;
  padding: 10px;
  font-size:15px;
  border: solid 1px #dcdcdc;
  border-radius:5px;
   }

input[type="text"] {
  width:80%;
  padding: 10px;
  font-size:15px;
  border: solid 1px #dcdcdc;
border-radius:5px; 
height:12px;
                   }
.expand {height:600px; overflow:scroll;   padding:2%; margin:1%;}

.wide {width:100%; background:#cbdbd8; border-radius:5px; padding:1%; color:#333;}
.basic {width:100%; background: #cbdbd8; border-radius:5px; padding:1%; color:#333;}

.right {float:right; }
.left {float:left; }
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

#head { margin-top: 20px; }


#menu .box { 
  position: fixed;
  text-align: left;
  overflow: scroll;
  z-index: -1;
  opacity: 0;
  width: 300px;
  height: 100%;
  /*left: 30px;*/
  top: 0px;
  background:RGBA(220, 231, 235, 1);
  -webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.3s ease-in-out;
}

#menu ul {
  position: relative;
  top: 150px;
  -webkit-transform: scale(2);
  -moz-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(2);
  -webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.3s ease-in-out;
}

#menu li { 
  /*display: inline-block;*/ 
  margin: 20px;
}

#menu li a {
  /*border-radius: 3px;*/
  padding: 15px;
  border: 1px solid transparent;
  text-decoration: none;
  font-size: 20px;
  color: #eoeoeo;
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

#toggle-nav-label {/*
  color: #dce7eb;
  background: #759e34;
  text-align: center;
  line-height: 30px;
  font-size: 24px;
  display: block;
  cursor: pointer;
  position: relative;
  z-index: 500;
  width: 250px;
  height: 30px;
margin-left:40px;
margin-bottom:30px;
*/
 position: relative;
  z-index: 500;
      margin-left:40px;
margin-bottom:40px;
 font-family: Verdana, Geneva, sans-serif;
    font-size: 24px;

    width:100%;
    color: #FFF;
    padding: 5px 50px 5px 50px;
    border: 1px solid #999;
 
    text-shadow: 0px 1px 1px #666;
    text-decoration: none;
 
    -moz-box-shadow: 0 1px 3px #111;
    -webkit-box-shadow: 0 1px 3px #111;
    box-shadow: 0 1px 3px #111;
 
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
 
    background: #64a724;
    background: -moz-linear-gradient(top, #64a724 0%, #579727 50%, #58982a 51%, #498c25 100%);
    background: -webkit-gradient(linear, left top, left bottom, from(#64a724), to(#498c25), color-stop(0.4, #579727), 
      color-stop(0.5, #58982a), color-stop(.9, #498c25), color-stop(0.9, #498c25));
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64a724', endColorstr='#498c25',
     GradientType=0 );
 
    cursor: pointer;
  
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
  background: #759e34; 
  /*color: #FFF;*/
}
ul.horizontal {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#cbdbd8;
}

li.horizontal  {
    float: left;
}

li.horizontal  a {
    display: block;
    color:  #759e34;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li.horizontal  a:hover {
    background-color: #eee;
}


.tabs { max-width: 100%; float: none; list-style: none; padding: 0; /*margin: 75px auto;*/ border-bottom: 4px solid #ccc;}
 
.tabs:after { content: ''; display: table; clear: both;}
 
.tabs input[type=radio] { display:none;}
 
.tabs label { display: block; float: left; width: 32.33333%; color: #64a724;font-size: 30px;font-weight: normal; text-decoration: none; text-align: center;
    line-height: 2; cursor: pointer; box-shadow: inset 0 4px #ccc; border-bottom: 4px solid #64a724; 


border: 1px solid #999;
 
    text-shadow: 0px 1px 1px #666;
    text-decoration: none;
 
    -moz-box-shadow: 0 1px 3px #111;
    -webkit-box-shadow: 0 1px 3px #111;
    box-shadow: 0 1px 3px #111;
 
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
 
    background: #64a724;
    background: -moz-linear-gradient(top, #64a724 0%, #579727 50%, #58982a 51%, #498c25 100%);
    background: -webkit-gradient(linear, left top, left bottom, from(#64a724), to(#498c25), color-stop(0.4, #579727), 
      color-stop(0.5, #58982a), color-stop(.9, #498c25), color-stop(0.9, #498c25));
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64a724', endColorstr='#498c25',
     GradientType=0 );
      -webkit-transition: all 0.5s; /* Safari 3.1 to 6.0 */ transition: all 0.5s;
  }

.tabs iframe {width:500px;}
  
.tabs label span { font-size:60%;}
 
.tabs label i {  padding: 5px; margin-right: 0; }
 
.tabs label:hover { color: #64a724; box-shadow: inset 0 4px #64a724; border-bottom: 4px solid #64a724;}
 
.tab-content {display: none; width: 100%; float: left; padding: 15px; box-sizing: border-box; background-color:#333;}

.tab-content * {-webkit-animation: scale 0.7s ease-in-out; -moz-animation: scale 0.7s ease-in-out; animation: scale 0.7s ease-in-out;}
 
@keyframes scale {
 
  0% {  transform: scale(0.9); opacity: 0;}
 
  50% {transform: scale(1.01); opacity: 0.5; }
 
  100% { transform: scale(1);opacity: 1;}
 
                }
.tabs [id^="tab"]:checked + label { background: #eee;box-shadow: inset 0 4px #64a724;border-bottom: 4px solid #64a724;color: #64a724;}


#tab1:checked ~ #tab-content1,
#tab2:checked ~ #tab-content2,
#tab3:checked ~ #tab-content3, 
#tab4:checked ~ #tab-content4,
#tab5:checked ~ #tab-content5  
{
    display: block;
}
@media(max-width: 768px) {   .tabs label span { font-size:30%; display: block;}
 .tabs i { padding: 5px; margin-right: 10px;}
 .tabs label span {  display: inline-block; }
 .tabs {max-width: 750px; margin: 50px auto;}


   </style>