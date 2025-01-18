let next = document.querySelector(".next");
let previous = document.querySelector(".previous");
let slider = document.querySelector(".slider-container");



// slide nach rechts bei button "next":

next.addEventListener("click", function(){
  let slides = document.querySelectorAll(".slider-item");
  slider.appendChild(slides[0]);
});

// slide nach links bei button "previous" (moves last slide to the beginning):

previous.addEventListener("click", function(){
  let slides = document.querySelectorAll(".slider-item");
  slider.prepend(slides[slides.length - 1]);
});


