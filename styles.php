   <style type="text/css">
   body {font-family:Verdana; color:#333; max-width:1500px; font-size:12px; margin:0; }
   /*body::after {
     content: "";
     background: url(code-707069_1920.jpg);
     opacity: 0.3;
     top: 0;
     left: 0;
     bottom: 0;
     right: 0;
     position: absolute;
     z-index: -1;   }*/
	   .home {font-size:16px; }
   .challenge {width:95%;background:#cbdbd8; padding:2%; border-radius:5px;}
   span.right {text-align:right; display:inline;}
.h2 { margin:0; padding:0;}
a { color:#759e34; padding:5px;  text-decoration:none; }
.homer {text-align:center; border: solid 1px #dcdcdc; border-radius:5px; margin-top:2%;}
h3  {width:95%; margin-left:12px;background:#cbdbd8; color:#759e34; padding:5px;}

#submit { height:35px; width:45%; color:#759e34; background:#eee; text-align:center; border: solid 1px #dcdcdc;
	cursor:pointer;-webkit-border-radius: 5px; border-radius: 5px; }
.agencies {padding:10px;width:95%;}
input[type="text"] {
  width:50%;
  padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
                   }
 .expand {height:600px; overflow:scroll;   padding:2%; margin:1%;}
 .searches {width:95%;  border-radius:5px; padding:1%; margin:1%;}
 textarea.searches{  }
.wide {width:95%; background:#cbdbd8; border-radius:5px; padding:1%;}
.basic {width:95%; background: #cbdbd8; border-radius:5px; padding:1%;}
.short {width:450px; float:left;}
.right {float:right; }
.left {float:left; }
.page_width {max-width:1300px; margin:auto;}
@media (max-width: 519px) {

    .right {float:right; width:95%; }
    .left  {float:left; width:95%; margin:2%; }
    

  
}

@media (min-width: 520px) and (max-width: 700px)   {

    .right {float:right; width:95%; }
    .left  {float:left; width:95%; margin-left:2%; }

  
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

#toggle-nav-label {
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
  background: #759e34; 
  color: #FFF;
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

   </style>