var count_com = document.getElementsByClassName('check');

for (i=0; i<count_com.length; i++){
	count_com[i].addEventListener('click', function() {
		$.ajax({
		type: 'POST',
		url: 'php_admin/script.php?id='+this.id,
   		data: $("#ajax_form").serialize(),
   		success: function(){
   			console.log('suc');
   		}
		});
	});
}

function sendAjax(ajax_form, url) {
	$.ajax({
	type: "POST",
	url: url,
    data: $("#"+ajax_form).serialize(),
});
	console.log(ajax_form);
	console.log(url);
}