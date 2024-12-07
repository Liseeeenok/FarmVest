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
	event.preventDefault();
	ac_2.removeAttribute('open');
	ac_3.removeAttribute('open');
	if (!ac_1.hasAttribute('open')) {
		ac_1.setAttribute('open','');
	}
	else {
		ac_1.removeAttribute('open');
	}
	close();
});


ac_2.addEventListener('click', function() {
	event.preventDefault();
	ac_1.removeAttribute('open');
	ac_3.removeAttribute('open');
	if (!ac_2.hasAttribute('open')) {
		ac_2.setAttribute('open','');
	}
	else {
		ac_2.removeAttribute('open');
	}
	close();
});


ac_3.addEventListener('click', function() {
	event.preventDefault();
	ac_1.removeAttribute('open');
	ac_2.removeAttribute('open');
	if (!ac_3.hasAttribute('open')) {
		ac_3.setAttribute('open','');
	}
	else {
		ac_3.removeAttribute('open');
	}
	close();
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


var position = 0;
const sl_sh = 2;
const sl_sc = 1;
const con = document.getElementById('slid');
const track = document.querySelector('.cards_info_4');
const items = document.querySelectorAll('.card_1_info_4');
const btn_next = document.getElementById('btn_next');
const btn_prev = document.getElementById('btn_prev');
const items_count = items.length;
const item_width = con.clientWidth / 2;
check_bth()
btn_next.addEventListener('click', function() {
	position -= item_width * sl_sc;
	set_position();
	check_bth()
});
btn_prev.addEventListener('click', function() {
	position += item_width * sl_sc;
	set_position();
	check_bth()
});

function set_position() {
	track.style.transform = `translateX(${position}px)`;
}

function check_bth() {
	if (position == 0)
		btn_prev.setAttribute('disabled','');
	else
		btn_prev.removeAttribute('disabled');
	if (position <= -(items_count - sl_sh) * item_width)
		btn_next.setAttribute('disabled','');
	else
		btn_next.removeAttribute('disabled');
}