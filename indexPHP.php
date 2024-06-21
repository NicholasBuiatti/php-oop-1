<?php
class Movie
{
    public $title;
    public $gender;
    public $lenguage;
    public $description;
    public $vote;


    // FUNZIONE INTERNA ALLA CLASSE PER POTER ASSEGNARE I VALORI ALLE PROPRIETà
    public function __construct($title, $gender, $lenguage, $description, $vote)
    {
        $this->title = $title;
        $this->gender = $gender;
        $this->lenguage = $lenguage;
        $this->description = $description;
        $this->vote = $vote;
    }

    public function getNameVote()
    {
        return '$this->title $this->vote';
    }
}
// CREO LE ISTANZE
$firstMovie = new Movie('John Wick', 'action', 'en', 'Lorem ipsum dolor...', 10);
$secondMovie = new Movie('John Wick II', 'action', 'en', 'Lorem ipsum dolor...', 9);
$thirdMovie = new Movie('John Wick III', 'action', 'en', 'Lorem ipsum dolor...', 7);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Benvenuto in MovieBool</h1>

    <ul>
        <!-- STAMPO LE ISTANZE UNA ALLA VOLTA -->
        <li><?php echo "$firstMovie->title $firstMovie->gender $firstMovie->vote" ?></li>
        <li><?php echo "$secondMovie->title $firstMovie->gender $firstMovie->vote" ?></li>
        <li><?php echo "$thirdMovie->title $firstMovie->gender $firstMovie->vote" ?></li>
    </ul>
</body>

</html>