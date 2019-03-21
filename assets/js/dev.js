function displayWidth() {
  var w = window,
  e = document.documentElement,
  g = document.getElementsByTagName('html')[0],
  width = w.innerWidth || e.clientWidth || g.clientWidth,
  height = w.innerHeight|| e.clientHeight|| g.clientHeight;

  document.getElementById("width").innerHTML = width + "px";
}

// Events
document.onkeypress = function (oPEvt) {
  var oEvent = oPEvt || window.event;
  switch (String.fromCharCode(oEvent.charCode)) {
    case ';':
      oEvent.preventDefault();
      document.getElementsByTagName('html').item(0).classList.toggle("dev");
      document.getElementsByTagName('html').item(0).classList.toggle("dev--16");
      break;
    case ' ':
      oEvent.preventDefault();
      document.getElementById('dev').classList.toggle("big");
      break;
  }
};

window.onresize = displayWidth;

// Init
displayWidth();
