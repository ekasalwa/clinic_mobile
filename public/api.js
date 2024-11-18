document.getElementById('membershipForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = {
        name: document.getElementById('name').value,
        no_phone: document.getElementById('no_phone').value,
        email: document.getElementById('email').value,
        birthday: document.getElementById('birthday').value,
        gender: document.getElementById('gender').value,
        address: document.getElementById('address').value,
        valid_status: document.getElementById('valid_status').checked ? 1 : 0,
        point: document.getElementById('point').value,
    };

    axios.post('http://study-case-klinik.test/api/store-membership', formData)
        .then(response => {
            console.log('Success:', response.data);
            alert('Membership registered successfully!');
        })
        .catch(error => {
            if (error.response) {
                console.log('Error:', error.response.data);
                alert('Failed to register membership. Please check your data.');
            }
        });
});
