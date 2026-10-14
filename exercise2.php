<?php
declare(strict_types=1);


function calculateArea($length, $width): float
{
    if (!is_numeric($length) || !is_numeric($width)) {
        throw new InvalidArgumentException('Both dimensions must be numeric.');
    }

    $numericLength = (float) $length;
    $numericWidth = (float) $width;

    if ($numericLength < 0 || $numericWidth < 0) {
        throw new InvalidArgumentException('Dimensions cannot be negative.');
    }

    return $numericLength * $numericWidth;
}

$cases = [
    ['label' => 'Whole numbers', 'length' => 3, 'width' => 4],
    ['label' => 'Decimal dimensions', 'length' => 7.4, 'width' => 7.5],
    ['label' => 'Numeric strings', 'length' => '2.5', 'width' => '4'],
    ['label' => 'Zero is allowed', 'length' => 0, 'width' => 4],
    ['label' => 'Negative dimension', 'length' => -1, 'width' => 4],
    ['label' => 'Non-numeric dimension', 'length' => 'two', 'width' => 4],
];
$results = [];
foreach ($cases as $case) {
    try {
        $area = calculateArea($case['length'], $case['width']);
        $results[] = ['label' => $case['label'], 'input' => $case['length'] . ' × ' . $case['width'], 'result' => number_format($area, 2) . ' sq ft', 'error' => false];
    } catch (InvalidArgumentException $error) {
        $results[] = ['label' => $case['label'], 'input' => $case['length'] . ' × ' . $case['width'], 'result' => $error->getMessage(), 'error' => true];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 2 - Area Calculator</title>
    <style>
        body{font:16px/1.6 Arial,sans-serif;max-width:900px;margin:2rem auto;padding:0 1rem;color:#1f2937}
        table{border-collapse:collapse;width:100%;margin:1rem 0}th,td{border:1px solid #dbe2ea;padding:.65rem;text-align:left}
        th{background:#eef2f7}.error{color:#a12626}.success{color:#17663a}
    </style>
</head>
<body>
<p><a href="index.php">← Back to main page</a></p>
<h1>Mission 2: Safe Area Calculator</h1>
<p>The function returns the calculated area. The calling code formats the result and catches validation errors.</p>
<table>
    <thead><tr><th>Test case</th><th>Dimensions</th><th>Observed result</th></tr></thead>
    <tbody>
    <?php foreach ($results as $result): ?>
        <tr>
            <td><?= htmlspecialchars($result['label'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($result['input'], ENT_QUOTES, 'UTF-8') ?></td>
            <td class="<?= $result['error'] ? 'error' : 'success' ?>"><?= htmlspecialchars($result['result'], ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<h2>Key idea</h2>
<p>Zero is a valid measurement under this lab's policy, so an invalid input must raise an exception instead of silently returning zero.</p>
</body>
</html>
