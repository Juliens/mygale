Mygale for PHP
=======================

PHP Requirements
----------------

 * PHP 5.3 - not sure exact version
 * or PHP 5.4

Why use Mygale
======================

Mygale is an extension for AOP in PHP

How it works
============

 * mygale_add_around("function",callback);
 * mygale_add_around("class::method",callback);

The callback receive a object parameter which have 3 methods

 * getFunctionName() : return the name of the function/method call (class::method, function)
 * getArgs() : return an array of the parameter passed to the called function/method
 * process() : execute the catch method and return is result

The callback return is the return you will give to the result of the catched function/method

 * mygale_add_before("function",callback);
 * mygale_add_before("class::method",callback);

The callback receive a object parameter which have 2 methods

 * getFunctionName() : return the name of the function/method call (class::method, function)
 * getArgs() : return an array of the parameter passed to the called function/method

Still in Work
============

 * mygale_add_after
 * mygale_add_catch
 * autostart parameter in .ini
 * joker in function/method selector
 * catch parent class execution
 * overload catching test
 * add method getThis() in callback parameter
 * add method processWithArgs() in callback parameter
 * add method processWithArgsArray() in callback parameter
