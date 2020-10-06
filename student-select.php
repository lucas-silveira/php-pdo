<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');
$studentsDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentsList = [];

foreach ($studentsDataList as $studentData) {
  $studentsList[] = new \Alura\Pdo\Domain\Model\Student(
    $studentData['id'],
    $studentData['name'],
    new \DateTimeImmutable($studentData['birth_date'])
  );
}

print_r($studentsList);