//Interaction: alert, prompt, confirm



//Values and Variables
let country = "India";
let continent = "Asia";
let population = 40;
console.log(country);
console.log(continent);
console.log(population);


//Data Types
let isIsland = false;
let language;
console.log(typeof(isIsland));
console.log(typeof(population));
console.log(typeof(country));
console.log(typeof(language));


//Basic Operators
language = "English";
console.log(population/2);
population ++;
console.log(population);
console.log(population>6);
console.log(population<33);
let description = country + " is in " + continent + ", and its " + population + " million people speak " + language;
console.log(description);


//Coding Challenge 1
/*
Mark and John are trying to compare their BMI (Body Mass Index), which is calculated using the formula: BMI = mass / height ** 2 = mass / (height * height). (mass in kg and height in meter).
1. Store Mark's and John's mass and height in variables
2. Calculate both their BMIs using the formula (you can even implement both versions)
3. Create a boolean variable 'markHigherBMI' containing information about whether Mark has a higher BMI than John.
TEST DATA 1: Marks weights 78 kg and is 1.69 m tall. John weights 92 kg and is 1.95 m tall.
TEST DATA 2: Marks weights 95 kg and is 1.88 m tall. John weights 85 kg and is 1.76 m tall.
*/
const markMass = 78;
const johnMass = 92;
const markHeight = 1.69;
const johnHeight = 1.95;

const markBMI = markMass / markHeight**2;
const johnBMI = johnMass / johnHeight**2;

let markHigherBMI = markBMI > johnBMI;
console.log(markBMI, johnBMI, markHigherBMI);


//Strings and Template Literals
description = ` ${country} is in  ${continent}, and its ${population} million people speak ${language}`;
console.log(description);


//If-else statements
if (population > 33){
    console.log(`The population of ${country} is above average`);
}
else{
    console.log(`The population of ${country} is ${33 - population} million bellow average`);
}


//Type conversion and coercion
console.log('9' - '5'); 
console.log('19' - '13' + '17'); 
console.log('19' - '13' + 17); 
console.log('123' < 57);  
console.log(5 + 6 + '4' + 9 - 4 - 2); 
const inputYear = '1991';
console.log(Number(inputYear), inputYear);
console.log(Number(inputYear) + 18);
console.log(Number('Jonas'));
console.log(typeof NaN);



//Coding Challenge 2
const markMass1 = 95;
const johnMass1 = 85;
const markHeight1 = 1.88;
const johnHeight1 = 1.76;

const markBMI1 = markMass1 / markHeight1**2;
const johnBMI1 = johnMass1 / johnHeight1**2;
console.log(markBMI1, johnBMI1);
if (markBMI1 > johnBMI1){
    console.log(`Mark's BMI (${markBMI1}) is higher than John's BMI (${johnBMI1})`);
}
else{
    console.log(`John's BMI (${johnBMI1}) is higher than Mark's BMI (${markBMI1})`);
}

//logical operator
// Logical AND Operator
console.log(true && true);
console.log(true && false);
console.log(false && true);
console.log(false && false);

//Logical OR operator
console.log(true || true);
console.log(true || false);
console.log(false || true);
console.log(false || false);

//Logical NOT Operator 
console.log(!false);
console.log(!true);


//switch statement
const day = 'friday';
switch (day) {
  case 'monday': 
    console.log('Plan course structure');
    console.log('Go to coding meetup');
    break;
  case 'tuesday':
    console.log('Prepare theory videos');
    break;
  case 'wednesday':
  case 'thursday':
    console.log('Write code examples');
    break;
  case 'friday':
    console.log('Record videos');
    break;
  case 'saturday':
  case 'sunday':
    console.log('Enjoy the weekend!');
    break;
  default:
    console.log('Not a valid day!');
}


//Coding Challenge 3
/*
There are two gymnastics teams, Dolphins and Koalas. They compete against each other 3 times. The winner with the highest average score wins the a trophy!
1. Calculate the average score for each team, using the test data below
2. Compare the team's average scores to determine the winner of the competition, and print it to the console. Don't forget that there can be a draw, so test for that as well (draw means they have the same average score).
3. BONUS 1: Include a requirement for a minimum score of 100. With this rule, a team only wins if it has a higher score than the other team, and the same time a score of at least 100 points. HINT: Use a logical operator to test for minimum score, as well as multiple else-if blocks 😉
4. BONUS 2: Minimum score also applies to a draw! So a draw only happens when both teams have the same score and both have a score greater or equal 100 points. Otherwise, no team wins the trophy.
TEST DATA: Dolphins score 96, 108 and 89. Koalas score 88, 91 and 110
TEST DATA BONUS 1: Dolphins score 97, 112 and 101. Koalas score 109, 95 and 123
TEST DATA BONUS 2: Dolphins score 97, 112 and 101. Koalas score 109, 95 and 106
*/

const dolphinScore = (96+108+89)/3;
const koalasScore = (88+91+110)/3;
console.log(dolphinScore, koalasScore);
if (dolphinScore>koalasScore){
    console.log("Dolphins Won!");
}
else if(dolphinScore<koalasScore){
    console.log("Koalas Won!");
}
else if(dolphinScore===koalasScore){
    console.log("Its a Tie!");
}


//The conditional (Ternary) Operator
const age = 20;
age >= 18 ? console.log("You are allowed to drink!") : console.log("You are not allowed to drink!");
console.log(`I like to drink ${age >= 18 ? 'wine ' : 'water '}`);


//Coding Challenge 4
/*
Steven wants to build a very simple tip calculator for whenever he goes eating in a resturant. In his country, it's usual to tip 15% if the bill value is between 50 and 300. If the value is different, the tip is 20%.
1. Your task is to caluclate the tip, depending on the bill value. Create a variable called 'tip' for this. It's not allowed to use an if/else statement  (If it's easier for you, you can start with an if/else statement, and then try to convert it to a ternary operator!)
2. Print a string to the console containing the bill value, the tip, and the final value (bill + tip). Example: 'The bill was 275, the tip was 41.25, and the total value 316.25'
TEST DATA: Test for bill values 275, 40 and 430
HINT: To calculate 20% of a value, simply multiply it by 20/100 = 0.2
HINT: Value X is between 50 and 300, if it's >= 50 && <= 300 
*/

const bill = 275;
const tip = bill>=50 && bill<=300 ? (bill*15)/100 : (bill*20)/100;
console.log(`The bill is ${bill}, the tip is ${tip}, and the total value of the bill is ${bill+tip}`);




