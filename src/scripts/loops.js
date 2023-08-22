function showFor() {
    const cars = ["Toyota","Nissan","Audi","BMW","Ford"];
    document.write("Car Manufactureres: <br>")

    for (let i = 0; i < cars.length; i++ ) {
        document.write(cars[i]+"<br/>");
    }
}

function showWhile() {
    const fruits = ["Apple","Orange","Pineapple","Mango","Papaya"];
    document.write("Fruits: <br>")

    let i = 0;
    while ( i < fruits.length) {
        document.write(fruits[i]+"<br/>");
        i++;
    }
}
