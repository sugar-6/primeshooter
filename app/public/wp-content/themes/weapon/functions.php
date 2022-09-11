<?php

function styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), false );
}
function main_js() {
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array(), false );
}
add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'main_js' );

function kaiza_get_root_page( $child_id, $root = true ) {
 
  if ( $child_id == false ) {
    return false;
  }
 
  while ( $child_id ) {
    $page     = get_post( $child_id );
    $result[] = $page;
    $child_id = $page->post_parent;
  }
 
  //配列を逆順に(rootを0に)
  $result = array_reverse( $result );
 
  //rootがtrueの場合0番目(rootページのみ)をセット
  if ( $root == true ) {
    $result = $result[0];
  }
 
  return $result;
}

if ( ! function_exists( 'sidebar_third_kasou' ) ){
  function sidebar_third_kasou() {
    global $post;
    $root_page = kaiza_get_root_page( $post->ID, false );
    $thePostID = $root_page[1]->ID; //第2階層ページのID取得
    $children  = wp_list_pages( 'title_li=&child_of=' . $thePostID . '&echo=0' ); //第3階層ページ取得
    $html = '';
    if ( $children ) {
      $html .= $children;
    }
    return $html;
  }
add_shortcode( 'sidebar_third_kasou', 'sidebar_third_kasou' );
}