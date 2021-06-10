<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movies screen</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: movies;
		--web-view-id: movies;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Movies_screen;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Movies_screen {
		position: absolute;
		width: 1440px;
		height: 1800px;
		background-color: rgba(148,183,156,1);
		overflow: hidden;
		--web-view-name: movies;
		--web-view-id: movies;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	@keyframes  {
	
	
	}
	@keyframes  {
	
	
	}
	@keyframes  {
	
	
	}
	#Background {
		fill: rgba(156,185,157,1);
	}
	.Background {
		position: absolute;
		overflow: visible;
		width: 1440px;
		height: 880px;
		left: 0px;
		top: 0px;
	}
	#Content {
		position: absolute;
		width: 3040px;
		height: 891px;
		left: -800px;
		top: 145px;
		overflow: visible;
	}
	#Popular {
		position: absolute;
		width: 1289px;
		height: 367px;
		left: 875px;
		top: 524px;
		overflow: visible;
	}
	#Title {
		position: absolute;
		width: 1289px;
		height: 24px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#See_all {
		position: absolute;
		width: 66px;
		height: 18px;
		left: 1223px;
		top: 4px;
		overflow: visible;
	}
	#Icon {
		position: absolute;
		width: 6px;
		height: 9px;
		left: 60px;
		top: 1px;
		overflow: visible;
	}
	#Arrow {
		fill: rgba(255,255,255,1);
	}
	.Arrow {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 18px;
		height: 21px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#See_all_s {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1.5px;
		text-align: right;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
		text-transform: uppercase;
	}
	#Popular_right_now {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 194px;
		white-space: nowrap;
		text-align: left;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
		text-transform: uppercase;
	}
	#Component_18__1 {
		position: absolute;
		width: 635px;
		height: 313px;
		left: 0px;
		top: 54px;
		overflow: visible;
	}
	#Movies {
		position: absolute;
		width: 635px;
		height: 313px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Movie_2 {
		filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
		position: absolute;
		width: 307.5px;
		height: 313px;
		left: 327.5px;
		top: 0px;
		overflow: visible;
	}

	#Movie_1 {
		filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
		position: absolute;
		width: 307.5px;
		height: 313px;
		left: 0px;
		top: 0px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: playmovie;
		cursor: pointer;
	}
    #Movie_3 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 654px;
        top: 0px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_4 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 981px;
        top: 0px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_5 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 0px;
        top: 313px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_6 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 327.5px;
        top: 313px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_7 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 654px;
        top: 313px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_8 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 981px;
        top: 313px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }

    #Movie_9 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 0px;
        top: 626px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_10 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 327.5px;
        top: 626px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_11 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 654px;
        top: 626px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }
    #Movie_12 {
        filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
        position: absolute;
        width: 307.5px;
        height: 313px;
        left: 981px;
        top: 626px;
        overflow: visible;
        --web-animation: fadein 0.3s ease-out;
        --web-action-type: page;
        --web-action-target: playmovie;
        cursor: pointer;
    }











	#Filters {
		position: absolute;
		width: 1290px;
		height: 44px;
		left: 875px;
		top: 430px;
		overflow: visible;
	}
	#Option_2 {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1246px;
		top: 0px;
		overflow: visible;
	}
	#Background_Shadow {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle {
		fill: rgba(41,42,44,1);
	}
	.Rectangle {
		position: absolute;
		overflow: visible;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
	}
	#Icon_ {
		position: absolute;
		width: 16px;
		height: 16px;
		left: 14px;
		top: 14px;
		overflow: visible;
	}
	#Rectangle_ {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_ {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 17.895px;
		height: 17.895px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_ba {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_ba {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 17.895px;
		height: 17.895px;
		left: 10.105px;
		top: 0px;
	}
	#Rectangle_bb {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_bb {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 17.895px;
		height: 17.895px;
		left: 0px;
		top: 10.105px;
	}
	#Rectangle_bc {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_bc {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 17.895px;
		height: 17.895px;
		left: 10.105px;
		top: 10.105px;
	}
	#Option_1 {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1182px;
		top: 0px;
		overflow: visible;
	}
	#Background_ {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_ba {
		fill: rgba(41,42,44,1);
	}
	.Background_ba {
		position: absolute;
		overflow: visible;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
	}
	#Icon_ba {
		position: absolute;
		width: 16px;
		height: 16px;
		left: 14px;
		top: 14px;
		overflow: visible;
	}
	#Rectangle_bd {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_bd {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 28px;
		height: 14.5px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_be {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_be {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 22px;
		height: 14.5px;
		left: 0px;
		top: 7px;
	}
	#Rectangle_bf {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_bf {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		position: absolute;
		overflow: visible;
		width: 28px;
		height: 14.5px;
		left: 0px;
		top: 13.5px;
	}
	#Line {
		opacity: 0.083;
		fill: rgba(255,255,255,1);
	}
	.Line {
		position: absolute;
		overflow: visible;
		width: 982px;
		height: 1px;
		left: 170px;
		top: 22px;
	}
	#Genres {
		position: absolute;
		width: 140px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_bg {
		fill: rgba(41,42,44,1);
	}
	.Background_bg {
		position: absolute;
		overflow: visible;
		width: 140px;
		height: 44px;
		left: 0px;
		top: 0px;
	}
	#Icon_bh {
		transform: translate(0px, 0px) matrix(1,0,0,1,113.925,16.575) rotate(90deg);
		transform-origin: center;
		position: absolute;
		width: 7.15px;
		height: 11px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Arrow_bi {
		fill: rgba(255,255,255,1);
	}
	.Arrow_bi {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 23px;
		height: 19.15px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Genres_bj {
		left: 17px;
		top: 13px;
		position: absolute;
		overflow: visible;
		width: 56px;
		white-space: nowrap;
		text-align: left;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}
	#Banners {
		position: absolute;
		width: 3040px;
		height: 385px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Movies_bl {
		position: absolute;
		width: 3040px;
		height: 385px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Movie_Left {
		position: absolute;
		width: 1000px;
		height: 385px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Movie_Left {
		fill: rgba(44,25,94,1);
	}
	.Background_Movie_Left {
		position: absolute;
		overflow: visible;
		width: 1000px;
		height: 385px;
		left: 0px;
		top: 0px;
	}
	#Filter_Movie_Left_bp {
		fill: url(#Filter_Movie_Left_bp);
	}
	.Filter_Movie_Left_bp {
		position: absolute;
		overflow: visible;
		width: 200px;
		height: 385px;
		left: 800px;
		top: 0px;
	}
	#Movie_Center {
		position: absolute;
		width: 1000px;
		height: 385px;
		left: 1020px;
		top: 0px;
		overflow: visible;
	}
	#Background_Movie_Center {
		position: absolute;
		width: 1000px;
		height: 385px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Filter_Movie_Center_bt {
		fill: url(#Filter_Movie_Center_bt);
	}
	.Filter_Movie_Center_bt {
		position: absolute;
		overflow: visible;
		width: 1000px;
		height: 193px;
		left: 0px;
		top: 192px;
	}
	#Text {
		position: absolute;
		width: 300px;
		height: 94px;
		left: 670px;
		top: 262px;
		overflow: visible;
	}
	#After_the_devastatin {
		opacity: 0.798;
		left: 0px;
		top: 54px;
		position: absolute;
		overflow: hidden;
		width: 301px;
		height: 40px;
		line-height: 20px;
		margin-top: -2.5px;
		text-align: left;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
	}
	#Avengers__Endgame {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 301px;
		height: 43px;
		text-align: left;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 30px;
		color: rgba(255,255,255,1);
	}
	#Movie_Right {
		position: absolute;
		width: 1000px;
		height: 385px;
		left: 2040px;
		top: 0px;
		overflow: visible;
	}
	#Background_Movie_Righ {
		fill: rgba(44,25,94,1);
	}
	.Background_Movie_Righ {
		position: absolute;
		overflow: visible;
		width: 1000px;
		height: 385px;
		left: 0px;
		top: 0px;
	}
	#Filter_Movie_Right {
		fill: rgba(44,25,94,1);
	}
	.Filter_Movie_Right {
		position: absolute;
		overflow: visible;
		width: 200px;
		height: 385px;
		left: 0px;
		top: 0px;
	}
	#Navigation {
		position: absolute;
		width: 37px;
		height: 15px;
		left: 2183px;
		top: 350px;
		overflow: visible;
	}
	#Right_Navigation {
		opacity: 0.6;
		position: absolute;
		width: 10px;
		height: 15px;
		left: 27px;
		top: 0px;
		overflow: visible;
	}
	#Arrow_Right {
		fill: rgba(255,255,255,1);
	}
	.Arrow_Right {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 22px;
		height: 27px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Left_Navigation {
		opacity: 0.6;
		transform: translate(0px, 0px) matrix(1,0,0,1,0,0) rotate(180deg);
		transform-origin: center;
		position: absolute;
		width: 10px;
		height: 15px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Arrow_Left {
		fill: rgba(255,255,255,1);
	}
	.Arrow_Left {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 10px;
		height: 15px;
		transform: translate(10px, 0px) matrix(1,0,0,1,0,-15) rotate(180deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
	}
	#Top {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Header {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Shaodw {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Header {
		fill: rgba(49,28,105,1);
	}
	.Background_Header {
		filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.549));
		position: absolute;
		overflow: visible;
		width: 1488px;
		height: 148px;
		left: 0px;
		top: 0px;
	}
	#Search {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Component_1__1 {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1372px;
		top: 28px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: signup;
		cursor: pointer;
	}
	#Component_68__1 {
		position: absolute;
		width: 486px;
		height: 26px;
		left: 477px;
		top: 38px;
		overflow: visible;
	}
	#Home_Movies_Series_R {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 57px;
		white-space: nowrap;
		text-align: center;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(255,255,255,0.353);
	}
	#Home_Movies_Series_R_cd {
		left: 107px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		text-align: center;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(255,255,255,0.353);
	}
	#Home_Movies_Series_R_ce {
		left: 224px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 61px;
		white-space: nowrap;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: series;
		cursor: pointer;
		text-align: center;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(255,255,255,0.353);
	}
	#Home_Movies_Series_R_cf {
		left: 338px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 149px;
		white-space: nowrap;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: recentlyadded;
		cursor: pointer;
		text-align: center;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(255,255,255,0.353);
	}
</style>
</head>
<body>
<div id="Movies_screen">
    <?php
    if(isset($messages)){
        foreach($messages as $message) {
            echo $message;
        }
    }
    ?>
	<svg class="Background">
		<rect id="Background" rx="0" ry="0" x="0" y="0" width="1440" height="880">
		</rect>
	</svg>
	<div id="Content" class="Content">
		<div id="Popular">
			<div id="Title">
				<div id="See_all">
					<div id="Icon">
						<svg class="Arrow" viewBox="0 0 6 9">
							<path id="Arrow" d="M 5.840861797332764 4.849757671356201 L 1.440792918205261 8.855118751525879 C 1.228582382202148 9.048294067382813 0.8845354914665222 9.048294067382813 0.6723476052284241 8.855118751525879 L 0.159152626991272 8.387957572937012 C -0.05269566550850868 8.195112228393555 -0.05310319736599922 7.882565021514893 0.1582470089197159 7.689266204833984 L 3.645378112792969 4.49998950958252 L 0.1582470089197159 1.310733795166016 C -0.05310319736599922 1.117434978485107 -0.05269566550850868 0.8048880696296692 0.159152626991272 0.6120426058769226 L 0.6723476052284241 0.144881397485733 C 0.8845581412315369 -0.04829379916191101 1.228605031967163 -0.04829379916191101 1.440792918205261 0.144881397485733 L 5.840839385986328 4.150242328643799 C 6.05305004119873 4.343396663665771 6.05305004119873 4.656582355499268 5.840861797332764 4.849757671356201 Z">
							</path>
						</svg>
					</div>
					<div id="See_all_s">
						<span>See all</span>
					</div>
				</div>
				<div id="Popular_right_now">
					<span>Popular right now</span>
				</div>
			</div>
			<div id="Component_18__1" class="Component_18___1">
				<div id="Movies">

                    <?php
                    $MovieRepository = new MovieRepository();
                    $n= $MovieRepository ->getMaxMovieIndex();
                  if($n >= 1){
                      $CL = $MovieRepository -> getCoverLink(1);
                      echo'<a href="playmovie?n=1"><img id="Movie_1" src='.$CL.' "/></a>';
                      //echo'<img onclick="application.goToTargetView(event)" id="Movie_1" src="public/img/Movie_1.png" srcset="public/img/Movie_1.png 1x, public/img/Movie_1@2x.png 2x">';
                  }
                  if($n >= 2){
                      $CL = $MovieRepository -> getCoverLink(2);
                      echo'<a href="playmovie?n=2"&><img id="Movie_2" src='.$CL.' "/></a>';  }
                    if($n >= 3){
                        $CL = $MovieRepository -> getCoverLink(3);
                        echo'<a href="playmovie?n=3"><img id="Movie_3" src='.$CL.' "/></a>'; }
                    if($n >= 4){
                         $CL = $MovieRepository -> getCoverLink(4);
                        echo'<a href="playmovie?n=4"><img id="Movie_4" src='.$CL.' "/></a>';;
                  }
                    if($n >= 5){
                        $CL = $MovieRepository -> getCoverLink(5);
                        echo'<a href="playmovie?n=5"><img id="Movie_5" src='.$CL.' "/></a>';
                  }
                    if($n >= 6){
                         $CL = $MovieRepository -> getCoverLink(6);
                        echo'<a href="playmovie?n=6"><img id="Movie_6" src='.$CL.' "/></a>';
                   }
                    if($n >= 7){
                        $CL = $MovieRepository -> getCoverLink(7);
                        echo'<a href="playmovie?n=7"><img id="Movie_7" src='.$CL.' "/></a>'; }
                    if($n >= 8){
                        $CL = $MovieRepository -> getCoverLink(8);
                        echo'<a href="playmovie?n=8"><img id="Movie_8" src='.$CL.' "/></a>'; }
                    if($n >= 9){
                        $CL = $MovieRepository -> getCoverLink(9);
                        echo'<a href="playmovie?n=9"><img id="Movie_9" src='.$CL.' "/></a>';
                          }
                    if($n >= 10){
                        $CL = $MovieRepository -> getCoverLink(10);
                        echo'<a href="playmovie?n=10"><img id="Movie_10" src='.$CL.' "/></a>';
                      }
                    if($n >= 11){
                        $CL = $MovieRepository -> getCoverLink(11);
                        echo'<a href="playmovie?n=11"><img id="Movie_11" src='.$CL.' "/></a>';
                        }
                    if($n >= 12){
                        $CL = $MovieRepository -> getCoverLink(12);
                        echo'<a href="playmovie?n=12"><img id="Movie_12" src='.$CL.' "/></a>';
                       }
                    ?>

                </div>
			</div>
		</div>
		<div id="Filters">
			<div id="Option_2">
				<div id="Background_Shadow">
					<svg class="Rectangle">
						<rect id="Rectangle" rx="6" ry="6" x="0" y="0" width="44" height="44">
						</rect>
					</svg>
				</div>
				<div id="Icon_">
					<svg class="Rectangle_">
						<rect id="Rectangle_" rx="1" ry="1" x="0" y="0" width="5.895" height="5.895">
						</rect>
					</svg>
					<svg class="Rectangle_ba">
						<rect id="Rectangle_ba" rx="1" ry="1" x="0" y="0" width="5.895" height="5.895">
						</rect>
					</svg>
					<svg class="Rectangle_bb">
						<rect id="Rectangle_bb" rx="1" ry="1" x="0" y="0" width="5.895" height="5.895">
						</rect>
					</svg>
					<svg class="Rectangle_bc">
						<rect id="Rectangle_bc" rx="1" ry="1" x="0" y="0" width="5.895" height="5.895">
						</rect>
					</svg>
				</div>
			</div>
			<div id="Option_1">
				<div id="Background_">
					<svg class="Background_ba">
						<rect id="Background_ba" rx="6" ry="6" x="0" y="0" width="44" height="44">
						</rect>
					</svg>
				</div>
				<div id="Icon_ba">
					<svg class="Rectangle_bd">
						<rect id="Rectangle_bd" rx="1" ry="1" x="0" y="0" width="16" height="2.5">
						</rect>
					</svg>
					<svg class="Rectangle_be">
						<rect id="Rectangle_be" rx="1" ry="1" x="0" y="0" width="10" height="2.5">
						</rect>
					</svg>
					<svg class="Rectangle_bf">
						<rect id="Rectangle_bf" rx="1" ry="1" x="0" y="0" width="16" height="2.5">
						</rect>
					</svg>
				</div>
			</div>
			<svg class="Line">
				<rect id="Line" rx="0" ry="0" x="0" y="0" width="982" height="1">
				</rect>
			</svg>
			<div id="Genres" class="Genres">
				<svg class="Background_bg">
					<rect id="Background_bg" rx="6" ry="6" x="0" y="0" width="140" height="44">
					</rect>
				</svg>
				<div id="Icon_bh">
					<svg class="Arrow_bi" viewBox="0 0 7.15 11">
						<path id="Arrow_bi" d="M 6.960360527038574 5.927481651306152 L 1.716944932937622 10.822922706604 C 1.464060664176941 11.05902576446533 1.054071426391602 11.05902576446533 0.8012142181396484 10.822922706604 L 0.1896568834781647 10.25194835662842 C -0.06279566884040833 10.01624774932861 -0.06328130513429642 9.634245872497559 0.1885776817798615 9.397992134094238 L 4.344075679779053 5.499987602233887 L 0.1885776817798615 1.602007985115051 C -0.06328130513429642 1.365753769874573 -0.06279566884040833 0.9837520718574524 0.1896568834781647 0.7480521202087402 L 0.8012142181396484 0.1770772635936737 C 1.05409848690033 -0.05902575328946114 1.464087605476379 -0.05902575328946114 1.716944932937622 0.1770772635936737 L 6.960333347320557 5.072518348693848 C 7.213217735290527 5.308596134185791 7.213217735290527 5.691378593444824 6.960360527038574 5.927481651306152 Z">
						</path>
					</svg>
				</div>
				<div id="Genres_bj">
					<span>Genres </span>
				</div>
			</div>
		</div>
		<div id="Banners">
			<div id="Movies_bl">
				<div id="Movie_Left">
					<svg class="Background_Movie_Left">
						<rect id="Background_Movie_Left" rx="8" ry="8" x="0" y="0" width="1000" height="385">
						</rect>
					</svg>
					<svg class="Filter_Movie_Left_bp">
						<linearGradient id="Filter_Movie_Left_bp" spreadMethod="pad" x1="1" x2="0" y1="0.5" y2="0.5">
							<stop offset="0" stop-color="#151519" stop-opacity="0"></stop>
							<stop offset="1" stop-color="#151519" stop-opacity="0.298"></stop>
						</linearGradient>
						<rect id="Filter_Movie_Left_bp" rx="0" ry="0" x="0" y="0" width="200" height="385">
						</rect>
					</svg>
				</div>
				<div id="Movie_Center" class="Movie_Center">
					<img id="Background_Movie_Center" src="public/img/Background_Movie_Center.png" srcset="public/img/Background_Movie_Center.png 1x, public/img/Background_Movie_Center@2x.png 2x">
						
					<svg class="Filter_Movie_Center_bt">
						<linearGradient id="Filter_Movie_Center_bt" spreadMethod="pad" x1="0.5" x2="0.5" y1="0" y2="1">
							<stop offset="0" stop-color="#151419" stop-opacity="0"></stop>
							<stop offset="1" stop-color="#151419" stop-opacity="0.553"></stop>
						</linearGradient>
						<rect id="Filter_Movie_Center_bt" rx="0" ry="0" x="0" y="0" width="1000" height="193">
						</rect>
					</svg>
					<div id="Text">
						<div id="After_the_devastatin">
							<span>Blends the style of classic sitcoms with the MCU, in which Wanda Maximoff and Vision - two super-powered beings living their ideal suburban lives - begin to suspect that everything is not as it seems.</span>
						</div>
						<div id="Avengers__Endgame">
							<span>WandaVision</span>
						</div>
					</div>
				</div>
				<div id="Movie_Right">
					<svg class="Background_Movie_Righ">
						<rect id="Background_Movie_Righ" rx="8" ry="8" x="0" y="0" width="1000" height="385">
						</rect>
					</svg>
					<svg class="Filter_Movie_Right">
						<rect id="Filter_Movie_Right" rx="0" ry="0" x="0" y="0" width="200" height="385">
						</rect>
					</svg>
				</div>
			</div>
			<div id="Navigation">
				<div id="Right_Navigation">
					<svg class="Arrow_Right" viewBox="0 0 10 15">
						<path id="Arrow_Right" d="M 9.734769821166992 8.082929611206055 L 2.401321649551392 14.75853061676025 C 2.047637224197388 15.08049011230469 1.474225878715515 15.08049011230469 1.120579361915588 14.75853061676025 L 0.2652543783187866 13.97992897033691 C -0.08782611042261124 13.65851974487305 -0.0885053277015686 13.13760852813721 0.2637450098991394 12.81544399261475 L 6.075630187988281 7.499982833862305 L 0.2637450098991394 2.184556245803833 C -0.0885053277015686 1.862391591072083 -0.08782611042261124 1.341480135917664 0.2652543783187866 1.020071029663086 L 1.120579361915588 0.2414689958095551 C 1.474263548851013 -0.08048966526985168 2.047675132751465 -0.08048966526985168 2.401321649551392 0.2414689958095551 L 9.734731674194336 6.917070388793945 C 10.08841609954834 7.238994598388672 10.08841609954834 7.760971069335938 9.734769821166992 8.082929611206055 Z">
						</path>
					</svg>
				</div>
				<div id="Left_Navigation">
					<svg class="Arrow_Left" viewBox="-10 0 10 15">
						<path id="Arrow_Left" d="M -9.734769821166992 8.082929611206055 L -2.401321649551392 14.75853061676025 C -2.047637224197388 15.08049011230469 -1.474225878715515 15.08049011230469 -1.120579361915588 14.75853061676025 L -0.2652543783187866 13.97992897033691 C 0.08782611042261124 13.65851974487305 0.0885053277015686 13.13760852813721 -0.2637450098991394 12.81544399261475 L -6.075630187988281 7.499982833862305 L -0.2637450098991394 2.184556245803833 C 0.0885053277015686 1.862391591072083 0.08782611042261124 1.341480135917664 -0.2652543783187866 1.020071029663086 L -1.120579361915588 0.2414689958095551 C -1.474263548851013 -0.08048966526985168 -2.047675132751465 -0.08048966526985168 -2.401321649551392 0.2414689958095551 L -9.734731674194336 6.917070388793945 C -10.08841609954834 7.238994598388672 -10.08841609954834 7.760971069335938 -9.734769821166992 8.082929611206055 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<div id="Top">
		<div id="Header">
			<div id="Background_Shaodw">
				<svg class="Background_Header">
					<rect id="Background_Header" rx="0" ry="0" x="0" y="0" width="1440" height="100">
					</rect>
				</svg>
			</div>
			<img id="Search" src="public/img/Search.png" srcset="public/img/Search.png 1x, public/img/Search@2x.png 2x">
				
			<img onclick="application.goToTargetView(event)" id="Component_1__1" src="public/img/Component_1__1.png" srcset="public/img/Component_1__1.png 1x, public/img/Component_1__1@2x.png 2x">
				
			<div id="Component_68__1" class="Component_68___1">
				<div id="Home_Movies_Series_R">
					<span>Home</span>
				</div>
				<div id="Home_Movies_Series_R_cd">
					<span></span><span style="color:rgba(255,255,255,1);">Movies</span>
				</div>
				<div onclick="application.goToTargetView(event)" id="Home_Movies_Series_R_ce">
					<span></span><span style="color:rgba(255,255,255,0.345);">Series</span>
				</div>
				<div onclick="application.goToTargetView(event)" id="Home_Movies_Series_R_cf">
					<span></span><span style="color:rgba(255,255,255,0.345);">Recently added</span>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>