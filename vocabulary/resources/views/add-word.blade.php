<html>
<head>
    <title>Add Word</title>
</head>
<body>
    <form action="/api/add-word" method="POST">
        @csrf
        <label for="french">French Word:</label><br>
        <input type="text" id="french" name="french"><br>
        <label for="turkish">Turkish Meanings (comma separated):</label><br>
        <input type="text" id="turkish" name="turkish"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
