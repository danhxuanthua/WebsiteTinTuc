<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- title -->
    <?php require '../site/widget/title.php'; ?>

    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/shop-homepage.css" rel="stylesheet">
    <link href="../public/css/my.css" rel="stylesheet">
    <link href="../public/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<?php require "../site/widget/navbar.php"; ?>    
<!-- end Navigation -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <?php require "../site/action/ac_HienthiChiTietTin.php"; ?>
                <!-- Blog Post
                
                Title
                <h1>Blog Post Title</h1>
                
                Author
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>
                
                Preview Image
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                
                Date/Time
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>
                
                Post Content
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                
                <hr>
                 -->
                <!-- Blog Comments -->

                <!-- Comments Form -->
    <?php require '../site/action/ac_vietComment.php';?>
                <!-- <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form" method="POST" action="../site/action/ac_vietComment.php" >
                        <input type="hidden" name="idTinTuc" value="<?php echo $_GET['idTinTucCMT'];?>" />
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="noidung"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="gui">Gửi</button>
                    </form>
                </div> -->

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
    <?php require "../site/action/ac_hienThiComment.php"; ?>
                <!-- <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                
                Comment
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div> -->

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">
<!--BAT DAU TIN LIEN QUAN-->
                <?php require "../site/action/ac_chiTietTin.php"; ?>
                <!-- <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                
                        item
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        end item
                
                        item
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        end item
                
                        item
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        end item
                
                        item
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        end item
                    </div>
                </div> -->
<!--KET THUC TIN LIEN QUAN-->

<!--BAT DAU TIN NỔI BẬT-->

<!--                 <div class="panel panel-default">
    <div class="panel-heading"><b>Tin nổi bật</b></div>
    <div class="panel-body">

        item
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-5">
                <a href="detail.html">
                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <a href="#"><b>Project Five</b></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="break"></div>
        </div>
        end item

        item
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-5">
                <a href="detail.html">
                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <a href="#"><b>Project Five</b></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="break"></div>
        </div>
        end item

        item
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-5">
                <a href="detail.html">
                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <a href="#"><b>Project Five</b></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="break"></div>
        </div>
        end item

        item
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-5">
                <a href="detail.html">
                    <img class="img-responsive" src="../public/image/320x150.png" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <a href="#"><b>Project Five</b></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="break"></div>
        </div>
        end item
    </div>
</div> -->
<!--KET THUC TIN NỔI BẬT-->            
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <?php require '../site/widget/footer.php'; ?>
    <!-- <footer>
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
         -->    <!-- end Footer -->
    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/my.js"></script>

</body>

</html>
