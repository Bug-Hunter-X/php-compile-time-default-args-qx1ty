function my_function($arg1, $arg2 = null) {
  if (!isset($arg2)) {
    $arg2 = 'default'; // Avoid re-using the same variable, create a new one
  }
  // ... function body ...
}

//Example of how to use it properly
$my_array = array('a','b');
my_function(1,$my_array);
//The array $my_array is not modified by the function call.