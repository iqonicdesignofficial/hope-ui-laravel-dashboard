window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.Popper = require('@popperjs/core').default;
window.$ = window.jQuery = require('jquery');
window.bootstrap = require('bootstrap/dist/js/bootstrap.min.js');
window.counterUp = require('counterup2');
window.noUiSlider = require('nouislider/distribute/nouislider.min.js');
require('datatables.net-bs4');
require('datatables.net');
require('smooth-scrollbar');
window.Swal = require('sweetalert2');
require('flatpickr');
window.Scrollbar = require('smooth-scrollbar/dist/smooth-scrollbar')
window.ApexCharts = require('apexcharts');
window.waypoint = require('waypoints/lib/noframework.waypoints');
window.Swiper = require('swiper/swiper-bundle.min.js');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
