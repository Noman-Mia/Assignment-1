<?php
// Function to calculate result
function calculateResult($mark1, $mark2, $mark3, $mark4, $mark5) {
    // Validate each subject's mark
    if (($mark1 < 0 || $mark1 > 100) || ($mark2 < 0 || $mark2 > 100) || 
        ($mark3 < 0 || $mark3 > 100) || ($mark4 < 0 || $mark4 > 100) || 
        ($mark5 < 0 || $mark5 > 100)) {
        echo "Mark range is invalid.";
        return;
    }

    // Check for failure
    if ($mark1 < 33 || $mark2 < 33 || $mark3 < 33 || $mark4 < 33 || $mark5 < 33) {
        echo "You are failed";
        return;
    }

    // Calculate total and average marks
    $totalMarks = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;
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


$mark1 = 32;
$mark2 = 45;
$mark3 = 76;
$mark4 = 89;
$mark5 = 67;

calculateResult($mark1, $mark2, $mark3, $mark4, $mark5);

