document.getElementById('intercambiar').addEventListener('click', function() {
    let origen = document.getElementById('moneda_origen');
    let destino = document.getElementById('moneda_destino');
    let temp = origen.value;
    origen.value = destino.value;
    destino.value = temp;
});

document.querySelector('form').addEventListener('submit', function(e) {
    let monto = document.getElementById('monto').value;
    if (monto <= 0 || monto === '') {
        e.preventDefault();
        alert('Por favor introduce un monto válido');
    }
});

let historial = JSON.parse(localStorage.getItem('historial')) || [];
actualizarHistorial();

document.querySelector('form').addEventListener('submit', function() {
    let monto = document.getElementById('monto').value;
    let origen = document.getElementById('moneda_origen').value;
    let destino = document.getElementById('moneda_destino').value;

    if (monto > 0) {
        historial.unshift(`${monto} ${origen} → ${destino}`);
        if (historial.length > 5) historial.pop();
        localStorage.setItem('historial', JSON.stringify(historial));
        actualizarHistorial();
    }
});

function actualizarHistorial() {
    let lista = document.getElementById('historial-lista');
    lista.innerHTML = historial.map(item => `<li>${item}</li>`).join('');
}