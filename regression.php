<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Regression models</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Project III</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-smile-beam"></i>
                    <span>Our project</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Models applied
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="regression.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Regression</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pca_lda.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>PCA & LDA</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rulefit.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Rulefit & Tree</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pls.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>PLS</span></a>
            </li>
            
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                The Team
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="us.php">
                    <i class="fas fa-users"></i>
                    <span>Us</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="agradecimientos.php">
                    <i class="fas fa-hands-helping"></i>
                    <span>Acknowledgments</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <img src="img/onu.png" width="50" ><img src="img/upv.jpg" width="120" >
                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Regression</h1>
                    <p>
                    For the regression models we used data from 2017 to 2020 integrated in a panel data. It was seen that there were clearly different behaviours for the diverse years when considering similar behaviours between countries. We can see that there is an increase in the base happiness score during the years, but 2020 does not follow this “trend” and goes back to a worse initial score (similar to 2017).
                    </p>
                    <p>
                    Trust and health coefficients resulted non significant, as seen below. By the way, the fixed effects model for individuals was not meaningful, and all models had heteroskedasticity issues that tried to be solved by computing heteroskedasticity consistent ones.
                    <br>
                    The following figure shows the heteroskedasticity consistent coefficients, performance of the model and temporal effects.
                    </p>
                    <img src="img/gonza_1.png" class="img-fluid" width="50%">
                    <p>As the different indexes are not measured the same way, we compared the coefficient weights with a contribution plot for better interpretability.
                    <br>
                    Weigth plot: </p> 
                    
                    <img src="img/gonza_weigth.png" class="img-fluid" width="90%">
                    <p>Contribution plot:</p>
                    <img src="img/gonza_effect.jpeg" class="img-fluid" width="90%">
                    <p>For instance, when freedom increases by one unit, happiness score increases by a certain value when the other variables stay the same, and so do other indexes such as generosity or GDP (concretely, all indexes except “trust” have a positive influence on the happiness score, as seen in the previous figures). Although freedom has the biggest weight, it has little contribution to happiness score compared to GDP as this last index ranges from bigger values. In fact, GDP is the most influential variable, producing an increase of the happiness score that goes from 3.5 to more than 6 points.</p>
                    <p> 
                    On the other hand, we can find that “trust” has a negative weight, which is understandable, as when perceptions of corruption increase (meaning of this index) people could be more worried about their lives.
                    </p>



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>