<?php
require_once 'I.php';

class C implements I {
    public function f() {
        echo "Phương thức f() đã được hiện thực trong class C.\n";
    }
}
?>