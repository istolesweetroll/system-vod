<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Play movie screen</title>
<style id="applicationStylesheet" type="text/css">

	:root {
		--web-view-ids: Play_movie_screen;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Play_movie_screen {
		position: absolute;
		width: 1440px;
		height: 780px;
		overflow: hidden;
		--web-view-name: Play movie screen;
		--web-view-id: Play_movie_screen;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
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
	#Background_Shaodw_ {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Header_ba {
		fill: rgba(49,28,105,1);
	}
	.Background_Header_ba {
		filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.549));
		position: absolute;
		overflow: visible;
		width: 1488px;
		height: 148px;
		left: 0px;
		top: 0px;
	}
	#Search_bb {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Search_bb {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Component_1__14 {
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
	#Background_Search_Shadow_ {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_ {
		fill: rgba(41,42,44,1);
		stroke: rgba(156,185,157,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_ {
		overflow: visible;
		position: absolute;
		width: 50px;
		height: 50px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_material-account-circle {
		fill: rgba(255,255,255,1);
	}
	.Icon_material-account-circle {
		overflow: visible;
		position: absolute;
		width: 30px;
		height: 30px;
		left: 7px;
		top: 7px;
		transform: matrix(1,0,0,1,0,0);
	}

	#Rectangle_2 {
		fill: rgba(255,255,255,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_2 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 10px;
		left: 1272px;
		top: 712px;
	}
	#Path_17 {
		fill:transparent;
		background-color: rgba(45,26,95,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;;
		shape-rendering: auto;
	}
	.Path_17 {
		overflow: visible;
		position: absolute;
		width: 1440px;
		height: 780px;
		left: -30px;
		top: 100px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Header_ {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Shaodw_ {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Header_ba {
		fill: rgba(49,28,105,1);
	}
	.Background_Header_ba {
		filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.549));
		position: absolute;
		overflow: visible;
		width: 1488px;
		height: 148px;
		left: 0px;
		top: 0px;
	}
	#Search_bb {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Component_1__17 {
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
	#Component_68__22 {
		position: absolute;
		width: 486px;
		height: 26px;
		left: 477px;
		top: 38px;
		overflow: visible;
	}
	#Home_Movies_Series_R_be {
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
	#Home_Movies_Series_R_bf {
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
	#Home_Movies_Series_R_bg {
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
		color: rgba(116,102,154,1);
	}
	#Home_Movies_Series_R_bh {
		left: 224px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 61px;
		white-space: nowrap;
		text-align: center;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(121,108,158,1);
	}
	#Home_Movies_Series_R_bi {
		left: 109px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: ;
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
<div id="Play_movie_screen">
	<div id="Top">
		<div id="Header">
		<div id="Background_Shaodw_">
			<svg class="Background_Header_ba">
				<rect id="Background_Header_ba" rx="0" ry="0" x="0" y="0" width="1440" height="100">
				</rect>
			</svg>
		</div>
		<img id="Search_bb" src="public/img/Search_bb.png" srcset="public/img/Search_bb.png 1x, public/img/Search_bb@2x.png 2x">

		<img id="Search_bb" src="public/img/Search_bb.png" srcset="public/img/Search_bb.png 1x, public/img/Search_bb@2x.png 2x">

			<div onclick="application.goToTargetView(event)" id="Component_1__14" class="Component_1___14">
				<div id="Background_Search_Shadow_">
					<svg class="Background_Search_" viewBox="0 0 44 44">
						<path id="Background_Search_" d="M 6 0 L 38 0 C 41.3137092590332 0 44 2.686291217803955 44 6 L 44 38 C 44 41.3137092590332 41.3137092590332 44 38 44 L 6 44 C 2.686291217803955 44 0 41.3137092590332 0 38 L 0 6 C 0 2.686291217803955 2.686291217803955 0 6 0 Z">
						</path>
					</svg>
				</div>

				<svg class="Icon_material-account-circle" viewBox="3 3 30 30">
					<path id="Icon_material-account-circle" d="M 18 3 C 9.720000267028809 3 3 9.720000267028809 3 18 C 3 26.27999877929688 9.719999313354492 33 18 33 C 26.28000068664551 33 33 26.28000068664551 33 18 C 33 9.719999313354492 26.28000068664551 3 18 3 Z M 18 7.5 C 20.48999977111816 7.5 22.5 9.510000228881836 22.5 12 C 22.5 14.48999977111816 20.48999977111816 16.5 18 16.5 C 15.51000022888184 16.5 13.5 14.48999977111816 13.5 12 C 13.5 9.510000228881836 15.51000022888184 7.5 18 7.5 Z M 18 28.79999923706055 C 14.25 28.79999923706055 10.93499946594238 26.8799991607666 9 23.96999931335449 C 9.045000076293945 20.98499870300293 15 19.34999847412109 18 19.34999847412109 C 20.98500061035156 19.34999847412109 26.95499992370605 20.98499870300293 27 23.96999740600586 C 25.06500053405762 26.87999725341797 21.75 28.79999732971191 18 28.79999732971191 Z">
					</path>
				</svg>
			</div>

		</div>
	</div>
	<svg class="Rectangle_2">
		<rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1" height="10">
		</rect>
	</svg>

	<svg class="Path_17" viewBox="0 0 1440 780">
		<path id="Path_17" d="M 0 0 L 1440 0 L 1440 780 L 0 780 L 0 0 Z">
		</path>
	</svg>

	<video width="1440" height="780" controls>
                   <?php
        $MovieRepository = new MovieRepository();
        $fileLink= $MovieRepository ->getFileLink($_GET["n"]);
        echo '<source src="'.$fileLink.'" type="video/mp4">';
        ?>
          </video>
	<div id="Header_">
		<div id="Background_Shaodw_">
			<svg class="Background_Header_ba">
				<rect id="Background_Header_ba" rx="0" ry="0" x="0" y="0" width="1440" height="100">
				</rect>
			</svg>
		</div>
		<img id="Search_bb" src="public/img/Search_bb.png" srcset="public/img/Search_bb.png 1x, public/img/Search_bb@2x.png 2x">

		<img  id="Component_1__17" src="public/img/Component_1__17.png" srcset="public/img/Component_1__17.png 1x, public/img/Component_1__17@2x.png 2x">

		<div id="Component_68__22" class="Component_68___22">
			<div id="Home_Movies_Series_R_be">
                <A class=wsnextlink1 href="movies" style="color:rgba(255,255,255,0.345)">Home </A>
			</div>
			<div id="Home_Movies_Series_R_bf">
				<span></span><span style="color:rgba(255,255,255,0.345);">Series</span>
			</div>
			<div  id="Home_Movies_Series_R_bg">
                <A class=wsnextlink1 href="recentlyadded" style="color:rgba(255,255,255,0.345)"> Recently added </A>

            </div>
			<div id="Home_Movies_Series_R_bh">
                <A class=wsnextlink1 href="series" style="color:rgba(255,255,255,0.345)"> Series </A>
			</div>
			<div id="Home_Movies_Series_R_bi">
                <A class=wsnextlink1 href="movies" style="color:rgba(255,255,255,0.345)"> Movies </A>
			</div>

		</div>
	</div>
</div>
</body>
</html>