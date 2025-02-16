/**
 * PROJECT CARDS for inspiration
 */

getInspirationData();

async function getInspirationData() {
  try {
    const response = await fetch("javascript/projekte.json");
    const data = await response.json();

    displayData(data);
  } catch (error) {
    console.error("Fehler beim Abrufen der Projekte:", error); // Fehler
  }
}

function displayData(projects) {
  const inspirationContainer = document.createElement("div");
  inspirationContainer.classList.add("inspiration-container");

  projects.forEach((project) => {
    const template = `
 <div class="inspiration">
  <h3>${project.title}</h3>

  <div class="thumbnails-slider">
    <div class="thumbnails-container">
      ${project.thumbnails
        .map(
          (item) => `<img
        class="thumbnails"
        src="${item}"
        alt="Eowyn Kleid"
      />`
        )
        .join("")}
    </div>
  </div>

  <div class="buttons-container-projects">
    <button class="previous-thumbnail"><</button>
    <button class="next-thumbnail">></button>
  </div>

  <p class="project-details">${project.use}</p>

  <p class="project-year">${project.year}</p>

  <p class="project-description">${project.body}</p>

  <div class="material-box">
    <p class=material-title>Material:</p>
    ${project.material
      .map(
        (item) => `
    <li class="material-list">${item}</li>
    `
      )
      .join("")}
  </div>
</div>
     `;
    // inner HTML template in container einfügen

    inspirationContainer.innerHTML += template;
  });

  // buttons und slider-container hinzufügen

  inspirationContainer.querySelectorAll(".inspiration").forEach((project) => {
    const nextThumbnail = project.querySelector(".next-thumbnail");
    const previousThumbnail = project.querySelector(".previous-thumbnail");
    const thumbnailSlider = project.querySelector(".thumbnails-container");

    // THUMBNAIL IMAGES RIGHT AND LEFT FUNCTION

    nextThumbnail.addEventListener("click", function () {
      const thumbnailSlides = thumbnailSlider.querySelectorAll(".thumbnails");
      thumbnailSlider.appendChild(thumbnailSlides[0]);
    });

    previousThumbnail.addEventListener("click", function () {
      const thumbnailSlides = thumbnailSlider.querySelectorAll(".thumbnails");
      thumbnailSlider.prepend(thumbnailSlides[thumbnailSlides.length - 1]);
    });
  });

  // container in seite einfügen

  document.querySelector(".inspiration-cards-container").innerText = "";
  document
    .querySelector(".inspiration-cards-container")
    .appendChild(inspirationContainer);
}

/**
 * BACKUP PROJECT CARDS


getInspirationData();

async function getInspirationData() {
  try {
    const response = await fetch("javascript/projekte.json");
    const data = await response.json();

    displayData(data);
  } catch (error) {
    console.error("Fehler beim Abrufen der Daten:", error); // Fehler
  }
}

function displayData(inspirations) {
  const inspirationContainer = document.createElement("div");
  inspirationContainer.classList.add("inspiration-container");

  inspirations.forEach((inspiration) => {
    const template = `
     <div class="inspiration">
   <h2> ${inspiration.title}</h2>
   <img src="${inspiration.thumbnail}" alt="${inspiration.title}">
   <p class="project-description"> ${inspiration.body}</p>
   <h3>Material:</h3><li class="material-list" > ${inspiration.material}</li>
   <h3>Verwendung:</h3><p class="project-details"> ${inspiration.use}</p>
   <h3>Entstehung:</h3><p class="project-details"> ${inspiration.year}</p>
 </div>
     `;

    inspirationContainer.innerHTML += template;
  });

  document.querySelector(".inspiration-cards-container").innerText = "";
  document
    .querySelector(".inspiration-cards-container")
    .appendChild(inspirationContainer);
} */
