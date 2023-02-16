<!DOCTYPE html>
<html>
<head>
    <title>CSC257 Form example</title>
</head>
<body>

<form method="post" action="handler.php">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value=""><br>
    <label for="Lname">Last name:</label><br>
    <input type="text" id="street" name="street" value=""><br>
    <label for="fname">Street Address:</label><br>
    <input type="text" id="street" name="street" value=""><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value=""><br>
    <label for="city">Choose a city:</label>
    <select id="city" name="city">
     <option value="newYork">New York</option>
     <option value="rhodeIsland">Rhode Island</option>
     <option value="california">California</option>
     <option value="florida">Florida</option>
    </select>
    <select id="destination" name="destination">
     <option value="bermuda">Bermuda</option>
     <option value="bahamas">Bahamas</option>
     <option value="hawaii">Hawaii</option>
     <option value="cozumel">Cozumel</option>
    </select>
    <input type="submit" value="Submit your entry">
</form>

</body>
</html>