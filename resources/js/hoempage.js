import Typed from 'typed.js';

// typed.js has a problem that current page must be have target id, if not , 
// typed.js will throw error and stop other code running.
//  GitHub issues  -> https://github.com/mattboldt/typed.js/issues/417
let home_text_el = document.getElementById('typed');
if (home_text_el) {
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 50,
        backSpeed: 0,
        backDelay: 500,
        startDelay: 1000
    });
}
