# Repeat Counter
##### _Exercise in Behavior-Driven Development with PHP Testing, July 7, 2017_

#### By Brittany Kerr

## Description

This web application allows users to input a single word and a sentence. The program will count the number of times the single word is repeated in the inputted sentence and return that number, thus 'counting the word repeats'. The web app is a practice using Twig templates and Silex micro framework in Behavior Driven Development PHP. It was tested step by step using PHPUnit.

## Setup

* Ensure that the following programs are downloaded to your computer:
  * [MAMP](https://www.mamp.info/en/) for Windows or MacOS
  * [PHP](https://secure.php.net/)
  * [Composer](https://getcomposer.org/)
* Sign into github and copy repository: https://github.com/kerrbrittany9/repeatcounter.git
* From your local console:
  * Enter Desktop by typing "cd Desktop"
  * Type "git clone [add above URL]".
  * Type "cd repeatcounter" to enter directory.
  * Download dependencies by typing "composer install" in console.
  * To view webpage from browser type "cd web" in console and then "php -S localhost:8000" to start server.
  * In browser, type "localhost:8000" to view home page.

## Specifications
```
1. Behavior: User types a single letter into both input fields. The program compares the two and returns the number of times the letters match.   
* Input1: "a"
* Input2: "a"
* Output: 1
```
```
2. Behavior: User inputs a single letter and a string of letters. The program returns the number of times the single letter matches the letter string.
* Input1: "k"
* Input2: "k l m"
* Output: 1
```
```
3. Behavior: User inputs a word into both input fields. The program returns the number of times the word matches input field one to two.
* Input1: "think"
* Input2: "think"
* Output: 1
```
```
4. Behavior: User inputs a word and a list of words. The program returns the number of times the word is inputted.
* Input1: "red"
* Input2: "blue red pink red"
* Output: 2
```
```
5. Behavior: User inputs a word and a sentence. The program returns the number of times the word is found in the sentence regardless of case.
* Input1: "PeOple"
* Input2: "I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel"
* Output: 3
```
```
6. Behavior: User inputs a word and a sentence. The program returns the number of times the full word matches not any given part of the word.
* Input1: "Over"
* Input2: "Red rover red rover will Sally come over"
* Output: 1
```
```
7. Wishlist Behavior: User inputs a word and a list of other words separated by commas or other punctuation. Program returns the number of times the matched word appears.
* Input1: "richard"
* Input2: "ford, yates, little, pryor, richard"
* Output: 1
```
```
8. Wishlist Behavior: User inputs two words and a sentence or list. Program returns the frequency of each of the inputted words as well as the word itself.
* Input1: "plain bagel"
* Input2: "what kind of bagel can fly?"
* Output: plain => 0, bagel => 1
```

## Known Bugs

The program does not recognize punctuation in the input sentence field. Thus, "red, white and blue" would not match the input comparison word "red".

## Technologies Used

_PHP, Silex, Twig, PHPUnit_

### License

MIT License

Copyright (c) 2017 **_Brittany Kerr_**
