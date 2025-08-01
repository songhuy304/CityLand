<!DOCTYPE html>
<html>
<head>
    <title>jQuery Test</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        // Test if jQuery is working
        $(document).ready(function() {
            console.log('jQuery is working!');
            console.log('jQuery version:', $.fn.jquery);
            console.log('$ is defined:', typeof $ !== 'undefined');
            console.log('jQuery is defined:', typeof jQuery !== 'undefined');
        });
    </script>
</head>
<body>
    <h1>jQuery Test Page</h1>
    <p>Check the browser console for jQuery status.</p>
    
    <script>
        // Test the original app.js functions
        function testAppFunctions() {
            console.log('Testing app.js functions...');
            
            // Test if $ is available
            if (typeof $ !== 'undefined') {
                console.log('✅ $ is available');
                
                // Test basic jQuery functionality
                $('body').css('background-color', '#f0f0f0');
                console.log('✅ jQuery basic functionality works');
                
                // Test if we can call functions from app.js
                if (typeof initOpenModal === 'function') {
                    console.log('✅ initOpenModal function is available');
                } else {
                    console.log('❌ initOpenModal function not found');
                }
                
                if (typeof MenuOpen === 'function') {
                    console.log('✅ MenuOpen function is available');
                } else {
                    console.log('❌ MenuOpen function not found');
                }
                
            } else {
                console.log('❌ $ is not available');
            }
        }
        
        // Run test after page loads
        $(document).ready(function() {
            testAppFunctions();
        });
    </script>
</body>
</html> 