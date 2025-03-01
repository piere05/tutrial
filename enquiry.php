<?php
ob_start();
ob_clean();
session_start();
extract($_REQUEST);
$Date = date('Y-m-d h:i:s', time());

if (isset($_POST['Submit'])) {

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $type = $_POST['type']; 
    $salesOptions = isset($_POST['sales-options']) ? $_POST['sales-options'] : '';
    $servicesOptions = isset($_POST['services-options']) ? $_POST['services-options'] : '';

   
    $messages = '
    <table width="683" border="0" align="left" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:12px">
        <tbody>
            <tr>
                <td width="677">
                    <table width="680" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td height="40">&nbsp;</td>
                                <td colspan="2" align="left" style="font-size:22px; font-weight:bold; color:#b68d57;">
                                    <strong>NewTech Computer Systems</strong>
                                </td>
                            </tr>
                            <tr>
                                <td height="40">&nbsp;</td>
                                <td colspan="2" align="left" style="color:#f57900;font-size:16px;font-weight:bold">
                                    <strong>Enquiry Details From ' . $name . '</strong>
                                </td>
                            </tr>
                            <tr>
                                <td width="5%" height="25">&nbsp;</td>
                                <td width="25%" style="font-size:12px; font-weight:bold;"><strong>Name</strong></td>
                                <td width="70%">' . $name . '</td>
                            </tr>
                            <tr>
                                <td width="5%" height="25">&nbsp;</td>
                                <td width="25%" style="font-size:12px; font-weight:bold;"><strong>Email id</strong></td>
                                <td width="70%">' . $email . '</td>
                            </tr>
                            <tr>
                                <td width="5%" height="25">&nbsp;</td>
                                <td width="25%" style="font-size:12px; font-weight:bold;"><strong>Phone Number</strong></td>
                                <td width="70%">' . $phone . '</td>
                            </tr>
                            <tr>
                                <td width="5%" height="25">&nbsp;</td>
                                <td width="25%" style="font-size:12px; font-weight:bold;"><strong>Subject</strong></td>
                                <td width="70%">' . $subject . '</td>
                            </tr>
                            <tr>
                                <td width="5%" height="25">&nbsp;</td>
                                <td width="25%" style="font-size:12px; font-weight:bold;"><strong>Option Selected</strong></td>
                                <td width="70%">' . $type . '</td>
                            </tr>';

    
    if (!empty($salesOptions)) {
        $messages .= '<tr><td width="5%" height="25">&nbsp;</td><td width="25%" style="font-size:12px; font-weight:bold;"><strong>Sales Option</strong></td><td width="70%">' . $salesOptions . '</td></tr>';
    }

    if (!empty($servicesOptions)) {
        $messages .= '<tr><td width="5%" height="25">&nbsp;</td><td width="25%" style="font-size:12px; font-weight:bold;"><strong>Services Option</strong></td><td width="70%">' . $servicesOptions . '</td></tr>';
    }

    $messages .= '</tbody>
        </table>
    </td>
</tr>
<tr>
    <td>
        <table width="680" border="0" align="left" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td>Warm Regards, </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td><a href="http://newtech.com/" target="_blank" style="color:#f57900;"><strong>NewTech Computer Systems</strong></a></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>';


    $subject = "Website Enquiry Details From " . $name;
    $to = "developer.mistsolutions@gmail.com";


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'Sender: <noreply@mistcareer.com>' . "\r\n";
    $headers .= 'From: ' . $name . ' <noreply@mistcareer.com>' . "\r\n";
    $headers .= 'Reply-To: ' . $name . ' <' . $email . '>' . "\r\n";


    $res1 = mail($to, $subject, $messages, $headers, '-fnoreply@mistcareer.com');
    
    if ($res1) {
        $msg = "Thanks for your enquiry and our team will get back to you shortly!!!";
        echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('$msg'); window.location.href='enquiry.php'; </SCRIPT>");
    }
}
echo $messages;
?>




<!DOCTYPE html>
<html lang="zxx">

<head>
            <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Newtech Computers and Systems</title>
           <link rel="shortcut icon" href="assets/img/favicon.png">
          <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
         rel="stylesheet">
               <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/css/fontawesome.min.css">
          <link rel="stylesheet" href="assets/css/animate.css">
           <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
           <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
            <link rel="stylesheet" href="assets/css/main.css">

    <style>

.contact-form-items {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    max-width: 820px;
    margin: 0 auto;
    padding: 20px;

         border-radius: 8px;
     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
}

.form-container {
    width: 100%;
}


.form-clt {
    width: 100%;
    margin-bottom: 15px;
}


.form-clt label, .form-clt span {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 14px;
}

.form-clt input[type="text"], .form-clt select {
    width: 100%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease;
}

.form-clt input[type="text"]:focus, .form-clt select:focus {
    border-color: #007BFF;
}


.form-clt input[type="text-area"] {
    width: 100%;
    padding: 30px;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease;
}


input[type="radio"]:checked::after {
    content: "";
    position: absolute;
    width: 12px;
    height: 12px;
    background-color: white;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}



.form-clt input[type="text-area"]:focus {
    border-color: #007BFF;
}


.radio-group {
    display: flex;
    gap: 15px;
}
label {
    display: flex;
    align-items: center;
    font-size: 16px; 
    cursor: pointer;
    margin-right: 20px;
 }

input[type="radio"] {
       appearance: none;
    width: 20px;
    height: 20px;
    padding: 7px;
    border: 2px solid #003a79;
    border-radius: 50%;
    position: relative;
    cursor: pointer;
    margin-right: 5px;
    margin-bottom: -4px;
}


.radio-inner {
    position: absolute;
    width: 12px;
    height: 12px;
    background: #007BFF;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.2s ease-in-out;
}

input[type="radio"]:checked {
    background-color: #28a745; 
    border-color: #28a745;    

}



input[type="radio"]:checked + label {
    font-weight: bold;
    color: #28a745; 
}



@media (max-width: 600px) {
    .contact-form-items {
        padding: 15px;
    }
}
</style>


   </head>
   <body class="bg-white">
  
     
<?php include 'header.php';?>
   
      <div class="breadcrumb-wrapper">
         <div class="breadcumb" data-bg-src="assets/img/sub-banner.jpeg">
            <div class="container">
               <div class="page-heading">
                  <h1 class="wow fadeInUp" data-wow-delay=".3s">Enquiry</h1>
                 
               </div>
            </div>
         </div>
      </div>
   


   <section class="spacer-top spacer-bottom">
    
      
      <div class="container">
         

         <div class="row">
            
            

            <div class="col-lg-12  ">

                     <div class="contact-content wow fadeInRight" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                        <div class="title-area">
                           <h5 class=" main-heading"> Get in Touch  </h5>
                          
                        </div>
                     <form action="" id="contact-form" method="POST" class="contact-form-items">
    <div class="form-container">
        <!-- Name Field -->
        <div class="form-clt">
            <label for="name">Your Name</label>
            <input type="text" onkeypress="return testInput(event)" name="name" id="name" placeholder="Enter your Name" required>
        </div>

        <!-- Email Field -->
        <div class="form-clt">
            <label for="email">Your Email</label>
            <input type="text"  name="email" id="email"  placeholder="Enter your Email" required>
        </div>
        <div class="form-clt">
            <label for="phone">Your Phone number</label>
            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern=".{10,10}" maxlength="10" name="phone" id="phone" placeholder="Enter your Phone Number" required>
        </div>

        <div class="form-clt">
            <label>Choose Option</label>
            <div class="radio-group">
     
                <label>
                    <input type="radio" name="type" value="sales" id="sales-radio" required>
                    Sales
                </label>
                

                <label>
                    <input type="radio" name="type" value="services" id="services-radio" required>
                    Services
                </label>
            </div>
        </div>

 
        <div class="form-clt" id="sales-dropdown" style="display: none;">
            <label for="sales-options">Our Sales Options</label>
            <select name="sales-options" id="sales-options" >
                <option value="">Select Sales</option>
                <option value="Computer">Computer</option>
                <option value="Printers">Printers</option>
                <option value="Laptops">Laptops</option>
                <option value="CCTV">CCTV</option>
                <option value="Server Products">Server Products</option>
                <option value="Computer Accessories">Computer Accessories</option>
                <option value="Networking Solutions">Networking Solutions</option>
                <option value="Antivirus Products">Antivirus Products</option>
                <option value="System Upgradation">System Upgradation</option>
                <option value="Data Recovery">Data Recovery</option>
                <option value="Networking">Networking</option>
                <option value="AMC">AMC</option>
                <option value="General Services">General Services</option>



            </select>
        </div>

        <div class="form-clt" id="services-dropdown" style="display: none;">
            <label for="services-options">Our Services Options</label>
            <select name="services-options" id="services-options" >
                <option value="">Select Services</option>
                <option value="Computers">Computers</option>
                <option value="Laptops">Laptops</option>
                <option value="Printer Services">Printer Services</option>

            </select>
        </div>

        <div class="form-clt">
            <label for="subject">Subject</label>
            <input type="text-area" name="subject" id="subject" placeholder="Enter your message" required>
        </div>

     

 
        <div class="form-clt text-center">
            <button type="submit" name="Submit" class="gt-btn gt-btn-icon">
                Send Message 
            </button>
        </div>
    </div>
</form>

</div>
</div>

         </div>


      </div>


   </section>
    
   





     <?php include 'footer.php';?>
   <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
       <script src="assets/js/swiper-bundle.min.js"></script>
           <script src="assets/js/bootstrap.min.js"></script>
           <script src="assets/js/wow.min.js"></script>
            <script src="assets/js/jquery.waypoints.min.js"></script>
           <script src="assets/js/tilt.min.js"></script>
           <script src="assets/js/jquery.magnific-popup.min.js"></script>
         <script src="assets/js/jquery.counterup.min.js"></script>
           <script src="assets/js/gsap.min.js"></script>
           <script src="assets/js/main.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/whatsapp.js"></script>

      <script>

document.getElementById('sales-radio').addEventListener('change', function() {
    document.getElementById('sales-dropdown').style.display = 'block';
    document.getElementById('services-dropdown').style.display = 'none';

    // Update required for the sales dropdown
    document.getElementById('sales-options').required = true;
    document.getElementById('services-options').required = false;
});

document.getElementById('services-radio').addEventListener('change', function() {
    document.getElementById('sales-dropdown').style.display = 'none';
    document.getElementById('services-dropdown').style.display = 'block';

    // Update required for the services dropdown
    document.getElementById('services-options').required = true;
    document.getElementById('sales-options').required = false;
});


</script>
<script type="text/javascript">
function testInput(event) {
var value = String.fromCharCode(event.which);
var pattern = new RegExp(/[a-zåäö ]/i);
return pattern.test(value);
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('.contact-form');

    form.addEventListener('submit', function (event) {
        var valid = true;

        // Validate Full Name
        var nameInput = form.querySelector('#name');
        if (!nameInput.value.trim()) {
            valid = false;
            nameInput.placeholder = 'Please enter your full name';
        }

        // Validate Email
        var emailInput = form.querySelector('#email');
        if (!emailInput.value.trim() || !isValidEmail(emailInput.value.trim())) {
            valid = false;
            emailInput.placeholder = 'Please enter a valid email address';
        }

        // Validate Phone Number
        var numberInput = form.querySelector('#number');
        if (!numberInput.value.trim() || numberInput.value.length !== 10) {
            valid = false;
            numberInput.placeholder = 'Please enter a valid 10-digit phone number';
        }

        // Validate Service Selection
        var serviceInput = form.querySelector('#input-form');
        if (serviceInput.value === '') {
            valid = false;
        }

        // Validate Message
        var messageInput = form.querySelector('#message');
        if (!messageInput.value.trim()) {
            valid = false;
            messageInput.placeholder = 'Please enter your message';
        }

        // Prevent form submission if any field is invalid
        if (!valid) {
            event.preventDefault();
        }
    });

    // Helper function to validate email format
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});



</script>
   </body>


</html>