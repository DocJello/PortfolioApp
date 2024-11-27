<?php
session_start();
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="style.css">  
    <title>Publication Enconder Page</title>
</head>
<body>
    <h3>Register a new published material:</h3>
    <p>
    
<form action="add-pub.php" method="POST">
    <table align = "center">
    <tr>
        <td>
            <label for="title" class="form-label">Title: </label>
        </td>
        <td>
            <input type="title" name="title" size="150" placeholder="Enter title of the paper">
        </td>
    </tr>
    <tr>
        <td>
            <label for="publisher" class="form-label">Publisher: </label>
        </td>
        <td>
            <input type="publisher" name="publisher" size="150" placeholder="Enter the publisher">
        </td>
    </tr>
    <tr>
        <td>
            <label for="venue" class="form-label">Venue: </label>
        </td>
        <td>
            <input type="text" name="venue" size="90" placeholder="Enter the venue">
        </td>
    </tr>
    <tr>
        <td>
            <label for="type" class="form-label">Type: </label>
        </td>
        <td>
            <select id="type" name="type">
                <option value="journal">Journal</option>
                <option value="conference">Conference</option>
                <option value="lab manual">Lab Manual</option>
                <option value="courseware">Courseware</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="date" class="form-label">Date: </label>
        </td>
        <td>
            <input type="datetime-local" name="date">
        </td>
    </tr>
    <tr>
        <td>
            <label for="level" class="form-label">Level: </label>
        </td>
        <td>
            <select id="level" name="level">
                <option value="International">International</option>
                <option value="National">National</option>
                <option value="Institution">Institution</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="role" class="form-label">Role: </label>
        </td>
        <td>
            <select id="role" name="role">
                <option value="Main Author">Main Author</option>
                <option value="Co-Author">Co-Author</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="link" class="form-label">Link: </label>
        </td>
        <td>
            <input type="text" name="link" size="90">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" class="btn btn-primary">
        </td>
    </tr>    
    </table>
</form>

<?php
    if(isset($_SESSION['status']))
    {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Done! </strong><?php echo $_SESSION['status']; ?>
        </div>
        <?php
        unset ($_SESSION['status']);
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>