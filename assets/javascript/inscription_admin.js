
document.getElementById('admin').addEventListener('change', function () {
    var adminCodeDiv = document.getElementById('admin_code_div');
    adminCodeDiv.style.display = this.checked ? 'block' : 'none';
});