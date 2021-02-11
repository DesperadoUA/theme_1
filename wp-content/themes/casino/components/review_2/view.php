<section class=" review_2">
    <div class="comments container" itemprop="review" itemscope itemtype="http://schema.org/Review">
        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
            <meta itemprop="name" content="<?= $data['title']; ?>"/>
        </div>
        <div class="comments_title_2" itemprop="name">Отзывы</div>
        <?php
        for($i=0; $i<count($data['comment_content']); $i++){
            echo "<div class='comments_row_2'>
						 <div class='comments_row_info'>
							 <div class='comments_row_name_2' itemprop = 'author'>{$data['comment_author'][$i]}</div>
							 <div class='comments_row_data_2' itemprop = 'datePublished' content='{$data['comment_date'][$i]}'>{$data['comment_date'][$i]}</div>
						 </div>
							 <div class='comments_row_desc' itemprop='reviewBody'>{$data['comment_content'][$i]}</div>";
            if($settings['post_type'] !== 'category') {
                echo "<div class='comments_row_answer_link'><a 
								 href='#comment_form_ajax'
								 data-parentid='{$data['id'][$i]}'
								 class='parent_link_comment'
								 >Ответить</a></div>";
            }


            for($j=0; $j<count($data_children['id']); $j++) {
                if($data['id'][$i] === $data_children['id_parent'][$j]) {
                    echo "<div class='comments_row comments_row_answer'>
									   <div class='comments_row_info'>
											 <div class='comments_row_name_2' itemprop='author'>{$data_children['comment_author'][$j]}</div>
											 <div class='comments_row_data_2' itemprop='datePublished' 
											 content='{$data_children['comment_date'][$j]}'>{$data_children['comment_date'][$j]}</div>
										 </div> 
										 <div class='comments_row_desc' itemprop='reviewBody'>{$data_children['comment_content'][$j]}</div>
								</div>";
                }

            }

            echo "</div>";
        }
        ?>
        <?php if(!IS_AMP) include 'form.php'; ?>
    </div>
</section>