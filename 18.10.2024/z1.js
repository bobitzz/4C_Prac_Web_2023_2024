function kwadratLiczb(numberArray) {
	return numberArray.map(number => number * number);
}

const number = [1,2,3,4,5];
const podniesioneDoKwadratu = kwadratLiczb(number);

console.log(podniesioneDoKwadratu);