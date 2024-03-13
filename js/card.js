document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("add-card-form");
    const cardsContainer = document.getElementById("cards-container");
  
    form.addEventListener("submit", function(event) {
      event.preventDefault();
  
      const title = form.title.value;
      const imageFile = form['image-file'].files[0];
      const content = form.content.value;
  
      if (imageFile) {
        const reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onload = function() {
          const imageUrl = reader.result;
          addCard(title, imageUrl, content);
        };
      } else {
        addCard(title, null, content);
      }
  
      form.reset();
    });
  
    function addCard(title, imageUrl, content) {
      const card = document.createElement("div");
      card.classList.add("card");
      card.innerHTML = `
        ${imageUrl ? `<img src="${imageUrl}" alt="${title}">` : ''}
        <h5>${title}</h5>
        <p>${content}</p>
        <a href="" class="btn btn-danger">TRAILER</a>`;
      cardsContainer.appendChild(card);
    }
  });
  