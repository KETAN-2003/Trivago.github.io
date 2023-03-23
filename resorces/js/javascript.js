var tabButtons = document.querySelectorAll(".tab .buttoncontain button");
var tabPanels = document.querySelectorAll(".tab .tabpanel");

function showPanel(panelIndex, colorCode) {
    tabButtons.forEach(function (node) {
        node.style.backgroundColor = "none";
        node.style.color = "";
    });
    tabButtons[panelIndex].style.backgroundColor = colorCode;
    tabButtons[panelIndex].style.color = "white";
    
    tabPanels.forEach(function (node) {
        node.style.display = "none";
    });
    tabPanels[panelIndex].style.display = "block";
    tabPanels[panelIndex].style.backgroundColor = colorCode;
}
showPanel(0);

var tabButtons1 = document.querySelectorAll(".tab1 .buttoncontain1 button");
var tabPanels1 = document.querySelectorAll(".tab1 .tabpanel1");

function showPanel1(panelIndex, colorCode) {
    tabButtons1.forEach(function (node) {
        node.style.backgroundColor = "none";
        node.style.color = "";
    });
    tabButtons1[panelIndex].style.backgroundColor = colorCode;
    tabButtons1[panelIndex].style.color = "";
    
    tabPanels1.forEach(function (node) {
        node.style.display = "none";
    });
    tabPanels1[panelIndex].style.display = "block";
    tabPanels1[panelIndex].style.backgroundColor = colorCode;
}
showPanel1(0);