let thumbnails = document.getElementsByClassName("testThumbnail");
let testSlider = document.getElementById("testSlider");
let buttonRight = document.getElementById("slide-right");
let buttonLeft = document.getElementById("slide-left");

buttonLeft.addEventListener("click", () => {
    testSlider.scrollLeft -= 125;
});
buttonRight.addEventListener("click", () => {
    testSlider.scrollLeft += 125;
});

const maxScrollLeft = testSlider.scrollWidth - testSlider.clientWidth;
//AutoPlay slider
function autoPlay(){
    if (testSlider.scrollLeft > (maxScrollLeft - 1)){
        testSlider.scrollLeft -= maxScrollLeft;
    }else{
        testSlider.scrollLeft += 1;
    }
}
let play = setInterval(autoPlay, 50);
//Pause the slider on hover
for (let i = 0; i < thumbnails.length; i++){
    thumbnails[i].addEventListener("mouseover", () => {
        clearInterval(play);
    })
    thumbnails[i].addEventListener("mouseout", () => {
        return play = setInterval(autoPlay, 50);
    })
}