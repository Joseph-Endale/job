<?php


require_once('db.php');
$query = "select * from registration ";
$result = mysqli_query($con, $query);


require_once 'db.php';
// require_once 'config/functions.php';

// $result = dispaly_data();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard </title>
</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                        <h1 class="text-white p-2">Victor</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <!-- <a href="https://github.com/tailwindadmin/admin" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a> -->


                        <!-- <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt=""> -->
                        <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Admin Page</a>
                        <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                            <ul class="list-reset">
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-ligght">
                                </li>
                                <li><a href="login_form.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                    <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                            <a href="index.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                                Dashboard
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="Index1.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fab fa-wpforms float-left mx-2"></i>
                                Job Post
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <!-- <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="tables.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    <i class="fas fa-table float-left mx-2"></i>
                            Tables
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a> -->
                        </li>
                        <!-- <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="ui.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-uikit float-left mx-2"></i>
                            Ui components
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li> -->
                        <!-- <li class="w-full h-full py-3 px-2 border-b border-300-border">
                        <a href="modals.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-square-full float-left mx-2"></i>
                            Modals
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li> -->
                        <li class="w-full h-full py-3 px-2">
                            <a href="#" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="far fa-file float-left mx-2"></i>
                                Pages
                                <span><i class="fa fa-angle-down float-right"></i></span>
                            </a>
                            <ul class="list-reset -mx-2 bg-white-medium-dark">
                                <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                    <a href="login_form.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Login Page
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                                <li class="border-t border-light-border w-full h-full px-2 py-3">
                                    <a href="register_form.phpf" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Register Page
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                                <li class="border-t border-light-border w-full h-full px-2 py-3">
                                    <a href="404.html" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        <!-- 404 Page -->
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </aside>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                    <div class="flex flex-col">




                        <!-- Stats Row Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                            <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl">
                                        5
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Total Posted Job
                                    </a>
                                </div>
                            </div>

                            <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl">
                                        20
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Total Applied Person
                                    </a>
                                </div>
                            </div>

                            <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl">
                                        3
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Total Open Job
                                    </a>
                                </div>
                            </div>

                            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl">
                                        15
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Total engaged person
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- /Stats Row Ends Here -->

                        <!-- Card Sextion Starts Here -->
                        <div class="">

                            <!-- card -->


                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <link rel="stylesheet" href="css/bootstrap.min.css">
                                <title>Avaliable Jobs</title>
                            </head>

                            <body class="bg-white">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="card mt-5">
                                                <div class="card-header">
                                                    <h2 class="display-6 text-center">Posted Job List</h2>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered text-center">
                                                        <tr class="bg-dark text-white">
                                                            <td> Job No </td>
                                                            <td> position </td>
                                                            <td> Job Type </td>
                                                            <td> Location </td>
                                                            <td> Description </td>
                                                            <td> Level </td>
                                                            <td> Salary </td>
                                                        </tr>
                                                        <tr>
                                                            <?php

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <td><?php echo $row['id']; ?></td>
                                                                <td><?php echo $row['position']; ?></td>
                                                                <td><?php echo $row['type']; ?></td>
                                                                <td><?php echo $row['location']; ?></td>
                                                                <td><?php echo $row['description']; ?></td>
                                                                <td><?php echo $row['level']; ?></td>
                                                                <td><?php echo $row['salary']; ?></td>
                                                                <!-- <td> <a class="btn btn-primary" href="user_reg.php">Apply Now</a></td>   -->
                                                                <!-- <td><a href="#" class="btn btn-danger">Delete</a></td>   -->
                                                        </tr>
                                                    <?php
                                                            }

                                                    ?>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </body>
                            <!-- /card -->

                            <!-- /card -->
                            <?php


require_once('db1.php');
$query = "select * from tb_reg ";
$result = mysqli_query($con, $query);


require_once 'db1.php';
// require_once 'config/functions.php';

// $result = dispaly_data();


?>
                           
                            <body class="bg-white">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="card mt-5">
                                                <div class="card-header">
                                                    <h2 class="display-6 text-center">Total Number of Registered Person</h2>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered text-center">
                                                        <tr class="bg-dark text-white">
                                                            <td> firstName</td>
                                                            <td> lastName </td>
                                                            <td> gender </td>
                                                            <td> email </td>
                                                            <td> password </td>
                                                            <td> number </td>
                                                            <td> title </td>
                                                            <td> image </td>
                                                        </tr>
                                                        <tr>
                                                            <?php

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <td><?php echo $row['firstName']; ?></td>
                                                                <td><?php echo $row['lastName']; ?></td>
                                                                <td><?php echo $row['gender']; ?></td>
                                                                <td><?php echo $row['email']; ?></td>
                                                                <td><?php echo $row['password']; ?></td>
                                                                <td><?php echo $row['number']; ?></td>
                                                                <td><?php echo $row['image']; ?></td>
                                                                <!-- <td> <a class="btn btn-primary" href="user_reg.php">Apply Now</a></td>   -->
                                                                <!-- <td><a href="#" class="btn btn-danger">Delete</a></td>   -->
                                                        </tr>
                                                    <?php
                                                            }

                                                    ?>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </body>

                        </div>
                        <!-- /Cards Section Ends Here -->

                        <!-- Progress Bar -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Progress Among Projects</div>
                                </div>
                                <div class="">
                                    <div class="w-full">

                                        <div class="shadow w-full bg-grey-light">
                                            <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%
                                            </div>
                                        </div>


                                        <div class="shadow w-full bg-grey-light mt-2">
                                            <div class="bg-teal-500 text-xs leading-none py-1 text-center text-white" style="width: 55%">55%
                                            </div>
                                        </div>


                                        <div class="shadow w-full bg-grey-light mt-2">
                                            <div class="bg-orange-500 text-xs leading-none py-1 text-center text-white" style="width: 65%">65%
                                            </div>
                                        </div>


                                        <div class="shadow w-full bg-grey-300 mt-2">
                                            <div class="bg-red-800 text-xs leading-none py-1 text-center text-white" style="width: 75%">75%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Profile Tabs-->
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="bg-grey-darkest text-white p-2">


            </footer>
            <!--/footer-->

        </div>

    </div>
    <script src="./main.js"></script>
</body>

</html>