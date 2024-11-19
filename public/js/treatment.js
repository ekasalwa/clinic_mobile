document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('stateInput').addEventListener('click', function () {
        document.getElementById('treatmentModal').style.display = 'block';
    });

    document.getElementById('closeModal').addEventListener('click', function () {
        document.getElementById('treatmentModal').style.display = 'none';
    });

    window.onclick = function (event) {
        const modal = document.getElementById('treatmentModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };

    document.querySelectorAll('.treatment-item').forEach(function (item) {
        item.addEventListener('click', function () {
            const treatmentId = this.getAttribute('data-id');
            const treatmentName = this.getAttribute('data-name');

            document.getElementById('stateInput').value = treatmentName;
            document.getElementById('treatmentId').value = treatmentId;

            document.getElementById('treatmentModal').style.display = 'none';
        });
    });
});