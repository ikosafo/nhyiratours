<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Check idle time (1 hour = 3600 seconds)
if (time() - $_SESSION['last_activity'] > 3600) {
    // Session has been idle for more than 1 hour, log the user out
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
}

// Update last activity time stamp
$_SESSION['last_activity'] = time();
?>

<?php include ('./includes/header.php'); ?>
 <!-- Title -->
 <section class="hero">
            <div class="hero-bg">
                <img src="<?php echo URLROOT ?>assets/img/dwl/09.jpg" srcset="<?php echo URLROOT ?>assets/img/dwl/09.jpg 2x" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Get to Know Us</span>
                    <h1 class="display-3 hero-title">
                        Contact Information
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Information</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->


    <!-- Main -->    
    <main>

    <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-12">
                        <div class="pe-xl-4 me-xl-2">
                           
                            <!-- Booking list -->
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <?php
                                            // Include config file
                                            require_once 'config.php';

                                            // Query to select contact form submissions
                                            $query = "SELECT id, fullName, emailAddress, subject, message, createdAt, ipAddress FROM contactus"; // Adjust table name if needed

                                            // Execute the query
                                            $result = $mysqli->query($query);

                                            // Check if the query was successful
                                            if ($result) {
                                                // Check if there are results
                                                if ($result->num_rows > 0) {
                                                    echo '<div class="table-responsive">';
                                                    echo '<table class="table">';
                                                    echo '<thead class="text-center">';
                                                    echo '<tr class="table-light">';
                                                    echo '<th scope="col"><strong>#</strong></th>'; // Changed to a count
                                                    echo '<th scope="col"><strong>Full Name</strong></th>';
                                                    echo '<th scope="col"><strong>Email Address</strong></th>';
                                                    echo '<th scope="col"><strong>Subject</strong></th>';
                                                    echo '<th scope="col"><strong>Message</strong></th>';
                                                    echo '<th scope="col"><strong>Created At</strong></th>';
                                                    echo '<th scope="col"><strong>IP Address</strong></th>';
                                                    echo '</tr>';
                                                    echo '</thead>';
                                                    echo '<tbody>';
                                            
                                                    $count = 1; // Initialize a counter
                                            
                                                    // Fetch each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<tr>';
                                                        echo '<td class="text-center"><span>' . htmlspecialchars($count) . '</span></td>'; // Use the counter
                                                        echo '<td class="text-nowrap"><span>' . htmlspecialchars($row['fullName']) . '</span></td>';
                                                        echo '<td class="text-nowrap"><span>' . htmlspecialchars($row['emailAddress']) . '</span></td>';
                                                        echo '<td class="text-nowrap"><span>' . htmlspecialchars($row['subject']) . '</span></td>';
                                                        echo '<td class="text-nowrap"><span>' . htmlspecialchars($row['message']) . '</span></td>';
                                                        echo '<td class="text-center"><small class="text-nowrap">' . date('Y-m-d H:i:s', strtotime($row['createdAt'])) . '</small></td>';
                                                        echo '<td class="text-center"><span>' . htmlspecialchars($row['ipAddress']) . '</span></td>';
                                                        echo '</tr>';
                                                        $count++; // Increment the counter
                                                    }
                                            
                                                    echo '</tbody>';
                                                    echo '</table>';
                                                    echo '</div>';
                                                } else {
                                                    echo '<p class="text-center">No contact submissions found.</p>';
                                                }
                                            
                                                // Free result set
                                                $result->free();
                                            }
                                             else {
                                                echo "Error executing query: " . $mysqli->error;
                                            }

                                            // Close the connection
                                            $mysqli->close();
                                            ?>


                                </div>
                            </div>
                            <!-- /Booking list -->
                        </div>
                    </div>
                    
                </div>
            </section>

    </main>
    <!-- /Main -->    

<?php include ('./includes/footer.php'); ?>
