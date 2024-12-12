document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const confirmationMessage = document.getElementById('confirmationMessage');
    const today = new Date().toISOString().split('T')[0];
    const dateInput = document.getElementById('date');
    
    // Set the minimum reservation date to today
    dateInput.min = today;
    
    form.addEventListener('submit', async (e) => {
      e.preventDefault(); // Prevent default form submission
      
      // Collect form data
      const formData = new FormData(form);
      const date = formData.get('date');
      const time = formData.get('time');
    
      // Validate required fields
      if (!formData.get('name') || !formData.get('email') || !formData.get('phone') || !date || !time || !formData.get('persons')) {
        alert('Please fill out all required fields!');
        return;
      }
    
      // Check date availability (simulate API call)
      const isAvailable = await checkDateAvailability(date, time);
      if (!isAvailable) {
        alert('Sorry, the selected date and time are unavailable. Please choose a different slot.');
        return;
      }
    
      // Show confirmation message
      showConfirmation();
      form.reset(); // Reset the form after successful submission
    });
    
    async function checkDateAvailability(date, time) {
      // Mock API logic: replace with actual server-side API call
      const unavailableDates = ['2024-12-25', '2024-12-31'];
      return !unavailableDates.includes(date); // Example: Christmas and New Year’s Eve unavailable
    }
    
    function showConfirmation() {
      confirmationMessage.classList.remove('hidden');
    }
    
    window.closeConfirmation = function () {
      confirmationMessage.classList.add('hidden');
    };
    
    // Toast Message Display on Date Check
    document.getElementById('reservation-form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent the form from actually submitting
    
      const reservationDate = document.getElementById('date').value;
    
      // Example of reserved dates, replace this with dynamic data
      const reservedDates = ['2024-12-10', '2024-12-15', '2024-12-20'];
    
      // Check if the selected date is in the reservedDates array
      if (reservedDates.includes(reservationDate)) {
        showToast('This date is already reserved!');
      } else {
        showToast('Date is available! You can proceed with your reservation.');
      }
    });
    
    function showToast(message) {
      const toast = document.getElementById('toast');
      toast.textContent = message;
      toast.classList.add('show'); // Show the toast
    
      // Hide the toast after 3 seconds
      setTimeout(function() {
        toast.classList.remove('show');
      }, 3000); // You can adjust the time (in milliseconds)
    }
  });
  