const toggleElemet = (buttonID, elementID) => {
    const side = document.getElementById(buttonID);
    const nav = document.getElementById(elementID);
    side.addEventListener("click", () => {
        if (nav.style.visibility == "unset") {
            nav.style.visibility = "hidden";
        } else {
            nav.style.visibility = "unset";
        }
    })
}

toggleElemet("menuIcon", "sideNavBar");