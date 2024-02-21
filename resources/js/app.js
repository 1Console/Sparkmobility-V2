import './bootstrap';
import 'flowbite';
import { format } from 'date-fns';
import Alpine from 'alpinejs';
import './chart';

window.Alpine = Alpine;

Alpine.start();

// Set current date on navbar
const today = new Date();
const formattedDate = format(today, 'eeee, MMMM do');

document.getElementById('todaysDate').innerText = formattedDate;

// Toggle arrow icon rotation in Sidebar menu
const accordionGrp = document.querySelector("#menu-accordion-grp-1");
const accordionIcon = document.querySelector("#accordion-icon-rotate");

const handleClick = () => accordionIcon.classList.toggle('rotate-90');
accordionGrp.addEventListener('click', handleClick);
