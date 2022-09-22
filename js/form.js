function addEntity(){
	document.getElementById("createNewEntity").style.display = "block";
}
function updateEntity(){
	document.getElementById("updateEntity").style.display = "block";
}
function deleteEntity(){
	document.getElementById("deleteEntity").style.display = "block";
}
function closeForm() {
  document.getElementById("createNewEntity").style.display = "none";
  document.getElementById("updateEntity").style.display = "none";
  document.getElementById("deleteEntity").style.display = "none";
}
window.onclick = function (event) {
  let modalx = document.getElementById('createNewEntity');
  let modaly = document.getElementById('updateEntity');
  let modalz = document.getElementById('deleteEntity');
  if (event.target == modalx || event.target == modaly || event.target == modalz) {
    closeForm();
  }
}