        <div id="footer">
        
            <p class="copyright">&copy; <?php echo date('Y') ?> Site name</p>
            <p class="credit">Site by <a href="http://erskinedesign.com">Erskine Design</a></p>
        
        </div> <!-- // #footer -->
    
    </div> <!-- // #page -->
    
    <!-- JAVASCRIPT -->
    <script src="/static/js/EDJ.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    
    <!-- CALL DOC READY FUNCTIONS -->
    <script>
    $(document).ready(function() {
        var settings = {
            debug: true,
            STATIC_URL: '/schwing/'
        };
        EDJ.on_ready(settings);
    });
    </script>
    
    <!--[if IE 6]>
        <script src="/static/js/ie6/DD_belatedPNG_0.0.8a.js"></script>
        <script src="/static/js/ie6/ie6.js"></script>
    <![endif]-->
    
    </body>
</html>
