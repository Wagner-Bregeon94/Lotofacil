document.addEventListener("DOMContentLoaded", function() {

    let selectedNumbers = [];
    const totalNumbers = 25; // Total de números a serem gerados
    const numbersPerRow = 5; // Quantidade de números por linha
    let totalNumbersToDraw = 15; // Quantidade de números a serem sorteados inicialmente

    // Função para gerar um array com todos os números de 1 a totalNumbers
    function generateAllNumbers() {
        const allNumbers = [];
        for (let i = 1; i <= totalNumbers; i++) 
        {
            allNumbers.push(i);
        }
        return allNumbers;
    }

    // Função para gerar totalNumbersToDraw números aleatórios
    function generateRandomNumbers() {
        const allNumbers = generateAllNumbers();
        const drawnNumbers = [];

        while (drawnNumbers.length < totalNumbersToDraw) 
        {
            const randomIndex = Math.floor(Math.random() * allNumbers.length);
            const randomNumber = allNumbers.splice(randomIndex, 1)[0];
            drawnNumbers.push(randomNumber);
        }

        return drawnNumbers;
    }

    // Função para criar uma linha de números no HTML
    function createRow(numbers, drawnNumbers) {
        const row = document.createElement("div");
        row.className = "row";

        numbers.forEach((number) => {
            const numberElement = document.createElement("div");
            numberElement.className = "number";
            numberElement.textContent = number;

            if (drawnNumbers.includes(number)) {
                selectedNumbers.push(number);
                numberElement.classList.add("highlighted");
            }

            row.appendChild(numberElement);
        });

        return row;
    }

    // Função para gerar e exibir os números sorteados no HTML
    function generateSorteador() {
        const sortedNumbers = generateAllNumbers();
        const drawnNumbers = generateRandomNumbers();
        let start = 0;
        
        while (start < sortedNumbers.length) {
            const rowNumbers = sortedNumbers.slice(start, start + numbersPerRow);
            const row = createRow(rowNumbers, drawnNumbers);
            sorteadorElement.appendChild(row);

            start += numbersPerRow;
        }
        renderDrawnNumbers(selectedNumbers);
    }

    // Função para exibir os números sorteados no HTML
    function renderDrawnNumbers(numbers) {
        const drawnNumbersElement = document.getElementById("drawnNumbers");
        
        drawnNumbersElement.textContent = numbers.join(" - "); // Converte o array de números em uma string separada por -
    }

    // Função para verificar se um número é primo
    function isPrime(number) {
        if (number <= 1) return false; // 0 e 1 não são primos
        if (number <= 3) return true; // 2 e 3 são primos
    
        if (number % 2 === 0 || number % 3 === 0) return false; // Divisíveis por 2 ou 3 não são primos
    
        for (let i = 5; i * i <= number; i += 6) {
            if (number % i === 0 || number % (i + 2) === 0) return false;
        }
    
        return true;
    }
    
    // Função para contar a quantidade de números primos em um array
    function countPrimeNumbers(numbers) {
        return numbers.filter((number) => isPrime(number)).length;
    }
    
    // Função para calcular a soma de números em um array
    function calculateSumOfNumbers(numbers) {
        return numbers.reduce((accumulator, currentNumber) => accumulator + currentNumber, 0);
    }

    // Função para contar e exibir a quantidade de números ímpares, pares, primos e a soma
    function renderOddAndEvenNumbers(numbers) {
        const oddNumbersCount = numbers.filter((number) => number % 2 !== 0).length;
        const evenNumbersCount = numbers.filter((number) => number % 2 === 0).length;
        const primeNumbersCount = countPrimeNumbers(numbers);
        const sumOfNumbers = calculateSumOfNumbers(numbers);

        // Obtém elementos HTML para atualizar
        const oddNumbersElement = document.getElementById("oddNumbers");
        const evenNumbersElement = document.getElementById("evenNumbers");
        const primeNumbersElement = document.getElementById("primeNumbers");
        const sumOfNumbersElement = document.getElementById("sumOfNumbers");
        
        // Atualiza o conteúdo dos elementos HTML
        oddNumbersElement.textContent = `${oddNumbersCount}`;
        evenNumbersElement.textContent = `${evenNumbersCount}`;
        primeNumbersElement.textContent = `${primeNumbersCount}`;
        sumOfNumbersElement.textContent = `${sumOfNumbers}`;

        // Atualiza os valores nos campos de input
        const imparesInput = document.getElementById("imparesInput");
        const paresInput = document.getElementById("paresInput");
        const primosInput = document.getElementById("primosInput");
        const somaInput = document.getElementById("somaInput");

        imparesInput.value = oddNumbersCount;
        paresInput.value = evenNumbersCount;
        primosInput.value = primeNumbersCount;
        somaInput.value = sumOfNumbers;
        
    }
    
    // Chamada inicial para renderizar os números ímpares e pares
    renderOddAndEvenNumbers(generateRandomNumbers());
    
    const sorteadorElement = document.getElementById("sorteador");
    generateSorteador();

    const selectSorteio = document.getElementById("selectSorteio");
    const showDrawElement = document.getElementById("showDraw");
    
    showDrawElement.innerHTML = `Os ${totalNumbersToDraw} Números Sorteados Foram:`;

    // Manipula eventos quando o usuário altera a quantidade de números a serem sorteados
    selectSorteio.addEventListener("change", function() {
        totalNumbersToDraw = parseInt(selectSorteio.value);
        selectedNumbers = [];
        // Remove todos os números existentes
        sorteadorElement.innerHTML = "";
        // Gera novos números e atualiza a exibição
        generateSorteador();

        // Atualiza o valor no campo de input
        const quantidadeInput = document.getElementById("quantidadeInput");

        quantidadeInput.value = JSON.stringify(totalNumbersToDraw);

        showDrawElement.innerHTML = `Os ${totalNumbersToDraw} Números Sorteados Foram:`;
        
    });
    
     // Manipula eventos quando o usuário clica no botão "Atualizar Sorteio"
    const updateButton = document.getElementById("updateButton");

    updateButton.addEventListener("click", function() {
        selectedNumbers = [];
        // Remove todos os números existentes
        sorteadorElement.innerHTML = "";
        // Gera novos números e atualiza a exibição
        generateSorteador();

        // Chama a função para gerar e ordenar os novos números sorteados
        const newDrawnNumbers = generateRandomNumbers().sort((a, b) => a - b);
        
        // Chama a função para renderizar os números ímpares e pares com os novos números sorteados
        renderOddAndEvenNumbers(newDrawnNumbers);

        const numerosSorteadosInput = document.getElementById("numerosSorteadosInput");

        numerosSorteadosInput.value = JSON.stringify(newDrawnNumbers);
    });

    const saveButton = document.getElementById("saveButton");
    const apostaForm = document.getElementById("apostaForm");
    
    saveButton.addEventListener("click", function(event) {
        if (!isAuthenticated) {
            event.preventDefault(); // Impede o envio do formulário
            alert("É necessário fazer login para salvar a aposta.");
        } else {
            // Se o usuário estiver autenticado, envie o formulário para o servidor
            apostaForm.submit();
        }
    });
});
