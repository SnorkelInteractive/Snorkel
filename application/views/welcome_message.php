				<hr/>
				<section>
					<h3>Recent Work</h3>
                    <ul class="thumbnails">
					<? foreach ($sites->result() as $row){ ?>
                        <li class="span3">
						    <div class="thumbnail">
                                <img src="http://api.thumbalizr.com/?api_key=79c52c4c05ce6bfaecc935d67e842b2f&url=<?=$row->siteurl;?>" alt="<?=$row->sitename;?>" title="<?=$row->sitename;?>" />
                                <h4><?=$row->sitename;?></h4>
                                <p><a href="<?=$row->siteurl;?>" target="_blank" class="btn">View Site <i class="icon-share-alt"></i></a></p>
						</div>
					<? } ?>
                    </ul>
				</section>