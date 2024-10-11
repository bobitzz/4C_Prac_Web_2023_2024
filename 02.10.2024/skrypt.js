{
    let newCurrenty;

    const count = (inputAmountElement, selectCurrencyElement) => {
        const plnElement = document.querySelector(".js-pln");
        const usdElement = document.querySelector(".js-usd");
        const gbpElement = document.querySelector(".js-gbp");
        const eurElement = document.querySelector(".js-eur");
        const chfElement = document.querySelector(".js-chf");

        const currentUSD = 3.97;
        const currentGBP = 5.02;
        const currentEUR = 4.28;
        const currentCHF = 4.41;

        let result = 0;

        if(plnElement.checked) {
            newCurrenty = plnElement.value;
            switch(selectCurrencyElement) {
                case "pln":
                    return result = +inputAmountElement;
                case "usd":
                    return result = +inputAmountElement * currentUSD;
                case "gbp":
                    return result = +inputAmountElement * currentGBP;
                case "eur":
                    return result = +inputAmountElement * currentEUR;
                case "chf":
                    return result = +inputAmountElement * currentCHF;
            }
        } else if (usdElement.checked) {
            newCurrenty = usdElement.value;
            switch(selectCurrencyElement) {
                case "pln":
                    return result = inputAmountElement/currentUSD;
                case "usd":
                    return result = +inputAmountElement;
                    case "gbp":currentGBP
                    return result = +inputAmountElement * (currentGBP / currentUSD);
                case "eur":
                    return result = +inputAmountElement * (currentEUR / currentUSD);
                case "chf":
                    return result = +inputAmountElement * (currentCHF / currentUSD);
            }
        } else if (gbpElement.checked) {
            newCurrenty = gbpElement.value;
            switch(selectCurrencyElement) {
                case "pln":
                    return result = inputAmountElement / currentGBP;
                case "usd":
                    return result = +inputAmountElement * (currentUSD / currentGBP);
                    case "gbp":
                    return result = +inputAmountElement;
                case "eur":
                    return result = +inputAmountElement * (currentEUR / currentGBP);
                case "chf":
                    return result = +inputAmountElement * (currentCHF / currentGBP);
            }
        } else if (eurElement.checked) {
            newCurrenty = eurElement.value;
            switch(selectCurrencyElement) {
                case "pln":
                    return result = inputAmountElement / currentEUR;
                case "usd":
                    return result = +inputAmountElement * (currentUSD / currentEUR);
                    case "gbp":
                    return result = +inputAmountElement * (currentGBP / currentEUR);
                case "eur":
                    return result = +inputAmountElement;
                case "chf":
                    return result = +inputAmountElement * (currentCHF / currentEUR);
            }
        } else if (chfElement.checked) {
            newCurrenty = chfElement.value;
            switch(selectCurrencyElement) {
                case "pln":
                    return result = inputAmountElement / currentCHF;
                case "usd":
                    return result = +inputAmountElement * (currentUSD / currentCHF);
                    case "gbp":
                    return result = +inputAmountElement * (currentGBP / currentCHF);
                case "eur":
                    return result = +inputAmountElement * (currentEUR / currentCHF);
                case "chf":
                    return result = +inputAmountElement;
            }
        }
    }
    
    const init = () => {
        const formElement = document.querySelector(".js-form");
        formElement.addEventListener("submit", (event) => {
            event.preventDefault();
            const inputAmountElement = document.querySelector(".js-inputAmount").value;
            const selectCurrencyElement = document.querySelector(".js-selectCurrency").value;

            const sectionValueElement = document.querySelector(".js-section__value");
            const sectionCurrencyElement = document.querySelector(".js-section__currency");

            sectionValueElement.innerText = count(inputAmountElement, selectCurrencyElement).toFixed(2);
            sectionCurrencyElement.innerText = newCurrenty;
        });
    }

    init();
}