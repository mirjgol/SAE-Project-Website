// animate Logo

const logoRotationAnimation = gsap.to(".logo-container", {
  duration: 4,
  rotation: 360,
  transformOrigin: "50% 50%",
  paused: true,
});

document
  .querySelector(".logo-container")
  .addEventListener("mouseover", function () {
    logoRotationAnimation.restart();
  });

// Titel im Hero heranzoomen

//DESKTOP

const zoomingText = document.querySelector(".fokus-fina-span-desktop");
const tlDesktop = gsap.timeline();

tlDesktop.fromTo(
  zoomingText,
  { scale: 1 },
  {
    scale: 1.5,
    ease: "none",
    duration: 5,
  }
);

tlDesktop.fromTo(
  zoomingText,
  { scale: 1.5 },
  {
    scale: 1,
    ease: "none",
    duration: 2,
  }
);

//MOBILE

const zoomingTextMobile = document.querySelector(".fokus-fina-span-mobile");
const tlMobile = gsap.timeline();

tlMobile.fromTo(
  zoomingTextMobile,
  { scale: 1 },
  {
    scale: 1.3,
    ease: "none",
    duration: 5,
  }
);

tlMobile.fromTo(
  zoomingTextMobile,
  { scale: 1.3 },
  {
    scale: 1,
    ease: "none",
    duration: 2,
  }
);
