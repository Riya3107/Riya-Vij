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
