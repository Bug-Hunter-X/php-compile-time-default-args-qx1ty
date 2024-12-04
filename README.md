This repository demonstrates a common but subtle bug in PHP related to default function arguments.  The core issue lies in the fact that default arguments are evaluated only once during the compilation phase of the script, rather than each time the function is invoked. This can result in unexpected behavior if the default argument is a mutable data structure like an array or object. The `bug.php` file shows the problematic code, and the solution is presented in `bugSolution.php`, demonstrating how to avoid this problem.