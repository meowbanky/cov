<?php
include 'cov_admin/cov_update/mail/phpmailer/extras/htmlfilter.php';

echo "Testing HTMLFilter...\n";

// Test case 1: Attribute named 'the'
$body = '<div the="value">Content</div>';
echo "Input: $body\n";
$result = HTMLFilter($body, '');
echo "Result: $result\n";

// Test case 2: 'the' as value
$body = '<div class="the">Content</div>';
echo "Input: $body\n";
$result = HTMLFilter($body, '');
echo "Result: $result\n";

// Test case 3: 'the' as just a word in tag?
$body = '<div the>Content</div>';
echo "Input: $body\n";
$result = HTMLFilter($body, '');
echo "Result: $result\n";

// Test case 4: Malformed tag
$body = '<div the';
echo "Input: $body\n";
$result = HTMLFilter($body, '');
echo "Result: $result\n";

echo "Done.\n";
?>
