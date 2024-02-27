// const colors = ['red', 'blue', 'green'];
// console.log(colors);
// const details = ['Sherjeel', 'lamp', '[11675, 9017]'];

// // length of the array
// console.log(colors.length, details.length);

// // Accessing and Modifying
// console.log(colors[1]);
// colors[1] = 'voilet';
// console.log(colors);
// console.log(details[2][1]);

// // index of items in array
// console.log(details.indexOf('lamp'));
// console.log(details.indexOf('Lamp'));

// // add items to array
// colors.push('brown');
// console.log(colors);

// // remove items from array
// colors.pop();//remove last element
// console.log(colors);

// // remove items with index
// const cities = ["Manchester", "Liverpool", "Edinburgh", "Carlisle"];
// let index = cities.indexOf('Edinburgh');
// cities.splice(index, 1);//(index of the element, number of elements)
// index = cities.indexOf('Manchester');
// cities.splice(index, 2)
// console.log(cities);

// // Accessing every item using"for-of"
// for (const color of colors) {
//     console.log(color);
// }

// // map()
// const double = number => number * 2;
// const nums = [2, 4, 6, 8];
// const doubled = nums.map(double);
// console.log(doubled);

// // filter()
// const highest = (number => number > 5);
// const high = nums.filter(highest);
// console.log(high);

// // Conversion between string and array
// const data = "Manchester,London,Liverpool,Birmingham,Leeds,Carlisle";
// const city = data.split(',');//Converts the string into array
// console.log(city);
// console.log(city.toString());//Converts the array into string

// // for-each method
// colors.forEach((item, index) => { console.log(`${index}:${item}`) });

// // join: joins all elements of the array to string
// const color_string = colors.join(',');
// console.log(color_string);

// // splice is used to remove and also replace simultaneously
// console.log(doubled);
// doubled.splice(1, 2, 3, 4, 5, 6);
// console.log(doubled);

// // reverse: reverse the array
// console.log(doubled.reverse());


// // flat: concatenates the sub-array elements into the array itself
// const two_dimensional = [1, 2, 3, [4, 5, 6]];
// const one_dimensional = two_dimensional.flat();
// console.log(one_dimensional);


// // array splice
// let arr = [2,3,4,5,6,7,8,9]

// arr.splice(4,1,"hello")
// console.log(arr);


// // Array slice
// let a = arr.slice(2,4);
// console.log(a);

// Array map

// let arr1 = [1,2,3,4,5,6]

// function triple(num){
//     return num*num*num
// }

// let arr2 = arr1.map(triple);
// console.log(arr2);

// let arr2 = arr1.map(function(number){
//     return number * number * number
// })
// console.log(arr2);

// let arr2 = arr1.map((number)=>{
//     return number * number * number
// })
// console.log(arr2);

//Array filter

// let arr = [1,2,3,4,5]

// function findNum(num){
//     if(num>2){
//         return num
//     }
// }

// let x = arr.filter(findNum);
// console.log(x)

// let arr = [1,2,3,4,5]


// let x = arr.filter((num)=>{
//     return num>2
// })

// console.log(x)

// let arr = [1,2,3,4,5]

// let sum = arr.reduce((i,j)=>{
//     return i*j
// }) 
// console.log(sum);

// arr = [1,2,3,4,5]

// let rev = arr.reverse();

// console.log(rev);

// str = "hello"

// let y = str.split('').reverse().join('');
// console.log(y)




