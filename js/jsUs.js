if(document.getElementById("ButtonModal")){

    var modal = document.getElementById("modal");
    var button = document.getElementById("ButtonModal");
    var span = document.getElementsByClassName("close")[0];
    var body = document.getElementsByTagName("body")[0];


    button.onclick = function() {
        modal.style.display = "block";
        body.style.position= "static";
        body.style.height = "100%";
        body.style.overflow = "hidden";
    };

    span.onclick = function(){
        modal.style.display = "none";
        body.style.position= "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    };


}