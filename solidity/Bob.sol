
pragma solidity ^0.4.15;

contract Alice { 
    function set(uint); 
    function set_fixed(int); 
}

contract Bob { 
    function set(Alice c){ 
        c.set(42); 
    }

    function set_fixed(Alice cc){ 
        cc.set_fixed(42); 
    } 
}
