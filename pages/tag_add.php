<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>วัดพระธรรมจักร</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">วัดพระธรรมจักร</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admin_profile.php"><i class="fa fa-user fa-fw"></i> ประวัติ</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-sitemap fa-fw"></i> หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="admin_list.php"><i class="fa fa-list-alt fa-fw"></i> ข้อมูลเจ้าหน้าที่</a>
                    </li>
                        
                    <li>
                        <a href="user_list.php"><i class="fa fa-user fa-fw"></i> ผู้เข้าร่วมกิจกรรม</a>
                    </li>
                    <li>
                        <a href="news_list.php" ><i class="fa fa-bullhorn fa-fw"></i> ข่าว</a>
                    </li>
                    <li>
                        <a href="activity_list.php"><i class="fa fa-calendar fa-fw"></i> กิจกรรม</a>
                    </li>
                    <li>
                        <a href="audio_list.php"><i class="fa fa-music fa-fw"></i> เสียงธรรม</a>
                    </li>
                    <li>
                        <a href="tag_list.php"><i class="fa fa-tags fa-fw"></i> แท็ก</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            เพิ่มแท็ก
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-sitemap fa-fw"></i><a href="index.php"> หน้าหลัก</a>
                            </li>
                            <li>
                                <i class="fa fa-tags fa-fw"></i><a href="tag_list.php"> แท็ก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit fa-fw"></i> เพิ่มแท็ก
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                
                    <div class="col-lg-2">
                    </div>

                    <div class="col-lg-6">

                        <form role="form">
                            <div class="form-group">
                                <label>แท็กหลัก</label>
                                <input class="form-control">
                            </div>

                            <div class="form-group">
                                <label>แท็กย่อย</label>
                                <input class="form-control">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">จัดเก็บ</button> &nbsp &nbsp
                            <button type="button" class="btn btn-default">ยกเลิก</button>
                            <br><br><br>


                        </form>

                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
