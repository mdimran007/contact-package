<!DOCTYPE html>
<html>
<body>

<h2>Contact Forms</h2>

<form action="{{url('contact')}}" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="mobile">Mobile:</label><br>
    <input type="text" id="mobile" name="mobile"><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br><br>

    <input type="submit" value="Send">
</form>


</body>
</html>

