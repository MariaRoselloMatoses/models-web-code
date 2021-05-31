<!DOCTYPE html>
<html lang="en">
<script type='text/javascript' src='https://prod-uk-a.online.tableau.com/javascripts/api/viz_v1.js'></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Analysis</title>

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

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <img src="img/onu.png" width="50" ><img src="img/upv.jpg" width="120" >
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Our project</h1>
                    </div>
                    <div class="row  align-center">
                        <p>
                        Our main goal in this project was make a social study of the influence of happiness in fullfiling the <a href="https://sdgs.un.org/es/goals">SDG</a> and other social indexes and vice versa.
                        </p>
                        <p>
                        Through social indexes and concerns we have made an analysis in order to achieve the maximum wellness of a country.
                        </p> 
                    </div>
                    <br>
                    <br>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Our data & Goals</h1>
                    </div>
                    <div class="row">
                        <p>We have extracted the data from 3 different data scoures:
                            <br>
                            <ul>
                                <li><a href="https://sdgs.un.org/es/goals">SDG Indexes</a></li>
                                <li><a href="https://www.kaggle.com/ajaypalsinghlo/world-happiness-report-2021?select=world-happiness-report.csv">World Happiness Report Data from kaggle (up to 2020) </a></li>
                                <li><a href="https://www.gallup.com/home.aspx">Gallups Private Analytics Tool</a></li>
                            </ul>
                        </p>
                    <br>
                    <p>
                        Both Gallup and United Nations offer trending data of varied indexes and the global goals respectively. A first goal is to analyse these trends and see if the principal indexes (GDP, trust in government, generosity, etc) are able to explain the global SDG score and also the happiness score. Moreover, it is intended to see if there are significant differences on the behaviour of the countries or the different years recorded when considering a similar conduct of these countries. 
                        <br>

                        A second goal mainly axis of this project is to make an extent analysis of 2020 data, which is the closest of our era from which there is available data, with additional variables extracted from Gallup, trying to see which ones are more in relation with the various global goals and also the happìness score.

                    </p>
                    <img src="img/SDG.png" class="img-fluid" width="50%"><img src="img/world_report.png" class="img-fluid" width="20%">
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <p>First of all and taking a first glance at our 2 main variables: the Happiness Score (0-10) and the Global Index SDG Score (0-100) we wanted to see if there seem to be a relation. In the following plot a possible relation can be seen between each country.</p>

                    <script type='text/javascript' src='https://dub01.online.tableau.com/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 1000px; height: 603px;'><object class='tableauViz' width='100%' height='603' style='display:none;'><param name='host_url' value='https%3A%2F%2Fdub01.online.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='&#47;t&#47;proy' /><param name='name' value='puntitos&#47;Hoja7' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>

                    <p>In the following interactive map we can see how the different Goals are achieve all around the world. .</p>
                    <div class='tableauPlaceholder' style='width: 1000px; height: 827px;'><object class='tableauViz' width='100%' height='827' style='display:none;'><param name='host_url' value='https%3A%2F%2Fdub01.online.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='&#47;t&#47;proy' /><param name='name' value='Happinessthroughyears&#47;MapaGoalsconRank' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p>The following map shows how the Happiness index has change along the yaers in every country: </p>
                    <script type='text/javascript' src='https://dub01.online.tableau.com/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 1000px; height: 827px;'><object class='tableauViz' width='100%' height='827' style='display:none;'><param name='host_url' value='https%3A%2F%2Fdub01.online.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='&#47;t&#47;proy' /><param name='name' value='Goals&#47;Happiness-Years' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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

</body>

</html>