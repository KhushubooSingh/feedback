<?php
// Include the database connection file
include 'db_connection.php';

// Fetch all feedback from the database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITK Vlab- Feedback Records</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>

        body {
            background-color: #757a79;
        }

        .table-wrapper {
            margin: 0 auto; /* Center the table horizontally */
            max-width: 100%; /* Limit the maximum width of the table */
        }
        .table td, .table th {
            font-size: 0.7rem; /* Adjust font size as needed */
            font-weight: 700;
        }
        .table tbody tr:nth-child(even) {
            background-color: #e8ecd6; /* Light gray for even rows */
        }
        .table tbody tr:nth-child(odd) {
            background-color: #ffffff; /* White for odd rows */
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5">
        <h3 class="text-center" style="color: white;">Feedback Records</h3>
        <div class="table-wrapper mt-4">
            <?php if ($result->num_rows > 0): ?>
                <table class="table table-bordered">
                    <thead class="thead" style="background-color: #aeccc6; color: #142d4c;">
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Institute</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Feel</th>
                            <th>Manual Helpful</th>
                            <th>Results</th>
                            <th>Simulation</th>
                            <th>Procedure</th>
                            <th>Content</th>
                            <th>Accuracy</th>
                            <th>Ease</th>
                            <th>Experiment Relevant</th>
                            <th>Quiz</th>
                            <th>Challenges</th>
                            <th>Observations</th>
                            <th>Suggestions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['date']); ?></td>
                                <td><?php echo htmlspecialchars($row['institute_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['faculty_student']); ?></td>
                                <td><?php echo htmlspecialchars($row['feel_of_simulated_labs']); ?></td>
                                <td><?php echo htmlspecialchars($row['manual_provided']); ?></td>
                                <td><?php echo htmlspecialchars($row['results_after_every_experiment']); ?></td>
                                <td><?php echo htmlspecialchars($row['simulation_meets']); ?></td>
                                <td><?php echo htmlspecialchars($row['procedure_understandable']); ?></td>
                                <td><?php echo htmlspecialchars($row['content']); ?></td>
                                <td><?php echo htmlspecialchars($row['accuracy']); ?></td>
                                <td><?php echo htmlspecialchars($row['ease_of_performing_experiments']); ?></td>
                                <td><?php echo htmlspecialchars($row['experiment_was_relevant']); ?></td>
                                <td><?php echo htmlspecialchars($row['Quiz']); ?></td>
                                <td><?php echo htmlspecialchars($row['Challenges']); ?></td>
                                <td><?php echo htmlspecialchars($row['Observations']); ?></td>
                                <td><?php echo htmlspecialchars($row['potential_enhancements']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center" style="background-color: #385170; color: white">No feedback found.</div>
            <?php endif; ?>
        </div>
        
        <!-- Back Button -->
        <div class="text-center mt-4">
            <a href="../index.php" class="btn" style="background-color: #385170; color: white">Back</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
