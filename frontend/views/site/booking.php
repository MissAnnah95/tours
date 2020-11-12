<?php

?>
<div class="wrap">
    
    <h1> Kenya Wildlife Safari </h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="panel panel-default">
                    <h2> 1. Review Your Dates </h2>
                <div class="panel-body">Wednesday 11th November to Sunday 15th November<br><a href="#">Change Dates</a></br>
                <div class="container mt-5 mb-5" style="width: 400px">
                    <h3>Choose Date</h3>
                    <input type="text" id="picker" class="form-control">
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
                </script>
            <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary">Confirm dates</button>
        </div>

    </div>
    </div>
    </div>
    </div>
</div>


<div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
    
                    <h2> 2. Traveler Details </h2>
                        <div class="panel-body">
  
                            <form>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input class="form-control" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <input class="form-control" placeholder="Country">
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
                <div class="col-sm-6">
                    <div class="panel panel-default">
    
                    <h2> 3. Payment </h2>
                        <div class="panel-body">
                            <h3>Select your preferred payment option</h3>
                            <br><h4>Pay using card</h4></br>
                            <form>
                                <div class="form-group">
                                    <div class="col-8">
                                    <label>Card Type</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-cc-mastercard" aria-hidden="true"></i> &nbsp; 
                                    <i class="fa fa-cc-visa" aria-hidden="true"></i>&nbsp;
                                    <i class="fa fa-cc-amex" aria-hidden="true"></i>&nbsp;
                                    <i class="fa fa-google-wallet" aria-hidden="true"></i>

                                    <input class="form-control"> 
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-8">
                                    <label>Card number</label>
                                    <input class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-8">
                                    <label>CVV</label>
                                    <input class="form-control">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <div class="col-8">
                                    <label>Country zip code</label>
                                    <input class="form-control" placeholder="zip code">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                                                </div>
                            </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>


       <div class="col-6"> <button type="success" class="btn btn-primary btn-lg btn-block">BOOK NOW</button> </div> 

 

</div>