<?php

class Student {
    public $id;
    public $name;
    public $batch;

    // Constructor
    public function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }

    // Method 
    public function result($searchId) {
        $filename = "results.txt";

        if (!file_exists($filename)) {
            echo "Result file not found.";
            return;
        }

        $file = fopen($filename, "r");
        $found = false;

        while (($line = fgets($file)) !== false) {
            $data = explode(",", trim($line));

            if ($data[0] == $searchId) {
                // Assigned data
                $this->id = $data[0];
                $this->name = $data[1];
                $this->batch = $data[2];
                $result = $data[3];

                echo "<h3>Student Result</h3>";
                echo "ID: $this->id <br>";
                echo "Name: $this->name <br>";
                echo "Batch: $this->batch <br>";
                echo "Result: $result <br>";
                $found = true;
                break;
            }
        }

        fclose($file);

        if (!$found) {
            echo "No result found for ID: $searchId";
        }
    }
}

// Get ID from form and search
if (isset($_GET['id'])) {
    $inputId = trim($_GET['id']);
    $student = new Student("", "", "");
    $student->result($inputId);
} else {
    echo "Please enter a student ID.";
}

?>
