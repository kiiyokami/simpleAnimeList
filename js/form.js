function addEntity(){
	closeForm();
	document.getElementById("createNewEntity").style.display = "block";
}
function closeForm() {
  document.getElementById("createNewEntity").style.display = "none";
  document.getElementById("updateEntity").style.display = "none";
  document.getElementById("deleteEntity").style.display = "none";
}
window.onclick = function (event) {
  let x = document.getElementById('close');
  let y = document.getElementById('shut');
  let z = document.getElementById('down');
  if (event.target == x|event.target == y|event.target == z) {
    closeForm();
  }
}