<html>

<body>
<script>
	var total=0;
	var income;
	var INC=[100,150,100,150];
	var TECH=[1, 1, 1, 1];
	var NAME=["Potato Farm", "Potato Factory", "Potato Mine", "Potato Moon"];
	
	function refresh()
	{
		total = total + income;
		document.getElementById('money').innerHTML=total;
		setTimeout(refresh,500);
	}

	function updateIncome()
	{
		income=0;
		for(var i = 0; i < INC.length; i++)
			income += INC[i]*TECH[i];
	}
	
	
</script>

<p id='money'>0</p>

</body>
</html>