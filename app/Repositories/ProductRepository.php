<?php

namespace App\Repositories;

use DB;

class ProductRepository implements ProductRepositoryInterface {
  public function get() {
    $results = DB::select('select *
                            from products');
    return $results;
  }

  public function getPopular() {
    $results = DB::select('select p.id, p.name, p.price, p.pic, sum(ol.quantity) 
                            from products p 
                            join orderLists ol on p.id = ol.productId 
                            group by p.id, p.name, p.price, p.pic 
                            having sum(ol.quantity) >= 2
                            order by 5 DESC');
    return $results;
  }

  public function getByName($name) {
    $results = DB::select('select * 
                            from products
                            where name like ?', [$name]);
    return $results;
  }

  public function getById($id) {
    $results = DB::select('select p.*, s.name sname, c.name cname, b.name bname
                            from products p
                            join shops s on p.shopId = s.id
                            join catalogs c on p.catalogId = c.id
                            left join brands b on p.brandId = b.id
                            where p.id = ?', [$id]);
    return $results;
  }

  public function getBrought($id) {
    $results = DB::select('select sum(ol.quantity) as brought
                            from orderLists ol
                            where ol.productId = ?
                            group by ol.productId', [$id]);
    return $results;
  }

  public function getCats() {
    $results = DB::select('select * 
                            from catalogs');
    return $results;
  }

  public function getCat($id) {
    $results = DB::select('select * 
                            from products 
                            where catalogId = ?', [$id]);
    return $results;
  }

  public function getByShopId($id) {
    $results = DB::select('select *
                            from products
                            where shopId = ?', [$id]);
    return $results;
  }

  public function getBrands() {
    $results = DB::select('select * 
                            from brands');
    return $results;
  }

  public function getBrand($id) {
    $results = null;
    if($id == 0) {
      $results = DB::select('select *
                              from products
                              where brandId is null');
    }
    else {
      $results = DB::select('select *
                              from products
                              where brandId = ?', [$id]);
    }
    return $results;
  }
}