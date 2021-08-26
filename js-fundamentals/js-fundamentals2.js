//Functions
function logger() {
    console.log("My name is Riya Vij");
}

logger();
logger();


//Function Declaration
function calAge1(birthyear) {
    return 2021 - birthyear;
}

const age1 = calAge1(2001);
console.log(age1);


//Function Expression
const calage2 = function (birthyear) {
    return (2021 - birthyear);
}

const age2 = calage2(2001);
console.log(age1, age2);


//Arrow Functions
const calage3 = birthyear => 2021 - birthyear;
const age3 = calage3(2001);
console.log(age3);

const yearsUntilRetirement = (birthyear, firstname) => {
    const age = 2051 - birthyear;
    const retirement = 65 - age;
    return `${firstname} retires in ${retirement} years`;
}

console.log(yearsUntilRetirement(2001, "Riya"));


//Coding Challenge 1
/*
Back to the two gymnastics teams, the Dolphins and the Koalas! There is a new gymnastics discipline, which works differently.
Each team competes 3 times, and then the average of the 3 scores is calculated (so one average score per team).
A team ONLY wins if it has at least DOUBLE the average score of the other team. Otherwise, no team wins!
1. Create an arrow function 'calcAverage' to calculate the average of 3 scores
2. Use the function to calculate the average for both teams
3. Create a function 'checkWinner' that takes the average score of each team as parameters ('avgDolhins' and 'avgKoalas'), and then logs the winner to the console, together with the victory points, according to the rule above. Example: "Koalas win (30 vs. 13)".
4. Use the 'checkWinner' function to determine the winner for both DATA 1 and DATA 2.
5. Ignore draws this time.
TEST DATA 1: Dolphins score 44, 23 and 71. Koalas score 65, 54 and 49
TEST DATA 2: Dolphins score 85, 54 and 41. Koalas score 23, 34 and 27
HINT: To calculate average of 3 values, add them all together and divide by 3
HINT: To check if number A is at least double number B, check for A >= 2 * B. Apply this to the team's average scores 
*/

const calcAverage = (a, b, c) => (a + b + c) / 3;
let dolphinsScore = calcAverage(44, 23, 71);
let koalasScore = calcAverage(65, 54, 49);
console.log(dolphinsScore, koalasScore);

const checkWinner = function (avgDolhins, avgKoalas) {
    if (avgDolhins >= 2 * avgKoalas) {
        console.log(`Team Dolphins Wins! ${avgDolhins} vs ${avgKoalas}`);
    }
    else if (avgKoalas >= 2 * avgDolhins) {
        console.log(`Team Koalas Wins! ${avgKoalas} vs ${avgDolhins}`);
    }
    else {
        console.log("No one won!");
    }
}

checkWinner(dolphinsScore, koalasScore);


var user = {
    name: "Eg",
    age: 20
}

var clone = user;
clone.name = "Riya";
console.log(clone, user);


// Functions Calling Other Functions
function cutFruitPieces(fruit) {
    return fruit * 4;
}
function fruitProcessor(apples, oranges) {
    const applePieces = cutFruitPieces(apples);
    const orangePieces = cutFruitPieces(oranges);
    const juice = `Juice with ${applePieces} piece of apple and ${orangePieces} pieces of orange.`;
    return juice;
}
console.log(fruitProcessor(2, 3));


// Introduction to Arrays
const friend1 = "Riya Vij";
const friend2 = "Aditya";
const friend3 = "Raghav";
const friends = ["Riya Vij", "Aditya", "Raghav"];
console.log(friends);
console.log(friends[0]);
console.log(friends[2]);
console.log(friends.length);
console.log(friends[friends.length - 1]);
friends[2] = "Tushar";
console.log(friends);


//Basic Array Operations
const numbers = ["one", "two", "three"];

//Add elements
const newLength = numbers.push("four");
console.log(numbers);
console.log(newLength);
numbers.unshift("four");
console.log(numbers);

//Remove elements
numbers.pop();
const popped = numbers.pop();
console.log(popped);
console.log(numbers);

console.log(numbers.indexOf("two"));
console.log(numbers.includes("three"));
console.log(numbers.includes("one"));

if (numbers.includes("one")) {
    console.log("You have found the number one");
}


// Coding Challenge 2

/*
Steven is still building his tip calculator, using the same rules as before: Tip 15% of the bill if the bill value is between 50 and 300, and if the value is different, the tip is 20%.
1. Write a function 'calcTip' that takes any bill value as an input and returns the corresponding tip, calculated based on the rules above (you can check out the code from first tip calculator challenge if you need to). Use the function type you like the most. Test the function using a bill value of 100.
2. And now let's use arrays! So create an array 'bills' containing the test data below.
3. Create an array 'tips' containing the tip value for each bill, calculated from the function you created before.
4. BONUS: Create an array 'total' containing the total values, so the bill + tip.
TEST DATA: 125, 555 and 44
HINT: Remember that an array needs a value in each position, and that value can actually be the returned value of a function! So you can just call a function as array values (so don't store the tip values in separate variables first, but right in the new array) 
*/

const calcTip = function (bill) {
    return bill >= 50 && bill <= 300 ? (bill * 15) / 100 : (bill * 20 / 100);
}
const bills = [125, 555, 44];
const tips = [calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])];
const totals = [bills[0] + tips[0], bills[1] + tips[1], bills[2] + tips[2]];
console.log(bills, tips, totals);


//Objects
const jonasArray = [
    'Jonas',
    'Schmedtmann',
    2037 - 1991,
    'teacher',
    ['Michael', 'Peter', 'Steven']
];
const jonas = {
    firstName: 'Jonas',
    lastName: 'Schmedtmann',
    age: 2037 - 1991,
    job: 'teacher',
    friends: ['Michael', 'Peter', 'Steven']
};
console.log(jonasArray);
console.log(jonas);


// Object Methods
const jonas = {
    firstName: 'Jonas',
    lastName: 'Schmedtmann',
    birthYeah: 1991,
    job: 'teacher',
    friends: ['Michael', 'Peter', 'Steven'],
    hasDriversLicense: true,
    
    calcAge: function () {
      this.age = 2037 - this.birthYeah;
      return this.age;
    },
    getSummary: function () {
      return `${this.firstName} is a ${this.calcAge()}-year old ${jonas.job}, and he has ${this.hasDriversLicense ? 'a' : 'no'} driver's license.`
    }
  };
  console.log(jonas.calcAge());
  console.log(jonas.age);
  console.log(jonas.age);
  console.log(jonas.age);
  

  // Coding Challenge 3
  
  /*
  Let's go back to Mark and John comparing their BMIs! This time, let's use objects to implement the calculations! Remember: BMI = mass / height ** 2 = mass / (height * height). (mass in kg and height in meter)
  1. For each of them, create an object with properties for their full name, mass, and height (Mark Miller and John Smith)
  2. Create a 'calcBMI' method on each object to calculate the BMI (the same method on both objects). Store the BMI value to a property, and also return it from the method.
  3. Log to the console who has the higher BMI, together with the full name and the respective BMI. Example: "John Smith's BMI (28.3) is higher than Mark Miller's (23.9)!"
  TEST DATA: Marks weights 78 kg and is 1.69 m tall. John weights 92 kg and is 1.95 m tall.
  
  */
  
 
  const mark = {
    fullName: 'Mark Miller',
    mass: 78,
    height: 1.69,
    calcBMI: function () {
      this.bmi = this.mass / this.height ** 2;
      return this.bmi;
    }
  };
  const john = {
    fullName: 'John Smith',
    mass: 92,
    height: 1.95,
    calcBMI: function () {
      this.bmi = this.mass / this.height ** 2;
      return this.bmi;
    }
  };
  mark.calcBMI();
  john.calcBMI();
  console.log(mark.bmi, john.bmi);
  // "John Smith's BMI (28.3) is higher than Mark Miller's (23.9)!"
  if (mark.bmi > john.bmi) {
    console.log(`${mark.fullName}'s BMI (${mark.bmi}) is higher than ${john.fullName}'s BMI (${john.bmi})`)
  } else if (john.bmi > mark.bmi) {
    console.log(`${john.fullName}'s BMI (${john.bmi}) is higher than ${mark.fullName}'s BMI (${mark.bmi})`)
  }
  

//Iterartion of loop

  for (let rep = 1; rep <= 30; rep++) {
    console.log(`Lifting weights repetition ${rep} 🏋️‍♀️`);
  }
  
  

  // Looping Arrays, Breaking and Continuing
  const jonas = [
    'Jonas',
    'Schmedtmann',
    2037 - 1991,
    'teacher',
    ['Michael', 'Peter', 'Steven'],
    true
  ];
  const types = [];
 
  

  for (let i = 0; i < jonas.length; i++) {
    
    console.log(jonas[i], typeof jonas[i]);
    
    types.push(typeof jonas[i]);
  }
  console.log(types);
  const years = [1991, 2007, 1969, 2020];
  const ages = [];
  for (let i = 0; i < years.length; i++) {
    ages.push(2037 - years[i]);
  }
  console.log(ages);


  // continue and break
  console.log('--- ONLY STRINGS ---')
  for (let i = 0; i < jonas.length; i++) {
    if (typeof jonas[i] !== 'string') continue;
    console.log(jonas[i], typeof jonas[i]);
  }
  console.log('--- BREAK WITH NUMBER ---')
  for (let i = 0; i < jonas.length; i++) {
    if (typeof jonas[i] === 'number') break;
    console.log(jonas[i], typeof jonas[i]);
  }
 
  

  // Looping Backwards and Loops in Loops
  const jonas = [
    'Jonas',
    'Schmedtmann',
    2037 - 1991,
    'teacher',
    ['Michael', 'Peter', 'Steven'],
    true
  ];
 
  
  for (let i = jonas.length - 1; i >= 0; i--) {
    console.log(i, jonas[i]);
  }
  for (let exercise = 1; exercise < 4; exercise++) {
    console.log(`-------- Starting exercise ${exercise}`);
    for (let rep = 1; rep < 6; rep++) {
      console.log(`Exercise ${exercise}: Lifting weight repetition ${rep} 🏋️‍♀️`);
    }
  }
  
  

  // The while Loop
  for (let rep = 1; rep <= 10; rep++) {
    console.log(`Lifting weights repetition ${rep} 🏋️‍♀️`);
  }
  let rep = 1;
  while (rep <= 10) {
    
    rep++;
  }
  let dice = Math.trunc(Math.random() * 6) + 1;
  while (dice !== 6) {
    console.log(`You rolled a ${dice}`);
    dice = Math.trunc(Math.random() * 6) + 1;
    if (dice === 6) console.log('Loop is about to end...');
  }
 
  
 
  
  // Coding Challenge 4
  
  /*
  Let's improve Steven's tip calculator even more, this time using loops!
  1. Create an array 'bills' containing all 10 test bill values
  2. Create empty arrays for the tips and the totals ('tips' and 'totals')
  3. Use the 'calcTip' function we wrote before (no need to repeat) to calculate tips and total values (bill + tip) for every bill value in the bills array. Use a for loop to perform the 10 calculations!
  TEST DATA: 22, 295, 176, 440, 37, 105, 10, 1100, 86 and 52
  HINT: Call calcTip in the loop and use the push method to add values to the tips and totals arrays 
  4. BONUS: Write a function 'calcAverage' which takes an array called 'arr' as an argument. This function calculates the average of all numbers in the given array. This is a DIFFICULT challenge (we haven't done this before)! Here is how to solve it:
    4.1. First, you will need to add up all values in the array. To do the addition, start by creating a variable 'sum' that starts at 0. Then loop over the array using a for loop. In each iteration, add the current value to the 'sum' variable. This way, by the end of the loop, you have all values added together
    4.2. To calculate the average, divide the sum you calculated before by the length of the array (because that's the number of elements)
    4.3. Call the function with the 'totals' array
 
  */
  
 
  const calcTip = function (bill) {
    return bill >= 50 && bill <= 300 ? bill * 0.15 : bill * 0.2;
  }
  const bills = [22, 295, 176, 440, 37, 105, 10, 1100, 86, 52];
  const tips = [];
  const totals = [];
  for (let i = 0; i < bills.length; i++) {
    const tip = calcTip(bills[i]);
    tips.push(tip);
    totals.push(tip + bills[i]);
  }
  console.log(bills, tips, totals);
  const calcAverage = function (arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
      sum += arr[i];
    }
    return sum / arr.length;
  }
  console.log(calcAverage([2, 3, 7]));
  console.log(calcAverage(totals));
  console.log(calcAverage(tips));



/*Write a function called 'describeCountry' which takes three parameters:
'country', 'population' and 'capitalCity'. Based on this input, the
function returns a string with this format: 'Finland has 6 million people and its
capital city is Helsinki'. Call this function 3 times, with input data for 3 different countries. Store the
returned values in 3 different variables, and log them to the console*/

function describeCountry(country, population, capitalCity) {
 return `${country} has ${population} million people and
 its capital city is ${capitalCity}`;
 }
 const descPortugal = describeCountry('Portugal', 10,
 'Lisbon');
 const descGermany = describeCountry('Germany', 83,
 'Berlin');
 const descFinland = describeCountry('Finland', 6,
 'Helsinki');
 console.log(descPortugal, descGermany, descFinland);





function percentageOfWorld1(population) {
 return (population / 7900) * 100;
 }
 const percentageOfWorld2 = function (population) {
 return (population / 7900) * 100;
 };
 const percPortugal1 = percentageOfWorld1(10);
 const percChina1 = percentageOfWorld1(1441);
 const percUSA1 = percentageOfWorld1(332);
 console.log(percPortugal1, percChina1, percUSA1);



const describePopulation = function (country, population) {
 const percentage = percentageOfWorld1(population);
 const description = `${country} has ${population} million
 people, which is about ${percentage}% of the world.`;
 console.log(description);
 };
 describePopulation('Portugal', 10);
 describePopulation('China', 1441);
 describePopulation('USA', 332);



console.log(
 `${myCountry.country} has ${myCountry.population} million
 ${myCountry.language}-speaking people,
 ${myCountry.neighbours.length} neighbouring countries and
 a capital called ${myCountry.capital}.`
 );
 myCountry.population += 2;
 console.log(myCountry.population);
 myCountry['population'] -= 2;
 console.log(myCountry.population);



const myCountry = {
 country: 'Finland',
 capital: 'Helsinki',
 language: 'finnish',
 population: 6,
 neighbours: ['Norway', 'Sweden', 'Russia'],
 describe: function () {
 console.log(
 `${this.country} has ${this.population} million
 ${this.language}-speaking people,
 ${this.neighbours.length} neighbouring countries and a
 capital called ${this.capital}.`
 );
 },
 checkIsland: function () {
 this.isIsland = this.neighbours.length === 0 ? true :
 false;
 }
 };
 myCountry2.describe();
 myCountry2.checkIsland();
 console.log(myCountry2);


