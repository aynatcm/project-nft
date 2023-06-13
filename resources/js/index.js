let title = document.getElementById('title')
let price = document.getElementById('price')
let text = document.getElementById("name-change")
let currentTitle = text.innerHTML
let currentPrice = price.innerHTML

function validate() {
    if (text.innerHTML === '') {
        text.innerHTML = currentTitle;
    }
}

title.addEventListener('keyup', function () {
    text.innerHTML = title.value.toUpperCase();
    validate()
})

title.addEventListener('change', function () {
    text.innerHTML = title.value.toUpperCase();
    validate();
})


