<?php include 'includes/header.php'; ?>

<table border="1" cellpadding="5" cellspacing="0" style="width:90%; margin:auto; border-collapse:collapse; text-align:center;">

<tr>
    <th colspan="2">Changing the Case of Characters</th>
</tr>
<?php $text = "HOLY ANGEL UNIVERSITY"; ?>
<tr>
    <td>Lowercase</td>
    <td><?php echo strtolower($text); ?></td>
</tr>
<tr>
    <td>Uppercase</td>
    <td><?php echo strtoupper($text); ?></td>
</tr>
<tr>
    <td>Capitalize</td>
    <td><?php echo ucwords(strtolower($text)); ?></td>
</tr>

<tr>
    <th colspan="2">Counting Characters and Words</th>
</tr>
<?php $name = "Fran Luis Nino Mary D. Ocampo"; ?>
<tr>
    <td>Number of Characters</td>
    <td><?php echo strlen($name); ?></td>
</tr>
<tr>
    <td>Number of Words</td>
    <td><?php echo str_word_count($name); ?></td>
</tr>

<tr>
    <th colspan="2">Removing and Replacing Characters</th>
</tr>
<?php $shop = "   FRAgraNce Shop   "; ?>
<tr>
    <td>Remove whitespaces from left</td>
    <td><?php echo ltrim($shop); ?></td>
</tr>
<tr>
    <td>Remove whitespaces from right</td>
    <td><?php echo rtrim($shop); ?></td>
</tr>
<tr>
    <td>Remove whitespace from left and right</td>
    <td><?php echo trim($shop); ?></td>
</tr>
<tr>
    <td>String replace</td>
    <td><?php echo str_replace("Shop","Store",$shop); ?></td>
</tr>
<tr>
    <td>String ireplace</td>
    <td><?php echo str_ireplace("fragrance","Perfume",$shop); ?></td>
</tr>
<tr>
    <td>String Repeat</td>
    <td><?php echo str_repeat("WELCOME! ",3); ?></td>
</tr>

<tr>
    <th colspan="2">Other Built-in Functions</th>
</tr>
<tr>
    <td>strpos()</td>
    <td><?php echo strpos($text,"ANGEL"); ?></td>
</tr>
<tr>
    <td>str_contains()</td>
    <td><?php echo str_contains($text,"UNIVERSITY") ? "Yes" : "No"; ?></td>
</tr>
<tr>
    <td>str_starts_with()</td>
    <td><?php echo str_starts_with($text,"HOLY") ? "Yes" : "No"; ?></td>
</tr>
<tr>
    <td>str_ends_with()</td>
    <td><?php echo str_ends_with($text,"UNIVERSITY") ? "Yes" : "No"; ?></td>
</tr>
<tr>
    <td>substr()</td>
    <td><?php echo substr($text,5,5); ?></td>
</tr>
<tr>
    <td>strstr()</td>
    <td><?php echo strstr($text,"ANGEL"); ?></td>
</tr>
<tr>
    <td>stristr()</td>
    <td><?php echo stristr($text,"angel"); ?></td>
</tr>
<tr>
    <td>strrpos()</td>
    <td><?php echo strrpos($text,"A"); ?></td>
</tr>
<tr>
    <td>stripos()</td>
    <td><?php echo stripos($text,"angel"); ?></td>
</tr>

</table>

<?php include 'includes/footer.php'; ?>
