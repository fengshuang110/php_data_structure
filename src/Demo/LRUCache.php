<?php
namespace Fengshuang\Demo;

use Fengshuang\Common\Node;

class LRUCache {
    private $capacity;
    private $list;
    /**
     * @param Integer $capacity
     */
    function __construct($capacity)
    {
        $this->capacity = $capacity;
        $this->list=new HashList();

    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key)
    {
        if($key<0) return -1;
        return $this->list->get($key);
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value)
    {
        $size=$this->list->size;
        $isHas=$this->list->checkIndex($key);
        if($isHas || $size+1 > $this->capacity){
            $this->list->removeNode($key);
        }
        $this->list->addAsHead($key,$value);
    }
}



class HashList {
    public $head;
    public $tail;
    public $size;
    public $buckets=[];

    public function __construct(Node $head = null,Node $tail = null)
    {
        $this->head=$head;
        $this->tail=$tail;
        $this->size=0;
    }

    //检查键是否存在
    public function checkIndex($key)
    {
        return isset($this->buckets[$key]);

    }

    public function get($key){
        if(!isset($this->buckets[$key])) return -1;

        $this->moveToHead($this->buckets[$key]);

        return $this->buckets[$key]->val;
    }

    //新加入的节点
    public function addAsHead($key,$val)
    {
        $node=new Node($val);
        if($this->head == null) {
            $this->head = $node;
        }
        if($this->tail==null && $this->head !=null){
            $this->tail=$this->head;
            $this->tail->next=null;
            $this->tail->pre=$node;
        }

        $node->pre=null;
        $node->next=$this->head;
        $this->head->pre=$node;
        $this->head=$node;
        $node->key=$key;
        $this->buckets[$key]=$node;
        $this->size++;
    }

    //移除指针(已存在的键值对或者删除最近最少使用原则)
    public function removeNode($key)
    {
        $current=$this->head;
        for($i=1;$i<$this->size;$i++){
            if($current->key==$key) break;
            $current=$current->next;
        }
        unset($this->buckets[$current->key]);
        //调整指针
        if($current->pre==null){
            $current->next->pre=null;
            $this->head=$current->next;
        }else if($current->next ==null){
            $current->pre->next=null;
            $current=$current->pre;
            $this->tail=$current;
        }else{
            $current->pre->next=$current->next;
            $current->next->pre=$current->pre;
            $current=null;
        }
        $this->size--;

    }

    //把对应的节点应到链表头部(最近get或者刚刚put进去的node节点)
    public function moveToHead(Node $node)
    {
        if($node==$this->head) return ;
        //调整前后指针指向
        $node->pre->next=$node->next;
        $node->next->pre=$node->pre;
        $node->next=$this->head;
        $this->head->pre=$node;
        $this->head=$node;
        $node->pre=null;
    }
}

