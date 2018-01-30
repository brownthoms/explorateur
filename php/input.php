<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="Author" content="Daniel Hagnoul">
	<title>Forum jQuery</title>
	<style>
		/* BASE */
		body {
			background-color:#dcdcdc;
			color:#000000;
			font-family:sans-serif;
			font-size:medium;
			font-style:normal;
			font-weight:normal;
			line-height:normal;
			letter-spacing:normal;
		}
		h1,h2,h3,h4,h5 {
			font-family:serif;
		}
		div,p,h1,h2,h3,h4,h5,h6,ul,ol,dl,form,table,img {
			margin:0px;
			padding:0px;
		}
		p {
			padding:6px;
		}
		ul,ol,dl {
			list-style:none;
			padding-left:6px;
			padding-top:6px;
		}
		li {
			padding-bottom:6px;
		}
 
		/* dvjh */
		h1 {
			text-align:center;
			font-style:italic;
			text-shadow: 4px 4px 4px #bbbbbb;
		}
		h2 {
			text-align:center;
		}
		div#conteneur {
			width:95%;
			height:auto;
			margin:12px auto;
			padding:6px;
			background-color:#FFFFFF;
			color:#000000;
			border:1px solid #666666;
		}
		div#affiche {
			clear:both;
			margin:12px;
			padding:6px;
			border:1px solid #999999;
			background-color:#FFFFFF;
			color:#000000;
		}
 
		/* TEST */
	</style>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
	<script>
		$(function(){
			$("input").each(function(i, item){
				$("#affiche").append("<p>input[" + i + "] = " + $(item).val() + "</p>");
			});
 
			$("input[type='text']").change(function(event){
				$("#affiche").append("<p>$(this).val() = " + $(this).val() + "</p>");
			});
 
			$("#btn").click(function(){
				$("input[type='text']").val("pourquoi pas").trigger("change");
			});
		});
	</script>
</head>
<body>
	<h1>Forum jQuery</h1>
	<div id="conteneur">
		<button id="btn">Changer</button>
		<input type="text" value="oui"/>
		<input type="text" value="non"/>
		<input type="text" value="peut-être"/>
		<input type="text" value="sans doute"/>
		<div id="affiche"></div>
	</div>
</body>  
</html>