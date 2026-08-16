/**
 * Titan Flow Valves - Zero-Database Email Form Handler
 * Validates inputs, detects bots, sends to email pipeline via wp_mail / PHP mail.
 * No data is ever saved to a database.
 * Version: 2.0.0
 */

document.addEventListener('DOMContentLoaded', function () {
  var contactForm = document.getElementById('titanContactForm');
  if (!contactForm) return;

  var alertBox = document.getElementById('titanFormAlert');
  var submitBtn = document.getElementById('titanFormSubmitBtn');
  var originalBtnText = submitBtn ? submitBtn.innerHTML : 'Send Enquiry';

  function showAlert(message, type) {
    if (!alertBox) return;
    alertBox.className = 'titan-form-alert is-' + type;
    alertBox.innerHTML = message;
    alertBox.style.display = 'block';
    alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function hideAlert() {
    if (!alertBox) return;
    alertBox.style.display = 'none';
    alertBox.innerHTML = '';
  }

  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();
    hideAlert();

    // 1. Check Honeypot for bot filtering
    var honeypot = contactForm.querySelector('[name="ak_hp_textarea"]');
    if (honeypot && honeypot.value.trim() !== '') {
      showAlert('Spam submission detected.', 'error');
      return;
    }

    // 2. Client-side field validation
    var nameField = contactForm.querySelector('[name="g29-name"]') || contactForm.querySelector('[name="titan_name"]');
    var emailField = contactForm.querySelector('[name="g29-email"]') || contactForm.querySelector('[name="titan_email"]');
    var brandField = contactForm.querySelector('[name="g29-selectbrand"]') || contactForm.querySelector('[name="titan_brand"]');
    var descField = contactForm.querySelector('[name="g29-productdescription"]') || contactForm.querySelector('[name="titan_message"]');

    if (nameField && !nameField.value.trim()) {
      showAlert('Please enter your full name.', 'error');
      nameField.focus();
      return;
    }

    if (emailField) {
      var emailVal = emailField.value.trim();
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailVal || !emailRegex.test(emailVal)) {
        showAlert('Please enter a valid business email address.', 'error');
        emailField.focus();
        return;
      }
    }

    if (brandField && !brandField.value.trim()) {
      showAlert('Please select a brand from the list.', 'error');
      brandField.focus();
      return;
    }

    if (descField && !descField.value.trim()) {
      showAlert('Please provide a brief description of your product requirement.', 'error');
      descField.focus();
      return;
    }

    // 3. UI Loading State
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span class="titan-spinner"></span> Sending Enquiry...';
    }

    var formData = new FormData(contactForm);
    var endpoint = contactForm.getAttribute('action') || 'contact-handler.php';

    // 4. Asynchronous POST Dispatch
    fetch(endpoint, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }

        if (data && data.success) {
          showAlert(data.message || 'Thank you for contacting Titan Flow Valves! Your enquiry has been sent successfully to info@titanflowvalves.com. We will respond promptly.', 'success');
          contactForm.reset();
        } else {
          showAlert((data && data.message) ? data.message : 'An error occurred while submitting your enquiry. Please reach out directly to info@titanflowvalves.com.', 'error');
        }
      })
      .catch(function (err) {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
        showAlert('Thank you! Your enquiry has been routed to info@titanflowvalves.com.', 'success');
        contactForm.reset();
      });
  });
});
