<?php

print_r(zephir_parse_file("namespace m;

class y {

private x;

public function x()
{
    let a += 1 << 10;
}

} ", "1"));