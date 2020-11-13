<?php

?>
<div class="body">
<div class="wrap">
    <div class="container">
    <h1> Kenya Wildlife Safari </h1>
    <hr style="color:gray;background-color:gray">

    <br></br>
    <div class="container">
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Cost Calculator</span>
        <span class="badge badge-secondary badge-pill">$</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Number of People</h6>
              <!-- <small class="text-muted">Brief description</small> -->
          </div>
          <span class="text-muted"><input type="number"/></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Number of Days</h6>
            <!-- <small class="text-muted">Brief description</small> -->
          </div>
          <span class="text-muted">8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Things included:</h6>
            <small class="text-muted">> Airport pickup <br>>Meals</br>>Accommodation</small>
          </div>
          <span class="text-muted"></span>
        </li>
        <!-- <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li> -->
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$2,304</strong>
        </li>
      </ul>

      <!-- <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> -->
    </div>
            <div class="col-8">
                
                    <h2> 1. Review Your Dates </h2>
                    <div class="card  bg-light mb-3">
                <div class="card-body"><h5>Your trip is from: <br></br>Wednesday 11th November to Sunday 15th November</h5><br><a href="#">Change Dates</a></br>
                <div class="container mt-5 mb-5" style="width: 400px">
                    <h3>Choose Date</h3>
                    <div id="calendar"></div>
                    <div class="container">
  <div class="row">
    
  </div>
  <br />
    <div class="row">
        <div class='col-sm-12'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


                    <!-- <input type="text" id="picker" class="form-control">
                </div>

                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajaz/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script src="https://jquery.datetimepicker.full.min.js"></script>
                <script>
                    $('#picker').datetimepicker({
                        timepicker:false,
                        datepicker: true,
                        format: 'Y-m-d',
                        value: '2020-11-11'
                    })
                </script> -->
            <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary">Confirm dates</button>
        </div>
                    </div>
    </div>
    </div>
    </div>
    </div>
</div>


<div class="container">
            <div class="row">
                <div class="col-8">
                    
    
                    <h2> 2. Traveler Details </h2>
                    <div class="card bg-light mb-3">
                        <div class="card-body">
  
                            <form>
                                <div class="form-group">
                                <div class="col-10">
                                    <label>Full name</label>
                                    <input class="form-control" placeholder="Full name">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-10">
                                    <label>Email address</label>
                                    <input class="form-control" placeholder="Enter email">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-10">
                                    <label>Contact</label>
                                    <input class="form-control" placeholder="Phone number">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-10">
                                    <label>Nationality</label>
                                    <input class="form-control" placeholder="Country">
                                </div>
                                </div>
                                <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Add traveler</button>
                                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    
            <h2> 3. Payment </h2>
                    <div class="card  bg-light mb-3">
                        <div class="card-body">
                            <h3>Select your preferred payment option</h3>
                            <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pay using card
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <form>
                                <div class="form-group">
                                    <div class="col-10">
                                    <label>Card Type</label> &nbsp;&nbsp; <i class="fa fa-cc-mastercard" aria-hidden="true"></i> &nbsp; 
                                    <i class="fa fa-cc-visa" aria-hidden="true"></i>&nbsp;
                                    <i class="fa fa-cc-amex" aria-hidden="true"></i>&nbsp;
                                    <i class="fa fa-google-wallet" aria-hidden="true"></i>

                                    <input class="form-control"> 
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-10">
                                    <label>Card number</label>
                                    <input class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-10">
                                    <label>CVV</label>
                                    <input class="form-control">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <div class="col-10">
                                    <label>Country zip code</label>
                                    <input class="form-control" placeholder="zip code">
                                    </div>
                                </div>
                                
                            </form>      </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Pay using M-Pesa
                                            </button>
                                        </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                        <form>
                                                                    <div class="form-group">
                                                                        <div class="col-10">
                                                                        <label>M-Pesa phone number</label>
                                                                        <input class="form-control" placeholder="Full name">
                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <div class="col-10">
                                                                        <label>ID Number</label>
                                                                        <input class="form-control" placeholder="Enter email">
                                                                    </div>
                                                                    </div>
                                                    </form>      </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Pay with PesaPal
                                            </button>
                                        </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                        <form>
                                                                    <div class="form-group">
                                                                        <div class="col-10">
                                                                        <label>Paypal Email address</label>
                                                                        <input class="form-control" placeholder="Full name">
                                                                    </div>
                                                                    </div>
                                                    </form>      </div>
                                        </div>
                                    </div>
                                    </div>
                                    <br></br>
                                                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I accept Terms & Conditions and Privacy Policy; and Intrepid Travel's payment, cancellation and refund conditions, and Credit for Future Tours Terms & Conditions.</label>
                                    </div>
                                    <br></br>
                                                                    <div class="col-12 text-centre"> <button type="success" class="btn btn-primary btn-lg btn-block">BOOK NOW</button> </div> 

                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                                 
        </div>




</div>