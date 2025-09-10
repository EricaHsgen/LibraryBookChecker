<?php
    function checkIfOverdue($dueDate, $returnDate){
        $dueDate = strtotime($dueDate);
        $returnDate = strtotime($returnDate);
        if($dueDate > $returnDate){
            $untilDue = $dueDate - $returnDate;
            return "Returned on time. Time until due: " . date("d", $untilDue);
        } if ($dueDate < $returnDate) {
            $overdue = $returnDate - $dueDate;
            return "Returned late. Time overdue: $overdue";
        } else {
            return "The due date is today.";
        }
    }
?>