document.addEventListener('DOMContentLoaded', () => {
    const galleryItems = document.querySelectorAll('.gallery-item img');
    

    const lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    document.body.appendChild(lightbox);
  
 
    galleryItems.forEach((img) => {
      img.addEventListener('click', () => {
        lightbox.classList.add('active');
        const lightboxImg = document.createElement('img');
        lightboxImg.src = img.src;
        lightbox.innerHTML = ''; 
        lightbox.appendChild(lightboxImg);
      });
    });
  
   
    lightbox.addEventListener('click', () => {
      lightbox.classList.remove('active');
    });
  });
  