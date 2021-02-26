function preloader() {
	const parent = document.getElementById('preloader')
	const child = document.getElementById('ctn-preloader')
	parent.removeChild(child)
}

setInterval(() => {
	if(document.getElementById('ctn-preloader'))
		preloader();
	else
		void(0)
}, 1900);