<?php 

include  "db/db.php";

 ?>

<!doctype html>
<html lang="ko">
<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
	<meta name="description" content="HYBRID WALLET" />
	<title>LVT</title>

	<link rel="shortcut icon" href=" img/favi.png" type="image/x-icon">
	<link rel="icon" href=" img/favi.png" type="image/x-icon">

	<!-- WEB FONTS -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">

	<!-- CORE CSS -->
	<link href=" bootset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 

	<!-- THEME CSS -->
	<!-- <link href=" bootset/css/essentials.css" rel="stylesheet" type="text/css" media="all" /> -->

	<!-- THEME CSS -->
	<link href="css/common_org.css" rel="stylesheet" type="text/css" media="all" />
	<link href=" css/udasset.css?v=6" rel="stylesheet" type="text/css" media="all" />
	<link href=" css/font.css" rel="stylesheet" type="text/css" media="all" />
	<link href=" css/office_contents.css" rel="stylesheet" type="text/css" media="all" />
	<link href=" css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="all" />
	<link href=" css/slide.css" rel="stylesheet" type="text/css" media="all" >
	<link href=" css/style.css" rel="stylesheet" type="text/css" media="all" >
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all"/> 

	<script type="text/javascript">var plugin_path = ' bootset/plugins/';</script>

	<script type="text/javascript" src="../js/jquery.min.js"></script> 
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
	<script type="text/javascript" src=" bootset/js/app.js"></script> 
	<script type="text/javascript" src="../js/common.js?v=20200217"></script>
	<script type="text/javascript" src="../js/smartpaginator.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>

	<script type="text/javascript" src="../js/jQuery.dPassword.js?n=2"></script>



	
	<script type="text/javascript" src="../js/jquery.carousel_notice.js"></script>
	<script type="text/javascript">

		var gNation = 'KR';
		var gD_No   =  '<?php echo $m_no; ?>';
		var gDrp_point = 100;
		var gSv_point  = 200;
		var gStatus	   = "0";
		var gCate_cd   = "01";
		
	
	
		


		$(document).ready(function() {

			//쿠폰분할체크
			/*
			var param = "nation="+ gNation +"&gubun=COUPON_QTY";
			fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){
				gStatus = data.datalist[0].coupon_status;
				if (gStatus == "1") {
					location.href = "/coupon_share.php";
					return false;
				}
			}});
			*/

			if ( gNation == 'US') {

				gCate_cd = "04";

				$("#mainTot_txt").html("Withdrawal Wallet");
				$("#mainTot_txt2").html("Insurance Wallet");
				$("#mainTot_txt3").html("Insurance in progress");

				$("#right_txt01").html("MY TOTAL ASSET");
				$("#prog").html("Progress");
				$("#goal").html("Goal");

				$("#Lteam").html("Left Team");
				$("#score1_1").html("Total Accumulation");
				$("#score1_2").html("Remaining Performance");
				$("#score1_3").html("Today's Performance");
				

				$("#Rteam").html("Right Team");
				$("#score2_1").html("Total Accumulation");
				$("#score2_2").html("Remaining Performance");
				$("#score2_3").html("Today's Performance");


				$("#myW").html("My Wallet");
				$("#my1").html("You can Manage");
				$("#my2").html("Withdrawal, Deposit");
				$("#btnGo1").html("go");

				$("#pur").html("Purchase");
				$("#pur1").html("Our Goal Is");
				$("#pur2").html("Continuous Of Success");
				$("#btnGo2").html("go");

				$("#signup").html("Sign Up");
				$("#sign1").html("Get Various");
				$("#sign2").html("Benefits");
				$("#btnGo3").html("go");
				
				$("#t_total_amount").html("총자산");

				$("#t_contact").html("거래 내역");
				$("#t_deposit").html("Deposit");
				$("#t_invite").html("Invite");
				$("#t_current").html("Current Price");
				$("#t_current_cover").html("Reserve for payment");
				$("#t_betting").html("Betting");
				$("#t_withdraw").html("Withdraw");
				$("#t_wallet").html("Wallet");
				$("#t_ntc").html("Notice");
				
			} else if (gNation == 'CN') {

				gCate_cd = "02";

				$("#mainTot_txt").html("总收益");
				$("#mainTot_txt2").html("已提现金额");
				$("#mainTot_txt3").html("提现可用金额");

				$("#right_txt01").html("我的总资产");
				$("#prog").html("进度");
				$("#goal").html("目标");

				$("#Lteam").html("左区");
				$("#score1_1").html("累计");
				$("#score1_2").html("剩余业绩");
				$("#score1_3").html("今日业绩");

				$("#Rteam").html("右区");
				$("#score2_1").html("累计");
				$("#score2_2").html("剩余业绩");
				$("#score2_3").html("今日业绩");


				$("#myW").html("钱包");
				$("#my1").html("You can Manage");
				$("#my2").html("Withdrawal, Deposit");
				$("#btnGo1").html("进入");

				$("#pur").html("合约");
				$("#pur1").html("Our Goal Is");
				$("#pur2").html("Continuous Of Success");
				$("#btnGo2").html("进入");

				$("#signup").html("成为会员");
				$("#sign1").html("Get Various");
				$("#sign2").html("Benefits");
				$("#btnGo3").html("进入");

				// TODO need to translate
				$("#t_total_amount").html("총자산");
				$("#t_contact").html("联系我们");
				$("#t_deposit").html("存款");
				$("#t_invite").html("邀请");
				$("#t_current").html("时价");
				$("#t_current_cover").html("預留付款");
				$("#t_betting").html("下注");
				$("#t_withdraw").html("退出");
				$("#t_wallet").html("钱包");
				$("#t_ntc").html("钱包");

			} else if (gNation == 'JP') {

				gCate_cd = "03";

				$("#mainTot_txt").html("量");
				$("#mainTot_txt2").html("総出金");
				$("#mainTot_txt3").html("出金可能");

				$("#right_txt01").html("私の総資産");
				$("#prog").html("進行状況");
				$("#goal").html("目標");

				$("#Lteam").html("左");
				$("#score1_1").html("総累積");
				$("#score1_2").html("残余実績");
				$("#score1_3").html("本日実績");

				$("#Rteam").html("右");
				$("#score2_1").html("総累積");
				$("#score2_2").html("残余実績");
				$("#score2_3").html("本日実績");


				$("#myW").html("My Wallet");
				$("#my1").html("You can Manage");
				$("#my2").html("Withdrawal, Deposit");
				$("#btnGo1").html("go");

				$("#pur").html("Purchase");
				$("#pur1").html("Our Goal Is");
				$("#pur2").html("Continuous Of Success");
				$("#btnGo2").html("go");

				$("#signup").html("Sign Up");
				$("#sign1").html("Get Various");
				$("#sign2").html("Benefits");
				$("#btnGo3").html("go");

				$("#t_deposit").html("保証金");
				$("#t_contact").html("お問い合わせ");
				$("#t_invite").html("誘う");
				$("#t_current").html("現在の相場");
				$("#t_current_cover").html("支払い準備金");
				$("#t_betting").html("賭け");
				$("#t_withdraw").html("脱落");
				$("#t_wallet").html("財布");
				$("#t_ntc").html("通知");

			} else if (gNation == 'KR')	{			
				gCate_cd = "01";

				$("#mainTot_txt").html("출고지갑");
				$("#mainTot_txt2").html("복구지갑");
				$("#mainTot_txt3").html("보험 진행중");

				$("#right_txt01").html("나의 총 자산");
				$("#prog").html("진행상황");
				$("#goal").html("목표");

				$("#Lteam").html("왼쪽");
				$("#score1_1").html("총 누적");
				$("#score1_2").html("잔여 실적");
				$("#score1_3").html("금일 실적");

				$("#Rteam").html("오른쪽");
				$("#score2_1").html("총 누적");
				$("#score2_2").html("잔여 실적");
				$("#score2_3").html("금일 실적");


				$("#myW").html("My Wallet");
				$("#my1").html("You can Manage");
				$("#my2").html("Withdrawal, Deposit");
				$("#btnGo1").html("go");

				$("#pur").html("Purchase");
				$("#pur1").html("Our Goal Is");
				$("#pur2").html("Continuous Of Success");
				$("#btnGo2").html("go");

				$("#signup").html("Sign Up");
				$("#sign1").html("Get Various");
				$("#sign2").html("Benefits");
				$("#btnGo3").html("go");

				$("#t_deposit").html("입금");
				$("#t_contact").html("거래 내역");
				$("#t_invite").html("초대하기");
				$("#t_betting").html("거래하기");
				$("#t_withdraw").html("출금");
				$("#t_wallet").html("지갑관리");
				$("#t_ntc").html("공지사항");


			} else if (gNation == 'VN') {

				gCate_cd = "05";

				$("#t_tot_wa").html("Toàn bộ RVN");
				$("#t_wait_wa").html("Rút tiền RVN");
				$("#t_withdrawable_wa").html("Rút tiền RVN");

				$("#t_meminfo").html("Hồ sơ");
				$("#t_memjoin").html("Đăng ký");				
				$("#t_order").html("RVN Khai thác mỏ");
				$("#t_search").html("Ví");
				$("#t_withdraw").html("RVN Rút tiền");
				$("#t_bonus").html("Tiền thưởng");
				$("#t_recomm").html("đề nghị biểu đồ");
				$("#t_sponsor").html("Biểu đồ tài trợ");
				$("#t_notice").html("Để ý");

			}




			// 
			var param = "gubun=COIN_INFO&param1="+ gD_No;
			fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){
				var result = data.datalist[0]
				if(result){
					$("#main_coin1").html(addComma(result.coin1))
					$("#main_coin2").html(addComma(result.coin2))
					$("#main_cover").html(addComma(result.cover))
					$("#main_cover2").html(addComma(result.cover2))
				}
				
			}});
			
//			function alarm(){
//			$("#alarm1").fadeOut();
//			$("#alarm1").fadeIn();
//			$("#alarm2").fadeOut();
//			$("#alarm2").fadeIn();
//			
//			setTimeout(alarm,1000);
//			}
//
//			alarm();

			

			//최근게시물
			
			var param = "gubun=NOTICE&param1=<?php echo $m_no; ?>";
			fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){

				//리스트 초기화
				initTableList(".notice");

				var list = data.datalist;

				var trHtml   = '';

				if (list.length > 0) {

					$.each(list, function(index, entry) {

						var row = list[index];

						trHtml += '<a href=" notice_list.php?key='+row.g_key+'">';
						trHtml += '<li class="date">'+ row.g_idate +'</li>';
						trHtml += '<li class="name">'+ row.g_title +'</li>';
						trHtml += '</a>';
					});
				}

				$(".notice").html(trHtml);

				/*$('.noticeCon').jCarousel({
				  type:'slidey-up',
				  carsize: {carwidth:auto,carheight:auto},
				});*/

			}});
			

			// 상세
			var param = "gubun=EFP_QTY&param1="+ gD_No;
			fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){
				if (gStatus == "2") {
					$("#disp_share_msg").css("display", "");

					$("#disp_tot_qty").html("0");
					$("#disp_qty").html("0");
					$("#disp_amt").html("0");
					$("#disp_amt1").html("0");
					$("#disp_amt2").html("0");
					$("#disp_amt3").html("0");
					$("#disp_amt4").html("0");
					$("#disp_amt5").html("0");
					$("#disp_amt6").html("0");

				} else {

					$("#disp_share_msg").css("display", "none");

					$("#disp_tot_qty").html(addComma(data.datalist[0].tot_qty));
					$("#disp_qty").html(addComma(data.datalist[0].save_qty));
					$("#disp_amt").html(data.datalist[0].ho_ga);
					$("#disp_amt1").html(data.datalist[0].ho_ga);
					$("#disp_amt2").html(data.datalist[0].ho_ga);
					$("#disp_amt3").html(data.datalist[0].ho_ga);
					$("#disp_amt4").html(data.datalist[0].ho_ga);
					$("#disp_amt5").html(data.datalist[0].ho_ga);
					$("#disp_amt6").html(data.datalist[0].ho_ga);
				}

				//리스트 초기화
				initTableList("#dfps_table2");
				trHtml2  = '<tr>';
				trHtml2 += '	<td align="center" colspan="3">준비중입니다.</td>';
				trHtml2 += '</tr>';

				$("#dfps_table2 > tbody").append(trHtml2);

				/*

				if (gStatus != "2") {

					var tbl2 = $("#dfps_table2 > tbody");

					var param = "gubun=1&param1=5&param2=0";
					fnGetDataList({async:true, url:" server/getOFP_Sell.php", data:param, callback:function(data){

						var list2 = data.resultset[0].datalist;
						var trHtml2   = '';

						if (list2.length > 0) {

							$.each(list2, function(index, entry) {

								var row = list2[index];

								trHtml2  = '<tr>';
								trHtml2 += '	<td align="center">'+ row.t_key +'</td>';
								trHtml2 += '	<td align="center">'+ addComma(row.t_qty) +'</td>';
								trHtml2 += '	<td align="center">'+ row.t_hoga +'</td>';
								trHtml2 += '</tr>';

								tbl2.append(trHtml2);
							});
						}

					}});
				}
				*/


				//리스트 초기화
				initTableList("#dfps_table3");

				if (gStatus != "2") {


					var tbl3 = $("#dfps_table3 > tbody");

					param = "gubun=2&param1=5&param2=0";
					fnGetDataList({async:true, url:" server/getOFP_Sell.php", data:param, callback:function(data){

						var list = data.resultset[0].datalist;
						var trHtml   = '';

						if (list.length > 0) {

							$.each(list, function(index, entry) {

								var row = list[index];

								trHtml  = '<tr>';
								trHtml += '	<td align="center">'+ row.t_hoga +'</td>';
								trHtml += '	<td align="center">'+ addComma(row.t_qty) +'</td>';
								trHtml += '</tr>';

								tbl3.append(trHtml);
							});
						}

					}});

				}


			}});

			// 상세정보 데이타
			fnGetDataList({async:true, url:" server/getDetail_Info.php", data:param, callback:function(data){
				var res = data.datalist[0]
				if(res){
					
					$("#level_date").html(res.level_date);
					$("#level_nm").html(res.level_nm);
					$("#level_bns").html(addComma(res.level_bns));
					$("#star_date").html(res.star_date);
					$("#star_nm").html(res.star_nm);
					$("#star_bns").html(addComma(res.star_bns));
					$("#share_date").html(res.share_date);
					$("#share_nm").html(res.share_nm);
					$("#share_bns").html(addComma(res.share_bns));
					$("#match_date").html(res.match_date);
					$("#match_nm").html(res.match_nm);
					$("#match_bns").html(addComma(res.match_bns));
					$("#found_date").html(res.found_date);
					$("#found_nm").html(res.found_nm);
					$("#found_bns").html(addComma(res.found_bns));
					$("#total_bns").html(addComma(res.total_bns));
					$("#game_money").html(addComma(res.game_money));
					$("#with_money").html(addComma(res.with_money));
					$("#deposit").html(addComma(res.deposit));
				}
			}});
			//eth = usd
//			var ethPriceUsd
//			fnGetDataList({async:false, url:" server/getEthRate.php", data:"", callback:function(data){
//				ethPriceUsd = data.data.items[0].priceUsd;
//				var myEth = $("#possible_txt").html();
//				$("#nowPrice_txt").html("(USD "+(Number(myEth)*ethPriceUsd)+" )");
//			}});

			//코인시세 API
//			var coinprice;
//			fnGetDataList({async:false, url:" server/getCurrentCoinPrice.php", data:"", callback:function(data){
//				coinprice = data.data.items[0].priceUsd;
//				
//				$("#coinPrice").html(coinprice.toFixed(2)+" USD (Coinmarket)");
//			}});
			
			
			var alarm1;
			var alarm2;
			//코인시세 DB
			function updateCoin(){
				clearInterval(alarm1);
				clearInterval(alarm2);
				var coinprice;
				var push_win;
				var push_cover;
				
				fnGetDataList({async:false, url:"server/getCommon_query.php", data:"gubun=BTCKRWPUSH&param1="+gD_No, callback:function(data){
					coinprice = data.datalist[0].price_usd;
					push_win = data.datalist[0].winchk;
					push_cover = data.datalist[0].losechk;

					$("#coinPrice").html((coinprice)+" KRW (Bithumb)");
					
					// if(push_win > 0 && push_cover > 0){
						
						// alarm1 = setInterval(function(){$("#alarm1").fadeTo(400,0.1);$("#alarm1").fadeTo(400,1);},800);
						// alarm2 = setInterval(function(){$("#alarm2").fadeTo(400,0.1);$("#alarm2").fadeTo(400,1);},800);

					// } else {
					
						// if (push_win > 0){
							// alarm1 = setInterval(function(){$("#alarm1").fadeTo(400,0.1);$("#alarm1").fadeTo(400,1);},800);
						// } else if(push_cover > 0){
							// alarm2 = setInterval(function(){$("#alarm2").fadeTo(400,0.1);$("#alarm2").fadeTo(400,1);},800);
						// }
					// } 
					
				

				}});
				setTimeout(updateCoin, 7000);
			}
			updateCoin();
			
			
			
			
			
			function chk_wl(){
				clearInterval(alarm1);
				clearInterval(alarm2);
				
				var push_win;
				var push_cover;
				
				fnGetDataList({async:false, url:"server/getCommon_query.php", data:"gubun=BTCKRWPUSH&param1="+gD_No, callback:function(data){
				
					push_win = data.datalist[0].winchk;
					push_cover = data.datalist[0].losechk;

				
					
					if(push_win > 0 && push_cover > 0){
						
						alarm1 = setInterval(function(){$("#alarm1").fadeTo(400,0.1);$("#alarm1").fadeTo(400,1);},800);
						alarm2 = setInterval(function(){$("#alarm2").fadeTo(400,0.1);$("#alarm2").fadeTo(400,1);},800);

					} else {
					
						if (push_win > 0){
							alarm1 = setInterval(function(){$("#alarm1").fadeTo(400,0.1);$("#alarm1").fadeTo(400,1);},800);
						} else if(push_cover > 0){
							alarm2 = setInterval(function(){$("#alarm2").fadeTo(400,0.1);$("#alarm2").fadeTo(400,1);},800);
						}
					} 
					
				

				}});
				setTimeout(chk_wl, 7000);
			}
			chk_wl();
			
			
		
			var totalcover;
			fnGetDataList({async:false, url:" server/getCommon_query.php", data:"gubun=BTCKRWMAIN", callback:function(data){
				totalcover = data.datalist[0].coveramt;
				
				$("#coverPrice").html(addComma(totalcover.toFixed(0))+" LVT");
			}});


			$("#in_click").bind("click",function(){
				var user_url = "http://udasset.hosuco.co.kr join.php?";
				user_url = user_url + "d_uid=" + "pja5868";
				user_url = user_url + "&nation=" + gNation;
				$("#invite").val(user_url);
			}).css("cursor","pointer");

			$("#btnCopy").bind("click",function(){
				var res_txt = "자랑하기를 클릭해주세요.";

				if(gNation == 'US') {
					res_txt = "Click to boast.";
				} else if (gNation == 'CN') {
					res_txt = "点击吹嘘。";       
				} else if (gNation == 'JP') {
					res_txt = "自慢するをクリックしてください。";
				} else if (gNation == 'VN') {
					res_txt = "Nhấn vào đây để tự hào.";
				}
				if($("#invite").val() ==""){
					//alert(res_txt);
					return;

				}
               $('#invite').select();
                document.execCommand('copy');
			});


			$("#btnCopy").bind("click",function(){
				var res_txt = "자랑하기를 클릭해주세요.";

				if(gNation == 'US') {
					res_txt = "Click to boast.";
				} else if (gNation == 'CN') {
					res_txt = "点击吹嘘。";
				} else if (gNation == 'JP') {
					res_txt = "自慢するをクリックしてください。";
				} else if (gNation == 'VN') {
					res_txt = "Nhấn vào đây để tự hào.";
				}
				if($("#invite").val() ==""){
					//alert(res_txt);
					return;

				}
               $('#invite').select();
                document.execCommand('copy');
			});

			var param = "gubun=SUMMARY&param1="+ gD_No;
			
			fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){
				var res = data.datalist[0]
				if(res){
					$("#order_cnt").html(addComma(res.sum_pv));
					$("#progress").html(addComma(res.sum_hap));

					$("#intSumPvA").html(addComma(res.tot_pva));
					$("#intRemainPvA").html(addComma(res.bal_pva))
					$("#intTodayPvA").html(addComma(res.tot_bva))

					$("#intSumPvB").html(addComma(res.tot_pvb));
					$("#intRemainPvB").html(addComma(res.bal_pvb))
					$("#intTodayPvB").html(addComma(res.tot_bvb))

					$("#count_left").html(addComma(res.cnt_a));
					$("#count_right").html(addComma(res.cnt_b));

					var sudangRate = res.sum_rate.toFixed(2);
					$("#sudang_rate").html(addComma(sudangRate));
					if(sudangRate < 10){
						$("#Grp_Rate").css("width", "9%")
					}
					else if (sudangRate > 300){
						$("#Grp_Rate").css("width", "300%")
					}
					else {
						$("#Grp_Rate").css("width", sudangRate/3 + "%")
					}

				}
				
			}})

		});

	function moveBetList(){
		location.href = " betting_history.php";
	}

	</script>
<!--
	<script type="text/javascript" src="../js/jquery.carousel_notice.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.notice').jCarousel({
			  type:'slidey-up',
			  carsize: {carwidth:400,carheight:22},
			});
		});
	</script>
-->

<script type="text/javascript" src="../js/modernizr.custom.86080.js"></script>
</head>

<body >
<div class="topWrap motion">
	<a href=" index.php"><p class="tLogo animated fadeInLeft ani_delay02 motion"></p></a>
</div>
<!-- // topWrap end -->




<script type="text/javascript">

	gTopNation = 'KR';
//	var gJicp = '10';
	var strD_no = '11601';
	$(document).ready(function() {

		/*
		var param = "nation=KR&gubun=CW_SAVE&param1=" + strD_no;
		fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){
			var res = data.datalist[0].save_point;

			if (res != ""){
				$("#disp_my_price").html(addComma(res))
			}

		}});
		*/

		$("#language_value").change(function() {

			fnGetDataList({async:true, url:" server/etc/process_nation.php", data:"language_value="+ $("#language_value").val(), callback:function(data){

				//location.reload();
				var lang_type = data.rescode;

				if (lang_type) {
					location.reload();
				}

			}});
		});

		$("#language_value2").change(function() {

			fnGetDataList({async:true, url:" server/etc/process_nation.php", data:"language_value="+ $("#language_value2").val(), callback:function(data){

				//location.reload();
				var lang_type = data.rescode;

				if (lang_type) {
					location.reload();
				}

			}});
		});

		if ( gTopNation == 'US') {
			$("#menu_dashboard").html("MAIN");
			$("#menu_join").html("SIGN UP");
			$("#menu_profile").html("PROFILE");
			$("#menu_wallet").html("WITHDRAWAL");
			$("#menu_wallet2").html("INSURANCE");
			$("#menu_deposit").html("DEPOSIT");
			$("#menu_luce").html("LUCE COIN");
			$("#menu_withdraw").html("WITHDRAW");
			$("#menu_purchase").html("BETTING");
			$("#menu_repurchase").html("REPURCHASE");
			$("#menu_purchaselist").html("PURCHASE LIST");
			$("#menu_betting_history").html("BETTING LIST");
			$("#menu_bonus").html("BONUS LIST");
			$("#menu_otp").html("OTP MANAGEMENT");
			$("#menu_refer").html("REFERRED LIST");
			$("#menu_sponsor").html("SPONSOR LIST");
			$("#menu_notice").html("NOTICE");
			$("#menu_data").html("DATA ROOM");
			$("#menu_invite").html("INVITE");
			$("#menu_mailing").html("CONTACT US");
			$("#r_txt01").html("Already registered?");
			$("#r_txt02").html("LOGIN");

		} else if (gTopNation == 'CN') {
			$("#menu_dashboard").html("主页");
			$("#menu_join").html("会员注册");
			$("#menu_profile").html("会员信息");
			$("#menu_wallet").html("提款钱包");
			$("#menu_wallet2").html("保险钱包");
			$("#menu_deposit").html("存款");
			$("#menu_luce").html("LUCE 币");
			$("#menu_withdraw").html("提现");
			$("#menu_purchase").html("合约套餐");
			$("#menu_repurchase").html("复投");
			$("#menu_purchaselist").html("合约明细");
			$("#menu_betting_history").html("投注清单");
			$("#menu_bonus").html("奖金明细");
			$("#menu_otp").html("OTP管理");
			$("#menu_refer").html("直推图");
			$("#menu_sponsor").html("组织图");
			$("#menu_notice").html("公告栏");
			$("#menu_data").html("资料室");
			$("#menu_invite").html("注册链接");
			$("#menu_mailing").html("联络我们");
			$("#r_txt01").html("已经注册？");
			$("#r_txt02").html("登入");

		} else if (gTopNation == 'JP') {
			$("#menu_dashboard").html("メイン");
			$("#menu_join").html("会員登録");
			$("#menu_profile").html("会員情報");
			$("#menu_wallet").html("出金財布");
			$("#menu_wallet2").html("保険財布");
			$("#menu_deposit").html("保証金");
			$("#menu_luce").html("LUCE コイン");
			$("#menu_withdraw").html("出金");
			$("#menu_purchase").html("購入");
			$("#menu_repurchase").html("リピーターの履歴");
			$("#menu_purchaselist").html("購入履歴");
			$("#menu_betting_history").html("賭けの歴史");
			$("#menu_bonus").html("ボーナス内訳");
			$("#menu_otp").html("OTPの管理");
			$("#menu_refer").html("おすすめ組織");
			$("#menu_sponsor").html("スポンサー組織");
			$("#menu_notice").html("お知らせ");
			$("#menu_data").html("アーカイブ");
			$("#menu_invite").html("招待");
			$("#menu_mailing").html("お問い合わせ");
			$("#r_txt01").html("すでに登録しましたか？");
			$("#r_txt02").html("ログイン");

		} else if ( gTopNation == 'KR') {
			$("#menu_dashboard").html("대시보드");

		} else if (gTopNation == 'VN') {
		
			$("#menu_dashboard").html("NHÀ");
			$("#menu_notice").html("Thông báo");
			$("#menu_profile").html("Thông tin thành viên");
			$("#menu_join").html("đăng ký");
			$("#menu_regist2").html("Mua hàng");
			$("#menu_mining").html("Mua hàng");
			$("#menu_register").html("Ví");
			$("#menu_orderhistory").html("lịch sử đơn hàng");
			$("#menu_points").html("Rút tiền");
			$("#menu_transfer").html("Chuyển giao VNCH");
			$("#menu_points2").html("Tiền thưởng");
			$("#menu_point1").html("Cây tuyển sinh");
			$("#menu_point2").html("Cây nhị phân");
			$("#menu_cumulative").html("Chế độ xem tích lũy");
			$("#menu_contactus").html("Email hỗ trợ");
			$("#menu_reward").html("phần thưởng");
			$("#menu_faq").html("FAQ");

			$("#menu_notice_m").html("ủng hộ");
			$("#menu_profile_m").html("Profile");
			$("#menu_join_m").html("Đăng ký");
			$("#menu_regist2_m").html("<strong>lịch sử </strong><br> đơn hàng");
			$("#menu_mining_m").html("<strong>Mua hàng<strong>");
			$("#menu_points_m").html("Ví");
			$("#menu_orderhistory_m").html("lịch sử đơn hàng");
			$("#menu_deal_m").html("RVN Rút tiền");
			$("#menu_transfer_m").html("RVN chuyển khoản");
			$("#menu_deal_m1").html("Để ý");
			$("#menu_chart_m").html("Cây tuyển sinh");
			$("#menu_chart_m1").html("Cây nhị phân");
			$("#menu_contactus_m").html("ủng hộ");
			$("#menu_reward_m").html("Reward");

		} /*else if (gTopNation == 'RU') {
			$("#menu_dashboard").html("Мэн");
			$("#menu_join").html("Стать участником");
			$("#menu_profile").html("Информация для участников");
			$("#menu_wallet").html("Управление кошельком");
			$("#menu_luce").html("Люса монета");
			$("#menu_withdraw").html("вывод");
			$("#menu_purchase").html("купить");
			$("#menu_repurchase").html("выкуп");
			$("#menu_purchaselist").html("История покупок");
			$("#menu_bonus").html("История бонусов");
			$("#menu_otp").html("OTP");
			$("#menu_refer").html("Рекомендуемая организация");
			$("#menu_sponsor").html("Спонсорская организация");
			$("#menu_notice").html("Уведомления");
			$("#menu_data").html("ресурсы");
			$("#menu_invite").html("приглашение");

		}*/




		//비트코인 $당 가격
//		var param = "gubun=BTC_USD&param1="+ "330";
//		fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){
//
//				if (data.datalist[0].btc_usd != "") {
//					$("#id_btc_usd_330").html(data.datalist[0].btc_usd);
//					$("#id_btc_usd_660").html(data.datalist[0].btc_usd*2);
//					$("#id_btc_usd_1320").html(data.datalist[0].btc_usd*4);
//					//alert(data.datalist[0].btc_usd);
//				}
//				else
//				{
//
//				}
//		}});

/*
		//직급이름
		var param = "gubun=GET_JICNAME&param1="+gJicp;
		fnGetDataList({async:true, url:" server/getCommon_query.php", data:param, callback:function(data){

				if(data.datalist[0].jicname != "") {
					$("#jic_name").html(data.datalist[0].jicname)
				}
		}});
*/
		// 상세정보 데이타
		/*
		fnGetDataList({async:true, url:" server/getDetail_Info.php", data:param, callback:function(data){
			var res = data.datalist[0]
			var rate = 0;
			if(res){
				$("#order_cnt").html(res.order_cnt);
				$("#sudang_rate").html(res.sudang_rate);
				$("#progress").html(addComma(res.progress));
				$("#bonus_rate").html(res.bonus_rate);
				$("#r_game_money").html(addComma(res.game_money));
				$("#r_with_money").html(addComma(res.with_money));
				$("#r_deposit").html(addComma(res.deposit));
				rate = addComma(res.sudang_rate.toFixed(2));
				if (rate < 5) {
					document.getElementById('Grp_Rate').style.width=5+'%';
				} else {
					document.getElementById('Grp_Rate').style.width=rate+'%';
				}

				$(".tjicname").html(res.jicname);				
			}
		}});
		*/



	});




		// 접속브라우저 확인
		var mobileInfo = new Array('Android', 'iPhone', 'iPod', 'BlackBerry', 'Windows CE', 'SAMSUNG', 'LG', 'MOT', 'SonyEricsson');

		for (var info in mobileInfo){
			// 모바일
			if (navigator.userAgent.match(mobileInfo[info]) != null){
				gMy_Browser = "MOBILE";
				break;
			} else {	// PC
				gMy_Browser = "PC";
				break;

			}
		}

/*
		if (gMyNowDay >= "20190111") {
			$("#BonusExc_now").hide();
			$("#BonusExc_new").show();
		} else {

			$("#BonusExc_now").show();
			$("#BonusExc_new").hide();

		}
*/

	// 브라우저별 회원가입
	var fnJoinLink = function() {

		if (gMy_Browser == "MOBILE") {
			//$("#join_link").attr("href", " join_mobile.php");
			$("#join_link").attr("href", " join_pc.php");
		} else {
			$("#join_link").attr("href", " join_pc.php");
		}

	}

	function fnSalesAdd() {
		document.location.href = " sales_insert.php";
	}
</script>


<div class="rightWrap animated fadeInLeft">
<div class="burger"> <span></span> </div>
<nav class="">
<a href=" index.php"><div class="logo motion animated fadeInRight ani_delay10"></div></a>
<div class="tGnb motion animated fadeInRight ani_delay10">
	<div class="tUser"><?php echo $user_id; ?><span id="jic_name"></span></div>
	<a href=" server/processLogout.php"><div class="tOut"></div></a>	

	<div class="tLang">
 		<select name="language_value" id="language_value" class="lang"> 
			
			<option value="KR">한국어</option>
		<!--	<option value="CN">简体中文</option>
			<option value="JP">日本语</option>
			<option value="US">English</option>-->
		</select>
	</div> 
		
</div>
<!--// tGnb end -->

<ul class="main animated fadeInRight ani_delay15">

  	<a href=" index.php"><li><p class="icon lIcon01"></p><span id="menu_dashboard">대시보드</span></li></a>
	<a href=" profile.php"><li><p class="icon lIcon02"></p><span id="menu_profile">회원정보</span></li></a>
	<a href=" join.php"><li><p class="icon lIcon02"></p><span id="menu_join">회원등록</span></li></a>
	<a href=" betting.php"><li><p class="icon lIcon03"></p><span id="menu_purchase">거래하기</span></li>
	<a href=" betting_history.php"><li><p class="icon lIcon03"></p><span id="menu_betting_history">거래내역</span></li>
	<a href=" deposit_request.php"><li><p class="icon lIcon04"></p><span id="menu_deposit">입금</span></li></a>
	<a href=" order_list.php"><li><p class="icon lIcon04"></p><span id="menu_purchaselist">입금내역</span></li></a>
	<a href=" point_list.php"><li><p class="icon lIcon04"></p><span id="menu_wallet">입출고 내역</span></li></a>
	<a href=" point_list2.php"><li><p class="icon lIcon04"></p><span id="menu_wallet2">복구지갑</span></li></a>
	<a href=" point_out_ebp.php"><li><p class="icon lIcon04"></p><span id="menu_withdraw">출금</span></li></a>
    <a href="org_chartp_box.php"><li><p class="icon lIcon02"></p><span id="menu_refer">Happy</span></li></a>
	<a href="org_chart_box.php"><li><p class="icon lIcon02"></p><span id="menu_sponsor">Dream</span></li></a>
	<a href=" notice_list.php"><li><p class="icon lIcon01"></p><span id="menu_notice">Notice</span></li></a>
	<a href=" reco.php"><li><p class="icon lIcon01"></p><span id="menu_invite">초대하기</span></li></a>

  </ul>
</nav>
  
<div class="overlay"></div>


<script language="javascript">
	$('.burger, .overlay').click(function(){
	  $('.burger').toggleClass('clicked');
	  $('.overlay').toggleClass('show');
	  $('nav').toggleClass('show');
	  $('body').toggleClass('overflow');
	});
</script>
<!-- 
<div class="clearfix"></div> -->


</div>
<!--// rightWrap end -->

<div class="overBlue motion"></div>
<!--// overBlue end -->

<script type="text/javascript">

	$(function(){

		var url = location.href;
		var lmenu_no = -1;
		if (url.indexOf("index") != -1)
			lmenu_no = 0;
//		else if (url.indexOf("join") != -1)
//			lmenu_no = 1;
		else if (url.indexOf("profile") != -1 || url.indexOf("change_password") != -1)
			lmenu_no = 1;
		else if (url.indexOf("join") != -1)
			lmenu_no = 2;
		else if (url.indexOf(" betting.php") != -1)
			lmenu_no = 3;
		else if (url.indexOf(" betting_history.php") != -1)
			lmenu_no = 4;
		else if (url.indexOf(" deposit_request.php") != -1)
			lmenu_no = 5; 
		else if (url.indexOf(" order_list.php") != -1)
			lmenu_no = 6; 
		else if (url.indexOf("point_list.php") != -1)
			lmenu_no = 7;
		else if (url.indexOf("point_list2.php") != -1)
			lmenu_no = 8;
		else if (url.indexOf("point_out_ebp.php") != -1)
			lmenu_no = 9;
		else if (url.indexOf("org_chartp_box.php") != -1)
			lmenu_no = 10;
		else if (url.indexOf("org_chart_box.php") != -1)
			lmenu_no = 11;
		else if (url.indexOf("notice_list.php") != -1)
			lmenu_no = 12;
		else if (url.indexOf("reco.php") != -1)
			lmenu_no = 13;
		else if (url.indexOf("contact_us.php") != -1)
			lmenu_no = 14;
		else if (url.indexOf("notice_list") != -1)
			lmenu_no = 15;
		//else if (url.indexOf("/board/board.php") != -1)
		//	lmenu_no = 16;
		else if (url.indexOf("reco") != -1)
			lmenu_no = 16;
		else if (url.indexOf("contact_us") != -1)
			lmenu_no = 17;
		if (lmenu_no != -1)
		{
			$("ul.main li:eq("+lmenu_no+")").addClass("on");
		}


	});
	


$(function(){
	$('.burger').click(function(){
		$('.rightWrap').toggleClass('rightOn');
	});

});
	
</script>







<div class="mainWrap animated fadeInLeft ani_delay10">
	<div class="sec1">
		<div class="box box1 container-fluid" style="height:300px;">
			<div class="row" >
				<div class="col">
					<div style="display:inline-block;width:140px;">
						<div class="icon icon1"></div>
						<p class="line"></p>
						<p class="box1_tit" id="mainTot_txt" style="display:contents">출고지갑</p>
						<p class="box1_num" id="main_coin1">6,225</p>
					</div>
					<div style="display:inline-block;">
						<div class="icon icon2"></div>
						<p class="line"></p>
						<p class="box1_tit" id="mainTot_txt2" style="display:contents">복구지갑</p>
						<p class="box1_num" id="main_coin2">0</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col">
					<div style="display:inline-block;">
						<div class="blink_btn" id="alarm1" onclick="moveBetList()" style="opacity: 0.22159;float:none;">수익금</div>
					</div>
					<div style="display:inline-block;">
						<div class="blink_btn" id="alarm2" onclick="moveBetList()" style="opacity: 0.837122;float:none;margin-left: 20%;"> 복구</div>
					</div>
                </div>
			</div>
			<br>
            <div class="row">
                <div class="col">
					<div style="display:inline-block;width:140px;">
						<div class="icon icon1"></div>
						<p class="line"></p>
						<p class="box1_tit" id="mainTot_txt" style="display:contents">거래금</p>
						<p class="box1_num" id="main_coin1">6,225</p>
					</div>
					<div style="display:inline-block;">
						<div class="icon icon3"></div>
						<p class="line"></p>
						<p class="box1_tit" id="mainTot_txt3" style="display:contents">보험 진행중</p>
						<p class="box1_num" id="main_cover">500</p>
					</div>
                </div>
			</div>
			<br>
			<br>
            <div class="row">
				<div style="display:inline-block;width:120px;">
					<div class="icon icon1"></div>
					<p class="line"></p>
					<p class="box1_tit" id="mainTot_txt" style="display:contents">보험금</p>
					<p class="box1_num" id="main_coin1">6,225</p>
                </div>
                <div style="display:inline-block;width:180px;">
					<div class="icon icon4" style="margin: 0px -10px 0px 20px;"></div>
					<p class="line"></p>
					<p class="box1_tit" id="mainTot_txt3" style="display:contents;">보험지불준비금 </p>
					<p class="box1_num" id="main_cover2">250</p>
                </div>
            </div>
            <br>
        </div><!-- box 1 -->
        <div class="box box1-2" style="padding: 10px 50px;">
            <p class="mainTit" id="t_total_amount" style="display: inline;">총자산</p>
            <span class="box1_num" style="font-size: 22px;font-weight:600;display: inline;margin-left: 40px;vertical-align: baseline;">250</span>
        </div>
		<div class="box box2">
			<p class="mainTit" id="t_contact">거래 내역</p>
			<p class="mainTit" id="t_contact_middle">거래중</p>
			<div class="mainTit" id="t_contact_complete">거래완료<br>(<span id="t_contact_result">승/패</span>)</div>
			<a href=" betting_history.php"><div class="goBtn">GO</div></a>
		</div>
		<div class="box box5">
			<p class="mainTit" id="t_betting">Betting</p>
			<p class="mainTxt">Our Goal is<br>Continuous of Success</p>
			<a href="betting.php"><div class="goBtn">GO</div></a>
		</div>
	</div>
	<div class="sec2">
		<div class="box box4">
			<p class="mainTit" id="t_deposit">Deposit</p>
			<a href=" deposit_request.php"><div class="goBtn">GO</div></a>
		</div>

		<div class="box box4-1 box4-0">
			<p class="mainTit" id="t_current_cover">지불 준비금</p>
			<p class="mainTxt" id="coverPrice">0</p>
		</div>

		<div class="box box4-1">
			<p class="mainTit" id="t_current">현재시세</p>
			<p class="mainTxt"><strong>1BTC =</strong> <span id="coinPrice">9954.34USD (Coinmarket)</span></p>
		</div>

		<div class="box box3">
			<a href=" reco.php"><div class="goBtn">GO</div></a>
			<p class="mainTit" id="t_invite">INVITE</p>
			<p class="mainTxt">join<br>together</p>
		</div>
	</div>
	<div class="sec3">
		<a href=" point_out_ebp.php">
			<div class="box box6">
				<p class="mainTit" id="t_withdraw">Withdraw</p>
			</div>
		</a>
		<div class="box box7">
			<p class="mainTit" id="t_wallet">Wallet</p>
			<a href=" point_list.php"><div class="goBtn">GO</div></a>
		</div>
		<div class="box box8">
			<p class="mainTit"id="t_ntc">Notice</p>
			<a href=" notice_list.php"><div class="inviteBtn" id="in_click" style="cursor: pointer; font-size:24px;">+</div></a>
			<div class="clearfix"></div>
			<ul class="notice" >
			<?php while($row79 = sqlsrv_fetch_array( $result79 ))
			{?>
				<li class="date"><a href="notice_list.php?m_no=<?php echo $row79['m_no'];?>"><?php echo $row79['date']; ?></li>
				<li class="name"><?php echo $row79['title']; ?></li>
			<?php } ?>
			</ul>
		</div>
	</div>

	 
<div class="footWrap animated fadeInUp ani_delay20 motion">
	<!-- <a href=" contact_us.php"><div class="fBox">
		Company : wbtglobal.io@gmail.com<br>
	    Support : wbtsurport@gmail.com
	</div></a>
	
	<br> -->
	Copyright (C) 2020 <strong>BITSNODE</strong>.<br> All rights reserved.
</div>

<script type="text/javascript">
	/*
		Toastr Notification On Load

		TYPE:
			primary
			info
			error
			success
			warning

		POSITION
			top-right
			top-left
			top-center
			top-full-width
			bottom-right
			bottom-left
			bottom-center
			bottom-full-width

		false = click link (example: "http://www.stepofweb.com")
	*/
	/*_toastr("Welcome, you have 2 new orders","top-right","success",false);*/




	/** SALES CHART */
	/*
	loadScript(plugin_path + "chart.flot/jquery.flot.min.js", function(){
		loadScript(plugin_path + "chart.flot/jquery.flot.resize.min.js", function(){
			loadScript(plugin_path + "chart.flot/jquery.flot.time.min.js", function(){
				loadScript(plugin_path + "chart.flot/jquery.flot.fillbetween.min.js", function(){
					loadScript(plugin_path + "chart.flot/jquery.flot.orderBars.min.js", function(){
						loadScript(plugin_path + "chart.flot/jquery.flot.pie.min.js", function(){
							loadScript(plugin_path + "chart.flot/jquery.flot.tooltip.min.js", function(){

								if (jQuery("#flot-sales").length > 0) {


									var $color_border_color = "#eaeaea",
										$color_second 		= "#6595b4";


									var d = [
										[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 4568], [1198450800000, 686], [1198537200000, 4122], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 544], [1199574000000, 500], [1199660400000, 476], [1199746800000, 462], [1199833200000, 500], [1199919600000, 700], [1200006000000, 750], [1200092400000, 600], [1200178800000, 500], [1200265200000, 900], [1200351600000, 930], [1200438000000, 1200], [1200524400000, 980], [1200610800000, 950], [1200697200000, 900], [1200783600000, 1000], [1200870000000, 1050], [1200956400000, 1150], [1201042800000, 1100], [1201129200000, 1200], [1201215600000, 1300], [1201302000000, 1700], [1201388400000, 1450], [1201474800000, 1500], [1201561200000, 1510], [1201647600000, 1510], [1201734000000, 1510], [1201820400000, 1700], [1201906800000, 1800], [1201993200000, 1900], [1202079600000, 2000], [1202166000000, 2100], [1202252400000, 2200], [1202338800000, 2300], [1202425200000, 2400], [1202511600000, 2550], [1202598000000, 2600], [1202684400000, 2500], [1202770800000, 2700], [1202857200000, 2750], [1202943600000, 2800], [1203030000000, 3245], [1203116400000, 3345], [1203202800000, 3000], [1203289200000, 3200], [1203375600000, 3300], [1203462000000, 3400], [1203548400000, 3600], [1203634800000, 3700], [1203721200000, 3800], [1203807600000, 4000], [1203894000000, 4500]];

									for (var i = 0; i < d.length; ++i) {
										d[i][0] += 60 * 60 * 1000;
									}

									var options = {

										xaxis : {
											mode : "time",
											tickLength : 5
										},

										series : {
											lines : {
												show : true,
												lineWidth : 1,
												fill : true,
												fillColor : {
													colors : [{
														opacity : 0.1
													}, {
														opacity : 0.15
													}]
												}
											},
										   //points: { show: true },
											shadowSize : 0
										},

										selection : {
											mode : "x"
										},

										grid : {
											hoverable : true,
											clickable : true,
											tickColor : $color_border_color,
											borderWidth : 0,
											borderColor : $color_border_color,
										},

										tooltip : true,

										tooltipOpts : {
											content : "Sales: %x <span class='block'>$%y</span>",
											dateFormat : "%y-%0m-%0d",
											defaultTheme : false
										},

										colors : [$color_second],

									};

									var plot = jQuery.plot(jQuery("#flot-sales"), [d], options);
								}

							});
						});
					});
				});
			});
		});
	});
*/


if ('KR' == "KR") {
	$("#language_value").html("");

	$("#language_value").append("<option value='KR'>한국</option>");
	// $("#language_value").append("<option value='US'>미국</option>");
	// $("#language_value").append("<option value='CN'>중국</option>");
	// $("#language_value").append("<option value='JP'>일본</option>");
} else {
	$("#language_value").html("");

	$("#language_value").append("<option value='KR'>한국</option>");
	// $("#language_value").append("<option value='US'>ENGLISH</option>");
	// $("#language_value").append("<option value='CN'>简体中文</option>");
	// $("#language_value").append("<option value='JP'>日本语</option>");
}


$("#language_value").val('KR');
$("#language_value2").val('KR');
//$("input[name=language_value]").val('KR');


$(function(){

	$("body").delegate('input:text.numeric','keypress keyup', function(event){
		if (event.type == "keypress")
		{
			if(event.which && (event.which < 48 || event.which > 57) && event.which != 46 && event.which != 8 && event.which != 45 ) {
				event.preventDefault();
			}
		}
		else if (event.type == "keyup")
		{
			if (event.which != 37 & event.which != 39)
			{
				var thisObj = $(this);
				var thisVal = thisObj.val();

				var num = "";

				if (thisVal != "")
				{
					num = putComma(thisObj.val().replace(/,/gi,""));
/*
					if (num.substr(0,1) != ".")
					{
						if (num.length == 1)
						{
							num += ".00";
						}
					}
					else
					{
						num = "";
					}
*/
				}
				thisObj.val(num);
/*
				if (num.length > 0 && num.indexOf(".") != -1)
				{
					if (event.which != 8 & event.which != 46)
					{
						thisObj.selectRange(num.indexOf("."), num.indexOf("."));
					}
				}
*/

			}
		}
	});


	//지우지 마시오!!
//	$('input:password').dPassword();

});


</script>

<script src="../js/main.js"></script>

<iframe name="process" id="process" frameborder="1" width="100%" height="400" style="display:none;"></iframe>

</div>
<!--// mainWrap end -->
</body>
</html>