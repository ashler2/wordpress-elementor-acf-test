## Example of extending a theme with Wordpress Elementor and ACf

To set up on Own theme you might need to change post_select.js url "http://wp-elementor/wp-admin/admin-ajax.php?action=get_post_types" for the current sites url
Could do with a tidy up but basic example is there.

## TODO:

- Look into the post_select.js this might not be needed and can be added in the .php file to remove the need for the api.
- Tidy up render, add the option for tags. - If this is added it makes sense to keep the api action and get tags for that category.
- Could add extra things in like limit of posts.
- Look at adding vue into this.
- Look get_sub_fields too to make sure ACF repeaters work(sure it will)
