# Word Frequency #
Behavior Driven Design - Intro to PHPUnit

*Code Review #2*

## Features ##
The program will allow a user to input a word and phrase and return a count of the amount of times the word repeats inside the phrase.

## Technologies ##

PHP, Silex, Twig, HTML, CSS and Bootstrap.

## Usage ##

To use the code, you can clone the repository at [https://github.com/jryanconklin/epicodus-php-cr2-word_frequency](https://github.com/jryanconklin/epicodus-php-cr2-word_frequency).

For best results, please:

- Install Composer (available at [https://getcomposer.org/](https://getcomposer.org/))
- Clone the Repository
- Install Silex and Twig via Composer
- Launch Project in Server Mode

## Specifications ##

#### Specification 1 ####
*A word that that exists once in the phrase.*

__Input__: Saturday: Saturday Looks Good To Me

__Output__: 1

#### Specification 2 ####
*A word that exists multiple times in a phrase*

__Input__: Saturday: A Saturday Looks Good To Me Next Saturday

__Output__: 2

#### Specification 3 ####
*The word has a separate case than a matching word in the phrase*

__Input__: saturday: Saturday is great!

__Output__: 1

#### Specification 4 ####
*A word that is capitalized in one instance, but not in others.*

__Input__: Saturday: Would you like to hangout saturday the 11th? Saturday looks good to me!

__Output__: 2

#### Specification 5 ####
*A word in all caps will be returned*

__Input__: Saturday: The SATURDAY is the best Saturday

__Output__: 2


#### Specification 6 ####
*Words with mixed case are managed*

__Input__: SaTURDay: Saturday is this SATURDAY or is it?

__Output__: 2

#### Specification 7 ####
*It handles repeated instances of numbers as well*

__Input__: 11: Saturday at 11 Looks Good to Me. I'll be 11 years old!

__Output__: 2

#### Specification 8 ####
*It allows for multi-sentence or paragraph phrases.*

__Input__: Saturday: Saturday! Saturday! Saturday? Does this Saturday work for you? Why yes this Saturday does look good to me! I'll see you Saturday.

__Output__: 6


## Author/s
J. Ryan Conklin

##License
This work can be used under the MIT License.
Copyright (c) 2016 J. Ryan Conklin
