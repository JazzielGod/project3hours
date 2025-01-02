import './bootstrap';
import '../css/app.scss';
// import * as bootstrap from 'bootstrap';

console.log('Hello World');

document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('[data-collapse-toggle]');
    const navbar = document.getElementById('navbar-default');

    toggleButton.addEventListener('click', function () {
        navbar.classList.toggle('hidden');
    });
});