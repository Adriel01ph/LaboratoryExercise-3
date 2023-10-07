<?php
echo "<h1>Sample HTML Input Tags</h1>";
echo "<hr/>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $csCheckbox = isset($_POST['csCheckbox']) ? $_POST['csCheckbox'] : 'off'; 
    $comments = $_POST['comments'];

    echo "OUTPUT From: <b>TextField</b> <br />";
    echo "Hi $name! <br />";
    echo "You are $age years old <br />";
    echo "Your course is $course <br />";

    echo "<br />";

    echo "OUTPUT From: <b>Checkbox</b> <br />";
        if ($csCheckbox == 'on') {
            echo "Checkbox status: <b>on</b>";
        } else {
            echo "Checkbox status: <b>off</b>";
        }

    echo "<br />";
    echo "<br />";
    echo "<br />";

    echo "OUTPUT From: <b>Multiple CheckBoxes</b> <br />";
    echo "Your favorite computer subject/s is/are:<br />";
        if (isset($_POST['subjects'])) {
            foreach ($_POST['subjects'] as $subject) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp; $subject <br />";
            }
        }

    echo "<br />";
    echo "<br />";

    echo "OUTPUT From: <b>Radio Button</b> <br />";
        if (isset($_POST['prefer'])) {
            $prefer = $_POST['prefer'];
            echo "You selected, $prefer <br />";
        }

    echo "<br />";

    echo "OUTPUT From: <b>List Box</b> <br />";
        if (isset($_POST['job_preference'])) {
            $selectedJob = $_POST['job_preference'];
            echo "You preferred to be a $selectedJob <br />";
        }

    echo "<br />";

    echo "You preferred a thesis like: <br />";
        if (isset($_POST['ListBoxes'])) {
            $selectedTopic = $_POST['ListBoxes'];
            echo "$selectedTopic <br />";
        }

    echo "<br />";

    echo "OUTPUT From: <b>TextArea</b> <br />";
    echo "$comments";

    echo "<hr/>";

    echo "Submitted by: $name";
}
?>
