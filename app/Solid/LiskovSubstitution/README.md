-   This principle was introduced by Barbara Liskov in her conference keynote
    "data abstraction" in 1987
-   It is the extension of the open/closed principle

## Rules

-   Parameter types in a method of a child class must match the parameter types in
    the parent class
-   Method return type must match the method return type of the parent class
-   Preconditions cannot strengthened by the child class
-   Postconditions cannot be weakened in the child class
-   Exceptions thrown by the child method must be the same as from an exception
    thrown by the parent method
-   Invariants of a superclass must be preserved

https://www.youtube.com/watch?v=Vq-dJr1DGwk
