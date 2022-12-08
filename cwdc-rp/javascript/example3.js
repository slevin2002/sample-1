document.getElementById("checkmagicword").onclick = function() {
    var magicwordEntered = document.getElementById("magicword").value;
    var magicword = "slevin";
    if( magicwordEntered == magicword){
        alert("You got it");
    } else {
        alert("Noop, try again");
    }
    }
