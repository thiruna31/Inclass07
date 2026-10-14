<?php
declare(strict_types=1);


function isEligible(int $age = 18): bool
{
    return $age >= 18;
}

$tests = [
    ['label' => 'Below the boundary', 'age' => 17],
    ['label' => 'At the boundary', 'age' => 18],
    ['label' => 'Above the boundary', 'age' => 19],
];

function decisionText(bool $eligible): string
{
    return $eligible ? 'Eligible' : 'Not eligible';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 1 - Eligibility Checker</title>
    <style>
        body{font:16px/1.6 Arial,sans-serif;max-width:850px;margin:2rem auto;padding:0 1rem;color:#1f2937}
        table{border-collapse:collapse;width:100%;margin:1rem 0}th,td{border:1px solid #dbe2ea;padding:.65rem;text-align:left}
        th{background:#eef2f7}.note{background:#f4f7fb;padding:1rem;border-radius:8px}
    </style>
</head>
<body>
<p><a href="index.php">← Back to main page</a></p>
<h1>Mission 1: Eligibility Checker</h1>
<p><strong>Rule:</strong> a participant qualifies when the age is 18 or older.</p>
<table>
    <thead><tr><th>Test</th><th>Function call</th><th>Expected decision</th><th>Actual decision</th></tr></thead>
    <tbody>
    <?php foreach ($tests as $test): ?>
        <?php $result = isEligible($test['age']); ?>
        <tr>
            <td><?= htmlspecialchars($test['label'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><code>isEligible(<?= $test['age'] ?>)</code></td>
            <td><?= $test['age'] >= 18 ? 'Eligible' : 'Not eligible' ?></td>
            <td><?= decisionText($result) ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td>Default argument</td>
        <td><code>isEligible()</code></td>
        <td>Eligible (default age is 18)</td>
        <td><?= decisionText(isEligible()) ?></td>
    </tr>
    </tbody>
</table>
<div class="note">
    <h2>Key idea</h2>
    <p><code>isEligible()</code> returns a boolean. The page displays a message separately, so the function can be reused without printing from inside it.</p>
</div>
</body>
</html>
