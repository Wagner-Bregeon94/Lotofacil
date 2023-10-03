document.addEventListener("DOMContentLoaded", function() {
    const totalNumbers = 25;
    const numbersPerRow = 5;
    let totalNumbersToDraw = 15;

    function generateAllNumbers() {
        const allNumbers = [];
        for (let i = 1; i <= totalNumbers; i++) 
        {
            allNumbers.push(i);
        }
        return allNumbers;
    }

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

    function createRow(numbers, highlightedNumbers) {
        const row = document.createElement("div");
        row.className = "row";

        numbers.forEach((number) => {
            const numberElement = document.createElement("div");
            numberElement.className = "number";
            numberElement.textContent = number;

            if (highlightedNumbers.includes(number)) {
                numberElement.classList.add("highlighted");
            }

            row.appendChild(numberElement);
        });

        return row;
    }

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
    }

    function renderOddAndEvenNumbers(numbers) {
        const oddNumbersCount = numbers.filter((number) => number % 2 !== 0).length;
        const evenNumbersCount = numbers.filter((number) => number % 2 === 0).length;
        const primeNumbersCount = countPrimeNumbers(numbers);
        const sumOfNumbers = calculateSumOfNumbers(numbers);

        const oddNumbersElement = document.getElementById("oddNumbers");
        const evenNumbersElement = document.getElementById("evenNumbers");
        const primeNumbersElement = document.getElementById("primeNumbers");
        const sumOfNumbersElement = document.getElementById("sumOfNumbers");

        oddNumbersElement.textContent = `${oddNumbersCount}`;
        evenNumbersElement.textContent = `${evenNumbersCount}`;
        primeNumbersElement.textContent = `${primeNumbersCount}`;
        sumOfNumbersElement.textContent = `${sumOfNumbers}`;

        const somaInput = document.getElementById("somaInput");
        const imparesInput = document.getElementById("imparesInput");
        const paresInput = document.getElementById("paresInput");
        const primosInput = document.getElementById("primosInput");

        somaInput.value = sumOfNumbers;
        imparesInput.value = oddNumbersCount;
        paresInput.value = evenNumbersCount;
        primosInput.value = primeNumbersCount;
    }
   
    // Chamada inicial para renderizar os números ímpares e pares
    renderOddAndEvenNumbers(generateRandomNumbers());

    function renderDrawnNumbers(numbers) {
        const drawnNumbersElement = document.getElementById("drawnNumbers");
        drawnNumbersElement.textContent = numbers.join(" - "); // Converte o array de números em uma string separada por -
    }
    
    // Chamada inicial para renderizar os números sorteados
    renderDrawnNumbers(generateRandomNumbers());
    

    function isPrime(number) {
        if (number <= 1) return false; // 0 e 1 não são primos
        if (number <= 3) return true; // 2 e 3 são primos
    
        if (number % 2 === 0 || number % 3 === 0) return false; // Divisíveis por 2 ou 3 não são primos
    
        for (let i = 5; i * i <= number; i += 6) {
            if (number % i === 0 || number % (i + 2) === 0) return false;
        }
    
        return true;
    }
    
    function countPrimeNumbers(numbers) {
        return numbers.filter((number) => isPrime(number)).length;
    }
    

    function calculateSumOfNumbers(numbers) {
        return numbers.reduce((accumulator, currentNumber) => accumulator + currentNumber, 0);
    }
    

    const sorteadorElement = document.getElementById("sorteador");
    generateSorteador();

    const selectSorteio = document.getElementById("selectSorteio");
    const showDrawElement = document.getElementById("showDraw");
    
    showDrawElement.innerHTML = `Os ${totalNumbersToDraw} Números Sorteados Foram:`;

    selectSorteio.addEventListener("change", function() {
        totalNumbersToDraw = parseInt(selectSorteio.value);
        // Remove todos os números existentes
        sorteadorElement.innerHTML = "";
        // Gera novos números e atualiza a exibição
        generateSorteador();

        const quantidadeInput = document.getElementById("quantidadeInput");

        quantidadeInput.value = JSON.stringify(totalNumbersToDraw);

        showDrawElement.innerHTML = `Os ${totalNumbersToDraw} Números Sorteados Foram:`;
        
    });
    
    const updateButton = document.getElementById("updateButton");

    updateButton.addEventListener("click", function() {
        // Remove todos os números existentes
        sorteadorElement.innerHTML = "";
        // Gera novos números e atualiza a exibição
        generateSorteador();

        // Chama a função para gerar e ordenar os novos números sorteados
        const newDrawnNumbers = generateRandomNumbers().sort((a, b) => a - b);
        
        // Chama a função para renderizar os números sorteados em ordem crescente
        renderDrawnNumbers(newDrawnNumbers);
        
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
