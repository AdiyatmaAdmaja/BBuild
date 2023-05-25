var nav1 = document.getElementById("nav-1");
var nav2 = document.getElementById("nav-2");
var nav3 = document.getElementById("nav-3");
var nav4 = document.getElementById("nav-4");

nav1.addEventListener("click", function() {
    document.getElementById("section-0").style.display = "none";
    document.getElementById("section-1").style.display = "block";
    document.getElementById("section-2").style.display = "none";
    document.getElementById("section-3").style.display = "none";
    document.getElementById("section-4").style.display = "none";
});
  
nav2.addEventListener("click", function() {
    document.getElementById("section-0").style.display = "none";
    document.getElementById("section-1").style.display = "none";
    document.getElementById("section-2").style.display = "block";
    document.getElementById("section-3").style.display = "none";
    document.getElementById("section-4").style.display = "none";
});
  
nav3.addEventListener("click", function() {
    document.getElementById("section-0").style.display = "none";
    document.getElementById("section-1").style.display = "none";
    document.getElementById("section-2").style.display = "none";
    document.getElementById("section-3").style.display = "block";
    document.getElementById("section-4").style.display = "none";
});

nav4.addEventListener("click", function() {
    document.getElementById("section-0").style.display = "none";
    document.getElementById("section-1").style.display = "none";
    document.getElementById("section-2").style.display = "none";
    document.getElementById("section-3").style.display = "none";
    document.getElementById("section-4").style.display = "block";
});

var myDivs = document.querySelectorAll(".status");
var activeDiv = null;

for (var i = 0; i < myDivs.length; i++) {
  myDivs[i].addEventListener("mousedown", function() {
    if (activeDiv != null) {
      activeDiv.style.backgroundColor = "#FFE55D";
      activeDiv.style.color = "black";
    }
    this.style.backgroundColor = "black";
    this.style.color = "white";
    activeDiv = this;
  });
}