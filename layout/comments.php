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
				<div class="user-comment">
					<img src="static/img/default.jpg" />
					<span class="author">Jacob Vickers</span>
					<span class="timestamp">2 days ago</span>
					<div class="body">sample_comment~~~
						1234
						5678
					</div>
					<div class="comment-controls">
						<div class="upvote">upvote</div>
						|
						<div class="downvote">downvoate</div>
						<span class="reply">Reply</span>
					</div>
					
					<div class="user-comment">
						<img src="static/img/default.jpg" />
						<span class="author">Jacob Vickers</span>
						<span class="timestamp">2 days ago</span>
						<div class="body">sample_comment~~~
							1234
							5678
						</div>
						<div class="comment-controls">
							<div class="upvote">upvote</div>
							|
							<div class="downvote">downvoate</div>
							<span class="reply">Reply</span>
						</div>
						
						
						<div class="user-comment">
							<img src="static/img/default.jpg" />
							<span class="author">Jacob Vickers</span>
							<span class="timestamp">2 days ago</span>
							<div class="body">sample_comment~~~
								1234
								5678
							</div>
							<div class="comment-controls">
								<div class="upvote">upvote</div>
								|
								<div class="downvote">downvoate</div>
								<span class="reply">Reply</span>
							</div>
						
						</div>
					</div>
				</div>
				<div class="user-comment">
					<img src="static/img/default.jpg" />
					<span class="author">Jacob Vickers</span>
					<span class="timestamp">2 days ago</span>
					<div class="body">sample_comment~~~
						1234
						5678
					</div>
					<div class="comment-controls">
						<div class="upvote">upvote</div>
						|
						<div class="downvote">downvoate</div>
						<span class="reply">Reply</span>
					</div>
				
				</div>
			</div>
		</div>
		<?php
	}
?>