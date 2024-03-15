<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-image: url('../images/1.jpg');
        background-size: cover;
        background-color: rgba(255, 255, 255, 0.1); /* Augmentez la transparence de la couleur de fond */
    }

    .title {
    font-size: 4em;
    text-align: center;
    color: #333;
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.5); /* Ajoutez un arrière-plan semi-transparent */
    padding: 10px; /* Ajoutez un peu de padding pour donner de l'espace autour du texte */
    border-radius: 5px; /* Ajoutez des coins arrondis pour un aspect plus moderne */
}


    .card {
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .list-group-item {
        margin-bottom: 10px;
    }

    .list-group-item a {
        color: #fff;
        font-size: 1.1em;
        transition: color 0.3s ease;
    }

    .list-group-item a:hover {
        color: #ddd;
    }

    /* Ajoutez des classes spécifiques pour chaque catégorie si nécessaire */
    .linux-quizzes a {
        color: #28a745;
    }

    .devops-quizzes a {
        color: skyblue;
        font-weight: bold;
    }

    .networking-quizzes a {
        color: #ffc107;
    }

    .programming-quizzes a {
        color: #dc3545;
    }

    .cloud-quizzes a {
        color: #343a40;
    }

    .docker-quizzes a {
        color: #6c757d;
    }

    .kubernetes-quizzes a {
        color: #007bff;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="title">Welcome to Our Quiz Page</div>
                <div class="card">
                    <div class="card-header">Quiz Categories</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item linux-quizzes"><a href="{{ route('quiz', ['category' => 'Linux']) }}">Linux Quizzes</a></li>
                            <li class="list-group-item devops-quizzes"><a href="{{ route('quiz', ['category' => 'DevOps']) }}">DevOps Quizzes</a></li>
                            <li class="list-group-item networking-quizzes"><a href="{{ route('quiz', ['category' => 'Networking']) }}">Networking Quizzes</a></li>
                            <li class="list-group-item programming-quizzes"><a href="{{ route('quiz', ['category' => 'Programming']) }}">Programming Quizzes</a></li>
                            <li class="list-group-item cloud-quizzes"><a href="{{ route('quiz', ['category' => 'Cloud']) }}">Cloud Quizzes</a></li>
                            <li class="list-group-item docker-quizzes"><a href="{{ route('quiz', ['category' => 'Docker']) }}">Docker Quizzes</a></li>
                            <li class="list-group-item kubernetes-quizzes"><a href="{{ route('quiz', ['category' => 'Kubernetes']) }}">Kubernetes Quizzes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Route pour afficher les quizzes d'une catégorie
        function showQuizzes(category) {
          // Récupérer les quizzes de la catégorie depuis la BDD
          // Afficher les quizzes récupérés
        }

        // Route pour la page d'accueil
        function index() {
          // Ré