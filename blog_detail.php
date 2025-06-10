<?php
// Include database configuration
include('config.php');

// Get the blog post ID from the URL
$blog_id = $_GET['id'];

// Query to fetch the blog details
$query = "SELECT * FROM blogs WHERE id = $blog_id";
$result = mysqli_query($con, $query);

if ($result) {
    $blog = mysqli_fetch_assoc($result);

    if (!$blog) {
        // No blog found with the given ID
        echo "Blog post not found.";
        exit;
    }
} else {
    // Query error
    echo "Error: " . mysqli_error($con);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail</title>

    <link rel="stylesheet" href="css/knowblog.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-blog1">
    <div class="banner-blog">
        <div class="blog-content">
            <h2 class="blog-heading"><?php echo $blog['title']; ?></h2>
            <p class="blog-para"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Blog</a></p>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- blog detail section -->
<section id="blog-detail">
    <div class="container-blog">
        <div class="content">
            <!-- Blog Detail -->
            <div class="blog-list">
                <h1 class="blog-heading" style="font-size: 40px; color: #A8894D;"><?php echo $blog['title']; ?></h1>
                <p class="created-at">Created at: <?php echo $blog['created_at']; ?> | <span>By<span style="color:#a8894d"> Knowhere</span></span></p>

                <img src="./admin/property/<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>" style="width:100%; border: 1px solid #fff">
                <p class="para-blog" ><?php  
                    echo '<div style="color: white;">' . nl2br($blog['content']) . '</div>';
                    ?>
                    </p>
                <div class="main-content">
                    <?php 
                    if ($blog['content']) {
                        echo '<h3 style="color : #a8894d; font-family:Italiana; font-size:35px; font-weight:400;"></h3>';
                        echo nl2br($blog['main_content']);
                    } else {
                        echo 'No main content available for this post.';
                    }
                    ?>
                </div>

                <div class="main-content">
                    <?php 
                    if ($blog['content']) {
                        // echo '<h3 style="color : #a8894d; font-family:Italiana; font-size:35px; font-weight:400;">Conclusion:</h3>';
                        echo '<div style="color: white;">' . nl2br($blog['conclusion']) . '</div>';
                    } else {
                        echo 'No main content available for this post.';
                    }
                    ?>
                </div>
            </div>

            <!-- Sticky Right Section -->
            <div class="right-sidebar">
                <div class="sticky-box">
                    <div class="form-container" style="max-width: 80%;">
                        <h3 class="form-heading">Connect with Us for Tailored Solutions!</h3>
                        <form id="contactForm" style="text-align:center">
                            <input type="text" name="name" placeholder="First Name" required>
                            <input type="text" name="contact" placeholder="Contact" required>
                            <input type="email" name="email" placeholder="Email" required class="email-group">
                            <textarea name="message" placeholder="Message" required></textarea>
                            <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
                        </form>
                    </div>
                    
                    <!-- Thank You Modal -->
                    <div id="thankYouModal" style="display:none; position:fixed; top:20%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
                        <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
                        <h3 style="font-size: 25px; margin-bottom: 10px; color: #000000; font-weight: 300; line-height: 1.7em;">Thank You!</h3>
                        <p style="text-align: left; color: #050f17; font-size: 14px; font-family: 'Lexend', Sans-serif; max-width: 700px;">
                            Thank you for your interest. We will get back to you soon.
                        </p>
                    </div>

                    <script>
                        document.getElementById("contactForm").onsubmit = function(event) {
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
                                    // Close the form and show the Thank You modal
                                    document.getElementById("contactForm").reset();  // Reset the form fields
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

                        // Close Thank You modal and reset the form
                        document.getElementById("closeThankYouModal").onclick = function() {
                            document.getElementById("thankYouModal").style.display = "none";
                            document.getElementById("contactForm").reset(); // Reset the form when closing the modal
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end blog detail section -->

<!-- Footer start -->
<?php include("include/footer.php"); ?>
<!-- Footer end -->

</body>
</html>
