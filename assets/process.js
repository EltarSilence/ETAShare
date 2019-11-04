$(document).ready(function(){
	$(document).on("click", "[id^=choose]", function(){
		var id = $(this).parent().parent().attr('id');
		console.log(id);
		var tr = $('#'+id);
		var coord = tr.find('td#latlon').text();
		console.log(coord);
		if (tr.attr('sens') == 'Dep'){
			$('#dep').val(coord);
		}
		else {
			$('#dest').val(coord);
		}
	});
})