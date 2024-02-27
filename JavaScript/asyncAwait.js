async function weather(){
    let sWeather = new Promise(function(resolve,reject){
        setTimeout(function(){
            resolve("S is 20 degree")
        },2000)
    })
    let jWeather = new Promise((resolve,reject)=>{
        setTimeout(()=>{
            resolve("J is 27 deg")
        },5000)
    })
    console.log("hii")
    let SriW = await sWeather
    console.log(SriW);

    console.log("byee")
    let JamW = await jWeather
    console.log(JamW);

    return [SriW,JamW]

}







