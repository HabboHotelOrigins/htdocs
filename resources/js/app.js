import './bootstrap';

import.meta.glob([
    '../img/**',
]);

import Alpine from 'alpinejs';
Alpine.start();
// If you want Alpine's instance to be available everywhere.
window.Alpine = Alpine;