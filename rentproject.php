<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List</title>

    <link rel="stylesheet" href="css/rentproject.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .step { display: none; }
        .step.active { display: block; }
        .timeline-item { cursor: pointer; }
        .timeline-item.active { font-weight: bold; color: red; }
        .error { color: red; font-size: 14px; }
    </style>


</head>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2>Rent Project</h2>
            <p class="banner-bread"><a href="index.php" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Rent</a></p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->
<section class="multiple-forms">
    <div class="multiple-form-container container mt-5">
        <div class="row">
            <!-- Left Sidebar -->
           <div class="col-md-3 d-flex flex-column align-items-center sidebar-timeline" id="sidebar">
                <ul class="timeline">
                    <li class="timeline-item active" data-step="1">
                        <span class="step-circle">1</span>
                        <span class="step-text">Project Type</span>
                    </li>
                    <li class="timeline-item" data-step="2">
                        <span class="step-circle">2</span>
                        <span class="step-text">Overview</span>
                    </li>
                    <li class="timeline-item" data-step="3">
                        <span class="step-circle">3</span>
                        <span class="step-text">User Details</span>
                    </li>
                    <li class="timeline-item" data-step="4">
                        <span class="step-circle">4</span>
                        <span class="step-text">Locality Details</span>
                    </li>
                    <li class="timeline-item" data-step="5">
                        <span class="step-circle">5</span>
                        <span class="step-text">Project Details</span>
                    </li>
                </ul>
            </div>
            
            <!-- Right Form Section -->
            <div class="col-md-9">
                <form id="multiStepForm">
                    <!-- Step 1: Project Type -->
                    <div class="step active" id="step-1">
                        <h3 class="form-question">Choose Project Type</h3>
                        <div class="option-container">
                            <label class="option-box">
                                <input type="radio" name="project_type" value="residential" required>
                                <div class="content">
                                    <img src="images/residential.png" alt="Residential">
                                    <h2 class="option-text">Residential</h2>
                                </div>
                            </label>
                            <label class="option-box">
                                <input type="radio" name="project_type" value="commercial" required>
                                <div class="content">
                                    <img src="images/commercial.png" alt="Commercial">
                                    <h2 class="option-text">Commercial</h2>
                                </div>
                            </label>
                        </div>
                        <div class=" form-buttons text-end">
                            <button type="button" class=" next next-btn">Next</button>
                        </div>
                    </div>

                    <!-- Step 2: Overview -->
                    <div class="step" id="step-2">
                        <h3 class="form-question">Overview</h3>
                        <div class="option-container" id="overview-options"></div>
                        <div class="d-flex justify-content-between form-buttons">
                            <button type="button" class=" next-btn prev">Previous</button>
                            <button type="button" class=" next-btn next">Next</button>
                        </div>
                    </div>


                    <!-- Step 3: User Details -->
                    <div class="step" id="step-3">
                        <h3 class="form-question">User Details</h3>
                        
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" placeholder="Full Name" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="contact">Phone Number:</label>
                            <input type="text" id="contact" name="contact" placeholder="Phone Number" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div class="d-flex justify-content-between form-buttons">
                            <button type="button" class=" next-btn prev">Previous</button>
                            <button type="button" class=" next-btn next">Next</button>
                        </div>
                    </div>


                    <!-- Step 4: Locality Details -->
                    <div class="step" id="step-4">
                        <h3 class="form-question">Locality Details</h3>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" id="city" name="city" placeholder="Enter City" class="form-control" required>
                            <span class="error-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" id="location" name="location" placeholder="Enter location" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div class="d-flex justify-content-between form-buttons">
                            <button type="button" class=" next-btn prev">Previous</button>
                            <button type="button" class=" next-btn next">Next</button>
                        </div>
                       
                    </div>

                    <!-- Step 5: Project Details -->
                    <!-- Step 5: Project Details -->
                    <div class="step" id="step-5">
                        <h3 class="form-question">Project Details</h3>

                        <div class="form-group">
                            <label for="project_name">Project Name:</label>
                            <input type="text" id="project_name" name="project_name" placeholder="Enter Project Name" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div id="residential-fields">
                            <div class="form-group">
                                <label for="total_floor">Total Floor:</label>
                                <input type="number" id="total_floor" name="total_floor" placeholder="Enter Total Floors" class="form-control">
                                <span class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="total_unit">Total Unit:</label>
                                <input type="number" id="total_unit" name="total_unit" placeholder="Enter Total Units" class="form-control">
                                <span class="error-message"></span>
                            </div>
                        </div>

                        <div id="commercial-fields">
                            <div class="form-group">
                                <label for="usp">USP (Unique Selling Point):</label>
                                <input type="text" id="usp" name="usp" placeholder="Enter USP" class="form-control">
                                <span class="error-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="carpet_area">Carpet Area:</label>
                            <input type="text" id="carpet_area" name="carpet_area" placeholder="Enter Carpet Area" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="rent_per_month">Rent per Month:</label>
                            <input type="text" id="rent_per_month" name="rent_per_month" placeholder="Enter Rent Amount" class="form-control" required>
                            <span class="error-message"></span>
                        </div>

                        <div class="d-flex justify-content-between form-buttons">
                            <button type="button" class="next-btn prev">Previous</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<script>
     $(document).ready(function() {
        let currentStep = 1;
        
        function showStep(step) {
            $(".step").removeClass("active");
            $("#step-" + step).addClass("active");
            $(".timeline-item").removeClass("active");
            $(".timeline-item[data-step=" + step + "]").addClass("active");
            $(".timeline").css("--active-step", step);
        }
        
        $(".next").click(function() {
            if (currentStep < 5) {
                currentStep++;
                showStep(currentStep);
            }
        });
        
        $(".prev").click(function() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });



         // Handle Project Type Selection
         $(".option-box").click(function() {
            $(".option-box").removeClass("selected");
            $(this).addClass("selected");
            $(this).find("input").prop("checked", true).trigger("change");
        });

        $(document).ready(function() {
            $("input[name='project_type']").change(function() {
                let projectType = $("input[name='project_type']:checked").val();
                let options = "";

                if (projectType === "residential") {
                    options += `
                        <label class="option-box">
                            <input type="radio" name="overview" value="1BHK" required>
                            <img src="images/residential.png" alt="1BHK">
                            <span>1BHK</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="2BHK" required>
                            <img src="images/residential.png" alt="2BHK">
                            <span>2BHK</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="3BHK" required>
                            <img src="images/residential.png" alt="3BHK">
                            <span>3BHK</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="4BHK" required>
                            <img src="images/residential.png" alt="4BHK">
                            <span>4BHK</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="5BHK" required>
                            <img src="images/residential.png" alt="5BHK">
                            <span>5BHK</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="6BHK" required>
                            <img src="images/residential.png" alt="6BHK">
                            <span>6BHK</span>
                        </label>
                    `;
                } else {
                    options += `
                        <label class="option-box">
                            <input type="radio" name="overview" value="Shop" required>
                            <img src="images/shop.png" alt="Shop">
                            <span>Shop</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="Restaurant" required>
                            <img src="images/restaurant.png" alt="Restaurant">
                            <span>Restaurant</span>
                        </label>
                        <label class="option-box">
                            <input type="radio" name="overview" value="Office" required>
                            <img src="images/office.png" alt="Office">
                            <span>Office</span>
                        </label>
                         <label class="option-box">
                            <input type="radio" name="overview" value="Office" required>
                            <img src="images/studi.png" alt="Office">
                            <span>Office</span>
                        </label>
                         <label class="option-box">
                            <input type="radio" name="overview" value="Office" required>
                            <img src="images/showroom.png" alt="Office">
                            <span>Office</span>
                        </label>
                    `;
                }

                $("#overview-options").html(options);
            });

            $(document).on("click", ".option-box", function() {
                $(".option-box").removeClass("selected");
                $(this).addClass("selected");
                $(this).find("input").prop("checked", true);
            });
        });

        $(document).ready(function() {
            $("input[name='project_type']").change(function() {
                let projectType = $("input[name='project_type']:checked").val();

                if (projectType === "residential") {
                    $("#residential-fields").show();
                    $("#commercial-fields").hide();
                } else {
                    $("#residential-fields").hide();
                    $("#commercial-fields").show();
                }
            });

            $("input[name='project_type']:checked").trigger("change"); // Trigger change event on page load
        });



        $("#multiStepForm").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "rentproject_submit.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    alert("Thank you! Your form has been submitted.");
                    location.reload(); // Refresh the page
                }
            });
        });

    });
</script>

<!-- end properties -->

<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2 class="call-to-cation-h2">Your Gateway to Perfect Spaces</h2>
                <p style ="text-align:center;">Step into a world of opportunities with properties that inspire</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->



<!-- Enquire Button -->
<div id="enquireButtonContainer">
    <button id="enquireButton">Book A Demo</button>
</div>

<!-- Enquiry Modal -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        <form id="enquiryForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="contact" id="contact" placeholder="Your Contact Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<!-- Thank You Modal -->
<div id="thankYouModal" style="display:none; position:fixed; top:25%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
    <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
    <h3>Thank You!</h3>
    <p style="     text-align: left;
    color: #050f17;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    max-width: 700px;">Thank you for your interest. We will get back to you soon.</p>
    <!-- <button type="button" id="closeThankYouModal">Close</button> -->
</div>

<script>
    // Show enquiry modal
    document.getElementById("enquireButton").onclick = function() {
        document.getElementById("enquiryModal").style.display = "block";
    };
    // Hide enquiry modal
    document.getElementById("closeModal").onclick = function() {
        document.getElementById("enquiryModal").style.display = "none";
    };

    // Hide thank you modal and reload page
    document.getElementById("closeThankYouModal").onclick = function() {
        document.getElementById("thankYouModal").style.display = "none";
        location.reload(); // Reload the page
    };

    // Form submission using AJAX
    document.getElementById("enquiryForm").onsubmit = function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch("submit_form.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                console.log("Response from server:", data); // Debugging response

                // Handle success response
                if (data.includes("Form submitted successfully!")) {
                    // Close enquiry modal
                    document.getElementById("enquiryModal").style.display = "none";
                    // Show thank you modal
                    document.getElementById("thankYouModal").style.display = "block";
                } else {
                    alert("Failed to submit the form. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred while submitting the form.");
            });
    };

</script>

<!-- end enquiry -->




<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
