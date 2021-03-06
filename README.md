AOP for PHP
=======================

PHP Requirements
----------------

 * PHP 5.3 - not sure exact version
 * or PHP 5.4

Why use AOP
======================

AOP is an extension for AOP in PHP

How it works
============

 * AOP_add_around("function",callback);
 * AOP_add_around("class::method",callback);

The callback receive a object parameter which have 3 methods

 * getFunctionName() : return the name of the function/method call (class::method, function)
 * getArgs() : return an array of the parameter passed to the called function/method
 * getThis() : return the current object of the method which has been caught
 * process() : execute the catch method and return is result
 * processWithArgs(array $pArgs) : execute the catch method replacing original args by the $pArgs and return is result

The callback return is the return you will give to the result of the catched function/method

 * AOP_add_before("function",callback);
 * AOP_add_before("class::method",callback);

The callback receive a object parameter which have 2 methods

 * getFunctionName() : return the name of the function/method call (class::method, function)
 * getArgs() : return an array of the parameter passed to the called function/method
 * getThis() : return the current object of the method which has been caught

The catch selector syntax

 * "A::test" catch the test method for class A and all is childs
 * "A::*" catch all the method for class A and all is childs
 * "A::admin*" catch all the method for class A and all is childs which start with admin
 * "test*" catch all function which start with test

Still in Work
============

 * AOP_add_after
 * AOP_add_catch
 * autostart parameter in .ini

