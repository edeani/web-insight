<?php /* Template Name: articles */ ?>

<?php get_header(); ?>

 <!-- Menu OffCanvas right close -->

        <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Art&iacute;culos Publicados</h1>
                        <ul class="breadcrumbs">
                            <li><a href="index.html">Home</a></li>
                            <b>/</b>
                            <li class="active">Art&iacute;culos Publicados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- content begin -->
        <div id="content" style="padding-top:20px; padding-bottom:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-list">
                          <!-- post begin -->
                        <?php
                            //$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                            $pageArticle = $_GET["pagelist"];
                            const one = 1;
                            const elements = 10;
                            const categoryArticles = "Articles";
                            if(!is_numeric($pageArticle)){
                                $pageArticle = one;  
                            }else{
                                $pageArticle=(int)$pageArticle;
                            }
                            /*$totalPostsArt = $wpdb->get_results( "SELECT COUNT(p.*) ".
                                    " FROM {$wpdb->posts} p ".
                                    " LEFT JOIN {$wpdb->term_relationships} rel ON rel.object_id = p.ID ".
                                    " LEFT JOIN {$wpdb->term_taxonomy} tax ON tax.term_taxonomy_id = rel.term_taxonomy_id ".
                                    " LEFT JOIN {$wpdb->terms} t ON t.term_id = tax.term_id ".
                                    " WHERE post_status = 'publish' ".
                                    " AND post_type = 'posts' ".
                                    " AND t.name = '".categoryArticles."' ".
                                    " AND tax.taxonomy = 'category'" );*/
                            
                            $argsWholePosts = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => categoryArticles,
                            );

                            $arr_posts_count = new WP_Query( $argsWholePosts );
                            $postExist = $arr_posts_count->have_posts();
                            //$postExist = $totalPostsArt>0;
                            $totalPostsArt = $arr_posts_count -> post_count;
                            $cantidad =0;
                            $startRow = 0;
                            if($postExist){
                                //$tam = count($arr_posts_count);
                                $cantidadBruta = $totalPostsArt / elements;
                                $cantidad = ceil($cantidadBruta);
                                $startRow = intval($cantidadBruta)*elements;
                                if($totalPostsArt%elements == 0){
                                    $startRow -= elements;
                                }
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'Articles',
                                    'orderby' => 'publish_date',
                                    'order' => 'DESC',
                                    'posts_per_page' => elements,
                                    'offset'=>$startRow,
                                    //'paged' => $paged,
                                );

                                $arr_posts = new WP_Query( $args );
                                while ( $arr_posts->have_posts() ) :
                                    $arr_posts->the_post();
                            
                           
                            
                           
                            
                        ?>
                                <article>
                                 <?php the_content(); ?>
                                </article>
                            <!-- post close -->
                        <?php
                                endwhile;
                               
                            }//ENDIF   
                        ?>
                        </div>

                    <!-- pagination begin -->
                    <?php
                    /*wp_pagenavi(array(
                        'query' => $arr_posts,
                        )
                    );*/
                    ?>
                    <div class="pagination-ourter text-center">
                        <ul class="pagination">
                            <?php
                                if($cantidad>1){
                                    for($currentPage=1;$currentPage<=$cantidad;$currentPage++){
                                        if($currentPage==$pageArticle){
                                            echo '<li><span class="page-numbers current">'.$currentPage.'</span></li>';
                                        }else{
                                            echo '<li><a class="page-numbers" href="/articulos-publicados/?pagelist='.$currentPage.'">'.$currentPage.'</a></li>';
                                        }
                                    }
                                }
                            ?>
                            <!--li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#">4</a></li>
                            <li><a class="page-numbers" href="#">5</a></li>
                            <li><a class="page-numbers" href="#">...</a></li>
                            <li><a class="page-numbers" href="#">25</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li-->
                        </ul>
                    </div>
                    <!-- pagination close -->

                </div>
            </div>
        </div>
        <!-- content close -->

<?php get_footer(); ?>