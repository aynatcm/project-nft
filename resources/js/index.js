let title = document.getElementById('title')
let text = document.getElementById("name-change")
let currentTitle = text.innerHTML

let priceText = document.getElementById('price-change')
let priceInput = document.getElementById('price')
let currentPrice = priceText.innerHTML

function validate() {
    if (text.innerHTML === '') {
        text.innerHTML = currentTitle;
    }

    if (priceText.innerHTML === '') {
        priceText.innerHTML = currentPrice;
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

priceInput.addEventListener('keyup',function (){
    priceText.innerHTML = priceInput.value.toUpperCase()
    validate()
})

priceInput.addEventListener('change',function (){
    priceText.innerHTML = priceInput.value.toUpperCase()
    validate()
})
