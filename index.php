<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="feedback-form">
        <h1 class="mb-4 text-center feedback-heading">Feedback Form</h1>
        <form action="php/form.php" method="POST">
            <!-- Your Name -->
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <!-- Click for Date -->
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <!-- Select Name of the Institute -->
            <div class="form-group">
                <label for="institute">Name of the Institute</label>
                <input type="text" class="form-control" id="institute" name="institute" placeholder="Enter your institute name" required>
            </div>

            <!-- Your Email Address -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Faculty or Student -->
            <div class="form-group">
                <label>Faculty or Student</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="faculty" value="Faculty" required>
                    <label class="form-check-label" for="faculty">Faculty</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="student" value="Student" required>
                    <label class="form-check-label" for="student">Student</label>
                </div>
            </div>

            <!-- Questionnaire -->
            <fieldset class="form-group">
                <legend class="fieldset-legend">Response Form:
                    <div class="response-form-heading">
                        We are eager to hear about your recent hands-on session. Please answer the questions below to help us understand what worked well and where we can improve. Your feedback is essential for our growth.
                    </div>
                </legend>

                <!-- (a) Feel of simulated labs over actual lab environment simulated -->
                <div class="form-group">
                    <label>Feel of simulated labs over actual lab environment simulated</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="feel" id="feelExcellent" value="Excellent">
                        <label class="form-check-label" for="feelExcellent">Excellent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="feel" id="feelGood" value="Good">
                        <label class="form-check-label" for="feelGood">Good</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="feel" id="feelFair" value="Fair">
                        <label class="form-check-label" for="feelFair">Fair</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="feel" id="feelPoor" value="Poor">
                        <label class="form-check-label" for="feelPoor">Poor</label>
                    </div>
                </div>

                <!-- (b) Manual provided was helpful -->
                <div class="form-group">
                    <label>Manual provided was helpful</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="manualHelpful" id="manualExcellent" value="Excellent">
                        <label class="form-check-label" for="manualExcellent">Excellent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="manualHelpful" id="manualGood" value="Good">
                        <label class="form-check-label" for="manualGood">Good</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="manualHelpful" id="manualFair" value="Fair">
                        <label class="form-check-label" for="manualFair">Fair</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="manualHelpful" id="manualPoor" value="Poor">
                        <label class="form-check-label" for="manualPoor">Poor</label>
                    </div>
                </div>

                <!-- (c) Getting results after every experiment -->
                <div class="form-group">
                    <label>Getting results after every experiment</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="results" id="resultsExcellent" value="Excellent">
                        <label class="form-check-label" for="resultsExcellent">Excellent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="results" id="resultsGood" value="Good">
                        <label class="form-check-label" for="resultsGood">Good</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="results" id="resultsFair" value="Fair">
                        <label class="form-check-label" for="resultsFair">Fair</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="results" id="resultsPoor" value="Poor">
                        <label class="form-check-label" for="resultsPoor">Poor</label>
                    </div>
                </div>

                <!-- (d) Simulation meets the expectations -->
                <div class="form-group">
                    <label>Simulation meets the expectations</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="simulationExpectations" id="simulationYes" value="Yes">
                        <label class="form-check-label" for="simulationYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="simulationExpectations" id="simulationNo" value="No">
                        <label class="form-check-label" for="simulationNo">No</label>
                    </div>
                </div>

                <!-- (e) Procedure was clear and understandable -->
                <div class="form-group">
                    <label>Procedure was clear and understandable</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="procedureClear" id="procedureYes" value="Yes">
                        <label class="form-check-label" for="procedureYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="procedureClear" id="procedureNo" value="No">
                        <label class="form-check-label" for="procedureNo">No</label>
                    </div>
                </div>

                <!-- (f) Content was well organized -->
                <div class="form-group">
                    <label>Content was well organized</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="contentOrganized" id="contentYes" value="Yes">
                        <label class="form-check-label" for="contentYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="contentOrganized" id="contentNo" value="No">
                        <label class="form-check-label" for="contentNo">No</label>
                    </div>
                </div>

                <!-- (g) Accuracy of the results was consistent -->
                <div class="form-group">
                    <label>Accuracy of the results was consistent</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="accuracyConsistent" id="accuracyYes" value="Yes">
                        <label class="form-check-label" for="accuracyYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="accuracyConsistent" id="accuracyNo" value="No">
                        <label class="form-check-label" for="accuracyNo">No</label>
                    </div>
                </div>

                <!-- (h) Ease of performing experiments via Virtual Labs over real lab -->
                <div class="form-group">
                    <label>Ease of performing experiments via Virtual Labs over real lab</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="easeExperiments" id="easeYes" value="Yes">
                        <label class="form-check-label" for="easeYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="easeExperiments" id="easeNo" value="No">
                        <label class="form-check-label" for="easeNo">No</label>
                    </div>
                </div>

                <!-- (i) Experiment was relevant to your need -->
                <div class="form-group">
                    <label>Experiment was relevant to your need</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="experimentRelevant" id="relevantYes" value="Yes">
                        <label class="form-check-label" for="relevantYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="experimentRelevant" id="relevantNo" value="No">
                        <label class="form-check-label" for="relevantNo">No</label>
                    </div>
                </div>

                <!-- (j) Quiz section was useful -->
                <div class="form-group">
                    <label>Quiz section was useful</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="quizUseful" id="quizYes" value="Yes">
                        <label class="form-check-label" for="quizYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="quizUseful" id="quizNo" value="No">
                        <label class="form-check-label" for="quizNo">No</label>
                    </div>
                </div>
            </fieldset>

            <!-- Challenges Encountered During the Experiments -->
            <div class="form-group">
                <label for="problems">Challenges Encountered During the Experiments</label>
                <textarea class="form-control" id="problems" name="problems" rows="3" placeholder="Describe any problems or difficulties" maxlength="1000" required></textarea>
            </div>

            <!-- Observations About Experiment Engagement -->
            <div class="form-group">
                <label for="interacting">Observations About Experiment Engagement</label>
                <textarea class="form-control" id="interacting" name="interacting" rows="3" placeholder="Share your experiences" maxlength="1000" required></textarea>
            </div>

            <!-- Potential Enhancements -->
            <div class="form-group">
                <label for="suggestions">Potential Enhancements</label>
                <textarea class="form-control" id="suggestions" name="suggestions" rows="3" placeholder="Your suggestions" maxlength="1000" required></textarea>
            </div>

            <button type="submit" class="btn" style="background-color: #385170; color: white">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
