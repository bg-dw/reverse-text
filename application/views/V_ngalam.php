<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ngalam Encrypter</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<div id="container" align="center">
	<h1>Ngalam Encrypter</h1>

	<div id="body">
		<div class="col-lg-12">
			<table>
				<tr>
					<td>
						<textarea rows="4" cols="50" onkeyup="onkey()" id="t1"></textarea>
					</td>
					<td>
						<button id="btn1" value="1">Indonesia >> Ngalam</button>
						<button id="btn2" value="2" style="display:none;">Ngalam >> Indonesia</button>
					</td>
					<td>
						<textarea rows="4" cols="50" id="t2"></textarea>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
	<p class="footer">By. Anak Elang</p>
</div>

</body>
<script type="text/javascript">
	function onkey(){
		var text1 = $("#t1").val();
		var res = text1.split(" ");
		var tamp = "";
		var myArray = [[]];
		var ak=[];
		for( var i=0; i<res.length; i++ ) {
			myArray.push([]);
		}
		for (var i = 0; i < res.length; i++)
		{
			for (var j =  myArray[i].length; j < res[i].length; j++)
			{
				var huruf = res[i].slice(j, j+1);
				myArray[i].push(huruf);
			}
		}

		//generate per kata
		for(var i=0;i<(myArray.length-1);i++){
			for(var j=myArray[i].length-1;j>=0;j--){
				tamp+=myArray[i][j];
			}
			ak.push(tamp);
			tamp="";
		}
		// console.log(ak.join(" "));
		$("#t2").val(ak.join(" "));
		
	}
	$("button").click(function() {
			var btn = $(this).val();
			if(btn==="1"){
				$("#btn1").hide();
				$("#btn2").show();
				var text1 = $("#t1").val();
				var text2 = $("#t2").val();
				$("#t2").val(text1);
				$("#t1").val(text2);
			}else{
				$("#btn2").hide();
				$("#btn1").show();
				var text1 = $("#t1").val();
				var text2 = $("#t2").val();
				$("#t2").val(text1);
				$("#t1").val(text2);
			}
	});
</script>
</html>