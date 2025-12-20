<script>
(function () {
  emailjs.init("YOUR_PUBLIC_KEY"); // from EmailJS
})();

document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();

  emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", {
    from_name: this.name.value,
    from_email: this.email.value,
    subject: this.subject.value,
    message: this.message.value
  })
  .then(function () {
    document.getElementById("form-status").innerHTML =
      "Message sent successfully!";
  }, function (error) {
    document.getElementById("form-status").innerHTML =
      "Failed to send message. Try again.";
  });

  this.reset();
});
</script>
