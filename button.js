const dialog = document.getElementById('dialog');
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');

openBtn.addEventListener('click', function() {
	dialog.setAttribute('open', true);
})

closeBtn.addEventListener('click', function() {
	dialog.removeAttribute('open');
});

const dialog2 = document.getElementById('dialog2');
const openBtn2 = document.getElementById('openBtn2');
const closeBtn2 = document.getElementById('closeBtn2');

openBtn2.addEventListener('click', function() {
	dialog2.setAttribute('open', true);
})

closeBtn2.addEventListener('click', function() {
	dialog2.removeAttribute('open');
});

const dialog3 = document.getElementById('dialog3');
const openBtn3 = document.getElementById('openBtn3');
const closeBtn3 = document.getElementById('closeBtn3');

openBtn3.addEventListener('click', function() {
	dialog3.setAttribute('open', true);
})

closeBtn3.addEventListener('click', function() {
	dialog3.removeAttribute('open');
});

