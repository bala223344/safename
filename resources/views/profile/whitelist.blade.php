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
                    <a class="list-group-item list-group-item-action" href=" https://docs.google.com/document/d/1gMH4Frfz2NaTn_BKoZLcONpKeR0fnUen5wyyBsfGHMQ/edit?usp=sharing" id="help"><span class="t-pos">FAQs</span></a>
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

                    <div>
                 
                        <div class="row" id="pay_section">
                            <div class="col-md-12">
                                <div class="po-card payments-contain mb-4">
     
                             
                                    <div class="row mx-1">


                                    <form id="form-whitelist">

  <div class="form-group">
    <label for="inputAddress">Your Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="0xdabb1e456cb0c490a34f65eff43ed0c449f039a6">
  </div>
  <div class="form-group ">
    <label for="inputAddress2">Preferred safename</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Rockx45">
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