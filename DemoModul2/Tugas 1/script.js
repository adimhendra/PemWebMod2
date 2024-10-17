let display = document.getElementById("result");

function inputValue(value) {
    display.value += value;
}

function clearDisplay() {
    display.value = "";
}

function calculate() {
    let expression = display.value;

    // Ganti operator pangkat ^ dengan ** untuk JavaScript
    expression = expression.replace('^', '**');
    
    try {
        display.value = eval(expression);
    } catch (error) {
        display.value = "Error";
    }
}