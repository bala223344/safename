@extends('layouts.app-profile')
@section('content')
 

 
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <span id="menu-toggle"><img alt="menu-icon" class="menu" src="images/navigation.svg"></span>
                </div>
                <div class="sidebar-mt list-group list-group-flush">
                    <a class="list-group-item list-group-item-action active" id="profile"><span class="t-pos">Home</span></a>
                    <a class="list-group-item list-group-item-action" href="https://docs.google.com/document/d/1gMH4Frfz2NaTn_BKoZLcONpKeR0fnUen5wyyBsfGHMQ/edit?usp=sharing" id="help"><span class="t-pos">FAQs</span></a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-nav">
                    <div style="flex: 1;"></div>
                    <div class="mx-auto" style="flex: 1;">
                        <a >
                            <img alt="logo" class="desktop-logo" draggable="false" src="images/logo.svg">
                        </a>
                        <a >
                            <img alt="logo" class="mx-auto mobile-logo" draggable="false" src="images/mobile-logo.svg">
                        </a>
                    </div>
                   
                </nav>
                <div class="container-fluid mb-5">
                    <div class="title-area d-flex justify-content-between align-items-end">
                        <div class="title-text">
                            Please provide your details
</div>
                       
                    </div>
                    <div class="title-area d-flex justify-content-between align-items-end">
                        <div class="">
                        This is a whitelist signup for SafeName.io crypto address identity.  <br />
Please provide either your email or full discord tag (i.e. Bob#2356)<br />
We will reach out to you once your account is ready to be setup (usually within 24-48h)<br />
(Your contact information will not be stored on our system after account creation.)<br />
</div>
                       
                    </div>


      
                    <div>
                 
                        <div class="row" id="pay_section">
                            <div class="col-md-12">
                                <div class="po-card payments-contain mb-4">
     
                             
                                    <div class="row mx-1">


                                    <form id="form-whitelist" method="post" action="/whitelist">
                                    {{ csrf_field() }}

                                    <div class="form-row">
  
    <div class="form-group col-md-2">
      <label for="inputState">Coin</label>
      <select id="inputState" name="type_id" class="form-control">
        <option value="1" selected>ETH</option>
        <option  value="2">BTC</option>
      </select>
    </div>
    <div class="form-group col-md-10">
    <label for="inputAddress">Your Address</label>
    <input name="address" required type="text" class="form-control" id="inputAddress" >
    </div>
    
  </div>

 
  <div class="form-group ">
    <label for="inputAddress2">Preferred safename</label>
    <input type="text" required name="requested" class="form-control" id="inputAddress2" >
  </div>
  <div class="form-group ">
    <label for="inputAddress2">Email</label>
    <input type="email" required name="email" class="form-control" id="inputAddress2" >
  </div>
  <div class="form-group ">
    <label for="inputAddress2">Discord</label>
    <input type="text" name="discord" class="form-control" id="inputAddress2" >
    <input type="hidden" name="signup_from_url" value="{{URL::previous()}}">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


                                     


                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>

                 
                </div>
                <!-- /#page-content-wrapper -->
            </div>
        </div>
        <!-- /#wrapper -->
@endsection
