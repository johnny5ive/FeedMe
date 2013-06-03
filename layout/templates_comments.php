<?php
	function article_comments($articleID){
		/*logic here*/
		?>
		<div id="comments">
			<div class="comment-submit">
				<div class="count">{%% getCommentCount(articleID) %%} comments</div>
				<div class="comment-form">
					<form>
						<img src="{%% Users.picture %%}" alt="{%% Users.picture %%}">
						<textarea placeholder="Got something to say? Comment here..."></textarea>
						<input type="submit" value="&crarr;" class="btn btn-primary">
					</form>
				</div>
			</div>
			<hr class="separator">
			{%% getComments(articleID) %%}
		</div>
		<?php
	}
?>