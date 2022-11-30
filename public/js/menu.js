function showSearch() {
    let menuButton = document.getElementById("showSearch");
    if(menuButton.style.display === "none") {
        menuButton.style.display = "flex";
    }
    
    else {
        menuButton.style.display = "none";
    }
}

function showMenu() {
    let menu = document.getElementById("menuBtn");
    let menuButton = document.getElementById("menu");
    let searchButton = document.getElementById("showSearch");
    
    if(menuButton.style.display === "none") {
        menuButton.style.display = "flex";
        searchButton.style.display = "flex";
        menu.style.backgroundColor = "red";
        menu.style.color = "white";
        menu.textContent = "❌";
        let column = document.getElementById("test");
        column.style.transition = "10.3s";  
    }
    
    else {
        menuButton.style.display = "none";    
        searchButton.style.display = "none";
        menu.style.backgroundColor = "saddlebrown";
        menu.style.color = "white";
        menu.textContent = "☰"; 
    }
}
