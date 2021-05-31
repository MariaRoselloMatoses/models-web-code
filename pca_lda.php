<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PCA and LDA</title>

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
                    <p>
                    As you can imagine it was difficult to work with the entire dataset because we have 32 variables ( the ones from Kaggle and the ones of SDGs .This is why decided to use PCA , a statistical procedure that allows you to summarize the information content in large data tables by means of a smaller set of components( summary indices ) that can be more easily visualized and analyzed.This idea leads us to use LDA too. LDA finds a new feature space to project the data in order to maximize class separability, in our case, the level of Happiness. LDA, in contrast to PCA, is a supervised method, using known class labels so we wanted to compare them</p>
                    <h1 class="h3 mb-2 text-gray-800">PCA</h1>
                    <p>For this model we take into account the integrated data, having 4 years in total and 32 input variables regarding the kaggle dataset and the sdgs. 
                        <br>
                    After preparing the data for this analysis (centering and scaling the variables) we have to decide the number of components we are going to use. With this purpose we did the next plot in which we can see that the first component explains 41.49% and the second a 13.43% of the variance. The third one would explain 6.88% of the variance. 
                    </p>
                    <img src="img/sara_1.jpeg" class="img-fluid" width="50%">
                    <p>
                        <br>
                    The next step was looking at how much each variable contributed to both components.</p>

                    <img src="img/sara_2.jpeg" class="img-fluid" width="50%">
                    <p>
                        <br>
                    Considering the first component explains 4 times more than the 2º component, the variable that influence our variability the most is the Global Index Score (0-100).
                    <br>
                    This could mean that there isn’t a particular score or mesure ( economical, social …) that explains the variability but the scores explain much more the variability. Additionally, according to this score, if we had to focus on collecting data for only one SGD the best option will be Goal 3 (Good health and well-being). 

                    </p>

                    <h1 class="h3 mb-2 text-gray-800">LDA</h1>
                    <p>
                    For this analysis we have used the same data as the model above, the panel data, as we decided to use this as a contrast to PCA . We also create another variable (hap_level), a qualitative column which has 4 possible values depending on the happiness score. We divided them in quartiles. 
                    <br>
                    The LDA variation explained with the 2 firsts components is 0.82151621 and 0.14114395. So has it explained better the variability of the base, it would be a better model for our purpose (as it can be seen in the plot below).

                    </p>
                    <img src="img/pca.jpeg" class="img-fluid" width="50%"><img src="img/lda.jpeg" class="img-fluid" width="50%">
                    <p>
                    LDA has 2 possible applications , it can be used as a dimensionality reduction technique but also as a classifier. We wanted to see how reliable it would be as a classifier. It has a 0.77 accuracy.
                    <br>
                    On the next plot we can see how much each variable impacts on the model. So as it is show the variables that would help you to know in which quartile a country is would be Goal 3 (Good health and well-being) , Index Score and Familie.
                    </p>

                    <img src="img/sara_3.jpeg" class="img-fluid" width="80%">
                    



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