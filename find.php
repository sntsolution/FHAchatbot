<?php

include "connection.php";
if(isset($_REQUEST["msg"]))
{	
	$msg=$_REQUEST["msg"];
	$qu="select * from `visitor` where question like '%".$msg."%'";
	$res=$con->query($qu);
	$count=$res->num_rows;
	if($count > 0)
	{
		$data=$res->fetch_assoc();
		$cid=$data["id"];
		$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor","Pre-Event Preparation "=>"Pre-Event Preparation","Whats New"=>"Whats New","Key Statistics"=>"Key Statistics","Show Directory"=>"Show Directory","VIP Qualification"=>"VIP Qualification","Social media"=>"Social media","Free Seminars at the exhibition"=>"Free Seminars at the exhibition");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>$cid);	
		echo json_encode($json_array);
		
	}// cruise count if

	elseif(isset($_REQUEST['Id']) && $_REQUEST['Id']!= "")
	{
		$msg=$_REQUEST["msg"];
		$qu1="select * from `visitor_option` where question like '%".$msg."%'";
		$res1=$con->query($qu1);
		$count1=$res1->num_rows;
		if($count1 > 0)
		{
			$data1=$res1->fetch_assoc();
			$fid=$data1["id"];
			if($fid == 1){
		$replies["text"]=array("textb"=>"Did you pre-register online already? How can i help you with the registration?");
				$replies["reply"]=array("OnsiteregistrationforFHA"=>"Onsite registration for FHA","Onsite Registration for ProWine Asia"=>"Onsite Registration for ProWine Asia","Online Pre-registration for FHA"=>"Online Pre-registration for FHA","Online Pre-registration for ProWine Asia"=>"Online Pre-registration for ProWine Asia","GroupDelegationRegistration"=>"Group Delegation / Registration","StudentVisit"=>"Student Visit","Accesstodifferentshows"=>"Access to different shows");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
			}
			else if($fid == 2){
			$replies["text"]=array("textb"=>"Welcome to Singapore! Check out the list here to help you plan your trip!");
				$replies["reply"]=array("OfficialTravelAgent"=>"Official Travel Agent","OfficialHotels"=>"Official Hotels","Visa/LOI"=>"Visa / LOI","AboutSingapore"=>"About Singapore");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
			}
			else if($fid == 3){
			
			$replies["text"]=array("textb"=>"We know how important it is for you to plan for your trip so that it will be fruitful one! Start exploring now!");
				$replies["reply"]=array("Mobile App (Gen info + functions)"=>"Mobile App (Gen info + functions)","Online Show Catalogue"=>"Online Show Catalogue","Business Matching (Gen info + functions)"=>"Business Matching (Gen info + functions)","Sub-shows"=>"Sub-shows","List of exhibitors"=>"List of exhibitors");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
			}
			else if($fid == 4){
			$replies["text"]=array("textb"=>"With 2 venues, there is more space for new happenings on the showfloor- from New exhibitors, New products, New competitions, New Speakers, New activities and more! Check out the list here");
				$replies["reply"]=array("New Exhibitors"=>"New Exhibitors","New Products"=>"New Products","New Competitions"=>"New Competitions","New Speakers"=>"New Speakers","New Activities"=>"New Activities");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
			}
			else if($fid == 5){
			
				$replies["reply"]=array("Number of Exhibitors"=>"Number of Exhibitors","Number of Group Pavilions"=>"Number of Group Pavilions","Number of Countries"=>"Number of Countries","Size of exhibition space"=>"Size of exhibition space");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
			}
			elseif($fid == 6)
			{
				$replies["reply"]=array("Visitors Guide"=>"Visitors Guide");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
			}
			else if($fid == 7 || $fid == 8 || $fid == 9){
			
				$json_array["chat"]=array("user"=>$msg,"bot"=>$data1['answer'],"vid"=>$fid);
		echo json_encode($json_array);
			}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"Id"=>'',"UId"=>'',"id"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');	
					echo json_encode($json_array);
				
			}
		}
		elseif(isset($_REQUEST['vid']) && $_REQUEST['vid']!= "")
		{
			$vid=$_REQUEST['vid'];
			$qu2="select * from `visitor_opt_two` where eid='$vid'";
			$res2=$con->query($qu2);
			$count2=$res2->num_rows;
			if($count2 > 0)
			{
				$data2=$res2->fetch_assoc();
				
				$qu3="select * from `visitor_opt_two` where question like '%".$msg."%'";
			$res3=$con->query($qu3);
			$count3=$res3->num_rows;
			if($count3>0)
			{
			$vid=$_REQUEST['vid'];
				$data3=$res3->fetch_assoc();
				$id=$data3['eid'];
				$tid=$data3['id'];
				if($tid == 1 || $tid ==3 || $tid ==4 || $tid ==5 || $tid ==6 || $tid ==7 || $tid ==8 || $tid == 9|| $tid == 13 || $tid == 14 || $tid == 15 || $tid == 16 || $tid == 17 || $tid == 19 || $tid == 20 || $tid == 21 || $tid == 22 || $tid == 23 || $tid == 24 || $tid == 25 || $tid == 26 || $tid == 27 || $tid == 28)
				{
				$json_array["chat"]=array("user"=>$msg,"bot"=>$data3['answer'],"nid"=>$id);	
				echo json_encode($json_array);
				}
				elseif($tid == 2)
				{
				$replies["text"]=array("textb"=>"You can register for the exhibition at <a href=\"http://www.foodnhotelasia.com/to-visit/visitor-registration\" target=\"_blank\"> here </a>. Click on the link to address your specific need. ");
					$replies["reply"]=array("Pre-registration status"=>"Pre-registration status","Why rejected"=>"Why rejected","How to appeal"=>"How to appeal","Resend confirmation email"=>"Resend confirmation email","Business Matching"=>"Business Matching");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"nid"=>$id);	
				echo json_encode($json_array);
				}
				elseif($tid == 18)
				{
				$replies["text"]=array("textb"=>"Food&HotelAsia is the most comprehensive show in Asia for the food and hospitality industry. This mega show will be held across 2 venues in 2018 for the first time!
There are 6 specialised and 1 co-located event. Click here to find out more about each of the specialised show");
					$replies["reply"]=array("FoodAsia"=>"FoodAsia","Bakery&Pastry"=>"Bakery&Pastry","SpecialityCoffee&Tea"=>"SpecialityCoffee&Tea","HospitalityStyleAsia"=>"HospitalityStyleAsia","HospitalityTechnology"=>"HospitalityTechnology","ProWine Asia"=>"ProWine Asia","HotelAsia - Suntec Singapore"=>"HotelAsia - Suntec Singapore");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"nid"=>$id);	
				echo json_encode($json_array);
				}
				
				
			}
			elseif(isset($_REQUEST['id']) && $_REQUEST['id']!= "")
		{
			
			$msg=$_REQUEST["msg"];
			$qu4="select * from `visitor_ol_reg` where name like '%".$msg."%'";
			$res4=$con->query($qu4);
			$count4=$res4->num_rows;
			if($count4>0)
			{
				$data4=$res4->fetch_assoc();
				$oid=$data4['id'];
				if($oid == 1)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Click <a href=\"http://www.foodnhotelasia.com/to-visit/visitor-registration/\" target=\"_blank\">here</a> for more info");	
				echo json_encode($json_array);
				}
				elseif($oid == 2)
				{
					$wid=$oid;
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Please Provide Your Name","wid"=>$wid);	
				echo json_encode($json_array);
				}
				elseif($oid == 3)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Click <a href=\"http://www.foodnhotelasia.com/about-fha/\" target=\"_blank\">here</a> for more info");	
				echo json_encode($json_array);
				}
				elseif($oid == 4)
				{
					$wid=$oid;
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Provide Your Name","wid"=>$wid);	
				echo json_encode($json_array);
					
				}
				elseif($oid == 5)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Click <a href=\"http://www.hotel-asia.com/related-competitions-events-and-conferences/#business-workshops\" target=\"_blank\">here</a> for more info");	
				echo json_encode($json_array);
				}
				elseif($oid == 6)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"FoodAsia is THE food and beverage sourcing hub for trade buyers in Asia. Find out more here.<br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				elseif($oid == 7)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Equipment, Ingredients, Supplies for the Bakery & Pastry Industries. <br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				
				elseif($oid == 8)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Source for speciality coffee and tea products, and catch the exciting line-up of new & revamped competitions and workshops! <br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				elseif($oid == 9)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"All inclusive sourcing platform for hospitality interior, furnishing, lighting & tableware <br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				elseif($oid == 10)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"Innovative showcase of technology and solution for the food & hospitality sector; , related conference tracks will delve deep into topical key technologies including the use of Internet of Things (IoT) technology, payment and data security, data analytics, robotics and virtual reality  <br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				elseif($oid == 11)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"A wide representation of international wine and spirit labels, an extensive scope of solutions and concepts for the regions diverse consumer markets, as well as specialised masterclasses and seminars by industry speakers. <br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				elseif($oid == 12)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>"A comprehensive showcase of Hotel, Restaurant & Foodservice Equipment, Supplies and Service; related conference tracks, Award showcase and free workshops   <br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SuntecSingapore.pdf\" target=\"_blank\">Map of Suntec Singapore</a><br><a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">Product Exhibits</a><br><a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">List of Exhibitors</a>");	
				echo json_encode($json_array);
				}
				}
				elseif(isset($_REQUEST['wid']) && $_REQUEST['wid']!= "")
				{
					$msg=$_REQUEST["msg"];
					$qu3="select * from `registration` where Name='$msg'";
					$res3=$con->query($qu3);
					$count3=$res3->num_rows;
					if($count3>0)
					{
						$data3=$res3->fetch_assoc();
						$uid=$data3['UId'];
						$json_array["chat"]=array("user"=>$msg,"bot"=>"Please Provide Your Company Name","uid"=>$uid);	
						echo json_encode($json_array);
					}
					else
					{
						$usid=$_REQUEST['UId'];
						$msg=$_REQUEST["msg"];
						$qu4="select * from `registration` where CompanyName='$msg' and UId='$usid'";
						$res4=$con->query($qu4);
						$count4=$res4->num_rows;
						if($count4>0)
						{	
							$data4=$res4->fetch_assoc();
							$uid=$data4['UId'];
							$json_array["chat"]=array("user"=>$msg,"bot"=>"Please Provide Your Email Id");	
							echo json_encode($json_array);
						}
						else
						{
							$wid=$_REQUEST['wid'];
							$useid=$_REQUEST['UId'];
								$msg=$_REQUEST["msg"];
							$qu5="select * from `registration` where Email='$msg' and UId='$useid'";
							$res5=$con->query($qu5);
							$count5=$res5->num_rows;
					
					
							if($count5>0 && $wid == 4)
							{
								$data5=$res5->fetch_assoc();
								$uid=$data5['UId'];
								$to=$data5['Email'];
								$newpass=rand(0,9999);
								$sub="reset password";
								$body="Your Password is".$newpass;
								$query="update `registration` set Password='$newpass'where UId='$uid'";
								$result=$con->query($query);
								//mail($to,$sub,$body);
								$json_array["chat"]=array("user"=>$msg,"bot"=>"Your Visitor’s Pass has been sent to you via email, Please check your email.","Id"=>$uid);	
								echo json_encode($json_array);
							}
							else if($count5>0 && $wid == 2)
							{
								$userid=$_REQUEST['UId'];
								$msg=$_REQUEST["msg"];
								$qu7="select * from `rejection_master` where uid='$userid'";
								$res7=$con->query($qu7);
								$count7=$res7->num_rows;
								if($count7>0)
								{
									$data7=$res7->fetch_assoc();
									$ev=$data7['event_name'];
									$reason=$data7['reject_reason'];
									if($ev == "")
									{
										$json_array["chat"]=array("user"=>$msg,"bot"=>"missing event_name field");	
										echo json_encode($json_array);
									}
									else
									{
										$json_array["chat"]=array("user"=>$msg,"bot"=>$reason);	
										echo json_encode($json_array);
									}
								}
							}
							else if($wid == 3)
							{
								$qu6="SELECT * FROM `faq` where match(question) against('$msg')";
						
								$res6=$con->query($qu6);
								//print_r($res6);
								$count6=$res6->num_rows;
								//echo $count6;
								//exit;
								if($count6>0)
								{
									$data6=$res6->fetch_assoc();
									$ans=$data6['answer'];
									//echo $ans;
									$json_array["chat"]=array("user"=>$msg,"bot"=>$ans);	
									echo json_encode($json_array);
									//exit;
								}
								else
								{
						
								$json_array["chat"]=array("user"=>$msg,"bot"=>"i could not find you in our database. Please ask relevant question");
								echo json_encode($json_array);
								}
											
							}
							else
							{
								$msg=$_REQUEST["msg"];
						
					 			if($msg == "yes")
								{
							
									$json_array["chat"]=array("user"=>$msg,"bot"=>"Please provide your name");
									echo json_encode($json_array);
								}
								else
								{
						
									$json_array["chat"]=array("user"=>$msg,"bot"=>"i could not find you in our database. Maybe you mistyped your information, Do you want to try again?");
									echo json_encode($json_array);
								}
							}	
						}
					}
				}
elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
{
$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
		echo json_encode($json_array);
	
}
			else
				{
				$replies["text"]=array("textb"=>"Please Choose from the following. If you want to ask something else please reply with reset ");
				$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor","Pre-Event Preparation "=>"Pre-Event Preparation","Whats New"=>"Whats New","Key Statistics"=>"Key Statistics","Show Directory"=>"Show Directory","VIP Qualification"=>"VIP Qualification","Social media"=>"Social media","Free Seminars at the exhibition"=>"Free Seminars at the exhibition");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies);	
		echo json_encode($json_array);
				}
			}
			
		
		elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
		{
		$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
		$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');	
				echo json_encode($json_array);
			
		}
		else
		{	
		$replies["text"]=array("textb"=>"Please Choose from the following. If you want to ask something else please reply with reset ");
		$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor","Pre-Event Preparation "=>"Pre-Event Preparation","Whats New"=>"Whats New","Key Statistics"=>"Key Statistics","Show Directory"=>"Show Directory","VIP Qualification"=>"VIP Qualification","Social media"=>"Social media","Free Seminars at the exhibition"=>"Free Seminars at the exhibition");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies);	
		echo json_encode($json_array);
		}
	}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');	
					echo json_encode($json_array);
				
			}
	}
	
	elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
		{
		$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
		$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');	
				echo json_encode($json_array);
			
		}

		else
		{
		$replies["text"]=array("textb"=>"Please Choose from the following. If you want to ask something else please reply with reset ");
		$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor","Pre-Event Preparation "=>"Pre-Event Preparation","Whats New"=>"Whats New","Key Statistics"=>"Key Statistics","Show Directory"=>"Show Directory","VIP Qualification"=>"VIP Qualification","Social media"=>"Social media","Free Seminars at the exhibition"=>"Free Seminars at the exhibition");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies);	
		echo json_encode($json_array);
		}
		}
elseif($_REQUEST["msg"] == "Exhibiting" || $_REQUEST["msg"] == "Competition" || $_REQUEST["msg"] == "Activities" || $_REQUEST["msg"] == "Conference" || $_REQUEST["msg"] == "Media")
{
	$json_array["chat"]=array("user"=>$msg,"bot"=>"Great! So what can I help you with today?");	
		echo json_encode($json_array);
}
elseif($_REQUEST["msg"] == "General Information")
{
$rid=1;
	$replies["reply"]=array("Opening Hours"=>"Opening Hours","Dates/Day"=>"Dates/Day","Venues"=>"Venues","Admission"=>"Admission","ProWine Asia"=>"ProWine Asia");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"rid"=>$rid);	
		echo json_encode($json_array);
}
elseif(isset($_REQUEST['rid']) && $_REQUEST['rid'] != "")
{
$msg=$_REQUEST["msg"];
		$qu1="select * from `generalinfo_option` where question like '%".$msg."%'";
		$res1=$con->query($qu1);
		$count1=$res1->num_rows;
		if($count1 > 0)
		{
		$row=$res1->fetch_array();
		$sid=$row['id'];
		if($sid == 1 || $sid == 2)
		{
			$json_array["chat"]=array("user"=>$msg,"bot"=>$row['answer'],"sid"=>$sid);	
			echo json_encode($json_array);
		}	
		elseif($sid == 6)
		{
		$replies["text"]=array("textb"=>"FHA2018 will be held at Singapore Expo and Suntec Singapore. May I know which venue you are enquiring on?");
			$replies["reply"]=array("Singapore Expo"=>"Singapore Expo","Suntec Singapore"=>"Suntec Singapore");
			$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"sid"=>$sid);	
			echo json_encode($json_array);
		}
		elseif($sid == 4)
		{
			$replies["reply"]=array("Admission Guideline"=>"Admission Guideline","Admission Fee / Purchase Ticket"=>"Admission Fee / Purchase Ticket");
			$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"sid"=>$sid);	
			echo json_encode($json_array);
		}
		elseif($sid == 5)
		{
			$replies["reply"]=array("About ProWine Asia"=>"About ProWine Asia","Visitor Registration to ProWine Asia"=>"Visitor Registration to ProWine Asia");
			$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"sid"=>$sid);	
			echo json_encode($json_array);
		}	
		elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
		{
		$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
		$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
				echo json_encode($json_array);
			
		}	
		}
		elseif(isset($_REQUEST['sid']) && $_REQUEST['sid']!= "")
		{
		
		
		$sid=$_REQUEST['sid'];
			$qu2="select * from `generalinfo_opt_two` where sid='$sid'";
			$res2=$con->query($qu2);
			$count2=$res2->num_rows;
			if($count2 > 0)
			{
				$data2=$res2->fetch_assoc();
				
				$qu3="select * from `generalinfo_opt_two` where question like '%".$msg."%'";
			$res3=$con->query($qu3);
			$count3=$res3->num_rows;
			if($count3>0)
			{
			$sid=$_REQUEST['sid'];
				$data3=$res3->fetch_assoc();
				$hid=$data3['sid'];
				$tid=$data3['id'];
				
				if($tid == 3)
				{
				$replies["text"]=array("textb"=>"Click <a href=\"http://www.foodnhotelasia.com/to-visit/2-venues-1-mega-show\" target=\"_blank\"> Here</a> for an overview map of Singapore Expo");
					$replies["reply"]=array("Getting to Singapore Expo"=>"Getting to Singapore Expo","Facilities at Singapore Expo"=>"Facilities at Singapore Expo");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"hid"=>$tid);	
				echo json_encode($json_array);
				}
				elseif($tid == 4)
				{ 
				$replies["text"]=array("textb"=>"Click <a href=\"http://www.foodnhotelasia.com/to-visit/2-venues-1-mega-show\" target=\"_blank\"> Here</a> for an overview map of Suntec Singapore");
					$replies["reply"]=array("Getting to Suntec Singapore"=>"Getting to Suntec Singapore","Facilities at Suntec Singapore"=>"Facilities at Suntec Singapore");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"hid"=>$tid);	
				echo json_encode($json_array);
				}
				elseif($tid == 5 || $tid == 6 || $tid == 7 || $tid == 8)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>$data3['answer'],"hid"=>$tid);	
				echo json_encode($json_array);
				}
				elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
				{
				$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
				$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
						$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
						echo json_encode($json_array);
					
				}
			}
			elseif(isset($_REQUEST['hid']) && $_REQUEST['hid']!= "")
		{
		$msg=$_REQUEST['msg'];
		$hid=$_REQUEST['hid'];
			$qu2="select * from `generalinfo_opt2` where mid='$hid'";
			$res2=$con->query($qu2);
			$count2=$res2->num_rows;
			if($count2 > 0)
			{
				$data2=$res2->fetch_assoc();
				
				$qu3="select * from `generalinfo_opt2` where question like '%".$msg."%'";
			$res3=$con->query($qu3);
			$count3=$res3->num_rows;
			if($count3>0)
			{
			$hid=$_REQUEST['hid'];
				$data3=$res3->fetch_assoc();
				$tid=$data3['id'];
				
				if($tid == 1)
				{
				$replies["text"]=array("textb"=>"There are several ways to get to Singapore Expo. In addition to public transport, we have also organised complimentary shuttle bus services for our attendees. Click on the following links for more information. Driving to Singapore Expo is not advisable due to heavy traffic and road congestion.");
					$replies["reply"]=array("IntervenueShuttleBus"=>"Intervenue Shuttle Bus","OfficialHotelShuttleBus"=>"Official Hotel Shuttle Bus","PublicTransport"=>"Public Transport","Driving to Singapore Expo"=>"Driving to Singapore Expo");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"kid"=>$tid);	
				echo json_encode($json_array);
				}
				elseif($tid == 2 || $tid == 4)
				{
					$replies["reply"]=array("Wifi"=>"Wifi","Muslim Prayer Room"=>"Muslim Prayer Room","Business Centre"=>"Business Centre","Left Luggage"=>"Left Luggage","Childcare"=>"Childcare","Nursing Room"=>"Nursing Room","First Aid Room"=>"First Aid Room","Mobile Charging Station"=>"Mobile Charging Station","Taxi Stand"=>"Taxi Stand","Nearest Carparks"=>"Nearest Carparks","Complimentary Parking"=>"Complimentary Parking","F&B Outlets"=>"F&B Outlets","Rest Areas"=>"Rest Areas");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"kid"=>$tid);	
				echo json_encode($json_array);
				}
				elseif($tid == 3)
				{
					$replies["reply"]=array("IntervenueShuttleBus"=>"Intervenue Shuttle Bus","OfficialHotelShuttleBus"=>"Official Hotel Shuttle Bus","PublicTransport"=>"Public Transport","Driving to Suntec Singapore"=>"Driving to Suntec Singapore");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"kid"=>$tid);	
				echo json_encode($json_array);
				}
				
			}
			elseif(isset($_REQUEST['kid']) && $_REQUEST['kid']!= "")
			{
				$msg=$_REQUEST['msg'];
		$kid=$_REQUEST['kid'];
			$qu2="select * from `generalinfo_basic` where gid='$kid'";
			$res2=$con->query($qu2);
			$count2=$res2->num_rows;
			if($count2 > 0)
			{
			$msg=$_REQUEST['msg'];
				$data2=$res2->fetch_assoc();
				$kid=$_REQUEST['kid'];
				$qu3="select * from `generalinfo_basic` where question like '%".$msg."%' and gid='$kid'";
			$res3=$con->query($qu3);
			$count3=$res3->num_rows;
			if($count3>0)
			{
			$kid=$_REQUEST['kid'];
				$data3=$res3->fetch_assoc();
				$tid=$data3['id'];
				if($tid == 1 || $tid == 3 || $tid == 5 || $tid == 9 || $tid == 10 || $tid == 11)
				{
					$json_array["chat"]=array("user"=>$msg,"bot"=>$data3['answer'],"xid"=>$tid);	
				echo json_encode($json_array);
				}
				elseif($tid == 8 || $tid == 12)
				{
				$tid=$data3['id'];
					$replies["reply"]=array("Nearest Carparks"=>"Nearest Carparks","Complimentary Parking"=>"Complimentary Parking");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"xid"=>$tid);	
				echo json_encode($json_array);
				}
				
			}
			elseif(isset($_REQUEST['xid']) && $_REQUEST['xid']!= "")
			{
				$msg=$_REQUEST['msg'];
		$xid=$_REQUEST['xid'];
			$qu2="select * from `generalinfo_basic2` where xid='$xid'";
			$res2=$con->query($qu2);
			$count2=$res2->num_rows;
			if($count2 > 0)
			{
				$data2=$res2->fetch_assoc();
				
				$qu3="select * from `generalinfo_basic2` where question like '%".$msg."%'";
			$res3=$con->query($qu3);
			$count3=$res3->num_rows;
			if($count3>0)
			{
			$xid=$_REQUEST['xid'];
				$data3=$res3->fetch_assoc();
				
				$json_array["chat"]=array("user"=>$msg,"bot"=>$data3['answer']);	
				echo json_encode($json_array);
			}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
					echo json_encode($json_array);
				
			}
				}
				elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
				{
				$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
				$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
						$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
						echo json_encode($json_array);
					
				}
				
			}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
					echo json_encode($json_array);
				
			}
			
			
			
			}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
					echo json_encode($json_array);
				
			}
			}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
					echo json_encode($json_array);
				
			}
			}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
					echo json_encode($json_array);
				
			}
		
		}
			elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
			{
			$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
			$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
					$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
					echo json_encode($json_array);
				
			}
			}
			
		elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
		{
		$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
		$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
				echo json_encode($json_array);
			
		}
		
		
		
		}
		
		elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
		{
		$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
		$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
				$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');		
				echo json_encode($json_array);
			
		}
	
}
elseif($_REQUEST["msg"] == "Reset" || $_REQUEST["msg"] == "reset")
{
$replies["text"]=array("textb"=>"Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for? ");
$replies["reply"]=array("Exhibiting"=>"Exhibiting","Visiting"=>"Visiting","Competition"=>"Competition","Activities"=>"Activities","Conference"=>"Conference","Media"=>"Media","General Information"=>"General Information");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"cid"=>'',"uid"=>'',"nid"=>'',"vid"=>'',"wid"=>'',"rid"=>'',"sid"=>'',"hid"=>'',"kid"=>'',"lid"=>'',"xid"=>'');	
		echo json_encode($json_array);
	
}
	else
	{
	    $id=$_REQUEST['Id'];
		$json_array["chat"]=array("user"=>$msg,"bot"=>"Sorry I am not able to get you");	
		echo json_encode($json_array);
	}
}
?>
