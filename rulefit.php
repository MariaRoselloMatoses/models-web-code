<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rulefit models</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Which variables influence more on the Happiness Score?</h1>
                    <p>
                    As mentioned, one of the main values of this project is to see which social concerns influence more on the increase or decrease of a country’s Happiness. So we asked the question of how could this happiness value be predicted depending on our available variables. In order to predict it and see an easy  interpretable explanation we built a regression tree. To allow an easy explanation of the results we fix the maximum depth to 3 and the family to “binomial”. </p>

                    <p style="font-family:'Courier New'">partykit::ctree(`Happiness Score` ~ ., data = data, maxdepth = 3, family = "binomial")</p> 

                    <p>
                        The result obtained was the following Rule Tree
                    </p>
                    <img src="img/rulefit1.png" class="img-fluid" width="100%">


                    <p>
                        It can be easily seen how the Happiness Index of a county changes depending of the values of Log GDP per capita, Treated with respect (a “Yes” answer to the question “Were you treated with respect during all day yesterday?”), Donated money (If the respondent had donated money to charity in the last month) and Dystopia Residual (how far is your country from an imaginary country that has the world’s least-happy people).

                        <br>

                        As we can see, the tree is at first based on the Logged GDP per capita. The higher it is, the better it seems to be the happiness score of a country. 
                        <br>
                        As we observe for instance if we have a Logged GDP per capita higher than 10.3 and more than the 65% of the population of a country has donated money, then the country has more probabilities of being happier.
                        <br>
                        We also appreciate the importance of feeling treated with respect (a Gallup polled variable), which indicates a big difference in the Happiness score if less than the 86% of the population considers not having been treated with respect.
                        <br>
                        Furthermore, the Dystopia Residual indicates that the more we approach this “fatal” country, the worst Happiness index we get, which seems obvious.
                        <br>
                        On the other hand and still related to rules, we built a rule model to see the main decision rules that influence the linear model of predicting the output Happiness Score.
                        <br>
                        <p style="font-family:'Courier New'">model_rules = pre(Happiness_Score ~  ., data=data) </p>
                        Some of the rules obtained were similar to what is seen in the tree, that a Logged GDP per capita lower than 10.488 decreases the Happiness score 0.25. Or that having a Score lower than 81.302 in the Goal 12 (Responsible consumption and production) increases the happiness Score in 0.187. 
                        Here we can see the importance of each variable in the Happiness Score:
                        <img src="img/importance_plot_proy3_happiness.png" class="img-fluid" width="100%">
                        <br>
                        As imagined based on the results of the tree and the rulefit model, the Logged GDP per capita is the most important variable, followed by the Goal 5 (Gender Equality) , 12 (Responsible consumption and production), Unemployment index and Treated with respect.
                    </p>
                    <h1 class="h3 mb-2 text-gray-800">Which Gallup variables influence more on the SDG Global Score?</h1>
                    <p>
                    The same analysis and models have been applied in order to predict the SGD Global Index depending only on Gallup variables, to see if there could be a relation between how people feel about their lives and how the official indexes speak.

                    <p style="font-family:'Courier New'">partykit::ctree(`Global Index Score (0-100)` ~ ., data = gallup_data, maxdepth = 3)</p> 
                    <img src="img/SDG_arbol.jfif" class="img-fluid" width="100%">
                    <!-- Content Row -->
                    <p>
                        The biggest difference is seen in countries in which more than the 28% od the population consider they don’t have enough money for food and less than the 62% don’t have access to internet. That decreases the Score of the General SDG, which is perfectly understandable because is based on the poverty.
                        <br>
                        We obtained rules such as:
                        <br>
                        If less than 64% of the population states that they have enough money for food and more than the 69% have access to the internet, then the country’s Global SDG Index increases 2.33.
                        <br>
                        The following Gallup variables are the ones that most influence the SDG Global Index.
                        <img src="img/importance_plot_proy3_sdg.png" class="img-fluid" width="100%">
                        We could conclude in this case that variables now related more with means to life such as food, internet access, employment or education influence on the prediction of the SDG Index.
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