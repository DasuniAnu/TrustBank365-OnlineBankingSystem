// JavaScript code for your HTML
document.addEventListener("DOMContentLoaded", function () 
{
    const balanceDisplay = document.getElementById("balance_display");
    const refreshButton = document.getElementById("refresh");
    const paymentForm = document.getElementById("paymentForm");
  
    // Function to update the balance (simulate dynamic update)
    function refresh() 
    {
        var newBalance = Math.random() * 1000;
        var Balance = "$" + newBalance.toFixed(2);
        document.getElementById("balance_display").textContent = Balance;
        alert ("Balance calculate succussfully..")
    }

    document.getElementById("refresh").addEventListener("click", refreshBalance);

    // Event listener for the Refresh Balance button
    refreshButton.addEventListener("click", refresh);
  
    // Event listener for the form submission
    paymentForm.addEventListener("submit", function (event) 
    {
      event.preventDefault(); // Prevent the default form submission
  
      // Get the form values
      const date = document.getElementById("date").value;
      const transactionId = document.getElementById("transactionId").value;
      const payee = document.getElementById("payee").value;
      const method = document.getElementById("method").value;
  
      // Here, you can handle the form data as needed (e.g., send it to a server)
  
      // For this example, let's log the data to the console
      console.log("Date:", date);
      console.log("Transaction ID:", transactionId);
      console.log("Payee:", payee);
      console.log("Withdrawal/Deposit Amount:", method);
  
      // Clear the form fields
      paymentForm.reset();
    });
  });
  