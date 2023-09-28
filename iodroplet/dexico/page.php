<?php 

the_post();
?>
<body >
<div class="container">
<?php  
if(is_page('PROPERTY +'))
{
    get_template_part('page-property');
}elseif(is_page('ABOUT +'))
{
    get_template_part('page-about');
}
elseif(is_page('CONTACTS +'))
{
    get_template_part('page-contact');
}
elseif(is_page('BLOG +'))
{
    get_template_part('page-blog');
}
elseif(is_page('Property List'))
{
    get_template_part('page-propertylist');
}
elseif(is_page('Property Details'))
{
    get_template_part('page-propertydetails');
}
elseif(is_page('Property Details Full Width'))
{
    get_template_part('page-propertydetailsfullwidth');
}
elseif(is_page('Agents'))
{
    get_template_part('page-agents');
}
elseif(is_page('404'))
{
    get_template_part('page-404');
}
elseif(is_page('Home 2'))
{
    get_template_part('page-home2');
}
elseif(is_page('Home 3'))
{
    get_template_part('page-home3');
}
elseif(is_page('Home 4'))
{
    get_template_part('page-home4');
}
else{
    if (have_posts()):
        while(have_posts()): the_post();
        the_content();
    endwhile;
endif;
}
?>
</div>
  
</body>