<?php
declare(strict_types=1);
$pageTitle = "PHP Functions Lab";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root { color-scheme: light; --ink:#1f2937; --muted:#64748b; --line:#dbe2ea; --accent:#2457a7; }
        * { box-sizing: border-box; }
        body { margin:0; font:16px/1.6 Arial, sans-serif; color:var(--ink); background:#f4f7fb; }
        header { background:#17345f; color:white; padding:2rem 1.25rem; }
        main { max-width:900px; margin:2rem auto; padding:0 1rem; }
        .panel { background:white; border:1px solid var(--line); border-radius:12px; padding:1.25rem; margin:1rem 0; }
        .links { display:grid; gap:.8rem; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); }
        a { color:var(--accent); }
        .link-card { display:block; border:1px solid var(--line); border-radius:9px; padding:1rem; text-decoration:none; background:#fff; }
        .link-card:hover { border-color:var(--accent); }
        .muted { color:var(--muted); }
        footer { text-align:center; padding:1.5rem; color:var(--muted); }
        code { background:#eef2f7; padding:.1rem .3rem; border-radius:4px; }
    </style>
</head>
<body>
<header>
    <main>
        <p>CSC 4370 / CSC 6370 · Web Programming</p>
        <h1>PHP Functions In-Class Lab</h1>
        <p>Functions, parameters, return values, validation, random outcomes, and scope.</p>
    </main>
</header>
<main>
    <section class="panel">
        <h2>Student information</h2>
        <p><strong>Name:</strong> Thirunavukkarasu Palaniappa</p>
        <p><strong>Email:</strong> tpalaniappa1@student.gsu.edu</p>
        <p><strong>Student ID:</strong> 002947602</p>
    </section>
    <section class="panel">
        <h2>Activity pages</h2>
        <div class="links">
            <a class="link-card" href="exercise1.php"><strong>Mission 1: Eligibility Checker</strong><br><span class="muted">Default parameters and boundary tests</span></a>
            <a class="link-card" href="exercise2.php"><strong>Mission 2: Area Calculator</strong><br><span class="muted">Return values, numeric validation, exceptions</span></a>
            <a class="link-card" href="exercise3.php"><strong>Mission 3: Random Event and Scope</strong><br><span class="muted">Boolean outcomes and explicit parameters</span></a>
        </div>
    </section>
    <section class="panel">
        <h2>How to use this project</h2>
        <ol>
            <li>Run the folder through a PHP-enabled server; do not open this file directly from File Explorer.</li>
            <li>Open each mission from the links above and review its test cases.</li>
            <li>Upload all four PHP files to your own Codd <code>public_html</code> folder.</li>
            <li>Test the live URL and include it in your Word submission document.</li>
        </ol>
        <p class="muted">The critical-thinking assessment must be completed independently during the supervised class period, following your instructor's directions.</p>
    </section>
</main>
<footer>Web Development II · PHP Functions</footer>
</body>
</html>
