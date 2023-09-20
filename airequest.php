<?php

require __DIR__ . '/vendor/autoload.php'; // remove this line if you use a PHP Framework.

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = "sk-**********************************************"; //Replace this with you API Key
$open_ai = new OpenAi($open_ai_key);

$prompt = $_POST["prompt"];

$complete = $open_ai->completion([
    'model' => 'gpt-3.5-turbo-instruct',
    'prompt' => $prompt,
    'temperature' => 0.9,
    'max_tokens' => 4000,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
 ]);

$response = json_decode($complete, true);
$response = $response["choices"][0]["text"];

// echo $response;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>AI-Answers Output</title>
    <style>
        .break-the-text-spaces{
            white-space: break-spaces;
        }
    </style>
</head>
<body>
    <h3><b>Output for:</b> <?= $prompt; ?> </h3>
    <div class="break-the-text-spaces">
        <?= $response; ?>
    </div>
</body>
</html>