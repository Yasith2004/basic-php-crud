function readVal(id) {
    let val = document.getElementById(id).value;
    return parseInt(val, 10);
}

function add() {
    let num1 = readVal("txt1");
    let num2 = readVal("txt2");

    let out = num1+num2;

    document.getElementById("ans").innerHTML = out;
}

function sub() {
    let num1 = readVal("txt1");
    let num2 = readVal("txt2");

    let out = num1-num2;

    document.getElementById("ans").innerHTML = out;
}

function div() {
    let num1 = readVal("txt1");
    let num2 = readVal("txt2");

    let out = parseFloat(num1/num2);

    document.getElementById("ans").innerHTML = out;
}

function mul() {
    let num1 = readVal("txt1");
    let num2 = readVal("txt2");

    let out = parseFloat(num1*num2);

    document.getElementById("ans").innerHTML = out;
}