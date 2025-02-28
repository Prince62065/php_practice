<?php
$questions = [
    "What is the capital of France?" => ["Paris", "London", "Rome", "Berlin", "Paris"],
    "Which language is used for web development?" => ["Python", "Java", "PHP", "C++", "PHP"],
    "What is 5+3?" => ["5", "8", "7", "10", "8"],
    "Which planet is known as the Red Planet?" => ["Earth", "Mars", "Jupiter", "Saturn", "Mars"]
];

$score = 0;
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;
    foreach ($questions as $question => $options) {
        $correct_answer = end($options); 
        $user_answer = $_POST[md5($question)] ?? ''; 
        
        if ($user_answer == $correct_answer) {
            $score++; 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
</head>
<body>

<h2>Simple PHP Quiz</h2>

<form method="POST">
    <?php foreach ($questions as $question => $options): ?>
        <div class="question">
            <p><strong><?php echo $question; ?></strong></p>
            <?php
            $correct_answer = end($options); 
            array_pop($options); 
            shuffle($options); 
            ?>
            <?php foreach ($options as $option): ?>
                <label>
                    <input type="radio" name="<?php echo md5($question); ?>" value="<?php echo $option; ?>" required>
                    <?php echo $option; ?>
                </label><br>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    
    <button type="submit" class="submit-btn">Submit</button>
</form>

<?php if ($submitted): ?>
    <h3>Your Score: <?php echo $score; ?> / <?php echo count($questions); ?></h3>
<?php endif; ?>

</body>
</html>
