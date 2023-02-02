function updateEntity(id){
    closeForm();
    var animeID = document.getElementById(id).children[0].innerHTML;
    var title = document.getElementById(id).children[1].innerHTML;
    var engTitle = document.getElementById(id).children[2].innerHTML;
    var season = document.getElementById(id).children[3].innerHTML;
    var eps = document.getElementById(id).children[4].innerHTML;
    var status = document.getElementById(id).children[5].innerHTML;
    var dateStarted = document.getElementById(id).children[6].innerHTML;
    var dateFinished= document.getElementById(id).children[7].innerHTML;

    document.getElementById("updateEntity").style.display = "block";
    document.getElementById("cID").value = animeID;
    document.getElementById("cTitle").value = title;
    document.getElementById("cengTitle").value = engTitle;
    document.getElementById("cseasons").value = season;
    document.getElementById("ceps").value = eps;
    document.getElementById("cstatus").value = status;
    document.getElementById("cdateStarted").value = dateStarted;
    document.getElementById("cdateFinished").value = dateFinished;

}
function deleteEntity(id){
    closeForm();
    var animeID = document.getElementById(id).children[0].innerHTML;
    var title = document.getElementById(id).children[1].innerHTML;
    var engTitle = document.getElementById(id).children[2].innerHTML;

    document.getElementById("deleteEntity").style.display = "block";
    document.getElementById("dID").value = animeID;
    document.getElementById("deletequery").innerHTML = `Do you want to delete ${engTitle}<br>(${title}) ?` ;
}