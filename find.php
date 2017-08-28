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
		$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor");
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
		
				$replies["reply"]=array("Onsiteregistration"=>"Onsite registration","OnlineRegistration"=>"Online Registration","GroupDelegationRegistration"=>"Group Delegation / Registration","StudentVisit"=>"Student Visit","Accesstodifferentshows"=>"Access to different shows");
			}
			else if($fid == 2){
			
				$replies["reply"]=array("OfficialTravelAgent"=>"Official Travel Agent","OfficialHotels"=>"Official Hotels","Visa/LOI"=>"Visa / LOI","AboutSingapore"=>"About Singapore");
			}
			$json_array["chat"]=array("user"=>$msg,"bot"=>$replies,"vid"=>$fid);
		echo json_encode($json_array);
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
				if($tid == 1 || $tid ==3 || $tid ==4 || $tid ==5 || $tid ==6 || $tid ==7 || $tid ==8 || $tid == 9)
				{
				$json_array["chat"]=array("user"=>$msg,"bot"=>$data3['answer'],"nid"=>$id);	
				echo json_encode($json_array);
				}
				elseif($tid == 2)
				{
				
					$replies["reply"]=array("Pre-registration status"=>"Pre-registration status","Why rejected"=>"Why rejected","How to appeal"=>"How to appeal","Resend confirmation email"=>"Resend confirmation email","Business Matching"=>"Business Matching");
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
			else
				{
				$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies);	
		echo json_encode($json_array);
				}
			}
			
		
		
		else
		{	
		$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies);	
		echo json_encode($json_array);
		}
	}
	}
		else
		{
		$replies["reply"]=array("ExhibitionRegistration"=>"Exhibition Registration","Overseasexhibitor"=>"Overseas Exhibitor");
		$json_array["chat"]=array("user"=>$msg,"bot"=>$replies);	
		echo json_encode($json_array);
		}
		}
	else
	{
	    $id=$_REQUEST['Id'];
		$json_array["chat"]=array("user"=>$msg,"bot"=>"Sorry I am not able to get you");	
		echo json_encode($json_array);
	}
}
?>
