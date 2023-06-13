function getValue() {
    let x = document.getElementById('title')
    let text = document.getElementById("name-change")
    text.innerHTML = x.value.toUpperCase();

    if (x.value.length >= 35) {
        // let h1 =  document.createElement('h1')
        // h1.textContent = 'Llegaste al maximo de caracteres'
        // text.appendChild(h1)

        alert('Maximo de caracteres')
        // text.style.wordBreak = 'break-all'
    }
}
