
class User{
    constructor(userName, userAddress){
        this.userName = userName
        this.userAddress = userAddress
    }
     printDetails() {
        console.log(`Hi I am ${this.userName} and I live in ${this.userAddress} `)
    }
}

let p1 = new User("Sherjeel", "Srinagar")
let p2 = new User("Momin", "Chennai")

// p1.printDetails()


// Inherit
class Bike extends User{
    constructor(userAddress,userName,bikeName, bikeEngine,)
    {
        super(userAddress,userName)

        this.bikeName = bikeName
        this.bikeEngine = bikeEngine
    }

    // Method

    bikeDetails (){
        console.log(`${this.bikeName} has ${this.bikeEngine} cc Engine`)
    }
    allDetails() {
        console.log(`${this.userName} is from ${this.userAddress} and has ${this.bikeName} which has ${this.bikeEngine} CC Engine`)
    }
}

// Creating objects

let person1 = new Bike("sherjeel","Chennai","- Honda X Blade -", "450")
let person2 = new Bike("Momin", "Srinagar","- Pulsar N160 -","360")

person1.allDetails()
person2.allDetails()
