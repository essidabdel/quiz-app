<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('../images/1.jpg'); 
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .page-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            width: 100%;
        }

        .quiz-title {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            padding: 10px 0;
            background-color: #007bff;
            border-radius: 5px;
            width: 80%;
            max-width: 600px;
        }

        .question-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f2f2f2;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        .question-text {
            margin-top: 0;
            color: #444;
            font-size: 1.1em;
        }

        .answer-option {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .answer-option input[type="radio"] {
            margin-right: 10px;
        }

        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 80%;
            max-width: 600px;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<h1>Quiz {{ $category }}</h1>
<div class="page-container">
    <div class="quiz-title">Quiz Question</div>
    @foreach($questions as $question)
        <div class="question-box">
            <h3 class="question-text">{{ $question['question'] }}</h3>
            <form id="quiz-form">
                <input type="hidden" name="question-{{ $loop->index }}" id="question-{{ $loop->index }}"> 
                @foreach($question['answers'] as $key => $answer)
                    @if($answer)
                        <div class="answer-option">
                            <input type="radio" name="answer-{{ $loop->index }}"
                                   value="{{ $key }}"
                                   onclick="saveAnswer({{ $loop->index }}, this.value)"
                                   @if($question['correct_answers'][$key.'_correct'] === 'true')
                                       checked
                                   @endif>
                            {{ $answer }}
                        </div>
                    @endif
                @endforeach
            </form>
        </div>
    @endforeach

    <button class="submit-button" type="button" onclick="validateResult()">Valider toutes les réponses</button>
</div>

<script>
  function saveAnswer(questionIndex, answer) {
    document.getElementById('question-' + questionIndex).value = answer;
  }
  
  function validateResult() {
    const answers = [];
    
    const questionInputs = document.querySelectorAll('input[name^="question-"]');

    questionInputs.forEach(input => {
      answers.push(input.value); 
    });

    calculateScore(answers);
  }

  function calculateScore(answers) {
    // Calculer le score à partir des réponses sauvegardées
    
    let score = 0;
    // Logique pour calculer le score
    
    alert("Votre score est de " + score);
  }
</script>

</body>
</html>
