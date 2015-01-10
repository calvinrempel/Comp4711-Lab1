<?php
/**
 * A Student represents a school student who has 0 or more email addresses and
 * 0 or more grades.
 * 
 * The average grade can be calcuated and the Student information can be
 * displayed.
 *
 * @author Calvin
 */
class Student {
    
    /**
     * Crreates a new instance of Student with  no name and no emails or grades.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add an email account to the student.
     * 
     * @param string $which a label for the emaile address (eg. "Home" or "Work")
     * @param string $address the email address to add
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Add a grade as a percent to the Students record.
     * 
     * @param number $grade the students' grade out of 100.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculate the Students' average grade.
     * 
     * @return number the students' average grade.
     */
    function average() {
        $total = 0;
        
        foreach ($this->grades as $value) {
            $total += $value;
        }
        
        return $total / count($this->grades);
    }
    
    /**
     * Create a text representation of the Student.
     * 
     * @return string a text representation of the students' information.
     */
    function toString() {
        $result = '<span>'. $this->first_name . ' ' . $this->surname . '</span>';
        $result .= ' ('.$this->average().")\n";
        
        foreach($this->emails as $which=>$what) {
            $result .= '<span>' . $which . ':</span> '. $what. "\n";
        }
        $result .= "\n";
        
        return '<pre>'.$result.'</pre>';
    }
}
