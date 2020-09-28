function parallax(element, distance, speed){
    const item = document.querySelector(element);
    item.style.transform = `translateY(${distance * speed}px)`;
}
window.addEventListener("scroll", function(){
    parallax('.tic-licence-div', window.scrollY, 1);
});