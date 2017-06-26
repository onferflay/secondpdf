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
	.generalset>ul{
		list-style: none;
		padding: 0px;
	}
	.generalset>ul li{
		display: inline-block;
		background-color:#f0f6fc;
	}
	.generalset>ul li:hover a:hover{
		background-color:white;
		border-top: 5px solid #00b0f0;
		color:#00b0f0;
	}
	.generalset>ul li a{
		border-top: 5px solid #f0f6fc;
		display: block;
		padding:15px 80px;
		text-decoration: none;
		color:#333;
		font-weight: bold;
	}
	.delmarketspan{
		float:right;
		padding: 2px 4px;
		font-size: 16px;
		cursor: pointer;
	}

	    .buttonwithplus{
    	font-family: "Montserratregular";
      color: white;
      padding: 11px 15px;
      background-color: #00b0f0;
      border:1px solid #00b0f0;
      border-radius: 3px;
    }
    .buttonwithplus i{
      color: #00b0f0;
      padding: 3px 4px;
      background-color: white;
      margin-right: 15px;
      border-radius: 50%;
      font-size: 10px;
    }
    .marketnamespan{
    border: 1px solid #ccc;
    padding: 8px 20px;
    display: block;
    margin-top: 20px;
    font-size: 16px;
    color: #AAA;
    }
        .regular-checkbox{
  -webkit-appearance: none;
  background-color: white;
  border:1px solid #cbd6e2;
  padding: 10px;
  border-radius: 3px;
  width: 20px;
  height: 20px;
  position: relative;
}

.regular-checkbox:active, .regular-checkbox:focus{
    box-shadow: 0px 0px 7px #00b0f0;
    border:1px solid #00b0f0;
}

.regular-checkbox:checked {
  background-color: #00b0f0;
  border:1px solid #00b0f0;
  color: white;
}
.regular-checkbox:focus{
  outline:0 !important;
  outline-offset: 0 !important;
}
.regular-checkbox:checked:after {
  font:normal normal normal 14px/1 FontAwesome;
  content: '\f00c';
  font-size: 15px;
  position: absolute;
  top: 3px;
  left: 2px;
  color: white;
}
.marketstableul{
	list-style: none;
	padding: 0;
}
.marketstableul .delmarketspan{
	position: relative;
	top: 9px;
}
.marketstableul .regular-checkbox{
	position: relative;
	top: 4px;
	margin-right: 20px;
}
.marketstableul li{
	padding:5px 20px;
}
.marketstableul li:nth-child(1){
	padding: 0px;
}
#selnr,#delnr{
	display: block;
	padding:5px 15px;
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

      $('input[name=allin]').click(function(){
      	if ( $(this).is(':checked') ){
      	$(this).parents("ul").find("input").prop('checked',true);
      }
      else
      {
      	$(this).parents("ul").find("input").prop('checked',false);
      }
      var n = $('.marketstableul input:checked').length - $('input:checked[name=allin]').length;
      $("#selnr").text(n + (n == 1 ? " item" : " items") + " selected");
      });

      $('.ddspan1').click(function(){
      	$(this).find("i").hasClass("fa-plus") ? $(this).find("i").removeClass("fa-plus").addClass("fa-minus")  : $(this).find("i").removeClass("fa-minus").addClass("fa-plus");
      	$(".ulset1").toggle();
      });
      });
      </script>
</head>
<body>
<div class="maindiv" style="width: 1330px">
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
	<div style="width: 100%; height: 60px;">
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
		<ul>
			<li><a href='#'>CHARTS</a></li>
			<li><a href='#'>TABLES</a></li>
		</ul>
<div class="row col-sm-12">
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">Brent <i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">Brent M+1 <i class="fa fa-trash-o delmarketspan"></i></li>
              <li style="padding: 5px 20px;">Daniel A+1 <i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">EUR/USD <i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">Rate EUR/USD<i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">Natural Gas Spot<i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">TTF spot<i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
        </div>

        <div class="row col-sm-12">
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">Brent <i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">Brent M+1 <i class="fa fa-trash-o delmarketspan"></i></li>
              <li style="padding: 5px 20px;">Daniel A+1 <i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">EUR/USD <i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">Rate EUR/USD<i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">Natural Gas Spot<i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">TTF spot<i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
        </div>

        <div class="row col-sm-12">
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">Brent <i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">Brent M+1 <i class="fa fa-trash-o delmarketspan"></i></li>
              <li style="padding: 5px 20px;">Daniel A+1 <i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">EUR/USD <i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">Rate EUR/USD<i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
          <div class="col-sm-4" style="padding-top: 20px;">           
            <ul style="list-style: none; padding: 0;">
              <li><span class="marketnamespan">Natural Gas Spot<i class="fa fa-trash-o delmarketspan"></i></span></li>
              <li style="padding: 5px 20px;">TTF spot<i class="fa fa-trash-o delmarketspan"></i></li>
            </ul>
          </div>
        </div>
        <div class="row col-sm-12" style="padding:40px 0 0 40px;">
          <button class="buttonwithplus"><i class="fa fa-plus"></i>Add market prices</button>
        </div>
	</div>
      </div>
</body>
</html>