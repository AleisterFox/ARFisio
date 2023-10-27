const menu = document.querySelector('.menu');
const menuButton = document.querySelector('.menu__button');

const faqs = document.querySelectorAll('.faq');

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


faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        if (faq.style.height === '7rem') {

            setTimeout(() => {
                faqs.forEach(faq => {
                    if (faq.style.height !== '7rem') {
                        faq.style.backgroundColor = '#fff';
                        faq.style.animation = 'hideFaq 0.5s ease-in-out';
                        setTimeout(() => {
                            faq.style.height = '7rem';
                        }, 450);
                    }
                });
            }, 100);

            faq.firstElementChild.style.color = '#fff';
            faq.style.backgroundColor = '#55B9c5';
            faq.lastElementChild.style.transform = 'rotate(180deg)';
            faq.lastElementChild.style.color = '#fff';
            faq.style.animation = 'showFaq 0.5s ease-in-out';
            setTimeout(() => {
                faq.style.height = 'fit-content';

            }, 450);
        } else {

            faq.firstElementChild.style.color = '#113356';
            faq.style.backgroundColor = '#fff';
            faq.lastElementChild.style.transform = 'rotate(0deg)';
            faq.lastElementChild.style.color = '#000';
            faq.style.animation = 'hideFaq 0.5s ease-in-out';
            setTimeout(() => {
                faq.style.height = '7rem';
            }, 450);
        }
    });
});