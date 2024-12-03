
function calculateLoan() {
    const loanAmount = parseFloat(document.getElementById("loanAmount").value);
    const annualInterestRate = parseFloat(document.getElementById("interestRate").value);
    const loanMonths = parseInt(document.getElementById("loanMonths").value);

    const monthlyInterestRate = (annualInterestRate / 12) / 100;
    const monthlyPayment = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -loanMonths));
    const totalPayment = monthlyPayment * loanMonths;

    document.getElementById("monthlyPayment").textContent = "$" + monthlyPayment.toFixed(2);
    document.getElementById("totalPayment").textContent = "$" + totalPayment.toFixed(2);

    document.getElementById("result").style.display = "block";
}