<?php

class EmployeeRoster {
    private $employees = [];
    private $maxSize;

    public function __construct($maxSize) {
        $this->maxSize = $maxSize;
    }

    public function addEmployee($employee) {
        if (count($this->employees) < $this->maxSize) {
            $this->employees[] = $employee;
            return true;
        }
        return false; 
    }

    
    public function deleteEmployee($name) {
        foreach ($this->employees as $key => $employee) {
            if ($employee->getName() == $name) {
                unset($this->employees[$key]);
                $this->employees = array_values($this->employees); 
                return true;
            }
        }
        return false; 
    }

    public function countEmployees() {
        return count($this->employees);
    }
    
    public function listEmployees() {
        if (empty($this->employees)) {
            echo "No employees in the roster.\n";
            return;
        }

        foreach ($this->employees as $index => $employee) {
            echo ($index + 1) . ". " . $employee . PHP_EOL;
        }
    }

 
    public function getEmployeeRoster() {
        return $this->employees;
    }

    public function getRosterSize() {
        return $this->maxSize;
    }
}
?>
