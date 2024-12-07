var main = document.getElementById('main');
var pages = document.getElementById('pages');
var users = document.getElementById('users');
var title_adm = document.getElementById('title_adm');

main.addEventListener('click', function() {
	window.location.replace('admin_main.php');
});

pages.addEventListener('click', function() {
	window.location.replace('admin_pages.php');
});

users.addEventListener('click', function() {
	window.location.replace('admin_users.php');
});

title_adm.addEventListener('click', function() {
	window.location.replace('admin_main.php');
});