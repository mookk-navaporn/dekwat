

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
                            ประวัติ
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-1">
                    </div>

                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input class="form-control">
                            </div>

                             <div class="form-group">
                                <label>นามสกุล</label>
                                <input class="form-control">
                            </div>

                            <div class="form-group">
                                <label>เบอร์โทร</label>
                                <input class="form-control">
                            </div>

                            <fieldset disabled>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>ตำแหน่ง</label>
                                    <select class="form-control">
                                        <option>รายการตำแหน่งต่างๆ</option>
                                    </select>
                                </div>

                             </fieldset>   

                            <br>
                            <button type="submit" class="btn btn-primary">จัดเก็บ</button> &nbsp &nbsp
                            <button type="reset" class="btn btn-default">ยกเลิก</button>
                            <br><br><br>


                        </form>

                    </div>

                    <div class="col-lg-1">
                    </div>

                    <div class="col-lg-2">
                    <br><br>
                        <img class="img-thumbnail" src="http://placehold.it/186x186" alt="">
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
