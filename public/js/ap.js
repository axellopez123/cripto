let endpoint = 'https://api.binance.com/api/v3/ticker/price'
setInterval(function(){
    fetch(endpoint)
        .then( respuesta => respuesta.json())
        .then( datos => mostrarData(datos))
        .catch( e => console.log(e))

},1000);

const mostrarData = (data)=>{
    console.log(data)
    let body = ''
    for (let i=0; i < data.length; i++) {
        body += `<tr><td>${data[i].symbol}</td><td>${data[i].price}</td><td><button type="button" class="btn btn-info">Comprar</button></td></tr>`
    }
    document.getElementById('data').innerHTML = body
}

$.ajax({
    url: '/usuarios/all',
    method: 'POST',
    data:{
        id:1
    }
}).done(function(res){
    alert(res);
})