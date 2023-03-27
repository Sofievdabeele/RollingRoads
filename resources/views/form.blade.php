
<body>
@include('header')
    <h1>Form</h1>

    <form action="{{route('home')}}" method="9-">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br><br>

    <input type="submit" value="Submit">
    </form>

@include('footer')    
</body>
</html>