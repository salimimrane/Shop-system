				<?php
					
					require'config.php';
					

						if (isset($_POST['signin'])) 
						{						
							
							$user = $_POST['user'];
							$pass = md5($_POST['password']);
							$messeg = "";
							

							if(empty($user) || empty($pass)) 
							{
							    $messeg = "Username/Password con't be empty";

							} 
							else 
							{
							    $sql = "SELECT ID,user FROM users WHERE email=? AND password=? ";
							    $query = $conn->prepare($sql);
							    $query->execute(array($user,$pass));							    

							    if($query->rowCount() == 1) {
							    	$row = $query->fetch();
							        $_SESSION['user'] = $row['user'];
							        $_SESSION['ID'] = $row['ID'];									      
							        $_SESSION['time_start_login'] = time();
							        header('Location: display');
										exit();
							        
							        
							    } else {
							        
							        header('Location: index1.php');
										exit();
							    }
							}
								

						}
						elseif (isset($_POST['signup'])) 
						{							
							header('Location: signup.php');
     						exit();
						}
						
				?>