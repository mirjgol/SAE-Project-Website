

/** 
 * PROJECT CARDS
 */

/*
async function getProjects() {

  // holen der json daten

  const response = await fetch("projekte.json");
  const projects = await response.json();

  //container mit allen Projekten
  const mainContainer = document.querySelector(".project-section");

  projects.forEach(project => {
  //check with console
  // console.log(project.title);

  const projectElement = document.createElement("project-overview");

  const template = `<h2 class="project-title">${project.title}</h2>
<p class="project-definition">${project.body}</p>
<img class="project-image" src="images/${project.thumbnail}" alt="${project.thumbnail_alt}">
<p class="materials">${project.material}</p>
<p class="use">${project.use}</p>
<p class="year">${project.year}</p>
<p class="post-id">${project.post_id}</p>
  `

  projectElement.innerHTML = template;

  mainContainer.append(projectElement)

  });


}

getProjects();

*/



/** 
 * PROJECT CARDS
 */


// change inspiration to project in case this name is used *****


 getInspirationData()

 async function getInspirationData(){
   try{
    const response = await fetch('javascript/projekte.json')
     const data = await response.json()

     displayData(data)


   } catch(error) {
     console.error("Fehler beim Abrufen der Daten:", error); // Fehler
   }
 }

 function displayData(inspirations) {
  const inspirationContainer = document.createElement('section')
   inspirationContainer.classList.add('inspiration-container')

  inspirations.forEach(inspiration => {
     const template = `
     <div class="inspiration">
   <h2> ${inspiration.title}</h2>
   <img src="${inspiration.thumbnail}" alt="${inspiration.title}">
   <p class="project-description"> ${inspiration.body}</p>
   <h3>Material:</h3><li class="material-list" > ${inspiration.material}</li>
   <h3>Verwendung:</h3><p class="project-details"> ${inspiration.use}</p>
   <h3>Entstehung:</h3><p class="project-details"> ${inspiration.year}</p>
 </div>
     `

     inspirationContainer.innerHTML += template
   })

   document.querySelector('.project-section').innerText= ''
   document.querySelector('.project-section').appendChild(inspirationContainer)

 }