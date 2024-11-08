<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $volume = isset($_POST['txtvolume']) ? $_POST['txtvolume'] : 0;
    $color = isset($_POST['clrTheme']) ? $_POST['clrTheme'] : "#ffffff";
    $scale = 0.1 + ($volume * 2) / 100;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peys App</title>
    <style>
        #profileImage {
            width: 100%;
            max-width: 300px;
            height: auto;
            border: 5px solid black;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h2>Peys App</h2>

    <form id="form" method="POST" action="">
        <label for="txtVolume">Select Volume:</label>
        <input type="range" name="txtvolume" id="txtvolume" min="0" max="50" value="<?php echo isset($volume) ? $volume : 0; ?>"> <br>

        <label for="clrTheme">Select a Color: </label>
        <input type="color" name="clrTheme" id="clrTheme" value="<?php echo isset($color) ? $color : '#ffffff'; ?>"> <br>

        <button type="submit">Process</button> <br> <br> <br>

        <img src="profile.jpg" alt="Profile Image" id="profileImage" 
            style="transform: scale(<?php echo isset($scale) ? $scale : 0.6; ?>); border-color: <?php echo isset($color) ? $color : '#ffffff'; ?>;">
    </form>
</body>
</html>
