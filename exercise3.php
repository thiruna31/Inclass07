<?php
declare(strict_types=1);


function isBitten(): bool
{
    return rand(0, 1) === 1;
}

function winnerMessage(string $name): string
{
    return $name . ' is the winner!';
}

$winner = 'Charlie';
$bitten = isBitten();
$bittenMessage = $bitten
    ? 'Charlie bit your finger!'
    : 'Charlie did not bite your finger!';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 3 - Random Event and Scope</title>
    <style>
        body{font:16px/1.6 Arial,sans-serif;max-width:850px;margin:2rem auto;padding:0 1rem;color:#1f2937}
        .panel{background:#f4f7fb;border:1px solid #dbe2ea;border-radius:8px;padding:1rem;margin:1rem 0}
        code{background:#e8edf4;padding:.15rem .3rem;border-radius:4px}
    </style>
</head>
<body>
<p><a href="index.php">← Back to main page</a></p>
<h1>Mission 3: Random Event and Explicit Scope</h1>
<div class="panel">
    <h2>Random outcome</h2>
    <p><?= htmlspecialchars($bittenMessage, ENT_QUOTES, 'UTF-8') ?></p>
    <p>Refresh this page to run another trial. A short sequence is not expected to contain exactly equal counts.</p>
</div>
<div class="panel">
    <h2>Function with an explicit parameter</h2>
    <p><?= htmlspecialchars(winnerMessage($winner), ENT_QUOTES, 'UTF-8') ?></p>
    <p><code>winnerMessage($winner)</code> passes the value into the function. The function does not need to read a hidden global variable.</p>
</div>
<h2>Key idea</h2>
<p>The random function returns a boolean; the calling code chooses the message. Passing <code>$winner</code> as a parameter makes the function's dependency clear and easier to test.</p>
</body>
</html>
