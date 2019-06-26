/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('score-component', require('./components/ScoreComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted: function () {}
});


$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});




$(function () {

    var copyToClipboard = function(textToCopy){
        $("body")
            .append($('<input type="text" name="fname" class="textToCopyInput"/>' )
            .val(textToCopy))
            .find(".textToCopyInput")
            .select();
          try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            alert('Text copied to clipboard!');
          } catch (err) {
              window.prompt("To copy the text to clipboard: Ctrl+C, Enter", textToCopy);
          }
         $(".textToCopyInput").remove();
    }


    $('input:text').mouseup(function(e) { return false; }); 

    $(".payment-add-m").click(function () {
        var txt = $(this).data('clipboard-text')
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(txt).focus().select();
        document.execCommand("copy");
        $temp.remove();
        $copied = $("<span class='copied-msg'>")
        $copied.html("Copied..")
        $copied.css({top: $(this).offset().top + 30, left: $(this).offset().left + 350, position:'absolute'})
        $("body").append($copied)
        setTimeout(function(){ $('.copied-msg').remove(); }, 1000);
    })


   
    
 

})
