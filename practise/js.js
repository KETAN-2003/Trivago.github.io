var tabButtons = document.querySelectorAll(".tab1 .buttoncontain1 button");
var tabPanels = document.querySelectorAll(".tab1 .tabpanel1");

function showPanel1(panelIndex, colorCode) {
    tabButtons.forEach(function (node) {
        node.style.backgroundColor = "none";
        node.style.color = "";
    });
    tabButtons[panelIndex].style.backgroundColor = colorCode;
    tabButtons[panelIndex].style.color = "";
    
    tabPanels.forEach(function (node) {
        node.style.display = "none";
    });
    tabPanels[panelIndex].style.display = "block";
    tabPanels[panelIndex].style.backgroundColor = colorCode;
}
showPanel1(0);