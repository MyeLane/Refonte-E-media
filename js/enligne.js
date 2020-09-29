function parallax(element, distance, speed){
    const item = document.querySelector(element);
    item.style.transform = `translateY(${distance * speed}px)`;
}
window.addEventListener("scroll", function(){
    parallax('.tic-licence-div', window.scrollY, 1);
    parallax('.can-licence-div', window.scrollY, 1);
    parallax('.mpj-licence-div', window.scrollY, 1);
    parallax('.mba-licence-div', window.scrollY, 1);
});
