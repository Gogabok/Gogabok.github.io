window.addEventListener ("keypress", function (e) {
    if (e.keyCode !== 13) return;
 	addField();
});

function addField() {
	let input = document.getElementById('main__input');

	if (input.value == '') {
	 	input.classList.add("error");
	 	return false;
	}

	input.classList.remove("error");
	let text = document.createElement("div");
	text.innerHTML = "<button class='remove remove-button' id='remove'><img src='images/close.png' alt='close'></button><p class='text__class'>" + input.value + "</p>";
	document.getElementById("text").appendChild(text);
	input.value = '';
	return false;
}
document.addEventListener('click', function remove(e){ 
		let theButton = e.target;
		if (theButton.classList.contains('remove')) {
			theButton.nextSibling.classList.add('active-text');
			theButton.classList.remove('remove');
			theButton.classList.add('unremove');
			
		} else if (theButton.classList.contains('unremove')) {
			theButton.nextSibling.classList.remove('active-text');
			theButton.classList.remove('unremove');
			theButton.classList.add('remove');
			
		} else {
			return false;
		}
	});

function mouseoverlogo() {
	let bg = document.getElementById('body');
	if (bg.classList.contains('white')) {
		bg.classList.remove('white');
		bg.classList.add('yellow');
	} else if (bg.classList.contains('yellow')) {
		bg.classList.remove('yellow');
		bg.classList.add('red');
	} else if (bg.classList.contains('red')) {
		bg.classList.remove('red');
		bg.classList.add('blue');
	} else if (bg.classList.contains('blue')) {
		bg.classList.remove('blue');
		bg.classList.add('purple');
	} else if (bg.classList.contains('purple')) {
		bg.classList.remove('purple');
		bg.classList.add('green');
	} else if (bg.classList.contains('green')) {
		bg.classList.remove('green');
		bg.classList.add('birch');
	} else if (bg.classList.contains('birch')) {
		bg.classList.remove('birch');
		bg.classList.add('brown');
	} else if (bg.classList.contains('brown')) {
		bg.classList.remove('brown');
		bg.classList.add('white');
	} else {
		return false;
	}
}