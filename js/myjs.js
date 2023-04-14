var contact = document.getElementById('contact')
var regione = document.getElementById('regione')
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

//var id = document.getElementsByName('provincia')
//id.addEventListener('change', function(){
//    var xhr = new XMLHttpRequest()
//    xhr.open("GET", '')
//    xhr.send()
//    xhr.onload = function(){
//    var text = xhr.response
//    var obj = JSON.parse(text)
//    document.getElementById('data').innerHTML = obj.body;   
//    }   
//})
//
//var id = document.getElementsByName('comune')
//id.addEventListener('change', function(){
//    var xhr = new XMLHttpRequest()
//    xhr.open("GET", '')
//    xhr.send()
//    xhr.onload = function(){
//    var text = xhr.response
//    var obj = JSON.parse(text)
//    document.getElementById('data').innerHTML = obj.body;   
//    }   
//})