

<!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
<style>


    /* WhatsApp Floating Button Styling */
.whatsapp-float {
  position: fixed;
  bottom: 20px; /* Distance from the bottom */
  left: 20px; /* Distance from the right */
  z-index: 1000;
  background-color:rgb(207, 238, 218);
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.whatsapp-float:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.whatsapp-icon {
  width: 18px;
  height: 16px;
  display: block;
  color:rgb(9, 20, 13);
}

/* Responsiveness */
@media screen and (max-width: 767px) {
  .whatsapp-float {
    width: 50px;
    height: 50px;
  }
  .whatsapp-icon {
    width: 30px;
    height: 30px;
  }
}
</style>
<div style="align-items: start;">
    <a href="https://wa.me/1234567890" class="whatsapp-float" target="_blank" aria-label="Chat with us on WhatsApp">
      <i><img style="width: 30px;" src="assets/img/whatsapp.png" alt=""></i>
      
    </a>
  </div>
