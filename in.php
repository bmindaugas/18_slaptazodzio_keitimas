<?php
print_r($_REQUEST);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>slaptazodzio keitimas</title>
</head>

<body>
    <input type="password" id="newPassword" name="newPassword" title="New password" />
    <label>Įveskite naują slaptažodį</label><br><br>
    <input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" />
    <label>Pakartokite slaptažodį</label>

    <p class="form-actions">
        <input type="submit" value="Keisti slaptažodį" title="Change password" />
    </p>

</body>

</html>