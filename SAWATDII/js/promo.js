const promoData = [
    {
      image: 'photo/promo1.jpg',
      alt: '10.10 Flash Sale'
    },
    {
      image: 'photo/promo2.jpg',
      alt: 'International Day'
    }
  ];
  
  // Dynamically load promo images into the page
  function loadPromos() {
    const promoSection = document.getElementById('promo-section');
    promoSection.innerHTML = ''; // Clear existing promos if any
  
    promoData.forEach((promo) => {
      // Create the promo container
      const promoCard = document.createElement('div');
      promoCard.className = 'promo-card';
  
      // Create the image element
      const promoImg = document.createElement('img');
      promoImg.src = promo.image;
      promoImg.alt = promo.alt;
  
      // Add click event to enlarge the image
      promoImg.addEventListener('click', () => {
        openLightbox(promo.image);
      });
  
      // Append the image to the container
      promoCard.appendChild(promoImg);
  
      // Append the container to the promo section
      promoSection.appendChild(promoCard);
    });
  }
  
  // Lightbox function for enlarging images
  function openLightbox(imageSrc) {
    const lightbox = document.getElementById('lightbox');
    lightbox.innerHTML = `<img src="${imageSrc}" alt="Enlarged Image">`;
    lightbox.classList.add('active');
  }
  
  // Close the lightbox on click
  document.addEventListener('DOMContentLoaded', () => {
    const lightbox = document.getElementById('lightbox');
    lightbox.addEventListener('click', () => {
      lightbox.classList.remove('active');
    });
  
    // Load promos
    loadPromos();
  });
  