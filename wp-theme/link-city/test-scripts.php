<?php
/**
 * Test file to check if scripts are loading
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Scripts Loading</title>
    <?php wp_head(); ?>
</head>
<body>
    <h1>Test Scripts Loading</h1>
    <p>Check browser console for script loading status</p>
    
    <div id="test-jquery">jQuery Test</div>
    <div id="test-aos">AOS Test</div>
    <div id="test-swiper">Swiper Test</div>
    <div id="test-fullpage">FullPage Test</div>
    
    <?php wp_footer(); ?>
</body>
</html> 