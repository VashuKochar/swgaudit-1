<?php
    $title = "Test your defence against web-based Zero-Day Threats";
    $description = "Can your perimeter security stop modern Malware, DNS Tunnelling, Phishing attacks?";
    $keywords = "Perimeter Security, Network Security, Enterprise Web Security, Security Test, UTM, Firewall, SWG, Secure Web Gateway, Layer 7, Cybersecurity, Phishing, Malware, Data Theft, Cyber-Slacking, DNS Tunnelling, URL Filtering, Web Filtering, Threat Intelligence, Threat Detection, Threat Prevention, Zero-Day Exploit, Zero-Day Attack";
    $url = "https://swgaudit.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title><?php echo $title ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>" >
    <meta name="keywords" content="<?php echo $keywords ?>" >
    <meta name="author" content="SWG Audit">

    <meta property="og:title" content="<?php echo $title ?>" >
    <meta property="og:description" content="<?php echo $description ?>" >
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $url ?>" >
    <meta property="og:image" content="<?php echo $url ?>/opengraph.png" >

    <!-- Albert Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    
    <link rel="icon" href="https://swgaudit.com/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://swgaudit.com/images/apple-touch-icon.png">
    
    <link rel="stylesheet" href="https://swgaudit.com/globals.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../snippets/header.php' ?>
    <main class="container">
        <div class="container-top">
            <div class="container-left">
                <h1>Evaluate your Perimeter Security against <span class="highlight-text">Layer 7 threats</span></h1>
                <p>
                    Traditional URL categorization methods are failing under the surge of newly registered domains and URL reputation evasion techniques.<br>
                    Use SWG-Audit to safely simulate evasive web-based attacks without relying on outdated reputation databases.
                </p>
            </div>
            <div class="container-right">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container-bottom">
            <div class="category-card">
                <a href="https://phishing.swgaudit.com/">
                    <h3>Phishing</h3>
                    <img src="images/phishing-card.svg" alt="Phishing Icon" loading="lazy" />
                </a>
            </div>
            <div class="category-card">
                <a href="https://malware.swgaudit.com/">
                    <h3>Malware</h3>
                    <img src="images/malware-card.svg" alt="Malware Icon" loading="lazy" />
                </a>
            </div>
            <div class="category-card">
                <a href="https://datatheft.swgaudit.com/">
                    <h3>Data Theft</h3>
                    <img src="images/datatheft-card.svg" alt="Data Theft Icon" loading="lazy" />
                </a>
            </div>
            <div class="category-card">
                <a href="https://cyberslacking.swgaudit.com/">
                    <h3>Cyberslacking</h3>
                    <img src="images/cyberslacking-card.svg" alt="Cyberslacking Icon" loading="lazy" />
                </a>
            </div>
        </div>
    </main>
    <?php include '../snippets/footer.php' ?>
    <script src="https://swgaudit.com/global.js"></script>
    <script src="script.js"></script>
</body>
</html>
