<!-- header -->
<?php include 'header.php';?>
<style>
.emi-calculator {
    max-width: 100%;
    padding: 40px 0px;
    border-radius: 5px;
}

.input-group {
    margin-bottom: 10px;
}

.input-group label {
    display: inline-block;
    width: 100%;
    font-weight: bold;
}

.input-group input[type="number"] {
    width: 100%;
    padding: 5px;
    border-radius: 3px;
    border: 1px solid #ccc;
    color: #000;
}

.input-group input[type="range"] {
    width: 100%;
    margin-top: 10px;
}

#loan-term-value {
    font-weight: bold;
}

#calculate-btn,
#reset-btn {
    padding: 10px 20px;
    background-color: #004aac;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

#calculate-btn:hover,
#reset-btn:hover {
    background-color: #004aac;
}

.boxx-st {
    background-color: #e9d9d924;
    border: 4px solid #004599;
    border-radius: 8px;
    margin-top: 20px;
    padding: 20px !important;
}

#emiChart {
    margin: auto;
    max-width: 250px;
    display: block;
}
</style>


<!-- Body main wrapper start -->
<main>
    <div class="breadcrumb__area breadcrumb-space overly" data-background="assets/imgs/common/sec-emi.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h2 class="breadcrumb__title mb-0 wow fadeIn animated" data-wow-delay=".1s">EMI Calculator
                            </h2>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.php">Home</a></span></li>
                                    <li class="active"><span>EMI Calculator</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="emi-calculator">
            <div class="container">
                <h3 class="mb-3"><b>EMI Calculator</b></h3>
                <div class="row">
                    <!-- Left Column - Input Form -->
                    <div class="col-md-12">
                        <div class="shadow p-4 mb-5">
                            <div class="input-group">
                                <label for="loan-amount">Loan Amount :</label>
                                <input type="number" id="loan-amount-input" placeholder="Loan Amount" class="mb-1"
                                    value="1000000">
                                <input type="range" id="loan-amount-slider" min="1000" max="5000000" step="10000"
                                    value="1000000">
                            </div>
                            <div class="input-group">
                                <label for="interest-rate">Interest Rate (% up to 30):</label>
                                <input type="number" id="interest-rate-input" placeholder="Interest Rate" class="mb-1"
                                    value="10">
                                <input type="range" id="interest-rate-slider" min="0" max="30" step="0.1" value="10">
                            </div>
                            <div class="input-group">
                                <label for="loan-term">Loan Term:</label>
                                <input type="number" id="loan-term-input" placeholder="Loan Term" class="mb-1"
                                    value="60">
                                <input type="range" id="loan-term-slider" min="1" max="60" step="1" value="0">
                                <span id="loan-term-value">60 months</span>
                            </div>
                            <div class="input-group mt-4">
                                <button id="calculate-btn" class="me-3">Calculate EMI</button>
                                <button id="reset-btn" class="me-3">Reset</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Results -->
                    <div class="col-md-6 mb-3">
                        <div class="shadow bg-white text-center rounded p-4 h-100">
                            <div class="row text-center mb-4">
                                <div class="col-12 mb-3">
                                    <h4 class="pb-3"><strong>Break-up of Total Payment</strong></h4>
                                    <hr class="py-2" />
                                </div>
                                <div class="col-md-12 mb-5 mt-4">
                                    <div class="text-center">
                                        <h5 class="mb-0">Loan EMI</h5>
                                        <p id="emi-value" class="fw-bold text-success mb-0 text-center">₹ 0</p>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-5">
                                    <div class="text-center">
                                        <h5 class="mb-0">Total Interest</h5>
                                        <p id="interest-value" class="fw-bold text-danger mb-0 text-center">₹ 0</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <h5 class="mb-0">Total Payment</h5>
                                        <p id="total-payment-value" class="fw-bold text-primary mb-0 text-center">₹ 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="shadow bg-white text-center rounded mb-4 h-100 pt-5">
                            <canvas id="emiChart" width="300" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- JS Script -->
<script>
let emiChart;

function calculateEMI() {
    const principal = parseFloat(document.getElementById("loan-amount-input").value);
    const annualInterestRate = parseFloat(document.getElementById("interest-rate-input").value);
    const loanTerm = parseInt(document.getElementById("loan-term-input").value); // in months

    const monthlyInterestRate = annualInterestRate / 12 / 100;
    const emi = principal * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, loanTerm) /
        (Math.pow(1 + monthlyInterestRate, loanTerm) - 1);

    const totalPayment = emi * loanTerm;
    const totalInterest = totalPayment - principal;

    // Update result texts
    document.getElementById("emi-value").textContent = "₹ " + Math.round(emi).toLocaleString();
    document.getElementById("interest-value").textContent = "₹ " + Math.round(totalInterest).toLocaleString();
    document.getElementById("total-payment-value").textContent = "₹ " + Math.round(totalPayment).toLocaleString();

    // Draw Pie Chart
    const ctx = document.getElementById('emiChart').getContext('2d');
    if (emiChart) emiChart.destroy();

    emiChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Principal Loan Amount', 'Total Interest'],
            datasets: [{
                data: [principal, totalInterest],
                backgroundColor: ['#8BC34A', '#FFB74D'],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
}

// Event Listeners
document.getElementById("calculate-btn").addEventListener("click", calculateEMI);
document.getElementById("reset-btn").addEventListener("click", function() {
    document.getElementById("loan-amount-input").value = 1000000;
    document.getElementById("interest-rate-input").value = 10;
    document.getElementById("loan-term-input").value = 60;
    document.getElementById("loan-amount-slider").value = 1000000;
    document.getElementById("interest-rate-slider").value = 10;
    document.getElementById("loan-term-slider").value = 60;
    document.getElementById("loan-term-value").textContent = "60 months";
    calculateEMI();
});

// Sync sliders and inputs
['loan-amount', 'interest-rate', 'loan-term'].forEach(field => {
    const input = document.getElementById(`${field}-input`);
    const slider = document.getElementById(`${field}-slider`);
    input.addEventListener('input', () => {
        slider.value = input.value;
        if (field === 'loan-term') {
            document.getElementById("loan-term-value").textContent = `${input.value} months`;
        }
    });
    slider.addEventListener('input', () => {
        input.value = slider.value;
        if (field === 'loan-term') {
            document.getElementById("loan-term-value").textContent = `${slider.value} months`;
        }
    });
});

// Initial calculation
calculateEMI();
</script>

<!-- footer -->
<?php include 'footer.php';?>