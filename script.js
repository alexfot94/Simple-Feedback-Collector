document.getElementById("feedbackForm").addEventListener("submit", function(e) {
    const message = this.message.value.trim();
    if (message === "") {
        alert("Please enter a message.");
        e.preventDefault();
    }
});
