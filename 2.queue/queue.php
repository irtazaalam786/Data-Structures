<?php

class Queue{
    protected $queue_array;
    protected $front;
    protected $rear;
    protected $limit;

    public function __construct($limit = 4) {
        $this->queue_array = array();
        $this->front = 0;
        $this->rear = -1;
        $this->limit=$limit;
    }

    public function queue($item){
        if($this->rear < $this->limit-1){
            $this->rear++;
            $this->queue_array[$this->rear]=$item;
        }else if($this->rear == $this->limit-1){
            $this->front=0;
            $this->rear=0;
            $this->queue_array[$this->rear]=$item;
        }else{
            throw new RuntimeException('Limit is reached');
        }
    }

    public function de_queue(){
        if(!$this->isEmpty()){
            $old_front = $this->front;
            $this->front++;
            return $this->queue_array[$old_front];
        }
        throw new RuntimeException('Empty');
    }

    public function isEmpty(){
        return $this->front == $this->limit;
    }
}

?>