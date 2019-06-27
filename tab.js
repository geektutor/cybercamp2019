function openTab(evt, course) {
    // Declare all variables
    var i, curriculumd, tablinks;
  
    // Get all elements with class="curriculumd" and hide them
    curriculumd = document.getElementsByClassName("curriculumd");
    for (i = 0; i < curriculumd.length; i++) {
      curriculumd[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(course).style.display = "block";
    evt.currentTarget.className += " active";
  }