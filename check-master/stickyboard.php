<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM form WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<style>

body {
    margin-top: 20px;
}

.card-big-shadow {
    max-width: 320px;
    position: relative;
}

.coloured-cards .card {
    margin-top: 30px;
}

.card[data-radius="none"] {
    border-radius: 0px;
}

.card {
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.card[data-background="image"] .title,
.card[data-background="image"] .stats,
.card[data-background="image"] .category,
.card[data-background="image"] .description,
.card[data-background="image"] .content,
.card[data-background="image"] .card-footer,
.card[data-background="image"] small,
.card[data-background="image"] .content a,
.card[data-background="color"] .title,
.card[data-background="color"] .stats,
.card[data-background="color"] .category,
.card[data-background="color"] .description,
.card[data-background="color"] .content,
.card[data-background="color"] .card-footer,
.card[data-background="color"] small,
.card[data-background="color"] .content a {
    color: #FFFFFF;
}

.card.card-just-text .content {
    padding: 50px 50px;
    
    text-align: center;
}

.card .content {
    padding: 2px 2px 1px 2px;
}

.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category,
.card .label {
    font-size: 14px;
    margin-bottom: 0px;
}

.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}

h4,
.h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}

h6,
.h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}

.card .description {
    font-size: 30px;
    color: #66615b;
}

.content-card {
    margin-top: 25px;
}

a:hover,
a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #b8d8d8;
}

.card[data-color="blue"] .description {
    color: #506568;
}

.card[data-color="green"] {
    background: #d5e5a3;
}

.card[data-color="green"] .description {
    color: #60773d;
}

.card[data-color="green"] .category {
    color: #92ac56;
}

.card[data-color="yellow"] {
    background: #ffe28c;
}

.card[data-color="yellow"] .description {
    color: #b25825;
}

.card[data-color="yellow"] .category {
    color: #d88715;
}

.card[data-color="brown"] {
    background: #d6c1ab;
}

.card[data-color="brown"] .description {
    color: #75442e;
}

.card[data-color="brown"] .category {
    color: #a47e65;
}

.card[data-color="purple"] {
    background: #baa9ba;
}

.card[data-color="purple"] .description {
    color: #3a283d;
}

.card[data-color="purple"] .category {
    color: #5a283d;
}

.card[data-color="orange"] {
    background: #ff8f5e;
}

.card[data-color="orange"] .description {
    color: #772510;
}

.card[data-color="orange"] .category {
    color: #e95e37;
}

.button, input[type="submit"], input[type="reset"] {
	background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;

    position: relative;
    left: 280px;
    top: 10px;
}




    

</style>
    
</head>
<body>

<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Retrieve the user's notes
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM notes WHERE email = '$email'";
    $result = $conn->query($sql);
    
    // Initialize note counter
    $noteCount = 0;

    echo '<div class="container bootstrap snippets bootdeys">';
    echo '<div class="row">';

    // Display each note on the page
    while ($row = $result->fetch_assoc()) {
        $noteCount++;
        $noteId = 'note-' . $noteCount; // Unique ID for each note
        echo '
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="blue" data-note-id="'.$noteId.'">
                        <button class="button" id="colorButton-'.$noteId.'"><img src="icons8-color-30.png" alt=""></button>
                        <div class="content">
                            <p class="description">'. $row['content'] .'</p>
                        </div>
                        '. $row['date'] .'
                    </div> <!-- end card -->
                </div>
            </div>
        ';
    }

    echo '</div>'; // Close the row div
    echo '</div>'; // Close the container div
}
?>

                         
<script>document.addEventListener("DOMContentLoaded", function() {
  var colors = ["blue", "green", "yellow", "brown", "purple", "orange"];

  var colorButtons = document.querySelectorAll(".card[data-background='color'] button.button");

  colorButtons.forEach(function(colorButton) {
    var card = colorButton.closest(".card[data-background='color']");
    var noteId = card.getAttribute("data-note-id");
    var storageKey = "selectedColor_" + noteId; // Unique storage key for each note

    var selectedColor = localStorage.getItem(storageKey);

    if (!selectedColor) {
      selectedColor = "blue";
      localStorage.setItem(storageKey, selectedColor);
    }

    card.setAttribute("data-color", selectedColor);

    colorButton.addEventListener("click", function() {
      var currentColor = card.getAttribute("data-color");
      var currentIndex = colors.indexOf(currentColor);
      var nextIndex = (currentIndex + 1) % colors.length;
      var nextColor = colors[nextIndex];
      card.setAttribute("data-color", nextColor);
      localStorage.setItem(storageKey, nextColor);
    });
  });
});
</script>
</body>
</html>