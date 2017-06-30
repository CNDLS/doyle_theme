<h1><?php the_title(); ?></h1>
<span><?php foreach((get_the_category()) as $category) {
    echo $category->cat_name . 's ';
} ?></span>
