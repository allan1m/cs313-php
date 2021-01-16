function getHikingInfo() {

    // Get the button, and when the users mouse is over it, execute dropdown items
    document.getElementById("Btn-a").onmouseover = function() {getHikingInfo()};

    document.getElementById("dropMenu").classList.toggle("show");
}