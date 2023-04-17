var contact = document.getElementById('contact')
var regione = document.getElementById('regione')
var provincia = document.getElementById('provincia')
var comune = document.getElementById('comune')
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
    removeOptions(comune);
    removeOptions(provincia);
    var regioneScelta = regione.options[regione.selectedIndex].text
    var xhr = new XMLHttpRequest()
    xhr.open("GET", 'https://axqvoqvbfjpaamphztgd.functions.supabase.co/province/' + regioneScelta)
    xhr.send()
    provincia.removeAttribute("disabled")
    xhr.onload = function(){
        var text = xhr.response
        var obj = JSON.parse(text)
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