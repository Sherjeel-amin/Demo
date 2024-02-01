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

// const readlinesync = require("readline-sync");

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

// const totalMarkScored = 100;

// (totalMarkScored<40)? console.log("You have failed"):console.log("You have passed the exam");

// const result = (totalMarkScored<40)?"You have failed": "You have passed the exam";

// console.log(result);

// const result = (totalMarkScored<40)?"You need to improve":(totalMarkScored<65)?"B":(totalMarkScored<85)?"A": "Genius";

// console.log(result);

// const firstName = "Amin";
// const nickName="";

// const userName = firstName || nickName

// console.log(userName);

// let a = 12;
// let b = "";

// console.log(a+(b||8));

// const firstName = "Amin";
// const nickName="Sherjeel";

// const userName = firstName && nickName;

// console.log(userName);

// Nullish Coalesing

// let a=12;
// let b=""; 

// console.log(a+(b??3)); 
//  let i = 0;

// do{
//     console.log(i);
//     i++;
// }while(i<10)

// while(i<10){
//     console.log(i);
//     i++;
// }

// Nested for loop to print the table for first 10 Numbers

// for (let i = 1;i<=10;i++)
// {
//     for(let j=1;j<=10;j++)
//         console.log(`${i}x${j} = ` + i*j);
// }
// console.log("Execution Completed");

// try catch -- Exception handling
// const userName = "Sherjeeel"

// try{
//     console.log(anyFnc);
// }catch(error)
// {
//     console.log("An error has occured")
// }
// console.log(userName);

// Functions

// function greetMessage (){
//     console.log("Hello, I am a function named greetMessage") // Function declaration
// }

// greetMessage(); // Function Call


// function funMessage(inputName, city)
// {
//     console.log(`${inputName}, welcome!`);
//     console.log(`Thanks for joining from ${city}`);
//     console.log(typeof(city));
// }

// funMessage("Sherjeel",2);
// funMessage("jay",3);

// function twoNumberSum(num1,num2){
//     console.log(num1+num2)
// }

// twoNumberSum(5,10);


// FINDING THE SUM OF FIRST N NATURAL NUMBERS USING FUNCTIONS AND LOOPS

// function calaculateSum(min, max){
//     let sum=0;
//     for(let i=min;i<=max; i++){
//         sum=sum+i;
//     }
//     console.log(sum);
// }

// calaculateSum(1,100);

// ANONYMOUS FUNCTIONS

// let anonymousFunction = function (){
//     console.log("Hello from an anonymous funxction")
// }

// anonymousFunction();
// console.log(typeof(anonymousFunction));

// Getting value using RETURN>>
// function twoNumberSum(n1,n2){
//     return n1+n2;
// }

// console.log(twoNumberSum(2,56));











