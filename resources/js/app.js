import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

require('./bootstrap');
require('./theme');

//Head Libs
require('./modernizr.min');

//Global site tag (gtag.js) - Google Analytics
// require('./gtag')
