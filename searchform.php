<form role="search" method="get" class="search-form d-flex" action="<?php echo home_url('/'); ?>">
    <input type="search" class="form-control search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="btn btn-outline-success search-submit">
        <img src="<?php echo get_template_directory_uri(); ?>/images/search-line-icon.png" alt="Search Icon">
    </button>
</form>