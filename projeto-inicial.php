<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Lucas Silveira',
    new \DateTimeImmutable('1995-04-23')
);

echo $student->age();
