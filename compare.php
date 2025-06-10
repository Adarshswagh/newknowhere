<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Comparison</title>

    <link rel="stylesheet" href="css/compare.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<?php include("include/header.php"); ?>

<!-- Banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2>Project Comparison</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
        </div>
    </div>
</section>

<!-- Comparison Tables -->
<section id="compare-table">
    <div class="comparison-container">
        <div id="comparisonTableResidential" class="comparison-table-container"></div>
        <div id="comparisonTableCommercial" class="comparison-table-container"></div>
        <div id="comparisonTablePlotting" class="comparison-table-container"></div>
    </div>

    <script>
        const origin = "https://knowhere.in";

        // Check if the page is running on the specified origin
        if (window.location.origin === origin) {
            const headers = {
                Residential: [
                    "Property Name", "Location", "Total Units", "Towers", "Area", "Possession", "Developer", "PSF", "Total Floor", "Status", "Typology Details", "Actions"
                ],
                Commercial: [
                    "Property Name", "Location", "Area", "Possession", "Developer", "Typology", "Typology Size", "Price", "PSF", "Scheme", "ROI", "USP", "Status", "Actions"
                ],
                Plotting: [
                    "Property Name", "Location", "Plot Size", "Price", "PSF", "Possession", "Developer", "USP", "FSI", "Permissible Floor", "Status", "Actions"
                ]
            };

            const compareList = JSON.parse(localStorage.getItem("comparisonList")) || [];

            function saveToLocalStorage() {
                localStorage.setItem("comparisonList", JSON.stringify(compareList));
            }

            function deleteProperty(index, projectType) {
                compareList.splice(index, 1);
                saveToLocalStorage();
                displayComparisonTables();
            }

            function createVerticalTable(properties, projectType) {
                const table = document.createElement("table");
                table.className = "comparison-table";

                headers[projectType].forEach(header => {
                    const row = document.createElement("tr");
                    const th = document.createElement("th");
                    th.textContent = header;
                    row.appendChild(th);

                    properties.forEach((property, index) => {
                        const td = document.createElement("td");

                        switch (header) {
                            case "Property Name":
                                td.textContent = property.name || "N/A";
                                break;
                            case "Location":
                                td.textContent = property.location || "N/A";
                                break;
                            case "Total Units":
                                td.textContent = property.totalUnits || "N/A";
                                break;
                            case "Towers":
                                td.textContent = property.towers || "N/A";
                                break;
                            case "Area":
                                td.textContent = property.area || "N/A";
                                break;
                            case "Possession":
                                td.textContent = property.possession || "N/A";
                                break;
                            case "Developer":
                                td.textContent = property.developer || "N/A";
                                break;
                            case "PSF":
                                td.textContent = property.psf || "N/A";
                                break;
                            case "Total Floor":
                                td.textContent = property.totalFloor || "N/A";
                                break;
                            case "Status":
                                td.textContent = property.status || "N/A";
                                break;
                            case "Typology Details":
                                if (property.typologyDetails && property.typologyDetails.length > 0) {
                                    const ul = document.createElement("ul");
                                    property.typologyDetails.forEach(unit => {
                                        const li = document.createElement("li");
                                        li.textContent = `Unit Name: ${unit.name}, Price: ${unit.price}, Size: ${unit.size}`;
                                        ul.appendChild(li);
                                    });
                                    td.appendChild(ul);
                                } else {
                                    td.textContent = "N/A";
                                }
                                break;
                            case "Actions":
                                td.innerHTML = `<button class="remove-btn" onclick="deleteProperty(${index}, '${projectType}')">Remove</button>`;
                                break;
                        }

                        row.appendChild(td);
                    });

                    table.appendChild(row);
                });

                return table;
            }

            function displayComparisonTables() {
                document.getElementById("comparisonTableResidential").innerHTML = "";
                document.getElementById("comparisonTableCommercial").innerHTML = "";
                document.getElementById("comparisonTablePlotting").innerHTML = "";

                const residentialProperties = compareList.filter(property => property.type === "Residential");
                const commercialProperties = compareList.filter(property => property.type === "Commercial");
                const plottingProperties = compareList.filter(property => property.type === "Plotting");

                if (residentialProperties.length > 0) {
                    const residentialTable = createVerticalTable(residentialProperties, "Residential");
                    document.getElementById("comparisonTableResidential").appendChild(residentialTable);
                }

                if (commercialProperties.length > 0) {
                    const commercialTable = createVerticalTable(commercialProperties, "Commercial");
                    document.getElementById("comparisonTableCommercial").appendChild(commercialTable);
                }

                if (plottingProperties.length > 0) {
                    const plottingTable = createVerticalTable(plottingProperties, "Plotting");
                    document.getElementById("comparisonTablePlotting").appendChild(plottingTable);
                }

                if (compareList.length === 0) {
                    document.querySelector(".comparison-container").innerHTML = `<p>No properties added to the comparison list yet.</p>`;
                }
            }

            displayComparisonTables();
        } else {
            console.warn("This page is not running on the intended origin: " + origin);
        }
    </script>
</section>

<!-- Enquire Button -->
<div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>

<!-- Enquiry Modal -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "T0yb7stlayE2PO5Hv",
      });
   })();
</script>

<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        
        <div id="feedbackMessage" style="color: #007bff; font-size: 14px; margin-bottom: 10px; display: none;"></div>
        
        <form id="enquiryForm" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="contact" placeholder="Your Contact Number" required>
            <input type="hidden" name="comparisonDetails" id="comparisonDetails" value="">
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Comparison Data</button>
        </form>
    </div>
</div>

<script>
document.getElementById("enquireButton").onclick = function() {
    const compareList = JSON.parse(localStorage.getItem("comparisonList")) || [];
    const formattedMessage = compareList.map(property => {
        return `Name: ${property.name}\nLocation: ${property.location}\nPrice: ${property.price}\nSize: ${property.size}`;
    }).join('\n----------------\n');

    document.getElementById("message").value = formattedMessage;
    document.getElementById("enquiryModal").style.display = "block";
};

document.getElementById("closeModal").onclick = function() {
    document.getElementById("enquiryModal").style.display = "none";
};
</script>

<!-- Footer -->
<?php include("include/footer.php"); ?>

</body>
</html>
