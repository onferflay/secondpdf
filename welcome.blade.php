<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
  <style type="text/css">

  .admindiv{
    margin: 0;
      display: flex;
    }
    .admintitlediv{
      width: 100%;
      height: 80px;
    }
    .admintitlediv ul{
      padding: 0px;
    }
    .admintitlediv ul li a{
      text-decoration: none;
      font-family: "Roboto";
    }
    .admintitlediv ul li{
      font-family: "Roboto";
      float:left;
      font-size:22px;
      background-color: #f1f1f1;
      list-style: none;
      padding: 15px;
      margin-right: 5px;
    }
    .admintitlediv ul li:hover{
      border-top: 5px solid #00b0f0;
      padding-bottom: 10px;
      background-color: white;
    }
    .admintitlediv span:nth-child(4){
      float:right;
    }
    .admintitlediv button{
      float:right;
    }
    .admintitlediv span i{
      position: relative;
      right: 20px;
      color:#cbd6e2;
      cursor: pointer;
    }
    .admintitlediv button:nth-child(3){
      background-color: white;
      border:1px solid #00b0f0;
      padding: 6px 30px 5px 30px;
      margin-right: 20px;
      color: #00b0f0;
      border-radius: 3px;
    }
    .admintitlediv button:nth-child(3):hover{
    background-color:#e0f4ff;
    }
    .admintitlediv span input{
      height: 33px;
      width: 220px;
      border:1px solid #cbd6e2;
      padding-left: 10px;
      border-radius: 3px;
    }
    .admintitlediv button i{
      margin-left: 10px;
      position: relative;
      top:1px;
    }
    .admintitlediv button:nth-child(2){
      color: white;
      padding: 6px 10px 5px 10px;
      background-color: #00b0f0;
      border:1px solid #00b0f0;
      border-radius: 3px;
    }

    .admintable{
      width: 100%;
      border-collapse: collapse;
      border-color:grey;
      box-sizing: border-box;
    }
    .admintable td:nth-child(1), .admintable th:nth-child(1){
      border:0px;
      width: 24px;
      padding:0 0 0 15px;
    }
    .admintable th,.admintable td{
      text-align: center;
      max-width: 300px;
      border-right: 2px solid #ccc;
      /*f5f8fa*/
      border-bottom: 2px solid #ccc;
    }
    .admintable th{
      vertical-align: middle;
      background-color:#f1f1f1;
      padding:15px 20px 15px 20px;
    }
    .admintable td{
      vertical-align: initial;
      padding:30px 10px 30px 10px;
    }
        .admintable td input{
      width: 18px;
      height: 18px;
    }
    .boxx{
      background-color: #f5f8fa;
      padding: 5px 15px 5px 15px;
      border-radius: 3px;
      font-size: 14px;
    }
    .atachcockpit{
            border:1px solid #00b0f0;
            color:#00b0f0;
            width: 100px;
    }
    .atachcockpit:hover{
      background-color: #e0f4ff;
    }
    .atachcockpit i{
      transform: rotate(77deg);
      margin-right: 15px;
    }
    .viewcockpit{
          width: 180px;
            border:1px solid #00b0f0;
            color:#00b0f0;
            margin: 0;
            padding: 8px 12px 8px 12px;
    }
    .viewcockpit:hover{
      border-color: #00b0f0;
      color: #00b0f0;
      background-color: #e0f4ff;
    }
    .viewcockpit i{
      margin-left: 8px;
      font-size: 12px;
    }
    .hedgelist{
      display: none;
      list-style: none;
      text-align: center;
      padding: 0;
      margin:5px 30px 0px 30px;
      line-height: 26px;
      border:2px solid #ccc;
    }
    .hedgelist li{
      padding: 7px 10px 7px 10px;
      border-bottom: 1px solid #E6E8EB;
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
  left: 0px;
  color: white;
}
.ddcockpit{
  margin-left: 15px;
  font-size: 24px;
  position: relative;
  top:3px;
  color:grey;
} 

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
        .optmenu{
      list-style: none;
      width: 150px;
      border-top: 3px solid #00b0f0; 
      padding: 0px;
    }
    .optmenu li{
      padding: 10px;
      width: 150px;
      cursor: pointer;
      color:#00b0f0;
    }
    .optmenu li i{
      padding: 0 12px 0 15px;
    }
    .optdiv{
      display: none;
      margin-right: 20px;
      font-size: 15px;
      width: 150px;
      padding: 120px 0;
    }
    .optdiv span{
      text-align: center;
      display: block;
      padding-bottom: 8px;
      color:#637282;
      font-size: 13px;
    }

    .flexdiv{
      padding: 40px;
      display: flex;
      flex-direction: column;
      flex:1;
      white-space: normal;
      overflow-x: auto;
      overflow-y: hidden;
    }
    .maindiv{
      position: relative;
      width: 100%;
      background-color: white;
      align-items: stretch;
      display: flex;
      align-self: stretch;
    }
    .tablefirstdiv{
      width: 100%;
      overflow-x: auto;
      overflow-y: hidden;
      display: flex;
      flex-direction: column;
      white-space: normal;
      flex-shrink: 10000;
      max-height: 600px;
    }
    .tablediv{
      overflow-y: auto;
      margin-top: 0px;
      overflow-x: auto;
      display: block;
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

       $(".tablediv").scroll(function(){
        if ($(".tablediv").scrollTop()>20){
          $("#headerdiv").slideUp(300);
        }
        else{
          $("#headerdiv").slideDown(300);
        }
     });

    $("input[type=checkbox]").click(function(){
      var n = $(".admintable td input:checked").length;
      if ( $(this).is(":checked") ){
        $(this).parents("tr").css("background-color","pink");
        if (n>0){
        $(".optdiv").show(); 
        $(".optdiv>span").text( n + (n>1 ? " items" : " item") + " selected!" ); 
        } 
        else{
          $(".optdiv").hide(); 
        }  
      }
      else
      {
        $(this).parents("tr").css("background-color","white");
        if (n>0){
        $(".optdiv").show(); 
        $(".optdiv>span").text( n + (n>1 ? " items" : " item") + " selected!" ); 
        } 
        else{
          $(".optdiv").hide(); 
        } 
      }
          });


        $("input[name=all]").click(function(){
              var n = $(".admintable td input:checked").length;
      if ( $(this).is(":checked") && (n==0) ){
        $("input[type=checkbox]").prop('checked', true);
        $("input[type=checkbox]").parents("tr").css("background-color","pink"); 
        $(".optdiv").show(); 
        // n = $("input:checked").length-1;
        n = $(".admintable td input:checked").length
        $(".optdiv>span").text( n + (n>1 ? " items" : " item") + " selected!" );     
      }
      else
      {
        $("input[type=checkbox]").prop('checked', false);
        $("input[type=checkbox]").parents("tr").css("background-color","white");
        $(".optdiv").hide();   
      }
          });
 $(".viewcockpit").click(function(){
  $(this).siblings("ul").toggle();
  ( $(this).find("i").hasClass("fa-plus") ? $(this).find("i").removeClass("fa-plus").addClass("fa-minus") : $(this).find("i").removeClass("fa-minus").addClass("fa-plus") );
 });


    });
  </script>
    </head>
    <body>
    <div style="width: 100%; height: 150px; background-color: blue; position: relative;" id="headerdiv"></div>
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
<div class="admindiv flexdiv">
<div class="admintitlediv">
<ul>
  <li><a href="#">Admins</a></li>
  <li><a href="#">Clients</a></li>
</ul>
<button>Request admin</button>
<button>Filter<i class="fa fa-caret-down"></i></button>
<span><input type="text" name="search" placeholder="Search for a contact"><i class="fa fa-search"></i></span>
</div>
<div class="tablefirstdiv">
  <div class="tablediv">

<table class="admintable" cellpadding="0" cellspacing="0">
<tr>
  <th><input type="checkbox" class="regular-checkbox" name="all"></th>
  <th>ADMIN NAME</th>
  <th>EMAIL ADDRESS</th>
  <th>ENERGY COCKPIT</th>
  <th>HEDGE REPORTING</th>
  <th>EMP SCORING</th>
  <th>LIBRARY</th>
  </tr>
  <tr>
  <td><input type="checkbox" class="regular-checkbox" value="2"></td>
  <td>Daniel Cerescu</td>
  <td>Onferflayasdqweqweasda@yahoo.com</td>
  <td><button class="boxx atachcockpit"><i class="fa fa-paperclip"></i>Attach</button></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td><input type="checkbox" class="regular-checkbox" value="2"></td>
  <td>Daniel Cerescu</td>
  <td>Onferflay@yahoo.com</td>
  <td><button class="boxx atachcockpit"><i class="fa fa-paperclip"></i>Attach</button></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
    <tr>
  <td></td>
  <td></td>
  <td></td>
  <td>Daily_LivePrice<i class="fa fa-caret-right ddcockpit"></i></td>
  <td><button class="boxx viewcockpit">View hedge reports<i class="fa fa-plus"></i></button><ul class="hedgelist">
   <li> Hedge example Hedge example Hedge example</li>
   <li> Hedge example 2</li>
   <li> Hedge example 3</li>
   <li> Hedge example 4</li>
   <li> Hedge example 5</li>
  </ul></td>
  <td>yes</td>
  <td>yes</td>
  </tr>
    <tr>
  <td><input type="checkbox" class="regular-checkbox" value="2"></td>
  <td>Daniel Cerescu</td>
  <td>Onferflay@yahoo.com</td>
  <td><button class="boxx atachcockpit"><i class="fa fa-paperclip"></i>Attach</button></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
      <tr>
  <td></td>
  <td></td>
  <td></td>
  <td>Daily_LivePrice<i class="fa fa-caret-right ddcockpit"></i></td>
  <td><button class="boxx viewcockpit">View hedge reports<i class="fa fa-plus"></i></button><ul class="hedgelist">
   <li> Hedge example Hedge example Hedge example</li>
   <li> Hedge example 2</li>
   <li> Hedge example 3</li>
   <li> Hedge example 4</li>
   <li> Hedge example 5</li>
  </ul></td>
  <td>yes</td>
  <td>yes</td>
  </tr>
      <tr>
  <td></td>
  <td></td>
  <td></td>
  <td>Daily_LivePrice<i class="fa fa-caret-right ddcockpit"></i></td>
  <td><button class="boxx viewcockpit">View hedge reports<i class="fa fa-plus"></i></button><ul class="hedgelist">
   <li> Hedge example Hedge example Hedge example</li>
   <li> Hedge example 2</li>
   <li> Hedge example 3</li>
   <li> Hedge example 4</li>
   <li> Hedge example 5</li>
  </ul></td>
  <td>yes</td>
  <td>yes</td>
  </tr>
      <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td><button class="boxx viewcockpit">View hedge reports<i class="fa fa-plus"></i></button></td>
  <td></td>
  <td></td>
  </tr>
</table>
</div>
</div>
</div>
    <div class="optdiv">
<span> 1 item selected</span>
<ul class="optmenu">
  <li style="padding-top:15px"><i class="fa fa-bell" style="padding-right: 9px;"></i>Set alarm</li>
  <li><i class="fa fa-pencil"></i>Edit</li>
  <li><i class="fa fa-trash-o"></i>Delete</li>
  <li><i class="fa fa-envelope-o"></i>Email</li>
</ul>
</div>
      </div>
    </div>
    </body>
</html>
