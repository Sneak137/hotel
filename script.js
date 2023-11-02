let links = document.querySelectorAll(".main-nav li a");
links.forEach(function(link) {
	if (link.href === window.location.href) {
		link.className = "active";
	}
});