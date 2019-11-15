var slider = document.getElementById("range");
var output = document.getElementById("current");
output.innerHTML = slider.value; 


slider.oninput = function () {
    output.innerHTML = this.value;
}
var slider2 = document.getElementById("range2");
var output2 = document.getElementById("current2");
output.innerHTML = slider.value;


slider2.oninput = function () {
    output2.innerHTML = this.value;
}