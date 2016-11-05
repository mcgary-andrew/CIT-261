<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>The McGary Family | Teaching Presenation</title>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
<main>
    <p><iframe src="http://prezi.com/embed/dc09m5yvpxhl/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;token=undefined&amp;disabled_features=undefined" 
               width="550" height="400"></iframe></p>
    <p><table class="tTP">
        <tr>
            <td>
                Controlling the background image is essential to the way the website 
                looks. Your image can repeat both horizontally and vertically. 
                This can be done by using the "background-repeat:" option in your CSS 
                code, For vertically you would use the "repeat-y" code and for horizontally 
                you would use the "repeat-x" code after the "background-repeat:". You can 
                use "no-repeat" or "repeat" if you do not want to have it repeated or if 
                you want it repeated in both directions.
            </td>
        </tr>
    </table>
    <p><table class="tTP">
        <tr>
            <td>
                Example:<bR>{<bR>
                <b>background-color: #FFFFCC;</b> <br>
                Background color if not covered by image<br>
                <b>background-image: url('alert.png');</b><br>
                Image URL<br>
                <b>background-repeat: no-repeat;</b><br>
                Means the background image is not going to repeat its self.
                }
            </td>
        </tr>
    </table>
    <p><table class="tTP">
        <tr>
            <td>
                Positioning is the fine tuning that lets you pace your background image 
                exactly where you want it to be, both horizontally and vertically, 
                within the HTML element. This property takes keyword and number values 
                such as top, center, right, 100%, -10%, 50px and -30em.
            </td>
        </tr>
    </table>
    <p><table class="tTP">
        <tr>
            <td><br>
                You can either use percentage or pixel ranges for where you want the image positioned. 
                Here is an example image of how each works.<br>
                <img src="/assessments/teachingpresentation/BackgroundPosition.PNG" style="
                                 height: 50%;
                                 width: 50%"><br>
            </td>
        </tr>
    </table><br><br>
</main>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php';?>
</html>