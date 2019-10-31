@extends('ProjectActivities.layout.master')
@section('page-title')
  @if(isset($generalSetting->institute))
    IMS | {{$generalSetting->institute}}
  @else
    IMS Management
  @endif
@endsection

@push('custom-css')
  <style>
      #quizmain {
      font-family: "Segoe UI",Arial,sans-serif;
      width:100%;
      background-color:#fff;
      }
      #quizcontainer {
      padding:0 20px 40px 0;
      }
      #qtext {
      font-size:18px;
      margin-bottom:40px;
      }
      #altcontainer {
      background-color:#fff;
      font-size:120%;
      line-height:1.7em;
      }
      #answerbuttoncontainer {
      position:relative;
      padding:20px 0;
      }
      .answerbutton {
      background-color:#4CAF50;
      padding:12px 30px !important;
      font-size:17px;
      }
      #timespent {
      position:absolute;
      right:0;
      text-align:right;
      border:none;
      font-family: "Segoe UI",Arial,sans-serif;
      font-size:16px;
      width:80px;
      }
    /* The radiocontainer */
      .radiocontainer {
      background-color:#f1f1f1;
      display: block;
      position: relative;
      padding:10px 10px 10px 50px;
      margin-bottom: 1px;
      cursor: pointer;
      font-size: 18px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      word-wrap: break-word;
      }    
      /* Hide the browser's default radio button */
      .radiocontainer input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      }    
      /* Create a custom radio button */
      .checkmark {
      position: absolute;
      top: 15px;
      left: 15px;
      height: 19px;
      width: 19px;
      background-color: #fff;
      border-radius: 50%;
      }
      .checkedlabel {
      background-color:#ddd;
      }
      /* On mouse-over, add a grey background color */
      .radiocontainer:hover input ~ .checkmark {
      /*nothing*/
      }
      .radiocontainer:hover {
      background-color: #ddd;
      }    
      /* When the radio button is checked, add a blue background */
      .radiocontainer input:checked ~ .checkmark {
      background-color: #2196F3;
      }    
      /* Create the indicator (the dot/circle - hidden when not checked) */
      .checkmark:after {
      content: "";
      position: absolute;
      display: none;
      }    
      /* Show the indicator (dot/circle) when checked */
      .radiocontainer input:checked ~ .checkmark:after {
      display: block;
      }
      /* Style the indicator (dot/circle) */
      .radiocontainer .checkmark:after {
          top: 6px;
          left: 6px;
          width: 7px;
          height: 7px;
          border-radius: 50%;
          background: white;
      }
  </style>
	<script>
		function clickRadio(elmnt) {
			var n, i, x;
			n = elmnt.id;
			for (i = 1; i < 5; i++) {
					x = document.getElementById("label" + i);
					if (x) {x.className = x.className.replace("checkedlabel", "");}
			}
			document.getElementById("label" + n).className += " checkedlabel";
		}
		function clickNextButton(n) {
			submitAnswer(n + 1);
		}
		function submitAnswer(n) {
			var f = document.getElementById("quizform");
			f["nextnumber"].value = n;
			f.submit();
		}
		function startTimer() {
			var tobj = document.getElementById("timespent")
			var t = "0:00";
			var s = 00;
			var d = new Date();
			var timeint = setInterval(function () {
					s += 1;
					d.setMinutes("0");
					d.setSeconds(s);
					min = d.getMinutes();
					sec = d.getSeconds();
					if (sec < 10) sec = "0" + sec;
					document.getElementById("timespent").value = min + ":" + sec;
			}, 1000);
			tobj.value = t;
		}
		if (window.addEventListener) {              
			window.addEventListener("load", startTimer);
		} else if (window.attachEvent) {                 
			window.attachEvent("onload", startTimer);
		}
  </script> 
	<style>
			a:hover,a:active{color:#4CAF50}
			table.w3-table-all{margin:20px 0}
			/*OPPSETT AV TOP, TOPNAV, SIDENAV, MAIN, RIGHT OG FOOTER:*/
			.top {
			position:relative;
			background-color:#ffffff;
			height:68px;
			padding-top:20px;
			line-height:50px;
			overflow:hidden;
			z-index:2;
			}
			.w3schools-logo {
			font-family:fontawesome;
			text-decoration:none;
			line-height:1;
			-webkit-font-smoothing:antialiased;
			-moz-osx-font-smoothing:grayscale;
			font-size:37px;
			letter-spacing:3px;
			color:#555555;
			display:block;
			position:absolute;
			top:17px;
			}
			.w3schools-logo .dotcom {color:#4CAF50}
			.topnav {
			position:relative;
			z-index:2;
			font-size:17px;
			background-color:#5f5f5f;
			color:#f1f1f1;
			width:100%;
			padding:0;
			letter-spacing:1px;
			font-family:"Segoe UI",Arial,sans-serif;
			}
			.topnav a{
			padding:10px 15px 9px 15px !important;
			}
			.topnav .w3-bar a:hover,.topnav .w3-bar a:focus{
			background-color:#000000 !important;
			color:#ffffff !important;
			}
			.topnav .w3-bar a.active {
			background-color:#4CAF50;
			color:#ffffff;
			}
			a.topnav-icons {
			width:52px !important;
			font-size:20px !important;
			padding-top:11px !important;
			padding-bottom:13px !important;
			}
			a.topnav-icons.fa-home {font-size:22px !important}
			a.topnav-icons.fa-menu {font-size:22px !important}
			a.topnav-localicons {
			font-size:20px !important;
			padding-top:6px !important;
			padding-bottom:12px !important;
			}
			i.fa-caret-down,i.fa-caret-up{width:10px}
			#sidenav h2 {
			font-size:21px;
			padding-left:16px;
			margin:-4px 0 4px 0;
			width:204px;
			}
			#sidenav a {font-family:"Segoe UI",Arial,sans-serif;text-decoration:none;display:block;padding:2px 1px 1px 16px}
			#sidenav a:hover,#sidenav a:focus {color:#000000;background-color:#cccccc;}
			#sidenav a.active {background-color:#4CAF50;color:#ffffff}
			#sidenav a.activesub:link,#sidenav a.activesub:visited {background-color:#ddd;color:#000;}
			#sidenav a.activesub:hover,#sidenav a.activesub:active {background-color:#ccc;color:#000;}
			#leftmenuinner {
			position:fixed;
			top:0;
			padding-top:112px;
			padding-bottom:0;    
			height:100%;
			width:220px;
			background-color:transparent;
			}
			#leftmenuinnerinner {
			height:100%;
			width:100%;
			overflow-y:scroll;
			overflow-x:hidden;
			padding-top:20px;
			}
			#main {padding:16px}
			#mainLeaderboard {height:90px}
			#right {text-align:center;padding:16px 16px 0 0}
			#right a {text-decoration:none}
			#right a:hover {text-decoration:underline}
			#skyscraper {min-height:600px}
			.sidesection {margin-bottom:32px;}
			#sidesection_exercise a{display:block;padding:4px 10px;}
			#sidesection_exercise a:hover,#sidesection_exercise a:active{background-color:#ccc;text-decoration:none;color:#000000;}
			.bottomad {padding:0 16px 16px 0;float:left;width:auto;}
			.footer a {text-decoration:none;}
			.footer a:hover{text-decoration:underline;}
			#nav_tutorials,#nav_references,#nav_exercises{-webkit-overflow-scrolling:touch;overflow:auto;}
			#nav_tutorials::-webkit-scrollbar,#nav_references::-webkit-scrollbar,#nav_exercises::-webkit-scrollbar {width: 12px;}
			#nav_tutorials::-webkit-scrollbar-track,#nav_references::-webkit-scrollbar-track,#nav_exercises::-webkit-scrollbar-track {background:#555555;}
			#nav_tutorials::-webkit-scrollbar-thumb,#nav_references::-webkit-scrollbar-thumb,#nav_exercises::-webkit-scrollbar-thumb {background: #999999;}
			#nav_tutorials,#nav_references,#nav_exercises {
			display:none;
			letter-spacing:0;
			margin-top:44px;
			}
			#nav_tutorials a,#nav_references a,#nav_exercises a{
			padding:2px 0 2px 6px!important;
			}
			#nav_tutorials a:focus,#nav_references a:focus,#nav_exercises a:focus{
			color: #000;
			background-color: #ccc;
			}
			#nav_tutorials h3,#nav_references h3,#nav_exercises h3{
			padding-left:6px;
			}
			.ref_overview{display:none}
			.w3-example{background-color:#f1f1f1;padding:0.01em 16px;margin:20px 0;box-shadow:0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important}
			.nextprev a {font-size:17px;border:1px solid #cccccc;}
			.nextprev a:link,.nextprev a:visited {background-color:#ffffff;color:#000000;}
			.w3-example a:focus,.nextprev a:focus{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);}
			.nextprev a.w3-right,.nextprev a.w3-left {background-color:#4CAF50;color:#ffffff;border-color:#4CAF50}
			#w3-exerciseform {background-color:#555555;padding:16px;color:#ffffff;}
			#w3-exerciseform .exercisewindow {background-color:#ffffff;padding:16px;color:#000000;}
			#w3-exerciseform .exerciseprecontainer {background-color:#f1f1f1;padding:16px;font-size:120%;font-family:Consolas,"Courier New", Courier, monospace;}
			#w3-exerciseform .exerciseprecontainer pre {display: block;}
			#w3-exerciseform .exerciseprecontainer input {padding:1px;border: 1px solid transparent;height:1.3em;}
			.w3-theme {color:#fff !important;background-color:#73AD21 !important;background-color:#4CAF50 !important}
			.w3-theme-border {border-color:#4CAF50 !important}
			.sharethis a:hover {color:inherit;}
			.fa-facebook-square,.fa-twitter-square,.fa-google-plus-square {padding:0 8px;}
			.fa-facebook-square:hover, .fa-thumbs-o-up:hover {color:#3B5998;}
			.fa-twitter-square:hover {color:#55acee;}
			.fa-google-plus-square:hover {color:#dd4b39;}
			#google_translate_element img {margin-bottom:-1px;}
			#googleSearch {color:#000000;}
			#googleSearch a {padding:0 !important;}
			.searchdiv {max-width:400px;margin:auto;text-align:left;font-size:16px}
			div.cse .gsc-control-cse, div.gsc-control-cse {background-color:transparent;border:none;padding:6px;margin:0px}
			td.gsc-search-button input.gsc-search-button {background-color:#4CAF50;border-color:#4CAF50}
			td.gsc-search-button input.gsc-search-button:hover {background-color:#46a049;}
			input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus, .gsc-search-button {
			box-sizing:content-box; line-height:normal;}
			.gsc-tabsArea div {overflow:visible;}
			/*"nullstille" w3css:*/
			.w3-main{transition:margin-left 0s;}
			/*"nullstilling" slutt*/
			@media (min-width:1675px) {
			#main {width:79%}
			#right {width:21%}
			}
			@media (max-width:992px) {
			.top {height:100px}
			.top img {display:block;margin:auto;}
			.top .w3schools-logo {position:relative;top:0;width:100%;text-align:center;margin:auto}
			.toptext {width:100%;text-align:center}
			#sidenav {width:260px;
			box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
			}
			#sidenav h2 {font-size:26px;width:100%;}
			#sidenav a {padding:3px 2px 3px 24px;font-size:17px}
			#leftmenuinner {  
			overflow:auto;
			-webkit-overflow-scrolling:touch;
			height:100%;
			position:relative;
			width:auto;
			padding-top:0;
			background-color:#f1f1f1;
			}
			#leftmenuinnerinner {overflow-y:scroll}
			.bottomad {float:none;text-align:center}
			#skyscraper {min-height:60px}
			}
			@media screen and (max-width:600px) {
			.w3-example, .w3-note, #w3-exerciseform {margin-left:-16px;margin-right:-16px;}
			.top {height:68px}
			.toptext {display:none}
			}
	
			.fa {
			display:inline-block;
			font:normal normal normal 14px/1 FontAwesome;
			font-size:inherit;
			text-rendering:auto;
			-webkit-font-smoothing:antialiased;
			-moz-osx-font-smoothing:grayscale;
			transform:translate(0, 0);
			}
			.fa-2x {
			font-size:2em;
			}
			.fa-home:before {content:'\e800';}
			.fa-menu:before {content: '\f0c9';}
			.fa-globe:before {content:'\e801';}
			.fa-search:before {content:'\e802'; }
			.fa-thumbs-o-up:before {content:'\e803';}
			.fa-left-open:before {content:'\e804';}
			.fa-right-open:before {content:'\e805';}
			.fa-facebook-square:before {content:'\e806';}
			.fa-google-plus-square:before {content:'\e807';}
			.fa-twitter-square:before {content:'\e808';}
			.fa-caret-down:before {content:'\e809';}
			.fa-caret-up:before {content:'\e80a';}
			.fa-adjust:before { content: '\e80b'; }
			span.marked, span.deprecated {
			color:#e80000;
			background-color:transparent;
			}
			.intro {font-size:16px}
			.w3-btn, .w3-btn:link, .w3-btn:visited {color:#FFFFFF;background-color:#4CAF50}
			a.w3-btn[href*="exercise.asp"],a.w3-btn[href*="exercise_js.asp"] {margin:10px 5px 0 0}
			a.btnplayit,a.btnplayit:link,a.btnplayit:visited {background-color:#FFAD33;padding:1px 10px 2px 10px}
			a.btnplayit:hover,a.btnplayit:active {background-color:#ffffff;color:#FFAD33}
			a.btnplayit:hover {box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);}
			a.btnsmall:link,a.btnsmall:visited,a.btnsmall:active,a.btnsmall:hover {
			float:right;padding:1px 10px 2px 10px;font:15px Verdana, sans-serif;}
			a.btnsmall:hover {box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);}
			a.btnsmall:active,a.btnsmall:hover {color:#4CAF50;background-color:#ffffff}
			.tagcolor{color:mediumblue}
			.tagnamecolor{color:brown}
			.attributecolor{color:red}
			.attributevaluecolor{color:mediumblue}
			.commentcolor{color:green}
			.cssselectorcolor{color:brown}
			.csspropertycolor{color:red}
			.csspropertyvaluecolor{color:mediumblue}
			.cssdelimitercolor{color:black}
			.cssimportantcolor{color:red}  
			.jscolor{color:black}
			.jskeywordcolor{color:mediumblue}
			.jsstringcolor{color:brown}
			.jsnumbercolor{color:red}
			.jspropertycolor{color:black}
			.javacolor{color:black}
			.javakeywordcolor{color:mediumblue}
			.javastringcolor{color:brown}
			.javanumbercolor{color:red}
			.javapropertycolor{color:black}
			.kotlincolor{color:black}
			.kotlinkeywordcolor{color:mediumblue}
			.kotlinstringcolor{color:brown}
			.kotlinnumbercolor{color:red}
			.kotlinpropertycolor{color:black}
			.phptagcolor{color:red}
			.phpcolor{color:black}
			.phpkeywordcolor{color:mediumblue}
			.phpglobalcolor{color:goldenrod}
			.phpstringcolor{color:brown}
			.phpnumbercolor{color:red}  
			.pythoncolor{color:black}
			.pythonkeywordcolor{color:mediumblue}
			.pythonstringcolor{color:brown}
			.pythonnumbercolor{color:red}  
			.angularstatementcolor{color:red}
			.sqlcolor{color:black}
			.sqlkeywordcolor{color:mediumblue}
			.sqlstringcolor{color:brown}
			.sqlnumbercolor{color:} 
			.darktheme {background-color:rgb(40,44,52);color:white;}
			.darktheme .tagcolor{color:#88ccbb/*green2*/!important}
			.darktheme .tagnamecolor{color:#ff9999/*red*/!important}
			.darktheme .attributecolor{color:#c5a5c5/*purple*/!important}
			.darktheme .attributevaluecolor{color:#88c999/*green*/!important}
			.darktheme .commentcolor{color:color: #999;!important}
			.darktheme .cssselectorcolor{color:#ff9999/*red*/!important}
			.darktheme .csspropertycolor{color:#c5a5c5/*purple*/!important}
			.darktheme .csspropertyvaluecolor{color:#88c999/*green*/!important}
			.darktheme .cssdelimitercolor{color:white!important}
			.darktheme .cssimportantcolor{color:color:#ff9999/*red*/!important}
			.darktheme .jscolor{color:white!important}
			.darktheme .jskeywordcolor{color:#c5a5c5/*purple*/!important}
			.darktheme .jsstringcolor{color:#88c999/*green*/!important}
			.darktheme .jsnumbercolor{color:#80b6ff/*blue*/!important}
			.darktheme .jspropertycolor{color:white!important}
			.darktheme .javacolor{color:white!important}
			.darktheme .javakeywordcolor{color:#88c999/*green*/!important}
			.darktheme .javastringcolor{color:#88c999/*green*/!important}
			.darktheme .javanumbercolor{color:#88c999/*green*/!important}
			.darktheme .javapropertycolor{color:white!important}
			.darktheme .kotlincolor{color:white!important}
			.darktheme .kotlinkeywordcolor{color:#88c999/*green*/!important}
			.darktheme .kotlinstringcolor{color:#88c999/*green*/!important}
			.darktheme .kotlinnumbercolor{color:#88c999/*green*/!important}
			.darktheme .kotlinpropertycolor{color:white!important}
			.darktheme .phptagcolor{color:#999!important}
			.darktheme .phpcolor{color:white!important}
			.darktheme .phpkeywordcolor{color:#ff9999/*red*/!important}
			.darktheme .phpglobalcolor{color:white!important}
			.darktheme .phpstringcolor{color:color:#88c999/*green*/!important}
			.darktheme .phpnumbercolor{color:#88c999/*green*/!important}
			.darktheme .pythoncolor{color:white!important}
			.darktheme .pythonkeywordcolor{color:#ff9999/*red*/!important}
			.darktheme .pythonstringcolor{color:#88c999/*green*/!important}
			.darktheme .pythonnumbercolor{color:#88c999/*green*/!important}
			.darktheme .angularstatementcolor{color:#ff9999/*red*/!important}
			.darktheme .sqlcolor{color:white!important}
			.darktheme .sqlkeywordcolor{color:#80b6ff/*blue*/!important}
			.darktheme .sqlstringcolor{color:#88c999/*green*/!important}
			.darktheme .sqlnumbercolor{color:}
			@media only screen and (max-device-width: 480px) {
			.w3-code, .w3-codespan,#w3-exerciseform .exerciseprecontainer {font-family: 'Source Code Pro',Menlo,Consolas,monospace;}
			.w3-code {font-size:14px;}
			.w3-codespan {font-size:15px;}
			#w3-exerciseform .exerciseprecontainer {font-size:15px;}
			#w3-exerciseform .exerciseprecontainer input {padding:0;height:1.5em}
			}
			@media screen and (max-width:700px) {
			#mainLeaderboard {height:60px}
			#div-gpt-ad-1422003450156-0 {float:none;margin-left:auto;margin-right:auto}
			#div-gpt-ad-1422003450156-3 {float:none;margin-left:auto;margin-right:auto}
			}
			@media (max-width:1700px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(17){display:none;}}
			@media (max-width:1600px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(13){display:none;}}
			@media (max-width:1510px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(12){display:none;}}
			@media (max-width:1450px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(11){display:none;}}
			@media (max-width:1330px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(10){display:none;}}
			@media (max-width:1200px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(9){display:none;}}
			@media (max-width:1100px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(8){display:none;}}
			@media (max-width:1000px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(7){display:none;}}
			@media (max-width:992px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(6){display:none;}}
			@media (max-width:930px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(18){display:none;}}
			@media (max-width:800px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(19){display:none;}}
			@media (max-width:650px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(5){display:none;} #topnav .w3-bar:nth-of-type(1) a:nth-of-type(16){display:none;}}
			@media (max-width:460px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(4){display:none;}}
			@media (max-width:400px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(3){display:none;}}
			.w3-note{background-color:#ffffcc;border-left:6px solid #ffeb3b}
			.w3-warning{background-color:#ffdddd;border-left:6px solid #f44336}
			.w3-info{background-color:#ddffdd;border-left:6px solid #4CAF50}
			hr[id^="ez-insert-after-placeholder"] {margin-top: 0;}
			.phonebr {display:none;}
			@media screen and (max-width: 475px) {.phonebr {display:initial;}}
	</style>
@endpush

@section('menu-panel')
    @include('projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
    {{-- @include('ProjectActivities.layout.left.admin') --}}
  <div class="container">
    <div class="row">
        <h1>Stat to Quiz</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="container">
          <div id="quizmain">
            <div id="quizcontainer">
              {{-- <h3>Question {{$question->id}} of {{$last_question_id}}:</h3>
							<p id="qtext">{{$question->question_text}}</p>							 --}}
			  			<form role="form"  action="{{route('quiz.save.test',$question->id)}}" method="post">
							{{csrf_field()}}
								<input type="hidden" name="question_id" id="question_id" value="{{$question->id}}">
                @foreach ($question->options as $option)
                  <div id="altcontainer">
                    <label class="radiocontainer" id="label1">{{$option->option}}
										<input type="radio" name="option" id="{{$question->id}}" value="{{$question->id}}">
										<h3>Question {{$courses->id}} of {{$last_question_id}}:</h3>
										<p id="qtext">{{$courses->question_text}}</p>
										<form role="form" id="quizform" name="quizform" action="{{route('quiz.saveAnswer',$courses->id)}}" method="post">
											{{csrf_field()}}
											<input type="hidden" name="user_id" value="1">
											<input type="hidden" name="question_id" value="{{$courses->id}}">
											<input type="hidden" name="subject_id" value="{{$courses->id}}">
											<input type="hidden" name="user_answer" value="{{$courses->id}}">
											<input type="hidden" name="question" value="{{$courses->question_text}}">
											<input type="hidden" name="right_answer" value="{{$courses->id}}">
											<div style="position:relative;width:100%;">
												@foreach ($courses->options as $option)
													<input type="hidden" name="answer_option[]" value="{{$option->id}}">
													<div id="altcontainer">
														<label class="radiocontainer" id="label1">{{$option->option}}
															<input type="radio" name="option[]" id="{{$option->id}}" value="{{$option->id}}">
															<span class="checkmark"></span>
														</label>
													</div>
												@endforeach
											</div>
											<div id="answerbuttoncontainer">
												<button class="answerbutton w3-btn" type="submit">Next ❯</button>
												<input type="text" readonly="" id="timespent" value="0:00">
												<button class="btn btn-success btn-sm" type="submit">Next ❯</button>
												<input type="text" readonly="" id="timespent" value="0:00" name="time_spent">
												<button class="btn btn-success btn-sm" type="submit">Next ❯</button>
												<input type="text" readonly="" id="timespent" value="0:00" name="time_spent">
											</div>
										</form>      
            			</div>
          	</div>
        	</div>
  			</div>
		</div>

@endsection
{{-- For Custom JS --}}
@push('custom-js')
  <script type="text/javaScript">
 
  </script>    
@endpush