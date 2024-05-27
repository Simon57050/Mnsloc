document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(function(dropdown) {
        var button = dropdown.querySelector('.dropbtn');
        var content = dropdown.querySelector('.dropdown-content');

        button.addEventListener('click', function() {
            content.classList.toggle('active');
        });
    });

    document.addEventListener('click', function(event) {
        dropdowns.forEach(function(dropdown) {
            var button = dropdown.querySelector('.dropbtn');
            var content = dropdown.querySelector('.dropdown-content');
            if (!dropdown.contains(event.target) && !button.contains(event.target)) {
                content.classList.remove('active');
            }
        });
    });
});
