<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $sort= $_POST['sort'];
    $limit = $_POST['limit'];
   }
    function calculate_Word_Frequency($text, $sort, $limit) {
        $words = str_word_count($text, 1);
        $stopWords = ["the", "and", "in"];
        $wordCounts = array_count_values(array_diff($words, $stopWords));
        if ($sort === "asc") {
            asort($wordCounts);
        } else {
            arsort($wordCounts);
        }
        $wordCounts = array_slice($wordCounts, 0, $limit);
        return $wordCounts;
    }
        if (!empty($text)) {
            $wordFrequencies = calculate_Word_Frequency($text, $sort, $limit);
            echo "<h2>Word Frequency:</h2>";
            echo "<ul>";
            foreach ($wordFrequencies as $word => $frequency) {
                echo "<li>$word: $frequency</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Please enter some text.</p>";
        }
?>