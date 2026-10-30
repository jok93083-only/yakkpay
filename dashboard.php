<?php
session_start();

// Login செய்யாத user-ஐ login page-க்கு அனுப்பு
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$userName = $_SESSION['user_name'];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>


<body>
    



<div class="app">

    <!-- ================= HOME ================= -->

    <section id="homePage" class="page">

        <div class="header">
            Home
        </div>

        
        <div class="home-content">

            <div class="balance-card">

                <div class="balance-label">
                    Available Balance
                </div>

                <div class="balance-amount">
                    Ω100
                  <br>  <span> 1Ω = 1 INR</span>
                </div>

                <button class="detail-btn" onclick="showPage('detail')">
                    Detail
                </button>

            </div>


            <div class="action-bar">

                <div>
                    <span class="deposit">↑</span>
                    Deposit
                </div>

                <div class="action-line"></div>

                <div>
                    <span class="withdraw">↓</span>
                    Withdrawal
                </div>

            </div>

            <hr>


            <div class="home-menu">

                <div class="home-menu-item">

                    <div class="home-icon" onclick="showPage('usdpage')">
                        ¥
                    </div>

                    <p>USDT</p>

                </div>


                <div class="home-menu-item"
                     onclick="showPage('taskPage')">

                    <div class="home-icon">
                        ☰
                    </div>

                    <p>Task</p>

                </div>

                   <!-- Team -->
                <div class="home-menu-item">

                    <div class="home-icon" onclick="showPage('Teampage')">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
     stroke="currentColor" stroke-width="2" stroke-linecap="round" 
     stroke-linejoin="round" class="lucide lucide-users preview-icon">
    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
    <path d="M16 3.128a4 4 0 0 1 0 7.744"/>
    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
    <circle cx="9" cy="7" r="4"/>
    </svg>
                    </div>

                    <p>Team</p>

                </div>

                <!-- Order -->
                <div class="home-menu-item">

                    <div class="home-icon" onclick="showPage('Orderpage')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download preview-icon">
                        <path d="M12 15V3"/>
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <path d="m7 10 5 5 5-5"/></svg>
                    </div>

                    <p>Order</p>

                </div>

    </div>

 </div>







 

<hr class="hrm">

<div id="Tutorialpage" class="tutorial">
     Tutorial :- 
</div>

       <div class="photohead">USDT  :</div><br class="br">
  <div class="photo">
      <br><br><br>
      <br><br><br>
      <br><br><br>
      
  </div>
   <div class="photohead">Task  :</div>
    <div class="photoa">
      <br><br><br>
      <br><br><br>
      <br><br><br>
  </div>


   <div class="photohead">Invite  :</div>
    <div class="photob">
      <br><br><br>
      <br><br><br>
      <br><br><br>
  </div>

   <div class="photohead">Bind  Guide :</div>
    <div class="photoc">
        
      <br><br><br>
      <br><br><br>
      <br><br><br>
  </div>



    </section>



    <!-- ================= PAYMENT  PAGE================= -->

    <section id="paymentPage" class="page">

        <div class="header">
            Payment
        </div>


        <div class="cashback-card">

            <div class="cashback-top">

                <small>Cashback</small>

                <h1>3.5%</h1>

            </div>


            <div class="cashback-bottom">

                <div class="cash-box">

                    <span>Balance</span>

                    <b>Ω100</b>

                </div>


                <div class="cash-small">

                    <div class="cash-box">

                        <span>Reward</span>

                        <b>Ω0</b>

                    </div>


                    <div class="cash-box">

                        <span>Pending</span>

                        <b>Ω0</b>

                    </div>

                </div>

            </div>

        </div>


        <div class="warning ">
            ⚠ Please use Freecharge or Mobikwik or Paytm wallet for payment!
        </div>


        <div class="filters">

            <button class="filter active" onclick="selectFilter(this)">
                Top Picks
            </button>

            <button class="filter"  >
                10000-50000
            </button>


        </div>


        <div id="paymentList"></div>
        <div id="paymentb"></div>
        <div id="paymentc"></div>
        <div id="paymentd"></div>

    </section>



    <!-- ================= WALLET ================= -->

    <section id="walletPage" class="page">



        <div class="wallet-header">
            

            <h1>
                Tool
            </h1>

        </div>


        <div id="walletCards">
            <div class="wa">No Wallet !</div>
        </div>


        <button class="add-wallet-btn"
                onclick="showPage('addToolPage')">

            Add

        </button>

    </section>





    
    <!-- ================= Detail ================= -->

    <section id="detail" class="page">

        <div class="wallet-header">

            <h1>
                Details
            </h1>

        </div><hr>


        <div class="wa">
            No Details !
        </div>




    </section>




    <!-- ================= ADD TOOL ================= -->

    <section id="addToolPage" class="page">

        <div class="add-header">

            <button onclick="showPage('walletPage')">
                ←
            </button>

            <h1>
                Add Tools
            </h1>

        </div><hr>


        <h2 class="choose-title">
            Choose Your Payment Wallet
        </h2>






        <div class="tool-list">


            <!-- Freecharge -->

            <div class="tool-item selected"
                 onclick="selectWallet(this,'Freecharge')">

                <div class="tool-logo freecharge-logo">
                    ➤
                </div>

                <div class="tool-info">

                    <h3>
                        Freecharge
                    </h3>

                </div>

                <div class="payout">
                    Payout
                </div>

            </div>



            <!-- Mobikwik -->

            <div class="tool-item"
                 onclick="selectWallet(this,'Mobikwik')">

                <div class="tool-logo mobikwik-logo">
                    M
                </div>

                <div class="tool-info">

                    <h3>
                        Mobikwik
                    </h3>

                    <p>
                        Payin 10.00 - 7000.00
                    </p>

                </div>

                <div class="payout">
                    Payout
                </div>

            </div>



            <!-- Paytm -->

            <div class="tool-item"
                 onclick="selectWallet(this,'Paytm')">

                <div class="tool-logo paytm-logo">
                    Paytm
                </div>

                <div class="tool-info">

                    <h3>
                        Paytm
                    </h3>

                    <p>
                        Payin 10.00 - 8000.00
                    </p>

                </div>

                <div class="payout">
                    Payout
                </div>

            </div>



            <!-- IndusPay -->

            <div class="tool-item"
                 onclick="selectWallet(this,'IndusPay')">

                <div class="tool-logo indus-logo">
                    IN
                </div>

                <div class="tool-info">

                    <h3>
                        IndusPay
                    </h3>

                    <p>
                        Payin 10.00 - 1000.00
                    </p>

                </div>

            </div>



            <!-- Navi -->

            <div class="tool-item"
                 onclick="selectWallet(this,'Navi')">

                <div class="tool-logo navi-logo">
                    N
                </div>

                <div class="tool-info">

                    <h3>
                        Navi
                    </h3>

                    <p>
                        Payin 100.00 - 5000.00
                    </p>

                </div>

            </div>



            <!-- Google Pay -->

            <div class="tool-item"
                 onclick="selectWallet(this,'GooglePay')">

                <div class="tool-logo gpay-logo">
                    G Pay
                </div>

                <div class="tool-info">

                    <h3>
                        GooglePay
                    </h3>

                    <p>
                        Payin 50.00 - 5000.00
                    </p>

                </div>

            </div>

        </div>



        <button class="sure-btn"
                onclick="confirmWallet()">

            Sure

        </button>

    </section>


 <!--  ============================  msg  =============================== --> 


<section id="Messag" class="page">

<div class="msg-open" id="Msg">
  <div class="msg-open-box">
    <h3 id="msgTitle">Success!</h3>
    <p id="msg-resul">Operation completed.</p>
    <button onclick="MsgClose()">OK</button>
  </div>
</div>

</section>


    <!-- ================= TASK ================= -->



    <section id="taskPage" class="page">

        <div class="task-header">

            <button onclick="showPage('homePage')">
                ←
            </button>

            <h1>
                Task Rewards
            </h1>

        </div>


        <p class="task-subtitle">
            Earn tokens by completing tasks
        </p>


        <div class="task-tabs">

            <button class="active">
                Newbie Tasks
            </button>

        </div>


        <div class="task-card">

            <div class="progress">

                <div class="progress-bar"
                     style="width:0%">
                </div>

            </div>

            <span>
                0 / Ω 200
            </span>


            <h3>
                New Member Tasks
            </h3>

            <p>
                Register and start trading. Once your
                total trading amount Reaches 500 , Get 200 INR
            </p>


            <div class="task-bottom">

                <b>
                    ⭐ 200
                </b>

                <button onclick="showPage('paymentPage')">
                    In Progress
                </button>

            </div>

        </div>



        <div class="task-card">

            <div class="progress">

                <div class="progress-bar"
                     style="width:0%">
                </div>

            </div>

            <span>
                0 / 1
            </span>


            <h3>
                Bind Wallet Type Paytm Business Reward
            </h3>

            <p>
                You can get rewards by binding your
                Paytm Business wallet Get 88 INR
            </p>


            <div class="task-bottom">

                <b>
                    ⭐ 88
                </b>

                <button onclick="showPage('walletPage')">
                    Go to Bind
                </button>

            </div>

        </div>

    </section>








    <!--  USDT Page  -->

<section id="usdpage" class="page">

        <div class="task-header">

            <button onclick="showPage('homePage')">
                ←
            </button>

            <h1>
                USDT 
            </h1>

        </div>


        <p class="task-subtitle">
            Current Markat Price Will Extra Price ! 
        </p>

<div class="Usd-Card">
    <div class="ust-not-wrk"> 
   
        <h2>Buying Not Work !</h2><br>
         

       <span>Please Wait...   OPENING Fast In USDT Buying..<br>  [ ~OOPs! ] !</span> 

    </div>
  


</div>


    </section>





        <!--  Order Page  -->

<section id="Orderpage" class="page">

        <div class="task-header">

            <button onclick="showPage('homePage')">
                ←
            </button>

            <h1>
                Order
            </h1>

        </div>


        <div id="orderCards">
            <p class="task-subtitle">No Record !</p>
        </div>






    </section>






            <!--  Team Page  -->

<section id="Teampage" class="page">

        <div class="task-header">

            <button onclick="showPage('homePage')">
                ←
            </button>
            <h1>
                Team
            </h1>

        </div>


        <p class="task-subtitle">
              No Record !
        </p>



    </section>



    <!-- =====================================================
         MY ASSET PAGE
         ===================================================== -->

    <section id="myPage" class="page">

        <div class="header">
            My Asset
        </div>


        <!-- Asset Balance -->

        <div class="asset-card">


            <!-- Deposit -->

     <div class="asset-box">

                <div class="asset-icon blue-icon">
                    <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                           stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download preview-icon">
                        <path d="M12 15V3"/>
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <path d="m7 10 5 5 5-5"/></svg>
                </div>

                <div>

                    <p >
                       Deposit 
                    </p>

                    <h2>
                        Ω 0
                    </h2>

                </div>

            </div>



            <!-- Withdraw -->

            <div class="asset-box">

                <div class="asset-icon purple-icon">
                    <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link preview-icon">
                        <path d="M15 3h6v6"/><path d="M10 14 21 3"/>
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                </div>

                <div>

                    <p>
                        Withdraw
                    </p>

                    <h2>
                        Ω 0
                    </h2>

                </div>

            </div>



            <!-- Commission -->

            <div class="asset-box">

                <div class="asset-icon yellow-icon">
                    <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-coins preview-icon">
                     <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"/>
                     <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 16 6 6"/><circle cx="16" cy="9" r="2.9"/>
                    <circle cx="6" cy="5" r="3"/></svg>
                </div>

                <div>

                    <p>
                        Commission
                    </p>

                    <h2>
                        Ω 0
                    </h2>

                </div>

            </div>

        </div>



        <!-- My Menu -->

        <div class="my-menu-card">

            <div class="my-menu-grid">


                <div class="my-menu-item">

                    <div class="my-menu-icon"  onclick="showPage('walletPage')">
                        <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet preview-icon">
                         <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"/>
                         <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"/></svg>
                    </div>

                    <span >
                        Wallet
                    </span>

                </div>




                <div class="my-menu-item">

                    <div class="my-menu-icon" onclick="showPage('Chatpage')">
                        <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone preview-icon">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    </div>

                    <span>
                        Chat Support
                    </span>

                </div>


                <div class="my-menu-item">

                    <div class="my-menu-icon" onclick="showPage('Messagepage')">
                        <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-more preview-icon">
                        <path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/>
                        <path d="M12 11h.01"/>
                        <path d="M16 11h.01"/>
                        <path d="M8 11h.01"/></svg>
                    </div>

                    <span>
                        Message
                    </span>

                </div>





                <div class="my-menu-item">

                    <div class="my-menu-icon" onclick="showPage('homePage')">
                        <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="lucide lucide-book-open preview-icon">
                        <path d="M12 5v16"/>
                            <path d="M20.001 19A2 2 0 0022 17V5a2 2 0 00-1.999-2L16 3.002A5 5 0 0012 5a5 5 0 00-4-2H4a2 2 0 00-2 2v12a2 2 0 001.999 2H8a5 5 0 014 2 5 5 0 014-2z"/></svg>
                    </div>

                    <span>
                        Tutorial
                    </span>

                </div>


            </div>


            <div class="my-version">
                v1.0.0
            </div>

        </div>



        <!-- Logout -->

        <button class="my-logout-btn">
            Logout
        </button>

    </section>


        <!-- =====================================================
         support Page  chat 
         ===================================================== -->

    <section id="Chatpage" class="page">

     <div class="header">
         Support
    </div><hr>

    <div class="Get-Card">


            <div class="tool-item selected"
                 onclick="selectWallet(this,'Freecharge')">

                <div class="Supporta-logo Support-logo">
                    ➤
                </div>

                <div class="support-info">
                       TelegramChat
                </div>
     </div>


<br>



            <div class="tool-item selected"
                 onclick="selectWallet(this,'Freecharge')">

                <div class="Supporta-logo Insta-logo">
                    @
                </div>

                <div class="support-info">
                        InstagramChat
                </div>

            </div>
               

    </div>




    </section>


    <!-- =====================================================
         massage PAGE
         ===================================================== -->

    <section id="Messagepage" class="page">

     <div class="header">
            Message
    </div><hr>

 

        <p class="rev">
               No Recever Message !
        </p>

    </section>

    <!--  ====================================================                                      ==============================
  ========================================================
  ========================================================
  ========================================================    Order Payment page Start                                   ==============================
  ========================================================
  ========================================================
  ========================================================           -->


    <!-- =====================================================
       Order PAGE price : 100
         ===================================================== -->

    <section id="myPagea" class="page">

        <div class="header">
             Order
        </div>


 <div class="Get-Cardd">
           <div class="INRback" id="detailOrderAmount"> INR - 100 </div>
</div>

        <!-- Order detile -->

        <div class="Get-Card-Order">


    <div class="INRbacka">
        <b>expire: </b> <span id="expireTimer"> 10:00 </span>
    </div>
        <div class="INRbackaaa">
        
    </div>
  
<br><br>

      

<div class="INRbackaa">
               PayeeAccount :  <span class="value" contenteditable="true" spellcheck="false">40046932147</span>

  <button class="copy-btn" onclick="copyWallet(this)">
        <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy preview-icon">
    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
 </button>
</div> 




<div class="INRbackab">
            IFCS Code :  <span class="value" contenteditable="true" spellcheck="false">SBIN0006720</span>

<button class="copy-btn" onclick="copyWallet(this)">
        <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy preview-icon">
    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
 </button>

</div>               




<div class="INRbackac">
     
                Acc Holder Name :  <span class="value">Arun</span>

  <button class="copy-btn" onclick="copyWallet(this)">
        <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy preview-icon">
    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
 </button>

</div>               



<div class="INRbackad">
 Payout Wallet :  <span class="value" >paytm</span>



</div>            


<div class="INRbackae">
                Payout UPI ID :  <span class="value">*******@paytm</span>

  <button class="copy-btn" onclick="copyWallet(this)">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy preview-icon">
    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
 </button>

</div>               


<div class="INRbackaf">
                 Status :  <a id="detailOrderStatus">Active</a>


 

</div>              



 <div class="INRbackag">
                 Order No :  <span class="value" id="detailOrderId">268768544</span>

<button class="copy-btn" onclick="copyWallet(this)">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy preview-icon">
    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
 </button>

</div>              

<br>

<div class="INRbackah" onclick="showPopup('Order Cancel ?')">
                 Order Cancel :  <span>Cancel</span>


</div>


<div class="screenshot">
    ⚠ Please Upload Your Payment ScreenShot !<br><br>
     <span>⚠ Not Upload 99.80%  of Failed your Payment ! </span>
</div>
            
<div class="upload-box">

    <input type="file" id="photoInput" accept="image/*" hidden >

    <button class="upload-btn" id="upload" onclick="document.getElementById('photoInput').click()">
        Upload File
    </button>

    <img  id="previewImage" class="preview-image" style="display:none;">
      </div>
  </div>

        <button class="go-btn" onclick="alert('Allow It Payment App')"> Go Pay </button>
 </section>



    <!-- =====================================================
       Order PAGE price : 150
         ===================================================== -->

    

    <!-- =====================================================
         MY Order PAGE price :200
         ===================================================== -->

    

    <!-- =====================================================
         MY Order PAGE price 250
         ===================================================== -->

    

 
<!--  ====================================================                                      ==============================
  ========================================================
  ========================================================
  ========================================================    Order Payment page End                                    ==============================
  ========================================================
  ========================================================
  ========================================================  -->














<!--   Popup Msg Order Cancel   -->

<div id="customPopup" class="popup-overlay">
    <div class="popup-box">

        <p id="popupMessage">Order Cancel ? </p>

        <button class="popup-no-btn" onclick="noPopup()">
            NO
        </button><br><br>


        <button class="popup-btn" onclick="closePopup()">
            YES
        </button>


    </div>
</div>





    <!-- =====================================================
         BOTTOM nav
         ===================================================== -->

    <nav class="bottom-nav">

        <!-- Home -->

        <div class="nav-item"
             onclick="showPage('homePage',this)">

    <span><svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user preview-icon"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>

            <small>
                Home
            </small>

        </div>



        <!-- Payment -->

        <div class="nav-item"
             onclick="showPage('paymentPage',this)">

            <span>
                <svg  width="24" height="24"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dollar-sign preview-icon">
                <circle cx="12" cy="12" r="10"/>
                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/>
                <path d="M12 18V6"/></svg>
            </span>

            <small>
                Payment
            </small>

        </div>



        <!-- Wallet -->

        <div class="nav-item center-nav"
             onclick="showPage('walletPage',this)">

            <div class="wallet-center">
                <svg  width="24" height="24" color="black" viewBox="0 0 24 24" fill="none" 
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark preview-icon">
                <path d="M10 18v-7"/>
                <path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z"/>
                <path d="M14 18v-7"/><path d="M18 18v-7"/>
                <path d="M3 22h18"/><path d="M6 18v-7"/></svg>
            </div>

            <small>
                Wallet
            </small>

        </div>


<!-- Invite -->

<div class="nav-item"
     onclick="showPage('invitePage',this)">

    <span>
        <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link preview-icon">
         <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
    </span>

    <small>
        Invite
    </small>

</div>



        <!-- My -->

        <div class="nav-item"
             onclick="showPage('myPage',this)">

            <span>
                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user preview-icon">
                <circle cx="12" cy="12" r="10"/><circle cx="12" cy="10" r="3"/>
                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"/></svg>
            </span>

            <small>
                My
            </small>

        </div>


    </nav>



<!-- =====================================================
     INVITE PAGE
     ===================================================== -->

<section id="invitePage" class="page">

        <div class="header">
            Invite
        </div>

<div class="my-menu-cardd">

     <div class="nav-itemm">

         <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" 
     stroke="currentColor" stroke-width="2" stroke-linecap="round" 
     stroke-linejoin="round" class="lucide lucide-users preview-icon">
    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
    <path d="M16 3.128a4 4 0 0 1 0 7.744"/>
    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
    <circle cx="9" cy="7" r="4"/>
    </svg> <br>invite member <br> <br>
         
         <span>0</span> 
    
     </div>


     <div class="nav-itema">
        <div class="nav-itemaa">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-coins preview-icon">
                     <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"/>
                     <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 16 6 6"/><circle cx="16" cy="9" r="2.9"/>
                    <circle cx="6" cy="5" r="3"/></svg>  <a> Commission</a> <br>
        </div><br>


       <span> 0.00 Ω</span>
    
        </div>
</div>


<div class="link">

    Your Invite link <br><br>


<span>https//Yakkpay/reg/invite#23sd32.com</span><br><br>

<button class="copy-btn" onclick="copyWallet(this)"> 
       <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy preview-icon">
    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
 </button>

</div>






<hr class="hrm">

   <div class="import">
      ⚠ Please Don't Click Closed Selling 

    <h6>Reasion : Your Amount Not Selled</h6>
   </div>

        <button class="Selling-btnn" >
            Closed Selling . . .
        </button>


</section>


<!--       ==========================  Bind wallet     ==================================       -->



<section id="wallet-add"  class="page">

    <div class="header"> Bind Wallet </div>

    

    <div class="walletadd">

          <div id="step2" class="">
             <h3>Mobile Number</h3>
              <input id="mobile" placeholder="Enter your mobile number" maxlength="10">
              <button class="botto" onclick="sendOTP()">Continue</button>
           </div>

         <div id="step3" class="hidden">
            <h3>OTP Verification</h3>
            <p id="notice"></p>
            <input id="otp" placeholder="Enter OTP" maxlength="6">
            <button class="botto" onclick="verifyOTP()">Verify</button>
           </div>

           <div id="step1" class="hidden">
               <h3>Enter Your UPI ID</h3>
               <input type="text" id="upi_id" name="upi_id" placeholder="example@paytm" required>
               <button class="botto" type="button" onclick="bindWallet()">
                Submit</button>
           </div>

        <div id="step4" class="hidden">
            <div class="hid">
           <h3>Wallet Binded</h3>
           <p>Verification Seccess ✓</p>
           <button class="botto" onclick="showPage('walletPage')">back To Home</button>
         </div>
        </div>

         <p id="message"></p>
    </div>


</section>







</div>





<script>




/* =====================================================
   PAGE NAVIGATION
===================================================== */

function showPage(pageId, navElement = null) {

    /* Hide all pages */

    document
        .querySelectorAll(".page")
        .forEach(page => {

            page.classList.remove("active");

        });


    /* Show selected page */

    const page =
        document.getElementById(pageId);


    if (page) {

        page.classList.add("active");

    }


    /* Remove old active navigation */

    document
        .querySelectorAll(".nav-item")
        .forEach(item => {

            item.classList.remove("active");

        });


    /* Add active navigation */

    if (navElement) {

        navElement.classList.add("active");

    }


    /* Scroll to top */

    window.scrollTo({
        top: 0,
        behavior: "instant"
    });

}







/* =====================================================
   PAYMENT DATA 1
===================================================== */

const paymentData = [

    {
        code: "SUIJbH",
        amount: 100,
        income: 3.5
    },

    {
        code: "Qqmc24",
        amount: 100,
        income: 3.5
    },

 
    {
        code: "MbIJbA",
        amount: 100,
        income: 3.5
    },

    {
        code: "Slmc1x",
        amount: 100,
        income: 3.5
    },



];



/* =====================================================
   PAYMENT DATA 2
===================================================== */

const payment = [



    {
        code: "X416co",
        amount: 150,
        income: 8.05
    },

    {
        code: "A92kLp",
        amount: 150,
        income: 5.25
    },



];


/* =====================================================
   PAYMENT DATA 3
===================================================== */

const paymentc = [



    {
        code: "X416co",
        amount: 200,
        income: 8.05
    },

    {
        code: "A92kLp",
        amount: 200,
        income: 5.25
    },



];


/* =====================================================
   PAYMENT DATA 4
===================================================== */

const paymentd = [



    {
        code: "X416co",
        amount: 250,
        income: 8.05
    },

    {
        code: "A92kLp",
        amount: 250,
        income: 5.25
    },



];




/* =====================================================
  Order > 'Go pay' button Hide 
===================================================== */


const photoInput = document.getElementById("photoInput");
const goPayButton = document.querySelector(".go-btn");

photoInput.addEventListener("change", function () {
    if (this.files.length > 0) {
        goPayButton.style.display = "none";
    } else {
        goPayButton.style.display = "block";
    }
});












/* =====================================================
  reverse Time
===================================================== */




let expireInterval;

function startExpireTimer() {

    // 29 minutes 20 seconds
    let time = 10 * 60 ;

    // Already running timer இருந்தால் stop
    clearInterval(expireInterval);

    const timer = document.getElementById("expireTimer");

    if (!timer) return;

    function updateTimer() {

        let minutes = Math.floor(time / 60);
        let seconds = time % 60;

        // 09, 08, 07 மாதிரி காட்ட
        minutes = String(minutes).padStart(2, "0");
        seconds = String(seconds).padStart(2, "0");

    timer.textContent = `${minutes}:${seconds}`;

        if (time <= 0) {
            clearInterval(expireInterval);
            timer.textContent = "00:00";
            return;
        }

        time--;
    }

    // உடனே 29:20 காட்ட
    updateTimer();

    // ஒவ்வொரு 1 second-க்கும் குறையும்
    expireInterval = setInterval(updateTimer, 1000);
}


/* =====================================================
   SHOW PAGE
===================================================== */

function showPage(pageId, navElement) {

    /* Hide all pages */

    document
        .querySelectorAll(".page")
        .forEach(page => {

            page.style.display = "none";

        });


    /* Show selected page */

    const selectedPage =
        document.getElementById(pageId);

    if (selectedPage) {

        selectedPage.style.display = "block";

    }


    /* Remove active from navigation */

    document
        .querySelectorAll(".nav-item")
        .forEach(item => {

            item.classList.remove("active");

        });


    /* Add active to clicked navigation */

    if (navElement) {

        navElement.classList.add("active");

    }

}


/* =====================================================
   RENDER PAYMENT 1
===================================================== */

function Paymenta() {

    const container =
        document.getElementById("paymentList");


    if (!container) {
        return;
    }


    container.innerHTML =

        paymentData.map(item => {

            return `

                <div class="inr-card">

                    <div class="inr-left">

                        <h3>
                            INR
                        </h3>

                        <p>
                            Amount:
                            <b>
                                ₹${item.amount}
                            </b>
                        </p>

                        <p class="income">

                            Income:

                            <span>
                                +${item.income}
                            </span>

                        </p>

                    </div>


                    <div class="inr-right">

                        <div class="code">

                            <span>
                                Code
                            </span>

                            ${item.code}

                        </div>


                        <button
                            class="claim"
                        onclick="getPaymenta(this)">

                            Get

                        </button>

                    </div>

                </div>

            `;

        }).join("");

}






function openSharedPayment(button, amount, income, codeValue) {
    button.disabled = true;
    button.innerText = "Please wait...";

    // Save the selected Get order
    const order = {
        id: "YK" + Date.now().toString() + Math.floor(100 + Math.random() * 900),
        amount: Number(amount) || 0,
        income: Number(income) || 0,
        code: String(codeValue || ""),
        status: "Pending",
        createdAt: new Date().toLocaleString()
    };

    let savedOrders = [];
    try {
        savedOrders = JSON.parse(localStorage.getItem("savedOrders") || "[]");
        if (!Array.isArray(savedOrders)) savedOrders = [];
    } catch (error) {
        savedOrders = [];
    }

    savedOrders.unshift(order);
    localStorage.setItem("savedOrders", JSON.stringify(savedOrders));
    renderOrderCards();

    setTimeout(function () {
        button.disabled = false;
        button.innerText = "Get";

        const amountHeading = document.getElementById("selectedPaymentAmount");
        if (amountHeading) amountHeading.textContent = amount;

        showPage("myPagea");
        startExpireTimer();
    }, 2000);
}

function getPaymentDetails(button, fallbackAmount) {
    const card = button.closest(".inr-card");

    const amountText = card
        ? card.querySelector(".inr-left p b")?.textContent
        : "";

    const incomeText = card
        ? card.querySelector(".inr-left .income span")?.textContent
        : "";

    const codeElement = card
        ? card.querySelector(".inr-right .code")
        : null;

    const codeValue = codeElement
        ? codeElement.innerText.replace(/^Code\s*/i, "").trim()
        : "";

    const amount = Number(String(amountText).replace(/[^\d.]/g, "")) || fallbackAmount;
    const income = Number(String(incomeText).replace(/[^\d.]/g, "")) || 0;

    openSharedPayment(button, amount, income, codeValue);
}

function getPaymenta(button) {
    getPaymentDetails(button, 100);
}

function getPaymentb(button) {
    getPaymentDetails(button, 150);
}

function getPaymentc(button) {
    getPaymentDetails(button, 200);
}

function getPaymentd(button) {
    getPaymentDetails(button, 250);
}


// Display saved orders inside Orderpage
function renderOrderCards() {
    const container = document.getElementById("orderCards");
    if (!container) return;

    let savedOrders = [];
    try {
        savedOrders = JSON.parse(localStorage.getItem("savedOrders") || "[]");
        if (!Array.isArray(savedOrders)) savedOrders = [];
    } catch (error) {
        savedOrders = [];
    }

    if (savedOrders.length === 0) {
        container.innerHTML = '<p class="task-subtitle">No Record !</p>';
        return;
    }

    container.innerHTML = savedOrders.map(order => `
        <div class="saved-order-card" role="button" tabindex="0"
             onclick="openSavedOrder('${escapeOrderText(order.id)}')"
             onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openSavedOrder('${escapeOrderText(order.id)}')}">
            <div class="saved-order-heading">
                <span class="saved-order-title">Order</span>
                <span class="saved-order-status">${escapeOrderText(order.status || "Pending")}</span>
            </div>

            <div class="saved-order-row">
                <span>Order ID</span>
                <b>${escapeOrderText(order.id)}</b>
            </div>

            <div class="saved-order-row">
                <span>Amount</span>
                <b>₹${escapeOrderText(order.amount)}</b>
            </div>

            <div class="saved-order-row">
                <span>Income</span>
                <b>+${escapeOrderText(order.income)}</b>
            </div>

            <div class="saved-order-row">
                <span>Code</span>
                <b>${escapeOrderText(order.code)}</b>
            </div>

            <div class="saved-order-date">
                ${escapeOrderText(order.createdAt || "")}
            </div>
        </div>
    `).join("");
}


// Open the existing order details page for the selected saved order
function openSavedOrder(orderId) {
    let savedOrders = [];

    try {
        savedOrders = JSON.parse(localStorage.getItem("savedOrders") || "[]");
        if (!Array.isArray(savedOrders)) savedOrders = [];
    } catch (error) {
        savedOrders = [];
    }

    const order = savedOrders.find(item => String(item.id) === String(orderId));

    if (!order) {
        alert("Order not found");
        return;
    }

    const amountElement = document.getElementById("detailOrderAmount");
    const orderIdElement = document.getElementById("detailOrderId");
    const statusElement = document.getElementById("detailOrderStatus");

    if (amountElement) {
        amountElement.textContent = "INR - " + order.amount;
    }

    if (orderIdElement) {
        orderIdElement.textContent = order.id;
    }

    if (statusElement) {
        statusElement.textContent = order.status || "Pending";
    }

    // Open the existing order detail page (same page used after Get)
    showPage("myPagea");
}


// Escape saved order values before displaying them
function escapeOrderText(value) {
    return String(value ?? "").replace(/[&<>"']/g, function (char) {
        return {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#039;"
        }[char];
    });
}

/* =====================================================
    100-199 , 200-499 button change
===================================================== */

function selectFilter(button) {

    document.querySelectorAll('.filter').forEach(btn => {
        btn.classList.remove('active');
    });

    button.classList.add('active');

}





/* =====================================================
   MSG POPUP CODE
===================================================== */


function showPopup(message, title = "Success!") {
    document.getElementById("popupMessage").textContent = message;
    document.getElementById("customPopup").classList.add("show");
}

function closePopup() {
    document.getElementById("customPopup").classList.remove("show");


 if (showPopup) {

        // OK click
        showPage("paymentPage");

    } 


}

    function noPopup() {
    document.getElementById("customPopup").classList.remove("show");


 if (noPopup) {

        //  click


    } 
}





/* =====================================================
   RENDER PAYMENT 1
===================================================== */

function Paymentb() {

    const container = document.getElementById("paymentb");

    if (!container) {
        return;
    }

    container.innerHTML = payment.map(item => {

        return `
            <div class="inr-card">

                <div class="inr-left">

                    <h3>INR</h3>

                    <p>
                        Amount:
                        <b>₹${item.amount}</b>
                    </p>

                    <p class="income">
                        Income:
                        <span>+${item.income}</span>
                    </p>

                </div>

                <div class="inr-right">

                    <div class="code">
                        <span>Code</span>
                        ${item.code}
                    </div>

                    <button
                        class="claim"
                        onclick="getPaymentb(this)">
                        Get
                    </button>

                </div>

            </div>
        `;

    }).join("");
}




/* =====================================================
   RENDER PAYMENT 1
===================================================== */

function Paymentc() {

    const container =
        document.getElementById("paymentc");


    if (!container) {
        return;
    }


    container.innerHTML =

        paymentc.map(item => {

            return `

                <div class="inr-card">

                    <div class="inr-left">

                        <h3>
                            INR
                        </h3>

                        <p>
                            Amount:
                            <b>
                                ₹${item.amount}
                            </b>
                        </p>

                        <p class="income">

                            Income:

                            <span>
                                +${item.income}
                            </span>

                        </p>

                    </div>


                    <div class="inr-right">

                        <div class="code">

                            <span>
                                Code
                            </span>

                            ${item.code}

                        </div>


                        <button
                            class="claim"
                        onclick="getPaymentc(this)">

                            Get

                        </button>

                    </div>

                </div>

            `;

        }).join("");

}





/* =====================================================
   RENDER PAYMENT 1
===================================================== */

function Paymentd() {

    const container =
        document.getElementById("paymentd");


    if (!container) {
        return;
    }


    container.innerHTML =

        paymentd.map(item => {

            return `

                <div class="inr-card">

                    <div class="inr-left">

                        <h3>
                            INR
                        </h3>

                        <p>
                            Amount:
                            <b>
                                ₹${item.amount}
                            </b>
                        </p>

                        <p class="income">

                            Income:

                            <span>
                                +${item.income}
                            </span>

                        </p>

                    </div>


                    <div class="inr-right">

                        <div class="code">

                            <span>
                                Code
                            </span>

                            ${item.code}

                        </div>


                        <button
                            class="claim"
                        onclick="getPaymentd(this)">

                            Get

                        </button>

                    </div>

                </div>

            `;

        }).join("");

}







/* =====================================================
   START APP
===================================================== */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        /* Payment cards */

        if (typeof paymentData !== "undefined") {

            Paymenta(),Paymentb(),Paymentc(),Paymentd();

        }


        /* Open Home first */

        showPage(
            "homePage"
        );

        renderWalletCards();

    }
);





/* =====================================================
   CLAIMED PAYMENT
===================================================== */

function claimPayment() {

    alert(
        "Claimed Successfully!"
    );

}



/* =====================================================
   WALLET SELECTION
===================================================== */

let selectedWallet = "Freecharge";


function selectWallet(element, walletName) {

    document
        .querySelectorAll(".tool-item")
        .forEach(item => {

            item.classList.remove("selected");

        });


    element.classList.add("selected");


    selectedWallet =
        walletName;

}






/* =====================================================
  Cancel Order
===================================================== */




function cancelOrder() {

    const confirmCancel = confirm("Are you sure you want to cancel?");

    if (confirmCancel) {

        // OK click
        showPage("paymentPage");

    } else {

        // No click
        return;

    }
}






/* =====================================================
   SURE BUTTON
===================================================== */

function confirmWallet() {

    if (!selectedWallet) {

        alert(
            "Please select a wallet"
        );

        return;

    }


    showPage(
        "wallet-add"
    );

}






/* =====================================================
  Upload Photo
===================================================== */

document.getElementById("photoInput").addEventListener("change", function () {

    const file = this.files[0];

    if (file) {

        const image = document.getElementById("previewImage");

        image.src = URL.createObjectURL(file);

        image.style.display = "block";
    }

});

/* =====================================================
  Copy Script
===================================================== */

function copyWallet(button) {
    const wallet = button.parentElement.querySelector("span").innerText;
    navigator.clipboard.writeText(wallet);
    
}

/* =====================================================
  selling
===================================================== */


  const btn = document.querySelector(".Selling-btnn");

  btn.addEventListener("click", function() {
    if (btn.innerText.trim() === "Closed Selling . . .") {
      btn.innerText = "Not Selling" ;
    } else {
      btn.innerText = "Closed Selling . . .";
    }
  });



/* =================================== wallet bind ============================= */

  function continueWallet() {
  if (!wallet.value) {
    alert("Select a wallet");
    return;
  }
  step1.classList.add("hidden");
  step2.classList.remove("hidden");
}

  
function sendOTP() {
  if (!/^[0-9]{10}$/.test(mobile.value)) {
    alert("Enter valid mobile number");
    return;
  }

    mobile.value = "";

  step2.classList.add("hidden");
  step3.classList.remove("hidden").reset();


}


function verifyOTP() {
  if (!otp.value) {
    
  }  else {
    step3.classList.add("hidden");
    step1.classList.remove("hidden");
  }


}



function bindWallet() {

    const upiInput = document.getElementById("upi_id");
    const upi = upiInput.value.trim();

    // Validate UPI ID
    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z]{2,}$/.test(upi)) {
        alert("Enter valid UPI ID");
        return;
    }

    // Get previously saved wallets
    let wallets = [];

    try {
        wallets = JSON.parse(localStorage.getItem("savedWallets") || "[]");
        if (!Array.isArray(wallets)) {
            wallets = [];
        }
    } catch (error) {
        wallets = [];
    }

    // Prevent duplicate UPI IDs
    if (wallets.some(item => item.upi === upi)) {
        alert("This UPI ID already exists!");
        return;
    }

    // Save selected wallet name and UPI ID
    wallets.push({
        name: selectedWallet,
        upi: upi
    });

    localStorage.setItem("savedWallets", JSON.stringify(wallets));

    // Update wallet cards
    renderWalletCards();

    // Show success step
    step1.classList.add("hidden");
    step4.classList.remove("hidden");

    // Clear UPI input
    upiInput.value = "";
}


// Render saved wallets inside walletPage
function renderWalletCards() {

    const container = document.getElementById("walletCards");

    if (!container) {
        return;
    }

    let wallets = [];

    try {
        wallets = JSON.parse(localStorage.getItem("savedWallets") || "[]");
        if (!Array.isArray(wallets)) {
            wallets = [];
        }
    } catch (error) {
        wallets = [];
    }

    if (wallets.length === 0) {
        container.innerHTML = '<div class="wa">No Wallet !</div>';
        return;
    }

    container.innerHTML = wallets.map(item => `
        <div class="wallet-card saved-upi-card">

            <div class="wallet-name">UPI</div>

            <div class="wallet-status saved-upi-status">
                Enabled
            </div>

            <div class="wallet-number">
                ${escapeWalletText(item.upi)}
            </div>

            <div class="wallet-range saved-upi-range">
                <span>LimitedRange:50.00~1000000.00</span>
                <span>${escapeWalletText(item.name)}</span>
            </div>

        </div>
    `).join("");
}


// Escape saved text before displaying it in HTML
function escapeWalletText(value) {
    return String(value ?? "").replace(/[&<>"']/g, function (char) {
        return {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#039;"
        }[char];
    });
}

/* ======================  msg =================== */Paymenta
function Msgshow(title, message) {
  document.getElementById("MsgTitle").innerText = title;
  document.getElementById("msg-resul").innerText = message;
  document.getElementById("msg-open").style.display = "flex";
}

function MsgClose() {
  document.getElementById("Msg").style.display = "none";
}



</script>






<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:
    -apple-system,
    BlinkMacSystemFont,
    "Segoe UI",
    sans-serif;
}


body{
    
    background:#000;
    display:flex;
    justify-content:center;
}


.app{
    width:100%;
    max-width:420px;
    min-height:100vh;
    background:#fefeff;
    position:relative;
    padding-bottom:85px;
    overflow:hidden;
}


.page{
    display:none;
    min-height:100vh;
    padding:0 16px 30px;

}


.page.active{
    display:block;
    opacity: 1;

}

.pagee{
    display:none;
    min-height:100vh;
    padding:0 16px 30px;
}


.pagee.active{
    display:block;
}







/* ================= COMMON HEADER ================= */

.header{
    text-align:center;
    padding:22px 0 18px;
   color: #000983;
    font-size:27px;
    font-weight:700;
}


/* ================= HOME ================= */

.home-content{
    padding:10px 9px;
}


.balance-card{
    height:190px;
    border-radius:25px;
    padding:25px;
    color:rgb(250, 249, 249);
    position:relative;
    overflow:hidden;

    background-image: url(min.png.jpeg);


    box-shadow:
    0 8px 25px rgba(0,0,0,.10);
}


.balance-label{
    font-size:16px;
}





.balance-amount{
    font-size:42px;
    font-weight:700;
    margin-top:10px;
}

.balance-amount span{
    font-size: 13px;

}


.detail-btn{
    position:absolute;
    right:20px;
    bottom:20px;

    border:none;
    background:white;
    color:#060707;

    padding:10px 25px;
    border-radius:25px;

    font-size:15px;
    font-weight:700;
}

.link{
margin-top: 40px;
text-align: center;
font-size: 24px;
font-weight: 600;
margin-bottom: 30px;
}

.link span{
     text-align: center;
    margin-top: 20px;
    font-size: 16px;
    border: 2px solid rgb(39, 38, 38);
    padding: 12px;
    border-radius: 12px;
}


.action-bar{
    margin-top:19px;

    background:#000201;
    color:white;

    border-radius:21px;

    padding:20px;
    
    display:flex;
    align-items:center;
    justify-content:space-around;

    box-shadow:
    0 20px 15px rgba(179, 47, 47, 0.1);
}


.Usd-Card {
    width: 90%;
    background: rgb(250, 249, 249);
 
    border-radius: 20px;

    padding: 30px 12px;
    margin: 30px auto 0;

    display: grid;
    gap: 22px;

    box-shadow: 0 1px 5px  rgb(10, 10, 10);
}


.ust-not-wrk h2{
    font-size: 17px;
    font-weight: 600;
    text-align: center;

}

.ust-not-wrk span{
    text-align: center;
    font-size: 12px;
    font-weight: 600;
    color: rgb(163, 35, 35);
}


.action-bar div{
    flex:1;
    text-align:center;
    font-size:17px;
}


.action-line{
    max-width:1px;
    height:25px;
    background:rgba(255,255,255,.4);
}


.deposit{
    color:#63ff8d;
    margin-left: -30px;
    margin-right: 10px;
}


.withdraw{
    color:#f80404;
    margin-right: 10px;
    margin-left: 10px;
}


.home-content hr{
    margin:30px 0;
    border:0;
    border-top:1px solid #b32828;
}


.home-menu{
    display:flex;
    justify-content:space-between;
}


.home-menu-item{
    text-align:center;
    cursor:pointer;
}


.home-icon{
    width:55px;
    height:55px;

    border-radius:17px;

    background:white;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:23px;

    box-shadow:
    3px 2px 1px 1px  rgb(3, 3, 3, 0.30);
}


.home-menu-item p{
    margin-top:8px;
    font-size:13px;
    color:#555;
}




/* ================= PAYMENT ================= */

.cashback-card{
    background-image: url(min.png.jpeg);

    border-radius:22px;
    padding:33px;
    color:white;
}

.cashback-cardd{

    border-radius:22px;
    padding:33px 20px;
    color:white;
}




.cashback-top small{
    font-size:16px;
}


.cashback-top h1{
    font-size:40px;
    margin:3px 0 10px;
}


.cashback-bottom{
        display:flex;
    gap:7px;
}

.cashback-bottomm{
        display:flex;
    gap:7px;
}


.cash-box{
    flex:1;

    border:1px solid rgba(255,255,255,.4);
    background:rgba(255,255,255,.12);

    border-radius:12px;
   margin-left: 0.01px;
    padding:6px 1px;
}


.cash-box span{
    display:block;
    font-size:16px;
}


.cash-box b{
    display:block;
    text-align:center;
    margin-top:7px;
    margin-right: 90px;
    font-size: 22px;
}


.cash-small{
    flex:.8;
    display:flex;
    flex-direction:column;
    gap:7px;
}


.warning{
    text-align:center;
    color:#168d68;
    font-size:13px;
    padding:12px 4px;
}


.filters{
    display:flex;
    gap:8px;
    overflow-x:auto;
    padding:8px 0 12px;
}


.filter{
    border:0;
    border-radius:20px;

    padding:8px 16px;

    white-space:nowrap;

    background:#e5e7eb;
    color:#555;
}


.filter.active{
    background:#0414f1;
    color:white;
}


.inr-card{
    background:white;
    
    border-radius:15px;

    padding:14px;

    margin-bottom:10px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:
    0 3px 12px rgba(0,0,0,.05);
}


.inr-left h3{
    color:#1514b5;
    font-size:21px;
}




.inr-left p{
    color:#777;
    font-size:13px;
    margin-top:4px;
}


.inr-left b{
    color:#168d68;
}


.income{
    color:#222 !important;
}


.income span{
    color:rgb(243, 4, 4);
    font-weight:700;
}


.inr-right{
    text-align:right;
}


.code{
    font-size:12px;
    margin-bottom:13px;
}


.code span{
    background:#e8f4ef;
    color:#168d68;

    padding:3px 7px;
    border-radius:6px;
}


.claim{
    border:0;
    background:#e90808;
    color:white;

    padding:7px 18px;
    border-radius:20px;

    font-weight:700;
}




/* ================= TUTORIAL ================= */

.tutorial{
  color: green;
  font-size: 24px;
  margin-top: 22px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}

.hrsmall{
    margin-right: 298px;
}

.photohead{
    margin: 16px;
    font-size: 19px;
    margin-top: 50px;
    font-family:Georgia, 'Times New Roman', Times, serif;
}





/* ================= UPload Photo ================= */


.upload-box {
    text-align: center;
    margin-top: 110px;
    margin-left: -320px;
}

.upload-btn {
    padding: 10px 86px;
    border:groove;
    border-radius: 10px;
    background: white ;
    color:#0aa568;
    font-size: 16px;
    margin-right: -140px;
    font-weight: bold;
    cursor: pointer;
}

.preview-image {
    width: 200px;
    height: 130px;
    object-fit: cover;
    margin: 15px auto 0;
    border-radius: 12px;
    display: block;
    margin-right: 89px;

}

.rev{

    margin-top: 50px;
   text-align: center;
}



/* ================= WALLET TOOL ================= */

.wallet-header{
    text-align:center;
    padding:22px 0 18px;
}


.wallet-header h1{
    color:#1953f3;
    font-size:28px;
}


.wallet-card{
    height:230px;
    margin:5px 18px 30px;

    border-radius:28px;

    padding:32px;

    color:white;

    position:relative;
    overflow:hidden;

    background:
    linear-gradient(
        135deg,
        #0cae63,
        #16a86b 60%,
        #5796ed
    );

    box-shadow:
    0 10px 25px rgba(0,0,0,.12);
}


.wallet-background{
    position:absolute;

    width:180px;
    height:180px;

    border-radius:50%;

    right:-60px;
    top:-55px;

    background:#ffd65b;
}


.wallet-name{
    position:relative;
    font-size:28px;
    font-weight:700;
}


.wallet-number{
    position:relative;
    margin-top:8px;
    font-size:18px;
}


.wallet-status{
    position:absolute;
    right:25px;
    top:33px;

    border:2px solid white;
    border-radius:20px;

    padding:5px 17px;

    font-weight:700;
    letter-spacing:1px;
}


.wallet-range{
    position:absolute;

    left:20px;
    right:20px;
    bottom:22px;

    padding:16px;

    border:1px solid rgba(255,255,255,.5);

    background:rgba(255,255,255,.12);

    border-radius:15px;

    font-size:15px;
}

.hrline{
    margin-right: 1px;
    margin-top: 4px;
    color: rgb(218, 216, 216);
}

.wa{
  margin-left: 128px;
  margin-top: 40px;
}

.add-wallet-btn{
    width:70%;
    margin: 0 auto;
    display:block;

    border:0;

    background:#016d1c;
    color:white;
    margin-top: 70px;
    padding:9px;

    border-radius:30px;

    font-size:23px;
    font-weight:700;

    box-shadow:
    0 7px 15px rgba(20,140,100,.25);
}


/* ================= ADD TOOL ================= */

.add-header,
.setup-header,
.task-header{
    height:75px;

    display:flex;
    align-items:center;

    background:white;

    margin:0 -16px;
    padding:0 22px;

    border-radius:
    0 0 25px 25px;
}


.add-header button,
.setup-header button,
.task-header button{
    border:0;
    background:none;

    font-size:38px;
    color:black;

    cursor:pointer;
}




.add-header h1,
.setup-header h1{
    flex:1;
    text-align:center;

    color:#080753;

    font-size:27px;

    margin-right:35px;
}

.btn-a{
        border:0;
    background:none;

    font-size:30px;
    color:black;

    cursor:pointer;
}


.choose-title{
    text-align:center;

    color:#1030e4;

    font-size:22px;

    margin:38px 0 28px;
}


.payment-switch{
    background:white;

    border:1px solid #dce7e3;

    border-radius:35px;

    padding:5px;

    display:flex;

    margin-bottom:35px;
}

.photo{
  background-image: url(ust1.png.jpg);
    margin-top: 40px;
    border-radius: 20px;
}

.photoa{
  background-image: url(task2.png.jpeg);
    margin-top: 40px;
    border-radius: 20px;
}

.photob{
  background-image: url(invitefrend.png);
    margin-top: 40px;
    border-radius: 20px;
}

.photoc{
  background-image: url(bindwallet.png);
    margin-top: 40px;
    border-radius: 20px;
}


.payment-switch button{
    flex:1;

    border:0;
    background:transparent;

    padding:13px;

    border-radius:30px;

    font-size:18px;
    font-weight:600;

    color:#657080;
}


.payment-switch .personal-Btn{
    background:#0c1f42;
    color:white;

    box-shadow:
    0 5px 12px rgba(20,140,100,.2);
}


.tool-list{
    display:flex;
    flex-direction:column;
    gap:4px;
    padding: 1px 2px;
}


.tool-item{

     min-height:69px;

    background:rgb(252, 252, 252);

    border:2px solid #e4ece9 ;

    border-radius:17px;

    padding:2px 100px;

    margin-bottom: 30px 20px;
    display:flex;
    align-items:center;

    gap:30px;

    cursor:pointer;

    box-shadow:
    0 5px 15px rgba(0,0,0,.04);
}


.tool-item.selected{
    border-color:#15966a;
}


.tool-logo{
    width:20px;
    height:23px;
   margin-left: -86px;
   margin-right: 10px;
    border-radius:9px;

    display:flex;
    align-items:center;
    justify-content:center;

    flex-shrink:0;

    font-weight:800;
    font-size:20px;
}

.Supporta-logo{

    border-radius:9px;
    font-weight:800;
    font-size:22px;
    margin-left: -90px;
}

.freecharge-logo{
    background:#ff6522;
    color:white;
}

.Insta-logo{
    background: linear-gradient(135deg, pink, red);
    color:white;
}

.Support-logo{
    background:#0b53d8;
    color:white;
}


.mobikwik-logo{
    background:#1761e9;
    color:white;
    font-style:italic;
}


.paytm-logo{
    color:#0871a5;
    background:white;
    font-size:17px;
}


.indus-logo{
    background:#941d27;
    color:#ffd85a;
    font-size:13px;
}


.navi-logo{
    background:#3e006e;
    color:#38dc9c;
}


.gpay-logo{
    background:white;
    color:#4285f4;
    font-size:15px;
}


.tool-info{
    flex:1;
}


.tool-info h3{
    font-size:21px;
    font-weight:500;
    color:#20242c;
}

.support-info{
    font-size:21px;
    font-weight:400;
    color:#0c0c0c;
    text-align: center;
   
}


.tool-info p{
    color:#6eb9e4;
    font-size:13.7px;
    margin-top:3px;
}


.payout{
    color:#168d68;
    font-size:15px;
    margin-right: -80px;
}


.hrm{
  margin-top: 70px;
}

.sure-btn,
.next-btn{
    width:60%;

    display:block;

    margin:19px auto 0;

    border:0;

    background:rgb(19, 19, 75);
    color:white;

    padding:11px;

    border-radius:30px;

    font-size:19px;
    font-weight:700;

    box-shadow:
    0 7px 16px rgba(20,140,100,.25);
}

.Selling-btnn {
    width:60%;
   font-family: 'Times New Roman', Times, serif;
    display:block;

    margin:20px auto 0;

    border:0;

    background:rgb(11, 121, 2);
    color:rgb(248, 248, 247);

    padding:11px;

    border-radius:30px;

    font-size:16.7px;
    font-weight:700;

    box-shadow: 0 7px 16px rgba(20,140,100,.25);
}


.import{
    color: #016d1c;
    margin-top: 69px;

    text-align: center;
}

/* ================= WALLET SETUP ================= */

.setup-header h1{
    margin-right:35px;
}


.steps{
    display:flex;
    align-items:flex-start;

    margin:26px 1px 21px;
}


.step{
    width:60px;
    text-align:center;
}


.step-circle{
    width:31px;
    height:31px;

    margin:auto;

    border-radius:50%;

    border:2px solid #c8dfd8;

    display:flex;
    align-items:center;
    justify-content:center;

    color:#1464db;

    font-size:27px;
    font-weight:700;

    background:white;
}


.step.active .step-circle,
.step.completed .step-circle{
    background:#073df1;
    color:white;

    border-color:#15966a;

    box-shadow:
    0 0 0 8px #dcefe9;
}


.step p{
    margin-top:13px;

    color:#477b69;

    font-size:17px;
}


.step-line{
    flex:1;

    height:3px;

    background:#b8d9cf;

    margin-top:27px;
}


.active-line{
    background:#0ad81b;
}


/* ================= CREATE PAYTM ================= */

.create-card{
    
   
    margin:10px 10px;
  
    border-radius:25px;

    overflow:hidden;

    background:
    linear-gradient(
        135deg,
        #e8faf2,
        #1843a1
    );
}


.create-title{
    padding:22px 28px;
    margin-right: 30px;
    color:#161e42;

    font-size:23px;
    font-weight:700;
}




.phone-form{
    background:white;

    margin:0;

    padding:22px 30px 30px;

    border-radius:23px;

    box-shadow:
    0 5px 20px rgba(0,0,0,.08);
}


.phone-form h2{
    font-size:19px;
    color:#161b25;
    margin-bottom:14px;
}


.phone-form p{
    color:#4c535d;
    font-size:16px;
    line-height:1.55;

    margin-bottom:10px;
}


.phone-form h3{
    color:#04305a;

    font-size:24px;

    margin-top:25px;
    margin-bottom:8px;
}


.phone-input{
    height:49px;

    border:4px solid #d4e6e0;

    border-radius:17px;

    display:flex;
    align-items:center;

    overflow:hidden;
}


.phone-input span{
    padding:0 18px;

    color:#168d68;

    font-size:24px;
    font-weight:700;
}


.phone-input input{
    flex:1;

    height:100%;

    border:0;
    border-left:2px solid #d4e6e0;

    padding:0 20px;

    outline:none;

    font-size:18px;
}


.phone-input input::placeholder{
    color:#999;
}


/* ================= AUTHORIZE ================= */

.authorize-card{
    background:white;

    border-radius:22px;

    padding:30px 25px;

    margin:30px;

    text-align:center;

    box-shadow:
    0 5px 20px rgba(0,0,0,.07);
}


.authorize-card h2{
    color:#168d68;
    margin-bottom:15px;
}


.authorize-card p{
    color:#68717b;
    line-height:1.5;
}


.otp-box input{
    width:100%;

    margin-top:25px;

    padding:15px;

    border:2px solid #d7e5e0;

    border-radius:15px;

    font-size:20px;

    text-align:center;

    outline:none;
}



/* ================= Chat LIST ================= */

.tele{
text-align:center;

}

.insta{
text-align:center;
}


/* ================= FINISH ================= */

.finish-card{
    background:white;

    margin:60px 25px 30px;

    padding:40px 25px;

    text-align:center;

    border-radius:25px;

    box-shadow:
    0 7px 20px rgba(0,0,0,.07);
}

.mm{
    color: #000201;
}

.success-icon{
    width:80px;
    height:80px;

    margin:auto;

    border-radius:50%;

    background:#15966a;
    color:white;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:45px;
}


.finish-card h2{
    color:#168d68;
    margin:25px 0 10px;
}


.finish-card p{
    color:#777;
}


/* ================= TASK ================= */

.task-header h1{
    flex:1;
    text-align:center;
    color:#071fff;
    font-size:23px;
    margin-right:35px;
}


.task-subtitle{
    text-align:center;
    color:#777;
    padding:15px;
}


.task-tabs{
    background:#e6f4ed;

    padding:5px;

    border-radius:30px;

    display:flex;
}


.task-tabs button{
    flex:1;

    border:0;
    background:transparent;

    padding:11px 4px;

    border-radius:25px;

    color:#2f0dee;
}


.task-tabs .active{
    background:white;

    color:#0431f8;

    font-weight:700;
}


.task-card{
    background-image: url(min.png.jpeg);

    margin-top:16px;

    padding:18px;

    border-radius:17px;

    box-shadow:
    0 5px 18px rgba(0,0,0,.06);
}


.progress{
    height:13px;

    background:#ffffff;

    border-radius:10px;

    overflow:hidden;

    margin-bottom:1px;
}


.progress-bar{
    height:100%;
    background:#15966a;
}


.task-card > span{
    font-size:17px;
    color:white;
}


.task-card h3{
    margin-top:13px;
    font-size:17px;
    color: white;
}


.task-card p{
    color:#f8f6f6;
    font-size:14px;
    line-height:1.5;
    margin:8px 0 15px;
}


.task-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
    color: #f7f3f3;
}


.task-bottom button{
    border:0;

    background:#06b7ec;
    color:white;

    padding:8px 15px;

    border-radius:20px;
}


/* ================= PROFILE ================= */

.profile{
    background:white;

    padding:50px;

    border-radius:20px;

    text-align:center;

    color:#888;
}


/* ================= BOTTOM NAV ================= */

.bottom-nav{
    position:fixed;

    bottom:0;
    left:50%;

    transform:translateX(-50%);

    width:100%;
    max-width:420px;

    height:83.5px;

    background-image: url(lo.png.jpeg);
    
    display:flex;
    justify-content:space-around;
    align-items:center;

    border-top:1px solid #eee;

    z-index:100;

    border-radius:1px;
}


.nav-item{
    flex:1;

    text-align:center;

    color:#aaa;

    cursor:pointer;
}


.nav-item span{
    display:block;

    font-size:26px;

    margin-bottom:3px;
}


.nav-item small{
    font-size:12px;
}



.nav-itemm {
    flex:1;
   margin-left: -200px;
    margin-bottom: -40px;

    text-align:center;

    color:white;

    cursor:pointer;
}

.nav-itemm span{
    font-size: 24px;
}



.nav-itema{

    margin-left: 210px;
    margin-top: -90px;

    color:white;
}

.nav-itemaa {

    margin-left: -8px;

    color:white;
}

.nav-itemaa a {
font-size: 18px;
color: white;
margin-right: 10px;
}


.nav-itema span{
   margin-bottom: 40px;
   font-size: 20px;
   margin-left: -1px;

   color: white;
}



.bri{
    margin-right: 300px;
}

.center-nav{
    position:relative;
}


.wallet-center{
    width:58px;
    height:58px;

    margin:-28px auto 2px;

    background:#f8c62f;

    border-radius:50%;

    border:4px solid white;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:27px;

    box-shadow:
    0 4px 12px rgba(0,0,0,.15);
}


@media(max-width:360px){

    .tool-item{
        gap:10px;
    }

    .tool-logo{
        width:60px;
        height:60px;
    }

    .tool-info h3{
        font-size:18px;
    }

    .steps{
        margin-left:5px;
        margin-right:5px;
    }

}


/* =====================================================
     MSG POPUP STYLE
   ===================================================== */



.popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    padding: 20px;
    backdrop-filter: blur(4px);
}

.popup-overlay.show {
    display: flex;
}

.popup-box {
    width: 100%;
    max-width: 320px;
    background: #fcfbfb;
    border-radius: 20px;
    padding: 28px 22px;
    text-align: center;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
    animation: popupZoom 0.3s ease;
}

.popup-icon {
    width: 60px;
    height: 60px;
    line-height: 60px;
    margin: 0 auto 15px;
    border-radius: 50%;
    background: #e5f9ed;
    color: #5bf192;
    font-size: 32px;
    font-weight: bold;
}

.popup-box h3 {
    margin: 0 0 10px;
    font-size: 22px;
    color: #222;
}

.popup-box p {
    margin: 0 0 22px;
    font-size: 16px;
    line-height: 1.6;
    color: #0c0c0c;
    font-weight: 600;
}

#popupMessage{
    color: rgb(7, 7, 7);
    font-weight: 700;
}

.popup-btn {
    width: 70%;
    border: none;
    padding: 13px;
    border-radius: 17px;
    background: #990101;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

.popup-btn:active {
    transform: scale(0.97);
}


.popup-no-btn {
    width: 40%;
    border: none;
    padding: 13px;
    border-radius: 17px;
    background: #02722b;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

.popup-no-btn:active {
    transform: scale(0.97);
}

@keyframes popupZoom {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}



/* =====================================================
   MY Order
   ===================================================== */
#myPageo {
    min-height: 100vh;
    padding: 0 17px 30px;
    background-color: rgb(250, 250, 248);
    
}


/* Order Card */

.Get-Card {
    width: 90%;
    background: rgb(250, 249, 249);
 
    border-radius: 20px;

    padding: 30px 12px;
    margin: 30px auto 0;

    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;

    box-shadow: 0 1px 5px  rgb(10, 10, 10);
}


.Get-Card-Order {
    width: 100%;
    background: rgb(250, 249, 249);
 
    border-radius: 20px;

    padding: 30px 12px;
    margin: 30px auto 0;

    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;

    box-shadow: 0 1px 5px  rgb(10, 10, 10);
}

.Get-Cardd {
    width: 74%;
    background: rgb(252, 252, 253);
 
    border-radius: 43px;

    padding: 0 19px;
    margin: 30px auto 0;

    display: grid;

    box-shadow: 0 1px 5px  rgb(44, 41, 218);
}

/* INR */

.INRback {
    grid-column: 1 / -1;

    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    color: rgb(42, 119, 67);

    display: flex;
    align-items: center;
    font-weight: 800;
    justify-content: space-between;
    margin-left: 53px;
    height: 70px;
}


/* Expire */

.INRbacka {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 2px;

    padding: 5px 7px;
    border-radius: 99px;

    background: #fff;
    font-weight: 700;
    font-size: 14px;

    overflow: hidden;
    isolation: isolate;
}


.INRbacka::before {
    content: "";
    position: absolute;
    inset: -10%;
    width: 80%;

    background: conic-gradient(
        #E8D5B5,
        #C8A87A,
        #E8D5B5
    );

    animation: spin 4.90s linear infinite;
    z-index: -1;
}


.INRbacka::after {
    content: "";
    position: absolute;
    inset: 2px;

    background: #fff;
    border-radius: 99px;

    z-index: -1;
}


.INRbackaaa {
    position: relative;

    gap: 1px;
    width: 20%;
    padding:  18px 10px  10px;
    border-radius: 99px;

    background: #fff;
    font-weight: 700;
    font-size:12px;

    overflow: hidden;

}

.INRbackaaa::before {
    content: "";
    position: absolute;
    inset: -20%;

    background: conic-gradient(
        #020202,
        #080808,
        #f7f5f3
    );

    animation: spin 2.90s linear infinite;
    z-index: 0;
}


.INRbackaaa::after {
    content: "";
    position: absolute;
    inset: 10px;

    background: #fff;
    border-radius: 9px;

    z-index: -3;
}


@keyframes spin {
    to {
        transform: rotate(1turn);
    }
}


.INRbackaa,
.INRbackab,
.INRbackac,
.INRbackae,
.INRbackag,
.INRbackaf,
.INRbackah,
.INRbackad {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;

    grid-column: 1 / -1;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: #070707;
    font-weight: 600;
    padding: 0 6px;
    position: relative;
}

/* Value + Copy button right side */
.INRbackaa .value,
.INRbackab .value,
.INRbackac .value,
.INRbackae .value,
.INRbackag .value,
.INRbackad .value {
    margin-left: auto;
    text-align: right;
    overflow-wrap: anywhere;
}

.INRbackaf a{
    color: green;
}

.INRbackah span{
    
    border: 1px solid red;
    width: 30%;
    padding: 8px;
    text-align: center;
    border-radius: 21px;
    background: red;
    color: white;
}


.hrline{
 margin-right: -191px;
 

}







/* Horizontal Lines */

.Get-Card hr {
    grid-column: 1 / -1;

    width: 100%;
    border: 0;
    border-top: 1px solid #ddd;
}

/* Copy span */

.copy-btn {
    border: none;
    background: transparent;
    border-radius: 22px;
    font-size: 18px;
    cursor: pointer;
    padding: 2px 5px;



}

.copy-btn:active {
    transform: scale(0.9);

}

.go-btn {
    display: block;

    width: 70%;
    height: 52px;

    margin: 25px auto 0;

    border: none;
    border-radius: 30px;

    background: #20521f;

    color: white;

    font-size: 23px;
    font-weight: bold;

    cursor: pointer;
}

.screenshot{
font-size: 13px;
margin-right: -190px;
color: red;
margin-top: 30px;

}

.screenshot span{
    margin-top: 3px;
    color: #e01414;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
    
}

/* =====================================================
   DEPOSIT / WITHDRAW / COMMISSION
   ===================================================== */

.asset-card {
    width: 100%;
    background-image: url(min.png.jpeg);
    border-radius: 20px;
    padding: 20px 13px;
    
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
    box-shadow: 0 5px 20px rgba(0, 150, 100, 0.30);
}




.asset-box {

    background: #a9b9b9;
    border-radius: 16px;
    padding: 20px 20px;

    align-items: center;
    gap: 13px;
}


.asset-box p {
    margin: 0 0 6px;
    font-size: 20px;
    color: black;
}


.asset-box h2 {
    margin: 0;
    font-size: 25px;
    color: #222;
}


/* Commission */

.asset-box:nth-child(3) {
    grid-column: 1 / 2;
}


/* =====================================================
   ASSET ICONS
   ===================================================== */

.asset-icon {
    width: 55px;
    height: 55px;
    min-width: 55px;

    border-radius: 14px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 27px;
}


.blue-icon {
    color: #4f7de5;
    background: #d5eee7;
}


.purple-icon {
    color: #8358e8;
    background: #d5eee7;
}


.yellow-icon {
    color: #e7ad20;
    background: #d5eee7;
}


/* =====================================================
   MENU CARD
   ===================================================== */

.my-menu-card {
    position: relative;

    width: 100%;
    background: rgb(12, 12, 0, 0.40) ;

    margin-top: 50px;
    
    border-radius: 24px;

    padding: 65px 26px 70px;

    box-shadow: 0 5px 20px rgba(2, 7, 5, 0.98);
}


.my-menu-cardd {
    position: relative;

    width: 100%;
    background: rgb(12, 12, 0, 0.20) ;
     background-color: #020c04;
    margin-top: 10px;

    border-radius: 24px;

    padding: 65px 25px 70px;

    box-shadow: 0 5px 20px rgba(0, 150, 100, 0.08);
}


.my-menu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);

    row-gap: 38px;
    column-gap: 15px;
}


.my-menu-item {
    text-align: center;

}


.my-menu-icon {
    width: 20px;
    height: 20px;

    margin: auto;
    margin-bottom: 1px;

    border-radius: 15px;

    background: #e2f2ee;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #0f8585;

    font-size: 42px;

    box-shadow: inset 0 0 3px rgba(0,0,0,0.08);
}


.my-menu-item span {
    display: block;


    color: black;
   
    letter-spacing: 1px;
}


/* Version */

.my-version {
    position: absolute;

    right: 24px;
    bottom: 16px;

    color: #0e22da;

    font-size: 16px;
}


/* =====================================================
   LOGOUT BUTTON
   ===================================================== */

.my-logout-btn {
    display: block;

    width: 70%;
    height: 52px;

    margin: 25px auto 0;

    border: none;
    border-radius: 30px;

    background: #c00101;

    color: white;

    font-size: 23px;
    font-weight: bold;

    cursor: pointer;
}







/* ================= INVATE PAGE FIX ================= */





#invitePage {
    width:100%;
    min-width: 0;
    margin: 0;
    padding: 0 16px 100px;
    overflow-x: hidden;
    background: #fdfdfd;
}

#invitePage .invite-content {
    width: 100%;
    max-width: 100%;
    margin: 0;
    padding: 10px 0 30px;
    overflow: hidden;
}

#invitePage .invite-image {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    margin: 0 auto;
    object-fit: contain;
}



/* =====================================================
   MOBILE
   ===================================================== */

@media (max-width: 600px) {

    .my-asset-page {
        padding-top: 35px;
    }

    .my-title {
        font-size: 36px;
        margin-bottom: 40px;
    }


    .asset-card {
        padding: 24px 22px;
        gap: 18px;
    }


    .asset-box {
        min-height: 105px;
        padding: 12px;
    }


    .asset-box p {
        font-size: 18px;
    }


    .asset-box h2 {
        font-size: 23px;
    }


    .asset-icon {
        width: 52px;
        min-width: 52px;
        height: 52px;
        font-size: 24px;
    }


    .my-menu-card {
        padding: 40px 15px 30px;
    }


    .my-menu-icon {
        width: 40px;
        height: 40px;
        font-size: 19px;
    }


    .my-menu-item span {
        font-size: 15px;
    }


    .my-logout-btn {
        width: 70%;
        height: 50px;
        font-size: 21px;
    }
}


/* ================= LOADING ================= */


.loader-container {
    width: 90%;
    max-width: 350px;
    text-align: center;
}

.loader {
    width: 65px;
    height: 65px;
    border: 6px solid #29344d;
    border-top: 6px solid #4169ff;
    border-radius: 50%;
    animation: spin 0.8s linear infinite;
    margin: 0 auto 25px;
}



@keyframes spin {
    to {
        transform: rotate(200deg);
    }
}


   /*========================== wallet bind ===========================*/


.walletadd{

   margin-top: -150px;
  background: #eef2f7;
  font-family: Arial;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.card {
  background: white;
  width: 20px;
  padding: 25px;
  border-radius: 15px;
  text-align: center;
  box-shadow: 0 5px 20px #ccc;
}
select,input {
  width: 100%;
  padding: 13px;
  margin: 12px 0;
  box-sizing: border-box;
  border: 1px solid #ddd;
  border-radius: 8px;
}
.botto {
  background: #008cff;
  color: white;
  border: none;
  padding: 13px;
  width: 100%;
  border-radius: 8px;
  cursor: pointer;
}
.hidden {display:none;}

.hid h3{
    margin-bottom: 12px;
    
}

.hid p{
    margin-bottom: 12px;
}



/* =================  msg  =======================*/


.msg-open {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}
.msg-open-box {
  background: white;
  padding: 25px;
  width: 280px;
  border-radius: 12px;
  text-align: center;
}
.msg-open button {
  background: #087cff;
  color: white;
  border: none;
  padding: 10px 25px;
  border-radius: 6px;
}




/* ================= SAVED UPI CARDS ================= */

.saved-upi-card {
    height: 220px;
    margin: 15px 0 20px;
    padding: 28px;
    border-radius: 25px;
    background:
        radial-gradient(circle at 100% 0%, rgba(255,255,255,.25), transparent 35%),
        linear-gradient(120deg, #1554f5, #3975f8, #3864d8);
    box-shadow: 0 10px 25px rgba(35,90,230,.18);
}

.saved-upi-card .wallet-name {
    font-size: 43px;
    font-weight: 600;
}

.saved-upi-card .wallet-number {
    font-size: 19px;
    margin-top: 3px;
    overflow-wrap: anywhere;
}

.saved-upi-status {
    background: #13a75a;
    border: 2px solid white;
    border-radius: 25px;
    padding: 5px 18px;
    font-size: 14px;
    color: white;
}

.saved-upi-range {
    left: 18px;
    right: 18px;
    bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
    padding: 15px 12px;
    border: 2px solid rgba(255,255,255,.25);
    background: rgba(255,255,255,.16);
    border-radius: 15px;
    font-size: 14px;
}

.saved-upi-card .wallet-background {
    display: none;
}


/* ================= SAVED ORDER CARDS ================= */

.saved-order-card { 
    cursor: pointer;
    background: #ffffff;
    border-radius: 18px;
    padding: 18px;
    margin: 15px 0;
    box-shadow: 0 4px 15px rgba(0,0,0,.08);
    border: 1px solid #e8eaf0;
}

.saved-order-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 14px;
    padding-bottom: 12px;
    border-bottom: 1px solid #eeeeee;
}

.saved-order-title {
    font-size: 21px;
    font-weight: 700;
    color: #1514b5;
}

.saved-order-status {
    background: #fff1d6;
    color: #a66a00;
    border-radius: 20px;
    padding: 5px 13px;
    font-size: 12px;
    font-weight: 700;
}

.saved-order-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
    padding: 8px 0;
    color: #777777;
    font-size: 14px;
}

.saved-order-row b {
    color: #171717;
    text-align: right;
    overflow-wrap: anywhere;
}

.saved-order-date {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid #eeeeee;
    color: #999999;
    font-size: 11px;
}

</style>



</body>
</html>
