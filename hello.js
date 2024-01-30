// var message;
// message = "Hello my name is sherjeel";
// console.log(message);

// var a = 22;
// var b = 32;

// var c;
// c=a+b;

// console.log(c);

// let userName= "Sherjeel"
// let userAge= "23"

// let theMessage = "my name is " + userName + " and I am " + userAge + " years old";
// console.log(theMessage);

// let message1 = "Hello this is message 1"
// let message2 = " Hello this is message 2"

// console.log(message1+message2)

// let userName="sherjeel"
// let age = "23"

// let text = `Hello there! My name is ${userName} and my age is ${age}`
// console.log(text);

const readlinesync = require("readline-sync");

// const userName = readlinesync.question("May I know your name ?");

// console.log(`Hello ${userName}`);
// // we can concatenate by using simple concatenation or by using the template literal//

// const userAge = readlinesync.question("May I know your age?");

// const birthYear = 2024 - (Number(userAge));
// console.log(`So your year of birth is ${birthYear}`);

// var userAge = Number(readlinesync.question("Enter your age?"));

// if(userAge >18){
//     console.log(`Your age is ${userAge} and you are above 18`);
// }
// else{
//     console.log(`Your age is ${userAge} and you are below 18`);
// }


// const num = Number(readlinesync.question("Number : "));

// var mod =  num %2;

// if(mod ==0){
//     if (num>0){
//     console.log(`Your number is ${num} and is even `);
//     }
// }
// if(num==0){
//     console.log("Your number is 0 and is neither odd or nor even");
// }
// else{
//     console.log(`Your number is ${num} and is odd`);
// }

const totalMarkScored = 100;

// (totalMarkScored<40)? console.log("You have failed"):console.log("You have passed the exam");

// const result = (totalMarkScored<40)?"You have failed": "You have passed the exam";

// console.log(result);

const result = (totalMarkScored<40)?"You need to improve":(totalMarkScored<65)?"B":(totalMarkScored<85)?"A": "Genius";

console.log(result);




