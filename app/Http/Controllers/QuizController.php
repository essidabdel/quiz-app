<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->category;
        
        $client = new Client();
        $response = $client->request('GET', 'https://quizapi.io/api/v1/questions', [
            'query' => [
                'apiKey' => 'U0kvKx0SeWzSwyMav3tROnmpsSnBypCZFahC4suG',
                'category' => $category, 
                'limit' => 5, // nombre de questions
            ]
        ]);

        $questions = json_decode($response->getBody(), true);
        //dd($questions);


        return view('quiz', compact('questions', 'category'));
    }
    
    public function validateResult(Request $request) {
    $client = new Client();
    
    $response = $client->request('POST', 'https://quizapi.io/api/v1/results', [
        'form_params' => [
            'apiKey' => 'U0kvKx0SeWzSwyMav3tROnmpsSnBypCZFahC4suG',
            'answers' => $request->answers,
        ]
    ]);
    
    $results = json_decode($response->getBody(), true);
    
    $score = 0;
    foreach ($results['results'] as $result) {
        if ($result['correct']) {
            $score++;
        }
    }

    return redirect()->route('validate', compact('score'));
}

}

