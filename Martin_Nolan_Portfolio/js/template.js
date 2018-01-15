// JavaScript Document

//Variables
 var theImages = document.querySelectorAll('.image-holder'),

//Functions
(function () {
  var theImages = document.querySelectorAll('.image-holder'),
      
	  
	  bckgrndLightboxColor = document.querySelector('.lightbox-content-container'),
	  
      appliedClass;

      function changeElements() {
	  }

	
	
	
          newSubImg.classList.add('thumb');
         
          newSubImg.src = "images/" + objectIndex.images[index];


         
          newSubImg.dataset.index = index;



        
          newSubImg.addEventListener('click', function() { popLightbox(index, objectIndex); }, false);
	
	
	  bckgrndLightboxColor.classList.add(this.id); 
        theSubhead.classList.add(this.id);
        theHeader.classList.add(this.id);
		  
	
	
//Listeners