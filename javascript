<script type="text/javascript">
function changeOrder(dot, number) {
	var slides = document.querySelectorAll(".slide");
	var dots = document.querySelectorAll(".dotnav-item");
	for (var i = 0; i < slides.length; i++) {
		slides[i].classList.remove('active');
		dots[i].classList.remove('active');
    }
	var elemName = "slide-" + number;
	var elem = document.getElementById(elemName);
	elem.classList.add('active');
	dot.classList.add('active');
}
</script>