<form class="p-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="search" class="c-search-area" placeholder="<?php if(!is_search()){ echo 'キーワード';} ?>" value="<?php if(is_search()){ echo esc_attr(get_search_query());} ?>" name="s" id="s">
  <button class="c-button" type="submit" value="検索">検索</button>
  <div class="c-search--icon"></div>
</form>