

let isAccepted = true

function hello(){
    console.log("I am the hello")
}

let p1 = new Promise((resolve,reject)=>{
if(isAccepted){
    console.log("I am the first promise")
}else{
     reject("Error has occured")
}

})

let p2 = new Promise((resolve,reject)=>{
    setTimeout(()=>{
        resolve("Second promise resolved")
},5000)
})

hello()
p1.then((manoj)=>{
    console.log(manoj)
}).catch((error)=>{
    console.log(error)
})

p2.then((value)=>{
    console.log(value)
})
