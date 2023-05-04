var contact = document.getElementById('contact')
var regione = document.getElementById('regione')
var provincia = document.getElementById('provincia')
var comune = document.getElementById('comune')
var email = document.getElementById('email')
var end = document.getElementById('end')
var object = document.getElementById('object')
var body = document.getElementById('request')

contact.addEventListener('click', function(){
    var xhr = new XMLHttpRequest()
    xhr.open("GET", 'https://axqvoqvbfjpaamphztgd.functions.supabase.co/regioni')
    xhr.send()
    xhr.onload = function(){
        var text = xhr.response
        var obj = JSON.parse(text)
        console.log(obj)
        for (let i = 0; i < obj.length; i++) {
            regione.options[regione.options.length] = new Option(obj[i], obj[i]);
        }
    }   
})

regione.addEventListener('change', function(){
    removeOptions(provincia);
    var regioneScelta = regione.options[regione.selectedIndex].text
    var xhr = new XMLHttpRequest()
    xhr.open("GET", 'https://axqvoqvbfjpaamphztgd.functions.supabase.co/province/' + regioneScelta)
    xhr.send()
    provincia.removeAttribute("disabled")
    xhr.onload = function(){
        var text = xhr.response
        var obj = JSON.parse(text)
        provincia.options[provincia.options.length] = new Option("--", "--");
        for (let i = 0; i < obj.length; i++) {
            provincia.options[provincia.options.length] = new Option(obj[i].nome, obj[i].nome);
        }
    }   
})

provincia.addEventListener('change', function(){
    removeOptions(comune);
    var provinciaScelta = provincia.options[provincia.selectedIndex].text
    var xhr = new XMLHttpRequest()
    xhr.open("GET", 'https://axqvoqvbfjpaamphztgd.functions.supabase.co/comuni/provincia/' + provinciaScelta)
    xhr.send()
    comune.removeAttribute("disabled")
    xhr.onload = function(){
        var text = xhr.response
        var obj = JSON.parse(text)
        for (let i = 0; i < obj.length; i++) {
            comune.options[comune.options.length] = new Option(obj[i].nome, obj[i].nome);
        } 
    }   
})

function removeOptions(selectElement) {
    var i, L = selectElement.options.length - 1;
    for(i = L; i >= 0; i--) {
       selectElement.remove(i);
    }
}

(function($) { "use strict";

  $(function() {
    var header = $(".start-style");
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
    
      if (scroll >= 10) {
        header.removeClass('start-style').addClass("scroll-on");
      } else {
        header.removeClass("scroll-on").addClass('start-style');
      }
    });
  });   
    
  //Animation
  
  $(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
  });

  //Menu On Hover
    
  $('body').on('mouseenter mouseleave', '.nav-item', function(e){
      if ($(window).width() > 750) {
        var _d=$(e.target).closest('.nav-item');_d.addClass('show');
        setTimeout(function(){
        _d[_d.is(':hover')?'addClass':'removeClass']('show');
        },1);
        }
    })
});