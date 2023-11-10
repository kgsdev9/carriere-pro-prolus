<?php

namespace App\Services;

use App\Repositories\ArticleRepository;



class ArticleService
{
 public $articleRepository ;

 public function __construct(ArticleRepository $articleRepository)
 {
    return $this->articleRepository= $articleRepository ;

 }

 public function randomFilterArticleEventByNotNull() {
    return $this->articleRepository->randomFilterArticleEventByNotNull();
 }

 public function all() {
    return $this->articleRepository->all();
 }

 public function collectionArticleFilterEventNull() {
    return $this->articleRepository->collectionArticleFilterEventNull();
 }

 public function single($slug) {
    return $this->articleRepository->single($slug);
 }


 public function collectionArticle() {
    return $this->articleRepository->collectionArticle();
 }

}
