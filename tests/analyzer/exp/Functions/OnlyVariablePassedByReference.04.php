<?php

$expected     = array('array_pop(array_slice([1, 2, 3], 0, 1))',
                      'pcntl_waitpid($pid, $status = 0)',
                     );

$expected_not = array('pcntl_waitpid($pid, $status)',
                      'parse_str($_SERVER[\'QUERY_STRING\'], $_GET)',
                     );

?>