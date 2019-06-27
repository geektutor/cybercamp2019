
function removeClass(id) {
  var active = document.getElementsByClassName(`${id} active`);
  console.log(active);

  while (active[0]) {
    active[0].classList.remove('active')
  }
}

/** Tab Section */
function openTab(evt, course) {
  removeClass('curriculumd');
  removeClass('tablink');

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(course).classList.add("active");
  evt.currentTarget.classList.add("active");
}

/** Team Section */
function displayProfile(num) {
  removeClass("team-member");
  removeClass("team-member-profile");
  var profile = document.getElementById(`profile-${num}`);
  var member = document.getElementById(`member-${num}`);
  if (member.classList.contains("active")) {
    member.classList.remove("active");
  } else {
    member.classList.add("active");
  }
  if (profile.classList.contains("active")) {
    profile.classList.remove("active");
  } else {
    profile.classList.add("active");
  }
  document.getElementById('team').scrollIntoView();
}

/** Testimonial Section */
pagenum = 1;
function AutoRotate() {
		var allElements = document.getElementsByTagName('label');
		for (var i = 0, n = allElements.length; i < n; i++) {
			var myfor = allElements[i].getAttribute('for');
			if ((myfor !== null) && (myfor == ('slide_2_' + pagenum))) {
				allElements[i].click();
				break;
			}
		}
		if (pagenum == 4) {
			pagenum = 1;
		} else {
			pagenum++;
		}
}
setInterval(AutoRotate, 5000);
