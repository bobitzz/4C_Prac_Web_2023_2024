let IsNumberEven = a => {
    if(a % 2 == 0) {
        return a + " przyszta";
    } else {
        return a + " nieparzysta";
    }
}

console.log(IsNumberEven(3));
console.log(IsNumberEven(15));
console.log(IsNumberEven(8));
console.log(IsNumberEven(18));