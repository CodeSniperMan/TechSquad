document.getElementById('register').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // Get form data
    const formData = new FormData(this);
    
    // Here you would typically send the form data to the server using AJAX or fetch
    // For simplicity, let's just log the data
    console.log({
      username: formData.get('fullname'),
      email: formData.get('email'),
      MobileNo: formData.get('mobileno'),
      dob : formData.get('dob'),
      photo : formData.get('photo')
    });
    
    // Redirect to a new page
    window.location.href = '/new account/otp.html'; // Replace 'success.html' with your desired success page URL
  });