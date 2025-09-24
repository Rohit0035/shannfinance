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
    margin-top:10px;
}

#loan-term-value {
    font-weight: bold;
}

#calculate-btn {
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

#calculate-btn:hover {
    background-color: #004aac;
}

#reset-btn {
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

#reset-btn:hover {
    background-color: #004aac;
}

#emi-result {
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
}

table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tfoot td {
    text-align: right;
    font-weight: bold;
}

.hidden {
    display: none;
}
.boxx-st {
    background-color: #e9d9d924;
    border: 4px solid #004599;
    border-radius: 8px;
    margin-top: 20px;
    padding: 20px !important;
}  
</style>
<!-- Body main wrapper start -->
<main>
    <!-- Breadcrumb area start  -->
    <div class="breadcrumb__area breadcrumb-space overly" data-background="assets/imgs/portfolio/page-header-1.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h2 class="breadcrumb__title mb-0 wow fadeIn animated" data-wow-delay=".1s">EMI Calculator</h2>
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
                <h3><b>EMI Calculator</b></h3>
                <div class="row">
                    <div class="col-md-6">
                    <div class="shadow p-4 boxx-st">
                        <div class="input-group">
                            <label for="loan-amount">Loan Amount:</label>
                            <input type="number" id="loan-amount-input" placeholder="Loan Amount" class="mb-1">
                            <input type="range" id="loan-amount-slider" min="1000" max="1000000" value="0">
                        </div>
                        <div class="input-group">
                            <label for="interest-rate">Interest Rate:</label>
                            <input type="number" id="interest-rate-input" placeholder="Interest Rate" class="mb-1">
                            <input type="range" id="interest-rate-slider" min="0" max="20" step="0.1" value="0">
                        </div>
                        <div class="input-group">
                            <label for="loan-term">Loan Term (in months):</label>
                            <input type="number" id="loan-term-input" placeholder="Loan Term" class="mb-1">
                            <input type="range" id="loan-term-slider" min="1" max="60" value="0">
                            <span id="loan-term-value">0 months</span>
                        </div>
                        <div class="input-group mt-5">
                            <button id="calculate-btn" class="me-3 rs-btn">Calculate EMI</button>
                            <button id="reset-btn" class="me-3 rs-btn">Reset</button>
                        </div>
                       </div>
                    </div>
                       <div class="col-md-6">
                           <div class="shadow p-4">
                                <div id="emi-result"></div>
                                <div class="table-responsive">
                                    <table id="emi-table" class="hidden">
                                        <thead>
                                            <tr>
                                                <th>Month</th>
                                                <th>EMI</th>
                                                <th>Principal</th>
                                                <th>Interest</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot class="d-none">
                                            <tr>
                                                <td colspan="5" id="total-row"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                           </div>
                        </div>
                </div>
            </div>
    </section>
    <!-- work progress area end -->
</main>
<!-- Body main wrapper end -->
<!-- footer -->
<?php include 'footer.php';?>