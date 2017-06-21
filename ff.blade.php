<!DOCTYPE html>
<html>
<title> Vano</title>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">


 .navmenu{
      padding: 40px 0;
      list-style: none;
      width: 260px;
      display: block;
    }
    .navmenu li{
      display:block;
      background-color: #2A394F;
      padding-left: 0 20px;
      line-height: 50px;
      width: 260px;
    }
    .navmenu li:hover{
      background-color: #293649;
    }
    .border-bar{
      height: 2px;
      background-color:#355789;
      width: 0px;
      transition: width .35s;
    }
    .navmenu li:hover .border-bar{
      width: 100%;
    }
    .navmenu li a>i{
      width: 80px;
      padding-top: 15px;
      text-align: center;
      float:left;
    }
    .ddspan i{
        font-size: 17px;
        padding-left: 15px;
        line-height: 0;
      color: white;
      font-size: 14px;
        }
    .ddspan{
      float:right;
      padding-right: 15px;
    }
    .navmenu li a{
      display:block;
      text-decoration: none;
      color: white;
      font-size: 13px;
      font-family: "montserratbold";
    }
    .navsubmenu,.navsubmenu1, .navsubmenu2{
      display: none;
      padding: 0;
      width:260px;
     }
 .navsubmenu li a:hover, .navsubmenu1 li a:hover, .navsubmenu2 li a:hover{

            background-color: #126CA1;
            box-shadow: 6px 0px #15a4fa inset;
            padding-left: 90px;
            transition: all .3s linear;

        }
    .navsubmenu li,.navsubmenu1 li, .navsubmenu2 li{
      background-color: #3c5271;
      line-height: 40px;
    }
    .navsubmenu a,.navsubmenu1 a, .navsubmenu2 a{
      width: auto;
      max-width: 260px;
      padding:12px 0px 12px 80px;
      line-height: 26px;
    }
    .ddlink{
      display: inline-block !important;
      width: 220px;
    }
        .maindiv{
      position: relative;
      width: 100%;
      background-color: white;
      align-items: stretch;
      display: flex;
      align-self: stretch;
    }


    	.switch{
		width: 70px;
		height: 26px;
		top:13px;
		left:10px;
		display: inline-block;
		position: relative;
	}
	.switch input{
		display: none;
	}
	.sw{
		position: absolute;
		background-color:#B0C1D4;
		top:0;
		bottom: 0;
		right: 0;
		left: 0;
		transition: .5s;
		border-radius: 4px;
	}
	.sw:before{
		position: absolute;
		height: 22px;
		width: 30px;
		content: "";
		left:2px;
		bottom: 2px;
		background-color: #f1f1f1;
		transition: 0.5s;
		border-radius: 2px;
	}

	.switch input:checked + .sw{
		background-color: #27ae60;
	}

	.switch input:checked + .sw:before{
		transform: translateX(36px);
	}
	.sw span:nth-child(1){
	position: absolute;
	left:7px;
	bottom: 0px;
	font-size: 18px;
	display: none;
	color:white;
	transition-delay: 2s;
	}
	.sw span:nth-child(2){
		position: absolute;
		right:8px;
		bottom: 0px;
		font-size: 18px;
		color:white;
		transition-delay: 2s;
		display: block
	}
	.switch input:checked + .sw span:nth-child(2){
		display: none;
		transition-delay: 2s;
	}
		.switch input:checked + .sw span:nth-child(1){
		display: block;
		transition-delay: 2s;
	}
	.clearboth{
		clear:both;
		margin-left: 20px;
		padding: 10px 0 10px;
	}
	.slist{
		width: 250px;
		padding: 10px;
		text-transform: uppercase;
	}
	.ulset{
		list-style: none;
		width: 220px;
		padding: 0px;
	}
	.ulset li{
		line-height: 20px;
		width: 220px;
		padding: 0px;
	}
	.ulset li a{
		width: 100%;
		color:black;
		text-decoration: none;
		display: block;
		padding:12px 0px 12px 15px;
	}
	.ulset li a:hover{
		background-color: #f1f1f1;
		color:#333;
		font-weight: bold;
	}
	.ulset li:nth-child(4) a:hover{
		border-left: 5px solid #00b0f0;
		transition: all .3s;
	}
	.ulset1{
		list-style: none;
		padding: 0px;
		display: none;
	}
	.linkli{
		width: 190px !important;
		display: inline-block !important;
	}
	.ulset1 li a:hover{
		border-left:5px solid #00b0f0;
		transition: all .3s;
	}
	.setdiv{
		padding-top: 10px;
		display: block;
		margin:0 25px;
		font-family: "montserratregular";
		font-size: 16px;
	}
	.generalset{
		background-color: white;
		display: block;
		width: 100%;
		font-family:'Montserratlight';
		padding-bottom: 50px;
	}
	.generalset label{
		font-weight: normal;
		font-family: "montserratregular";
	}
	.saveset{
		padding: 11px 15px;
		background-color: #00b0f0;
		border-radius: 2px;
		border:1px solid #00b0f0;
		color:white;
		margin-right: 10px;
	}
	.cancelset{
		padding: 11px 15px;
		background-color: white;
		border:1px solid #00b0f0;
		border-radius: 2px;
		color:#00b0f0;
	}
	.delcockpit{
		padding: 11px 20px;
		background-color: red;
		float:right;
		color:white;
		border-radius:2px;
		border:1px solid red;
	}
	.whinput{
		width: 250px;
		height: 30px;
	}
	 .ddspan1{
		float:right;
		cursor: pointer;
		padding: 20px 8px;
	}
	.ddspan1:hover{
		color: #00b0f0;
	}
</style>
  <script type="text/javascript">
    $(function(){
      $(".ddspan").click(function(){
        if ( $(this).attr("rel") == "1" )
        {
            $(".navsubmenu1").toggle();
          }
          else if ( $(this).attr("rel") == "2" ){
            $(".navsubmenu").toggle();
          }
          else{
            $(".navsubmenu2").toggle();
          }

            $(this).children("i").toggle();
      });
      $('.ddspan1').click(function(){
      	$(this).find("i").hasClass("fa-plus") ? $(this).find("i").removeClass("fa-plus").addClass("fa-minus")  : $(this).find("i").removeClass("fa-minus").addClass("fa-plus");
      	$(".ulset1").toggle();
      	// $(this).parents("li").css("background-color","green");
      });
      });
      </script>
</head>
<body>
<div class="maindiv">
<ul class="navmenu">
        <li><a href="#" class="ddlink"><i class="fa fa-user-o fa-lg"></i> MY ACCOUNT</a><span class="ddspan" rel="1" ><i class="fa fa-angle-right fa-lg"></i><i class="fa fa-angle-down fa-lg" style="display:none"></i></span><div class="border-bar"></div></li>

          <ul class="navsubmenu1">
            <li><a href="#">ADMINS</a></li>
            <li><a href="#">CLIENTS</a></li>
          </ul>


        <li><a href="#" class="ddlink"><i class="fa fa-line-chart fa-lg"></i>DATA HUB</a><span class="ddspan" rel="3" ><i class="fa fa-angle-right fa-lg"></i><i class="fa fa-angle-down fa-lg" style="display:none"></i></span><div class="border-bar"></div></li>

          <ul class="navsubmenu2">
            <li><a href="#">MY FORMULAS</a></li>
          </ul>

        <li><a href="#"><i class="fa fa-bolt fa-lg" ></i>ENERGY COCKPIT</a><div class="border-bar" ></div></li>
        <li><a href="#"><i class="fa fa-bar-chart fa-lg"></i>CUSTOMER ANALYTICS</a><div class="border-bar"></div></li>


        <li><a href="#" class="ddlink"><i class="fa fa-tachometer fa-lg"></i>HEDGE REPORTING</a><span class="ddspan" rel="2"><i class="fa fa-angle-right fa-lg"></i><i class="fa fa-angle-down fa-lg" style="display:none"></i></span><div class="border-bar"></div></li>
          <ul class="navsubmenu">
            <li><a href="#">CONSOLIDATED<br>HEDGE REPORTING</a></li>
            <li><a href="#">TOP CONSOLIDATED<br>HEDGE REPORTING</a></li>
          </ul>
        <li><a href="#"><i class="fa fa-file-text-o fa-lg"></i>MY LIBRARY</a><div class="border-bar"></div></li>
        <li><a href="#"><i class="fa fa-crosshairs fa-lg"></i>DATA SHOOTER</a><div class="border-bar" style="height: 3px"></div></li>
        <li><a href="#"><i class="fa fa-phone fa-lg"></i>CONTACT</a></li>
      </ul>
<div style="display:flex; flex:1; flex-direction: column; margin-left: 40px; padding-top: 40px;">
	<div style="width: 55%; height: 60px;">
		<span style="margin-left: 20px; font-size: 20px;">Edit Daily_LivePrice Cockpit</span>
		<button class="delcockpit">Delete cockpit</button>
	</div>

	<div style="display:flex; flex:1; flex-direction: row;">
		<div class="setdiv">
			<ul class="ulset">
				<li><a href="#">General settings</a></li>
				<li><a href="#">Manage markets</a></li>
				<li><a href="#">Manage alarms</a></li>
				<li><a href="#" class="linkli">Manage hedge <br>reporting linked</a><span class="ddspan1"><i class="fa fa-plus"></i></span>
				<ul class="ulset1">
					<li><a href="#">Manage consolidated <br>hedge reporting linked</a></li>
					<li><a href="#">Manage topconsolidated<br>hedge reporting linked</a></li>
				</ul>
				</li>
				<li><a href="#">Manage scoring linked</a></li>
				<li><a href="#">Manage library linked</a></li>
				<li><a href="#">Manage content</a></li>
			</ul>
		</div>
		<div class="generalset">
			<span style="font-size: 20px; font-weight: bold; padding: 20px 40px; display: block;">General settings</span>
			<form>
				<div class="clearboth">
					<label class="slist">energy cockpit name :</label>
					<input type="text" name="cname" class='whinput'>
				</div>
				<div class="clearboth">
					<label class="slist">created on :</label>
					<input type="text" name="cdate"  class='whinput'>
				</div>
				<div class="clearboth">
					<label class="slist"># of users attached :</label>
					<span>25</span>
				</div>
				<div class="clearboth">
					<label class="slist">emp news included :</label>
					<label class="switch">
						<input type="checkbox" name="switchme">
							<div class="sw"><span><i class="fa fa-check"></i></span><span><i class="fa fa-times"></i></span></div>
					</label>
				</div>
				<div class="clearboth">
					<label class="slist">send automatically :</label>
					<label class="switch">
						<input type="checkbox" name="switchme">
							<div class="sw"><span><i class="fa fa-check"></i></span><span><i class="fa fa-times"></i></span></div>
					</label>
				</div>
				<div class="clearboth">
					<div style="display: inline-block; position: relative; top:-78px;">
						<label class="slist">email subject line :</label>
					</div>
					<div style="display: inline-block;">
						<input type="radio" name="aa"><label>Default : [FIRSTNAME], here's your energy market report</label><br>
						<input type="radio" name="aa"><label>Custom email subject line</label><br>
						<input type="text" name="emailsub" style="margin-left: 40px; width: 90%; height: 30px;"><br>
						<span style="margin-left: 40px; font-size: 12px; color:#aaa">Remember to keep your subject line relevant and non-spammy to avoid SPAM filters.</span>
					</div>
				</div>
				<div class="clearboth">
					<label class="slist">from email address :</label>
					<input type="email" name="email" placeholder="info@address.com"  class='whinput'>
				</div>
				<div class="clearboth">
				<label class="slist">frequency :</label>
				<select style="height: 30px;">
					<option>Daily</option>
					<option>Weekly</option>
					<option>&nbsp;&nbsp;&nbsp;-Monday</option>
					<option>&nbsp;&nbsp;&nbsp;-Tuesday</option>
					<option>&nbsp;&nbsp;&nbsp;-Wednesday</option>
					<option>&nbsp;&nbsp;&nbsp;-Thursday</option>
					<option>&nbsp;&nbsp;&nbsp;-Friday</option>
					<option>Biweekly</option>
				</select>
				</div>
				<div class="clearboth" style="margin-left: 10%;">
				<button class="saveset">Save settings</button>
				<button class="cancelset">Cancel</button>
				</div>
			</form>
		</div>
	</div>
      </div>
</body>
</html>