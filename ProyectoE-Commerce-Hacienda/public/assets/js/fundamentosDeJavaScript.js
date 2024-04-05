//El lenguaje que utiliza JavaScript es el lenguaje de marcado HTML, que se utiliza para crear páginas web. 
//Además, también se puede utilizar con otros lenguajes de programación, como CSS y PHP, 
//para crear aplicaciones web más complejas.¡Hola! JavaScript es un lenguaje de programación que se creó en 1995 
//por Brendan Eich mientras trabajaba en Netscape Communications Corporation. Desde entonces, ha evolucionado a 
//través de varias versiones, siendo la más reciente ECMAScript 2021 (también conocida como ES12).

//El lenguaje de programación JavaScript se utiliza principalmente para crear páginas web interactivas.

//Variables en JavaScript

var variable = "Hola Mundo"; //var es una palabra reservada para declarar una variable a nivel golbal

let variable2 = "Hola Mundo"; //let es una palabra reservada para declarar una variable a nivel local

const variable3 = "Hola Mundo"; //const es una palabra reservada para declarar una variable a nivel local que no se puede modificar
                                //solo se puede modificar si se declara como un objeto o un arreglo

//Hoisiting en JavaScript

//El hoisting es un comportamiento de JavaScript que mueve las declaraciones al inicio del ámbito actual (ámbito global o ámbito de función actual).
//El hoisting se aplica a las declaraciones de variables y funciones.

//Ejemplo de hoisting en JavaScript con variables
if (true) {
    var x = 5;
    let y = 10;
}
console.log(x); // 5 esto se debe al hoisting, ya que la variable x se declara a nivel global con var
console.log(y); // ReferenceError: y is not defined esto se debe a que la variable y se declara a nivel local con let

//Ejemplo de hoisting en JavaScript con funciones
console.log(Testing()); // Muestra en la consola "Hola Mundo" esto se debe al hoisting, ya que la función se declara a nivel global

function Testing(){
    return "Hola Mundo";
}

//Reglas de nomeclatura en JavaScript

//El nombre de las varibles debe ser significativo
//El camelCase es la forma más común de escribir variables en JavaScript
//Ejemplo camelCase: miVariable, miVariable2, miVariable3

//tipo de datos en JavaScript

//String: Cadena de texto, se puede declarar con comillas dobles o comillas simples
var variable = "Hola Mundo";

//Number: Número, se puede declarar con o sin decimales
var numero = 10;

//Boolean: Verdadero o falso
var verdadero = true;

//Null: Valor nulo
var nulo = null;

//Undefined: Valor no definido
var indefinido = undefined;

//Object: Objeto, se puede declarar como un objeto o como un arreglo
var objeto = {
    nombre: "Juan",
    apellido: "Perez",
    edad: 20
};

var arreglo = ["Juan", "Perez", 20];

//Symbol: Símbolo
var simbolo = Symbol("mi simbolo");

//Operadores en JavaScript
//Suma (10 + 10), Resta (10 - 10), Multiplicación (10 * 10), División (10 / 10), Módulo (10 % 10), Incremento (10++), Decremento (10--)

//Casteo en JavaScript
//Casteo implícito: Es cuando el lenguaje de programación realiza el casteo de forma automática
//Casteo explícito: Es cuando el programador realiza el casteo de forma manual

//Casteo implícito
var numero = 10;
var numero2 = "20";
var resultado = numero + numero2; // 1020 esto se debe a que el lenguaje de programación realiza el casteo de forma automática
console.log(resultado);

//Casteo explícito
var numero = 10;
var numero2 = "20";
var resultado = numero + Number(numero2); // 30 esto se debe a que el programador realiza el casteo de forma manual
console.log(resultado);

//Estructuras de datos en JavaScript

//Colecciones con clave y valor
//Map: Es una colección de elementos que están indexados por clave, se puede iterar sobre ellos
const estructuraMap = new Map();
estructuraMap.set("nombre", "Juan");
estructuraMap.set("apellido", "Perez");
estructuraMap.set("edad", 20);

for (const [key, value] of estructuraMap) {
    console.log(`Clave: ${key}, Valor: ${value}`);
}

//Set: Es una colección de valores únicos, se puede iterar sobre ellos
const estructuraSet = new Set();

estructuraSet.add("Juan");
estructuraSet.add("Perez");
estructuraSet.add(20);

for (const value of estructuraSet) {
    console.log(`Valor: ${value}`);
}

//Arreglos
const arreglo = ["Juan", "Perez", 20];

for (const value of arreglo) {
    console.log(`Valor: ${value}`);
}

//JSON JavaScript Object Notation
//JSON es un formato de texto sencillo para el intercambio de datos. Se trata de un subconjunto de la notación literal de objetos de JavaScript,
//aunque, debido a su amplia adopción como alternativa a XML, se considera (año 2019) un formato independiente del lenguaje.

//Ejemplo de JSON
const ObjectJS = {
    nombre: "Juan",
    apellido: "Perez",
    edad: 20,
    direccion: {
        calle: "Av. Siempre Viva",
        numero: 123,
        colonia: "Centro",
        ciudad: "Ciudad de México",
        estado: "Ciudad de México"
    }
}
console.log(ObjectJS);

//Comparaciones de igualdad y desigualdad en JavaScript

//Igualdad
//Igualdad estricta: Compara el valor y el tipo de dato
//Ejemplo de igualdad estricta
console.log(10 === 10); // true
console.log(10 === "10"); // false

//Igualdad no estricta: Compara el valor sin importar el tipo de dato
//Ejemplo de igualdad no estricta
console.log(10 == 10); // true
console.log(10 == "10"); // true

//Desigualdad
//Desigualdad estricta: Compara el valor y el tipo de dato
//Ejemplo de desigualdad estricta
console.log(10 !== 10); // false
console.log(10 !== "10"); // true

//Desigualdad no estricta: Compara el valor sin importar el tipo de dato
//Ejemplo de desigualdad no estricta
console.log(10 != 10); // false
console.log(10 != "10"); // false

//Estructuras de control en JavaScript

//If
if (true) {
    console.log("Hola Mundo");
}

//If else
if (true) {
    console.log("Hola Mundo");
}
else {
    console.log("Adios Mundo");
}

//If else if
if (true) {
    console.log("Hola Mundo");
}
else if (true) {
    console.log("Hola Mundo");
}
else {
    console.log("Adios Mundo");
}

//Switch
var numero = 10;
switch (numero) {
    case 10:
        console.log("Hola Mundo");
        break;
    case 20:
        console.log("Hola Mundo");
        break;
    default:
        console.log("Adios Mundo");
        break;
}

//For
for (let index = 0; index < 10; index++) {
    console.log(index);
}

//For in
//For in se utiliza para iterar sobre las propiedades de un objeto
const arreglo = ["Juan", "Perez", 20];
for (const value in arreglo) {
    console.log(`Valor: ${arreglo[value]}`);
}

//For of
//For of se utiliza para iterar sobre los valores de un objeto o un arreglo
//Arreglo
const arreglo = ["Juan", "Perez", 20];
for (const value of arreglo) {
    console.log(`Valor: ${value}`);
}
//Objeto
const objeto = {
    nombre: "Juan",
    apellido: "Perez",
    edad: 20
};
for(const [key, value] of Object.entries(objeto)){
    console.log(`Clave: ${key}, Valor: ${value}`);
}

//While
var index = 0;
while (index < 10) {
    console.log(index);direccion
    index++;
}

//Do while
var index = 0;
do {
    console.log(index);
    index++;
}
while (index < 10);

