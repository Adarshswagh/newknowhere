-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2025 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestatephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Us', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. ( .com). This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. ( .com) This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'condos-pool.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(9, 'admin', 'admin@gmail.com', '6812f136d636e737248d365016f8cfd5139e387c', '1994-12-06', '1470002569'),
(10, 'knowhere', 'knowwhere@gmail.com', 'e02918e68ee434beb7e403cbe9ddb97a97804255', '1990-01-01', '9136211332');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `main_content` longtext NOT NULL,
  `conclusion` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `main_content`, `conclusion`, `image`, `created_at`) VALUES
(18, 'Residential vs. Commercial Property: Which is the Better Investment?', '<p class=\"main-p\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Real estate has long been considered a reliable investment choice, offering potential for both long-term appreciation and steady income streams. But when it comes to investing, a primary question often arises: should you invest in residential or commercial property? Both avenues can be profitable, but they also come with their own sets of risks and rewards. In this blog, we&rsquo;ll explore the pros and cons of each, focusing on key considerations to help you make an informed decision.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;For additional resources on real estate investment, visit Knowhere, a platform that provides insightful tips, expert advice, and market analysis for property investors.</p>', '<p><span class=\"blog-heading\" style=\"color: #a8894d; font-size: 18pt;\">1.Income Stability and Cash Flow</span><br><br></p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; <strong>Residential Property</strong>: Residential properties, such as apartments, single-family homes, and condos, tend to attract individual renters, who often lease for shorter durations. Rental demand is generally steady, especially in urban areas, as housing is a necessity. This can make residential properties a relatively stable investment. However, the income potential is often limited by market rates in the area, and vacancies can sometimes be high, impacting cash flow. Additionally, landlords may face rent caps or regulations that limit rental income growth.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; <strong>Commercial Property</strong>: Commercial properties, like office buildings, retail spaces, and warehouses, are often leased to businesses for longer terms (usually between five to 10 years). This means that commercial property investors generally enjoy more stable cash flows, as commercial tenants are less likely to leave frequently. Furthermore, commercial leases often include clauses for annual rent escalation, providing a steady increase in income over time. While commercial properties can offer a higher cash flow potential, they are also more susceptible to economic downturns as businesses may downsize or close, increasing the vacancy risk.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; <strong>Verdict</strong>: If you are looking for income stability with moderate risk, residential properties might be preferable. However, if you&rsquo;re comfortable with some level of market volatility in exchange for higher returns, commercial properties can provide better cash flow.</p>\r\n<p><span class=\"blog-heading\" style=\"color: #a8894d; font-size: 18pt;\">2.Market Demand and Vacancy Risk</span><br><br></p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Residential Property</strong>: Demand for residential rental properties tends to remain relatively consistent, as people always need a place to live. Vacancy risks are lower for residential properties, particularly in high-demand urban areas. However, landlords must be prepared to handle shorter lease durations and potentially higher turnover rates. This can lead to additional costs associated with marketing the property and preparing it for new tenants.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Commercial Property</strong>: The demand for commercial spaces can vary significantly based on economic conditions, local market factors, and business trends. For example, office spaces experienced higher vacancy rates during the pandemic due to remote work trends. However, some sectors, such as warehouses and logistics spaces, have seen an increase in demand due to the growth of e-commerce. Commercial vacancies can be more costly since finding new tenants may take longer, particularly if the space is specialized.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Verdict</strong>: Residential properties tend to have a broader, more stable market demand, while commercial properties can offer higher returns but with a more niche and economically sensitive tenant base.</p>\r\n<p><span class=\"blog-heading\" style=\"color: #a8894d; font-size: 18pt;\">3.Management and Maintenance Costs</span><br><br></p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Residential Property</strong>: Managing residential properties is generally simpler and less expensive compared to commercial properties. Maintenance tasks, such as repairs and landscaping, are relatively straightforward, and some responsibilities can even be shared with tenants in multi-family units. However, residential properties often require more frequent tenant turnover management, leading to additional time and effort in screening tenants, collecting rents, and ensuring the property is in good condition.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Commercial Property</strong>: Commercial property management can be more complex and expensive, particularly for multi-tenant buildings or properties with specialized needs, like warehouses or retail spaces. However, many commercial leases operate on a \"triple net\" basis, where the tenant pays for property taxes, insurance, and maintenance. This significantly reduces the financial burden on the landlord, making commercial properties a more passive investment once leased.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Verdict</strong>: Residential properties are generally easier and less costly to manage, while commercial properties may require higher initial management efforts but can become less hands-on if tenants assume maintenance responsibilities.</p>\r\n<p><span class=\"blog-heading\" style=\"color: #a8894d; font-size: 18pt;\">4. Investment Entry Cost and Financing</span><br><br></p>\r\n<p class=\"main-p2\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Residential Property</strong>: Residential properties are often easier to finance, with various loan options available for first-time investors. The entry cost for single-family homes or small apartment units is generally lower than commercial properties, making them more accessible to investors with limited capital. Additionally, residential real estate financing usually offers better terms, including lower interest rates and smaller down payment requirements.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Commercial Property</strong>: Commercial properties require a higher upfront investment and are typically more challenging to finance. Lenders often require larger down payments, sometimes up to 30% of the property value, and higher interest rates. As a result, commercial property investments tend to be more capital-intensive, making them more suited to investors with substantial financial resources or those who can pool resources through partnerships or investment groups.</p>\r\n<p class=\"main-p2\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Verdict</strong>: For investors with limited capital, residential property can be an accessible option, whereas commercial property may be better suited for those with significant financial resources.</p>\r\n<p><span class=\"blog-heading\" style=\"color: #a8894d; font-size: 18pt;\">5.Appreciation Potential and Investment Security</span><br><br></p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Residential Property</strong>: Residential properties often appreciate steadily over time, especially in areas with population growth and high housing demand. Residential properties can be relatively stable investments, offering long-term appreciation and steady rental income. However, the appreciation rate can be limited by local zoning laws, rent controls, and property-specific factors.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Commercial Property</strong>: Commercial properties generally have higher appreciation potential, particularly when located in prime areas with business growth. Since commercial properties are often valued based on the income they generate, well-maintained properties in high-demand locations can experience substantial value increases. However, market fluctuations and economic downturns can significantly affect commercial property values, making them a riskier investment compared to residential properties.</p>\r\n<p class=\"main-p2\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Verdict</strong>: If you seek steady appreciation with moderate risk, residential properties are ideal. For higher appreciation potential, especially in booming business areas, commercial properties may be the better choice, albeit with higher risk.</p>', '<p><span style=\"color: #a8894d; font-size: 18pt;\">Final Thoughts: Choosing the Right Investment for You</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp; &nbsp; &nbsp; &nbsp;Both residential and commercial properties offer unique advantages and investment opportunities. Your choice should be based on your financial goals, risk tolerance, and willingness to manage property complexities. Residential properties are often ideal for new investors seeking stability and lower management intensity, while commercial properties appeal to those aiming for higher returns with the potential for greater risk.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp; &nbsp; &nbsp; &nbsp;For more insights on real estate investing, check out Knowhere, where you can access expert advice and stay updated on market trends. Whether you&rsquo;re leaning towards residential or commercial property, a well-informed investment strategy is key to achieving long-term success in real estate.</span></p>', 'blog1.png', '2025-01-24 12:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(9, 'Olisphis', 3),
(10, 'Alegas', 2),
(11, 'Floson', 2),
(12, 'Ulmore', 7),
(13, 'Awrerton', 15);

-- --------------------------------------------------------

--
-- Table structure for table `commercialleasing_projects`
--

CREATE TABLE `commercialleasing_projects` (
  `pid` int(100) NOT NULL,
  `project_title` text NOT NULL,
  `project_description` text NOT NULL,
  `project_location` text NOT NULL,
  `project_area` varchar(100) NOT NULL,
  `typology` varchar(100) NOT NULL,
  `maintainance` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `oldproject` varchar(100) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(300) NOT NULL,
  `image3` varchar(300) NOT NULL,
  `image4` varchar(300) NOT NULL,
  `image5` varchar(300) NOT NULL,
  `featured` int(10) NOT NULL,
  `city` text NOT NULL,
  `developer` varchar(100) NOT NULL,
  `psf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commercialleasing_projects`
--

INSERT INTO `commercialleasing_projects` (`pid`, `project_title`, `project_description`, `project_location`, `project_area`, `typology`, `maintainance`, `size`, `price`, `oldproject`, `image1`, `image2`, `image3`, `image4`, `image5`, `featured`, `city`, `developer`, `psf`) VALUES
(1, 'Kasturi Balmoral Hillside', 'nou[s9pdgeqs', 'Baner', '4 Acre', 'Shop', '2500', '15000', '150000', '15 Jan', '2.png', '', '', '', '', 1, 'Pune', 'Kasturi Group', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_projects`
--

CREATE TABLE `commercial_projects` (
  `pid` int(100) NOT NULL,
  `project_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `project_description` text NOT NULL,
  `project_location` text NOT NULL,
  `project_area` varchar(100) NOT NULL,
  `typology` varchar(100) NOT NULL,
  `scheme` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `roi` varchar(100) NOT NULL,
  `tag` text NOT NULL,
  `component` varchar(100) NOT NULL,
  `usp` varchar(1000) NOT NULL,
  `psf` varchar(1000) NOT NULL,
  `possession` varchar(100) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(300) NOT NULL,
  `image3` varchar(300) NOT NULL,
  `image4` varchar(300) NOT NULL,
  `image5` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `featured` int(10) NOT NULL,
  `city` text NOT NULL,
  `developer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commercial_projects`
--

INSERT INTO `commercial_projects` (`pid`, `project_title`, `project_description`, `project_location`, `project_area`, `typology`, `scheme`, `size`, `price`, `roi`, `tag`, `component`, `usp`, `psf`, `possession`, `image1`, `image2`, `image3`, `image4`, `image5`, `status`, `featured`, `city`, `developer`) VALUES
(48, 'TRIBECA HIGHSTREET', 'Tribeca was founded in 2012 and includes five projects focusing on issues such as asset monetization, product quality, and credibility. Tribeca ensures that the idea and execution of the 4 million square feet of under-construction space and INR 5,000 crore in gross development value are in line with the high international standards of Trump.', 'NIBM', '12 Acre', 'Shop', 'PRE LEASEDASSURED RENT ', '400-800 sqft', '3 Cr-10 Cr', '7%', '', '', 'HIGHSTREET', '', '', 'developers01.jpg', '', '', '', '', 'Early Possession', 1, 'Pune', 'TRIBECA'),
(49, 'SOMANI PLAZA', 'Somani Developers, is a real estate development and management firm with five branch offices in Mumbai. Formed in 2010 by N.P. Somani. Creating an extensive reach in the Residential, Township, and commercial sectors, Somani Group, has given decades of commitment towards the development of Quality fortune. They painstakingly employed expertise in the process to construct a stronghold in the Pune Real estate industry.', 'TATHWADE', '1 Acre', 'Shop', 'PRE LEASEDASSURED RENT 7%', '172 -800 sqft', '1.40 Cr', '6 TO 7%', '', '', '', '28000', 'Dec 2026', 'images.jpeg', '', '', '', '', 'Early Possession', 0, 'Pune', 'SOMANI CENTER'),
(54, 'SOMANI PLAZA', 'Somani Centre is a new-generation project, which has all modern facilities and amenities. Not just strategic location, Tathawade has promising infrastructure as compared to other commercial zones in Pune West with improving connectivity. There are multiple property options and types available for investment in Somani Centre, which caters to various budget ranges. This project has all major facilities to offer to cater to all kinds of working professionals.', 'TATHWADE', '1 Acres', 'Office', '', '172 -800 sqft', '1.40 cr', '7%', '', '', '', '28000', 'Dec 2026', 'images.jpeg', '', '', '', '', 'Early Possession', 0, 'Pune', 'SOMANI CENTER'),
(55, 'ONE PLACE FC', 'Strategically positioned on Fc Road, One Place offers exceptional visibility and accessibility amidst a vibrant commercial hub. With modern amenities, eco-friendly features, & meticulously designed interiors, it sets a new benchmark for prestigious business environments.', 'FC ROAD', '1acr /1 tower /30 story ', 'Shop', 'ASSURED RENTAL 6.5 %', '685/1608', '2cr', '7%', '', '', 'Main fc road ', '', 'Dec 2026', 'new_14569469301670997991.jpg', '', '', '', '', 'Ready To Move', 0, 'Pune', 'MITTAL'),
(56, 'ONE PLACE FC', 'Strategically positioned on Fc Road, One Place offers exceptional visibility and accessibility amidst a vibrant commercial hub. With modern amenities, eco-friendly features, & meticulously designed interiors, it sets a new benchmark for prestigious business environments.', 'FC ROAD', '1acr /1 tower /30 story ', 'Office', 'ASSURED RENTAL 6.5 %', '685/1608', '2cr', '7%', '', '', 'Main fc road ', '', 'Dec 2026', 'fc1.jpeg', '', '', '', '', 'Ready To Move', 0, 'Pune', 'MITTAL'),
(57, 'PLATINUM 9', 'We are delighted to introduce our prestigious commercial project that embodies excellence, innovation, and sophistication.', 'SUS', '', 'Shop', '', '286-2000 SQFT', '85 L Ownwords', '6%', '', '', '', '', 'Ready to move ', '33.jpg', '33.jpg', '', '', '', 'Early Possession', 0, 'Pune', 'PLATNIUM DEVLOPER'),
(58, 'PLATINUM 9', 'We are delighted to introduce our prestigious commercial project that embodies excellence, innovation, and sophistication.', 'SUS', '', 'Office', '', '286-2000 SQFT', '85 L Ownwords', '6%', '', '', '', '', 'Ready to move ', '33.jpg', '', '', '', '', 'Early Possession', 0, 'Pune', 'PLATNIUM DEVLOPER'),
(60, 'HIGH RISE HUB', '', 'WAKAD', '1 Acre', 'Office', '', '400-20000sqft', '2.55 Cr', '6%', '', '', 'Highrise tower /32-story/road touch property ', '', 'Dec 2028', 'high.webp', '', '', '', '', 'Pre Launch', 1, 'Pune', 'PLATNIUM DEVLOPER'),
(61, 'HIGH RISE HUB', '', 'WAKAD', '1 Acre / 52 Guntha', 'Shop', '', '400-20000sqft', '2.55 Cr', '6%', '', '', 'Highrise tower /32-story/road touch property ', '', 'Dec 2028', 'high.webp', '', '', '', '', 'Pre Launch', 1, 'Pune', 'PLATNIUM DEVLOPER'),
(62, '24K ALTURA', 'The Golden Ratio symbolises an ever-evolving way of life. We bring you a unique way of living where your dream home is carved from 24 golden principles.\r\nEvery corner will be crafted to perfection, and your every whim will be catered to with utmost care. It is where you will create a lasting impression on your guests without saying a word. This is where you will start living the iconic life!', 'BANER', '2 Acres', 'Shop', '', '600 Sqft', '4 CR', '6%', '', '', 'mumabi pune highwayrand value', '', 'Dec 2026', '24-K-Altura-Baner-Pune-image-2.jpg', '', '', '', '', '', 0, 'Pune', 'KPDL'),
(63, 'GODREJ RIVER CREST', 'IT IS TRULY A PRIVILEGE TO WAKE UP TO MESMERISING RIVERSIDE VIEWS DAY AFTER DAY\r\n\r\n', 'KHARADI', '', 'Shop', '', '', '', '', '', '', '', '', '', 'f8700b35-3f79-4d9f-aaab-a63855636006.png', '', '', '', '', '', 0, 'Pune', 'GODREJ'),
(64, 'GODREJ THE GALE', 'Welcome to The Gale, a haven of well-being where luxury, leisure and nature become your lifelong companions. Surround yourself with 2.5+ acres of lush greens, that make every moment joyous, and every experience extraordinary. Here, 12+ acres of Central Greens and Playgrounds, ensure nature is always at your doorstep and happiness is always within reach. Come, live a life of pure joy at the #LungsOfPune.', 'HINJEWADI PH1', '', 'Shop', '', '645 Sqft', '2.68 Cr', '6%', '', '', 'Brand Value ', '', '', 'gale.jpg', '', '', '', '', '', 0, 'Pune', 'GODREJ'),
(66, 'KWT', 'A growing business always deserves a world-class space that signals your aspiration and commitment to the world.', 'HINJEWADI PH1', '', 'Shop', '', '', '', '', '', '', 'old mumbai pune highway near to chinchwad railway station , and metro station, alrerady devloped retail market of PCMC', '', '', 'Screenshot 2025-01-20 164515.png', '', '', '', '', 'Early Possession', 0, 'Pune', 'KOHINOOR'),
(67, 'KWT', 'A growing business always deserves a world-class space that signals your aspiration and commitment to the world.\r\n\r\n', 'HINJEWADI PH1', '', 'Office', '', '', '', '', '', '', 'old mumbai pune highway near to chinchwad railway station , and metro station, alrerady devloped retail market of PCMC', '', '', 'Screenshot 2025-01-20 164515.png', '', '', '', '', 'Early Possession', 0, 'Pune', 'KOHINOOR'),
(68, 'KOHINOOR BUSINESS TOWER', 'Situated at the bustling New Baner, Satori by Kohinoor stands in a league of its own because of its low-density layout, nature-centric features, world-class amenities and opulently designed spaces. Watch this video to know more about this enlightened experience.', 'BANER', '2.5 Acres', 'Office', '', '2700 Sqft', '2 Cr', '6%', '', '', 'pancard club road ', '', 'December 2027', 'kohinoor.jpg', '', '', '', '', 'Early Possession', 1, 'Pune', 'KOHINOOR'),
(69, 'Suratwala Mark Plazzo', '', 'HINJEWADI PH1', '3.5 Acres', 'Shop', '', '280 Sqft', '70 Lpa', '', '', '', 'Located in epicentre of hinjewadi ph1', '', 'Dec 2026', 'suratwala.jpg', '', '', '', '', 'Early Possession', 0, 'Pune', 'SURATWALA'),
(70, 'Suratwala Mark Plazzo', '', 'HINJEWADI PH1', '3.5 Acres', 'Office', '', '280 Sqft', '70 Lpa', '', '', '', 'Located in epicentre of hinjewadi ph1, already operational Retail and Offices', '', 'Dec 2026', 'suratwala.jpg', '', '', '', '', 'Early Possession', 0, 'Pune', 'SURATWALA'),
(71, 'NANDAN PROBIZ', 'With over two decades of experience in the real estate industry, Nandan Buildcon has established a legacy of trust and excellence. ', 'BALLEWADI', '', 'Shop', '', '', '1.59/1.83cr', '', '', '', '1.59/1.83cr	ballewadi highstreet,nighbour with Semens and Cummins ', '', 'Dec 2025', 'nandan.jpeg', '', '', '', '', 'Early Possession', 0, 'Pune', 'NANDAN '),
(72, 'NANDAN PROBIZ', 'With over two decades of experience in the real estate industry, Nandan Buildcon has established a legacy of trust and excellence.', 'BALLEWADI', '', 'Office', '', '', '1.59/1.83cr', '', '', '', 'ballewadi highstreet,nighbour with Semens and Cummins ', '', 'Dec 2025', 'nandan.avif', '', '', '', '', 'Early Possession', 0, 'Pune', 'NANDAN'),
(73, 'GAURAV ICON TOWER', 'Welcome to Wakad, one of the fastest growing business suburbs of Pune. Centrally located on the vibrant western side of the city, it is surrounded by developed and upcoming localities.\r\nThere’s Baner-Balewadi to its south, Aundh to its east and Hinjawadi to its west. What’s more; being residentially developed areas, Wakad and all its surrounding localities are sources of rich talent pool for modern businesses.', 'WAKAD', ' 4916 SQFT', 'Office', '', '2000 sqft', '2 Cr', '', '', '', 'Highway Facing,opposite to TIP TOP hotel,centre of west pune that is wakad - hinjewadi fly over', '', 'December 2024', 'gaurav.jpg', '', '', '', '', 'Early Possession', 1, 'Pune', 'KARANTEJ DEVLOPER'),
(74, 'SIDHASHILA', 'Siddhashila Group is a leading real estate developer in Pune with a reputation of delivering quality homes to numerous happy families. Intelligent design and efficient execution are characteristics that bear testimony to timely completion of every Siddhashila project. Known for its meticulous design & construction, the group has evolved as a premium real estate brand in Pune.', 'PUNAWALE', '', 'Shop', '', '300 Sqft', '60 lakh', '6%', '', '', 'Highway facing,near to WTC and IT hub,', '', '', 'sidhashila.png', '', '', '', '', 'Ready To Move', 0, 'Pune', 'SIDHASHILA'),
(75, 'SIDHASHILA', 'Siddhashila Group is a leading real estate developer in Pune with a reputation of delivering quality homes to numerous happy families. Intelligent design and efficient execution are characteristics that bear testimony to timely completion of every Siddhashila project. Known for its meticulous design & construction, the group has evolved as a premium real estate brand in Pune.', 'PUNAWALE', '', 'Office', '', '300 Sqft', '60 lakh', '6%', '', '', 'Highway facing,near to WTC and IT hub,', '', '', 'sidhashila.png', '', '', '', '', 'Ready To Move', 0, 'Pune', 'SIDHASHILA'),
(76, 'Godrej Skyline ', 'This new launch at Koregaon Park is an exclusive residential development spanning 3.7 acres, featuring four majestic towers.', 'Koregaon Park ', '3.75 Acres', 'Showroom', '', '743 - 1533 Sqft', '6 Cr', '6 - 7 %', '', '', 'Road Facing shops, ultra luxury residential and commercial hub of pune.', '', '', 'godrej.png', '', '', '', '', 'Pre Launch', 0, 'Pune', 'Godrej  devlopers');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(7, ' ', 'asda@asd.com', '8888885454', ' .com', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(7, 28, 'This is a demo feedback in order to use set it as Testimonial for the site. Just a simply dummy text rather than using lorem ipsum text lines.', 1, '2022-07-23 16:07:08'),
(8, 33, 'This is great. This is just great. Hmmm, just a dummy text for users feedback.', 1, '2022-07-23 21:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `name`, `email`, `contact`, `message`, `created_at`) VALUES
(18, 'Adarsh Sanjivan Waghmare', 'waghmareadarsh1432@gmail.com', '7020727854', 'Hello I want to discuss', '2024-11-18 09:45:45'),
(19, 'Adarsh Sanjivan Waghmare', 'waghmareadarsh1432@gmail.com', '9136211332', 'aaqaqaqqqqqqqqqqqqqqqqq', '2024-11-18 10:41:48'),
(20, 'Adarsh Sanjivan Waghmare', 'aday1254@gmail.com', '9356895320', 'NIce', '2024-11-18 10:43:28'),
(21, 'Adarsh Sanjivan Waghmare', 'adar@gmail.com', '7083604025', '12Adarsh', '2024-11-18 10:47:32'),
(22, 'Adarsh Sanjivan Waghmare', 'waghmareadarsh1432@gmail.com', '7482025922', 'knowhere', '2024-11-18 11:03:50'),
(23, 'Adarsh Sanjivan Waghmare', 'adarsh1432@gmail.com', '7020727854', 'Hello', '2024-12-09 06:32:24'),
(24, 'Sneha ghaiwat ', 'nehaghaiwat@gmail.com', '9356713037', 'Looking for property in Baner 2bhk nearing possession. Budget 80lc ', '2025-02-05 14:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `plotting_projects`
--

CREATE TABLE `plotting_projects` (
  `pid` int(100) NOT NULL,
  `project_title` text NOT NULL,
  `project_description` text NOT NULL,
  `project_location` text NOT NULL,
  `plot_area` varchar(100) NOT NULL,
  `plot_size` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `psf` int(100) NOT NULL,
  `possesion` varchar(100) NOT NULL,
  `usp` varchar(1000) NOT NULL,
  `contact_person` text NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `roi` varchar(1000) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(300) NOT NULL,
  `image3` varchar(300) NOT NULL,
  `image4` varchar(300) NOT NULL,
  `image5` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `featured` int(10) NOT NULL,
  `feature` varchar(1000) NOT NULL,
  `fsi` int(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `developer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `hall` int(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `totalfloor` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `isFeatured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `floor`, `size`, `price`, `location`, `city`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `totalfloor`, `date`, `isFeatured`) VALUES
(25, 'Zills Home', '', 'apartment', '3 BHK', 'sale', 4, 2, 0, 1, 1, '1st Floor', 1869, 219690, '39 Bailey Drive', 'Floson', 'Colotana', '<p>&nbsp;</p>\n<!---feature area start--->\n<div class=\"col-md-4\">\n<ul>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\n</ul>\n</div>\n<div class=\"col-md-4\">\n<ul>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>Yes</li>\n</ul>\n</div>\n<div class=\"col-md-4\">\n<ul>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\n</ul>\n</div>\n<!---feature area end---->\n<p>&nbsp;</p>', 'illuminated-house-at-night-BQA8QZC-1024x683.jpg', 'illuminated-house-at-night-BQA8QZC-1024x683.jpg', 'modern-house-exterior-E3A7NAJ-1024x683.jpg', 'spacious-interior-with-fireplace-and-open-kitchen-PZ2NXEX-1024x683.jpg', 'spacious-interior-with-fireplace-and-open-kitchen-PZ2NXEX-1024x683.jpg', 30, 'available', 'modern-house-exterior-E3A7NAJ-1024x683.jpg', 'modern-house-exterior-E3A7NAJ-1024x683.jpg', 'tropical-water-home-villas-P5ARFZZ-1024x683.jpeg', '5 Floor', '2022-07-22 22:29:20', 1),
(30, 'Main', '<p>&nbsp;xiasas 9ushbasnes un</p>', 'house', '4 BHK', 'rent', 2, 2, 2, 2, 2, '1st Floor', 12000, 25000, '305, jj heights, hinjewadi, pune', 'pune', 'Maharashtra', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'modern-house-facade-C8VH66F-1024x683.jpg', 'spacious-interior-with-fireplace-and-open-kitchen-PZ2NXEX-1024x683.jpg', 'illuminated-house-at-night-BQA8QZC-1024x683.jpg', 'tropical-water-home-villas-P5ARFZZ-1024x683.jpeg', 'illuminated-house-at-night-BQA8QZC-1024x683.jpg', 30, 'available', 'modern-house-facade-C8VH66F-1024x683.jpg', 'modern-house-exterior-E3A7NAJ-1024x683.jpg', 'spacious-interior-with-fireplace-and-open-kitchen-PZ2NXEX-1024x683.jpg', '3 Floor', '2024-10-08 17:03:10', 1),
(31, 'hinjewadi', '<p>hello</p>', 'RESIDENTIAL PROPERTY', '2 BHK', 'rent', 5, 5, 2, 8, 2, '1st Floor', 150000, 1500, '305, jj heights, hinjewadi, pune', 'Mumbai, Maharashtra, India', 'Maharashtra', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'modern-house-exterior-E3A7NAJ-1024x683.jpg', 'spacious-interior-with-fireplace-and-open-kitchen-PZ2NXEX-1024x683.jpg', 'modern-house-facade-C8VH66F-1024x683.jpg', 'tropical-water-home-villas-P5ARFZZ-1024x683.jpeg', 'illuminated-house-at-night-BQA8QZC-1024x683.jpg', 30, 'available', 'modern-house-facade-C8VH66F-1024x683.jpg', 'modern-house-facade-C8VH66F-1024x683.jpg', 'spacious-interior-with-fireplace-and-open-kitchen-PZ2NXEX-1024x683.jpg', '8 Floor', '2024-10-08 17:41:34', 1),
(32, 'Laxmi chawk ', '<p>Main&nbsp;</p>', 'RESIDENTIAL PROPERTY', '3 BHK', 'sale', 5, 3, 1, 5, 1, '3rd Floor', 400, 55555, '503, Tirupati Heights, 7 Star city,', 'Pune', 'Maharashtra', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'bannerabout.jpg', 'bannerh.jpg', 'ab1.jpg', 'main-bg.jpg', 'bannerf.jpg', 30, 'available', 'real-estate.jpg', 'commercial_property.png', 'ab2.jpg', '4 Floor', '2024-10-16 12:04:30', 1),
(33, 'bavdhan', '<p>IMportant</p>', 'COMMERCIAL PROPERTY', '3 BHK', 'rent', 1, 3, 5, 5, 2, '2nd Floor', 250000, 55555, '503,Konark PG, hinjewadi, pune', 'Pune', 'Maharashtra', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ab1.jpg', 'real-estate.jpg', 'bannerabout.jpg', 'plotting_property.png', 'main-bg.jpg', 30, 'available', 'main-bg.jpg', 'bannerabout.jpg', 'residential_property.png', '5 Floor', '2024-10-16 12:05:41', 0),
(34, 'JJ Heights', '<p>NIce place</p>', 'RESIDENTIAL PROPERTY', '2 BHK', 'rent', 2, 2, 5, 1, 1, '2nd Floor', 250000, 15000, '503,Konark PG, hinjewadi, pune', 'Pune', 'Maharashtra', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ab2.jpg', 'ab1.jpg', 'bannerabout.jpg', 'blog1.jpg', 'bannerh.jpg', 30, 'available', 'property-video-thumbnail.png', 'residential_property.png', 'floor-display.png', '7 Floor', '2024-10-17 17:56:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `residential_projects`
--

CREATE TABLE `residential_projects` (
  `pid` int(100) NOT NULL,
  `project_title` mediumtext NOT NULL,
  `project_description` longtext DEFAULT NULL,
  `project_location` text NOT NULL,
  `project_area` varchar(1000) NOT NULL,
  `total_towers` varchar(1000) NOT NULL,
  `total_units` varchar(1000) NOT NULL,
  `possession` varchar(1000) NOT NULL,
  `feature` longtext NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `image2` varchar(300) DEFAULT NULL,
  `image3` varchar(300) NOT NULL,
  `image4` varchar(300) NOT NULL,
  `image5` varchar(300) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `featured` int(10) DEFAULT NULL,
  `unit_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`unit_details`)),
  `usp` varchar(100) NOT NULL,
  `total_floor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city` text NOT NULL,
  `psf` varchar(300) NOT NULL,
  `developer` varchar(300) NOT NULL,
  `project_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residential_projects`
--

INSERT INTO `residential_projects` (`pid`, `project_title`, `project_description`, `project_location`, `project_area`, `total_towers`, `total_units`, `possession`, `feature`, `image1`, `image2`, `image3`, `image4`, `image5`, `status`, `featured`, `unit_details`, `usp`, `total_floor`, `city`, `psf`, `developer`, `project_slug`) VALUES
(115, 'Jade skyline', 'Twinning with the distinctive charm of Kalpataru Jade Residences, Kalpataru Jade Skyline is another architectural masterpiece that offers the perfect blend of Baner’s vibrant urban energy and peaceful hillside tranquility. This thoughtfully designed development redefines hillside living with spacious 2 & 3 BHK homes, each crafted to inspire your creativity and provide a seamless space for your life’s story to unfold.\r\nSkyline residents also enjoy the luxury of premium features, including split inverter ACs in every bedroom, false ceilings, a fully equipped modular kitchen, glass partitions, and shower panels with boilers in the bathrooms. With two private decks that bring nature indoors and a range of exclusive rooftop amenities, every corner of your home offers a new level of comfort. At Kalpataru Jade Skyline, life truly becomes a charm when home is where your heart is.', 'Baner', '3 Acre', '5  ', '400 ', 'Dec 2026', '', '662a4a8d9e837.jpg', '', '', '', '', 'Early Possession', 0, '[{\"name\":\"1 BHK\",\"size\":\"350\",\"price\":\"62 Lakh\"},{\"name\":\"3 BHK\",\"size\":\"1190\",\"price\":\"1.70 Cr\"},{\"name\":\"1 BHK\",\"size\":\"\",\"price\":\"\"}]', '', 'Ground podium 8 level parking 16 floors', 'Pune', ' ', 'Kalpataru Properties', ''),
(117, 'Majestique Ornate', 'Majestique Ornate is a project by Majestique Landmarks in Pune. It is a Under Construction project. Majestique Ornate offers some of the most conveniently designed Apartment. Located in Baner, it is a residential project. The project is spread over 3.25 Acres . It has 302 units. There are 2 buildings in this project.', 'Baner', '3.25 Acre', '2 ', '300 Units', 'Dec 2026', '', 'a1.webp', 'g1.webp', 'g2.webp', '', '', 'Early Possession', 0, '[{\"name\":\"3 BHK\",\"size\":\"1141/1260\",\"price\":\"1.61 to 1.98 cr\"},{\"name\":\"3 BHK\",\"size\":\"1419\",\"price\":\"2.11 to 2.38cr\"},{\"name\":\"4 BHK\",\"size\":\"1680/1841\",\"price\":\"2.65 to 3 cr\"}]', '', '5+32 Floors', 'Pune', '', 'Majestic Landmarks', ''),
(122, '24K altura', '24K Altura offers a setup of 3 BHK & 4 BHK premium residences with a conception of fine living, adding to the many eye-catching attractions that make the 24K so sought after. Explore the latest residential projects in Baner, Pune, and discover the allure of upscale living with our selection of 4 BHK & 3 BHK flats in Baner, Pune. Our portfolio boasts a range of flats in Baner that seamlessly blend modern aesthetics with functionality. Nestled in the heart of Baner, these luxurious flats redefine urban living, offering a perfect amalgamation of space, style, and comfort.', 'Baner', '7.5 Acre', '6', '', 'December 2025', '', 'g1-sm.jpg', 'g2-sm.jpg', 'g3-sm.jpg', '', 'g4.jpg', 'Early Possession', 1, '[{\"name\":\"3 BHK\",\"size\":\"1499\",\"price\":\"2.15 Cr\"},{\"name\":\"\",\"size\":\"1916\",\"price\":\"2.90 Cr\"}]', '', '4+ 35 Floors', 'Pune', '', 'Kolte patil', ''),
(133, ' Balmoral Hillside', 'Imagine waking up to a scenic hillside view. Imagine the first sip of coffee while the crisp morning breeze caresses you. Imagine an invigorating morning routine or a leisurely stroll amidst the hills. Imagine a life meticulously woven around the hillside. Now live it.\r\nWelcome to The Balmoral Hillside by Kasturi. Nestled in one of Baner’s greenest neighbourhoods, watch a charming lifestyle unfold in all its glory.', 'Baner', '4 acres', '2', '250', 'Posession 2027', '', 't5a7ptr_1719554167_501087721_optOrig.webp', '', '', '', '', 'Early Possession', 1, '[{\"name\":\"3 BHK\",\"size\":\"2499\",\"price\":\"4.45 Cr + Taxes\"},{\"name\":\"3 BHK\",\"size\":\"4478\",\"price\":\"8.08 Cr + Taxes\"}]', '', '37', 'Pune', '', 'Kasturi Group', ''),
(134, 'LIvience Aleenta ', 'Livience, as a brand, marks the coming together of three of Pune’s best real estate developers - Kohinoor Group, Welworth Realty and Shree Bal Developers - with a resolve to redefine luxury living by pioneering new concepts that go on to become benchmarks for others to follow.\r\nWith a combined legacy of over 85 years and a combined delivery of 100+ residential & commercial projects across Pune, Livience imbibes the best of the vision, experience and values to deliver world-class luxury life spaces to discerning customers in Pune and soon in the rest of Maharashtra.', 'Baner', '6 Acre', '5 ', '', 'Dec 28', '', '01.jpg', '', '', '', '', 'Early Possession', 0, '[{\"name\":\"3 BHK\",\"size\":\"1438\",\"price\":\"2.25 Cr\"},{\"name\":\"4 BHK\",\"size\":\"1900\",\"price\":\"3.10 Cr\"},{\"name\":\"3 BHK\",\"size\":\"2200\",\"price\":\"3.45 Cr\"}]', '', '5 Level Parking And 30 Floors', 'Pune', '', 'LIvience Aleenta ', ''),
(135, '24K Mannor', '24K Manor at Pimple Nilakh, Pune by Kolte Patil Developers is a premium residential project offering spacious 3 & 4 BHK flats. Designed for those seeking a luxurious lifestyle, it features modern amenities including a clubhouse, swimming pool, landscaped gardens, and a fitness center, all within a secure and tranquil environment. With its prime location, 24K Manor provides excellent connectivity to major business hubs, top schools, and shopping centers. Elevate your living experience in one of Pune’s most desirable neighborhoods.', 'PIMPLE NILAKH', '3 Acres', '2', '', 'Dec 26', '', '24k1.jpg', '24k2.jpg', '', '', '', 'Early Possession', 1, '[{\"name\":\"3 BHK\",\"size\":\"1433 Sq.Ft\",\"price\":\"2.55 Cr\"},{\"name\":\"4 BHK\",\"size\":\"1823 Sq.Ft\",\"price\":\"3.20 Cr\"}]', '', '36 floors ', 'Pune', '', 'Kolte patil', ''),
(137, 'The Canary', 'Experience luxury living at The Canary Balewadi, where style meets convenience. Our meticulously designed Kunal Canary residences cater to those who appreciate designer living. Located in the vibrant heart of Balewadi, our 4 & 3 BHK apartments offer elegance and sophistication with contemporary architecture and top-tier finishes, ensuring a dream home experience tailored to your lifestyle.', 'Balewadi', '7 Acres', '8', '26', 'Dec 2022', '', 'banner.jpg', '', '', '', '', 'Ready To Move', 0, '[{\"name\":\"2 BHK\",\"size\":\"829 Sq.Ft\",\"price\":\"1.10 Cr\"},{\"name\":\"3 BHK\",\"size\":\"1109 / 1370\",\"price\":\"1.44 / 1.81 cr\"},{\"name\":\"4 BHK\",\"size\":\"1885\",\"price\":\"2.60 Cr\"}]', '', '30 Floors ', 'Pune', '', 'KUNAL', ''),
(138, 'The Balmoral Riverside', 'Steeped in luxury and adorned with a serene river view, soak in the experience of riverside living in these chic residences at The Balmoral Riverside, Balewadi. An exclusive offering by Kasturi, The Balmoral Riverside presents a life less ordinary in one of Pune’s most sought-after locations.', 'Balewadi', '6 Acres', '4', '500', '2027', '', '336AE46B-61E0-4179-A3B7-4841D2142EBE.webp', '', '', '', '', 'Early Possession', 1, '[{\"name\":\"3 BHK\",\"size\":\"1400 Sq.Ft\",\"price\":\"2.11 Cr\"},{\"name\":\"4 BHK\",\"size\":\"1860  Sq.Ft\",\"price\":\"2.88 Cr\"}]', '', '37 Floors ', 'Pune', '', 'KASTURI', ''),
(139, 'Kasturi Balmoral towers', 'A distinct offering from The Balmoral Collection, The Balmoral Towers offers a lifestyle that has been scrupulously put together with carefully chosen specifications & features to help build a vibrant community of like-minded families.', 'Balewadi', '6 Acres', '4', '550', '2027', '', 'towes.jpg', '', '', '', '', 'Early Possession', 0, '[{\"name\":\"3 BHK\",\"size\":\"1240 Sq.Ft\",\"price\":\"1.81 Cr\"},{\"name\":\"4 BHK\",\"size\":\"1560 Sq.Ft\",\"price\":\"2.50 Cr\"}]', '', '37 Floors', 'Pune', '', 'KASTURI', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(2, 'Colotana'),
(3, 'Floaii'),
(4, 'Virconsin'),
(7, 'West Misstana\n\n'),
(9, 'New Pennrk\n\n'),
(10, 'Louiswa\n\n'),
(15, 'Wisginia\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`) VALUES
(45, 'Adarsh', 'waghmareadarsh1432@gmail.com', '9136211332', '$2y$10$qLd8qGGluM9URWP5hYedNuCSkv9gGztVq9OjIWP3s2k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `commercialleasing_projects`
--
ALTER TABLE `commercialleasing_projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `commercial_projects`
--
ALTER TABLE `commercial_projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plotting_projects`
--
ALTER TABLE `plotting_projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `residential_projects`
--
ALTER TABLE `residential_projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `commercialleasing_projects`
--
ALTER TABLE `commercialleasing_projects`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commercial_projects`
--
ALTER TABLE `commercial_projects`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `plotting_projects`
--
ALTER TABLE `plotting_projects`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `residential_projects`
--
ALTER TABLE `residential_projects`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
