<?php if (!(current_user_can('level_0'))){ ?>
	<div class="login-members">
		<h1 class="sidebar-header">Member Login</h1>
		<div class="small-holder">
				<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post" class="login-form">
					<p><input type="text" class="login-txtbox" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" name="log" id="log" placeholder="Username" title="Username" size="20" autofocus/></p>
					<p><input type="password" class="login-txtbox" name="pwd" id="pwd" placeholder="Password" title="Password" size="20" /></p>
					<ul>
						<li><input type="submit" name="submit" value="Login" class="button login-btn" /></li>
						<li><input type="button" value="Register"  onClick="window.location.href='http://ashram-silenthunters.x10.mx/register/'" class="register-btn"></li>
					</ul>
						<div class="clear"></div>
					<div class="lost-password">
						Lost your Password?<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">&nbsp;Click Here</a>
					</div>
				</form> 
		</div>
		<div class="small-shadow"></div>
	</div>
	
<?php } else { ?>

	<div class="login-members">
		<h1 class="sidebar-header"><?php global $current_user; get_currentuserinfo(); echo 'Hello&nbsp;' . $current_user->user_login; ?></h1>
		<div class="small-holder">
			
			<div class="current-user">
				<div class="current-user-avatar">
					<?php
                    $user_roles = $current_user->roles;
                    $user_role = array_shift($user_roles);
                    
                    if ($user_role == 'administrator') : ?>
                    
                        <a href="<?php bloginfo('url')?>/wp-admin/">
                            <figure><?php
                               global $current_user;
                               get_currentuserinfo();
                               echo get_avatar( $current_user->ID, 76 );
                            ?>
                        </a></figure>
                                            
                    <?php else :?>
						<figure><?php
                            global $current_user;
                            get_currentuserinfo();
                            echo get_avatar( $current_user->ID, 76 );
                        ?></figure>                                       
                    <?php endif ?>                        
				</div><!--current-user-avatar-->
                
                <div class="current-user-info">
                	<ul>
						<li id="user_display_role">
						<?php
							$user_roles = $current_user->roles;
							$user_role = array_shift($user_roles);
							
							if ($user_role == 'administrator') {
							echo 'Administrator';
							} elseif ($user_role == 'editor') {
							echo 'Editor';
							} elseif ($user_role == 'author') {
							echo 'Author';
							} elseif ($user_role == 'contributor') {
							echo 'Contributor';
							} elseif ($user_role == 'subscriber') {
							echo 'Subscriber';
							} else {
							echo '<strong>' . $user_role . '</strong>';
							}
                        ?> 						                        
                        </li>
                        
						<?php
							$user_roles = $current_user->roles;
							$user_role = array_shift($user_roles);
							
							if (($user_role == 'administrator') || ($user_role == 'editor') || ($user_role == 'author') || ($user_role == 'contributor')) : ?>
                            
                            <li id="add_new_post"><a href="<?php bloginfo('url')?>/wp-admin/post-new.php" class="add-new-post">Add New Post</a></li>                            
                         
                         <?php else :?>
                         
                         	<li id="ask_to_post">Only Contributors, Authors, Editors and Admin can Post Articles.</li>
                            
                         <?php endif; ?>						
                    </ul>					
                </div><!--current-user-info-->
                
                	<div class="clear"></div>
                       				
				<div class="current-user-panel">
					<ul>
                        <li><a href="<?php bloginfo('url')?>/wp-admin/profile.php">Profile</a></li>
                        <li><a href="<?php bloginfo('url')?>/<?php global $current_user; get_currentuserinfo(); echo $current_user->user_login; ?>/profile/change-avatar/">Change Avatar</a></li>                        
                        <li>
							<?php if(is_front_page() || is_home()) { ?>
                            
                                <a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a>
                                
                            <?php } elseif ($wp_query->is_posts_page) { ?>
                            
                            	<a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a>
                            
                            <?php } else { ?>            
                                            
                                <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a>
                                
                            <?php } ?>
                        </li>
					</ul>
				</div><!--current-user-panel-->                  

			</div><!--current-user-->
			
		</div>
		<div class="small-shadow"></div>
	</div>
	
<?php }?>