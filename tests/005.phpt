--TEST--
add_around simple
--FILE--
<?php 

class mytest {
	public function test () {
		return "intest";
	}
}

AOP_add_around("mytest::test", function ($pObj) {return "nocall";});
$test = new mytest();
echo $test->test();

?>
--EXPECT--
nocall
