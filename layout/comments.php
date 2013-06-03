<?php
	function article_comments($articleID){
		/*logic here*/
		?>
		<div id="comments">
			<div class="comment-submit">
				<div class="count">4 comments</div>
				<div class="comment-form">
					<form>
						<img src="static/img/default.jpg">
						<textarea placeholder="Got something to say? Comment here..."></textarea>
						<input type="submit" value="&crarr;" class="btn btn-primary">
					</form>
				</div>
			</div>
			<hr class="separator">
			<div class="comments">
				<img src="static/img/comments.png" style="margin: 15px;">
				<div class="user-comment">
					
					<div class="user-comment">
						
						<div class="user-comment">
						
						</div>
					</div>
				</div>
				<div class="user-comment">
				
				</div>
			</div>
		</div>
		<?php
	}
?>