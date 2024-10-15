<?php

function calculateResult($bangla, $english, $math, $science, $history) {
    
    if (($bangla < 0 || $bangla > 100) || ($english < 0 || $english > 100) || 
        ($math < 0 || $math > 100) || ($science < 0 || $science > 100) || 
        ($history < 0 || $history > 100)) {
        echo "Mark range is invalid.";
        return;
    }

    
    if ($bangla < 33 || $english < 33 || $math < 33 || $science < 33 || $history < 33) {
        echo "You are failed";
        return;
    }

    $totalMarks = $bangla + $english + $math + $science + $history;
    $averageMarks = $totalMarks / 5;

    
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    
    echo "Total Marks: " . $totalMarks . "\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: " . $grade;
}

$bangla = 34;
$english = 45;
$math = 76;
$science = 89;
$history = 67;

calculateResult($bangla, $english, $math, $science, $history);

