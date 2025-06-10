
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/emicalculator.css">
    <link rel="stylesheet" href="js/knowscript.js">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">





</head>

<style>
    #banner-main {
    padding: 0 20px;
    background-color: #050f17;
}

.banner {
    position: relative;
    height: 200px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.banner-img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: 0.8;
}

.banner::after {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.73);
    z-index: 1;
}

.banner-content {
    position: relative;
    text-align: center;
    z-index: 2;
    padding: 0 20px;
}

.banner h2 {
    color: #E8E8E8;
    font-family: "Italiana", sans-serif;
    font-size: 50px;
    font-weight: 400;
    margin: 0;
}

.banner p {
    font-size: 16px;
    font-family: 'Lexend', sans-serif;
    margin-top: 10px;
}

.banner p a {
    color: #e8e8e8;
    text-decoration: none;
}

.banner p a:hover {
    text-decoration: underline;
    color: #A8894D;
}

/* Responsive */
@media (max-width: 992px) {
    .banner {
        height: 320px;
    }
    .banner h2 {
        font-size: 48px;
    }
}

@media (max-width: 576px) {
    .banner {
        height: 260px;
    }
    .banner h2 {
        font-size: 32px;
    }
    .banner p {
        font-size: 13px;
    }
}

</style>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->

<!-- banner -->

<section id="banner-main">
    <div class="banner">
        <img src="images/banner/5.png" alt="Banner" class="banner-img">
        <div class="banner-content">
            <h2>EMI Calculator</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">EMI Calculator</a>
            </p>
        </div>
    </div>
</section>


<!--end banner  -->

<!-- calculator -->
<section id="emi-calculator" style="padding: 40px;">
    <div class="container-emi">
        <div class="calculator">
            <div class="header">
                <i class="fa fa-calculator" style="height: 22px; margin-top: -5px;"></i>&nbsp;
                <h1>EMI Calculator</h1>
            </div>
            <form id="emi-form">
                <label for="loan-amount">Loan Amount</label><br>
                <input class="emi-form" type="number" id="loan-amount" value="0" oninput="calculateEMI()"><br>

                <label for="loan-tenure">Loan Tenure (years)</label><br>
                <select class="emi-form" id="loan-tenure" onchange="calculateEMI()">
                    <option value="5">5 years</option>
                    <option value="10">10 years</option>
                    <option value="15">15 years</option>
                    <option value="20">20 years</option>
                </select><br>

                <label for="interest-rate">Interest Rate (%)</label><br>
                <input class="emi-form" type="number" id="interest-rate" value="8.5" oninput="calculateEMI()">
            </form>
        </div>

        <div class="result">
            <h2 class="result-heading">EMI Amount: ₹<span id="emi-amount">0.00</span></h2>
            <div class="amounts-container">
                <div class="amount-block">
                    <label for="loan-amount">Loan Amount</label><br>
                    <!-- <input class="emi-form" type="number" id="loan-amount" value="0" oninput="calculateEMI()"><br> -->
                    <p class="details-p"><span id="display-loan-amount">0.00</span></p>
                </div>
                <div class="amount-block">
                    <label for="interest-rate">Interest Rate (%)</label><br>
                    <!-- <input class="emi-form" type="number" id="interest-rate" value="8.5" oninput="calculateEMI()"><br> -->
                    <p class="details-p"><span id="display-interest-amount">0.00</span></p>
                </div>
            </div>

            <div class="promo">
                <h3>Empowering Business Growth with Affordable EMI Plans</h3>
                <ul>
                    <li>Offers from 14+ Banks</li>
                    <li>Lowest Interest Rates</li>
                    <li>Highest Loan Value</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<script>
    function calculateEMI() {
    // Fetch the form inputs
    const loanAmount = parseFloat(document.getElementById('loan-amount').value) || 0;
    const loanTenure = parseInt(document.getElementById('loan-tenure').value) || 0;
    const interestRate = parseFloat(document.getElementById('interest-rate').value) || 0;

    // Convert tenure to months
    const tenureMonths = loanTenure * 12;

    // Calculate monthly interest rate
    const monthlyInterestRate = interestRate / 12 / 100;

    // Calculate EMI
    let emi;
    if (monthlyInterestRate === 0) {
        emi = loanAmount / tenureMonths;
    } else {
        emi = loanAmount * monthlyInterestRate * (Math.pow(1 + monthlyInterestRate, tenureMonths)) / (Math.pow(1 + monthlyInterestRate, tenureMonths) - 1);
    }

    // Calculate total interest amount
    const totalPayment = emi * tenureMonths;
    const interestAmount = totalPayment - loanAmount;

    // Update the right-side values dynamically
    document.getElementById('emi-amount').innerText = emi.toFixed(2);
    document.getElementById('display-loan-amount').innerText = `₹${loanAmount.toLocaleString()}`;
    document.getElementById('display-interest-amount').innerText = `₹${interestAmount.toFixed(2)}`;
}

    </script>
 <!-- end calculator -->


 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>