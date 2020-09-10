let list = document.querySelectorAll(".mylist");
let boutton = header.querySelectorAll(".button");
for (let i = 0; i < btns.length; i++) {
  boutton[i].addEventListener("click", function() {
  let current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}