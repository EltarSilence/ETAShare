$(document).ready(function(){

	$("#dep").keyup(function(){
		var queryDep = $("#dep").val();
		if (queryDep.length > 2){
			$.ajax(
			{
				url: 'assets/autocomp.php',
				method: 'POST',
				data: {
					qDep: queryDep
				},
				success: function(data){
					$("#responseDep").html(data);
				}
			}
			)
		}
	});

	$("#dest").keyup(function(){
		var queryDest = $("#dest").val();
		if (queryDest.length > 2){
			$.ajax(
			{
				url: 'assets/autocomp.php',
				method: 'POST',
				data: {
					qDest: queryDest
				},
				success: function(data){
					$("#responseDest").html(data);
				}
			}
			)
		}
	})

	
})