function divide(number1, number2)
{
    if(number2 == 0) 
    {
        console.log("nie można dzielić przez 0");
        return "błąd";
    } 
    else
    return number1/number2;
}

console.log(divide(8,2))