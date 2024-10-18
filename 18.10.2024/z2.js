let sumArray = function(array) {
    return array.reduce((accumulator, current) => accumulator + current, 0);
};

const numberArray = [10, 20, 30, 40];
let result = sumArray(numberArray);
console.log(result);