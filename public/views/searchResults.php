<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

	:root {
		--web-view-ids: addmovie;
	}
	input {
    background-color:	rgba(49,28,105,1);
	color: white;

}

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
        #Movie_2 {
            filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
            position: absolute;
            width: 307.5px;
            height: 313px;
            left: 77px;
            top: 150px;
            overflow: visible;
        }

        #Movie_1 {
            filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.098));
            position: absolute;
            width: 307.5px;
            height:313px;
            left: -250px;
            top: 150px;
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
            left: -250px;
            top: 300px;
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
            left: -250px;
            top: 300px;
            overflow: visible;
            --web-animation: fadein 0.3s ease-out;
            --web-action-type: page;
            --web-action-target: playmovie;
            cursor: pointer;
        }

	#Component_31__1 {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_e {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_e {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_fb {
		position: absolute;
		width: 131px;
		height: 18px;
		left: 12px;
		top: 13px;
		overflow: visible;
	}
	#See_all_fd {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 132px;
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
        button{
            left: 0px;
            top: 4px;
            position: absolute;
            overflow: visible;
            width: 100px;
            white-space: nowrap;
            text-align: center;
            font-family: Fira Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 21px;

        }
	#See_all_fd {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 132px;
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
	#Background_Search_Shadow_fa {
		position: absolute;
		width: 250px;
		height: 66px;
		left: 300px;
		top: 670px;
		overflow: visible;
	}
	#Background_Search_fa {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_fa {
		position: absolute;
		overflow: visible;
		width: 256px;
		height: 72px;
		left: 0px;
		top: 0px;
	}
	#See_all_fe {
		position: absolute;
		width: 90px;
		height: 36px;
		left: 80px;
		top: 15px;
		overflow: visible;
	}
	#See_all_ff {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 91px;
		white-space: nowrap;
		text-align: right;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 30px;
		color: rgba(255,255,255,1);
		text-transform: uppercase;
	}
	#w7tyrm8khve61_fc {
		position: absolute;
		width: 552px;
		height: 719px;
		left: 860px;
		top: 129px;
		overflow: visible;
	}
	#Rectangle_2_fd {
		fill: rgba(255,255,255,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_2_fd {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 10px;
		left: 1272px;
		top: 712px;
	}
	#See_all_fg {
		position: absolute;
		width: 145px;
		height: 42px;
		left: 14px;
		top: 794px;
		overflow: visible;
	}
	#See_all_fh {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 146px;
		white-space: nowrap;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: signup;
		cursor: pointer;
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
	#See_all_fi {
		left: 0px;
		top: 24px;
		position: absolute;
		overflow: visible;
		width: 140px;
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
	.mediaViewInfo {
		--web-view-name: Sign up screen;
		--web-view-id: Sign_up_screen;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Sign_up_screen;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Sign_up_screen {
		position: absolute;
		width: 1440px;
		height: 880px;
		background-color: rgba(148,183,156,1);
		overflow: hidden;
		--web-view-name: Sign up screen;
		--web-view-id: Sign_up_screen;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}

	#Background_ci {
		fill: rgba(156,185,157,1);
	}
	.Background_ci {
		position: absolute;
		overflow: visible;
		width: 1440px;
		height: 880px;
		left: 0px;
		top: 0px;
	}
	#Top_cj {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Header_ck {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Shaodw_cl {
		position: absolute;
		width: 1440px;
		height: 100px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Header_cm {
		fill: rgba(49,28,105,1);
	}
	.Background_Header_cm {
		filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.549));
		position: absolute;
		overflow: visible;
		width: 1488px;
		height: 148px;
		left: 0px;
		top: 0px;
	}
	#Search_cs {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Background_Search_Shadow_ct {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search {
		fill: rgba(41,42,44,1);
	}
	.Background_Search {
		position: absolute;
		overflow: visible;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
	}
	#Icon_Search_cv {
		position: absolute;
		width: 18px;
		height: 18px;
		left: 13px;
		top: 13px;
		overflow: visible;
	}
	#Shape_cw {
		fill: rgba(255,255,255,1);
	}
	.Shape_cw {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Search_cs {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Background_Search_Shadow_ct {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_cu {
		fill: rgba(41,42,44,1);
		stroke: rgba(156,185,157,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_cu {
		position: absolute;
		overflow: visible;
		width: 50px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#Icon_Search_cv {
		position: absolute;
		width: 18px;
		height: 18px;
		left: 13px;
		top: 13px;
		overflow: visible;
	}
	#Shape_cw {
		fill: rgba(255,255,255,1);
	}
	.Shape_cw {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Component_1__2 {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1372px;
		top: 28px;
		overflow: visible;
	}
	#Background_Search_Shadow_cy {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_cz {
		fill: rgba(41,42,44,1);
		stroke: rgba(156,185,157,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_cz {
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
	#Component_68__8 {
		position: absolute;
		width: 486px;
		height: 26px;
		left: 477px;
		top: 38px;
		overflow: visible;
	}
	#Home_Movies_Series_R_c {
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
	#Home_Movies_Series_R_da {
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
	#Home_Movies_Series_R_db {
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
	#Home_Movies_Series_R_dc {
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
	#Text_c {
		position: absolute;
		width: 300px;
		height: 405px;
		left: 24px;
		top: 231px;
		overflow: visible;
	}
	#Avengers__Endgame_dd {
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
	#Avengers__Endgame_da {
		left: 0px;
		top: 117px;
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
	#Avengers__Endgame_db {
		left: 0px;
		top: 234px;
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
	#Avengers__Endgame_dc {
		left: 0px;
		top: 320px;
		position: absolute;
		overflow: visible;
		width: 168px;
		height: 85px;
		text-align: left;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 30px;
		color: rgba(255,255,255,1);
	}
	#Avengers__Endgame_dd {
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
	#Component_2__1 {
		position: absolute;
		width: 546px;
		height: 505px;
		left: 199px;
		top: 231px;
		overflow: visible;
	}
	#Background_Search_Shadow_dd {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_de {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_de {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_df {
		position: absolute;
		width: 529px;
		height: 39px;
		left: 5px;
		top: 4px;
		overflow: visible;
	}
	#Scroll_Group_9 {
		mix-blend-mode: normal;
		position: absolute;
		width: 529px;
		height: 39px;
		left: 0px;
		top: 0px;
		overflow: hidden;
	}
	#See_all_dh {
		left: 7px;
		top: 9px;
		position: absolute;
		overflow: visible;
		width: 131px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1.5px;
		text-align: left;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
		text-transform: uppercase;
	}
	#Background_Search_Shadow_di {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 116px;
		overflow: visible;
	}
	#Background_Search_dj {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_dj {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_dk {
		position: absolute;
		width: 96px;
		height: 18px;
		left: 12px;
		top: 13px;
		overflow: visible;
	}
	#See_all_dl {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 97px;
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
	#Background_Search_Shadow_dm {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 233px;
		overflow: visible;
	}
	#Background_Search_dn {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_dn {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_do {
		position: absolute;
		width: 131px;
		height: 18px;
		left: 12px;
		top: 13px;
		overflow: visible;
	}
	#See_all_dq {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 132px;
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
	#See_all_dq {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 132px;
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
	#Background_Search_Shadow_dr {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 349px;
		overflow: visible;
	}
	#Background_Search_ds {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_ds {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_dt {
		position: absolute;
		width: 131px;
		height: 18px;
		left: 12px;
		top: 13px;
		overflow: visible;
	}
	#See_all_du {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 132px;
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
	#Background_Search_Shadow_dv {
		position: absolute;
		width: 250px;
		height: 66px;
		left: 101px;
		top: 439px;
		overflow: visible;
	}
	#Background_Search_dw {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_dw {
		position: absolute;
		overflow: visible;
		width: 256px;
		height: 72px;
		left: 0px;
		top: 0px;
	}
	#See_all_dx {
		position: absolute;
		width: 110px;
		height: 36px;
		left: 70px;
		top: 15px;
		overflow: visible;
	}
	#See_all_dy {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 111px;
		white-space: nowrap;
		text-align: right;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 30px;
		color: rgba(255,255,255,1);
		text-transform: uppercase;
	}
	#w7tyrm8khve61 {
		position: absolute;
		width: 552px;
		height: 719px;
		left: 860px;
		top: 129px;
		overflow: visible;
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
	#See_all_d {
		position: absolute;
		width: 167px;
		height: 50px;
		left: 14px;
		top: 786px;
		overflow: visible;
	}
	#See_all_ea {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 168px;
		white-space: nowrap;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: login;
		cursor: pointer;
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
	#See_all_eb {
		left: 0px;
		top: 32px;
		position: absolute;
		overflow: visible;
		width: 140px;
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

	.mediaViewInfo {
		--web-view-name: Add movie screen;
		--web-view-id: Add_movie_screen;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Add_movie_screen;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Add_movie_screen {
		position: absolute;
		width: 1440px;
		height: 880px;
		background-color: rgba(148,183,156,1);
		overflow: hidden;
		--web-view-name: Add movie screen;
		--web-view-id: Add_movie_screen;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
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
	#Search_x {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Background_Search_Shadow_y {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search {
		fill: rgba(41,42,44,1);
	}
	.Background_Search {
		position: absolute;
		overflow: visible;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
	}
	#Icon_Search_ {
		position: absolute;
		width: 18px;
		height: 18px;
		left: 13px;
		top: 13px;
		overflow: visible;
	}
	#Shape_ {
		fill: rgba(255,255,255,1);
	}
	.Shape_ {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Search_x {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 1321px;
		top: 28px;
		overflow: visible;
	}
	#Background_Search_Shadow_y {
		position: absolute;
		width: 44px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_z {
		fill: rgba(41,42,44,1);
		stroke: rgba(156,185,157,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_z {
		position: absolute;
		overflow: visible;
		width: 50px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#Icon_Search_ {
		position: absolute;
		width: 18px;
		height: 18px;
		left: 13px;
		top: 13px;
		overflow: visible;
	}
	#Shape_ {
		fill: rgba(255,255,255,1);
	}
	.Shape_ {
		filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.204));
		overflow: visible;
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Component_1__18 {
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
	#Component_68__23 {
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
	#Home_Movies_Series_R_ {
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
	#Home_Movies_Series_R_ba {
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
	#Home_Movies_Series_R_bb {
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
	#Text {
		position: absolute;
		width: 300px;
		height: 142px;
		left: 7px;
		top: 143px;
		overflow: visible;
	}
	#Avengers__Endgame {
		left: 0px;
		top: 99px;
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
	#Avengers__Endgame_bd {
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
	#Component_32__2 {
		position: absolute;
		width: 546px;
		height: 144px;
		left: 265px;
		top: 144px;
		overflow: visible;
	}
	#Background_Search_Shadow_bf {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_bg {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_bg {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all {
		position: absolute;
		width: 83px;
		height: 18px;
		left: 11px;
		top: 13px;
		overflow: visible;
	}
	#See_all_bi {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 84px;
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
	#Background_Search_Shadow_bj {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 100px;
		overflow: visible;
	}
	#Component_31__1 {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_bl {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_bl {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_bm {
		position: absolute;
		width: 136px;
		height: 18px;
		left: 8px;
		top: 14px;
		overflow: visible;
	}
	#See_all_bn {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 137px;
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
	#Background_Search_Shadow_bo {
		position: absolute;
		width: 250px;
		height: 66px;
		left: 300px;
		top: 670px;
		overflow: visible;
	}
	#Background_Search_bp {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_bp {
		position: absolute;
		overflow: visible;
		width: 256px;
		height: 72px;
		left: 90px;
		top: -460px;
	}
	#See_all_bq {
		position: absolute;
		width: 90px;
		height: 36px;
		left: 80px;
		top: 15px;
		overflow: visible;
	}
	#See_all_br {
		left: 90px;
		top: -460px;
		position: absolute;
		overflow: visible;
		width: 91px;
		white-space: nowrap;
		text-align: right;
		font-family: Fira Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 30px;
		color: rgba(255,255,255,1);
		text-transform: uppercase;
	}
	#w7tyrm8khve61 {
		position: absolute;
		width: 552px;
		height: 719px;
		left: 860px;
		top: 129px;
		overflow: visible;
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
	#See_all_bu {
		position: absolute;
		width: 145px;
		height: 42px;
		left: 14px;
		top: 794px;
		overflow: visible;
	}
	#See_all_bv {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 146px;
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
	#See_all_bw {
		left: 0px;
		top: 24px;
		position: absolute;
		overflow: visible;
		width: 140px;
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
	#Text_bx {
		position: absolute;
		width: 300px;
		height: 141px;
		left: 7px;
		top: 328px;
		overflow: visible;
	}
	#Avengers__Endgame_by {
		left: 0px;
		top: 98px;
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
	#Avengers__Endgame_bz {
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
	#Component_32__4 {
		position: absolute;
		width: 546px;
		height: 144px;
		left: 265px;
		top: 328px;
		overflow: visible;
	}
	#Background_Search_Shadow_b {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_b {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_b {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_b {
		position: absolute;
		width: 131px;
		height: 18px;
		left: 11px;
		top: 13px;
		overflow: visible;
	}
	#See_all_ca {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 132px;
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
	#Background_Search_Shadow_ca {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 100px;
		overflow: visible;
	}
	#Component_31__1_b {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_ca {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_ca {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_cb {
		position: absolute;
		width: 157px;
		height: 18px;
		left: 12px;
		top: 12px;
		overflow: visible;
	}
	#See_all_cc {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 158px;
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
	#Text_ca {
		position: absolute;
		width: 300px;
		height: 142px;
		left: 10px;
		top: 512px;
		overflow: visible;
	}
	#Avengers__Endgame_cb {
		left: 0px;
		top: 99px;
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
	#Avengers__Endgame_cc {
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
	#Component_32__5 {
		position: absolute;
		width: 546px;
		height: 144px;
		left: 258px;
		top: 512px;
		overflow: visible;
	}
	#Background_Search_Shadow_ce {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_cf {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_cf {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_cg {
		position: absolute;
		width: 116px;
		height: 18px;
		left: 26px;
		top: 13px;
		overflow: visible;
	}
	#See_all_ch {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 117px;
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
	#Background_Search_Shadow_ci {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 100px;
		overflow: visible;
	}
	#Component_31__1_cj {
		position: absolute;
		width: 546px;
		height: 44px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Background_Search_ck {
		fill: rgba(49,28,105,1);
		stroke: rgba(255,255,255,1);
		stroke-width: 6px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Background_Search_ck {
		position: absolute;
		overflow: visible;
		width: 552px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#See_all_cl {
		position: absolute;
		width: 81px;
		height: 18px;
		left: 25px;
		top: 13px;
		overflow: visible;
	}
	#See_all_cm {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 82px;
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
</style>
<title>Search screen</title>

</head>
<body>
<div id="Add_movie_screen">
	<svg class="Background">
		<rect id="Background" rx="0" ry="0" x="0" y="0" width="1440" height="880">
		</rect>
	</svg>
	<div id="Top">
		<div id="Header">
			<div id="Background_Shaodw">
				<svg class="Background_Header">
					<rect id="Background_Header" rx="0" ry="0" x="0" y="0" width="1440" height="100">
					</rect>
				</svg>
			</div>



						</div>
			<div id="Component_68__23" class="Component_68___23">
				<div id="Home_Movies_Series_R">
                    <A class=wsnextlink1 href="movies" style="color:rgba(255,255,255,0.345)"> Home </A>
				</div>
				<div  id="Home_Movies_Series_R_">
					<A class=wsnextlink1 href="series" style="color:rgba(255,255,255,0.345)"> Series </A>
				</div>
				<div onclick="application.goToTargetView(event)" id="Home_Movies_Series_R_ba">
                    <A class=wsnextlink1 href="recentlyadded" style="color:rgba(255,255,255,0.345)"> Recently added </A>
				</div>
				<div id="Home_Movies_Series_R_bb">
                    <A class=wsnextlink1 href="movies" style="color:rgba(255,255,255,0.345)"> Movies </A>
				</div>
			</div>
		</div>
	</div>
	<div id="Text">

		<div id="Avengers__Endgame_bd">
			<span>SEARCH BY TITLE:</span>

		</div>


	</div>
	<div id="Component_32__2" class="Component_32___2">
		<div id="Background_Search_Shadow_bf">
			<svg class="Background_Search_bg">
				<rect id="Background_Search_bg" rx="6" ry="6" x="0" y="0" width="546" height="44">
				</rect>
			</svg>

			<div id="See_all">
                <form action = 'searchResults'>
				<div id="See_all_bi">
					<input name="title" type="text" placeholder="enter title">

				</div>
			</div>

		</div>
        <div id="Movies">

            <?php
            $MovieRepository = new MovieRepository();
            $m = $MovieRepository->searchMovies($_GET["title"]);
            $m_length = count($m);
            $s = $MovieRepository->searchSeries($_GET["title"]);
            $s_length = count($s);

            $counter = 0;
            if(array_values($m)[0] != "NO RESULTS FOUND"){
            if ($m_length == 1) {
                $CL = $MovieRepository->getCoverLinkMovie(array_values($m)[0]);
                echo '<a href="playmovie?n=' . array_values($m)[0] . '"><img id="Movie_1" src=' . $CL . ' "/></a>';
           $counter = 1;
            }
            if ($m_length >= 2) {
                $CL = $MovieRepository->getCoverLinkMovie(array_values($m)[1]);
                echo '<a href="playmovie?n=' . array_values($m)[1] . '"&><img id="Movie_2" src=' . $CL . ' "/></a>';
            $counter = 2;
            }
            if ($m_length >= 3) {
                $CL = $MovieRepository->getCoverLinkMovie(array_values($m)[2]);
                echo '<a href="playmovie?n=' . array_values($m)[2] . '"><img id="Movie_3" src=' . $CL . ' "/></a>';
           $counter = 3;
            }
            if ($m_length >= 4) {
                $CL = $MovieRepository->getCoverLinkMovie(array_values($m)[3]);
                echo '<a href="playmovie?n=' . array_values($m)[3] . '"><img id="Movie_4" src=' . $CL . ' "/></a>';;
           $counter = 4;
            }}
            if(array_values($s)[0] != "NO RESULTS FOUND"){
            if ($s_length == 1 && $counter <= 4) {
                $counter ++;
                $CL = $MovieRepository->getCoverLinkSeries(array_values($s)[0]);
                echo '<a href="playmovie?n=' . array_values($m)[0] . '"><img id="Movie_'.$counter.'" src=' . $CL . ' "/></a>';

            }
            if ($s_length >= 2 && $counter <= 4)  {
                $counter ++;
                $CL = $MovieRepository->getCoverLinkSeries(array_values($s)[1]);
                echo '<a href="playmovie?n=' . array_values($m)[1] . '"&><img id="Movie_'.$counter.'" src=' . $CL . ' "/></a>';

            }
            if ($s_length >= 3 && $counter <= 4) {
                $counter ++;
                $CL = $MovieRepository->getCoverLinkSeries(array_values($s)[2]);
                echo '<a href="playmovie?n=' . array_values($m)[2] . '"><img id="Movie_'.$counter.'" src=' . $CL . ' "/></a>';

            }
            if ($s_length >= 4 && $counter <= 4) {
                $counter ++;
                $CL = $MovieRepository->getCoverLinkSeries(array_values($s)[3]);
                echo '<a href="playmovie?n=' . array_values($m)[3] . '"><img id="Movie_'.$counter.'" src=' . $CL . ' "/></a>';;

            }}

            ?>

        </div>
		<div id="Background_Search_Shadow_bj">
			<div id="Component_31__1" class="Component_31___1">

				<div id="See_all_bm">
					<div id="See_all_bn">
						</div>
				</div>
			</div>
		</div>
	</div>

	<div id="Background_Search_Shadow_bo" class="Background_Search_Shadow">
		<svg class="Background_Search_bp">
			<rect id="Background_Search_bp" rx="33" ry="33" x="0" y="0" width="250" height="66">
			</rect>

		</svg>

		<div id="See_all_bq">
			<div id="See_all_br">


                <?php

                echo '<a href="searchResults?title='.$_POST['title'].'"><button>SEARCH</button>';
                ?>
			</div>
		</div>
	</div>

	<img id="w7tyrm8khve61" src="https://oralroberts.com/wp-content/uploads/2018/07/ad-placeholder.jpg">


                </form>
                    <div id="See_all_cm">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>