<!DOCTYPE HTML>
    <head>
        <title>Prison to Prison Triathlon | Registration Page</title>
        <meta charset="utf-8">
    </head>
<body>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/header.php'; ?>
    <script>
        function age(){
            var age = document.getElementById('age').value;
            if (age < 18){
                greeting = "Sorry, you are not old enough to participate.";
            } else{
                greeting = "Your information has been submitted.";
            }
            document.getElementById('output').innerHTML = greeting;
        }
    
    </script>
<main>
    <table id="t02" style="width:50%">
        <tr>
            <td colspan="2" style="text-align: center">
                <h2>Registration</h2>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Registration Info:</h3>
                <ul>
                    <li>Cost: $100</li>
                    <li>Deadline: 1/11/2015</li>
                    <li>Age: 18 and Over</li>
                    <li>Register at your own risk!</li>
                    <li>FYI: This is not a real triathlon!</li>
                </ul>
            </td>
            <td>
                <h3>Please provide the requested information:</h3>
                <form id="reg" action="/triathlon/assessments/registered.html" method="get">
                    First Name: <input type="text" id="fname"><br>
                    Last Name: <input type="text" id="lname"><br>
                    Age: <input type="text" id="age"><br>
                    Telephone Number <input type="text" id="number"><br>
                    Email Address: <input type="text" id="email">
                </form>
                <button type="button" onclick="age()">Submit</button>
                <div id="output"></div>
            </td>
        </tr>
    </table>
</main>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/footer.php'; ?>
</body>
</html>