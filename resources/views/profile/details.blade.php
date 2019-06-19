@extends('layouts.app-profile', ['title' => $user->public_profile_safename])
@section('content')
@foreach ($address as $add)
<div aria-hidden="true" class="modal fade {{ $add->type_id == 1 ? 'eth-modal' : 'btc-modal' }}" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex p-4">
                    <div class="circle-bg position-relative d-flex justify-content-center align-items-center">

                    @if ($add->type_id == 1)
                        <img draggable="false" src="images/eth-logo.svg">
                    @elseif($add->type_id == 2)
                        <img draggable="false" src="images/btc-logo.svg">
                    @endif
                    </div>
                    <div class="payment-area">

                        <span class="payment-type">
                        @if ($add->type_id == 1)
                            Ethereum
                        @elseif($add->type_id == 2) 
                            Bitcoin
                        @endif   

                        </span>


                        <a class="payment-add-m" data-clipboard-text="{{$add->address}}" alt="Copy to clipboard">{{$add->address}} <span class="copy-to-clipboard" ><img width="13" height="18" src="images/copy.svg"> </span>
</a>
                        <a class="report-text" href="https://discord.gg/m38mfRB" target="_blank">Report This Address</a>
                    </div>
                </div>
                <div class="d-flex px-4 pb-4">
                    <div class="row w-100">
                        <div class="col-auto">
                            <div class="modal-text-left text-left">
                                Balance:
</div>
                            <div class="modal-text-left text-left">
                                Last TX:
</div>
                            <div class="modal-text-left text-left">
                                Check:
</div>
                        </div>
                        <div class="col-auto">
                            <div class="modal-text-right text-left">
                                {{$balances[$add->address]}} 
                                @if ($add->type_id == 1)
                                    ETH
                                @elseif($add->type_id == 2) 
                                    BTC
                                @endif   
                                
</div>
                            <div class="modal-text-right text-left">
                                (Not Available in Beta)
</div>


                                @if ($add->type_id == 1)
                                   
                            <div class="modal-text-right text-left">
                                <a class="link d-block" href="https://etherscan.io/address/{{$add->address}}" target="_blank">Etherescan</a>
                                <a class="link d-block" href="https://blockchair.com/ethereum/address/{{$add->address}}" target="_blank">Blockchair</a>
                                <a class="link d-block" href="https://ethplorer.io/address/{{$add->address}}?from=search" target="_blank">Ethplorer</a>
                            </div>

                                @elseif($add->type_id == 2) 
                                <div class="modal-text-right text-left">
                                <a class="link d-block" href="https://live.blockcypher.com/btc/address/{{$add->address}}/" target="_blank">Blockcypher</a>
                                <a class="link d-block" href="https://btc.com/{{$add->address}}" target="_blank">BTC.com</a>
                                <a class="link d-block" href="https://explorer.bitcoin.com/btc/address/{{$add->address}}" target="_blank">Bitcoin.com</a>

                            </div>
                                @endif   

                        </div>
                        <div class="text-right pr-0 col qr-code">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)->color(79,129,175)->generate($explorers[$add->address])) !!} ">


                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


 

    <!-- https://keybase.io/verify start -->
    <span style="position: absolute; color: transparent;" class="w-100 m-0 text-right text-transparent"> <span>-----BEGIN PGP SIGNED MESSAGE-----<br></span>
    Hash: SHA512 <br> <br> <br></span>
    <body >
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <span id="menu-toggle"><img alt="menu-icon" class="menu" src="images/navigation.svg"></span>
                </div>
                <div class="sidebar-mt list-group list-group-flush">
                    <a class="list-group-item list-group-item-action active" id="profile"><span class="t-pos">Profile</span></a>
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
                    <div class="nav-right">
                        <button class="pay-btn name" onclick="window.location.href='#pay_section';">Pay
                            <span>{{$user->public_profile_safename}}</span>
                        </button>
                        <a class="report-btn" href="https://discord.gg/m38mfRB" target="_blank">
                        Report User</a>
                    </div>
                </nav>
                <div class="container-fluid mb-5">
                    <div class="title-area d-flex justify-content-between align-items-end">
                        <div class="title-text">
                            Public Profile
</div>
                        <div class="help-text">
                            <a class="help-link" href="https://discord.gg/m38mfRB" target="_blank">Need Help? (Live Chat)</a>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="mb-4 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="text-center card-body position-relative pt-4">
                                        <div class="avatar-parent-child">
                                            <div class="avatar avatar-lg rounded-circle">
                                                <img alt="idon" draggable="false" src="{{ Helper::avatar($user->avatar) }}">
                                            </div>
                                            <a class="avatar-child avatar-badge pay-circle d-flex align-items-center justify-content-center" href="#pay_section">Pay</a>
                                        </div>
                                        <h5 class="username justify-content-center d-flex align-items-center">{{$user->public_profile_safename}}</h5>
                                        <span class="d-block sub-username d-flex justify-content-center align-items-center text-nowrap">SAFENAME IDENTITY</span>
                                        <span class="d-block kyc justify-content-center d-flex align-items-center text-nowrap mt-1">KYC VERIFIED</span>
                                        <span class="d-block report-contain"><button class="text-nowrap report-btn-mobile mx-auto">
                                                <span class="d-block report-contain">Report User</span>
                                            </button></span>
                                        <div>
                                            <a aria-controls="userDesc" aria-expanded="false" class="desc-toggle" data-toggle="collapse" href="#userDesc" role="button" title="About">
                                                <img src="images/chevron-up.svg">
                                            </a>
                                            <div class="collapse profile-desc" id="userDesc">
                                                <div class="profile-title">
                                                    Profile
</div>
                                                <span>{{$user->profile_description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 col-lg-8 col-md-12">
                                <div class="card card-body-score">
                                    <div class="top align-items-center d-inline-flex justify-content-around">
                                        <div>
                                            <div class="position-relative selectDisable mx-5">
                                                <span id="score">99</span>
                                                <img draggable="false" src="images/chart/99.svg">
                                            </div>
                                        </div>
                                        <div class="desc-contain">
                                            <div class="desc-title">
                                                Fair
</div>
                                            <p class="score-desc mb-0 pr-2">All public and private addresses associated with this identity have no known reported risks, login to get notifications if this changes.</p>
                                            <!-- Target -->

                                        </div>
                                    </div>
                                    <div class="bottom d-inline-flex justify-content-center">
                                        <img draggable="false" src="images/prestige-icon.svg">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <div class="low-text ml-3">
                                                    LOW
</div>
                                                <div class="high-text">
                                                    HIGH
</div>
                                            </div>
                                            <div>
                                                <div class="progress ml-3" style="height: 4px;">
                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="86" class="progress-bar position-relative" role="progressbar" style="width: 86%;">
                                                        <img class="circle" draggable="false" src="images/progress-circle.svg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="score-desc ml-3 mt-2">
                                                    Prestige
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="pay_section">
                            <div class="col-md-12">
                                <div class="po-card payments-contain mb-4">
                                    <div class="payments-title">
                                        Payments
</div>
                                    <div class="payment-info">
                                        You can send payments to
                                        <span class="name">{{$user->public_profile_safename}}</span> through the following:
                                    </div>
                                    <div class="row mx-1">


                                    @foreach ($address as $add)
                                    <div class="payment-option align-items-center justify-content-between position-relative d-flex col-md" data-target="{{ $add->type_id == 1 ? '.eth-modal' : '.btc-modal' }}" data-toggle="modal">
                                            <div class="circle-bg position-relative d-flex justify-content-center align-items-center">

                                            @if ($add->type_id == 1)
                                                <img draggable="false" src="images/eth-logo.svg">
                                            @elseif($add->type_id == 2)
                                                <img draggable="false" src="images/btc-logo.svg">
                                            @endif

                                            </div>
                                            <div class="payment-area">
                                                <span class="payment-type">
                                                
                                                @if ($add->type_id == 1)
                                                  Ethereum
                                                @elseif($add->type_id == 2) 
                                                  Bitcoin
                                                @endif  
                                                
                                                </span>
                                                <span class="payment-add text-truncate">{{$add->address}}</span>
                                            </div>
                                            <!-- <div class="payment-area">
                                                <img src="images/qr.png">
                                            </div> -->
                                            <a class="more">
                                                <img src="images/dots.svg">
                                            </a>
                                        </div>
                                    @endforeach


                                      



                                     


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6 mb-4">
                                <div class="po-card ref-contain">
                                    <div class="payments-title">
                                        Referrals
</div>
                                    <div class="ref-row text-center">
                                        <a  href="/whitelist">
                                        <button style="opacity: .65;">Whitelist for SafeName (Beta)
                                            <br>
                                            <div class="small">
                                                Available Now
</div>
</button>
</a>
                                    </div>
                                    <div class="text-center">
                                        <span class="ref-foot">Get me a page just like this one!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 mb-4">
                                <div class="po-card ref-contain">
                                    <div class="keybase-title">
                                        Keybase Verify
</div>
                                    <div class="bottom d-inline-flex w-100 align-items-center mb-4">
                                        <img draggable="false" src="images/check-grey.svg">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between"></div>
                                            <div>
                                                <div class="progress ml-3" style="height: 2px;"></div>
                                            </div>
                                            <div class="d-flex justify-content-between"></div>
                                        </div>
                                        <img class="ml-3" draggable="false" src="images/check-green.svg">
                                    </div>
                                    <div>
                                        <div class="val-foot mb-4">
                                            Want to verify the validity of this page?
</div>
                                        <div class="val-foot">
                                            Select All content + Copy + Visit
                                            <a class="link" href="https://keybase.io/verify" target="_blank">keybase.io/verify</a>
                                            <span>+ Paste All Content into the Modal + Click Verify.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($user->keybase_string)
                    <div class="row">
                        <div class="col-12">
                            <pre class="code code-highlighted"><span class="hljs-comment d-block">-----BEGIN PGP SIGNATURE-----</span><span class="keybase-them built-in">{{$user->keybase_string}}
                                <span class="hljs-comment d-block">-----END PGP SIGNATURE-----</span></pre>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- /#page-content-wrapper -->
            </div>
        </div>

        <!-- /#wrapper -->
@endsection
