<script src="{{ asset('js/app-landing.min.js') }}" defer></script>
<script>
    document.querySelector('.btn-close').addEventListener('click', function() {
        var offcanvas = document.getElementById('navbar_main');
        offcanvas.classList.remove('show');
    });
</script>
