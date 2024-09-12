//header ham-menu transition
document.addEventListener('DOMContentLoaded', (e) => {
    const offScreenMenu = document.querySelector('.menu');
    const hamMenu = document.querySelector('.ham-menu');
    const spanTopLine = document.querySelector('.ham-menu-first-span');
    const spanDownLine = document.querySelector('.ham-menu-last-span');
    const spanMidleLine = document.querySelector('.ham-menu-midle-span');



    hamMenu.addEventListener('click', () => {
        offScreenMenu.classList.toggle('active');
        spanTopLine.classList.toggle('active');
        spanDownLine.classList.toggle('active');
        spanMidleLine.classList.toggle('active');

    });
});