In the Style.css include the various Parameters (Meta Data for the Wordpress Blog
)

Include the screenshot.png in the Themes folder of that particular Blog



Now include the Styles and scripts using register and enqueu function in functions.php and add wp_head  inside the index.php file where you are loading the css files


Need to add the 

the_title
 the_excerpt 


 the_content

 the_post_thumbnail 

 And most important you need to add the image as a featured image to get it in the the_post_thumbnail form 


 add_theme_support( 'post-thumbnails' ); // Hook Necessary for FEatured images FEature in wordress Admin section


