<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JG Saree Heaven</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="JG Saree Heaven Logo">
            </div>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contact us.html">Contact Us</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a href="product details.html">Product Details</a></li>
            </ul>
            <div class="cart-container">
                <i class="fa-solid fa-cart-shopping"></i>
                <div class="cart-number-container">0</div>
            </div>
        </nav>
    </header>
    <!-- User Accounts Section -->
    <section class="user-accounts">
        <h2>Secure User Accounts</h2>
        <form action="register.php" method = "post">
        <p>Securely save all your data and access it from anywhere by registering for a user account. Your information will be stored safely, and you can log in from any device to manage your tasks and appointments conveniently. Enjoy the flexibility of managing your tasks on the go!</p>
        <button>Register Now</button>
    </form>
    </section>

    <!-- Customization Section -->
    <section class="customization">
        <h2>Customize Your Experience</h2>
        <p>Make your task management experience truly yours by personalizing your lists with colors, tags, and categories. Organize your tasks the way you want, whether it's by project, priority, or due date. Tailor the app to suit your preferences and work style for enhanced productivity.</p>
        <div class="customization-options">
            <label>Colors:</label>
            <input type="color" id="color-picker">

            <label>Categories:</label>
            <select id="category-select">
                <option value="">Select a category</option>
                <option value="types">Type</option>
                <option value="color">Color</option>
                <option value="price">Price</option>
            </select>
        </div>
    </section>

    <!-- Online Shopping Section -->
    <section class="online-shopping">
        <h2>Online Shopping Experience</h2>
        <p>This feature allows users to explore a wide range of products conveniently from the comfort of their homes. The application provides a diverse selection of items across various categories, ensuring that users can find everything they need without visiting physical stores. This enhances the shopping experience by saving time and providing a hassle-free way to browse and purchase products.</p>
        <div class="search-filter">
            <input type="search" id="search-input" placeholder="Search for products">
            <button id="search-btn">Search</button>
            <select id="category-filter">
                <option value="">All Categories</option>
                <option value="clothing">Electronics</option>
                <option value="styles">Clothing</option>
                <option value="types">Home Goods</option>
            </select>
            <select id="price-filter">
                <option value="">All Prices</option>
                <option value="low-to-high">Low to High</option>
                <option value="high-to-low">High to Low</option>
            </select>
        </div>
        <div class="product-grid">
            <!-- Product Cards will be displayed here -->
        </div>
    </section>

    

    <script src="script.js"></script>
</body>
</html>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Customer Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM customers";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Address</th>";
                            echo "<th>Phone</th>";
                            echo "<th>Email</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>