    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="index.php"><img src="images/Mobile.png" width="200"></a>
            </div>
            <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Brands
                        </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="apple.php">
                            APPLE
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="htc.php">HTC</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="huawei.php">HUAWEI</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="xiaomi.php">XIAOMI</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="nokia.php">NOKIA</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="oppo.php">OPPO</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="realme.php">REALME</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="samsung.php">SAMSUNG</a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <form class="d-flex input-group me-5" style="max-width: 400px;" action="">
                <input class="form-control" type="search" placeholder="Search">
                <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>


            <div class="cart me-5"><a href="cart.php" class="p-2">
                <i class="fa-solid fa-cart-shopping"></i></a></div>

            <div class="login me-5"><a class="p-2" data-bs-toggle="modal" data-bs-target="#usermodal">
                <i class="fa-solid fa-user"></i></a></div>
            <div>
            <a href="logout.php">Logout</a> 
            </div>
        </div>
    </nav>
