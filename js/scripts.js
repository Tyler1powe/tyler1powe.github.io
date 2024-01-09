 <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function (event) {
          event.preventDefault();

          // Fetch API endpoint for form submission
          var endpoint = 'your-server-endpoint';
          fetch(endpoint, {
            method: 'POST',
            body: new FormData(contactForm),
          })
            .then(function (response) {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return response.json();
            })
            .then(function (data) {
              // Handle successful form submission
              document.getElementById('submitSuccessMessage').classList.remove('d-none');
              document.getElementById('submitErrorMessage').classList.add('d-none');
            })
            .catch(function (error) {
              // Handle form submission error
              document.getElementById('submitSuccessMessage').classList.add('d-none');
              document.getElementById('submitErrorMessage').classList.remove('d-none');
              console.error('There was a problem with the fetch operation:', error);
            });
        });
      });
    </script>
  </body>
</html>
