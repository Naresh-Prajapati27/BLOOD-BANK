<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
{
    header('location:index.php');
}
else
{
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BBDMS | Admin Dashboard</title>

    <!-- Existing Project CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Modern Dashboard CSS -->
    <style>

        body {
            background: #f5f7fb;
        }

        .dashboard-container {
            padding: 25px 20px 40px;
        }

        .dashboard-header {
            background: #ffffff;
            border-radius: 14px;
            padding: 25px 28px;
            margin-bottom: 25px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.06);
        }

        .dashboard-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #252a34;
        }

        .dashboard-header p {
            margin: 7px 0 0;
            color: #777;
            font-size: 14px;
        }

        .stats-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -8px;
        }

        .stat-column {
            width: 25%;
            padding: 8px;
        }

        .stat-card {
            position: relative;
            min-height: 180px;
            padding: 25px;
            border-radius: 16px;
            background: #ffffff;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }

        .stat-icon {
            width: 55px;
            height: 55px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .icon-blood {
            background: #ffe5e8;
            color: #e63946;
        }

        .icon-donor {
            background: #e5f7ee;
            color: #20a464;
        }

        .icon-query {
            background: #e5f0ff;
            color: #2878e8;
        }

        .icon-request {
            background: #fff0df;
            color: #f28c28;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 800;
            color: #222;
            line-height: 1;
            margin-bottom: 9px;
        }

        .stat-title {
            color: #777;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .3px;
        }

        .stat-link {
            display: inline-block;
            margin-top: 18px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none !important;
        }

        .stat-link:hover {
            text-decoration: underline !important;
        }

        .link-red {
            color: #e63946;
        }

        .link-green {
            color: #20a464;
        }

        .link-blue {
            color: #2878e8;
        }

        .link-orange {
            color: #f28c28;
        }

        .welcome-box {
            margin-top: 22px;
            background: linear-gradient(135deg, #e63946, #b91c32);
            border-radius: 16px;
            padding: 28px;
            color: #fff;
            box-shadow: 0 6px 22px rgba(230,57,70,0.25);
        }

        .welcome-box h3 {
            margin-top: 0;
            font-size: 22px;
            font-weight: 700;
        }

        .welcome-box p {
            margin-bottom: 0;
            opacity: .9;
        }

        @media (max-width: 991px) {
            .stat-column {
                width: 50%;
            }
        }

        @media (max-width: 600px) {
            .dashboard-container {
                padding: 15px 10px;
            }

            .stat-column {
                width: 100%;
            }

            .dashboard-header h2 {
                font-size: 23px;
            }
        }

    </style>
</head>

<body>

<?php include('includes/header.php'); ?>

<div class="ts-main-content">

<?php include('includes/leftbar.php'); ?>

<div class="content-wrapper">

<div class="container-fluid dashboard-container">

    <!-- Header -->
    <div class="dashboard-header">
        <h2>
            <i class="fa fa-dashboard"></i> Dashboard
        </h2>
        <p>Welcome to Blood Bank Donor Management System</p>
    </div>

<?php

/* Total Blood Groups */
$sql ="SELECT id FROM tblbloodgroup";
$query = $dbh->prepare($sql);
$query->execute();
$bg = $query->rowCount();


/* Total Donors */
$sql1 ="SELECT id FROM tblblooddonars";
$query1 = $dbh->prepare($sql1);
$query1->execute();
$regbd = $query1->rowCount();


/* Total Queries */
$sql6 ="SELECT id FROM tblcontactusquery";
$query6 = $dbh->prepare($sql6);
$query6->execute();
$totalQueries = $query6->rowCount();


/* Total Blood Requests */
$sql7 ="SELECT ID FROM tblbloodrequirer";
$query7 = $dbh->prepare($sql7);
$query7->execute();
$totalRequests = $query7->rowCount();

?>

    <!-- Statistics -->
    <div class="stats-row">

        <!-- Blood Groups -->
        <div class="stat-column">
            <div class="stat-card">

                <div class="stat-icon icon-blood">
                    <i class="fa fa-tint"></i>
                </div>

                <div class="stat-number">
                    <?php echo htmlentities($bg); ?>
                </div>

                <div class="stat-title">
                    Listed Blood Groups
                </div>

                <a href="manage-bloodgroup.php"
                   class="stat-link link-red">
                    View Details
                    <i class="fa fa-arrow-right"></i>
                </a>

            </div>
        </div>


        <!-- Donors -->
        <div class="stat-column">
            <div class="stat-card">

                <div class="stat-icon icon-donor">
                    <i class="fa fa-users"></i>
                </div>

                <div class="stat-number">
                    <?php echo htmlentities($regbd); ?>
                </div>

                <div class="stat-title">
                    Registered Donors
                </div>

                <a href="donor-list.php"
                   class="stat-link link-green">
                    View Details
                    <i class="fa fa-arrow-right"></i>
                </a>

            </div>
        </div>


        <!-- Queries -->
        <div class="stat-column">
            <div class="stat-card">

                <div class="stat-icon icon-query">
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="stat-number">
                    <?php echo htmlentities($totalQueries); ?>
                </div>

                <div class="stat-title">
                    Total Queries
                </div>

                <a href="manage-conactusquery.php"
                   class="stat-link link-blue">
                    View Details
                    <i class="fa fa-arrow-right"></i>
                </a>

            </div>
        </div>


        <!-- Requests -->
        <div class="stat-column">
            <div class="stat-card">

                <div class="stat-icon icon-request">
                    <i class="fa fa-heartbeat"></i>
                </div>

                <div class="stat-number">
                    <?php echo htmlentities($totalRequests); ?>
                </div>

                <div class="stat-title">
                    Blood Requests
                </div>

                <a href="requests-received.php"
                   class="stat-link link-orange">
                    View Details
                    <i class="fa fa-arrow-right"></i>
                </a>

            </div>
        </div>

    </div>


    <!-- Welcome Section -->
    <div class="welcome-box">

        <h3>
            <i class="fa fa-heart"></i>
            Blood Bank Management
        </h3>

        <p>
            Manage blood donors, blood groups, queries and blood requests
            from one centralized dashboard.
        </p>

    </div>

</div>

</div>
</div>


<!-- Existing JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php } ?>