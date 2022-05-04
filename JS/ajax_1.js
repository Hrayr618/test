window.onload = function(){
	var inp_name = document.querySelector('input[name=username]')
	var inp_email = document.querySelector('input[name=email]')
	var inp_pass = document.querySelector('input[name=password]')
	var inp_radio = document.querySelector('input[name=male]')

	var name = document.querySelector('#result_1')
	var email = document.querySelector('#result_2')
	var password = document.querySelector('#result_3')
	var radio = document.querySelector('#result_4')


	document.querySelector('#send').onclick = function() {
		var params = 'email=' + inp_email.value
		ajaxPost(params);
	}
}

function ajaxPost (params) {
	var request = new XMLHttpRequest();

	request.onreadystatechange = function(){
		if (request.readyState == 4 && request.status == 200) {
			name.innerHTML = request.responseText
		}	
}
	request.open('POST', 'check_contacts.php');
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	request.send(params);
}