<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PLS models</title>

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
                    <h1 class="h3 mb-2 text-gray-800">How can the Happiness Score be predicted?</h1>
                    <p>
                   To get more accurate results on our previous results, we implemented another model, the Partial Least Squares, for the prediction of the Happiness Score variable. PLS finds a linear regression model by projecting the predicted variables and the observable variables to a new space, predicted variables are also known as regressors and the observable variable is the value wanted to be explained, both being matrices (X and Y respectively), they are used to explain the maximum multidimensional variance direction in the Y space. </p>

                    <p>
                    Since our database is composed of 4 years, and each year having a different set of variables, for this model, we will be selecting the year 2020, due to being the latest year, therefore being the most interesting results to be obtained
                    </p>
                    <p>For the exploratory analysis, we decided to try with 3 PC components</p>
                    <table class="table">
                      <thead>
                        <tr class="table-secondary">
                          <th>R<sup>2</sup>X(cum)</th>
                          <th>R<sup>2</sup>Y(cum)</th>
                          <th>Q<sup>2</sup>(cum)</th>
                          <th>RMSEE</th>
                          <th>pre</th>
                          <th>ort</th>
                          <th>pR<sup>2</sup>Y</th>
                          <th>pQ<sup>2</sup></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                          <td>0.549</td>
                          <td>0.95</td>
                          <td>0.903</td>
                          <td>0.23</td>
                          <td>3</td>
                          <td>0</td>
                          <td>0.05</td>
                          <td>0.05</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>R2X stands for the explained variation of the observations, while R<sup>2</sup>Y means the explained variation of the variables. Having an R<sup>2</sup>X around 0.549, our model is not that great explaining the variation of a new observation. On the other hand, having an R<sup>2</sup>Y around 0.95, our model is surprisingly good at explaining variables, which is our main objective with this model. Q<sup>2</sup> stands for an overall “goodness of prediction”</p>
                    <p>We plotted the amount of R<sup>2</sup>Y each component explained</p>
                    <img src="img/gus_componentes.jpeg" class="img-fluid" width="100%">


                    <p>
                        Since the 3<sup>rd</sup>component explains less than a 5% of the variability, we decided to cut it off. </p>
                        <table class="table">
                      <thead>
                        <tr class="table-secondary">
                          <th>R<sup>2</sup>X(cum)</th>
                          <th>R<sup>2</sup>Y(cum)</th>
                          <th>Q<sup>2</sup>(cum)</th>
                          <th>RMSEE</th>
                          <th>pre</th>
                          <th>ort</th>
                          <th>pR<sup>2</sup>Y</th>
                          <th>pQ<sup>2</sup></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                          <td>0.459</td>
                          <td>0.917</td>
                          <td>0.873</td>
                          <td>0.297</td>
                          <td>2</td>
                          <td>0</td>
                          <td>0.05</td>
                          <td>0.05</td>
                        </tr>
                      </tbody>
                    </table>

                        <p>
                        With only 2 components, the R<sup>2</sup>Y stays above 0.9, and the Q<sup>2</sup> almost at 0.9.
                        To find out if there are any atypical or abnormal data, we will be using the Hotelling’s T-Squared distribution (a multivariate probability distribution that is tightly related to the F-distribution).
                        <img src="img/gus_t2.jpeg" class="img-fluid" width="100%">
                        <br>
                        The last step is to observe the contribution of each variable. First by the Variable Importance in Projection, VIP. The most important variables are Dystopia, GDP per capita, Goal 3 (Health and well-being) and 12 (Consumption and production).
                    </p>
                    <img src="img/gus_vip.jpeg" class="img-fluid" width="100%">
                    
                    <p>
                    And by contribution to each component:
                    </p> 
                    <table class="table table-sm">
                        <thead>
                            <tr class="table-secondary">
                              <th>VALUE</th>
                              <th>p1</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Global Index Score (0-100)</td>
                              <td>0.1901</td>
                            </tr>
                            <tr>
                              <td>Goal 3 Score</td>
                              <td>0.1892</td>
                            </tr>
                            <tr>
                              <td>Log GDP per capita</td>
                              <td>0.1885</td>
                            </tr>
                            <tr>
                              <td>No Money for Food</td>
                              <td>-0.1867</td>
                            </tr>
                            <tr>
                              <td>Goal 12 Score</td>
                              <td>-0.1835</td>
                            </tr>
                            <tr>
                              <td>Spillover Score (0-100)</td>
                              <td>-0.1719</td>
                            </tr>
                          </tbody>
                    </table>
                    <p>For the first component, the variables that contribute the most, in a positive way, are the Global Index Score, the 3rd SDG, and GDP per capita. Meanwhile, the variables that contribute the most, in a negative way, are NoMon4Food, the 12th SDG and the Spillover Score.</p>
                    <table class="table table-sm">
                        <thead>
                            <tr class="table-secondary">
                              <th>VALUE</th>
                              <th>p2</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Dystopia Residual</td>
                              <td>0.4426</td>
                            </tr>
                            <tr>
                              <td>Employeed part time - want full time</td>
                              <td>0.2925</td>
                            </tr>
                            <tr>
                              <td>Out of workforce</td>
                              <td>-0.3028</td>
                            </tr>
                            <tr>
                              <td>Goal 10 Score</td>
                              <td>-0.2008</td>
                            </tr>
                          </tbody>
                    </table>                 
            
                    <p>For the second component, the variables that contribute the most, in a positive way, are Dystopia Residual, and Employed Part Time but wants full time. Meanwhile, Out of Workforce and the 10th SDG affect the most in a negative way. 
                        <br>
                    Since the first component explains more than 5 times the second component does, it’s results are far more influential. Even though each variable explains little by themselves, we can conclude that having a better Global Index Score, and a higher GDP per capita, increases the possibilities of a country being happier, as well as the 3rd SDG (Health and Well-being). And even though it has a smaller influence, Dystopia Residual as well, can be considered influential, towards our final objective, the further a country is to a perfect dystopian world, the happier it seems to be.</p>
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