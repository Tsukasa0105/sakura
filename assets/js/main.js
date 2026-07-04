(function () {
	"use strict";

	document.addEventListener("DOMContentLoaded", function () {
		var menuToggle = document.getElementById("menuToggle");
		var mobileNav = document.getElementById("mobileNav");

		if (!menuToggle || !mobileNav) {
			return;
		}

		menuToggle.addEventListener("click", function () {
			var isOpen = mobileNav.classList.toggle("open");
			menuToggle.setAttribute("aria-expanded", String(isOpen));
		});

		mobileNav.querySelectorAll("a").forEach(function (link) {
			link.addEventListener("click", function () {
				mobileNav.classList.remove("open");
				menuToggle.setAttribute("aria-expanded", "false");
			});
		});
	});
})();
