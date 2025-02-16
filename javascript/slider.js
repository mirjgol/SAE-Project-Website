// slider container selektieren
const slider = document.querySelector(".img-slider-container");

// funktion welche alle "slide"(picture) selektiert
//returns current list of "slide" of "img-slider-container"
function getAllSlides() {
  return document.querySelectorAll(".img-slider-container .slide");
}
// event listeners left, right

document.querySelector(".left").addEventListener("click", moveLeft);
document.querySelector(".right").addEventListener("click", moveRight);

// initialisiere current slide index to 1

const allSlides = getAllSlides();
let currentSlide = allSlides.length - allSlides.length + 1;

// function move the slides to the right (moves first slide to end of slider)

function moveRight() {
  //get all slides
  const allSlides = getAllSlides();
  slider.append(allSlides[0]); // Move first slide to the end
  changeCurrentSlide("right"); //(direction)
  updateTitle();
  resetAutoSlide();
}

function moveLeft() {
  const allSlides = getAllSlides();
  slider.prepend(allSlides[allSlides.length - 1]); // Move last slide to the beginning
  changeCurrentSlide("left");
  updateTitle();
  resetAutoSlide();
}

function changeCurrentSlide(direction) {
  // param "left" or "right"
  const allSlides = getAllSlides();
  if (direction === "right") {
    currentSlide === allSlides.length ? (currentSlide = 1) : currentSlide++;
  } else {
    currentSlide === 1 ? (currentSlide = allSlides.length) : currentSlide--;
  }
}

function updateTitle() {
  const allSlides = getAllSlides();
  const currentSlideElement = allSlides[0];
  const title = allSlides[0].querySelector(".slider-img").alt;
  document.querySelector(".slides-title").innerText = title;
}

// füge autoslide funktion hinzu

let autoSlideInterval;
let autoSlideIsActive = false;

// starte die funktion

function startAutoSlide() {
  if (!autoSlideIsActive) {
    // wenn autoslide nicht aktiv, dann intervall alle 3s setzen:

    autoSlideInterval = setInterval(moveRight, 3000);
    autoSlideIsActive = true;
  }
}

// stoppen des autoslide modus

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
  autoSlideIsActive = false;
}

// mit Play und Pause den autoslide modus stoppen:

document.querySelector(".play-pause").addEventListener("click", function () {
  if (autoSlideIsActive) {
    stopAutoSlide();
    this.innerText = "Play";
  } else {
    startAutoSlide();
    this.innerText = "Pause";
  }
});
// funkttion die timer beim klicken zurücksetzt

function resetAutoSlide() {
  stopAutoSlide();
  startAutoSlide();
}

// wenn seite ladet, autoslide starten

startAutoSlide();
updateTitle();
