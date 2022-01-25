let width = ''; //put value for custom width
let height = ''; //put value for custom height
let fullWidth = false; // true / false for full width
let border = true; // true / false for border
const auto = true; // true / false for autoplay
const controls = true; // true / false for controls
const caption = true; // true / false for image caption
const interval = 5000; // autoplay speed control
let initSlide;

const slider = document.querySelector('.slider');
const images = document.querySelectorAll('.slider img');			

var slides = [];
images.forEach((image, i)=>{
    // create a inner slide element
    let slide = document.createElement('div');
    slide.classList.add('slide');

    if (caption == true) {
        // create caption for a slide
        let caption = document.createElement('h3');
        caption.innerText = image.getAttribute('alt');
        slide.appendChild(caption);
    }		

    // Append child to a slide
    slide.appendChild(image);
    // Set each slide into an array
    slides.push(slide);
});

slider.innerHTML = ''; //initially slider will be empty			
// Now get all slides from slides array and put into slider
slides.forEach((image, i) => {
    slider.append(image); //slider
});

// Set custom width / Height
if(width != '' || height != ''){
    fullWidth = false;
    slider.style.cssText = `width:${width} !important;height:${height} !important;`;
}
// Border Enable / Disable
if(border != true){
    slider.style.border = '0';
}
// Full Width Enable / Disable
if (fullWidth == true) {
    slider.style.width = '100%';
    slider.style.height = '100vh';
    slider.style.border = 'none';
}

// Controls Enable / Disable
if (controls == true){
    // Create Controls Container
    let controlContainer = document.createElement('div');
    controlContainer.classList.add('slider-control');
    // Create Next Control Button
    let nextControl = document.createElement('div');
    nextControl.classList.add('next');
    // Create Previous Control Button
    let prevControl = document.createElement('div');
    prevControl.classList.add('prev');				
    // Append childs to controls container
    controlContainer.appendChild(nextControl);
    controlContainer.appendChild(prevControl);
    // Append Controls to slider
    slider.append(controlContainer);

    // Select Controls
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');

    next.addEventListener('click', function(){
        nextSlide();
        if (auto) {
            clearInterval(initSlide);
            initSlide = setInterval(nextSlide, interval);
        }
    });

    prev.addEventListener('click', function(){
        prevSlide();
        if (auto) {
            clearInterval(initSlide);
            initSlide = setInterval(nextSlide, interval);
        }				
    });
}

// add current class in very first slide
if (slides[0]) {
    slides[0].classList.add('current');
}

const nextSlide = () => {
    const current = document.querySelector('.current');
    current.classList.remove('current');

    if (current.nextElementSibling && (slides.length-1) > slides.indexOf(current)) {
        current.nextElementSibling.classList.add('current');
    }
    else{
        slides[0].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
}

const prevSlide = () => {
    const current = document.querySelector('.current');
    current.classList.remove('current');

    if (current.previousElementSibling) {
        current.previousElementSibling.classList.add('current');
    }
    else{
        slides[slides.length - 1].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
}

if (auto) {
    initSlide = setInterval(nextSlide, interval);
}		