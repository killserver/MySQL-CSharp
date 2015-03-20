<html>
<head>
<style type="text/css">
html, body {
	height:100%;
	width:100%;
	margin:0px;
	padding:0px;
	border:none;
	background:#000;
}
.paragraph {
	margin-left:40px;
}
.perem {
	color: #006699 !important;
}
.fLeft {
	position:fixed;
	display:block;
	float: left;
	width:200px;
	height:100%;
	background:#fff;
	overflow-x:auto;
}
.logo {
	background:url('http://icons.iconarchive.com/icons/graphics-vibe/developer/128/mysql-icon.png');
	width:128px;
	height:128px;
	display:block;
	margin-left:30px;
	margin-top:10px;
}
.under {
	display:none;
}
.list {
	list-style:none;
}
.fRight {
	display:flex;
	background:#fff;
	margin-left:200px;
	padding-left:20px;
}
.content {
	width:100%;
	height:100%;
}
#content {
	width:100%;
}
</style>
</head>
<body>
<span class="content">
	<span class="fLeft">
		<span class="logo"></span>
		<ul class="list">
			<li><a href="index.php">Main</a>
			</li>
			<li><a href="javascript:show('id1')">System</a>
			<ul id="id1" class="list under">
				<li><a href="index.php?page=path-logs">Path_Logs</a></li>
				<li><a href="index.php?page=filename-logs">Filename_Logs</a></li>
				<li><a href="index.php?page=unixtime">Unixtime</a></li>
				<li><a href="index.php?page=check-connect">Check_Connect</a></li>
				<li><a href="index.php?page=version">Version</a></li>
				<li><a href="index.php?page=last-insert-id">Last_Insert_Id</a></li>
				<li><a href="index.php?page=option-log">OptionLog</a></li>
			</ul>
			</li>
			<li><a href="javascript:show('id2')">Prepare / Return</a>
			<ul id="id2" class="list under">
				<li><a href="javascript:show('id4')">Prepare</a>
				<ul id="id4" class="list under">
					<li><a href="index.php?page=prepare-select">PrepareSelect</a></li>
					<li><a href="index.php?page=prepare-where">PrepareWhere</a></li>
					<li><a href="index.php?page=prepare-update">PrepareUpdate</a></li>
					<li><a href="index.php?page=prepare-insert">PrepareInsert</a></li>
					<li><a href="index.php?page=prepare-group">PrepareGroup</a></li>
					<li><a href="index.php?page=prepare-order">PrepareOrders</a></li>
				</ul></li>
				<li><a href="javascript:show('id5')">Return</a>
				<ul id="id5" class="list under">
					<li><a href="index.php?page=return-select">ReturnSelect</a></li>
					<li><a href="index.php?page=return-where">ReturnWhere</a></li>
					<li><a href="index.php?page=return-update">ReturnUpdate</a></li>
					<li><a href="index.php?page=return-insert">ReturnInsert</a></li>
				</ul></li>
			</ul>
			<li><a href="javascript:show('id3')">Methods</a>
			<ul id="id3" class="list under">
				<li><a href="index.php?page=select">Select</a></li>
				<li><a href="index.php?page=update-if-exists">Update_If_Exists</a></li>
				<li><a href="index.php?page=update">Update</a></li>
				<li><a href="index.php?page=truncate">Truncate</a></li>
				<li><a href="index.php?page=delete">Delete</a></li>
				<li><a href="index.php?page=insert">Insert</a></li>
			</ul></li>
		</ul>
	</span>
	<span class="fRight">
		<div id="content">
		<?php
		if(isset($_GET['page'])) {
			$page = "docs/".$_GET['page'].".php";
		} else {
			$page = "docs/mysqli.php";
		}
		echo file_get_contents($page);
		?></div>
	</span>
</span>
<link type="text/css" rel="stylesheet" href="scripts/shCore.css?<?php echo time(); ?>"></link>
<link type="text/css" rel="stylesheet" href="scripts/shThemeDefault.css?<?php echo time(); ?>"></link>
<script type="text/javascript" src="scripts/shCore.js?<?php echo time(); ?>"></script>
<script type="text/javascript" src="scripts/shBrushCSharp.js?<?php echo time(); ?>"></script>
<script type="text/javascript">
SyntaxHighlighter.all();
function show(th) {
	if(document.getElementById(th).style.display=="block") {
		document.getElementById(th).style.display="none";
	} else {
		document.getElementById(th).style.display="block";
	}
}
<?php
/*
var page = getUrlVars()['page'];
if(page!==undefined) {
	page = "docs/"+page+".php";
} else {
	page = "docs/main.php";
}
var request = new XMLHttpRequest();
request.open('GET', page);
request.onreadystatechange = function(e) {
    if (this.readyState = 4) {
        if (this.status == 200) {
            var response = (this.responseText);
            document.getElementById("content").innerHTML = response;
        }
        else {
            // тут сообщаем о сетевой ошибке
        }
    }
}
request.send(null);
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
*/
?>
</script>
</body>