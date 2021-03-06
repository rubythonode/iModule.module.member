<div class="info">
	<div class="photo"><img src="<?php echo $member->photo; ?>" alt="<?php echo $member->nickname; ?>"></div>
	<div class="detail">
		<div class="nickname">
			<span class="reg_date">since <?php echo GetTime('y.m.d',$member->reg_date); ?></span><?php echo $member->nickname; ?>
		</div>
		
		<div class="level">
			<div class="text">LV.<b><?php echo $member->level->level; ?></b></div>
			<div class="graph">
				<div class="bar">
					<div class="percentage" style="width:<?php echo $member->level->exp / $member->level->next * 100; ?>%;"></div>
					
					<div class="levelDetail">
						<div class="arrowBox"><?php echo number_format($member->level->exp); ?>/<?php echo number_format($member->level->next); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="blocks">
	<div class="item">
		<i class="fa fa-inbox"></i> <?php echo $Widget->getText('messagebox/title'); ?> : <span class="number"><b>0</b>/1,000</span>
	</div>
	<div class="item">
		<i class="fa fa-rss"></i> <?php echo $Widget->getText('push/title'); ?> : <span class="number"><b>5</b>/1,000</span>
	</div>
</div>

<div class="blocks">
	<div class="item">
		<i class="fa fa-rub"></i> <?php echo $Widget->getText('info/point'); ?> : <span class="number"><b><?php echo number_format($member->point); ?></b></span>
	</div>
	<div class="item">
		<i class="fa fa-trophy"></i> <?php echo $Widget->getText('info/exp'); ?> : <span class="number"><b>0</b>/<?php echo number_format($member->exp); ?></span>
	</div>
</div>

<button type="submit" class="btn btnRed" data-loading="<?php echo $Widget->getText('login/logout_loading'); ?>" onclick="Member.logout(this);"><i class="fa fa-power-off"></i> <?php echo $Widget->getText('login/logout'); ?></button>

<div class="bottom">
	<div class="mypage"><a href="<?php echo $mypageUrl; ?>"><?php echo $Widget->getText('mypage/title'); ?></a></div>
	<div class="link">
		<a href="<?php echo $modifyUrl; ?>"><?php echo $Widget->getText('modify/title'); ?></a>
		<span>|</span>
		<a href="<?php echo $configUrl; ?>"><?php echo $Widget->getText('config/title'); ?></a>
	</div>
</div>