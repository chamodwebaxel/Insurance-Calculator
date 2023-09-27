<?php
include "layout/header.php";
?>
<div class="container-xl">
  <!-- Page title -->
  <div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          Quote Calculate
        </h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="">

        <form action="insurance_plans.php" method="POST" class="card" enctype="multipart/form-data">
          <div class="row">
            <div class="col-3"></div>

            <div class="col-6">

              <div class="row mt-4">
                <label> Age(s):</label>
                <input class="form-control" type="text" name="age">
              </div>

              <div class="row mt-3">
                <label> Benifit:</label>
                <select class="form-control" name="benifit">
                  <option value="10000">$ 10 000</option>
                  <option value="15000">$ 15 000</option>
                  <option value="25000">$ 25 000</option>
                  <option value="50000">$ 50 000</option>
                  <option value="100000">$ 100 000</option>
                  <option value="150000">$ 150 000</option>
                  <option value="200000">$ 200 000</option>
                  <option value="300000">$ 300 000</option>
                  <option value="500000">$ 500 000</option>
                </select>
              </div>

              <div class="row mt-3">
                <label> Start Date:</label>
                <input class="form-control" type="date" name="start_date">
              </div>

              <div class="row mt-3">
                <label> End Date:</label>
                <input class="form-control" type="date" name="end_date">
              </div>

              <div class="row mt-3">
                <label> <b>Would you like to cover a STABLE existing medical condition?</b> (The coverage is subject to
                  policy limits. Please, read your insurance policy for all terms and conditions)</label>
              </div>

              <div class="row mt-3 text-center">
                <div>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_pre_condition" value='1'>
                    <span class="form-check-label">Yes</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_pre_condition" value='0' checked>
                    <span class="form-check-label">No</span>
                  </label>
                </div>
              </div>

              <div class="row mt-3 mb-4 text-center">
                <button class="btn btn-primary">Get Quote</button>
              </div>

            </div>

            <div class="col-3"></div>

          </div>
        </form>
      </div>
    </div>
    <!-- Content here -->
  </div>
</div>


<?php
include "layout/footer.php";
?>