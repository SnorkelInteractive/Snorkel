				<? foreach ($sites->result() as $row){ ?>
					<hr/>
					<div class="doc-section">
						<div class="seven columns omega">
                            <img src="http://api.thumbalizr.com/?api_key=79c52c4c05ce6bfaecc935d67e842b2f&url=<?=$row->siteurl;?>" alt="<?=$row->sitename;?>" title="<?=$row->sitename;?>" />
							<h4><?=$row->sitename;?></h4>
							<a href="<?=$row->siteurl;?>" target="_blank"><?=$row->siteurl;?></a><br/>
							<?=$row->sitedesc?>
						</div>
					</div>
				<? } ?>