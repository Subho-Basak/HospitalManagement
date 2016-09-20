<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criticare | Appointment Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .wrap { max-width: 980px; margin: 10px auto 0; }
        #steps { margin: 80px 0 0 0 }
        .commands { overflow: hidden; margin-top: 30px; }
        .prevb {float:left}
        .nextb, .submit {float:right}
        .error { color: #b33; }
        #progress { position: relative; height: 5px; background-color: #eee; margin-bottom: 20px; }
        #progress-complete { border: 0; position: absolute; height: 5px; min-width: 10px; background-color: #337ab7; transition: width .2s ease-in-out; }

    </style>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="js/jquery.formtowizard.js"></script>
    <link rel="stylesheet" href="Style/OPDAppoint.css">
    <link rel="stylesheet" href="Style/calendar.css">
    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );
            
            $signupForm.validate({errorElement: 'em'});
            
            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary nextb',
                prevBtnClass: 'btn btn-default prevb',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });

            $('.nextb').css({'background':'#555','border':'none','border-radius':'0px','margin-top':'0'});
            $('.prevb').css({'background':'none','border':'1px solid #555','border-radius':'0px','margin-top':'0'});

        });
    </script>
    
</head>

<body>
<div class="header1">



    <a href="#" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
        href="Enquiry.php">LOGIN </a>
</div>
<div class="header2">
    <h1>OPD Appointment</h1>
    <p><i class="fa fa-home" aria-hidden="true"></i> <a href="Home.php">Home</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true"></i> Diagnostics</p>
</div>


<div class="opdPanel" style="height:1200px;margin:300px 80px;margin-bottom:50px;background:#FFF">
    <form id="SignupForm" action="OPDApp_Script.php" method="post">
<div class="jquery-script-center">

    <div id='progress'><div id='progress-complete'></div></div>


        <fieldset>
            <div class="wizard-heading">
                1. Set Your Appointment Date  &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
                <span class="icon-user"></span>
            </div>


                <div id="demo">

                    <div id="ca"></div>

                </div>


        </fieldset>

        <fieldset>
            <div class="wizard-heading">
                2. Select Doctor & Specialisation  &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
                <span class="icon-location"></span>
            </div>
            <div class="wizard-content">
            <p>Select Specialization</p>
            <select name="mySelect" placeholder="Select Specialization" onchange="getSpl()" id="special">

                <option value="1" selected>Anasthesiologist</option>

                <option value="2">Cardiologist</option>

                <option value="3" >Dentist</option>

                <option value="4">Dermatologist</option>
                <option value="4">ENT</option>
                <option value="4">Endocrinologist</option>
                <option value="4">Foetal Medicine</option>
                <option value="4">Gastroenterologist</option>
                <option value="4">General Medicine</option>
                <option value="4">Haematologist</option>
                <option value="4">Internal Medicine</option>
                <option value="4">Nephrologist</option>
                <option value="4">Neurologist</option>
                <option value="4">Nutritionist</option>
                <option value="4">Obstetrics[Gyanacologist]</option>
                <option value="4">Oncologist</option>
                <option value="4">Opthalmologist</option>
                <option value="4">Orthopedics</option>
                <option value="4">Pediatrics</option>
                <option value="4">Physiotherapist</option>
                <option value="4">Rheumatologist</option>

            </select>
            <p>Select Doctor</p>
            <select name="mydoc" placeholder="Select Doctor" onchange="getDoc()" id="doctor">

                <option value="1" selected>Anasthesiologist</option>

                <option value="2">Cardiologist</option>

                <option value="3" >Dentist</option>


            </select>
                </div>
        </fieldset>

        <fieldset>
            <div class="wizard-heading">
                3. Personal Details  &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
                <span class="icon-summary"></span>
            </div>
            <div class="wizard-content">






                    <input type="text" name="fname" placeholder="First Name"/>
                    <input type="text" name="mname" placeholder="Mid Name"/>
                    <input type="text" name="lname" placeholder="Last Name"/>

                    <label style="margin:30px;">Gender </label>

                    <select name="mySelect" placeholder="Select Specialization" style="width:260px;height:30px">

                        <option value="1" selected>Male</option>

                        <option value="2">Female</option>

                    </select>

                    <input type="text" name="age" placeholder="Age"/>

                    <input type="text" name="addr" placeholder="Address" style="width:455px;"/>
                    <input type="text" name="zip" placeholder="zip" />

                    <input type="email" name="email" placeholder="Email ID" style="width:455px;"/>
                    <input type="text" name="cont" placeholder="Contact No" />

            </div>

        </fieldset>



</div>

    <div class="summary">
        <h1 align="center" style="font-weight:normal;border-bottom:1px solid #CCC;margin:30px;">Booking Summary</h1>
        <table style=" margin:30px;width:240px;">
            <tr><td colspan="2"><input type="text" name="date" placeholder="Appointment date" id="appdate" readonly></td></tr>
            <tr><td colspan="2"><input type="text" name="specl"placeholder="Specialization" id="spcl" readonly></td></tr>
            <tr><td><input type="text" name="dname" placeholder="Doctor Name" id="doc" readonly></td><td><input type="text" name="day" placeholder="Time Slot" id="day" style="width:100px;" readonly></td><td><input type="text" name="slot" placeholder="Time Slot" id="slot" style="width:120px;" readonly></td></tr>


        </table>

        <input type="submit" value="Confirm Booking" class="bookBtn" style="border:none;font-size:16px;width:240px;margin:30px;height:40px;">
    </div>


    </form>


</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="js/calendar.js"></script>
<script>


    var _gaq = _gaq || [];
    _gaq.push([ '_setAccount', 'UA-36251023-1' ]);
    _gaq.push([ '_setDomainName', 'jqueryscript.net' ]);
    _gaq.push([ '_trackPageview' ]);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl'
                        : 'http://www')
                + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    $('#ca').calendar({
        // view: 'month',

        width: 700,
        height: 420,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: [
            {
                date: '2015/12/24',
                value: 'Christmas Eve'
            },
            {
                date: '2015/12/25',
                value: 'Merry Christmas'
            },
            {
                date: '2016/01/01',
                value: 'Happy New Year'
            }
        ],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            //alert('date:' + date.toString().substring(4,16));
            $('#appdate').val(date.toString().substring(4,15));
            $('#day').val(date.toString().substring(0,3));
            console.log('data:' + (data || 'None'));
        }
    });

    function getSpl(){
        var e = document.getElementById("special");
        var strUser = e.options[e.selectedIndex].text;
        document.getElementById("spcl").value=strUser;
    }

    function getDoc(){
        var e = document.getElementById("doctor");
        var strUser = e.options[e.selectedIndex].text;
        document.getElementById("doc").value=strUser;
        document.getElementById("slot").value="09:30 AM";
    }

</script>
</body>
</html>
