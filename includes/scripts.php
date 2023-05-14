<!-- Java Script
    ================================================== -->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>

<script>
    // Helper function
    let domReady = (cb) => {
        document.readyState === 'interactive' || document.readyState === 'complete' ?
            cb() :
            document.addEventListener('DOMContentLoaded', cb);
    };

    domReady(() => {
        // Display body when DOM is loaded
        document.body.style.visibility = 'visible';
    });
</script>