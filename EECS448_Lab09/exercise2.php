<?php
    $score = 0;
    $correct = 0;
    include "./main.html";
    echo "<div id=\"quizResults\"><strong><p>1. What is the derivative of 3x?</p></strong>";
    echo "<p>You answered: ".$_POST["question1"]."</p>";
    echo "<p>Correct answer: 3</p>";
    if ($_POST["question1"] == "3")
    {
        $score = $score + 20;
        $correct = $correct + 1;
    }
    echo "<strong><p>2. How many colors does it take to color a map so no two maps sharing a border share a color?</p></strong>";
    echo "<p>You answered: ".$_POST["question2"]."</p>";
    echo "<p>Correct answer: 4</p>";
    if ($_POST["question2"] == "4")
    {
        $score = $score + 20;
        $correct = $correct + 1;
    }
    echo "<strong><p>3. Who started the company Apple?</p></strong>";
    echo "<p>You answered: ".$_POST["question3"]."</p>";
    echo "<p>Correct answer: Steve Jobs</p>";
    if ($_POST["question3"] == "Jobs")
    {
        $score = $score + 20;
        $correct = $correct + 1;
    }
    echo "<strong><p>4. Whats the latest iphone released?</p></strong>";
    echo "<p>You answered: ".$_POST["question4"]."</p>";
    echo "<p>Correct answer: iPhone 13</p>";
    if ($_POST["question4"] == "13")
    {
        $score = $score + 20;
        $correct = $correct + 1;
    }
    echo "<strong><p>5. Who is the best basketball player of all time?</p></strong>";
    echo "<p>You answered: ".$_POST["question5"]."</p>";
    echo "<p>Correct answer: Michael Jordan</p>";
    if ($_POST["question5"] == "Jordan")
    {
        $score = $score + 20;
        $correct = $correct + 1;
    }
    echo "<p>--------------------------------------------------------------------------------------------------------------------->/p>";
    echo "<strong><p>Amount Correct: </strong>".$correct."</p>";
    echo "<strong><p>Score: </strong>".$score."%</p></div>";

?>