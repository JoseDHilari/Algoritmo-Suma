document.addEventListener('DOMContentLoaded', function() {
    const num1Input = document.getElementById('Num1');
    const num2Input = document.getElementById('Num2');
    const sumarButton = document.getElementById('Sumar');
    const resultDiv = document.getElementById('resultado');

    sumarButton.addEventListener('click', function() {
        const num1 = parseFloat(num1Input.value);
        const num2 = parseFloat(num2Input.value);

        if (!isNaN(num1) && !isNaN(num2)) {
            const suma = num1 + num2;
            resultDiv.textContent = `Resultado: ${suma}`;
        } else {
            resultDiv.textContent = 'Por favor ingresa números válidos.';
        }
    });
});
