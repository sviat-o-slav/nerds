"use strict";

/* Set active page and title code */
function ucFirstOnly (str) {
    return str[0].toUpperCase() + str.slice(1).toLowerCase();
}

function setPageTitle() {
    const links = document.querySelectorAll('.nav-item a');
    const current = document.location.origin + document.location.pathname;

    for (let link of links) {
        if (current === link.href) {
            document.title += ' - ' + ucFirstOnly(link.innerText);
        }
    }
}

setPageTitle();


/* Modal window - Write us*/
const modal = document.querySelector(".modal-window");
const writeUsButton = document.querySelector("#writeUsButton");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
    modal.classList.toggle('visually-hidden');
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

writeUsButton.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);

window.addEventListener("click", windowOnClick);

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        modal.classList.remove("show-modal");
        modal.classList.add('visually-hidden');
    }
});


/* Google maps if load hide static and show interactive */
let googleMap = document.querySelector('.google-map');

googleMap.onload = function () {
    googleMap.style.visibility = 'initial';
};


/* Slides carousel with manual dots and timer*/
if (document.querySelector('.slider')) {
    let slides = document.querySelectorAll('.slide');
    let sliderDots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    let timer = null;
    let intervalSeconds = 5;

    function showSlide(n) {
        currentSlide = n;

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
            sliderDots[i].classList.remove('slider-dot-active');

            if (i === n) {
                slides[i].style.display = 'block';
                sliderDots[i].classList.add('slider-dot-active');
            }

        }

        clearTimeout(timer);
        timer = setTimeout(nextSlide, intervalSeconds * 1000);
    }

    function setSliderControlEvent() {
        for (let i = 0; i < sliderDots.length; i++) {
            sliderDots[i].onclick = () => {
                showSlide(i);
            }
        }
    }

    function nextSlide() {
        currentSlide += 1;

        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }

        showSlide(currentSlide);
    }

    setSliderControlEvent();
    showSlide(currentSlide);
}


/* Filter pricing toggle input */
if (document.querySelector('.filter-form')) {
    const min = 0;
    const max = 15000;
    const step = 100;
    let minValue = 1000;
    let maxValue = 10000;
    const toggleInterval = max / 10;
    const onePercent = max / 100;

    const greenBar = document.querySelector('.multi-bar-green');

    const minToggle = document.querySelector('#min-toggle');
    minToggle.min = min;
    minToggle.max = max;
    minToggle.step = step;
    minToggle.value = minValue;

    const maxToggle = document.querySelector('#max-toggle');
    maxToggle.min = min;
    maxToggle.max = max;
    maxToggle.step = step;
    maxToggle.value = maxValue;

    const minInput = document.querySelector('#min-price');
    const maxInput = document.querySelector('#max-price');

    minInput.value = minValue;
    maxInput.value = maxValue;

    function setGreeBar() {
        const minPercent = minValue / onePercent;
        const maxPercent = maxValue / onePercent - minPercent;
        greenBar.style.left = minPercent + '%';
        greenBar.style.width = maxPercent + '%';
    }

    function toggleChange() {
        minValue = parseInt(minToggle.value);
        maxValue = parseInt(maxToggle.value);
    }

    function inputChange() {
        minInput.value = minValue;
        maxInput.value = maxValue;
    }

    minToggle.oninput = function () {
        toggleChange();

        if (minValue > maxValue - toggleInterval) {
            maxToggle.value = minValue + toggleInterval;

            if (maxValue == maxToggle.max) {
                minToggle.value = parseInt(maxToggle.max) - toggleInterval;
            }
        }

        inputChange();
        setGreeBar();
    };

    maxToggle.oninput = function () {
        toggleChange();

        if (maxValue < minValue + toggleInterval) {
            minToggle.value = maxValue - toggleInterval;

            if (minValue == minToggle.min) {
                maxToggle.value = toggleInterval;
            }
        }

        inputChange();
        setGreeBar();
    };

    function inputOnChange() {
        minToggle.value = minInput.value;
        maxToggle.value = maxInput.value;
        toggleChange();
        setGreeBar();
    }

    maxInput.oninput = inputOnChange;
    minInput.oninput = inputOnChange;

    setGreeBar();
}

