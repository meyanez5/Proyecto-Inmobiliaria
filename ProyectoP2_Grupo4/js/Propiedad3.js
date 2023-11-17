// JavaScript Document
// Gallery
const gallery = document.querySelectorAll('.gallery-content .img-card img');
const modal = document.querySelector('.modal');
const imgModal = document.querySelector('#imgModal');
const caption = document.querySelector('#caption');
gallery.forEach((images) => {
     
    images.addEventListener('click', (event) => {
       modal.style.display = "block";

       let srcImg = event.target.src;
       let altImg = event.target.alt;

       imgModal.src = srcImg;
       caption.innerHTML = altImg;
              
    });
     
});

// Close Modal
document.querySelector('#closeModal').addEventListener('click', () => {
    modal.style.display = "none";
});