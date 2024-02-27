let obj = {
    userName : "Sherjeel",
    language : "JavaScript",
}

let p = {
    run : ()=>{
        console.log("run")
    }
}



obj.__proto__ = p; // making p as the prototype of obj 

p.__proto__ = {
    hisName : "Sherr"  // This is the prototype of a prototype
}

console.log(obj.toString());



