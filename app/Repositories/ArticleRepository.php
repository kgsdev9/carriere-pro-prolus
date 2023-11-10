<?php

namespace App\Repositories;

use App\Models\Article;


class ArticleRepository
{
 protected $article ;

 public function __construct(Article $article)
 {
    return $this->article = $article ;

 }

 public function randomFilterArticleEventByNotNull() {
    return $this->article->where('event', 'evenement')
                        ->orderByDesc('created_at')
                        ->paginate(10);
 }


 public function all() {
    return $this->article->all();
 }

 public function collectionArticleFilterEventNull() {
    return $this->article->where('event', NULL)
                          ->orderByDesc('created_at')
                          ->paginate(10);
 }


 public function collectionArticle() {
    return $this->article->where('event', NULL)
                         ->orderByDesc('created_at')
                         ->paginate(10);
 }


 public function single($slug) {
    return $this->article->where('slug', $slug)->first();
 }



}
