<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movies screen</title>
<style id="applicationStylesheet" type="text/css">

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
		top: -150px;
		overflow: visible;
	}

	#Movie_1 {
		filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
		position: absolute;
		width: 307.5px;
		height:313px;
		left: 0px;
		top: -150px;
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
        top: -150px;
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
        top: -150px;
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
        top: 200px;
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
        top: 200px;
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
        top: 200px;
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
        top: 200px;
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
        top: 550px;
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
        top: 550px;
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
        top: 550px;
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
        top: 550px;
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

	#Icon_ {
		position: absolute;
		width: 16px;
		height: 16px;
		left: 14px;
		top: 14px;
		overflow: visible;
	}

	#Option_1 {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1182px;
		top: 0px;
		overflow: visible;
	}

	#Icon_ba {
		position: absolute;
		width: 16px;
		height: 16px;
		left: 14px;
		top: 14px;
		overflow: visible;
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
    #Admin{
        left: 550px;
        top: 5px;
        position: absolute;
        overflow: visible;
        width: 200px;
        white-space: nowrap;

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

			<div id="Component_18__1" class="Component_18___1">
				<div id="Movies">

                    <?php
                    $MovieRepository = new MovieRepository();
                    $n= $MovieRepository ->getMaxMovieIndex();

                    foreach (range(min(12,$n), 1) as $number) {
                        $CL = $MovieRepository->getCoverLinkMovie($number);
                        echo '<a href="playmovie?n=' .$number. '"><img id="Movie_'.$number.'" src=' . $CL . ' "/></a>';

                    }

                    ?>

                </div>
			</div>
		</div>
		<div id="Filters">
			<div id="Option_2">

				<div id="Icon_">


				</div>
			</div>
			<div id="Option_1">

				<div id="Icon_ba">
							</div>
			</div>
			<div id="Genres" class="Genres">

				<div id="Icon_bh">

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
					<img id="Background_Movie_Center" src="https://i.ytimg.com/vi/z89hMn7u12Y/maxresdefault.jpg">

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
						</div>
						<div id="Avengers__Endgame">

						</div>
					</div>
				</div>
				<div id="Movie_Right">
					<svg class="Background_Movie_Righ">
						<rect id="Background_Movie_Righ" rx="8" ry="8" x="0" y="0" width="1000" height="385">
						</rect>
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
            <a href="search"><img id="Search" src="public/img/Search.png" srcset="public/img/Search.png 1x, public/img/Search@2x.png 2x"> </a>

            <a href="login1"><img id="Component_1__1" src="public/img/Component_1__1.png" srcset="public/img/Component_1__1.png 1x, public/img/Component_1__1@2x.png 2x"/></a>;

			<div id="Component_68__1" class="Component_68___1">
				<div id="Home_Movies_Series_R">
                    <A class=wsnextlink1 href="movies" style="color:rgba(255,255,255,0.345)">Home </A>

                </div>
				<div id="Home_Movies_Series_R_cd">
                    <A class=wsnextlink1 href="movies" style="color:white"> Movies </A>
				</div>
				<div id="Home_Movies_Series_R_ce">
					<span></span>
                    <A class=wsnextlink1 href="series" style="color:rgba(255,255,255,0.345)"> Series </A>

                </div>
				<div id="Home_Movies_Series_R_cf">
                <P>
                 <A class=wsnextlink1 href="recentlyadded" style="color:rgba(255,255,255,0.345)"> Recently added </A>
                </P>

                </div>
                <div id="Admin">
                    <?php
                    if($_COOKIE["isAdmin"] == 1) {
                        echo '<A class=wsnextlink1 href="admin" style="color:rgba(255,255,255,0.345)"> + </A>';
                    }
                    ?>


                </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>