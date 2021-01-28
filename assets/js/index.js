// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import InfiniteScroll from 'infinite-scroll';

$(function(){
  let infScroll = new InfiniteScroll('#scroll', {
    path: '.next',
    append: '.scroll-content',
    history: false,
  });
});
