/*var slidePosition = 1;
SlideShow(slidePosition);

function plusSlides(n){
    SlideShow(slidePosition += n);
}

function currentSlide(n){
    SlideShow(slidePosition = n);
}

function SlideShow(n){
    var i;
    var slides = document.getElementsByClassName("Containers");
    var circles = document.getElementsByClassName("dots");
    if (n > slides.length){slidePosition = 1}
    if (n< 1){slidePosition = slides.length}
    for (i = 0; i < slides.length; i++){
        slides[i].getElementsByClassName.display = "none";
    }

    for (i= 0;i < circles.length; i++){
        circles[i].className = circles[i].className.replace("enable", "");
    }

    slides[slidePosition-1].getElementsByClassName.display = "block";
    circles[slidePosition-1].className += "enable";
}

var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000); // Change image every 2 seconds
} 

const buttons = document.querySelector("[data-carousel-button]")

buttons.forEach(button => {
    button.addEventListener("click", ()=>{
        const offset = button.dataset.carouselButton === "next" ? 1: -1;
        const slides = button.closest("[data-carousel]")
        .querySelector("[data-slides]")

        const activeSlide = slides.querySelector("[data-active]")
        let newIndex = [...slides.children].indexOf(activeSlide) + offset
        if (newIndex < 0) newIndex = slides.children.length -1
        if (newIndex >= slides.children.length) newIndex = 0

        slides.children[newIndex].dataset.active = true
        delete activeSlide.dataset.active
    })
})*/

var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {  
          status.innerHTML = "Thanks for your submission!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! There was a problem submitting your form"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)