<div class="information-category">
                <div class="category-nav">

                <ul class="category-nav__menu">
                <a class="menu-list__item <? if (get_the_ID() == 11) echo "active" ?>" href="<?php echo get_page_link( 11 ); ?>">Основные сведения</a>
                    <?php
                    $mypages = get_pages( [
                        'parent' => 11,
                        'sort_column' => 'title',
                        'sort_order' => 'asc'
                    ] );
                    
                    foreach( $mypages as $page ) {
                    ?>
                        <li class="nav__menu-list">
                            <a class="menu-list__item <? if (get_the_ID() == $page->ID) echo "active" ?>" href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
                        </li>
                    <?}?>

                    </ul>
            </div>