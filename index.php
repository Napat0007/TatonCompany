<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bt/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <div class="searchbar">
            <i class="fa-solid fa-magnifying-glass fa-2xl" style="margin-top: 1.1%; margin-right: 1%;"></i>
            <input type="text" placeholder="ค้นหา...." class="searchbox">
        </div>
    </div class="navbar">
    <div class="sidebar">
        <i class="fa-solid fa-bars fa-2xl"></i>
        <form method="post" action="checkvalue.php">
            <button class="SortButton" type="submit" name="post">
                <i class="fa-solid fa-pencil fa-lg"></i>
                <p>POST</p>
            </button>

            <button class="profile-logo"style="margin-top: 700%;" type="submit" name="setting">
                <i class="fa-solid fa-gear fa-2xl" ></i>
            </button>
            <button class="profile-logo" style="margin-top: 100%;" type="submit" name="profile">
                <img src="Test-Profile.jpg" alt="Profile Loading">
            </button>
        </form>

    </div>
    <!-- Post/ข้อมูล -->
    <div class="main-container">
        <div class="card"><!-- start Card -->
            <!-- Profile and name -->
            <div class="row">
                <div class="col-sm-1">
                    <img class="profile" src="Test-Profile.jpg" alt="Profile Loading" style="margin-right: 0%;">
                </div>
                <div class="col-sm-2">
                    <p>ทนายธาตรี888</p>
                </div>
            </div>
            <!-- End Profile and name -->
            <!-- Text -->
             <p>ช่วยด้วยครับ ผมติดอยู่ในเว็บไซต์นี้</p><!-- End Text -->
        </div><!-- End Card -->
        <div class="card"><!-- start Card -->
            <!-- Profile and name -->
            <div class="row">
                <div class="col-sm-1">
                    <img class="profile" src="Test-Profile.jpg" alt="Profile Loading" style="margin-right: 0%;">
                </div>
                <div class="col-sm-2">
                    <p>ทนายธาตรี888</p>
                </div>
            </div>
            <!-- End Profile and name -->
            <!-- Text -->
             <p>ช่วยด้วยครับ ผมติดอยู่ในเว็บไซต์นี้</p>
             <!-- End Text -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Post/ข้อมูล -->
     
</body>
</html>