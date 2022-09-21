function addForm(){
	document.getElementById("createNewEntity").style.display = "block";
}
function closeForm() {
  document.getElementById("createNewEntity").style.display = "none";
  document.getElementById("updateEntity").style.display = "none";
  document.getElementById("closeEntity").style.display = "none";
}
window.onclick = function (event) {
  let modal = document.getElementById('createNewEntity');
  if (event.target == modal) {
    closeForm();
  }
}