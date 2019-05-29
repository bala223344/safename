@extends('layouts.app-profile')
@section('content')
<div aria-hidden="true" class="modal fade eth-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex p-4">
                    <div class="circle-bg position-relative d-flex justify-content-center align-items-center">
                        <img draggable="false" src="images/eth-logo.svg">
                    </div>
                    <div class="payment-area">
                        <span class="payment-type">Ethereum</span>
                        <a class="payment-add-m">0xa6fe83Dcf28Cc982818656ba680e03416824D5E4</a>
                        <a class="report-text">Report This Address</a>
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
                                (Not Available in Beta) ETH
</div>
                            <div class="modal-text-right text-left">
                                (Not Available in Beta)
</div>
                            <div class="modal-text-right text-left">
                                <a class="link d-block" href="https://etherscan.io/address/0xa6fe83dcf28cc982818656ba680e03416824d5e4" target="_blank">Etherescan</a>
                                <a class="link d-block" href="https://blockchair.com/ethereum/address/0xa6fe83dcf28cc982818656ba680e03416824d5e4" target="_blank">Blockchair</a>
                                <a class="link d-block" href="https://ethplorer.io/address/0xa6fe83dcf28cc982818656ba680e03416824d5e4?from=search" target="_blank">Ethplorer</a>
                            </div>
                        </div>
                        <div class="text-right pr-0 col">
                            <img height="auto" src="images/eth-address.png" width="150px" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade btc-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex p-4">
                    <div class="circle-bg position-relative d-flex justify-content-center align-items-center">
                        <img draggable="false" src="images/btc-logo.svg">
                    </div>
                    <div class="payment-area">
                        <span class="payment-type">Bitcoin</span>
                        <a class="payment-add-m">133CbWM4DeowjuNfxGf8ad5CjNZp6CUAWw</a>
                        <a class="report-text">Report This Address</a>
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
                                (Not Available in Beta) BTC
</div>
                            <div class="modal-text-right text-left">
                                (Not Available in Beta)
</div>
                            <div class="modal-text-right text-left">
                                <a class="link d-block" href="https://live.blockcypher.com/btc/address/133CbWM4DeowjuNfxGf8ad5CjNZp6CUAWw/" target="_blank">Blockcypher</a>
                                <a class="link d-block" href="https://btc.com/133CbWM4DeowjuNfxGf8ad5CjNZp6CUAWw" target="_blank">BTC.com</a>
                                <a class="link d-block" href="https://explorer.bitcoin.com/btc/address/133CbWM4DeowjuNfxGf8ad5CjNZp6CUAWw" target="_blank">Bitcoin.com</a>

                            </div>
                        </div>
                        <div class="text-right pr-0 col">
                            <img height="auto" src="images/eth-address.png" width="150px" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade dash-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex p-4">
                    <div class="circle-bg position-relative d-flex justify-content-center align-items-center">
                        <img draggable="false" src="images/dash-logo.svg">
                    </div>
                    <div class="payment-area">
                        <span class="payment-type">Dash</span>
                        <a class="payment-add-m">XfHwwoYoVZXHhgYSAkufLuA2AUrj9MvsEB</a>
                        <a class="report-text">Report This Address</a>
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
                                (Not Available in Beta) DASH
</div>
                            <div class="modal-text-right text-left">
                                (Not Available in Beta)
</div>
                            <div class="modal-text-right text-left">
                                <a class="link d-block" href="https://chainz.cryptoid.info/dash/search.dws?q=XfHwwoYoVZXHhgYSAkufLuA2AUrj9MvsEB" target="_blank">CryptoID</a>
                                <a class="link d-block" href="https://live.blockcypher.com/dash/address/XfHwwoYoVZXHhgYSAkufLuA2AUrj9MvsEB/" target="_blank">BlockCyper</a>
                                <a class="link d-block" href="https://explorer.dash.org/address/XfHwwoYoVZXHhgYSAkufLuA2AUrj9MvsEB" target="_blank">Dash.org</a>
                            </div>
                        </div>
                        <div class="text-right pr-0 col">
                            <img height="auto" src="images/eth-address.png" width="150px" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- https://keybase.io/verify start -->
    <span style="position: absolute; color: transparent;" class="w-100 m-0 text-right text-transparent"> <span>-----BEGIN PGP SIGNED MESSAGE-----<br></span>
    Hash: SHA512 <br> <br> <br></span>
    <body onload="document.body.style.opacity='1'">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <span id="menu-toggle"><img alt="menu-icon" class="menu" src="images/navigation.svg"></span>
                </div>
                <div class="sidebar-mt list-group list-group-flush">
                    <a class="list-group-item list-group-item-action active" href="index.html" id="profile"><span class="t-pos">Profile</span></a>
                    <a class="list-group-item list-group-item-action" href="faqs.html" id="help"><span class="t-pos">FAQs</span></a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-nav">
                    <div style="flex: 1;"></div>
                    <div class="mx-auto" style="flex: 1;">
                        <a href="index.html">
                            <img alt="logo" class="desktop-logo" draggable="false" src="images/logo.svg">
                        </a>
                        <a href="index.html">
                            <img alt="logo" class="mx-auto mobile-logo" draggable="false" src="images/mobile-logo.svg">
                        </a>
                    </div>
                    <div class="nav-right">
                        <button class="pay-btn name" onclick="window.location.href='#pay_section';">Pay
                            <span>Idon</span>
                        </button>
                        <button class="report-btn">Report User</button>
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
                                                <img alt="idon" draggable="false" src="images/users/idon.png">
                                            </div>
                                            <a class="avatar-child avatar-badge pay-circle d-flex align-items-center justify-content-center" href="#pay_section">Pay</a>
                                        </div>
                                        <h5 class="username justify-content-center d-flex align-items-center">Idon</h5>
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
                                                <span>Idon is a Co-Founder of SafeName.io by SwissOne (HK) Limited.</span>
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
                                        <span class="name">Idon</span> through the following:
                                    </div>
                                    <div class="row mx-1">
                                        <div class="payment-option align-items-center justify-content-between position-relative d-flex col-md" data-target=".eth-modal" data-toggle="modal">
                                            <div class="circle-bg position-relative d-flex justify-content-center align-items-center">
                                                <img draggable="false" src="images/eth-logo.svg">
                                            </div>
                                            <div class="payment-area">
                                                <span class="payment-type">Ethereum</span>
                                                <span class="payment-add text-truncate">0xa6fe83Dcf28Cc982818656ba680e03416824D5E4</span>
                                            </div>
                                            <!-- <div class="payment-area">
                                                <img src="images/qr.png">
                                            </div> -->
                                            <a class="more">
                                                <img src="images/dots.svg">
                                            </a>
                                        </div>
                                        <div class="payment-option d-flex align-items-center justify-content-between position-relative col-md" data-target=".btc-modal" data-toggle="modal">
                                            <div class="circle-bg position-relative d-flex justify-content-center align-items-center">
                                                <img draggable="false" src="images/btc-logo.svg">
                                            </div>
                                            <div class="payment-area">
                                                <span class="payment-type">Bitcoin</span>
                                                <span class="payment-add text-truncate">133CbWM4DeowjuNfxGf8ad5CjNZp6CUAWw</span>
                                            </div>
                                            <!-- <div class="payment-area">
                                                <img src="images/qr.png">
                                            </div> -->
                                            <a class="more" href="">
                                                <img src="images/dots.svg">
                                            </a>
                                        </div>
                                        <div class="payment-option d-flex align-items-center justify-content-between position-relative col-md" data-target=".dash-modal" data-toggle="modal">
                                            <div class="circle-bg position-relative justify-content-center align-items-center d-flex">
                                                <img draggable="false" src="images/dash-logo.svg">
                                            </div>
                                            <div class="payment-area">
                                                <span class="payment-type">Dash</span>
                                                <span class="payment-add text-truncate">XfHwwoYoVZXHhgYSAkufLuA2AUrj9MvsEB</span>
                                            </div>
                                            <!-- <div class="payment-area">
                                                <img src="images/qr.png">
                                            </div> -->
                                            <a class="more" href="">
                                                <img src="images/dots.svg">
                                            </a>
                                        </div>
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
                                        <button disabled style="opacity: .65;">Whitelist for SafeName (Beta)
                                            <br>
                                            <div class="small">
                                                Available Now
</div>
                                        </button>
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

                    <div class="row">
                        <div class="col-12">
                            <pre class="code code-highlighted"><span class="hljs-comment d-block">-----BEGIN PGP SIGNATURE-----</span><span class="keybase-them built-in">Version: Keybase OpenPGP v2.1.0 <br>Comment: https://keybase.io/crypto</span><br>
wsBcBAABCgAGBQJc7Ls9AAoJEIrJD367b+T6EHgH/2eNPQeh4sOvCf7a6bk+Y323
QEo+GtsScrS+iKFC7mH1q6tHhseNC8UG4ZVbQZNycFdlGJscdcSNYJ0Tgc+U+XzM
LAMTGpunwfgy7k9lxyamaoA6qJbpmPPa6xP5Q2pnckz+5p0Iv410T28mHGW/tPBE
CryaJhn1Ljb/j73RQy6pXu2petuA2g9ueTgEpH8/3niivHOzAd23lAws5apnAe7G
HymuawmtcGfYRsmZ2X6YzW5asOTN1QRZfvRT5R+cqBJqcuHyMxhP6cA4Py4HfVh/
W4CLylH0+qGnGqjjDDbluKSneXG9EdgyEXDzXOF925dhLj7LjV8qvMVh5RDf4Mc=
=T0s8<span class="hljs-comment d-block">-----END PGP SIGNATURE-----</span></pre>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
        </div>
        <!-- /#wrapper -->
@endsection
