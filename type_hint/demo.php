<?php
// Bật chế độ strict mode
declare(strict_types=1);

// Nhúng các file cần thiết
require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

// Class Demo với 25 phương thức
class Demo {

    // Trường hợp X là A, Y là A
    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp X là A, Y là B
    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new A(); // Trả về A
    }

    // Trường hợp X là A, Y là C
    public function typeAReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp X là B, Y là A
    public function typeBReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp X là B, Y là B
    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp X là B, Y là C
    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp X là C, Y là A
    public function typeCReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp X là C, Y là B
    public function typeCReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp X là C, Y là C
    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp X là I, Y là A
    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new C(); // Vì C implements I
    }

    // Trường hợp X là I, Y là B
    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new C(); // Vì C implements I
    }

    // Trường hợp X là I, Y là C
    public function typeIReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C(); // Vì C implements I
    }

    // Trường hợp X là Null, Y là A
    public function typeNullReturnA(): ?A {
        echo __FUNCTION__ . "<br>";
        return null; // Null return
    }

    // Trường hợp X là Null, Y là B
    public function typeNullReturnB(): ?A {
        echo __FUNCTION__ . "<br>";
        return null; // Null return
    }

    // Trường hợp X là Null, Y là C
    public function typeNullReturnC(): ?A {
        echo __FUNCTION__ . "<br>";
        return null; // Null return
    }

    // Trường hợp X là Null, Y là I
    public function typeNullReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return null; // Null return
    }

    // Trường hợp X là A, Y là I
    public function typeAReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp X là B, Y là I
    public function typeBReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp X là C, Y là I
    public function typeCReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp X là I, Y là I
    public function typeIReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp X là Null, Y là Null
    public function typeNullReturnNull(): ?A {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

// Tạo đối tượng từ lớp Demo
$demo = new Demo();

// Gọi tất cả 25 phương thức

echo get_class($demo->typeAReturnA()) . "<br>";
echo get_class($demo->typeAReturnB()) . "<br>";
echo get_class($demo->typeAReturnC()) . "<br>";
echo get_class($demo->typeBReturnA()) . "<br>";
echo get_class($demo->typeBReturnB()) . "<br>";
echo get_class($demo->typeBReturnC()) . "<br>";
echo get_class($demo->typeCReturnA()) . "<br>";
echo get_class($demo->typeCReturnB()) . "<br>";
echo get_class($demo->typeCReturnC()) . "<br>";
echo get_class($demo->typeIReturnA()) . "<br>";
echo get_class($demo->typeIReturnB()) . "<br>";
echo get_class($demo->typeIReturnC()) . "<br>";

var_dump($demo->typeNullReturnA());
var_dump($demo->typeNullReturnB());
var_dump($demo->typeNullReturnC());
var_dump($demo->typeNullReturnI());

echo get_class($demo->typeAReturnI()) . "<br>";
echo get_class($demo->typeBReturnI()) . "<br>";
echo get_class($demo->typeCReturnI()) . "<br>";
echo get_class($demo->typeIReturnI()) . "<br>";

var_dump($demo->typeNullReturnNull());
?>
