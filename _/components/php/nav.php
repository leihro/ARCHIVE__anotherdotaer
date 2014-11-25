
<!-- navigation -->
    <nav class = "navbar navbar-inverse navbar-static-top" role = "navigation">
        <div class = "container">
            <!-- mobile display -->
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar_collapse_1">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class = "navbar-brand" href="index.php">DOTA2</a>
            </div>

            <!-- collect everything from toggling -->
            <div class = "collapse navbar-collapse" id = "navbar_collapse_1">
                <ul class = "nav navbar-nav">
                    <li><a href="index.php">Home<span class = "sr-only">(current)</span></a></li>
                    <li><a href="about.php">About</a></li>
                    <li class = "dropdown">
                        <a href = "heroes.php" class = "dropdown-toggle" type = "button" id = "nav_dropdown_heroes" data-toggle = "dropdown" aria-expanded = "false">
                            Heroes 
                            <span class = "caret"></span>
                        </a>
                        <ul class = "dropdown-menu " area-labelledby = "nav_dropdown_heroes">
                            <li class = "dropdown-header"><a href="heroes.php"><strong>All heroes</strong></a></li>
                            <li class = "divider"></li>
                            <li><a href="heroes.php#Death_prophet" tabindex = "-1">Death Prophet</a></li>
                            <li><a href="heroes.php#Faceless_void" tabindex = "-1">Faceless Void</a></li>
                            <li><a href="heroes.php#Lina" tabindex = "-1">Lina</a></li>
                            <li><a href="heroes.php#Lycan" tabindex = "-1">Lycan</a></li>
                            <li><a href="heroes.php#Mirana" tabindex = "-1">Mirana</a></li>
                            <li><a href="heroes.php#Sven" tabindex = "-1">Sven</a></li>
                        </ul>
                    </li>


                </ul>
                <form class = "navbar-form navbar-right" role = "search">
                    <div class = "form-group">
                        <input type = "text" class = "form-control" placeholder = "Search">
                    </div>
                    <button type = "submit" class = "btn btn-sm btn-default">Search</button>
                </form>
            </div>  <!-- navbar collapse -->
        </div>  <!-- navbar container -->
    </nav>

