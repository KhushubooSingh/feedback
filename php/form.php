<?php
// Include the database connection file
include 'db_connection.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $institute = mysqli_real_escape_string($conn, $_POST['institute']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $feel = mysqli_real_escape_string($conn, $_POST['feel']);
    $manualHelpful = mysqli_real_escape_string($conn, $_POST['manualHelpful']);
    $results = mysqli_real_escape_string($conn, $_POST['results']);
    $simulation = mysqli_real_escape_string($conn, $_POST['simulationExpectations']);
    $procedure = mysqli_real_escape_string($conn, $_POST['procedureClear']);
    $content = mysqli_real_escape_string($conn, $_POST['contentOrganized']);
    $accuracy = mysqli_real_escape_string($conn, $_POST['accuracyConsistent']);
    $ease = mysqli_real_escape_string($conn, $_POST['easeExperiments']);
    $experimentRelevant = mysqli_real_escape_string($conn, $_POST['experimentRelevant']);
    $quiz = mysqli_real_escape_string($conn, $_POST['quizUseful']);
    $challenges = mysqli_real_escape_string($conn, $_POST['problems']);
    $observations = mysqli_real_escape_string($conn, $_POST['interacting']);
    $suggestions = mysqli_real_escape_string($conn, $_POST['suggestions']);

    // Prepare an SQL statement for execution
    $sql = "INSERT INTO feedback (name, date, institute_name, email, faculty_student, feel_of_simulated_labs, manual_provided, results_after_every_experiment, simulation_meets, procedure_understandable, content, accuracy, ease_of_performing_experiments, experiment_was_relevant, Quiz, Challenges, Observations, potential_enhancements)
            VALUES ('$name', '$date', '$institute', '$email', '$role', '$feel', '$manualHelpful', '$results', '$simulation', '$procedure', '$content', '$accuracy', '$ease', '$experimentRelevant', '$quiz', '$challenges', '$observations', '$suggestions')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo '<div style="text-align: center; background-color: #e0ebeb; color: #155724; padding: 10px; border-radius: 5px;">Feedback submitted successfully</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px;">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }
    

    // Close the connection
    $conn->close();
}
?>
