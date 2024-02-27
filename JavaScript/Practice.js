

// let isAccepted = true

// function hello(){
//     console.log("I am the hello")
// }

// let p1 = new Promise((resolve,reject)=>{
// if(isAccepted){
//     console.log("I am the first promise")
// }else{
//      reject("Error has occured")
// }

// })

// let p2 = new Promise((resolve,reject)=>{
//     setTimeout(()=>{
//         resolve("Second promise resolved")
// },5000)
// })

// hello()
// p1.then((manoj)=>{
//     console.log(manoj)
// }).catch((error)=>{
//     console.log(error)
// })

// p2.then((value)=>{
//     console.log(value)
// })
// double = (number)=>{
//     return number * 2
// }
// let x = [1,2,3,4,5]
// y = x.map(double)
// console.log(y)

// y.push(3)

// console.log(y)
// console.log(x) // Map method creates a new deep copy of an array

// let arr = [1,2,3,4,5,6]

// function array(){
//     if(arr[2]===3){
//         return arr.slice(4,6)
        
//     }else{
//         return arr
//     }
// }

// console.log(array())


// let arr = [1,2,3,44,55]
// let heighest = arr.filter(number=>number > 5)
// console.log(heighest)


// let arr = [1,2,3,4,5,6,7,8]
// let heighest = arr.filter(function(number)
// {
//     return number > 5
// })
// console.log(heighest)

// let arr = [1,2,3,4,5,6,7,8]
// heighest=number=>
//      number > 5

// let arr2 = arr.filter(heighest)
// console.log(arr2)

// const data = "Manchester,London,Liverpool,Birmingham,Leeds,Carlisle";
// const city = data.split(',');//Converts the string into array
// console.log(city);

// let arr = [1,2,3,4,5,6]
// let arr2 = Math.max(...arr);
// console.log(arr2)

// console.log(typeof(arr2))

// let arr = [1,2,3,4,5,5,5]
// const uarr = [...new Set(arr)]

// console.log(uarr)


// Removing space from a a string and converting it into an array
// let str = "Hello How are you"
// let strLen = str.length
// console.log(strLen)
// let arr = str.split("")
// console.log(arr)
// let newArr = []

// for(let i=0;i<strLen;i++){
//     if(arr[i]===" "){
//         continue
//     }else{
//         newArr.push(arr[i])
//     }

// }
// console.log(newArr)
// let newString = newArr.join("")
// console.log(newString)



// let obj1 = {
//     userName : "Sherjeel",
//     password : "Halabaloo"

// }

// let file = JSON.stringify(obj1)
// console.log(file)

// let obj2 = JSON.parse(file)
// console.log(obj2)
// const obj={
//     myname:"Manoj",
//     lname:"kumar"
// }
// const {myname:uname,lname:name1}=obj
// console.log(uname)
// console.log(name1)
// nated obj deconstruction
// let obj2 = {
// 	name: "GFG",
// 	add : {
// 		country: "India",
// 		state : {
// 			code : "JS",
// 			pincode:"820800",
// 			article:{
// 			topic : "destructuring"
// 			}
// 		}
// 	}
// }

// let {add:{state:{article:{topic:topicName}}}}= obj2


// topicName = "not destructuring"

// console.log(topicName)

// let arr = [2,3,4,5]

// let x = number=> number >2
// let doubled = arr.filter(x)
// console.log(doubled)


// let arr = [1,2,3,4,5]

// let res = arr.reduce((total,value)=>total+value)
// console.log(res)

// let x = 20
// let y = 30

// x>y?console.log(`${x} is greater`):console.log(`${y} is greater`)

// let arr = [1,2,3,4]

// for(let index of arr)
// {
// 	console.log(index)
// }

// let arr = ['h','css','name','place']
// arr.splice(2,2,'path')
// console.log(arr)


// let str = "33"
// let str2 = "33"

// let arr = [1,2,3,4,5]

// findNum(num)=>{
// 	if(num===3)
// 	{
// 		return num
// 	}
// }
// arr.indexOf(2)

// let obj1 = {
// 	userName : "Sherjeel",
// 	userAddress : "Srinagar"

// }

// let promise1 = new Promise(resolve, reject){
// 	if(true){
// 		resolve ("xyz")
// 	}
// 	else{
// 		reject(error)
// 	}
// }
// .then((value){
// 	console.log(value)
// }).catch(error){
// 	console.log("error occured")
// }
// let animal =['dog','cat','rabbit'];
 
// let [a,b,c] = [animal]

// let arr1 = [1,2,3]
// let arr2 =[]

// arr1 = [...arr2]

// Converting a string to Number //

// let strNum1 = "33"
// let strNum2 = "44"

// let num1 = +(strNum1)
// let num2 = +(strNum2)

// console.log(num1+num2)

isAccepted = false;
let p1 = new Promise((resolve,reject)=>{
    if(isAccepted){
        setTimeout(() => {
            resolve("Promise 1 resolved")
        }, 3000);
    }
    else{
        reject(new Error("Something went wrong"));
    }
})

p1.then((value)=>{
    console.log(value);
}).catch((error)=>{
    console.error("error has occured", error.message);
})

// obj1 = {
//     userName : "Sherjeel",
//     address : {
//         city : "Srinagar",
//         area : "Shalimar",
//         pin  : 190001
//     }
// }

// let {address:{city:theCity}} = obj1;

// theCity = "Shalimar";

// console.log(theCity);

// let str = "abcdefghijkln"

// console.log(str[str.length-1])

// const obj = { foo: "bar", baz: 42 };
// Iterate through the object without loop
// console.log(Object.entries(obj));
// assigns value from one object to another
// const target = { a: 1, b: 2 };
// const source = { b: 4, c: 5 };

// const returnedTarget = Object.assign(target, source);
// console.log(returnedTarget);
// console.log(target);// same as returnedTarget


// let obj = {
//     userName: "Sherjeel",
//     address: {
//         city: {
//             area: {
//                 mohalla: "barbarshah",
//                 supply: "maam"
//             }
//         }
//     }
//  };
//  const { userName, address: { city: { area: { mohalla:userAddress } } } } = obj;
//  console.log(userAddress); 

