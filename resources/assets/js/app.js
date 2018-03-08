
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });



$(document).ready(function(){
    $(".addMoreFilesInputs").hide();
    $(".addMoreReferencesInputs").hide();

$(".addMoreFilesBtn").click(function(){
        $(".addMoreFilesInputs").show(500);
        $(".addMoreFilesBtn").hide(500);
    });
});

$(document).ready(function(){
    $(".addMoreReferencesBtn").click(function(){
        $(".addMoreReferencesInputs").show(500);
        $(".addMoreReferencesBtn").hide(500);
    });
});
