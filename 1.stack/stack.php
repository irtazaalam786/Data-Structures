<?php
class ReadingList
{
    protected $stack;
    protected $limit;
    protected $top;
    
    public function __construct($limit = 10) {
        $this->stack = array();
        $this->limit = $limit;
        $this->top = -1;
    }

    public function push($item) {
        if (count($this->stack) < $this->limit) {
            $this->top++;
            $this->stack[$this->top]=$item;
        } else {
            throw new RunTimeException('Stack is full!'); 
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
	      throw new RunTimeException('Stack is empty!');
	  } else {
          $old_top = $this->top;
          $this->top--;
            return $this->stack[$old_top];
        }
    }

    public function top() {
        return $this->stack[$this->top];
    }

    public function isEmpty() {
        return $this->top == -1;
    }
}