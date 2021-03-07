
function toggleLightDark() {
  var body = document.getElementById("body");
  var currentClass = body.className;
  body.className = currentClass == "lightmode" ? "darkmode" : "lightmode";
}
