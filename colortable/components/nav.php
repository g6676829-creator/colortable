<style type="text/css">
    .custom_bars{
        box-shadow: none !important;
        border: none !important;
        padding: 0;
    }    
</style>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark px-4 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="http://localhost:8080/colortable/">ColorTable</a>
        <button class="navbar-toggler custom_bars" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link" href="http://localhost:8080/colortable/">Home</a>
                <a class="nav-link" href="http://localhost:8080/colortable/colors.php">Colors</a>
                <a class="nav-link" href="http://localhost:8080/colortable/gradient.php">Gradient Colors</a>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#">Contact</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentUrl = window.location.href;
        var navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    });
</script>