<style>
.process-step {
    text-align: center;
    margin: 20px 0;
    position: relative;
}

.process-step i {
    font-size: 25px;
    color: #fff;
    /* Orange color */
}
.pro-icon {
    width: 60px;
    height: 60px;
    background-color: #f46a25;
    border-radius: 10px;
    padding: 18px 10px;
    position: relative;
}
.process-step h5 {
    margin-top: 10px;
    font-size: 18px;
    font-weight: 600;
}

.process-step p {
    font-size: 14px;
    color: #777;
}

.process-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    margin-bottom: 40px;
}

.process-container .process-step {
    width: 20%;
    position: relative;
}

/* .process-container .process-step:before {
      content: '';
      position: absolute;
      top: 50%;
      left: 100%;
      width: 40px;
      height: 2px;
      background-color: #ddd;
      z-index: -1;
    } */

.process-container .process-step:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
    width: 100px;
    height: 20px;
    background-image: url('assets/imgs/common/arrow-1.svg');
    /* Replace with your arrow image URL */
    background-size: contain;
    background-repeat: no-repeat;
    z-index: -1;
}

.process-container .process-step:last-child:before {
    display: none;
}

.step-number {
   top: -15px;
    font-size: 13px;
    color: #ffffff;
    font-weight: bold;
    margin-bottom: 10px;
    width: fit-content;
    background-color: #004aac;
    padding: 0px;
    border-radius: 5px;
    width: 24px;
    height: 25px;
    position: absolute;
    left: 70px;
    z-index: 1;
}

.process-container .process-step p {
    margin: 0;
}

@media (max-width: 768px) {
    .process-container {
        flex-direction: column;
        align-items: center;
    }

    .process-container .process-step {
        width: 80%;
        margin-bottom: 20px;
    }

    .process-container .process-step:before {
        width: 30px;
        height: 1px;
        top: 70%;
    }
}
</style>


<section class="py-5" style="background-color: #fbdbca1f;">
    <div class="container">
        <h6 class="text-center" style="color:#004aac; text-transform: uppercase;">work process</h6>
        <h2 class="fw-bold mb-5 text-center">Steps Toward Making Your  <br/>Dreams a Reality</h2>
        <div class="process-container mt-4">
            <!-- Step 1: Application -->
            <div class="process-step">
                <div class="step-number">01</div>
                <i class="fas fa-file-signature pro-icon"></i>
                <h5 class="fs-3 fw-bold mb-3">Application</h5>
                <p class="text-center">Customer login,</p>
                <p class="text-center">Partner API</p>
            </div>

            <!-- Step 2: KYC -->
            <div class="process-step">
                <div class="step-number">02</div>
                <i class="fas fa-check-circle pro-icon"></i>
                <h5 class="fs-3 fw-bold mb-3">KYC</h5>
                <p class="text-center">U/w Scorecard, </p>
                <p class="text-center">Bureau & Banking API</p>
            </div>

            <!-- Step 3: Agreement -->
            <div class="process-step">
                <div class="step-number">03</div>
                <i class="fas fa-user-check pro-icon"></i>
                <h5 class="fs-3 fw-bold mb-3">Agreement</h5>
                <p class="text-center">eKYC & eSign, </p>
                <p class="text-center">eMandate</p>
            </div>

            <!-- Step 4: Disbursement -->
            <div class="process-step">
                <div class="step-number">04</div>
                <i class="fas fa-chart-line pro-icon"></i>
                <h5 class="fs-3 fw-bold mb-3">Disbursement</h5>
                <p class="text-center"> Auto verification, </p>
                <p class="text-center">Direct credit to your account</p>
            </div>
        </div>
    </div>
</section>