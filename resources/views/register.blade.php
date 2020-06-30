<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form method="post" action="{{ route('register') }}">
    @csrf
        <label for="first_name">First name:</label><br><br>
        <input type="text" id="first_name" name="first_name"><br><br>
        <label for="last_name">Last name:</label><br><br>
        <input type="text" id="last_name" name="last_name"><br><br>
        <label for="gender">Gender</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="american">American</option>
            <option value="singaporan">Singaporan</option>
        </select><br><br>
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="indonesia">Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="english">English<br>
        <input type="checkbox" name="language" value="other">Other<br> <br>
        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">

    </form>
    
    
</body>
</html>