<?php
header('Content-type: text/css; charset:UTF-8');
?>
*{
	margin: 0;
	padding: 0;
	box-sizing:border-box ;
}
#menu{
	height: 200px;
	width: 150px;
	position: absolute;
	background-color: #839C97;
	border-radius: 10px;
	top: 120px;
	border-right: 4px solid silver;
	text-decoration: none;
	margin-left: 50px;
	position: fixed;
	margin-left: -150px;

}


.toggle-btn.active{
	margin-left: -150px;
}
#menu.active{
	margin-left: 150px;
}


#menu ul li:first-child {
	color: whitesmoke;
	padding: 15px 50px 15px 30px;
	font-size: 1.55em;
	list-style: none;
}
#menu ul li:not(:first-child){
	color: whitesmoke;
	padding: 10px 30px 10px 30px;
	list-style: none;
}
#menu ul li:not(:first-child):hover{
	color: #F05353;
	padding: 10px 30px 10px 30px;
	transition: all 0.4s ease-in-out;
}
#menu .toggle-btn {
	position: absolute;
	background: silver;
	border-radius: 10px;
	cursor: pointer;
	padding: 10px;
	top: -80px;
	margin-left: 200px;
}


#menu .toggle-btn span{
	display: block;
	height: 3px;
	width: 20px;
	margin: 4px;
	padding: ;
	background-color: black;
}
#toggle-btn:hover{
	background: #7F8CCF;
	transition: all 0.4s ease-in-out;
}
#toggle-btn:hover span{
	background: silver;
	transition: all 0.4s ease-in-out;
}
#toggle-btn.active{
	margin-left: -100px;
}

