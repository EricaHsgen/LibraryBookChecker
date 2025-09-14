<?php
    function checkIfOverdue($dueDate, $returnDate){
        $dueDate = date_create($dueDate);
        $returnDate = date_create($returnDate);
        if($dueDate > $returnDate){
            $untilDue = date_diff($dueDate, $returnDate);
            // return "Returned on time. Time until due: " . date("j", $untilDue)  . " day(s).";
            return $untilDue->format("Returned on time. Time until due: %a day(s).");
        } if ($dueDate < $returnDate) {
            $overdue = date_diff($returnDate, $dueDate);
            // return "Returned late. Time overdue: " . date("j", $overdue) . " day(s).";
            return $overdue->format("Returned late. Time overdue: %a day(s).");
        } else {
            return "The due date is today.";
        }
    }
?>