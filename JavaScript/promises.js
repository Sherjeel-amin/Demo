/*let p1 = new Promise((resolve,reject)=>{
	console.log("Hello this is a promise 1")
	setTimeout(function(){
		resolve ("p1 resolved")
	},2000)
})

console.log(p1)

p1.then((value)=>{
	console.log(value)
		let p2 = new Promise((resolve,reject)=>{
		setTimeout(()=>{
			resolve("p2 resolved")
		},4000)

	})
	return p2
})
.then(function(value){
	console.log(value)
	console.log("we are done")
	
})*/

// ----------Promise all API--------------//

// let promise1 = new Promise((resolve,reject)=>{
// 	resolve("Promise one resolved")
// })
// let promise2 = new Promise((resolve,reject)=>{
// 	reject(new Error("error"))
// })
// let promise3 = new Promise((resolve,reject)=>{
// 	resolve("Promise three resolved")
// })


//----------To overcome this------------------//

// promise1.then((value)=>
// 	console.log(value)
// )
// promise2.then((value)=>
// 	console.log(value)
// )
// promise3.then((value)=>
// 	console.log(value)

// ---------We use promise all api-----------//

// let arrOfPromises = [promise1, promise2, promise3]
// let promise = Promise.all(arrOfPromises)

// promise
// 	.then(function(value){
// 		console.log(value)
// 	})


// Retuns no value if one promise is rejected-- To tackle that, we use allSettle api--

// let arrOfPromises = [promise1, promise2, promise3]
// let promise = Promise.allSettled(arrOfPromises)


// promise.then((value)=>{
// 	console.log(value)
// })

// Promise.race-- according to time


// async function HotelBooking() {

// 	let BookHotel = new Promise((resolve, reject) => {
// 		setTimeout(() => {
// 			resolve("Please proceed to payment")
// 		}, 2000)
// 	})

// 	let Payment = new Promise((resolve, reject) => {
// 		setTimeout(() => {
// 			resolve("payment done")
// 		}, 4000)
// 	})
// 	BookHotel.then((value)=>{
// 		console.log(value)

// 	})
// 	Payment.then((value)=>{
// 		console.log(value)

// 	})

// 	// console.log("Loading please wait....")
// 	// let hotelB = await BookHotel
// 	//  let hotelP = await Payment
// 	// console.log("waiting for payment")
// 	// return (hotelB,hotelP)
// }

// let a = HotelBooking()
// console.log(a)
