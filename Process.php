<?php

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_text = $_POST['text'];
    $pattern= $_POST['sort'];
    $limit = $_POST['limit'];
   }

    function calculate_Word_Frequency($input_text, $pattern, $limit) {
        $words = str_word_count($input_text, 1);
        $stopWords = ["the", "and", "in"];
        $wordCounts = array_count_values(array_diff($words, $stopWords));
        if ($pattern === "asc") 
        {
            asort($wordCounts);
        } 
        else 
        {
            arsort($wordCounts);
        }
        
        $wordCounts = array_slice($wordCounts, 0, $limit);
        return $wordCounts;
    }

    if (!empty($input_text)) 
    {
        $i = 0;
        $wordFrequencies = calculate_Word_Frequency($input_text, $pattern, $limit);
        echo "<h2>Word Frequency:</h2>";
        echo "<ul>";

        foreach ($wordFrequencies as $word => $frequency) {
            echo "<li>$word: $frequency</li>";
        }

        echo "</ul>";
    } 
    
    else {
        echo "<p>Please enter some text.</p>";
    }
?>