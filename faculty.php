<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Schedule</title>
</head>
<body>
    <div class="main-container">
        <div class="sidebar">
            <nav id= "sidebar">
                <button class="button"
                onclick="button_close()">Close &times;</button>
                <ul> 
                    <li><a href="./home.php">Home</a></li> 
                    <li><a href="./schedule.php">Schedule</a></li> 
                    <li><a href="./faculty.php">Faculty Announcement</a></li> 
                </ul>
            </nav>
        </div> 

        <div class="main-body">
            <div class="nav">
            <div class="logo"> 
                <button onclick="button_open()"><i class='bx bx-menu'></i> </button>
                <img src="Logo.png" alt="">
            </div>
            <div class="right-links">
                <a href="php/logout.php"> <button class="btn"> Logout </button></a> 
            </div>
        </div>
   </div>
    </div>
    <script>
        function button_open(){
            document.getElementById("sidebar").style.display = "block";
        }
        function button_close() {
            document.getElementById("sidebar").style.display = "none";
        }
    </script>
    
</body>
</html>