const menu = document.querySelector('.menu');
const menuButton = document.querySelector('.menu__button');
const services = document.querySelectorAll('.serv');
const descriptions = document.querySelectorAll('.desc');

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
})

services.forEach(service => {

    service.addEventListener('click', () => {
        let currentClass = service.classList[1];

        descriptions.forEach(description => {
            if (!description.classList.contains('hidden')) {
                description.classList.add('hidden');
            }
        });

        descriptions.forEach(description => {
            if (description.classList.contains(currentClass)) {
                description.classList.remove('hidden');
            }
        });

        services.forEach(serv => {
            serv.classList.remove('active');
        });

        service.classList.add('active');
    });
});