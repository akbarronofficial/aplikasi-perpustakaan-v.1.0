<footer>
    <div class="credit">&copy; 2020 Akbarron Official</div>
</footer>

<script src="assets/jquery/js/jquery-3.4.1.min.js"></script>
<script src="assets/jquery/js/popper.js"></script>
<script src="assets/fontawesome/js/all.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            // sticky navbar on scroll script
            if (this.scrollY > 20) {
                $('.navbar').addClass("sticky");
            } else {
                $('.navbar').removeClass("sticky");
            }
        });
    });
</script>

</body>

</html>