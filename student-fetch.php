<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');

while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
  $student = new \Alura\Pdo\Domain\Model\Student(
    $studentData['id'],
    $studentData['name'],
    new \DateTimeImmutable($studentData['birth_date'])
  );

  echo $student->age() . PHP_EOL;
}