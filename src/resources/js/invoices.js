document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('invoiceForm').addEventListener('submit', function (event) {
        if (!confirm('Are you sure you want to create this invoice?')) {
            event.preventDefault();
        }
    });
});
