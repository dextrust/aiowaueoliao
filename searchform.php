<form role="search" method="get" class="search-form d-flex" action="<?php echo home_url('/'); ?>">
    <input type="search" class="search-field" placeholder="Search…" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit">Search</button>
</form>
