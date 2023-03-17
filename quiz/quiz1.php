<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Channel</title>

<link rel="stylesheet" type="text/css"  href="quiz.css">

</head>

<body>
    <div class="home-box custom-box">
        <h2>Instructions:</h2>
        <p>Total number of questions: <span class="total-questions"> </span></p>
        <button type="button" class="btn" onclick="startQuiz()">Start Quiz</button>
    </div>

    <div class="quiz-box custom-box hide" style="margin-top:90px;">
        <div class="question-number">
            
        </div>
        <div class="question-text">
           
        </div>
        <div class="option-container">
            
        </div>
        <div class="next-question-button">
            <button type="button" class="btn" style="margin-left: 2px;" onclick="next()">Next</button>
        </div>
        <div class="answers-indicator">
            
        </div>
    </div>

    <div class="result-box custom-box hide" style="margin-top: 100px;">
    <h1>Quiz Result</h1>
    <table>
        <tr>
            <td>Total Question</td>
            <td><span class="total-question"></span></td>
        </tr>
        <tr>
            <td>Attempt</td>
            <td><span class="total-attempt"></span></td>
        </tr>
        <tr>
            <td>Correct</td>
            <td><span class="total-correct"></span></td>
        </tr>
        <tr>
            <td>Incorrect</td>
            <td><span class="total-wrong"></span></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><span class="percentage"></span></td>
        </tr>
        <tr>
            <td>Your Total Score</td>
            <td><span class="total-score"></span></td>
        </tr>
    </table>
    <button type="button" class="btn" style="margin-left: 0;" onclick="tryAgainQuiz()">Try Again</button>
    <button type="button" class="btn" onclick="goToHome()">Go To Home</button>
</div>

<script src="question1.js"></script>
<script src="app1.js"></script>

</body>
</html>