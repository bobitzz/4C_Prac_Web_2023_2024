let global = "global";
function testFunction() {
    let local = "local";
    console.log(global);
    console.log(local);
}

testFunction();
console.log(local) //zmienna local dostępna jest tylko w funkcji
console.log(global);