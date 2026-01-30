<div class="row">
							<div class="col-sm-12">
                                <?php
                                $scriptname = basename($_SERVER['PHP_SELF']);
                                $removephp = str_replace('.php','',$scriptname);
                                $replace_1 = str_replace('_1','',$removephp);
                                $replace_ = str_replace('_',' ',$replace_1);
                                $finalbd = $replace_;
                                ?>
								<h4 class="page-title" style="text-transform: uppercase;">
								    <?php echo $finalbd; ?>
								    </h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Home</a>
									</li>
									<li>
										<a style="text-transform: capitalize;" href="<?php echo str_replace('.php','',basename($_SERVER['PHP_SELF'])).'.php'; ?>"><?php echo $finalbd; ?></a>
									</li>
									
								</ol>
							</div>
						</div>