@extends('layout.app')
@section('title', $detailArticle->title)
@section('content')

<section class="page-title gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <h2 class="mb-0 ft-medium">Let' Start New Design in Adobe Photoshop</h2>
                    <nav class="transparent">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Blog Detail</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>

</section>



<br>

<div class="container">

    <!-- row Start -->
    <div class="row">

        <!-- Blog Detail -->
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="article_detail_wrapss single_article_wrap format-standard">
                <div class="article_body_wrap">

                    <div class="article_featured_image">
                        <img class="img-fluid" src="https://via.placeholder.com/1200x800" alt="">
                    </div>

                    <div class="article_top_info">
                        <ul class="article_middle_info">
                            <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by Rosalina Doe</a></li>
                            <li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span>45 Comments</a></li>
                        </ul>
                    </div>
                    <h2 class="post-title">Lorem ipsum dolor sit amet, cons pisicing elit, sed do.</h2>

                    <p>{!! $detailArticle->description !!}</p>


                </div>
            </div>

            <!-- Author Detail -->
            <div class="article_detail_wrapss single_article_wrap format-standard">

                <div class="article_posts_thumb">
                    <span class="img"><img class="img-fluid" src="https://via.placeholder.com/500x500" alt=""></span>
                    <h3 class="pa-name">Rosalina William</h3>
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                    <p class="pa-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>

            </div>

            <!-- Blog Comment -->
            <div class="article_detail_wrapss single_article_wrap format-standard">

                <div class="comment-area">
                    <div class="all-comments">
                        <h3 class="comments-title">05 Comments</h3>
                        <div class="comment-list">
                            <ul>
                                <li class="article_comments_wrap">
                                    <article>
                                        <div class="article_comments_thumb">
                                            <img src="https://via.placeholder.com/500x500" alt="">
                                        </div>
                                        <div class="comment-details">
                                            <div class="comment-meta">
                                                <div class="comment-left-meta">
                                                    <h4 class="author-name">Rosalina Kelian <span class="selected"><i class="fas fa-bookmark"></i></span></h4>
                                                    <div class="comment-date">19th May 2018</div>
                                                </div>
                                                <div class="comment-reply">
                                                    <a href="#" class="reply"><span class="icona"><i class="ti-back-left"></i></span> Reply</a>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                    perspiciatis unde omnis iste natus error.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="children">
                                        <li class="article_comments_wrap">
                                            <article>
                                                <div class="article_comments_thumb">
                                                    <img src="https://via.placeholder.com/500x500" alt="">
                                                </div>
                                                <div class="comment-details">
                                                    <div class="comment-meta">
                                                        <div class="comment-left-meta">
                                                            <h4 class="author-name">Rosalina Kelian</h4>
                                                            <div class="comment-date">19th May 2018</div>
                                                        </div>
                                                        <div class="comment-reply">
                                                            <a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                            perspiciatis unde omnis iste natus error.</p>
                                                    </div>
                                                </div>
                                            </article>
                                            <ul class="children">
                                                <li class="article_comments_wrap">
                                                    <article>
                                                        <div class="article_comments_thumb">
                                                            <img src="https://via.placeholder.com/500x500" alt="">
                                                        </div>
                                                        <div class="comment-details">
                                                            <div class="comment-meta">
                                                                <div class="comment-left-meta">
                                                                    <h4 class="author-name">Rosalina Kelian</h4>
                                                                    <div class="comment-date">19th May 2018</div>
                                                                </div>
                                                                <div class="comment-reply">
                                                                    <a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                                    perspiciatis unde omnis iste natus error.</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="article_comments_wrap">
                                    <article>
                                        <div class="article_comments_thumb">
                                            <img src="https://via.placeholder.com/500x500" alt="">
                                        </div>
                                        <div class="comment-details">
                                            <div class="comment-meta">
                                                <div class="comment-left-meta">
                                                    <h4 class="author-name">Rosalina Kelian</h4>
                                                    <div class="comment-date">19th May 2018</div>
                                                </div>
                                                <div class="comment-reply">
                                                    <a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                    perspiciatis unde omnis iste natus error.</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment-box submit-form">
                        <h3 class="reply-title">Post Comment</h3>
                        <div class="comment-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea name="comment" class="form-control" cols="30" rows="6" placeholder="Type your comments...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <a href="#" class="btn theme-bg text-white">Submit Now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <!-- Single blog Grid -->
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">

            <!-- Searchbard -->
            <div class="single_widgets widget_search">
                <h4 class="title">Search</h4>
                <form action="#" class="sidebar-search-form">
                    <input type="search" name="search" placeholder="Search..">
                    <button type="submit"><i class="ti-search"></i></button>
                </form>
            </div>

            <!-- Categories -->
            <div class="single_widgets widget_category">
                <h4 class="title">Categories</h4>
                <ul>
                    <li><a href="#">Lifestyle <span>09</span></a></li>
                    <li><a href="#">Travel <span>12</span></a></li>
                    <li><a href="#">Fashion <span>19</span></a>
                    </li><li><a href="#">Branding <span>17</span></a></li>
                    <li><a href="#">Music <span>10</span></a></li>
                </ul>
            </div>

            <!-- Trending Posts -->
            <div class="single_widgets widget_thumb_post">
                <h4 class="title">Trending Posts</h4>
                <ul>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Alonso Kelina Falao Asiano Pero</a>
                            <span class="post-date"><i class="ti-calendar"></i>10 Min ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">It is a long established fact that a reader</a>
                            <span class="post-date"><i class="ti-calendar"></i>2 Hours ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Many desktop publish packages and web</a>
                            <span class="post-date"><i class="ti-calendar"></i>4 Hours ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Various versions have evolved over the years</a>
                            <span class="post-date"><i class="ti-calendar"></i>7 Hours ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Photo booth anim 8-bit PBR 3 wolf moon.</a>
                            <span class="post-date"><i class="ti-calendar"></i>3 Days ago</span>
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Tags Cloud -->
            <div class="single_widgets widget_tags">
                <h4 class="title">Tags Cloud</h4>
                <ul>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Music</a></li>
                </ul>
            </div>

        </div>

    </div>
    <!-- /row -->

</div>





@endsection
