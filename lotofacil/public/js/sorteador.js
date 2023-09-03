document.addEventListener("DOMContentLoaded", function() 
{
    const totalNumbers = 25;
    const numbersPerRow = 5;
    let totalNumbersToDraw = 15;

    function generateAllNumbers() 
    {
        const allNumbers = [];
        for (let i = 1; i <= totalNumbers; i++) 
        {
            allNumbers.push(i);
        }
        return allNumbers;
    }

    function generateRandomNumbers() 
    {
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

    function createRow(numbers, highlightedNumbers) 
    {
        const row = document.createElement("div");
        row.className = "row";

        numbers.forEach((number) => 
        {
            const numberElement = document.createElement("div");
            numberElement.className = "number";
            numberElement.textContent = number;

            if (highlightedNumbers.includes(number)) 
            {
                numberElement.classList.add("highlighted");
            }

            row.appendChild(numberElement);
        });

        return row;
    }

    function generateSorteador() 
    {
        const sortedNumbers = generateAllNumbers();
        const drawnNumbers = generateRandomNumbers();
        let start = 0;

        while (start < sortedNumbers.length) 
        {
            const rowNumbers = sortedNumbers.slice(start, start + numbersPerRow);
            const row = createRow(rowNumbers, drawnNumbers);
            sorteadorElement.appendChild(row);

            start += numbersPerRow;
        }
    }

    function renderOddAndEvenNumbers(numbers) 
    {
        const oddNumbersCount = numbers.filter((number) => number % 2 !== 0).length;
        const evenNumbersCount = numbers.filter((number) => number % 2 === 0).length;

        const oddNumbersElement = document.getElementById("oddNumbers");
        const evenNumbersElement = document.getElementById("evenNumbers");

        oddNumbersElement.textContent = `Ímpares: ${oddNumbersCount}`;
        evenNumbersElement.textContent = `Pares: ${evenNumbersCount}`;
    }

    const sorteadorElement = document.getElementById("sorteador");
    generateSorteador();

    const selectSorteio = document.getElementById("selectSorteio");
    selectSorteio.addEventListener("change", function() 
    {
        totalNumbersToDraw = parseInt(selectSorteio.value);
        // Remove todos os números existentes
        sorteadorElement.innerHTML = "";
        // Gera novos números e atualiza a exibição
        generateSorteador();
    });
    
    const updateButton = document.getElementById("updateButton");
    updateButton.addEventListener("click", function() 
    {
        // Remove todos os números existentes
        sorteadorElement.innerHTML = "";
        // Gera novos números e atualiza a exibição
        generateSorteador();

        // Chama a função para renderizar os números ímpares e pares com os novos números sorteados
        renderOddAndEvenNumbers(generateRandomNumbers());
    });

    const saveButton = document.getElementById("saveButton");
    saveButton.addEventListener("click", function()
    {
        const selectedNumbers = generateRandomNumbers(); // Utiliza a mesma lógica de seleção aleatória

        // Armazena os números selecionados (pode ser em localStorage, um banco de dados, etc.)
        localStorage.setItem("apostas", JSON.stringify(selectedNumbers)); // Exemplo usando localStorage

        // Redireciona para a página "Minhas Apostas"
        window.location.href = "apostas";
    });

    // Chamada inicial para renderizar os números ímpares e pares
    renderOddAndEvenNumbers(generateRandomNumbers());
});
