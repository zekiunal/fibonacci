# Fibonacci Sequence

A simple PHP 5.5+ fibonacci static class implementation.

Fetch The Fibonacci sequence up to a specified value using a generator. But actually this is for get nTh fibonacci number. 

## Fibonacci Numbers:

By definition, the first two numbers in the Fibonacci sequence are either 1 and 1, or 0 and 1, depending on the chosen 
starting point of the sequence, and each subsequent number is the sum of the previous two.

## Installation:

```
$ cd path/to/root
$ composer install
```

## Usage:

```
$ echo Fibonacci::get(13); // return -> 233
```

## Test:

You can run the unit tests with the following command:

```
$ cd path/to/root
$ composer install
$ cd path/to/root/test
$ phpunit
```
