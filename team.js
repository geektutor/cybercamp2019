function removeClass(id) {
  var active = document.getElementsByClassName(`${id} active`);
  console.log(active);

  while (active[0]) {
    active[0].classList.remove('active')
  }
}

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