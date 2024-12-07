var accordion = document.getElementsByClassName('container_ac');
var label = document.getElementsByClassName('label');
for (i=0; i<label.length; i++){
	label[i].addEventListener('click', function() {
		if (!this.parentNode.classList.contains('active')){
			//close_ac();
			this.parentNode.classList.toggle('active');
		} else {
			//close_ac();
			this.parentNode.classList.toggle('active');
		}
	});
}

function close_ac() {
	for (i=0; i<accordion.length; i++){
		if (accordion[i].classList.contains('active'))
			accordion[i].classList.remove('active');
	}
}