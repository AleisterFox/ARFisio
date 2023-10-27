const menu = document.querySelector('.menu');
const menuButton = document.querySelector('.menu__button');
const servicesSlider = document.querySelector('.services__slider');
let sliderSection = document.querySelectorAll(".services__container--service");
let sliderSectionLast = sliderSection[sliderSection.length - 1];
const sliderNext = document.querySelector('.services__slider-next');
const sliderPrevious = document.querySelector('.services__slider-previous');

handleTouchSlider(servicesSlider);

const testSlider = document.querySelector('.testimonials__slider');
let testSection = document.querySelectorAll('.testimonials__slider--slide');
let testSectionLast = testSection[testSection.length - 1];
const testPrev = document.querySelector('.testimonials__slider-previous');
const testNext = document.querySelector('.testimonials__slider-next');

handleTouchSlider(testSlider);
testSlider.insertAdjacentElement("afterbegin", testSectionLast);
servicesSlider.insertAdjacentElement("afterbegin", sliderSectionLast);

menuButton.addEventListener('click', () => {
    if (menu.classList.contains('hidden')) {
        menuButton.style.animation = 'spinIn 0.2s linear'
        setTimeout(() => {
            menuButton.classList.remove('fa-bars');
            menuButton.classList.add('fa-x');
        }, 200);
        menu.classList.remove('hidden');
        menu.style.animation = 'menuAppear 0.3s ease-in-out';
    } else {
        menuButton.style.animation = 'spinOut 0.2s ease-in-out'
        setTimeout(() => {
            menuButton.classList.remove('fa-x');
            menuButton.classList.add('fa-bars');
        }, 200);
        menu.style.animation = 'menuHide 0.3s ease-in-out';
        setTimeout(() => {
            menu.classList.add('hidden');
        }, 250);
    }
});

testNext.addEventListener('click', sig);
testPrev.addEventListener('click', prev);

sliderNext.addEventListener('click', next);
sliderPrevious.addEventListener('click', previous);

function next() {
    let sliderSectionFirst = document.querySelectorAll('.services__container--service')[0];
    if (window.innerWidth > 799) {
        console.log(window.innerWidth);
        servicesSlider.style.transform = 'translateX(-70rem)';
    } else {
        servicesSlider.style.transform = 'translateX(-164vw)';
    }
    servicesSlider.style.transition = 'all 1s ease-in-out';
    setTimeout(() => {
        servicesSlider.style.transition = 'none';
        servicesSlider.insertAdjacentElement("beforeend", sliderSectionFirst);
        if (window.innerWidth > 799) {
            servicesSlider.style.transform = 'translateX(-35rem)';
        } else {
            servicesSlider.style.transform = 'translateX(-82vw)';
        }
    }, 1000);
}

function previous() {
    let sliderSection = document.querySelectorAll(".services__container--service");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    servicesSlider.style.transform = 'translateX(0vw)';
    servicesSlider.style.transition = 'all 1s ease-in-out';
    setTimeout(() => {
        servicesSlider.style.transition = 'none';
        servicesSlider.insertAdjacentElement("afterbegin", sliderSectionLast);
        if (window.innerWidth > 799) {
            servicesSlider.style.transform = 'translateX(-35rem)';
        } else {
            servicesSlider.style.transform = 'translateX(-82vw)';
        }
    }, 1050);
}

function sig() {
    let testSectionFirst = document.querySelectorAll('.testimonials__slider--slide')[0];
    if (window.innerWidth > 799) {
        testSlider.style.marginLeft = '-72rem';
    } else {
        testSlider.style.transform = 'translateX(-146vw)';
    }
    testSlider.style.transition = 'all 1s ease-in';
    setTimeout(() => {
        testSlider.style.transition = 'none';
        testSlider.insertAdjacentElement("beforeend", testSectionFirst);
        if (window.innerWidth > 799) {
            testSlider.style.marginLeft = '-36rem';
        } else {
            testSlider.style.transform = 'translateX(-65vw)';
        }
    }, 1000);
}

function prev() {
    let testSection = document.querySelectorAll('.testimonials__slider--slide');
    let testSectionLast = testSection[testSection.length - 1];
    if (window.innerWidth > 799) {
        testSlider.style.marginLeft = '0';
    } else {
        testSlider.style.transform = 'translateX(16vw)';
    }
    testSlider.style.transition = 'all 1s ease-in';
    setTimeout(() => {
        testSlider.style.transition = 'none';
        testSlider.insertAdjacentElement("afterbegin", testSectionLast);
        if (window.innerWidth > 799) {
            testSlider.style.marginLeft = '-36rem';
        } else {
            testSlider.style.transform = 'translateX(-65vw)';
        }
    }, 1050);
}


function handleTouchSlider(element) {
    let initialX = null;

    element.addEventListener('touchstart', (event) => {
        initialX = event.touches[0].clientX;
    });

    element.addEventListener('touchmove', (event) => {
        if (initialX === null) {
            return;
        }

        const currentX = event.touches[0].clientX;
        const diffX = initialX - currentX;

        if (element == servicesSlider) {
            if (diffX > 0) {
                next();
            } else {
                previous();
            }
        } else {
            if (diffX > 0) {
                sig();
            } else {
                prev();
            }
        }

        initialX = null;
    });
}


function autoSlide() {
    if (window.innerWidth < 800) {
        setInterval(() => {
            sig()
        }, 5000);
    }

}


