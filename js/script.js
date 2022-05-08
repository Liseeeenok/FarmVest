var burg = document.getElementById('burger');
var men = document.getElementById('menu');
var aut = document.getElementById('author');
var body = document.querySelector('body');
burg.addEventListener('click', function() {
	burg.classList.toggle('active');
	men.classList.toggle('active');
	aut.classList.toggle('active');
	body.classList.toggle('lock');
});


var ac_1 = document.getElementById('ac_1');
var ac_2 = document.getElementById('ac_2');
var ac_3 = document.getElementById('ac_3');


ac_1.addEventListener('click', function() {
	ac_2.removeAttribute('open');
	ac_3.removeAttribute('open');
	if (!ac_1.hasAttribute('open')) {
		ac_1.setAttribute('open','');
		close();
		ac_1.removeAttribute('open');
	}
	else {
		ac_1.removeAttribute('open');
		close();
		ac_1.setAttribute('open','');
	}
});


ac_2.addEventListener('click', function() {
	ac_1.removeAttribute('open');
	ac_3.removeAttribute('open');
	if (!ac_2.hasAttribute('open')) {
		ac_2.setAttribute('open','');
		close();
		ac_2.removeAttribute('open');
	}
	else {
		ac_2.removeAttribute('open');
		close();
		ac_2.setAttribute('open','');
	}
});


ac_3.addEventListener('click', function() {
	ac_1.removeAttribute('open');
	ac_2.removeAttribute('open');
	if (!ac_3.hasAttribute('open')) {
		ac_3.setAttribute('open','');
		close();
		ac_3.removeAttribute('open');
	}
	else {
		ac_3.removeAttribute('open');
		close();
		ac_3.setAttribute('open','');
	}
});


 function close() {
 		if (ac_3.hasAttribute('open')) {
		document.getElementById('ac_p_3').innerHTML = document.getElementById('ac_p_3').innerHTML.replace('+','-');
		} else {
		document.getElementById('ac_p_3').innerHTML = document.getElementById('ac_p_3').innerHTML.replace('-','+');
		}
		if (ac_2.hasAttribute('open')) {
		document.getElementById('ac_p_2').innerHTML = document.getElementById('ac_p_2').innerHTML.replace('+','-');
		} else {
		document.getElementById('ac_p_2').innerHTML = document.getElementById('ac_p_2').innerHTML.replace('-','+');
		}
		if (ac_1.hasAttribute('open')) {
		document.getElementById('ac_p_1').innerHTML = document.getElementById('ac_p_1').innerHTML.replace('+','-');
		} else {
		document.getElementById('ac_p_1').innerHTML = document.getElementById('ac_p_1').innerHTML.replace('-','+');
		}
 }