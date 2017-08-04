<?php

include "connection.php";
if(isset($_REQUEST["msg"]))
{	
	$msg=$_REQUEST["msg"];
	$qu="select * from `conversion_master` where question like '%".$msg."%'";
	$res=$con->query($qu);
	$count=$res->num_rows;
	if($count > 0)
	{
		$data=$res->fetch_assoc();
		$cid=$data["cid"];
		$json_array["chat"]=array("user"=>$msg,"bot"=>$data['answer'],"cid"=>$cid);	
		echo json_encode($json_array);
	}// cruise count if
	elseif(isset($_REQUEST['Id']) && $_REQUEST['Id']!= "")
	{
		
		$qu1="select * from `option` where question like '%".$msg."%'";
		
		$res1=$con->query($qu1);
		$count1=$res1->num_rows;
		if($count1 > 0)
		{
			$data1=$res1->fetch_assoc();
			$fid=$data1["FId"];
			$iid=$data1["Id"];
			$qu2="select * from `qa` where Id='$fid'";
			$res2=$con->query($qu2);
			$count2=$res2->num_rows;
			if($count2 > 0)
			{
				
				$data2=$res2->fetch_assoc();
				$id=$data2['Id'];
				$json_array["chat"]=array("user"=>$msg,"bot"=>$data2['Msg']					,"nid"=>$iid);	
				echo json_encode($json_array);
			}
			
		}
		elseif(isset($_REQUEST['id']) && $_REQUEST['id']!= "")
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
					$useid=$_REQUEST['UId'];
					$msg=$_REQUEST["msg"];
					$qu5="select * from `registration` where Email='$msg' and UId='$useid'";
					$res5=$con->query($qu5);
					$count5=$res5->num_rows;
					$qid=$_REQUEST['id'];
					
					if($count5>0 && $qid == 1)
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
					else if($count5>0 && $qid == 2)
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
					else if($qid == 3)
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
		$json_array["chat"]=array("user"=>$msg,"bot"=>"Hi, Choose from following option.<br>
1. Lost Password<br>
2. Why I rejected<br>
3. FAQ");	
		echo json_encode($json_array);
		}
	}
	else
	{
		$json_array["chat"]=array("user"=>$msg,"bot"=>"Sorry ,I am not able to get you.");	
		echo json_encode($json_array);
	}
}
?>